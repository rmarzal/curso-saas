# Curso SaaS · Next.js

Migración Next.js 16 (App Router) + TypeScript + Tailwind v4 del curso SaaS,
originalmente en PHP en `../servidor/metricas/`.

## Arquitectura

```
src/
├── app/
│   ├── layout.tsx                    ← root layout · 3 fuentes (Geist, Instrument Serif, JetBrains Mono)
│   ├── globals.css                   ← design system NextScenario · @theme tokens
│   ├── login/page.tsx                ← login con form action="/api/auth/login"
│   ├── api/auth/
│   │   ├── login/route.ts            ← POST · valida + crea sesión + redirect
│   │   └── logout/route.ts           ← GET/POST · destruye sesión + redirect
│   ├── (protected)/                  ← route group · session guard en layout
│   │   ├── layout.tsx                ← chequea sesión, redirige a /login si no
│   │   ├── page.tsx                  ← índice del curso (11 módulos)
│   │   └── [slug]/page.tsx           ← módulo dinámico · usa moduleContent registry
│   └── contenido/[slug]/page.tsx     ← infografías estáticas (público, sin sesión)
├── components/
│   ├── Nav.tsx                       ← logo NS + session pill + logout
│   ├── Footer.tsx                    ← mono uppercase
│   ├── ModuleNav.tsx                 ← prev/inicio/next nav · lee de getPrevNext()
│   ├── ModuleShell.tsx               ← hero + content-card + ModuleNav
│   ├── VideoBlock.tsx                ← iframe YouTube + caption mono
│   ├── Resource.tsx                  ← link card (default/primary/accent)
│   └── ModuleParts.tsx               ← Topics, Reflection, Callout, CtaBox, etc
├── lib/
│   ├── session.ts                    ← iron-session config
│   ├── users.ts                      ← lista hardcodeada · override por AUTH_USERS_JSON env
│   └── modules.ts                    ← orden canónico de los 11 módulos + helpers
└── modules-content/
    ├── index.tsx                     ← registry slug → component
    └── module-{00-10}.tsx            ← 11 archivos · contenido específico de cada módulo
```

## Variables de entorno

Copia `.env.local.example` a `.env.local` y rellena:

```env
SESSION_PASSWORD=<string-de-32+-caracteres>
AUTH_USERS_JSON=<JSON-stringify-opcional-de-{email:password}>
```

Generar nuevo `SESSION_PASSWORD` aleatorio:

```bash
openssl rand -base64 32
```

## Desarrollo local

```bash
npm install
npm run dev
```

Abre <http://localhost:3000>. Te redirige a `/login`.

Credenciales de test (las mismas que la versión PHP):

```
magi@funnelcracks.com / 1M2s45d$marys
```

Resto de credenciales en `src/lib/users.ts`.

## Build de producción

```bash
npm run build
npm run start
```

## Deploy a Vercel

### Opción 1 · Desde Vercel UI (recomendado)

1. Ve a <https://vercel.com/new>.
2. **Import Git Repository** → selecciona `rmarzal/curso-saas`.
3. Configuración:
   - **Framework**: Next.js (auto-detectado)
   - **Root Directory**: `next-app/` (importante)
   - **Build Command**: `npm run build` (default)
   - **Output Directory**: `.next` (default)
4. **Environment Variables**:
   - `SESSION_PASSWORD` → genera con `openssl rand -base64 32`
   - `AUTH_USERS_JSON` (opcional) → JSON con users override
5. **Deploy** → Vercel construye y publica automáticamente.

A partir de ese momento, cada push a `migration/nextjs` (o `main` si lo
configuras así) genera un deploy nuevo. Cada PR tiene su preview URL.

### Opción 2 · Vía Vercel CLI

```bash
npm i -g vercel
cd next-app
vercel             # primera vez · te pregunta config
vercel --prod      # deploy a prod
```

## Migración PHP → Next.js · qué se ha hecho

| PHP (legacy) | Next.js |
|---|---|
| `login.php` | `app/login/page.tsx` |
| `check_login.php` (POST) | `app/api/auth/login/route.ts` |
| `logout.php` | `app/api/auth/logout/route.ts` |
| `pro/embed.php` | `app/(protected)/page.tsx` |
| `pro/_partials/head.php` | `components/ModuleShell.tsx` + `Nav.tsx` |
| `pro/_partials/foot.php` | `components/Footer.tsx` |
| `pro/{11 módulos}.php` | `app/(protected)/[slug]/page.tsx` + `modules-content/module-{00-10}.tsx` |
| `*.html` (15 infografías) | `app/contenido/[slug]/page.tsx` (stubs · pendiente migrar contenido completo) |
| `_design.css` + `head.php` styles | `app/globals.css` con `@theme` Tailwind v4 |
| Sesiones PHP nativas | `iron-session` (cookie firmada, AES-256-GCM) |
| `.htaccess` Cache-Control | Next.js cache headers automáticos |
| Hardcoded `$users` PHP | `lib/users.ts` + opcional `AUTH_USERS_JSON` env |

## Tests humo

Probado en local con `npm run dev` y curl:

- `/` sin sesión → 307 → `/login` ✓
- `/login` → 200 con diseño NS (Geist + serif italic + logo NS + bg cream) ✓
- POST `/api/auth/login` con creds válidas → 303 → `/` + cookie set ✓
- POST `/api/auth/login` con creds inválidas → 303 → `/login?error=1` ✓
- `/` con sesión → 200 con índice (11 módulos + 2 extras + username pill) ✓
- `/pricing` con sesión → 200 con módulo (hero + content + prev/next nav) ✓
- `/api/auth/logout` → 303 → `/login` + cookie destroyed ✓
- `/` tras logout → 307 → `/login` ✓

## Pendiente / mejoras

- Migrar el contenido completo de las 15 HTMLs estáticas a JSX/MDX (ahora son stubs con título y descripción).
- Tests con Playwright o Vitest (login flow, módulos, logout).
- Mover PDFs (estudio_cohortes.pdf, retencion_engagement.pdf) a `public/assets/`.
- Considerar autenticación con email magic-link (NextAuth) en lugar de password hardcodeado.

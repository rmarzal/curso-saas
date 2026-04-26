# Curso SaaS · Memoria del proyecto

Plataforma de cursos online de Rubén Marzal sobre métricas SaaS y modelos
financieros, en `cursos.nextscenario.com/metricas/`. PHP + HTML estático
sobre hosting compartido (LiteSpeed + nginx microcache).

## Estructura del repo

```
servidor/                          ← lo que se sube a producción
├── README.md                      ← instrucciones de subida + checklist
└── metricas/                      ← arrastrar a /home2/bicilink/public_html/cursos.nextscenario.com/
    ├── .htaccess                  ← Cache-Control para HTML/PHP/assets (CRÍTICO subirlo)
    ├── _design.css                ← design system NextScenario compartido por las 15 HTMLs
    ├── login.php                  ← entrada (rediseñada con NS · Geist/Inter/serif italic)
    ├── check_login.php            ← valida + redirige a embed.php (credenciales hardcodeadas)
    ├── logout.php                 ← destruye sesión
    ├── *.html (15 archivos)       ← infografías estáticas rediseñadas en estilo NS
    └── pro/                       ← contenido protegido (requiere sesión)
        ├── _partials/
        │   ├── head.php           ← shell común: nav, hero, prev/inicio/next nav, $module_order
        │   └── foot.php           ← shell común: footer
        ├── embed.php              ← índice del curso (11 módulos + 2 extras)
        ├── index.php              ← redirige a embed.php
        ├── 11 archivos *.php      ← módulos del curso (que_empresa_quieres_construir.php, etc.)
        └── assets/                ← PDFs (estudio_cohortes 1.1MB, retencion_engagement 4.6MB) + main_saas.jpg

contenido notion curso saas/       ← export Notion original (no se sube)
cursos.nextscenario.com/           ← copia local opcional · no canónica
```

## Cómo subir a producción

Destino:
```
/home2/bicilink/public_html/cursos.nextscenario.com/metricas/
```

**Recomendación:** comprimir `servidor/metricas/` → `metricas.zip` → subir vía cPanel
File Manager → Extract con "Replace existing files". FTP/FileZilla a veces falla
silenciosamente con archivos grandes (los PDFs) o con dotfiles (`.htaccess`).

Asegurar que se suben:
- `.htaccess` (FileZilla puede ocultarlo · activa "show hidden files")
- `_design.css` (24 KB · sin él las HTMLs salen sin estilos)
- PDFs en `pro/assets/` (1.1 MB y 4.6 MB)

## Credenciales (hardcodeadas en `check_login.php`)

6 emails autorizados. Si necesitas añadir/quitar, edita el array `$users` en
`servidor/metricas/check_login.php`. **Cuidado al subir el archivo** — sobrescribe
la lista de producción. Si en producción hay más usuarios, descárgalo primero,
fusiona, y resube.

Cuenta de test que uso para verificación: `magi@funnelcracks.com` / `1M2s45d$marys`.

## Sistema de diseño NextScenario

Replicado de `nextscenario-web.vercel.app` (también de Rubén). El stylesheet vive
en dos sitios:

- `servidor/metricas/pro/_partials/head.php` — para módulos PHP del curso
- `servidor/metricas/_design.css` — para las 15 HTMLs estáticas

Tokens (idénticos en ambos):

```css
--ink: #0A1230          /* texto principal */
--ink-2: #111B42
--paper: #F6F4EE        /* fondo cream */
--paper-2: #EBE7DB
--accent: #D4FF3F       /* lime · highlights, pills, dot pulsante */
--accent-2: #5B8CFF     /* electric blue · feature boxes */
--mute: rgba(10,18,48,0.58)
--line: rgba(10,18,48,0.12)

font-sans: 'Geist'                       (weight 500 para titulares)
font-mono: 'JetBrains Mono'              (eyebrows, labels, números tabulares)
font-serif: 'Instrument Serif' italic    (acentos en H1/H2 con <em>)
```

Componentes reutilizables (en `_design.css` y `_partials/head.php`):
- `.sub-hero` / `.ns-hero` con eyebrow + h1 + lede
- `.grid-4-kpi` + `.bigmetric` para tickers de métricas
- `.mf-feature` (texto izquierda · visual dark derecha, alterna)
- `.two-col` + `.two-col-card` (variants: default / dark / accent lime)
- `.steps` con números serif italic gigantes
- `.sub-cta` (closing dark con radial glow lime)
- `.pill` (primary / accent / ghost)
- `.module-h2` con dot lime · `.module-h3` · `.module-p`
- `.video-frame` 16:9 + badge VIDEO lime
- `.resource` cards (default / primary ink / accent lime)
- `.reflection` cards numeradas (mono lime sobre ink)
- `.callout` con bg lime para casos prácticos
- `.cta-box` ink con radial glow

## Estructura de los 11 módulos del curso

Definida en `embed.php` `$modules` array y en `_partials/head.php` `$module_order`
(con info de prev/next). El **orden viene de Notion**, no se debe cambiar:

```
00 ¿Qué empresa quieres construir?  → que_empresa_quieres_construir.php
01 Introducción Modelos Negocio SaaS → introduccion_modelos_negocio.php
02 Modelos de negocio y limitación  → modelos_de_negocio.php
03 Pricing SaaS                      → pricing.php
04 Métricas SaaS fundamentales       → metricas_fundamentales.php
05 B2B SaaS Metrics Framework        → framework_b2b.php
06 Retención y Engagement            → retencion_engagement.php
07 Análisis de Cohortes              → analisis_cohortes.php
08 Benchmark SaaS                    → benchmark_saas.php
09 Modelos Financieros SaaS          → modelos_financieros.php
10 Reporting a inversores            → reporting.php
```

Cada módulo PHP usa el shell común vía `include __DIR__ . '/_partials/head.php'`
y `foot.php`. Solo varía el contenido entre ambos. La nav prev/inicio/next se
calcula automáticamente desde `$module_order` y `$module_num`.

## Hosting · cache gotcha (lecciones aprendidas)

El hosting es **nginx microcache + LiteSpeed cache** sobre LiteSpeed Web Server.
Aprendizajes:

1. **El microcache nginx ignora la cookie PHPSESSID en la cache key.** Resultado:
   redirects 302 de `embed.php` y módulos PHP se cachean como "no autenticado"
   y se sirven a todos. Bucle de login.
2. **Cualquier query string** (`?v=1`, `?bust=1`, `?`) bypassea el microcache —
   es la diferencia entre tener loop y funcionar.
3. **404 también se cachean.** Si un archivo faltaba en el primer deploy, queda
   404 cacheado aunque luego subas el archivo. TTL típico 24h.
4. **`.htaccess` con `Cache-Control: no-store, no-cache, must-revalidate`** para
   PHP es lo que evita el problema (LiteSpeed lo respeta). Para HTMLs poner
   `no-cache, must-revalidate, max-age=0` para que browsers revaliden con ETag.
5. Para purgar microcache instantáneamente: cPanel → **LiteSpeed Cache Manager
   → Purge All** (o por URL).

## Identificadores y URLs externas usadas

```
TidyCal mentoría  : https://tidycal.com/nextscenario/mentoria-curso
Libro SaaS        : https://tinyurl.com/7as42k8c
Plantilla Sheets  : https://docs.google.com/spreadsheets/d/1KlPY1AlP5QDZ27SltZuMOi-cyEFo93FBbGWBe47kpVk/edit
Plantilla Cohortes: https://docs.google.com/spreadsheets/d/1QZ3BfEEAmq7d7o0ELGZiDL2JrOINRuiab-5-518ztgg/edit
Benchmark Report  : https://firebasestorage.googleapis.com/v0/b/nextscenario-cf4c6.appspot.com/o/templates%2FEnglish%202024%20Saas%20Benchmark%20%20Report.pdf
Diagrama framework: https://miro.medium.com/1*KlCNb3rUX_7uXhUP4-JArQ.jpeg

Videos YouTube por módulo (incrustados en cada PHP):
  M00 → 2XsJIB7AjbA + iow1Qv5LPH4
  M01 → NFrDckgU0ko
  M02 → VlhroskJsJk + FJYZMjG_YZs + aOX4yy79L_0
  M03 → RG2hof7g0sY
  M04 → 1Y4qcbImLko + KOxYql8Htg8
  M05 → 8ZicJMPB384
  M06 → iIyfCn6t3WU
  M07 → OjWc764KRkE
  M08 → pDTfWOlFlDE
  M09 → yDW6ASI51Y4 + AbWfyj7y8Bw
  M10 → 9ap1qGGTTF0
```

## Convención URLs limpias (sin chapuzas ?v=N)

Tras un primer intento con `?v=1` workarounds, todo se revirtió a URLs limpias.
La cache se gestiona vía `.htaccess` y purgas en LiteSpeed. **No volver a meter
cache-bust query strings** salvo que el hosting cambie de configuración.

## Test local

Servidor PHP en local en puerto 8765 con router que auto-loguea como `dev_local`:

```bash
cd /Users/fabrica_de_chocolate/Projects/curso-saas/servidor
php -S 127.0.0.1:8765 /tmp/cursos_router.php
```

Router en `/tmp/cursos_router.php` (re-creable). Acceso: `http://127.0.0.1:8765/metricas/pro/embed.php`.

Notice rojo arriba "session_start(): Ignoring..." es del router de dev, no aparece en producción.

## Ramas git

- `main` → producción (siempre subible).
- `claude/fix-course-platform-7QXyx` → trabajo iterativo, mergeado a main vía PRs.

7 PRs mergeados con todos los cambios. `git log --oneline` da la cronología.

## Estado conocido al cierre de esta sesión

- ✅ Login funciona en producción con credenciales válidas.
- ✅ Las 15 HTMLs estáticas sirven el diseño nuevo NS (verificado byte-a-byte).
- ✅ Los 12 módulos PHP funcionan y muestran el diseño nuevo.
- ✅ Logout invalida sesión.
- ✅ `_design.css`, PDFs y assets cargan.
- ⚠ Si un usuario abre `https://cursos.nextscenario.com/metricas/login.php` (sin
  query) y ve diseño antiguo → es **cache de su navegador** (versiones anteriores
  cachearon sin Cache-Control headers). Solución: hard refresh
  (`Cmd+Shift+R`/`Ctrl+F5`) o usar incógnito. Futuros deploys ya están protegidos
  por el `.htaccess`.

## Pendientes / mejoras posibles

- Mover credenciales fuera de `check_login.php` (hash con password_verify, o BD).
- Añadir HTTPS-only y SameSite=Lax a la cookie de sesión.
- El microcache del hosting podría mejorarse: pedir al hosting que excluya
  `/metricas/pro/*` o que use PHPSESSID como parte de la cache key.
- Subir el archivo `Intro.mp4` del curso al `/metricas/pro/assets/` (si lo
  reciben) y descomentar la sección de intro en `embed.php`.
- Re-exportar de Notion los módulos 4 y 9 con sus videos cuando estén listos
  (originalmente Notion no los exportó).

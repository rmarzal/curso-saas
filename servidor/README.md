# Servidor — archivos listos para subir al hosting

Esta carpeta contiene exactamente lo que tiene que estar en producción.

## Dónde va

El contenido de `servidor/metricas/` tiene que ir a:

```
/home2/bicilink/public_html/cursos.nextscenario.com/metricas/
```

## Cómo subirlo

**Opción 1 — FileZilla / cliente FTP:**
Arrastra la carpeta `servidor/metricas/` entera y que sobrescriba la existente en el servidor.

**Opción 2 — cPanel File Manager:**
1. Sube un ZIP de `servidor/metricas/`.
2. Descomprímelo dentro de `public_html/cursos.nextscenario.com/` sobrescribiendo.

## Limpieza recomendada en el servidor

Después de subir, **borra estos dos archivos antiguos** del servidor si todavía existen — apuntan al iframe de Notion que da "conexión rechazada":

- `metricas/pro/embed_old.php`
- `metricas/pro/embed_nwe.php`

Ya no están en este proyecto (los quité), pero en tu hosting siguen porque nadie los ha borrado.

## Verificación post-deploy

1. Abre `https://cursos.nextscenario.com/metricas/login.php` y entra con un usuario válido.
2. Tras el login debes ver el nuevo **índice del curso** con las 11 tarjetas de módulo + contenido complementario, no el iframe de Notion.
3. Cada módulo (0,1,2,3,5,6,7,8,10) abre una página PHP con la **misma estructura que tiene en Notion** (orden de bloques exacto), con diseño mejorado: video(s) embebido(s), descripciones, PDFs descargables, listas de reflexión, etc. Verifica especialmente:
   - **Módulo 0** — 2 videos + H3 reflexión + 3 preguntas (cards numerados).
   - **Módulo 2** — 4 sub-secciones (PLG / Sales / Freemium / Reflexión) con 3 videos + reflexión.
   - **Módulo 3** — video + infografía + callout "Caso práctico".
   - **Módulo 5** — video + infografía B2B Framework.
   - **Módulo 6** — video + PDF descargable (en `pro/assets/`).
   - **Módulo 7** — video + PDF + link a la plantilla de Google Sheets.
   - **Módulo 8** — video + link al Benchmark Report 2024 (Firebase).
   - **Módulo 10** — video + infografía Data Room / One Pager.
4. La carpeta `pro/_partials/` contiene `head.php` y `foot.php` (layout compartido). **Tiene que subirse** junto con el resto de `pro/`.
5. `https://cursos.nextscenario.com/metricas/logout.php` cierra sesión y redirige al login.

## Pendientes (faltan en el export de Notion)

Estas dos cosas no se pudieron migrar porque no estaban en el ZIP que subiste:

- **Video de Bienvenida** (`Intro.mp4`) — referenciado en la portada de Notion pero no estaba en el export. Si me pasas el archivo o el enlace de YouTube, lo añado al índice.
- **Módulo 4 — Métricas SaaS fundamentales** y **Módulo 9 — Modelos Financieros SaaS**: Notion no exportó esas páginas. El índice por ahora enlaza a las infografías HTML existentes (`Metricas_saas.html` y `modelos_financieros.html`). Si re-exportas esas dos páginas con sus videos, puedo construirlas con la misma estructura que las demás.
- **B2B SaaS Metrics — imagen del framework** (`b2b_saas_metrics.jpeg`) — referenciada en la página de Notion pero faltaba en el export.

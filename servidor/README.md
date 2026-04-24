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
2. Tras el login debes ver el nuevo **índice del curso** (tarjetas con los 11 módulos + contenido complementario), no el iframe de Notion.
3. Haz clic en "Retención y Engagement", "Análisis de Cohortes" o "Benchmark SaaS" — debe abrirse la página con video de YouTube embebido y PDF descargable.
4. `https://cursos.nextscenario.com/metricas/logout.php` debe cerrar sesión y redirigirte al login.

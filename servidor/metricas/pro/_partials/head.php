<?php
// Variables esperadas: $module_num, $module_title, $module_subtitle (opcional)
$module_subtitle = $module_subtitle ?? '';
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo htmlspecialchars($module_title); ?> · Curso SaaS</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">
    <style>
        :root {
            --c-ink: #073B4C;
            --c-ink-2: #0e5870;
            --c-blue: #118AB2;
            --c-mint: #06D6A0;
            --c-bg: #f5f7fa;
            --c-card: #ffffff;
            --c-border: #e6ecf2;
            --c-muted: #5b6b78;
        }
        * { -webkit-font-smoothing: antialiased; -moz-osx-font-smoothing: grayscale; }
        body {
            font-family: 'Inter', system-ui, sans-serif;
            background: linear-gradient(180deg, #eef3f7 0%, #f5f7fa 220px);
            color: #1f2937;
            min-height: 100vh;
        }
        .topbar {
            display: flex; align-items: center; justify-content: space-between;
            font-size: 0.875rem; color: var(--c-muted); padding: 0.25rem 0 1.25rem;
        }
        .back-link {
            display: inline-flex; align-items: center; gap: 0.45rem;
            color: var(--c-blue); text-decoration: none; font-weight: 500;
            transition: color .15s;
        }
        .back-link:hover { color: var(--c-ink); }
        .back-link svg { width: 1rem; height: 1rem; }

        .hero-card {
            background: linear-gradient(135deg, #073B4C 0%, #0e5870 50%, #118AB2 100%);
            color: #fff;
            border-radius: 1.25rem;
            padding: 2.25rem 2rem 2rem;
            position: relative;
            overflow: hidden;
            box-shadow: 0 16px 40px -12px rgba(7, 59, 76, 0.35);
            margin-bottom: 2rem;
        }
        .hero-card::after {
            content: '';
            position: absolute;
            inset: auto -120px -120px auto;
            width: 380px; height: 380px;
            background: radial-gradient(circle, rgba(6,214,160,0.35) 0%, transparent 70%);
            pointer-events: none;
        }
        .module-chip {
            display: inline-flex; align-items: center; gap: 0.5rem;
            background: rgba(255,255,255,0.14);
            backdrop-filter: blur(6px);
            border: 1px solid rgba(255,255,255,0.18);
            color: #fff; font-weight: 600;
            padding: 0.4rem 0.85rem; border-radius: 999px;
            font-size: 0.85rem; letter-spacing: 0.02em;
        }
        .module-emoji { font-size: 1.05rem; line-height: 1; }
        .hero-card h1 {
            margin-top: 1rem;
            font-size: clamp(1.85rem, 4vw, 2.85rem);
            font-weight: 800;
            line-height: 1.15;
            letter-spacing: -0.02em;
        }
        .hero-card .subtitle {
            margin-top: 0.85rem;
            font-size: 1.05rem;
            line-height: 1.55;
            color: rgba(255,255,255,0.86);
            max-width: 60ch;
        }

        .content-card {
            background: var(--c-card);
            border: 1px solid var(--c-border);
            border-radius: 1.25rem;
            padding: 2rem 2rem 1.75rem;
            box-shadow: 0 4px 14px rgba(20,40,60,0.04);
            margin-bottom: 1.5rem;
        }
        .content-card > * + * { margin-top: 1.25rem; }

        .module-h2 {
            display: flex; align-items: center; gap: 0.65rem;
            font-size: 1.45rem; font-weight: 700;
            color: var(--c-ink);
            letter-spacing: -0.01em;
            margin-top: 2.25rem;
            padding-left: 0.95rem;
            border-left: 4px solid var(--c-mint);
            line-height: 1.25;
        }
        .module-h2:first-child { margin-top: 0; }

        .module-h3 {
            font-size: 1.1rem; font-weight: 600;
            color: var(--c-ink-2);
            margin-top: 1.5rem;
            display: flex; align-items: center; gap: 0.5rem;
        }

        .module-p {
            color: #344554;
            font-size: 1.02rem;
            line-height: 1.7;
        }
        .module-p strong { color: var(--c-ink); }

        .video-block {
            margin-top: 1.25rem;
        }
        .video-frame {
            position: relative; padding-bottom: 56.25%; height: 0; overflow: hidden;
            border-radius: 0.85rem; background: #0a1822;
            box-shadow: 0 12px 28px -8px rgba(7,59,76,0.25);
            border: 1px solid #d6dde5;
        }
        .video-frame iframe { position: absolute; inset: 0; width: 100%; height: 100%; border: 0; }
        .video-caption {
            display: flex; align-items: center; gap: 0.55rem;
            margin-top: 0.75rem;
            font-size: 0.92rem; color: var(--c-muted);
            font-weight: 500;
        }
        .video-caption .badge {
            background: linear-gradient(90deg, var(--c-blue), var(--c-mint));
            color: #fff; font-weight: 700; font-size: 0.7rem;
            padding: 0.18rem 0.55rem; border-radius: 999px;
            letter-spacing: 0.06em;
        }

        .resources {
            margin-top: 1.25rem;
            display: grid; grid-template-columns: 1fr; gap: 0.75rem;
        }
        @media (min-width: 640px) {
            .resources.cols-2 { grid-template-columns: repeat(2, 1fr); }
        }
        .resource {
            display: flex; align-items: flex-start; gap: 0.85rem;
            padding: 1rem 1.1rem; border-radius: 0.85rem;
            text-decoration: none; color: var(--c-ink);
            border: 1px solid var(--c-border);
            background: #fbfdff;
            transition: transform .15s, box-shadow .15s, border-color .15s;
        }
        .resource:hover {
            transform: translateY(-1px);
            border-color: var(--c-blue);
            box-shadow: 0 6px 14px -6px rgba(17,138,178,0.25);
        }
        .resource .ico {
            flex-shrink: 0;
            width: 2.2rem; height: 2.2rem;
            border-radius: 0.55rem;
            display: flex; align-items: center; justify-content: center;
            font-size: 1.15rem;
            background: linear-gradient(135deg, #e3f6f1, #d3ecf6);
        }
        .resource .label { font-weight: 600; font-size: 0.98rem; line-height: 1.3; }
        .resource .meta { display: block; font-size: 0.8rem; color: var(--c-muted); font-weight: 500; margin-top: 0.15rem; }
        .resource.primary {
            background: linear-gradient(135deg, #118AB2 0%, #06D6A0 100%);
            color: #fff; border-color: transparent;
        }
        .resource.primary:hover { box-shadow: 0 8px 18px -6px rgba(17,138,178,0.45); }
        .resource.primary .ico { background: rgba(255,255,255,0.18); color: #fff; }
        .resource.primary .meta { color: rgba(255,255,255,0.82); }

        .reflection {
            margin-top: 1rem;
            display: grid; gap: 0.75rem;
        }
        .reflection .q {
            display: flex; gap: 0.9rem; align-items: flex-start;
            background: #f3f8fb;
            border: 1px solid #dfeaf1;
            border-radius: 0.75rem;
            padding: 0.95rem 1.1rem;
            color: #1f3340;
            font-size: 1rem;
            line-height: 1.55;
        }
        .reflection .q .n {
            flex-shrink: 0;
            width: 1.85rem; height: 1.85rem;
            border-radius: 50%;
            background: linear-gradient(135deg, var(--c-blue), var(--c-mint));
            color: #fff; font-weight: 700; font-size: 0.92rem;
            display: flex; align-items: center; justify-content: center;
        }

        .callout {
            margin-top: 1.25rem;
            display: flex; gap: 0.85rem;
            padding: 1rem 1.15rem;
            border-radius: 0.75rem;
            background: #eaf6ff;
            border: 1px solid #c8e3f5;
            color: var(--c-ink);
            line-height: 1.55;
        }
        .callout .ico {
            flex-shrink: 0; font-size: 1.1rem; color: var(--c-blue);
        }
        .callout strong { color: var(--c-ink); }

        .infographic-img {
            margin-top: 1.25rem;
            border-radius: 0.85rem; overflow: hidden;
            border: 1px solid var(--c-border);
            box-shadow: 0 8px 20px -8px rgba(7,59,76,0.18);
        }
        .infographic-img img { display: block; width: 100%; height: auto; }

        footer.site-foot {
            text-align: center; font-size: 0.82rem; color: var(--c-muted);
            padding: 2rem 0 1rem; line-height: 1.6;
        }
        footer.site-foot strong { color: var(--c-ink); }
    </style>
</head>
<body class="px-4 sm:px-6 md:px-10 py-6 md:py-8">
    <div class="container mx-auto max-w-4xl">

        <div class="topbar">
            <a href="embed.php" class="back-link">
                <svg viewBox="0 0 20 20" fill="currentColor" xmlns="http://www.w3.org/2000/svg"><path d="M9.707 4.293a1 1 0 0 1 0 1.414L6.414 9H17a1 1 0 1 1 0 2H6.414l3.293 3.293a1 1 0 1 1-1.414 1.414l-5-5a1 1 0 0 1 0-1.414l5-5a1 1 0 0 1 1.414 0Z"/></svg>
                Volver al índice del curso
            </a>
            <a href="/metricas/logout.php" class="back-link" style="color: var(--c-muted);">Cerrar sesión</a>
        </div>

        <header class="hero-card">
            <span class="module-chip"><span class="module-emoji"><?php echo $module_num; ?></span> Módulo del curso</span>
            <h1><?php echo htmlspecialchars($module_title); ?></h1>
            <?php if ($module_subtitle): ?>
                <p class="subtitle"><?php echo $module_subtitle; ?></p>
            <?php endif; ?>
        </header>

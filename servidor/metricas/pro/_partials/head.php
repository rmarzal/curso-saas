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
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Geist:wght@400;500;600;700&family=Instrument+Serif:ital@0;1&family=JetBrains+Mono:wght@400;500&display=swap" rel="stylesheet">
    <style>
        :root {
            --ink: #0A1230;
            --ink-2: #111B42;
            --ink-3: #1B2657;
            --paper: #F6F4EE;
            --paper-2: #EBE7DB;
            --line: rgba(10, 18, 48, 0.12);
            --line-strong: rgba(10, 18, 48, 0.22);
            --mute: rgba(10, 18, 48, 0.58);
            --accent: #D4FF3F;
            --accent-2: #5B8CFF;
            --pos: #00B67A;
            --font-sans: 'Geist', ui-sans-serif, system-ui, sans-serif;
            --font-mono: 'JetBrains Mono', ui-monospace, monospace;
            --font-serif: 'Instrument Serif', serif;
        }
        * { box-sizing: border-box; }
        html, body { margin: 0; padding: 0; background: var(--paper); color: var(--ink); font-family: var(--font-sans); -webkit-font-smoothing: antialiased; -moz-osx-font-smoothing: grayscale; }
        body { overflow-x: hidden; }
        a { color: inherit; text-decoration: none; }

        .container { max-width: 1100px; margin: 0 auto; padding: 0 32px; }
        @media (max-width: 720px) { .container { padding: 0 20px; } }

        /* Top nav */
        .nav {
            position: sticky; top: 0; z-index: 50;
            backdrop-filter: blur(14px);
            background: color-mix(in oklab, var(--paper) 82%, transparent);
            border-bottom: 1px solid var(--line);
        }
        .nav-inner { display: flex; align-items: center; justify-content: space-between; height: 60px; }
        .back-link { display: inline-flex; align-items: center; gap: 8px; font-size: 14px; color: var(--ink); opacity: 0.7; transition: opacity .15s; }
        .back-link:hover { opacity: 1; }
        .back-link svg { width: 14px; height: 14px; }
        .logout-link { font-family: var(--font-mono); font-size: 11px; letter-spacing: 0.1em; text-transform: uppercase; color: var(--mute); }
        .logout-link:hover { color: var(--ink); }

        /* Eyebrow / mono labels */
        .eyebrow {
            font-family: var(--font-mono);
            font-size: 11px;
            letter-spacing: 0.14em;
            text-transform: uppercase;
            color: var(--mute);
            display: inline-flex; align-items: center; gap: 10px;
        }
        .eyebrow .dot {
            width: 7px; height: 7px; border-radius: 50%;
            background: var(--pos);
            box-shadow: 0 0 0 4px color-mix(in oklab, var(--pos) 20%, transparent);
        }

        /* Hero */
        .hero { padding: 56px 0 48px; }
        .hero h1 {
            font-family: var(--font-sans);
            font-weight: 500;
            font-size: clamp(36px, 5vw, 64px);
            line-height: 1;
            letter-spacing: -0.035em;
            margin: 18px 0 22px;
            max-width: 24ch;
        }
        .hero h1 em { font-family: var(--font-serif); font-style: italic; font-weight: 400; }
        .hero h1 .hl {
            background: var(--accent); padding: 0 8px; border-radius: 4px;
            display: inline-block; transform: rotate(-0.5deg);
        }
        .hero .lede {
            font-size: 18px; line-height: 1.5; color: var(--mute);
            max-width: 64ch; letter-spacing: -0.005em; margin: 0;
        }

        /* Content card */
        .content-card {
            background: color-mix(in oklab, var(--paper) 60%, white);
            border: 1px solid var(--line);
            border-radius: 18px;
            padding: 32px;
            margin-bottom: 24px;
        }
        .content-card > * + * { margin-top: 20px; }

        /* Headings within content */
        .module-h2 {
            font-family: var(--font-sans);
            font-size: clamp(24px, 2.6vw, 32px);
            font-weight: 500;
            color: var(--ink);
            letter-spacing: -0.025em;
            line-height: 1.1;
            margin-top: 40px;
            display: flex; align-items: baseline; gap: 14px;
        }
        .module-h2:first-child { margin-top: 0; }
        .module-h2 em { font-family: var(--font-serif); font-style: italic; font-weight: 400; }
        .module-h2::before {
            content: '';
            display: inline-block;
            width: 8px; height: 8px; border-radius: 50%;
            background: var(--accent);
            transform: translateY(-3px);
            flex-shrink: 0;
        }

        .module-h3 {
            font-family: var(--font-sans);
            font-size: 18px; font-weight: 500;
            color: var(--ink);
            letter-spacing: -0.015em;
            margin-top: 24px;
            display: flex; align-items: center; gap: 10px;
        }

        .module-p {
            color: var(--ink);
            opacity: 0.84;
            font-size: 16px;
            line-height: 1.6;
            letter-spacing: -0.005em;
        }
        .module-p strong { color: var(--ink); opacity: 1; font-weight: 600; }

        /* Video block */
        .video-block { margin-top: 20px; }
        .video-frame {
            position: relative; padding-bottom: 56.25%; height: 0; overflow: hidden;
            border-radius: 16px; background: var(--ink);
            border: 1px solid var(--line);
        }
        .video-frame iframe {
            position: absolute; inset: 0; width: 100%; height: 100%; border: 0;
        }
        .video-caption {
            display: flex; align-items: center; gap: 10px;
            margin-top: 12px;
            font-family: var(--font-mono);
            font-size: 11px; color: var(--mute);
            letter-spacing: 0.1em; text-transform: uppercase;
        }
        .video-caption .badge {
            background: var(--accent); color: var(--ink);
            font-family: var(--font-mono);
            font-weight: 600; font-size: 10px;
            padding: 3px 8px; border-radius: 4px;
            letter-spacing: 0.08em;
        }

        /* Resources */
        .resources {
            margin-top: 18px;
            display: grid; grid-template-columns: 1fr; gap: 10px;
        }
        @media (min-width: 640px) {
            .resources.cols-2 { grid-template-columns: repeat(2, 1fr); }
        }
        .resource {
            display: flex; align-items: center; gap: 14px;
            padding: 14px 16px;
            border: 1px solid var(--line);
            border-radius: 14px;
            background: var(--paper);
            color: var(--ink);
            transition: transform .12s ease, border-color .12s ease, background .12s ease;
        }
        .resource:hover {
            transform: translateY(-1px);
            border-color: var(--line-strong);
            background: color-mix(in oklab, var(--paper) 60%, white);
        }
        .resource .ico {
            flex-shrink: 0;
            width: 36px; height: 36px; border-radius: 10px;
            display: flex; align-items: center; justify-content: center;
            background: var(--paper-2);
            font-size: 16px;
        }
        .resource .label { font-weight: 500; font-size: 15px; letter-spacing: -0.01em; line-height: 1.3; display: block; }
        .resource .meta {
            display: block; margin-top: 3px;
            font-family: var(--font-mono);
            font-size: 10px; letter-spacing: 0.08em; text-transform: uppercase;
            color: var(--mute);
        }
        .resource.primary {
            background: var(--ink);
            color: var(--paper);
            border-color: var(--ink);
        }
        .resource.primary:hover { background: var(--ink-2); border-color: var(--ink-2); }
        .resource.primary .ico { background: color-mix(in oklab, var(--paper) 14%, transparent); color: var(--accent); }
        .resource.primary .meta { color: color-mix(in oklab, var(--paper) 60%, transparent); }
        .resource.accent {
            background: var(--accent);
            color: var(--ink);
            border-color: transparent;
        }
        .resource.accent:hover { filter: brightness(0.97); }
        .resource.accent .ico { background: color-mix(in oklab, var(--ink) 12%, transparent); }

        /* Reflection cards */
        .reflection {
            margin-top: 16px;
            display: grid; gap: 10px;
        }
        .reflection .q {
            display: flex; gap: 16px; align-items: flex-start;
            background: var(--paper);
            border: 1px solid var(--line);
            border-radius: 14px;
            padding: 16px 18px;
            color: var(--ink);
            font-size: 16px;
            line-height: 1.5;
            letter-spacing: -0.005em;
        }
        .reflection .q .n {
            flex-shrink: 0;
            width: 28px; height: 28px; border-radius: 50%;
            background: var(--ink); color: var(--accent);
            font-family: var(--font-mono);
            font-weight: 600; font-size: 12px;
            display: flex; align-items: center; justify-content: center;
            letter-spacing: 0;
        }

        /* Callout (caso práctico) */
        .callout {
            margin-top: 20px;
            display: flex; gap: 14px; align-items: flex-start;
            padding: 18px 20px;
            border-radius: 14px;
            background: var(--accent);
            color: var(--ink);
            border: 1px solid transparent;
            line-height: 1.5;
            font-size: 15px;
        }
        .callout .ico { flex-shrink: 0; font-size: 18px; }
        .callout strong { font-weight: 600; }

        /* Topics list */
        .topics {
            margin-top: 14px;
            display: grid; gap: 8px;
            list-style: none; padding: 0;
        }
        .topics li {
            display: flex; gap: 12px; align-items: center;
            color: var(--ink); font-size: 15px;
            padding: 12px 16px;
            background: var(--paper);
            border: 1px solid var(--line);
            border-radius: 12px;
            letter-spacing: -0.005em;
        }
        .topics li::before {
            content: '';
            flex-shrink: 0;
            width: 6px; height: 6px;
            background: var(--accent-2);
            border-radius: 50%;
        }

        /* CTA box (dark, with accent) */
        .cta-box {
            margin-top: 28px;
            padding: 28px;
            background: var(--ink);
            color: var(--paper);
            border-radius: 18px;
            position: relative;
            overflow: hidden;
        }
        .cta-box::after {
            content: ''; position: absolute; inset: 0; pointer-events: none;
            background: radial-gradient(500px 250px at 100% 0%, color-mix(in oklab, var(--accent) 18%, transparent), transparent 60%);
        }
        .cta-box .eyebrow { color: color-mix(in oklab, var(--paper) 60%, transparent); }
        .cta-box .eyebrow .dot { background: var(--accent); box-shadow: 0 0 0 4px color-mix(in oklab, var(--accent) 30%, transparent); }
        .cta-box h3 {
            font-family: var(--font-sans); font-weight: 500;
            font-size: 24px; letter-spacing: -0.025em; line-height: 1.15;
            margin: 12px 0 10px;
            position: relative;
        }
        .cta-box p {
            color: color-mix(in oklab, var(--paper) 78%, transparent);
            line-height: 1.55; font-size: 15px;
            margin: 0;
            position: relative;
        }
        .cta-box a {
            color: var(--accent); font-weight: 500;
            text-decoration: underline; text-underline-offset: 3px;
        }
        .cta-box a:hover { color: var(--paper); }

        /* Site footer */
        .site-foot {
            font-family: var(--font-mono);
            font-size: 11px;
            letter-spacing: 0.1em;
            text-transform: uppercase;
            color: var(--mute);
            text-align: center;
            padding: 60px 0 32px;
            line-height: 1.8;
        }
        .site-foot strong { color: var(--ink); font-weight: 500; letter-spacing: 0.06em; }
        .site-foot a { color: var(--mute); }
        .site-foot a:hover { color: var(--ink); }

        /* Buttons / pills */
        .pill {
            display: inline-flex; align-items: center; gap: 8px;
            padding: 11px 18px;
            border-radius: 999px;
            font-family: var(--font-sans);
            font-weight: 500; font-size: 14px;
            letter-spacing: -0.005em;
            border: 1px solid transparent;
            transition: transform .1s ease, background .15s ease;
        }
        .pill:active { transform: translateY(1px); }
        .pill-primary { background: var(--ink); color: var(--paper); }
        .pill-primary:hover { background: var(--ink-2); }
        .pill-accent { background: var(--accent); color: var(--ink); }
        .pill-accent:hover { filter: brightness(0.96); }
        .pill-ghost { border-color: var(--line-strong); color: var(--ink); background: transparent; }
        .pill-ghost:hover { background: rgba(10,18,48,0.04); }
    </style>
</head>
<body>

    <nav class="nav">
        <div class="container nav-inner">
            <a href="embed.php" class="back-link">
                <svg viewBox="0 0 20 20" fill="currentColor" xmlns="http://www.w3.org/2000/svg"><path d="M9.707 4.293a1 1 0 0 1 0 1.414L6.414 9H17a1 1 0 1 1 0 2H6.414l3.293 3.293a1 1 0 1 1-1.414 1.414l-5-5a1 1 0 0 1 0-1.414l5-5a1 1 0 0 1 1.414 0Z"/></svg>
                Volver al curso
            </a>
            <a href="/metricas/logout.php" class="logout-link">Cerrar sesión</a>
        </div>
    </nav>

    <div class="container">

        <header class="hero">
            <span class="eyebrow"><span class="dot"></span>Módulo <?php echo $module_num; ?> · Del curso</span>
            <h1><?php echo htmlspecialchars($module_title); ?></h1>
            <?php if ($module_subtitle): ?>
                <p class="lede"><?php echo $module_subtitle; ?></p>
            <?php endif; ?>
        </header>

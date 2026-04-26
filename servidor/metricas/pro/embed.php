<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: /metricas/login.php");
    exit();
}
$username = htmlspecialchars($_SESSION['username']);

$modules = [
    ["00", "¿Qué empresa quieres construir?",            "/metricas/pro/que_empresa_quieres_construir.php", "Reflexión inicial sobre el tipo de empresa SaaS que quieres crear."],
    ["01", "Introducción a Modelos de Negocio SaaS",     "/metricas/pro/introduccion_modelos_negocio.php",  "Características del modelo SaaS y los principales factores de fracaso."],
    ["02", "Modelos de negocio y limitación de producto", "/metricas/pro/modelos_de_negocio.php",           "Sales vs PLG, Freemium vs Free Trial y cómo limitar el producto."],
    ["03", "Pricing SaaS",                                "/metricas/pro/pricing.php",                      "Estrategias para definir y presentar tus precios."],
    ["04", "Métricas SaaS fundamentales",                 "/metricas/pro/metricas_fundamentales.php",       "MRR, ARR, LTV, CAC, churn, eficiencia y unit economics."],
    ["05", "B2B SaaS Metrics Journey Framework",          "/metricas/pro/framework_b2b.php",                "Las métricas que importan en cada etapa del viaje B2B."],
    ["06", "Retención y Engagement",                      "/metricas/pro/retencion_engagement.php",         "Cómo medir retención e introducción a la analítica de producto."],
    ["07", "Análisis de Cohortes",                        "/metricas/pro/analisis_cohortes.php",            "Estudio de cohortes paso a paso con plantilla de Sheets."],
    ["08", "Benchmark SaaS",                              "/metricas/pro/benchmark_saas.php",               "Cómo comparar tu SaaS con el mercado y situarte en la media."],
    ["09", "Modelos Financieros SaaS",                    "/metricas/pro/modelos_financieros.php",          "Cashflow, cuenta de pérdidas y ganancias y balance."],
    ["10", "Reporting a inversores",                       "/metricas/pro/reporting.php",                   "Data Room y One Pager para presentar a inversores."],
];

$extra = [
    ["E1", "Entrevistas a clientes",       "/metricas/entrevistas_clientes.html",    "Cómo hacer entrevistas a clientes que aporten señal."],
    ["E2", "Quién lidera las métricas",    "/metricas/quien_lidera_metricas.html",   "Roles y responsabilidades en torno a los datos."],
];
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curso SaaS · Métricas, Finanzas y Modelos Financieros</title>
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

        /* Nav */
        .nav {
            position: sticky; top: 0; z-index: 50;
            backdrop-filter: blur(14px);
            background: color-mix(in oklab, var(--paper) 82%, transparent);
            border-bottom: 1px solid var(--line);
        }
        .nav-inner { display: flex; align-items: center; justify-content: space-between; height: 64px; }
        .logo { font-family: var(--font-sans); font-weight: 600; letter-spacing: -0.02em; font-size: 18px; display: flex; align-items: center; gap: 10px; }
        .logo-mark { width: 22px; height: 22px; position: relative; display: inline-block; }
        .logo-mark::before, .logo-mark::after { content: ""; position: absolute; inset: 0; border-radius: 4px; }
        .logo-mark::before { background: var(--ink); transform: translate(-3px, -3px); }
        .logo-mark::after { background: var(--accent); transform: translate(3px, 3px); mix-blend-mode: multiply; }
        .session-pill {
            font-family: var(--font-mono);
            font-size: 11px; letter-spacing: 0.08em; text-transform: uppercase;
            color: var(--mute);
            display: inline-flex; align-items: center; gap: 8px;
            border: 1px solid var(--line);
            border-radius: 999px;
            padding: 6px 12px;
            background: color-mix(in oklab, var(--paper) 60%, white);
        }
        .session-pill .dot { width: 6px; height: 6px; border-radius: 50%; background: var(--pos); box-shadow: 0 0 0 4px color-mix(in oklab, var(--pos) 20%, transparent); }
        .nav-right { display: flex; align-items: center; gap: 14px; }
        .logout-link { font-family: var(--font-mono); font-size: 11px; letter-spacing: 0.1em; text-transform: uppercase; color: var(--mute); }
        .logout-link:hover { color: var(--ink); }

        /* Eyebrow */
        .eyebrow { font-family: var(--font-mono); font-size: 11px; letter-spacing: 0.14em; text-transform: uppercase; color: var(--mute); display: inline-flex; align-items: center; gap: 10px; }
        .eyebrow .dot { width: 7px; height: 7px; border-radius: 50%; background: var(--pos); box-shadow: 0 0 0 4px color-mix(in oklab, var(--pos) 20%, transparent); }

        /* Hero */
        .hero { padding: 64px 0 56px; }
        .hero h1 {
            font-family: var(--font-sans);
            font-weight: 500;
            font-size: clamp(40px, 6vw, 80px);
            line-height: 0.96;
            letter-spacing: -0.04em;
            margin: 22px 0 24px;
            max-width: 18ch;
        }
        .hero h1 em { font-family: var(--font-serif); font-style: italic; font-weight: 400; }
        .hero h1 .hl {
            background: var(--accent); padding: 0 8px; border-radius: 4px;
            display: inline-block; transform: rotate(-0.5deg);
        }
        .hero .lede {
            font-size: 19px; line-height: 1.5; color: var(--mute);
            max-width: 60ch; letter-spacing: -0.005em; margin: 0;
        }
        .hero-ctas { margin-top: 32px; display: flex; gap: 12px; flex-wrap: wrap; }

        /* Pills */
        .pill {
            display: inline-flex; align-items: center; gap: 8px;
            padding: 12px 20px;
            border-radius: 999px;
            font-family: var(--font-sans);
            font-weight: 500; font-size: 14px;
            letter-spacing: -0.005em;
            border: 1px solid transparent;
            transition: transform .1s ease, background .15s ease, filter .15s ease;
        }
        .pill:active { transform: translateY(1px); }
        .pill-primary { background: var(--ink); color: var(--paper); }
        .pill-primary:hover { background: var(--ink-2); }
        .pill-accent { background: var(--accent); color: var(--ink); font-weight: 600; }
        .pill-accent:hover { filter: brightness(0.96); }
        .pill-ghost { border-color: var(--line-strong); color: var(--ink); background: transparent; }
        .pill-ghost:hover { background: rgba(10,18,48,0.04); }

        /* Section */
        .section { padding: 32px 0 24px; }
        .section-head {
            display: flex; justify-content: space-between; align-items: end;
            gap: 32px; margin-bottom: 36px;
        }
        .section-head h2 {
            font-family: var(--font-sans); font-weight: 500;
            font-size: clamp(28px, 3.4vw, 44px);
            letter-spacing: -0.03em; line-height: 1;
            margin: 8px 0 0; max-width: 720px;
        }
        .section-head h2 em { font-family: var(--font-serif); font-style: italic; font-weight: 400; }
        .section-head p { max-width: 360px; color: var(--mute); margin: 0; font-size: 14px; line-height: 1.5; }
        @media (max-width: 720px) { .section-head { flex-direction: column; align-items: flex-start; } }

        /* Module grid */
        .modules-grid {
            display: grid; gap: 14px;
            grid-template-columns: 1fr;
        }
        @media (min-width: 720px) {
            .modules-grid { grid-template-columns: repeat(2, 1fr); }
        }

        .module {
            display: flex; flex-direction: column; gap: 8px;
            border: 1px solid var(--line);
            border-radius: 18px;
            padding: 20px 22px;
            background: color-mix(in oklab, var(--paper) 60%, white);
            color: var(--ink);
            transition: transform .15s ease, box-shadow .15s ease, border-color .15s ease;
            position: relative;
            min-height: 140px;
        }
        .module:hover {
            transform: translateY(-2px);
            border-color: var(--line-strong);
            box-shadow: 0 16px 32px -16px rgba(10,18,48,0.18);
        }
        .module .num {
            font-family: var(--font-mono);
            font-size: 11px; letter-spacing: 0.14em; text-transform: uppercase;
            color: var(--mute);
        }
        .module h3 {
            font-family: var(--font-sans); font-weight: 500;
            font-size: 19px;
            letter-spacing: -0.018em;
            line-height: 1.2;
            color: var(--ink);
            margin: 4px 0 0;
        }
        .module p {
            color: var(--mute);
            font-size: 14px; line-height: 1.45;
            letter-spacing: -0.005em;
            margin: 0;
        }
        .module .arrow {
            position: absolute; top: 20px; right: 22px;
            color: var(--mute);
            transition: transform .15s ease, color .15s ease;
        }
        .module:hover .arrow { color: var(--ink); transform: translate(2px, -2px); }

        /* Featured module — module 0 stands out */
        .module.featured {
            background: var(--ink); color: var(--paper);
            border-color: transparent;
            grid-column: span 1;
        }
        .module.featured .num { color: color-mix(in oklab, var(--paper) 60%, transparent); }
        .module.featured h3 { color: var(--paper); }
        .module.featured p { color: color-mix(in oklab, var(--paper) 70%, transparent); }
        .module.featured .arrow { color: var(--accent); }
        .module.featured:hover { background: var(--ink-2); }

        /* Footer */
        .site-foot {
            font-family: var(--font-mono);
            font-size: 11px;
            letter-spacing: 0.1em;
            text-transform: uppercase;
            color: var(--mute);
            text-align: center;
            padding: 80px 0 32px;
            line-height: 1.8;
        }
        .site-foot strong { color: var(--ink); font-weight: 500; letter-spacing: 0.06em; }
        .site-foot a { color: var(--mute); }
        .site-foot a:hover { color: var(--ink); }
    </style>
</head>
<body>

    <nav class="nav">
        <div class="container nav-inner">
            <a href="embed.php" class="logo">
                <span class="logo-mark"></span>
                NextScenario
            </a>
            <div class="nav-right">
                <span class="session-pill"><span class="dot"></span><?php echo $username; ?></span>
                <a href="/metricas/logout.php" class="logout-link">Cerrar sesión</a>
            </div>
        </div>
    </nav>

    <div class="container">

        <header class="hero">
            <span class="eyebrow"><span class="dot"></span>Curso online · Métricas y Finanzas SaaS</span>
            <h1>Métricas, Finanzas y <em>Modelos Financieros</em> para <span class="hl">SaaS</span></h1>
            <p class="lede">Bienvenido al curso sobre métricas y modelos SaaS. Diseñado para explicarte con detalle el modelo SaaS, sus métricas y los modelos financieros que necesitas para tomar decisiones.</p>
            <div class="hero-ctas">
                <a class="pill pill-primary" href="https://tidycal.com/nextscenario/mentoria-curso" target="_blank" rel="noopener">
                    Agendar mentoría
                    <svg width="14" height="14" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M5 3L11 8L5 13" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"/></svg>
                </a>
                <a class="pill pill-ghost" href="https://tinyurl.com/7as42k8c" target="_blank" rel="noopener">
                    📕 Libro SaaS
                </a>
            </div>
        </header>

        <section class="section">
            <div class="section-head">
                <div>
                    <span class="eyebrow">11 módulos · Métricas SaaS y Modelos financieros</span>
                    <h2>Módulos del <em>curso</em></h2>
                </div>
                <p>Cada módulo incluye video del curso y contenido de apoyo. Visualiza los videos cuando quieras, tantas veces como quieras.</p>
            </div>

            <div class="modules-grid">
                <?php foreach ($modules as $i => [$num, $title, $href, $desc]): ?>
                    <a class="module<?php echo $i === 0 ? ' featured' : ''; ?>" href="<?php echo htmlspecialchars($href); ?>">
                        <span class="num">Módulo <?php echo $num; ?></span>
                        <h3><?php echo htmlspecialchars($title); ?></h3>
                        <p><?php echo htmlspecialchars($desc); ?></p>
                        <svg class="arrow" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M4 12L12 4M12 4H6M12 4V10" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </a>
                <?php endforeach; ?>
            </div>
        </section>

        <?php if (!empty($extra)): ?>
        <section class="section">
            <div class="section-head">
                <div>
                    <span class="eyebrow">Material extra</span>
                    <h2>Contenido <em>complementario</em></h2>
                </div>
                <p>Recursos adicionales para profundizar más allá del temario principal.</p>
            </div>

            <div class="modules-grid">
                <?php foreach ($extra as [$num, $title, $href, $desc]): ?>
                    <a class="module" href="<?php echo htmlspecialchars($href); ?>">
                        <span class="num"><?php echo $num; ?> · Extra</span>
                        <h3><?php echo htmlspecialchars($title); ?></h3>
                        <p><?php echo htmlspecialchars($desc); ?></p>
                        <svg class="arrow" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M4 12L12 4M12 4H6M12 4V10" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </a>
                <?php endforeach; ?>
            </div>
        </section>
        <?php endif; ?>

    </div>

    <footer class="site-foot">
        <strong>Curso SaaS</strong> · Métricas, Finanzas y Modelos Financieros<br>
        Nextscenario · <a href="mailto:admin@nextscenario.com">admin@nextscenario.com</a>
    </footer>

</body>
</html>

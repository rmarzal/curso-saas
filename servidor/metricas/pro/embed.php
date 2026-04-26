<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: /metricas/login.php");
    exit();
}
$username = htmlspecialchars($_SESSION['username']);

$intro_video_local = __DIR__ . '/assets/Intro.mp4';
$has_intro_video = file_exists($intro_video_local);

$modules = [
    ["0️⃣", "¿Qué empresa quieres construir?",            "/metricas/pro/que_empresa_quieres_construir.php", "Reflexión inicial sobre el tipo de empresa SaaS que quieres crear."],
    ["1️⃣", "Introducción a Modelos de Negocio SaaS",     "/metricas/pro/introduccion_modelos_negocio.php",  "Características del modelo SaaS y los principales factores de fracaso."],
    ["2️⃣", "Modelos de negocio y limitación de producto", "/metricas/pro/modelos_de_negocio.php",           "Go to Market: Sales vs PLG, Freemium vs Free Trial y cómo limitar el producto."],
    ["3️⃣", "Pricing SaaS",                                "/metricas/pro/pricing.php",                      "Estrategias para definir y presentar tus precios."],
    ["4️⃣", "Métricas SaaS fundamentales",                 "/metricas/pro/metricas_fundamentales.php",       "MRR, ARR, LTV, CAC, churn, eficiencia y unit economics."],
    ["5️⃣", "B2B SaaS Metrics Journey Framework",          "/metricas/pro/framework_b2b.php",                "Las métricas que importan en cada etapa del viaje B2B."],
    ["6️⃣", "Retención y Engagement",                      "/metricas/pro/retencion_engagement.php",         "Cómo medir retención e introducción a la analítica de producto."],
    ["7️⃣", "Análisis de Cohortes",                        "/metricas/pro/analisis_cohortes.php",            "Estudio de cohortes paso a paso con plantilla de Google Sheets."],
    ["8️⃣", "Benchmark SaaS",                              "/metricas/pro/benchmark_saas.php",               "Cómo comparar tu SaaS con el mercado y situarte en la media."],
    ["9️⃣", "Modelos Financieros SaaS",                    "/metricas/pro/modelos_financieros.php",          "Cashflow, cuenta de pérdidas y ganancias y balance."],
    ["🔟", "Reporting a inversores",                       "/metricas/pro/reporting.php",                    "Data Room y One Pager para presentar a inversores."],
];

$extra = [
    ["👥", "Entrevistas a clientes",       "/metricas/entrevistas_clientes.html",    "Cómo hacer entrevistas a clientes que aporten señal."],
    ["🧭", "Quién lidera las métricas",    "/metricas/quien_lidera_metricas.html",   "Roles y responsabilidades en torno a los datos."],
];
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curso SaaS · Métricas, Finanzas y Modelos Financieros para SaaS</title>
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
            background: linear-gradient(180deg, #eef3f7 0%, #f5f7fa 280px);
            color: #1f2937;
        }
        .topbar {
            display: flex; justify-content: space-between; align-items: center;
            color: var(--c-muted); font-size: 0.875rem;
            padding: 0.25rem 0 1.25rem;
        }
        .topbar a {
            color: var(--c-blue); text-decoration: none; font-weight: 500;
        }
        .topbar a:hover { text-decoration: underline; }

        .hero {
            background: linear-gradient(135deg, #073B4C 0%, #0e5870 45%, #118AB2 100%);
            color: #fff;
            border-radius: 1.5rem;
            padding: 3rem 2.25rem 2.75rem;
            position: relative; overflow: hidden;
            box-shadow: 0 18px 48px -16px rgba(7,59,76,0.4);
            margin-bottom: 2rem;
        }
        .hero::after {
            content: '';
            position: absolute;
            inset: auto -150px -150px auto;
            width: 460px; height: 460px;
            background: radial-gradient(circle, rgba(6,214,160,0.4) 0%, transparent 70%);
            pointer-events: none;
        }
        .hero h1 {
            font-size: clamp(2rem, 4.4vw, 3rem); font-weight: 800;
            line-height: 1.12; letter-spacing: -0.02em;
            max-width: 22ch;
        }
        .hero .lead {
            margin-top: 1rem;
            font-size: 1.1rem; line-height: 1.55;
            color: rgba(255,255,255,0.9);
            max-width: 60ch;
        }
        .hero .lead strong { color: #b9f3e3; font-weight: 600; }

        .section-card {
            background: var(--c-card);
            border: 1px solid var(--c-border);
            border-radius: 1.25rem;
            padding: 1.85rem 1.85rem 1.5rem;
            box-shadow: 0 4px 14px rgba(20,40,60,0.04);
            margin-bottom: 1.75rem;
        }
        .section-title {
            display: flex; align-items: center; gap: 0.55rem;
            font-size: 1.45rem; font-weight: 700;
            color: var(--c-ink);
            margin: 0 0 0.5rem;
            letter-spacing: -0.01em;
        }
        .section-sub {
            color: var(--c-muted);
            font-size: 0.98rem; line-height: 1.55;
            margin-bottom: 1.25rem;
        }

        .video-frame {
            position: relative; padding-bottom: 56.25%; height: 0; overflow: hidden;
            border-radius: 0.85rem; background: #0a1822;
            border: 1px solid #d6dde5;
            box-shadow: 0 12px 28px -10px rgba(7,59,76,0.25);
        }
        .video-frame iframe, .video-frame video {
            position: absolute; inset: 0; width: 100%; height: 100%; border: 0;
            display: block;
        }
        .video-placeholder {
            position: absolute; inset: 0;
            display: flex; align-items: center; justify-content: center;
            color: rgba(255,255,255,0.7);
            text-align: center; padding: 2rem;
            background: linear-gradient(135deg, #073B4C, #0e5870);
            font-size: 0.92rem; line-height: 1.5;
        }

        .info-table {
            margin-top: 1.5rem;
            border: 1px solid var(--c-border);
            border-radius: 0.85rem;
            overflow: hidden;
            background: #fbfdff;
        }
        .info-table .head {
            background: linear-gradient(90deg, #f0f8fc, #e9f7f1);
            padding: 0.85rem 1.15rem;
            font-weight: 700; color: var(--c-ink);
            border-bottom: 1px solid var(--c-border);
            font-size: 0.98rem;
        }
        .info-table dl { margin: 0; padding: 0; }
        .info-table .row {
            display: grid;
            grid-template-columns: 220px 1fr;
            gap: 0;
            border-bottom: 1px solid var(--c-border);
        }
        .info-table .row:last-child { border-bottom: 0; }
        .info-table dt {
            padding: 0.85rem 1.15rem;
            font-weight: 600; color: var(--c-ink-2);
            background: #f7fafc;
            font-size: 0.95rem;
        }
        .info-table dd {
            margin: 0;
            padding: 0.85rem 1.15rem;
            color: #344554; font-size: 0.98rem;
            display: flex; align-items: center; gap: 0.4rem; flex-wrap: wrap;
        }
        .info-table dd a {
            color: var(--c-blue);
            font-weight: 600; text-decoration: none;
        }
        .info-table dd a:hover { text-decoration: underline; }
        .info-table dd .meta {
            color: var(--c-muted); font-size: 0.85rem; font-weight: 400;
        }
        @media (max-width: 600px) {
            .info-table .row { grid-template-columns: 1fr; }
            .info-table dt { background: #fbfdff; padding-bottom: 0; }
        }

        .aside-callout {
            margin-top: 1.5rem;
            display: flex; gap: 1rem;
            background: linear-gradient(135deg, #eaf6ff 0%, #e7f7f0 100%);
            border: 1px solid #c8e3f5;
            border-radius: 0.95rem;
            padding: 1.1rem 1.25rem;
            color: var(--c-ink);
            line-height: 1.55;
        }
        .aside-callout .ico {
            flex-shrink: 0; font-size: 1.25rem;
        }
        .aside-callout a {
            color: var(--c-blue); font-weight: 600;
            text-decoration: underline;
        }

        .grid-modules {
            display: grid; gap: 0.85rem;
            grid-template-columns: 1fr;
        }
        @media (min-width: 720px) {
            .grid-modules { grid-template-columns: repeat(2, 1fr); }
        }
        .module-card {
            background: #fff;
            border: 1px solid var(--c-border);
            border-radius: 0.9rem;
            padding: 1.1rem 1.2rem;
            display: flex; gap: 0.95rem; align-items: flex-start;
            text-decoration: none; color: inherit;
            transition: transform .15s, box-shadow .15s, border-color .15s;
        }
        .module-card:hover {
            transform: translateY(-2px);
            border-color: var(--c-mint);
            box-shadow: 0 10px 22px -10px rgba(17,138,178,0.28);
        }
        .module-card .num {
            font-size: 1.65rem; line-height: 1;
            flex-shrink: 0;
            width: 2.5rem; height: 2.5rem;
            display: flex; align-items: center; justify-content: center;
            background: linear-gradient(135deg, #f0f8fc, #e7f7f0);
            border-radius: 0.65rem;
        }
        .module-card h3 {
            font-size: 1.05rem; font-weight: 700; color: var(--c-ink);
            margin: 0 0 0.25rem; line-height: 1.3;
        }
        .module-card p {
            font-size: 0.88rem; color: var(--c-muted);
            margin: 0; line-height: 1.45;
        }

        footer.site-foot {
            text-align: center; font-size: 0.82rem; color: var(--c-muted);
            padding: 2rem 0 1rem; line-height: 1.6;
        }
        footer.site-foot strong { color: var(--c-ink); }
    </style>
</head>
<body class="px-4 sm:px-6 md:px-10 py-6 md:py-8">
    <div class="container mx-auto max-w-5xl">

        <div class="topbar">
            <div>Sesión: <strong style="color: var(--c-ink);"><?php echo $username; ?></strong></div>
            <a href="/metricas/logout.php">Cerrar sesión</a>
        </div>

        <header class="hero">
            <h1>Curso SaaS: Métricas, Finanzas y Modelos Financieros para SaaS</h1>
            <p class="lead">
                <strong>Bienvenido al curso sobre métricas y modelos SaaS.</strong>
                Este curso online está diseñado para explicarte con detalle el modelo SaaS, sus métricas y modelos financieros.
            </p>
        </header>

        <section class="section-card">
            <h2 class="section-title">🎬 Intro del curso</h2>

            <div class="video-frame">
                <?php if ($has_intro_video): ?>
                    <video controls preload="metadata" poster="">
                        <source src="assets/Intro.mp4" type="video/mp4">
                        Tu navegador no soporta el reproductor.
                    </video>
                <?php else: ?>
                    <div class="video-placeholder">
                        🎥 <strong>Intro.mp4</strong> — sube el archivo a <code style="background:rgba(255,255,255,0.12); padding:0.1rem 0.4rem; border-radius:0.3rem;">/metricas/pro/assets/Intro.mp4</code> para que aparezca aquí.
                    </div>
                <?php endif; ?>
            </div>

            <div class="info-table">
                <div class="head">Curso online · Métricas y Finanzas SaaS</div>
                <dl>
                    <div class="row"><dt>Profesor</dt><dd>Rubén Marzal</dd></div>
                    <div class="row"><dt>Email</dt><dd><a href="mailto:admin@nextscenario.com">admin@nextscenario.com</a></dd></div>
                    <div class="row"><dt>Acceso</dt><dd><a href="https://cursos.nextscenario.com/metricas/login.php">Acceso al curso</a></dd></div>
                    <div class="row"><dt>Agendar mentorías <span class="meta">(Necesario contratar previamente)</span></dt><dd><a href="https://tidycal.com/nextscenario/mentoria-curso" target="_blank" rel="noopener">Agendar mentoría</a></dd></div>
                    <div class="row"><dt>📕 Libro</dt><dd><a href="https://tinyurl.com/7as42k8c" target="_blank" rel="noopener">Comprar Libro SaaS</a></dd></div>
                </dl>
            </div>

            <div class="aside-callout">
                <span class="ico">📢</span>
                <span>Visualiza los videos cuando quieras, tantas veces como quieras. En cada apartado encontrarás el video del curso y el contenido de apoyo. Si has contratado las mentorías puedes <a href="https://tidycal.com/nextscenario/mentoria-curso" target="_blank" rel="noopener">agendar mentoría aquí</a>.</span>
            </div>
        </section>

        <section class="section-card">
            <h2 class="section-title">📅 Módulos del Curso · Métricas SaaS y Modelos Financieros</h2>
            <p class="section-sub">11 módulos en orden. Cada uno con video del curso y contenido de apoyo.</p>

            <div class="grid-modules">
                <?php foreach ($modules as [$num, $title, $href, $desc]): ?>
                    <a class="module-card" href="<?php echo htmlspecialchars($href); ?>">
                        <span class="num"><?php echo $num; ?></span>
                        <div>
                            <h3><?php echo htmlspecialchars($title); ?></h3>
                            <p><?php echo htmlspecialchars($desc); ?></p>
                        </div>
                    </a>
                <?php endforeach; ?>
            </div>
        </section>

        <?php if (!empty($extra)): ?>
        <section class="section-card">
            <h2 class="section-title">✨ Contenido complementario</h2>
            <p class="section-sub">Material extra para profundizar.</p>

            <div class="grid-modules">
                <?php foreach ($extra as [$num, $title, $href, $desc]): ?>
                    <a class="module-card" href="<?php echo htmlspecialchars($href); ?>">
                        <span class="num"><?php echo $num; ?></span>
                        <div>
                            <h3><?php echo htmlspecialchars($title); ?></h3>
                            <p><?php echo htmlspecialchars($desc); ?></p>
                        </div>
                    </a>
                <?php endforeach; ?>
            </div>
        </section>
        <?php endif; ?>

        <footer class="site-foot">
            <strong>Curso SaaS</strong> · Métricas, Finanzas y Modelos Financieros<br>
            Nextscenario · <a href="mailto:admin@nextscenario.com" style="color: var(--c-blue);">admin@nextscenario.com</a>
        </footer>

    </div>
</body>
</html>

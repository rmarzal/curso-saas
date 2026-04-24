<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: /metricas/login.php");
    exit();
}
$username = htmlspecialchars($_SESSION['username']);

$modules = [
    ["0️⃣", "¿Qué empresa quieres construir?",            "/metricas/que_empresa_quieres_construir.html", "Reflexión previa: decidir el tipo de empresa SaaS que quieres crear."],
    ["1️⃣", "Introducción a Modelos de Negocio SaaS",     "/metricas/modulo1.html",                       "Visión general de cómo funciona el negocio SaaS y sus palancas."],
    ["2️⃣", "Modelos de negocio y limitación de producto", "/metricas/modelos_de_negocio.html",           "Tipos de modelos SaaS y cómo diseñar la limitación del producto."],
    ["3️⃣", "Pricing SaaS",                                "/metricas/pricing.html",                      "Estrategias de precios y packaging para maximizar valor."],
    ["4️⃣", "Métricas SaaS fundamentales",                 "/metricas/Metricas_saas.html",                "MRR, ARR, LTV, CAC, Churn y el ecosistema de datos SaaS."],
    ["5️⃣", "B2B SaaS Metrics Journey Framework",          "/metricas/framework_b2b_saas_metrics.html",   "Las métricas que importan en cada etapa del viaje B2B."],
    ["6️⃣", "Retención y Engagement",                      "/metricas/pro/retencion_engagement.php",      "Cómo medir retención e introducción a la analítica de producto."],
    ["7️⃣", "Análisis de Cohortes",                        "/metricas/pro/analisis_cohortes.php",         "Estudio de cohortes paso a paso con plantilla de Google Sheets."],
    ["8️⃣", "Benchmark SaaS",                              "/metricas/pro/benchmark_saas.php",            "Cómo comparar tu SaaS con el mercado y situarte en la media."],
    ["9️⃣", "Modelos Financieros SaaS",                    "/metricas/modelos_financieros.html",          "Conceptos clave y construcción de modelos financieros SaaS."],
    ["🔟", "Reporting a inversores",                       "/metricas/reporting.html",                    "Data Room y One Pager para presentar a inversores."],
];

$extra = [
    ["🎯", "North Star Metric",            "/metricas/north_star_metric.html",       "La brújula que guía el crecimiento de tu empresa."],
    ["👥", "Entrevistas a clientes",       "/metricas/entrevistas_clientes.html",    "Cómo hacer entrevistas a clientes que aporten señal."],
    ["🚀", "Product Led Growth",           "/metricas/product_led_growth.html",      "PLG y el encaje real con el Product-Market Fit."],
    ["🤝", "Product Led Sales",            "/metricas/product_led_sales.html",       "Estrategia híbrida entre producto y ventas para SaaS."],
    ["🧭", "Quién lidera las métricas",    "/metricas/quien_lidera_metricas.html",   "Roles y responsabilidades en torno a los datos."],
    ["⚠️", "Vanity Metrics",              "/metricas/vanity_metrics.html",          "El peligro de las métricas que no significan nada."],
    ["⚙️", "Optimización SaaS",           "/metricas/optimización_saas.html",       "Cómo mejorar la rentabilidad de un negocio SaaS."],
];
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curso SaaS · Métricas, Finanzas y Modelos Financieros</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;700;900&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Inter', sans-serif;
            background-color: #f0f4f8;
            color: #1f2937;
        }
        .gradient-text {
            background: linear-gradient(90deg, #118AB2, #06D6A0);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }
        .hero {
            background: linear-gradient(135deg, #073B4C 0%, #118AB2 60%, #06D6A0 100%);
            color: #fff;
            border-radius: 1rem;
            padding: 3rem 2rem;
            box-shadow: 0 10px 30px rgba(7, 59, 76, 0.15);
        }
        .section-card {
            background-color: #fff;
            padding: 2rem;
            border-radius: 0.75rem;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.05);
            border: 1px solid #e2e8f0;
        }
        .module-card {
            background: #fff;
            border: 1px solid #e2e8f0;
            border-radius: 0.75rem;
            padding: 1.5rem;
            display: flex;
            gap: 1rem;
            align-items: flex-start;
            text-decoration: none;
            color: inherit;
            box-shadow: 0 2px 8px rgba(0,0,0,0.04);
            transition: transform 0.15s ease, box-shadow 0.15s ease, border-color 0.15s ease;
            height: 100%;
        }
        .module-card:hover {
            transform: translateY(-2px);
            box-shadow: 0 8px 20px rgba(17,138,178,0.12);
            border-color: #06D6A0;
        }
        .module-card .num {
            font-size: 2.2rem;
            line-height: 1;
            flex-shrink: 0;
        }
        .module-card h3 {
            font-size: 1.15rem;
            font-weight: 700;
            color: #073B4C;
            margin: 0 0 0.35rem 0;
        }
        .module-card p {
            font-size: 0.92rem;
            color: #4a5568;
            margin: 0;
            line-height: 1.45;
        }
        .extra-card .num { font-size: 1.6rem; }
        .extra-card h3 { font-size: 1rem; }
        .topbar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 0.75rem 0 1.5rem 0;
            color: #4a5568;
            font-size: 0.9rem;
        }
        .logout-btn {
            color: #118AB2;
            text-decoration: none;
            font-weight: 500;
        }
        .logout-btn:hover { text-decoration: underline; }
    </style>
</head>
<body class="p-6 md:p-10">
    <div class="container mx-auto max-w-6xl">

        <div class="topbar">
            <div>Sesión: <strong><?php echo $username; ?></strong></div>
            <a class="logout-btn" href="/metricas/logout.php">Cerrar sesión</a>
        </div>

        <header class="hero text-center mb-10">
            <div class="text-5xl mb-3">💻</div>
            <h1 class="text-3xl md:text-5xl font-black mb-4">Curso SaaS: Métricas, Finanzas y Modelos Financieros</h1>
            <p class="text-lg md:text-xl opacity-90 max-w-3xl mx-auto">
                Bienvenido al curso sobre métricas y modelos SaaS. Este curso online está diseñado para explicarte con detalle el modelo SaaS, sus métricas y modelos financieros.
            </p>
            <p class="text-sm md:text-base opacity-80 mt-4">
                Impartido por <strong>Rubén Marzal</strong> · Nextscenario · <a class="underline" href="mailto:admin@nextscenario.com">admin@nextscenario.com</a>
            </p>
        </header>

        <section class="section-card mb-8">
            <h2 class="text-2xl md:text-3xl font-bold text-[#073B4C] mb-2">📅 Módulos del curso</h2>
            <p class="text-gray-600 mb-6">Visualiza los videos cuando quieras, tantas veces como quieras. En cada apartado encontrarás el video del curso y el contenido de apoyo.</p>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
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

        <section class="section-card">
            <h2 class="text-2xl md:text-3xl font-bold text-[#073B4C] mb-2">✨ Contenido complementario</h2>
            <p class="text-gray-600 mb-6">Infografías y materiales adicionales para profundizar.</p>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
                <?php foreach ($extra as [$num, $title, $href, $desc]): ?>
                    <a class="module-card extra-card" href="<?php echo htmlspecialchars($href); ?>">
                        <span class="num"><?php echo $num; ?></span>
                        <div>
                            <h3><?php echo htmlspecialchars($title); ?></h3>
                            <p><?php echo htmlspecialchars($desc); ?></p>
                        </div>
                    </a>
                <?php endforeach; ?>
            </div>
        </section>

        <footer class="text-center text-sm text-gray-500 py-8">
            Curso SaaS · Métricas, Finanzas y Modelos Financieros · Nextscenario
        </footer>

    </div>
</body>
</html>

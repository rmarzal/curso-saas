<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: /metricas/login.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Retención y Engagement — Curso SaaS</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;700;900&display=swap" rel="stylesheet">
    <style>
        body { font-family: 'Inter', sans-serif; background-color: #f0f4f8; color: #1f2937; }
        .gradient-text {
            background: linear-gradient(90deg, #118AB2, #06D6A0);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }
        .section-card {
            background-color: #fff;
            padding: 2rem 2.5rem;
            border-radius: 0.75rem;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.05);
            margin-bottom: 2rem;
            border: 1px solid #e2e8f0;
        }
        .section-card > * + * { margin-top: 1rem; }
        h2.module-h2 {
            font-size: 1.75rem;
            font-weight: 700;
            color: #073B4C;
            margin: 0 0 0.5rem 0;
            padding-bottom: 0.5rem;
            border-bottom: 2px solid #06D6A0;
            display: flex;
            align-items: center;
            gap: 0.5rem;
        }
        h3.module-h3 {
            font-size: 1.25rem;
            font-weight: 600;
            color: #118AB2;
            margin: 0 0 0.5rem 0;
        }
        .module-p { color: #374151; font-size: 1.05rem; line-height: 1.65; }
        .video-wrap {
            position: relative; padding-bottom: 56.25%; height: 0; overflow: hidden;
            border-radius: 0.75rem; box-shadow: 0 4px 14px rgba(0,0,0,0.1);
        }
        .video-wrap iframe { position: absolute; top: 0; left: 0; width: 100%; height: 100%; border: 0; }
        .video-label { font-size: 0.95rem; color: #4a5568; margin-top: 0.6rem; font-weight: 500; }
        .resource-btn {
            display: inline-flex; align-items: center; gap: 0.5rem;
            padding: 0.85rem 1.5rem; border-radius: 0.5rem; font-weight: 600;
            text-decoration: none; transition: transform 0.15s ease, box-shadow 0.15s ease;
        }
        .resource-btn:hover { transform: translateY(-1px); }
        .btn-primary { background: linear-gradient(90deg, #118AB2, #06D6A0); color: #fff;
                       box-shadow: 0 4px 10px rgba(17,138,178,0.2); }
        .btn-primary:hover { box-shadow: 0 6px 14px rgba(17,138,178,0.28); }
        .btn-secondary { background: #fff; color: #118AB2; border: 2px solid #118AB2; }
        .btn-secondary:hover { background: #e3f2fd; }
        .resource-row { display: flex; flex-wrap: wrap; gap: 0.75rem; }
        ol.module-ol {
            padding-left: 1.5rem;
            margin-top: 0.5rem;
            list-style: decimal;
        }
        ol.module-ol li {
            margin: 0.5rem 0;
            color: #374151;
            font-size: 1.02rem;
            line-height: 1.55;
            padding-left: 0.25rem;
        }
        ol.module-ol li::marker { color: #118AB2; font-weight: 700; }
        .callout {
            background: #e3f2fd;
            border-left: 4px solid #118AB2;
            padding: 1rem 1.25rem;
            border-radius: 0.5rem;
            color: #073B4C;
            font-size: 1.02rem;
            line-height: 1.55;
        }
        .back-link {
            display: inline-flex; align-items: center; gap: 0.35rem; color: #118AB2;
            text-decoration: none; font-weight: 500; margin-bottom: 1.5rem;
        }
        .back-link:hover { text-decoration: underline; }
</style>
</head>
<body class="p-6 md:p-10">
    <div class="container mx-auto max-w-5xl">

        <a href="embed.php" class="back-link">&larr; Volver al índice del curso</a>

        <header class="text-center py-8">
            <div class="text-5xl mb-3">6️⃣</div>
            <h1 class="text-4xl md:text-5xl font-black mb-4 gradient-text">Retención y Engagement</h1>
        </header>

        <main class="section-card">
            <p class="module-p">En este módulo veremos la retención en detalle, desde cómo calcularla hasta una visión de producto. Haremos una introducción a la analítica de producto para poder analizarla.</p>
            <div class="video-wrap">
                <iframe src="https://www.youtube.com/embed/iIyfCn6t3WU"
                        title="📺 Retención y Engagement"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                        allowfullscreen></iframe>
            </div>
            <p class="video-label">📺 Retención y Engagement</p>
            <h2 class="module-h2">Contenido — Retención y Engagement</h2>
            <div class="resource-row"><a class="resource-btn btn-primary" href="assets/retencion_engagement.pdf" target="_blank" rel="noopener"><span>📥</span> Curso SaaS NS — Retención y Engagement (UMH)</a></div>
        </main>

        <footer class="text-center text-sm text-gray-500 py-8">
            Curso SaaS · Métricas, Finanzas y Modelos Financieros · Nextscenario
        </footer>
    </div>
</body>
</html>

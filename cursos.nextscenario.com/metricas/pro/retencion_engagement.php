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
        .section-card {
            background-color: #fff;
            padding: 2.5rem;
            border-radius: 0.75rem;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.05);
            margin-bottom: 2rem;
            border: 1px solid #e2e8f0;
        }
        h2 {
            font-size: 2rem;
            font-weight: 700;
            color: #2d3748;
            margin-bottom: 1.5rem;
        }
        h3 {
            font-size: 1.5rem;
            font-weight: 600;
            color: #4a5568;
            margin-bottom: 1rem;
        }
        .video-wrap {
            position: relative;
            padding-bottom: 56.25%;
            height: 0;
            overflow: hidden;
            border-radius: 0.75rem;
            box-shadow: 0 4px 14px rgba(0,0,0,0.1);
        }
        .video-wrap iframe {
            position: absolute;
            top: 0; left: 0;
            width: 100%; height: 100%;
            border: 0;
        }
        .download-btn {
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
            background: linear-gradient(90deg, #118AB2, #06D6A0);
            color: #fff;
            padding: 0.85rem 1.5rem;
            border-radius: 0.5rem;
            font-weight: 600;
            text-decoration: none;
            box-shadow: 0 4px 10px rgba(17,138,178,0.2);
            transition: transform 0.15s ease, box-shadow 0.15s ease;
        }
        .download-btn:hover {
            transform: translateY(-1px);
            box-shadow: 0 6px 14px rgba(17,138,178,0.28);
        }
        .back-link {
            display: inline-flex;
            align-items: center;
            gap: 0.35rem;
            color: #118AB2;
            text-decoration: none;
            font-weight: 500;
            margin-bottom: 1.5rem;
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
            <p class="text-lg md:text-xl text-gray-600 max-w-3xl mx-auto">
                En este módulo veremos la retención en detalle, desde cómo calcularla hasta una visión de producto. Haremos una introducción a la analítica de producto para poder analizarla.
            </p>
        </header>

        <main class="space-y-8">

            <section class="section-card">
                <h2 class="text-[#073B4C] flex items-center gap-3"><span>📺</span> Video del módulo</h2>
                <div class="video-wrap">
                    <iframe src="https://www.youtube.com/embed/iIyfCn6t3WU"
                            title="Retención y Engagement"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen></iframe>
                </div>
            </section>

            <section class="section-card">
                <h2 class="text-[#073B4C] flex items-center gap-3"><span>📑</span> Material de apoyo</h2>
                <p class="text-gray-700 mb-4">Contenido complementario del módulo "Retención y Engagement" (UMH).</p>
                <a class="download-btn" href="assets/retencion_engagement.pdf" target="_blank" rel="noopener">
                    <span>📥</span> Descargar PDF
                </a>
            </section>

        </main>

        <footer class="text-center text-sm text-gray-500 py-8">
            Curso SaaS · Métricas, Finanzas y Modelos Financieros · Nextscenario
        </footer>
    </div>
</body>
</html>

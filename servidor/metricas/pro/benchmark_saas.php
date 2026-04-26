<?php
session_start();
if (!isset($_SESSION['username'])) { header("Location: /metricas/login.php?v=1"); exit(); }
$module_num = "08";
$module_title = "Benchmark SaaS — Cómo comparar negocios SaaS";
$module_subtitle = "El benchmark de métricas SaaS entre negocios. Para saber si tu churn, tu CAC o tu LTV están en la media.";
include __DIR__ . '/_partials/head.php';
?>

        <main class="content-card">

            <p class="module-p">Seguro que muchas veces te has preguntado: <strong>¿un 5% de churn es bueno?</strong> ¿estoy en la media? Pues la cuestión es que depende de cómo y con quién te compares.</p>

            <p class="module-p">En este módulo hablaremos sobre el benchmark de métricas SaaS entre negocios.</p>

            <div class="video-block">
                <div class="video-frame">
                    <iframe src="https://www.youtube.com/embed/pDTfWOlFlDE"
                            title="Video Benchmark SaaS"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen></iframe>
                </div>
                <div class="video-caption"><span class="badge">VIDEO</span> Benchmark SaaS</div>
            </div>

            <div class="resources">
                <a class="resource primary" href="https://firebasestorage.googleapis.com/v0/b/nextscenario-cf4c6.appspot.com/o/templates%2FEnglish%202024%20Saas%20Benchmark%20%20Report.pdf?alt=media&amp;token=113de9b2-9c8d-4163-8f30-a5c5bffb6ed8" target="_blank" rel="noopener">
                    <span class="ico">📥</span>
                    <span><span class="label">Descargar estudio sobre retención</span><span class="meta">2024 SaaS Benchmark Report (PDF · inglés)</span></span>
                </a>
            </div>

        </main>

<?php include __DIR__ . '/_partials/foot.php'; ?>

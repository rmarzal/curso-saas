<?php
session_start();
if (!isset($_SESSION['username'])) { header("Location: /metricas/login.php"); exit(); }
$module_num = "5️⃣";
$module_title = "B2B SaaS Metrics Journey Framework";
$module_subtitle = "Las métricas que importan en cada etapa del viaje B2B SaaS, desde la captación hasta la expansión.";
include __DIR__ . '/_partials/head.php';
?>

        <main class="content-card">

            <div class="video-block">
                <div class="video-frame">
                    <iframe src="https://www.youtube.com/embed/8ZicJMPB384"
                            title="Video The B2B SaaS Metrics Framework"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen></iframe>
                </div>
                <div class="video-caption"><span class="badge">VIDEO</span> The B2B SaaS Metrics Framework</div>
            </div>

            <div class="resources">
                <a class="resource primary" href="/metricas/framework_b2b_saas_metrics.html" target="_blank" rel="noopener">
                    <span class="ico">🗺️</span>
                    <span><span class="label">Infografía detallada del framework</span><span class="meta">Mapa interactivo de las métricas B2B por etapa</span></span>
                </a>
            </div>

        </main>

<?php include __DIR__ . '/_partials/foot.php'; ?>

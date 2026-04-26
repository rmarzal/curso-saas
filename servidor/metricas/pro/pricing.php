<?php
session_start();
if (!isset($_SESSION['username'])) { header("Location: /metricas/login.php?v=1"); exit(); }
$module_num = "03";
$module_title = "Pricing SaaS";
$module_subtitle = "Diferentes estrategias de pricing para posicionarnos en el mercado: desde cómo definir los precios hasta cómo presentarlos.";
include __DIR__ . '/_partials/head.php';
?>

        <main class="content-card">

            <p class="module-p">En este módulo vamos a ver diferentes estrategias de pricing para posicionarnos en el mercado: desde cómo definir los precios hasta cómo presentarlos.</p>

            <div class="video-block">
                <div class="video-frame">
                    <iframe src="https://www.youtube.com/embed/RG2hof7g0sY"
                            title="Video Pricing"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen></iframe>
                </div>
                <div class="video-caption"><span class="badge">VIDEO</span> Pricing</div>
            </div>

            <div class="resources">
                <a class="resource" href="/metricas/pricing.html?v=2" target="_blank" rel="noopener">
                    <span class="ico">📕</span>
                    <span><span class="label">Contenido de soporte de pricing</span><span class="meta">Infografía · abre en nueva pestaña</span></span>
                </a>
            </div>

            <div class="callout">
                <span class="ico">💡</span>
                <span><strong>Caso práctico:</strong> Diseña tu estrategia de pricing o evalúa tu estrategia actual.</span>
            </div>

        </main>

<?php include __DIR__ . '/_partials/foot.php'; ?>

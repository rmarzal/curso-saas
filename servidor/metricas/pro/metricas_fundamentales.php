<?php
session_start();
if (!isset($_SESSION['username'])) { header("Location: /metricas/login.php?v=1"); exit(); }
$module_num = "04";
$module_title = "Métricas SaaS fundamentales";
$module_subtitle = "El lenguaje universal de los negocios SaaS. MRR, ARR, LTV, CAC, churn, eficiencia y unit economics.";
include __DIR__ . '/_partials/head.php';
?>

        <main class="content-card">

            <p class="module-p"><strong>El lenguaje universal de los negocios SaaS.</strong></p>

            <ul class="topics">
                <li>Métricas clave vs Vanity Metrics</li>
                <li>North Star Metric</li>
                <li>Métricas de captación y activación</li>
                <li>Métricas de monetización</li>
                <li>Métricas de eficiencia</li>
                <li>Unit Economics: LTV, CAC, Payback, Gross Margin</li>
            </ul>

            <h2 class="module-h2">Contenidos de apoyo</h2>

            <div class="resources cols-2">
                <a class="resource" href="/metricas/vanity_metrics.html" target="_blank" rel="noopener">
                    <span class="ico">📕</span>
                    <span><span class="label">Contenido Vanity Metrics</span><span class="meta">Infografía · abre en nueva pestaña</span></span>
                </a>
                <a class="resource" href="/metricas/north_star_metric.html" target="_blank" rel="noopener">
                    <span class="ico">📕</span>
                    <span><span class="label">Contenido North Star Metric</span><span class="meta">Infografía · abre en nueva pestaña</span></span>
                </a>
                <a class="resource" href="/metricas/Metricas_saas.html" target="_blank" rel="noopener">
                    <span class="ico">📕</span>
                    <span><span class="label">Contenido Métricas SaaS</span><span class="meta">Infografía · abre en nueva pestaña</span></span>
                </a>
                <a class="resource" href="/metricas/framework_b2b_saas_metrics.html" target="_blank" rel="noopener">
                    <span class="ico">📕</span>
                    <span><span class="label">Contenido B2B SaaS Metrics Framework</span><span class="meta">Infografía · abre en nueva pestaña</span></span>
                </a>
            </div>

            <h2 class="module-h2">Videos del módulo</h2>

            <div class="video-block">
                <div class="video-frame">
                    <iframe src="https://www.youtube.com/embed/1Y4qcbImLko"
                            title="Video Vanity Metrics y North Star Metric"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen></iframe>
                </div>
                <div class="video-caption"><span class="badge">VIDEO</span> Vanity Metrics y North Star Metric</div>
            </div>

            <div class="video-block">
                <div class="video-frame">
                    <iframe src="https://www.youtube.com/embed/KOxYql8Htg8"
                            title="Video Métricas SaaS B2B"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen></iframe>
                </div>
                <div class="video-caption"><span class="badge">VIDEO</span> Métricas SaaS B2B</div>
            </div>

            <div class="cta-box">
                <h3>✍️ Define tu North Star Metric y revisa cómo estás midiendo tus métricas</h3>
                <p>Si necesitas revisar tus métricas, puedes <a href="https://tidycal.com/nextscenario/mentoria-curso" target="_blank" rel="noopener">agendar una reunión</a>.</p>
            </div>

        </main>

<?php include __DIR__ . '/_partials/foot.php'; ?>

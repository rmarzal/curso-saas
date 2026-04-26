<?php
session_start();
if (!isset($_SESSION['username'])) { header("Location: /metricas/login.php?v=1"); exit(); }
$module_num = "09";
$module_title = "Modelos Financieros SaaS";
$module_subtitle = "Los principales modelos financieros en la gestión de una empresa: cashflow, cuenta de resultados y balance.";
include __DIR__ . '/_partials/head.php';
?>

        <main class="content-card">

            <p class="module-p">En este módulo veremos los principales modelos financieros en la gestión de una empresa:</p>

            <ul class="topics">
                <li>Cashflow</li>
                <li>Cuenta de pérdidas y ganancias</li>
                <li>Balance</li>
            </ul>

            <h2 class="module-h2">Videos del módulo</h2>

            <div class="video-block">
                <div class="video-frame">
                    <iframe src="https://www.youtube.com/embed/yDW6ASI51Y4"
                            title="Video modelos financieros SaaS"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen></iframe>
                </div>
                <div class="video-caption"><span class="badge">VIDEO</span> Modelos financieros SaaS</div>
            </div>

            <div class="video-block">
                <div class="video-frame">
                    <iframe src="https://www.youtube.com/embed/AbWfyj7y8Bw"
                            title="Video explicación plantilla cashflow y métricas"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen></iframe>
                </div>
                <div class="video-caption"><span class="badge">VIDEO</span> Explicación plantilla cashflow y métricas</div>
            </div>

            <h2 class="module-h2">Plantilla y contenidos</h2>

            <div class="resources">
                <a class="resource primary" href="https://docs.google.com/spreadsheets/d/1KlPY1AlP5QDZ27SltZuMOi-cyEFo93FBbGWBe47kpVk/edit?usp=sharing" target="_blank" rel="noopener">
                    <span class="ico">📑</span>
                    <span><span class="label">Plantilla Cashflow + B2B SaaS Metrics</span><span class="meta">Google Sheets · abre en nueva pestaña</span></span>
                </a>
                <a class="resource" href="/metricas/modelos_financieros.html" target="_blank" rel="noopener">
                    <span class="ico">📑</span>
                    <span><span class="label">Contenido Modelos Financieros</span><span class="meta">Infografía · abre en nueva pestaña</span></span>
                </a>
                <a class="resource" href="/metricas/optimizacion_saas.html" target="_blank" rel="noopener">
                    <span class="ico">📑</span>
                    <span><span class="label">Contenido mejorar la rentabilidad</span><span class="meta">Optimización SaaS · abre en nueva pestaña</span></span>
                </a>
            </div>

        </main>

<?php include __DIR__ . '/_partials/foot.php'; ?>

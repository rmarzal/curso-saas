<?php
session_start();
if (!isset($_SESSION['username'])) { header("Location: /metricas/login.php?v=1"); exit(); }
$module_num = "07";
$module_title = "Análisis de Cohortes";
$module_subtitle = "Cómo realizar un estudio de cohortes paso a paso. Incluye plantilla descargable de Google Sheets.";
include __DIR__ . '/_partials/head.php';
?>

        <main class="content-card">

            <p class="module-p">En este módulo entramos en detalle en cómo realizar un estudio de cohortes. Puedes encontrar la plantilla de Google Sheets más abajo.</p>

            <div class="video-block">
                <div class="video-frame">
                    <iframe src="https://www.youtube.com/embed/OjWc764KRkE"
                            title="Análisis de Cohortes"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen></iframe>
                </div>
                <div class="video-caption"><span class="badge">VIDEO</span> Análisis de Cohortes</div>
            </div>

            <div class="resources cols-2">
                <a class="resource primary" href="assets/estudio_cohortes.pdf" target="_blank" rel="noopener">
                    <span class="ico">📥</span>
                    <span><span class="label">Estudio de Cohortes</span><span class="meta">PDF descargable</span></span>
                </a>
                <a class="resource" href="https://docs.google.com/spreadsheets/d/1QZ3BfEEAmq7d7o0ELGZiDL2JrOINRuiab-5-518ztgg/edit?usp=sharing" target="_blank" rel="noopener">
                    <span class="ico">📑</span>
                    <span><span class="label">Plantilla Sheets — Estudio de Cohortes</span><span class="meta">Google Sheets · abre en nueva pestaña</span></span>
                </a>
            </div>

        </main>

<?php include __DIR__ . '/_partials/foot.php'; ?>

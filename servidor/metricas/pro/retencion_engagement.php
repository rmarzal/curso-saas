<?php
session_start();
if (!isset($_SESSION['username'])) { header("Location: /metricas/login.php?v=1"); exit(); }
$module_num = "06";
$module_title = "Retención y Engagement";
$module_subtitle = "Veremos la retención en detalle, desde cómo calcularla hasta una visión de producto. Una introducción a la analítica de producto para poder analizarla.";
include __DIR__ . '/_partials/head.php';
?>

        <main class="content-card">

            <p class="module-p">En este módulo veremos la retención en detalle, desde cómo calcularla hasta una visión de producto. Haremos una introducción a la analítica de producto para poder analizarla.</p>

            <div class="video-block">
                <div class="video-frame">
                    <iframe src="https://www.youtube.com/embed/iIyfCn6t3WU"
                            title="Retención y Engagement"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen></iframe>
                </div>
                <div class="video-caption"><span class="badge">VIDEO</span> Retención y Engagement</div>
            </div>

            <div class="resources">
                <a class="resource primary" href="assets/retencion_engagement.pdf" target="_blank" rel="noopener">
                    <span class="ico">📑</span>
                    <span><span class="label">Contenido Retención y Engagement</span><span class="meta">PDF · Curso SaaS NS — UMH</span></span>
                </a>
            </div>

        </main>

<?php include __DIR__ . '/_partials/foot.php'; ?>

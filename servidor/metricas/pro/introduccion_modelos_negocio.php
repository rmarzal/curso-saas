<?php
session_start();
if (!isset($_SESSION['username'])) { header("Location: /metricas/login.php?v=1"); exit(); }
$module_num = "01";
$module_title = "Introducción Modelos de negocio SaaS";
$module_subtitle = "Características del modelo SaaS y los principales factores de fracaso. La base sobre la que construimos el resto del curso.";
include __DIR__ . '/_partials/head.php';
?>

        <main class="content-card">

            <p class="module-p">Este módulo es una introducción al modelo de negocio SaaS, en el que veremos sus características y los principales factores de fracaso.</p>

            <div class="video-block">
                <div class="video-frame">
                    <iframe src="https://www.youtube.com/embed/NFrDckgU0ko"
                            title="Video Módulo 1. Introducción modelos de negocio SaaS"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen></iframe>
                </div>
                <div class="video-caption"><span class="badge">VIDEO</span> Módulo 1 · Introducción modelos de negocio SaaS</div>
            </div>

            <div class="resources">
                <a class="resource" href="/metricas/modulo1.html?v=2" target="_blank" rel="noopener">
                    <span class="ico">📕</span>
                    <span><span class="label">Contenido de apoyo</span><span class="meta">Infografía del módulo · abre en nueva pestaña</span></span>
                </a>
            </div>

        </main>

<?php include __DIR__ . '/_partials/foot.php'; ?>

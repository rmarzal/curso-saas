<?php
session_start();
if (!isset($_SESSION['username'])) { header("Location: /metricas/login.php"); exit(); }
$module_num = "0️⃣";
$module_title = "¿Qué empresa quieres construir?";
$module_subtitle = "Reflexión inicial antes de empezar el curso: el tipo de empresa SaaS que quieres construir y el camino que estás tomando.";
include __DIR__ . '/_partials/head.php';
?>

        <main class="content-card">

            <div class="video-block">
                <div class="video-frame">
                    <iframe src="https://www.youtube.com/embed/2XsJIB7AjbA"
                            title="Link Video Introducción al curso"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen></iframe>
                </div>
                <div class="video-caption"><span class="badge">VIDEO</span> Introducción al curso</div>
            </div>

            <h3 class="module-h3">📌 Módulo de reflexión personal antes de empezar</h3>
            <p class="module-p">En este apartado nos gustaría que reflexiones sobre el tipo de empresa que tienes o en la que trabajas, o si aún estás lanzándola, cómo te gustaría que fuese.</p>

            <div class="video-block">
                <div class="video-frame">
                    <iframe src="https://www.youtube.com/embed/iow1Qv5LPH4"
                            title="¿Qué empresa quieres construir?"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen></iframe>
                </div>
                <div class="video-caption"><span class="badge">VIDEO</span> ¿Qué empresa quieres construir?</div>
            </div>

            <div class="resources">
                <a class="resource" href="/metricas/que_empresa_quieres_construir.html" target="_blank" rel="noopener">
                    <span class="ico">📕</span>
                    <span><span class="label">Contenido: Qué empresa quieres construir</span><span class="meta">Infografía de apoyo · abre en nueva pestaña</span></span>
                </a>
            </div>

            <h2 class="module-h2">Ahora debes hacer tu la reflexión</h2>

            <div class="reflection">
                <div class="q"><span class="n">1</span><span>¿Qué empresa quieres construir o en cuál te gustaría trabajar?</span></div>
                <div class="q"><span class="n">2</span><span>¿Estás en el camino correcto o debes replantearte la manera en la que lo estás haciendo?</span></div>
                <div class="q"><span class="n">3</span><span>¿Te has decidido por levantar inversión o ser una empresa <em>bootstrapeada</em> que se financia con sus propios recursos o ahorros? ¿Vas solo o acompañado?</span></div>
            </div>

        </main>

<?php include __DIR__ . '/_partials/foot.php'; ?>

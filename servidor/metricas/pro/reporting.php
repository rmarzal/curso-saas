<?php
session_start();
if (!isset($_SESSION['username'])) { header("Location: /metricas/login.php?v=1"); exit(); }
$module_num = "10";
$module_title = "Reporting a inversores";
$module_subtitle = "Cómo reportar a inversores y las principales herramientas que se utilizan: el One Pager y el Data Room.";
include __DIR__ . '/_partials/head.php';
?>

        <main class="content-card">

            <p class="module-p">En este módulo hablamos de cómo reportar a inversores y las principales herramientas que se utilizan: el <strong>One Pager</strong> y el <strong>Data Room</strong>.</p>

            <div class="video-block">
                <div class="video-frame">
                    <iframe src="https://www.youtube.com/embed/9ap1qGGTTF0"
                            title="Enlace al video de reporting"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen></iframe>
                </div>
                <div class="video-caption"><span class="badge">VIDEO</span> Reporting a inversores</div>
            </div>

            <div class="resources">
                <a class="resource" href="/metricas/reporting.html?v=2" target="_blank" rel="noopener">
                    <span class="ico">📑</span>
                    <span><span class="label">Contenido reporting: Data Room y One Pager</span><span class="meta">Infografía · abre en nueva pestaña</span></span>
                </a>
            </div>

        </main>

<?php include __DIR__ . '/_partials/foot.php'; ?>

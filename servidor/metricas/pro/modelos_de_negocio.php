<?php
session_start();
if (!isset($_SESSION['username'])) { header("Location: /metricas/login.php"); exit(); }
$module_num = "2️⃣";
$module_title = "Modelos de negocio y limitación de producto";
$module_subtitle = "Las principales metodologías de Go to Market: Ventas vs Product Led Growth, los modelos Freemium vs Free Trial y las estrategias para limitar un producto.";
include __DIR__ . '/_partials/head.php';
?>

        <main class="content-card">

            <p class="module-p">En este módulo veremos las principales metodologías de Go to Market: Ventas vs Product Led Growth, los modelos Freemium vs Free Trial, y las principales estrategias para limitar un producto. Esta parte es fundamental antes de entrar en el pricing.</p>

            <h2 class="module-h2">Go To Market: Product Led Growth</h2>

            <div class="video-block">
                <div class="video-frame">
                    <iframe src="https://www.youtube.com/embed/VlhroskJsJk"
                            title="Link Video Product Led Growth"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen></iframe>
                </div>
                <div class="video-caption"><span class="badge">VIDEO</span> Product Led Growth</div>
            </div>

            <div class="resources">
                <a class="resource" href="/metricas/product_led_growth.html" target="_blank" rel="noopener">
                    <span class="ico">📕</span>
                    <span><span class="label">Contenido Product Led Growth</span><span class="meta">Infografía · abre en nueva pestaña</span></span>
                </a>
            </div>

            <h2 class="module-h2">Go To Market: Sales &amp; Product Led Sales</h2>

            <div class="video-block">
                <div class="video-frame">
                    <iframe src="https://www.youtube.com/embed/FJYZMjG_YZs"
                            title="Link Video Product Led Sales"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen></iframe>
                </div>
                <div class="video-caption"><span class="badge">VIDEO</span> Product Led Sales</div>
            </div>

            <div class="resources">
                <a class="resource" href="/metricas/product_led_sales.html" target="_blank" rel="noopener">
                    <span class="ico">📕</span>
                    <span><span class="label">Contenido Product Led Sales</span><span class="meta">Infografía · abre en nueva pestaña</span></span>
                </a>
            </div>

            <h2 class="module-h2">Cómo limitar un producto: Freemium vs Free Trial</h2>

            <div class="video-block">
                <div class="video-frame">
                    <iframe src="https://www.youtube.com/embed/aOX4yy79L_0"
                            title="Cómo limitar un producto. Modelo Freemium vs Free Trial"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen></iframe>
                </div>
                <div class="video-caption"><span class="badge">VIDEO</span> Cómo limitar un producto · Freemium vs Free Trial</div>
            </div>

            <div class="resources">
                <a class="resource" href="/metricas/modelos_de_negocio.html" target="_blank" rel="noopener">
                    <span class="ico">📕</span>
                    <span><span class="label">Contenido modelos de negocio</span><span class="meta">Infografía · abre en nueva pestaña</span></span>
                </a>
            </div>

            <h2 class="module-h2">Reflexión antes de continuar</h2>

            <p class="module-p">Después de las etapas iniciales del curso, me gustaría que pararas tu tiempo para reflexionar lo que has hecho hasta ahora y/o los próximos pasos a seguir. Tómate tu tiempo antes de avanzar más en el curso.</p>

            <div class="reflection">
                <div class="q"><span class="n">1</span><span>¿Qué estrategia de Go To Market estás siguiendo y cómo la estás ejecutando?</span></div>
                <div class="q"><span class="n">2</span><span>¿Cómo estás limitando el uso de tu producto?</span></div>
                <div class="q"><span class="n">3</span><span>¿Tienes un modelo freemium o free trial? ¿Tiene sentido para ti?</span></div>
            </div>

        </main>

<?php include __DIR__ . '/_partials/foot.php'; ?>

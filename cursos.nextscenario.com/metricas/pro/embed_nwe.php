<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: /metricas/login.php");
    exit();
}
// Tras validar sesión, redirige a Notion
header("Location: https://gossamer-cornflower-4c4.notion.site/ebd/21ff1f10e2ba805289a2c8b893026226");
exit();
?>
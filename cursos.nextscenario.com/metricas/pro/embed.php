<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: /metricas/login.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curso Métricas y Modelos Financieros SaaS</title>
    <style>
        html, body { margin: 0; padding: 0; height: 100%; overflow: hidden; }
        iframe { display: block; width: 100%; height: 100vh; border: none; }
    </style>
</head>
<body>
    <iframe src="https://gossamer-cornflower-4c4.notion.site/Curso-SaaS-M-tricas-Finanzas-y-Modelos-Financieros-para-SaaS-21ff1f10e2ba805289a2c8b893026226" allowfullscreen></iframe>
</body>
</html>
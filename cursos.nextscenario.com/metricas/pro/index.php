<?php
session_start();
if (isset($_SESSION['username'])) {
    // Si ya hay sesión, ir directo al embed
    header("Location: embed.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <title>Curso Métricas y Modelos Financieros SaaS - Login</title>
  <style>
    body {
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      background: linear-gradient(135deg, #2c3e50, #3498db);
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
      margin: 0;
    }
    .login-container {
      background-color: white;
      padding: 40px;
      border-radius: 10px;
      box-shadow: 0 0 15px rgba(0,0,0,0.2);
      width: 350px;
      text-align: center;
    }
    .login-container h1 {
      color: #2c3e50;
      font-size: 22px;
      margin-bottom: 5px;
    }
    .login-container p {
      color: #7f8c8d;
      margin-bottom: 15px;
      font-size: 14px;
    }
    .login-container .instruction {
      color: #34495e;
      font-size: 15px;
      margin-bottom: 20px;
      font-weight: 500;
    }
    input[type="text"], input[type="password"] {
      width: 100%;
      padding: 12px;
      margin: 8px 0 20px 0;
      border: 1px solid #ccc;
      border-radius: 5px;
      font-size: 14px;
    }
    button {
      width: 100%;
      padding: 12px;
      background-color: #2980b9;
      color: white;
      border: none;
      border-radius: 5px;
      font-size: 15px;
      cursor: pointer;
      transition: background-color 0.3s ease;
    }
    button:hover {
      background-color: #2471a3;
    }
    .error {
      color: red;
      margin-bottom: 10px;
      font-size: 13px;
    }
  </style>
</head>
<body>
  <div class="login-container">
    <h1>Curso Métricas y Modelos Financieros SaaS</h1>
    <p>Impartido por Nextscenario</p>
    <div class="instruction">Inserta tu usuario y contraseña</div>
    <?php
      if (isset($_GET['error'])) {
        echo '<div class="error"></div>';
      }
    ?>
    <form method="post" action="check_login.php">
      <input type="text" name="username" placeholder="Usuario" required />
      <input type="password" name="password" placeholder="Contraseña" required />
      <button type="submit">Entrar</button>
    </form>
  </div>
</body>
</html>
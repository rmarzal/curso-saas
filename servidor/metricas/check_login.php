<?php
session_start();

$users = [
    "magi@funnelcracks.com" => '1M2s45d$marys',
    "pcorneli@meteosim.com" => 'aert1nesM4',
    "jserrano.ing@gmail.com" => '1M2s45d$marys',
    "yaiza_rv@hotmail.com" => '1M2s45d$marys',
    "joseluis.ojeda@fox.com" => '1M2s45d$marys2',
    "adrianrodrigo@adrirodrigoagencia.es" => 'asart1n2esR7'
];

$username = strtolower(trim($_POST['username'] ?? ''));
$password = trim($_POST['password'] ?? '');

if (isset($users[$username]) && strcmp($users[$username], $password) === 0) {
    $_SESSION['username'] = $username;
    header("Location: /metricas/pro/embed.php?ok=1");
    exit();
} else {
    header("Location: /metricas/login.php?error=1");
    exit();
}
?>
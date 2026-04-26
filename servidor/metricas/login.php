<?php
session_start();
?>
<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<title>Acceso al curso · Curso SaaS</title>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Geist:wght@400;500;600;700&family=Instrument+Serif:ital@0;1&family=JetBrains+Mono:wght@400;500&display=swap" rel="stylesheet">
<style>
:root {
    --ink: #0A1230;
    --ink-2: #111B42;
    --paper: #F6F4EE;
    --paper-2: #EBE7DB;
    --line: rgba(10, 18, 48, 0.12);
    --line-strong: rgba(10, 18, 48, 0.22);
    --mute: rgba(10, 18, 48, 0.58);
    --accent: #D4FF3F;
    --accent-2: #5B8CFF;
    --pos: #00B67A;
    --neg: #E24A4A;
    --font-sans: 'Geist', ui-sans-serif, system-ui, sans-serif;
    --font-mono: 'JetBrains Mono', ui-monospace, monospace;
    --font-serif: 'Instrument Serif', serif;
}
* { box-sizing: border-box; }
html, body {
    margin: 0; padding: 0;
    background: var(--paper);
    color: var(--ink);
    font-family: var(--font-sans);
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
    min-height: 100vh;
}
a { color: inherit; text-decoration: none; }

.page {
    min-height: 100vh;
    display: flex; flex-direction: column;
    background: linear-gradient(180deg, var(--paper) 0%, var(--paper-2) 100%);
}

.nav {
    padding: 28px 32px;
    display: flex; justify-content: space-between; align-items: center;
    border-bottom: 1px solid var(--line);
    background: color-mix(in oklab, var(--paper) 82%, transparent);
    backdrop-filter: blur(14px);
}
@media (max-width: 720px) { .nav { padding: 20px; } }
.logo {
    font-family: var(--font-sans); font-weight: 600;
    letter-spacing: -0.02em; font-size: 18px;
    display: flex; align-items: center; gap: 10px;
}
.logo-mark { width: 22px; height: 22px; position: relative; display: inline-block; }
.logo-mark::before, .logo-mark::after {
    content: ""; position: absolute; inset: 0; border-radius: 4px;
}
.logo-mark::before { background: var(--ink); transform: translate(-3px, -3px); }
.logo-mark::after { background: var(--accent); transform: translate(3px, 3px); mix-blend-mode: multiply; }
.nav .meta {
    font-family: var(--font-mono);
    font-size: 11px; letter-spacing: 0.12em;
    text-transform: uppercase;
    color: var(--mute);
    display: inline-flex; align-items: center; gap: 8px;
}
.nav .meta .dot {
    width: 7px; height: 7px; border-radius: 50%;
    background: var(--pos);
    box-shadow: 0 0 0 4px color-mix(in oklab, var(--pos) 20%, transparent);
}
@media (max-width: 480px) { .nav .meta { display: none; } }

main.shell {
    flex: 1;
    display: flex; align-items: center; justify-content: center;
    padding: 48px 24px;
}
.card {
    width: 100%;
    max-width: 460px;
    background: color-mix(in oklab, var(--paper) 60%, white);
    border: 1px solid var(--line);
    border-radius: 24px;
    padding: 44px 40px;
    box-shadow: 0 20px 50px -20px rgba(10,18,48,0.18);
}
@media (max-width: 480px) { .card { padding: 32px 24px; } }

.kicker {
    font-family: var(--font-mono);
    font-size: 11px; letter-spacing: 0.14em;
    text-transform: uppercase;
    color: var(--mute);
    display: inline-flex; align-items: center; gap: 10px;
    margin-bottom: 16px;
}
.kicker .dot {
    width: 7px; height: 7px; border-radius: 50%;
    background: var(--pos);
    box-shadow: 0 0 0 4px color-mix(in oklab, var(--pos) 20%, transparent);
}

h1 {
    font-family: var(--font-sans);
    font-weight: 500;
    font-size: clamp(28px, 4vw, 38px);
    line-height: 1.1;
    letter-spacing: -0.025em;
    color: var(--ink);
    margin: 0 0 12px;
}
h1 em { font-family: var(--font-serif); font-style: italic; font-weight: 400; }

.lede {
    font-size: 15px;
    line-height: 1.55;
    color: var(--mute);
    margin: 0 0 28px;
    letter-spacing: -0.005em;
}

.error-box {
    display: flex; gap: 12px; align-items: flex-start;
    background: color-mix(in oklab, var(--neg) 10%, var(--paper));
    border: 1px solid color-mix(in oklab, var(--neg) 30%, var(--paper));
    border-radius: 12px;
    padding: 12px 14px;
    margin-bottom: 20px;
    font-size: 13.5px;
    line-height: 1.5;
    color: color-mix(in oklab, var(--neg) 70%, var(--ink));
}
.error-box .ico {
    flex-shrink: 0;
    font-family: var(--font-mono);
    font-weight: 600;
    color: var(--neg);
}

form { display: flex; flex-direction: column; gap: 14px; }

.field { display: flex; flex-direction: column; gap: 6px; }
.field label {
    font-family: var(--font-mono);
    font-size: 10px; letter-spacing: 0.12em;
    text-transform: uppercase;
    color: var(--mute);
}
.field input {
    font-family: var(--font-sans);
    font-size: 15px;
    color: var(--ink);
    padding: 13px 16px;
    border: 1px solid var(--line-strong);
    border-radius: 12px;
    background: var(--paper);
    transition: border-color .15s, box-shadow .15s, background .15s;
    letter-spacing: -0.005em;
}
.field input::placeholder {
    color: color-mix(in oklab, var(--mute) 70%, transparent);
}
.field input:focus {
    outline: none;
    border-color: var(--ink);
    background: color-mix(in oklab, var(--paper) 60%, white);
    box-shadow: 0 0 0 3px color-mix(in oklab, var(--accent) 50%, transparent);
}

button[type="submit"] {
    margin-top: 8px;
    padding: 14px 20px;
    border-radius: 999px;
    background: var(--ink);
    color: var(--paper);
    border: 1px solid var(--ink);
    font-family: var(--font-sans);
    font-weight: 500;
    font-size: 15px;
    letter-spacing: -0.005em;
    cursor: pointer;
    display: inline-flex; align-items: center; justify-content: center; gap: 8px;
    transition: background .15s, transform .1s;
}
button[type="submit"]:hover { background: var(--ink-2); }
button[type="submit"]:active { transform: translateY(1px); }
button[type="submit"] .arrow { transition: transform .15s; }
button[type="submit"]:hover .arrow { transform: translateX(2px); }

.helper {
    margin-top: 22px;
    padding-top: 22px;
    border-top: 1px solid var(--line);
    font-size: 12px;
    color: var(--mute);
    line-height: 1.55;
    text-align: center;
}
.helper a {
    color: var(--ink);
    border-bottom: 1px solid var(--line-strong);
}
.helper a:hover { border-bottom-color: var(--ink); }

footer.foot {
    font-family: var(--font-mono);
    font-size: 11px;
    letter-spacing: 0.1em;
    text-transform: uppercase;
    color: var(--mute);
    text-align: center;
    padding: 24px 32px 32px;
    line-height: 1.8;
}
footer.foot strong { color: var(--ink); font-weight: 500; letter-spacing: 0.06em; }
</style>
</head>
<body>

<div class="page">

    <nav class="nav">
        <span class="logo">
            <span class="logo-mark"></span>
            NextScenario
        </span>
        <span class="meta">
            <span class="dot"></span>
            Curso SaaS · Métricas y Finanzas
        </span>
    </nav>

    <main class="shell">
        <div class="card">
            <span class="kicker"><span class="dot"></span>Acceso al curso</span>
            <h1>Bienvenido al <em>curso SaaS</em>.</h1>
            <p class="lede">Inserta tu usuario y contraseña para acceder al contenido completo: módulos, infografías y mentoría.</p>

            <?php if (isset($_GET['error'])): ?>
                <div class="error-box">
                    <span class="ico">⊘</span>
                    <span>Usuario o contraseña incorrectos. Comprueba los datos e inténtalo de nuevo.</span>
                </div>
            <?php endif; ?>

            <form method="post" action="check_login.php" autocomplete="on">
                <div class="field">
                    <label for="username">Usuario · email</label>
                    <input type="text" id="username" name="username" placeholder="tu.email@dominio.com" autocomplete="username" required />
                </div>
                <div class="field">
                    <label for="password">Contraseña</label>
                    <input type="password" id="password" name="password" placeholder="••••••••" autocomplete="current-password" required />
                </div>
                <button type="submit">
                    Entrar
                    <svg class="arrow" width="14" height="14" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M5 3L11 8L5 13" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"/></svg>
                </button>
            </form>

            <p class="helper">
                ¿Problemas de acceso? Escríbenos a <a href="mailto:admin@nextscenario.com">admin@nextscenario.com</a>
            </p>
        </div>
    </main>

    <footer class="foot">
        <strong>Curso SaaS</strong> · Métricas, Finanzas y Modelos Financieros<br>
        Nextscenario · <a href="mailto:admin@nextscenario.com" style="color: var(--mute);">admin@nextscenario.com</a>
    </footer>

</div>

</body>
</html>

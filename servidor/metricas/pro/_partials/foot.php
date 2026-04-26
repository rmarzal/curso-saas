        <nav class="module-nav" aria-label="Navegación del curso (final)">
            <?php if (!empty($prev_mod)): ?>
                <a class="mn-btn mn-prev" href="<?php echo $prev_mod['href']; ?>">
                    <svg class="arr" width="18" height="18" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M12.5 4L6.5 10L12.5 16" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"/></svg>
                    <span class="label">
                        <span class="num">Anterior · Mód. <?php echo $prev_mod['num']; ?></span>
                        <span class="t"><?php echo htmlspecialchars($prev_mod['title']); ?></span>
                    </span>
                </a>
            <?php else: ?>
                <span class="mn-btn mn-prev mn-disabled">
                    <svg class="arr" width="18" height="18" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M12.5 4L6.5 10L12.5 16" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"/></svg>
                    <span class="label">
                        <span class="num">Inicio del curso</span>
                        <span class="t">No hay módulo anterior</span>
                    </span>
                </span>
            <?php endif; ?>

            <a class="mn-btn mn-home" href="embed.php?v=1">
                <span class="dot"></span>
                Índice del curso
            </a>

            <?php if (!empty($next_mod)): ?>
                <a class="mn-btn mn-next" href="<?php echo $next_mod['href']; ?>">
                    <span class="label">
                        <span class="num">Siguiente · Mód. <?php echo $next_mod['num']; ?></span>
                        <span class="t"><?php echo htmlspecialchars($next_mod['title']); ?></span>
                    </span>
                    <svg class="arr" width="18" height="18" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M7.5 4L13.5 10L7.5 16" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"/></svg>
                </a>
            <?php else: ?>
                <span class="mn-btn mn-next mn-disabled">
                    <span class="label">
                        <span class="num">Fin del curso</span>
                        <span class="t">No hay módulo siguiente</span>
                    </span>
                    <svg class="arr" width="18" height="18" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M7.5 4L13.5 10L7.5 16" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"/></svg>
                </span>
            <?php endif; ?>
        </nav>

    </div>

    <footer class="site-foot">
        <strong>Curso SaaS</strong> · Métricas, Finanzas y Modelos Financieros<br>
        Nextscenario · <a href="mailto:admin@nextscenario.com">admin@nextscenario.com</a>
    </footer>

</body>
</html>

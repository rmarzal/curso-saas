export function Footer() {
  return (
    <footer
      style={{
        fontFamily: "var(--font-mono)",
        fontSize: 11,
        letterSpacing: "0.1em",
        textTransform: "uppercase",
        color: "var(--color-mute)",
        textAlign: "center",
        padding: "60px 32px 32px",
        lineHeight: 1.8,
      }}
    >
      <strong style={{ color: "var(--color-ink)", fontWeight: 500 }}>
        Curso SaaS
      </strong>{" "}
      · Métricas, Finanzas y Modelos Financieros
      <br />
      Nextscenario ·{" "}
      <a
        href="mailto:admin@nextscenario.com"
        style={{ color: "var(--color-mute)" }}
      >
        admin@nextscenario.com
      </a>
    </footer>
  );
}

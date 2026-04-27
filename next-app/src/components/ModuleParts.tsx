/**
 * Componentes pequeños reutilizados por las páginas de módulos.
 */

export function ModuleH2({ children }: { children: React.ReactNode }) {
  return (
    <h2
      style={{
        fontFamily: "var(--font-sans)",
        fontSize: "clamp(24px, 2.6vw, 32px)",
        fontWeight: 500,
        color: "var(--color-ink)",
        letterSpacing: "-0.025em",
        lineHeight: 1.1,
        marginTop: 40,
        paddingLeft: "0.95rem",
        borderLeft: "4px solid var(--color-accent)",
        display: "flex",
        alignItems: "baseline",
        gap: 14,
      }}
    >
      {children}
    </h2>
  );
}

export function ModuleP({ children }: { children: React.ReactNode }) {
  return (
    <p
      style={{
        color: "var(--color-ink)",
        opacity: 0.84,
        fontSize: 16,
        lineHeight: 1.6,
        letterSpacing: "-0.005em",
      }}
    >
      {children}
    </p>
  );
}

export function Topics({ items }: { items: string[] }) {
  return (
    <ul
      style={{
        marginTop: 14,
        display: "grid",
        gap: 8,
        listStyle: "none",
        padding: 0,
      }}
    >
      {items.map((it, i) => (
        <li
          key={i}
          style={{
            display: "flex",
            gap: 12,
            alignItems: "center",
            color: "var(--color-ink)",
            fontSize: 15,
            padding: "12px 16px",
            background: "var(--color-paper)",
            border: "1px solid var(--color-line)",
            borderRadius: 12,
            letterSpacing: "-0.005em",
          }}
        >
          <span
            style={{
              flexShrink: 0,
              width: 6,
              height: 6,
              background: "var(--color-accent-2)",
              borderRadius: "50%",
            }}
          />
          <span dangerouslySetInnerHTML={{ __html: it }} />
        </li>
      ))}
    </ul>
  );
}

export function Callout({
  icon,
  text,
}: {
  icon: string;
  text: string | React.ReactNode;
}) {
  return (
    <div
      style={{
        marginTop: 20,
        display: "flex",
        gap: 14,
        alignItems: "flex-start",
        padding: "18px 20px",
        borderRadius: 14,
        background: "var(--color-accent)",
        color: "var(--color-ink)",
        border: "1px solid transparent",
        lineHeight: 1.5,
        fontSize: 15,
      }}
    >
      <span style={{ flexShrink: 0, fontSize: 18 }}>{icon}</span>
      <span>{text}</span>
    </div>
  );
}

export function Reflection({ questions }: { questions: string[] }) {
  return (
    <div style={{ marginTop: 16, display: "grid", gap: 10 }}>
      {questions.map((q, i) => (
        <div
          key={i}
          style={{
            display: "flex",
            gap: 16,
            alignItems: "flex-start",
            background: "var(--color-paper)",
            border: "1px solid var(--color-line)",
            borderRadius: 14,
            padding: "16px 18px",
            color: "var(--color-ink)",
            fontSize: 16,
            lineHeight: 1.5,
            letterSpacing: "-0.005em",
          }}
        >
          <span
            style={{
              flexShrink: 0,
              width: 28,
              height: 28,
              borderRadius: "50%",
              background: "var(--color-ink)",
              color: "var(--color-accent)",
              fontFamily: "var(--font-mono)",
              fontWeight: 600,
              fontSize: 12,
              display: "flex",
              alignItems: "center",
              justifyContent: "center",
            }}
          >
            {i + 1}
          </span>
          <span>{q}</span>
        </div>
      ))}
    </div>
  );
}

export function ResourceGrid({
  cols = 1,
  children,
}: {
  cols?: 1 | 2;
  children: React.ReactNode;
}) {
  return (
    <div
      style={{
        marginTop: 18,
        display: "grid",
        gap: 10,
        gridTemplateColumns: cols === 2 ? "repeat(2, 1fr)" : "1fr",
      }}
    >
      {children}
    </div>
  );
}

export function CtaBox({
  eyebrow,
  title,
  text,
}: {
  eyebrow: string;
  title: string | React.ReactNode;
  text: string | React.ReactNode;
}) {
  return (
    <div
      style={{
        marginTop: 28,
        padding: 28,
        background: "var(--color-ink)",
        color: "var(--color-paper)",
        borderRadius: 18,
        position: "relative",
        overflow: "hidden",
      }}
    >
      <span
        className="eyebrow"
        style={{ color: "color-mix(in oklab, var(--color-paper) 60%, transparent)" }}
      >
        <span
          className="dot"
          style={{
            background: "var(--color-accent)",
            boxShadow:
              "0 0 0 4px color-mix(in oklab, var(--color-accent) 30%, transparent)",
          }}
        />
        {eyebrow}
      </span>
      <h3
        style={{
          fontFamily: "var(--font-sans)",
          fontWeight: 500,
          fontSize: 24,
          letterSpacing: "-0.025em",
          lineHeight: 1.15,
          marginTop: 12,
          marginBottom: 10,
          color: "var(--color-paper)",
        }}
      >
        {title}
      </h3>
      <p
        style={{
          color: "color-mix(in oklab, var(--color-paper) 78%, transparent)",
          lineHeight: 1.55,
          fontSize: 15,
          margin: 0,
        }}
      >
        {text}
      </p>
    </div>
  );
}

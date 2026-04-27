import Link from "next/link";
import type { ModuleEntry } from "@/lib/modules";

interface Props {
  prev: ModuleEntry | null;
  next: ModuleEntry | null;
}

export function ModuleNav({ prev, next }: Props) {
  return (
    <nav
      aria-label="Navegación del curso"
      style={{
        display: "grid",
        gridTemplateColumns: "1fr auto 1fr",
        gap: 10,
        margin: "0 0 24px",
        alignItems: "stretch",
      }}
    >
      {prev ? (
        <Link
          href={`/${prev.slug}`}
          style={navBtnStyle({ side: "left" })}
        >
          <ArrowLeft />
          <Label num={`Anterior · Mód. ${prev.num}`} title={prev.title} />
        </Link>
      ) : (
        <span style={navBtnStyle({ side: "left", disabled: true })}>
          <ArrowLeft />
          <Label num="Inicio del curso" title="No hay módulo anterior" />
        </span>
      )}

      <Link
        href="/"
        style={{
          background: "var(--color-ink)",
          color: "var(--color-paper)",
          border: "1px solid var(--color-ink)",
          borderRadius: 14,
          padding: "12px 22px",
          fontFamily: "var(--font-mono)",
          fontSize: 11,
          letterSpacing: "0.1em",
          textTransform: "uppercase",
          display: "inline-flex",
          alignItems: "center",
          justifyContent: "center",
          gap: 8,
          whiteSpace: "nowrap",
          minHeight: 60,
        }}
      >
        <span
          style={{
            width: 6,
            height: 6,
            borderRadius: "50%",
            background: "var(--color-accent)",
            boxShadow:
              "0 0 0 4px color-mix(in oklab, var(--color-accent) 30%, transparent)",
          }}
        ></span>
        Índice del curso
      </Link>

      {next ? (
        <Link
          href={`/${next.slug}`}
          style={navBtnStyle({ side: "right" })}
        >
          <Label num={`Siguiente · Mód. ${next.num}`} title={next.title} />
          <ArrowRight />
        </Link>
      ) : (
        <span style={navBtnStyle({ side: "right", disabled: true })}>
          <Label num="Fin del curso" title="No hay módulo siguiente" />
          <ArrowRight />
        </span>
      )}
    </nav>
  );
}

function Label({ num, title }: { num: string; title: string }) {
  return (
    <span
      style={{
        display: "flex",
        flexDirection: "column",
        gap: 2,
        minWidth: 0,
        flex: 1,
      }}
    >
      <span
        style={{
          fontFamily: "var(--font-mono)",
          fontSize: 10,
          letterSpacing: "0.1em",
          textTransform: "uppercase",
          color: "var(--color-mute)",
        }}
      >
        {num}
      </span>
      <span
        style={{
          fontSize: 14,
          fontWeight: 500,
          letterSpacing: "-0.01em",
          lineHeight: 1.25,
          color: "var(--color-ink)",
          overflow: "hidden",
          textOverflow: "ellipsis",
          whiteSpace: "nowrap",
        }}
      >
        {title}
      </span>
    </span>
  );
}

function ArrowLeft() {
  return (
    <svg width="18" height="18" viewBox="0 0 20 20" fill="none" style={{ flexShrink: 0, opacity: 0.5 }}>
      <path d="M12.5 4L6.5 10L12.5 16" stroke="currentColor" strokeWidth="1.6" strokeLinecap="round" strokeLinejoin="round" />
    </svg>
  );
}

function ArrowRight() {
  return (
    <svg width="18" height="18" viewBox="0 0 20 20" fill="none" style={{ flexShrink: 0, opacity: 0.5 }}>
      <path d="M7.5 4L13.5 10L7.5 16" stroke="currentColor" strokeWidth="1.6" strokeLinecap="round" strokeLinejoin="round" />
    </svg>
  );
}

function navBtnStyle({ side, disabled }: { side: "left" | "right"; disabled?: boolean }): React.CSSProperties {
  return {
    display: "flex",
    alignItems: "center",
    gap: 12,
    padding: "12px 16px",
    border: disabled ? "1px dashed var(--color-line)" : "1px solid var(--color-line)",
    borderRadius: 14,
    background: disabled ? "transparent" : "color-mix(in oklab, var(--color-paper) 60%, white)",
    color: "var(--color-ink)",
    minHeight: 60,
    opacity: disabled ? 0.4 : 1,
    pointerEvents: disabled ? "none" : "auto",
    justifyContent: side === "left" ? "flex-start" : "flex-end",
    textAlign: side === "left" ? "left" : "right",
  };
}

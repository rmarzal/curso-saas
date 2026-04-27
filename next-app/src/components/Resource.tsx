interface Props {
  href: string;
  icon: string;
  label: string;
  meta?: string;
  variant?: "default" | "primary" | "accent";
  external?: boolean;
}

export function Resource({
  href,
  icon,
  label,
  meta,
  variant = "default",
  external = true,
}: Props) {
  const target = external ? "_blank" : undefined;
  const rel = external ? "noopener noreferrer" : undefined;

  const styles: React.CSSProperties = {
    display: "flex",
    alignItems: "center",
    gap: 14,
    padding: "14px 16px",
    border:
      variant === "default"
        ? "1px solid var(--color-line)"
        : "1px solid transparent",
    borderRadius: 14,
    background:
      variant === "default"
        ? "var(--color-paper)"
        : variant === "primary"
          ? "var(--color-ink)"
          : "var(--color-accent)",
    color:
      variant === "primary" ? "var(--color-paper)" : "var(--color-ink)",
    transition: "transform 0.12s, border-color 0.12s, background 0.12s",
  };

  const iconBg =
    variant === "primary"
      ? "color-mix(in oklab, var(--color-paper) 14%, transparent)"
      : variant === "accent"
        ? "color-mix(in oklab, var(--color-ink) 12%, transparent)"
        : "var(--color-paper-2)";

  return (
    <a href={href} target={target} rel={rel} style={styles}>
      <span
        style={{
          flexShrink: 0,
          width: 36,
          height: 36,
          borderRadius: 10,
          display: "flex",
          alignItems: "center",
          justifyContent: "center",
          background: iconBg,
          fontSize: 16,
          color: variant === "primary" ? "var(--color-accent)" : undefined,
        }}
      >
        {icon}
      </span>
      <span>
        <span
          style={{
            fontWeight: 500,
            fontSize: 15,
            letterSpacing: "-0.01em",
            lineHeight: 1.3,
            display: "block",
          }}
        >
          {label}
        </span>
        {meta && (
          <span
            style={{
              display: "block",
              marginTop: 3,
              fontFamily: "var(--font-mono)",
              fontSize: 10,
              letterSpacing: "0.08em",
              textTransform: "uppercase",
              color:
                variant === "primary"
                  ? "color-mix(in oklab, var(--color-paper) 60%, transparent)"
                  : "var(--color-mute)",
            }}
          >
            {meta}
          </span>
        )}
      </span>
    </a>
  );
}

import Link from "next/link";

interface NavProps {
  username?: string;
  showSession?: boolean;
}

export function Nav({ username, showSession = true }: NavProps) {
  return (
    <nav className="ns-nav">
      <div className="ns-nav-inner">
        <Link
          href="/"
          style={{
            fontFamily: "var(--font-sans)",
            fontWeight: 600,
            letterSpacing: "-0.02em",
            fontSize: 18,
            display: "flex",
            alignItems: "center",
            gap: 10,
          }}
        >
          <span className="logo-mark"></span>
          NextScenario
        </Link>
        <div className="flex items-center gap-3">
          {showSession && username && (
            <span
              className="eyebrow"
              style={{
                border: "1px solid var(--color-line)",
                borderRadius: 999,
                padding: "6px 12px",
                background: "color-mix(in oklab, var(--color-paper) 60%, white)",
              }}
            >
              <span className="dot"></span>
              {username}
            </span>
          )}
          <Link
            href="/api/auth/logout"
            style={{
              fontFamily: "var(--font-mono)",
              fontSize: 11,
              letterSpacing: "0.1em",
              textTransform: "uppercase",
              color: "var(--color-mute)",
            }}
            className="hover:text-[--color-ink]"
          >
            Cerrar sesión
          </Link>
        </div>
      </div>
    </nav>
  );
}

import { redirect } from "next/navigation";
import { isAuthenticated } from "@/lib/session";
import Link from "next/link";

export const metadata = {
  title: "Acceso al curso · Curso SaaS",
};

interface PageProps {
  searchParams: Promise<{ error?: string }>;
}

export default async function LoginPage({ searchParams }: PageProps) {
  if (await isAuthenticated()) redirect("/");

  const { error } = await searchParams;

  return (
    <div
      className="min-h-screen flex flex-col"
      style={{
        background:
          "linear-gradient(180deg, var(--color-paper) 0%, var(--color-paper-2) 100%)",
      }}
    >
      <nav className="ns-nav" style={{ position: "static" }}>
        <div className="ns-nav-inner">
          <span
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
          </span>
          <span
            className="eyebrow"
            style={{ display: "inline-flex" }}
          >
            <span className="dot"></span>
            Curso SaaS · Métricas y Finanzas
          </span>
        </div>
      </nav>

      <main className="flex-1 flex items-center justify-center px-6 py-12">
        <div
          className="w-full max-w-md"
          style={{
            background: "color-mix(in oklab, var(--color-paper) 60%, white)",
            border: "1px solid var(--color-line)",
            borderRadius: 24,
            padding: "44px 40px",
            boxShadow: "0 20px 50px -20px rgba(10,18,48,0.18)",
          }}
        >
          <span className="eyebrow">
            <span className="dot"></span>
            Acceso al curso
          </span>
          <h1 className="h2-display mt-4">
            Bienvenido al <em className="serif-em">curso SaaS</em>.
          </h1>
          <p className="lede mt-3">
            Inserta tu usuario y contraseña para acceder al contenido completo:
            módulos, infografías y mentoría.
          </p>

          {error && (
            <div
              className="mt-5 flex gap-3 items-start text-[13.5px] leading-snug"
              style={{
                background:
                  "color-mix(in oklab, var(--color-neg) 10%, var(--color-paper))",
                border:
                  "1px solid color-mix(in oklab, var(--color-neg) 30%, var(--color-paper))",
                borderRadius: 12,
                padding: "12px 14px",
                color:
                  "color-mix(in oklab, var(--color-neg) 70%, var(--color-ink))",
              }}
            >
              <span
                style={{
                  fontFamily: "var(--font-mono)",
                  fontWeight: 600,
                  color: "var(--color-neg)",
                }}
              >
                ⊘
              </span>
              <span>
                Usuario o contraseña incorrectos. Comprueba los datos e
                inténtalo de nuevo.
              </span>
            </div>
          )}

          <form
            action="/api/auth/login"
            method="post"
            autoComplete="on"
            className="mt-6 flex flex-col gap-4"
          >
            <div className="flex flex-col gap-1.5">
              <label
                htmlFor="username"
                style={{
                  fontFamily: "var(--font-mono)",
                  fontSize: 10,
                  letterSpacing: "0.12em",
                  textTransform: "uppercase",
                  color: "var(--color-mute)",
                }}
              >
                Usuario · email
              </label>
              <input
                id="username"
                name="username"
                type="text"
                placeholder="tu.email@dominio.com"
                autoComplete="username"
                required
                style={{
                  fontFamily: "var(--font-sans)",
                  fontSize: 15,
                  color: "var(--color-ink)",
                  padding: "13px 16px",
                  border: "1px solid var(--color-line-strong)",
                  borderRadius: 12,
                  background: "var(--color-paper)",
                  letterSpacing: "-0.005em",
                  outline: "none",
                }}
              />
            </div>
            <div className="flex flex-col gap-1.5">
              <label
                htmlFor="password"
                style={{
                  fontFamily: "var(--font-mono)",
                  fontSize: 10,
                  letterSpacing: "0.12em",
                  textTransform: "uppercase",
                  color: "var(--color-mute)",
                }}
              >
                Contraseña
              </label>
              <input
                id="password"
                name="password"
                type="password"
                placeholder="••••••••"
                autoComplete="current-password"
                required
                style={{
                  fontFamily: "var(--font-sans)",
                  fontSize: 15,
                  color: "var(--color-ink)",
                  padding: "13px 16px",
                  border: "1px solid var(--color-line-strong)",
                  borderRadius: 12,
                  background: "var(--color-paper)",
                  letterSpacing: "-0.005em",
                  outline: "none",
                }}
              />
            </div>
            <button
              type="submit"
              className="pill pill-primary mt-2"
              style={{ justifyContent: "center", padding: "14px 20px" }}
            >
              Entrar
              <svg
                width="14"
                height="14"
                viewBox="0 0 16 16"
                fill="none"
                xmlns="http://www.w3.org/2000/svg"
              >
                <path
                  d="M5 3L11 8L5 13"
                  stroke="currentColor"
                  strokeWidth="1.6"
                  strokeLinecap="round"
                  strokeLinejoin="round"
                />
              </svg>
            </button>
          </form>

          <p
            className="text-center"
            style={{
              marginTop: 22,
              paddingTop: 22,
              borderTop: "1px solid var(--color-line)",
              fontSize: 12,
              color: "var(--color-mute)",
              lineHeight: 1.55,
            }}
          >
            ¿Problemas de acceso? Escríbenos a{" "}
            <Link
              href="mailto:admin@nextscenario.com"
              style={{
                color: "var(--color-ink)",
                borderBottom: "1px solid var(--color-line-strong)",
              }}
            >
              admin@nextscenario.com
            </Link>
          </p>
        </div>
      </main>

      <footer
        style={{
          fontFamily: "var(--font-mono)",
          fontSize: 11,
          letterSpacing: "0.1em",
          textTransform: "uppercase",
          color: "var(--color-mute)",
          textAlign: "center",
          padding: "24px 32px 32px",
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
    </div>
  );
}

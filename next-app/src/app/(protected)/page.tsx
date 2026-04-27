import Link from "next/link";
import { modules, extraContent } from "@/lib/modules";

export const metadata = {
  title: "Curso SaaS · Métricas, Finanzas y Modelos Financieros",
};

export default function CourseIndex() {
  return (
    <div className="max-w-[1100px] mx-auto px-8 max-md:px-5">
      {/* Hero */}
      <header className="py-16 max-md:py-10">
        <span className="eyebrow">
          <span className="dot"></span>
          Curso online · Métricas y Finanzas SaaS
        </span>
        <h1 className="h1-display mt-5 max-w-[18ch]">
          Métricas, Finanzas y{" "}
          <em className="serif-em">Modelos Financieros</em> para{" "}
          <span className="hl">SaaS</span>
        </h1>
        <p className="lede mt-6 max-w-[60ch]">
          Bienvenido al curso sobre métricas y modelos SaaS. Diseñado para
          explicarte con detalle el modelo SaaS, sus métricas y los modelos
          financieros que necesitas para tomar decisiones.
        </p>
        <div className="mt-8 flex gap-3 flex-wrap">
          <a
            className="pill pill-primary"
            href="https://tidycal.com/nextscenario/mentoria-curso"
            target="_blank"
            rel="noopener noreferrer"
          >
            Agendar mentoría
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
          </a>
          <a
            className="pill pill-ghost"
            href="https://tinyurl.com/7as42k8c"
            target="_blank"
            rel="noopener noreferrer"
          >
            📕 Libro SaaS
          </a>
        </div>
      </header>

      {/* Modules grid */}
      <section className="py-8">
        <div className="flex justify-between items-end gap-8 mb-9 max-md:flex-col max-md:items-start">
          <div>
            <span className="eyebrow">
              11 módulos · Métricas SaaS y Modelos financieros
            </span>
            <h2 className="h2-display mt-2">
              Módulos del <em className="serif-em">curso</em>
            </h2>
          </div>
          <p className="text-sm leading-relaxed text-[--color-mute] max-w-[360px]">
            Cada módulo incluye video del curso y contenido de apoyo. Visualiza
            los videos cuando quieras, tantas veces como quieras.
          </p>
        </div>

        <div
          style={{
            display: "grid",
            gap: 14,
            gridTemplateColumns: "repeat(2, 1fr)",
          }}
          className="max-md:grid-cols-1!"
        >
          {modules.map((m, i) => (
            <Link
              key={m.slug}
              href={`/${m.slug}`}
              style={moduleCardStyle(i === 0)}
              className="group"
            >
              <span
                style={{
                  fontFamily: "var(--font-mono)",
                  fontSize: 11,
                  letterSpacing: "0.14em",
                  textTransform: "uppercase",
                  color: i === 0 ? "color-mix(in oklab, var(--color-paper) 60%, transparent)" : "var(--color-mute)",
                }}
              >
                Módulo {m.num}
              </span>
              <h3
                style={{
                  fontFamily: "var(--font-sans)",
                  fontWeight: 500,
                  fontSize: 19,
                  letterSpacing: "-0.018em",
                  lineHeight: 1.2,
                  color: i === 0 ? "var(--color-paper)" : "var(--color-ink)",
                  margin: "4px 0 0",
                }}
              >
                {m.title}
              </h3>
              <p
                style={{
                  color: i === 0 ? "color-mix(in oklab, var(--color-paper) 70%, transparent)" : "var(--color-mute)",
                  fontSize: 14,
                  lineHeight: 1.45,
                  letterSpacing: "-0.005em",
                  margin: 0,
                }}
              >
                {m.shortDesc}
              </p>
            </Link>
          ))}
        </div>
      </section>

      {/* Extras */}
      <section className="py-8">
        <div className="flex justify-between items-end gap-8 mb-9 max-md:flex-col max-md:items-start">
          <div>
            <span className="eyebrow">Material extra</span>
            <h2 className="h2-display mt-2">
              Contenido <em className="serif-em">complementario</em>
            </h2>
          </div>
          <p className="text-sm leading-relaxed text-[--color-mute] max-w-[360px]">
            Recursos adicionales para profundizar más allá del temario principal.
          </p>
        </div>

        <div
          style={{
            display: "grid",
            gap: 14,
            gridTemplateColumns: "repeat(2, 1fr)",
          }}
          className="max-md:grid-cols-1!"
        >
          {extraContent.map((e) => (
            <Link
              key={e.slug}
              href={`/contenido/${e.slug}`}
              style={moduleCardStyle(false)}
            >
              <span
                style={{
                  fontFamily: "var(--font-mono)",
                  fontSize: 11,
                  letterSpacing: "0.14em",
                  textTransform: "uppercase",
                  color: "var(--color-mute)",
                }}
              >
                {e.num} · Extra
              </span>
              <h3
                style={{
                  fontFamily: "var(--font-sans)",
                  fontWeight: 500,
                  fontSize: 19,
                  letterSpacing: "-0.018em",
                  lineHeight: 1.2,
                  color: "var(--color-ink)",
                  margin: "4px 0 0",
                }}
              >
                {e.title}
              </h3>
              <p
                style={{
                  color: "var(--color-mute)",
                  fontSize: 14,
                  lineHeight: 1.45,
                  letterSpacing: "-0.005em",
                  margin: 0,
                }}
              >
                {e.desc}
              </p>
            </Link>
          ))}
        </div>
      </section>
    </div>
  );
}

function moduleCardStyle(featured: boolean): React.CSSProperties {
  return {
    display: "flex",
    flexDirection: "column",
    gap: 8,
    border: featured ? "1px solid transparent" : "1px solid var(--color-line)",
    borderRadius: 18,
    padding: "20px 22px",
    background: featured
      ? "var(--color-ink)"
      : "color-mix(in oklab, var(--color-paper) 60%, white)",
    color: featured ? "var(--color-paper)" : "var(--color-ink)",
    minHeight: 140,
    transition: "transform 0.15s, box-shadow 0.15s, border-color 0.15s",
  };
}

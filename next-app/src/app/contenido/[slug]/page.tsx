import Link from "next/link";
import { notFound } from "next/navigation";

const infografias: Record<string, { title: string; subtitle: string }> = {
  "que-empresa-quieres-construir": {
    title: "¿Qué empresa quieres construir?",
    subtitle: "Reflexión inicial sobre el tipo de empresa SaaS.",
  },
  modulo1: {
    title: "Visión general · Modelos de Negocio SaaS",
    subtitle: "Comprendiendo los fundamentos y la estrategia.",
  },
  "modelos-de-negocio": {
    title: "Modelos de negocio y limitación de producto",
    subtitle: "PLG, Free Trial, Freemium · cómo limitar un producto.",
  },
  "product-led-growth": {
    title: "Product Led Growth es mentira (en early stage)",
    subtitle:
      "Por qué necesitas un humano vendiendo antes de productelizar.",
  },
  "product-led-sales": {
    title: "Product Led Sales · estrategia híbrida para SaaS",
    subtitle:
      "Combinando la escalabilidad del PLG con la efectividad de las ventas B2B.",
  },
  pricing: {
    title: "Estrategias de precios en SaaS",
    subtitle:
      "11 estrategias de pricing, psicología y casos reales de SaaS españoles.",
  },
  "vanity-metrics": {
    title: "El peligro de las Vanity Metrics",
    subtitle: "4 tests para identificarlas y estrategias para evitarlas.",
  },
  "north-star-metric": {
    title: "North Star Metric · la brújula del crecimiento",
    subtitle:
      "Marco completo de inputs + ejemplos de Facebook, Slack y Medium.",
  },
  "metricas-saas": {
    title: "Métricas clave en SaaS",
    subtitle:
      "20+ métricas en monetización, retención, financieras y captación.",
  },
  "framework-b2b-saas-metrics": {
    title: "B2B SaaS Metrics Journey",
    subtitle:
      "Framework validado con +200 plataformas SaaS · 4 fases del viaje.",
  },
  "modelos-financieros": {
    title: "Modelos financieros en SaaS",
    subtitle: "Cashflow, PyG y Balance · todos los conceptos clave.",
  },
  "optimizacion-saas": {
    title: "Cómo mejorar la rentabilidad de un SaaS",
    subtitle: "5 palancas: ARPA, CAC, churn, unit economics, runway.",
  },
  reporting: {
    title: "Tu Data Room y One Pager para inversores SaaS",
    subtitle:
      "Cómo reportar a inversores y las herramientas principales.",
  },
  "entrevistas-clientes": {
    title: "Entrevistas a clientes",
    subtitle: "Cómo hacer entrevistas a clientes que aporten señal.",
  },
  "quien-lidera-metricas": {
    title: "¿Quién lidera las métricas?",
    subtitle: "Roles y responsabilidades en torno a los datos.",
  },
};

export async function generateStaticParams() {
  return Object.keys(infografias).map((slug) => ({ slug }));
}

export async function generateMetadata({
  params,
}: {
  params: Promise<{ slug: string }>;
}) {
  const { slug } = await params;
  const c = infografias[slug];
  if (!c) return {};
  return { title: `${c.title} · Curso SaaS`, description: c.subtitle };
}

export default async function ContenidoPage({
  params,
}: {
  params: Promise<{ slug: string }>;
}) {
  const { slug } = await params;
  const c = infografias[slug];
  if (!c) notFound();

  return (
    <div
      className="min-h-screen flex flex-col"
      style={{
        background:
          "linear-gradient(180deg, var(--color-paper) 0%, var(--color-paper-2) 100%)",
      }}
    >
      <nav className="ns-nav">
        <div className="ns-nav-inner">
          <Link
            href="/"
            style={{
              display: "inline-flex",
              alignItems: "center",
              gap: 8,
              fontSize: 14,
              color: "var(--color-ink)",
              opacity: 0.7,
            }}
          >
            <svg width="14" height="14" viewBox="0 0 20 20" fill="currentColor">
              <path d="M9.707 4.293a1 1 0 0 1 0 1.414L6.414 9H17a1 1 0 1 1 0 2H6.414l3.293 3.293a1 1 0 1 1-1.414 1.414l-5-5a1 1 0 0 1 0-1.414l5-5a1 1 0 0 1 1.414 0Z" />
            </svg>
            Volver al curso
          </Link>
          <span className="eyebrow">Infografía · Curso SaaS</span>
        </div>
      </nav>

      <main className="flex-1">
        <div className="max-w-[1100px] mx-auto px-8 max-md:px-5">
          <header className="py-14 max-md:py-10">
            <span className="eyebrow">
              <span className="dot"></span>
              Infografía · Curso SaaS
            </span>
            <h1
              className="h1-display mt-5"
              style={{ fontSize: "clamp(36px, 5vw, 64px)" }}
            >
              {c.title}
            </h1>
            <p className="lede mt-5 max-w-[64ch]">{c.subtitle}</p>
          </header>

          <main className="content-card mb-6">
            <p className="text-[--color-mute]">
              Esta infografía está en proceso de migración desde la versión
              anterior del curso. El contenido completo se irá añadiendo
              progresivamente.
            </p>
            <p className="mt-4 text-[--color-mute]">
              Puedes consultar la versión actual en{" "}
              <Link
                href="/"
                className="underline"
                style={{ color: "var(--color-ink)" }}
              >
                el índice del curso
              </Link>
              .
            </p>
          </main>
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
          padding: "60px 32px 32px",
          lineHeight: 1.8,
        }}
      >
        <strong style={{ color: "var(--color-ink)", fontWeight: 500 }}>
          Curso SaaS
        </strong>
        {" "}· Métricas, Finanzas y Modelos Financieros
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

import { VideoBlock } from "@/components/VideoBlock";
import { Resource } from "@/components/Resource";
import {
  ModuleP,
  ModuleH2,
  ResourceGrid,
  Topics,
  CtaBox,
} from "@/components/ModuleParts";

export function Module04() {
  return (
    <>
      <ModuleP>
        <strong>El lenguaje universal de los negocios SaaS.</strong>
      </ModuleP>

      <Topics
        items={[
          "Métricas clave vs Vanity Metrics",
          "North Star Metric",
          "Métricas de captación y activación",
          "Métricas de monetización",
          "Métricas de eficiencia",
          "Unit Economics: LTV, CAC, Payback, Gross Margin",
        ]}
      />

      <ModuleH2>Contenidos de apoyo</ModuleH2>
      <ResourceGrid cols={2}>
        <Resource
          href="/contenido/vanity-metrics"
          icon="📕"
          label="Contenido Vanity Metrics"
          meta="Infografía · abre en nueva pestaña"
          external={false}
        />
        <Resource
          href="/contenido/north-star-metric"
          icon="📕"
          label="Contenido North Star Metric"
          meta="Infografía · abre en nueva pestaña"
          external={false}
        />
        <Resource
          href="/contenido/metricas-saas"
          icon="📕"
          label="Contenido Métricas SaaS"
          meta="Infografía · abre en nueva pestaña"
          external={false}
        />
        <Resource
          href="/contenido/framework-b2b-saas-metrics"
          icon="📕"
          label="Contenido B2B SaaS Metrics Framework"
          meta="Infografía · abre en nueva pestaña"
          external={false}
        />
      </ResourceGrid>

      <ModuleH2>Videos del módulo</ModuleH2>
      <VideoBlock
        youtubeId="1Y4qcbImLko"
        caption="Vanity Metrics y North Star Metric"
      />
      <VideoBlock youtubeId="KOxYql8Htg8" caption="Métricas SaaS B2B" />

      <CtaBox
        eyebrow="Caso práctico"
        title={
          <>
            ✍️ Define tu North Star Metric y revisa cómo estás midiendo tus
            métricas
          </>
        }
        text={
          <>
            Si necesitas revisar tus métricas, puedes{" "}
            <a
              href="https://tidycal.com/nextscenario/mentoria-curso"
              target="_blank"
              rel="noopener noreferrer"
              style={{
                color: "var(--color-accent)",
                fontWeight: 500,
                textDecoration: "underline",
                textUnderlineOffset: 3,
              }}
            >
              agendar una reunión
            </a>
            .
          </>
        }
      />
    </>
  );
}

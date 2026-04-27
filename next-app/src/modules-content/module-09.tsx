import { VideoBlock } from "@/components/VideoBlock";
import { Resource } from "@/components/Resource";
import {
  ModuleP,
  ModuleH2,
  ResourceGrid,
  Topics,
} from "@/components/ModuleParts";

export function Module09() {
  return (
    <>
      <ModuleP>
        En este módulo veremos los principales modelos financieros en la
        gestión de una empresa:
      </ModuleP>

      <Topics
        items={[
          "Cashflow",
          "Cuenta de pérdidas y ganancias",
          "Balance",
        ]}
      />

      <ModuleH2>Videos del módulo</ModuleH2>
      <VideoBlock youtubeId="yDW6ASI51Y4" caption="Modelos financieros SaaS" />
      <VideoBlock
        youtubeId="AbWfyj7y8Bw"
        caption="Explicación plantilla cashflow y métricas"
      />

      <ModuleH2>Plantilla y contenidos</ModuleH2>
      <ResourceGrid>
        <Resource
          href="https://docs.google.com/spreadsheets/d/1KlPY1AlP5QDZ27SltZuMOi-cyEFo93FBbGWBe47kpVk/edit?usp=sharing"
          icon="📑"
          label="Plantilla Cashflow + B2B SaaS Metrics"
          meta="Google Sheets · abre en nueva pestaña"
          variant="primary"
        />
        <Resource
          href="/contenido/modelos-financieros"
          icon="📑"
          label="Contenido Modelos Financieros"
          meta="Infografía · abre en nueva pestaña"
          external={false}
        />
        <Resource
          href="/contenido/optimizacion-saas"
          icon="📑"
          label="Contenido mejorar la rentabilidad"
          meta="Optimización SaaS · abre en nueva pestaña"
          external={false}
        />
      </ResourceGrid>
    </>
  );
}

import { VideoBlock } from "@/components/VideoBlock";
import { Resource } from "@/components/Resource";
import { ModuleP, ResourceGrid } from "@/components/ModuleParts";

export function Module07() {
  return (
    <>
      <ModuleP>
        En este módulo entramos en detalle en cómo realizar un estudio de
        cohortes. Puedes encontrar la plantilla de Google Sheets más abajo.
      </ModuleP>

      <VideoBlock youtubeId="OjWc764KRkE" caption="Análisis de Cohortes" />

      <ResourceGrid cols={2}>
        <Resource
          href="/assets/estudio_cohortes.pdf"
          icon="📥"
          label="Estudio de Cohortes"
          meta="PDF descargable"
          variant="primary"
        />
        <Resource
          href="https://docs.google.com/spreadsheets/d/1QZ3BfEEAmq7d7o0ELGZiDL2JrOINRuiab-5-518ztgg/edit?usp=sharing"
          icon="📑"
          label="Plantilla Sheets — Estudio de Cohortes"
          meta="Google Sheets · abre en nueva pestaña"
        />
      </ResourceGrid>
    </>
  );
}

import { VideoBlock } from "@/components/VideoBlock";
import { Resource } from "@/components/Resource";
import { ResourceGrid } from "@/components/ModuleParts";

export function Module05() {
  return (
    <>
      <VideoBlock
        youtubeId="8ZicJMPB384"
        caption="The B2B SaaS Metrics Framework"
      />

      <ResourceGrid>
        <Resource
          href="/contenido/framework-b2b-saas-metrics"
          icon="🗺️"
          label="Infografía detallada del framework"
          meta="Mapa interactivo de las métricas B2B por etapa"
          variant="primary"
          external={false}
        />
      </ResourceGrid>
    </>
  );
}

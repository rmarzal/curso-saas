import { VideoBlock } from "@/components/VideoBlock";
import { Resource } from "@/components/Resource";
import { ModuleP, ResourceGrid } from "@/components/ModuleParts";

export function Module06() {
  return (
    <>
      <ModuleP>
        En este módulo veremos la retención en detalle, desde cómo calcularla
        hasta una visión de producto. Haremos una introducción a la analítica
        de producto para poder analizarla.
      </ModuleP>

      <VideoBlock youtubeId="iIyfCn6t3WU" caption="Retención y Engagement" />

      <ResourceGrid>
        <Resource
          href="/assets/retencion_engagement.pdf"
          icon="📑"
          label="Contenido Retención y Engagement"
          meta="PDF · Curso SaaS NS — UMH"
          variant="primary"
        />
      </ResourceGrid>
    </>
  );
}

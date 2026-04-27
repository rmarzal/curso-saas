import { VideoBlock } from "@/components/VideoBlock";
import { Resource } from "@/components/Resource";
import { ModuleP, ResourceGrid, Callout } from "@/components/ModuleParts";

export function Module03() {
  return (
    <>
      <ModuleP>
        En este módulo vamos a ver diferentes estrategias de pricing para
        posicionarnos en el mercado: desde cómo definir los precios hasta cómo
        presentarlos.
      </ModuleP>

      <VideoBlock youtubeId="RG2hof7g0sY" caption="Pricing" />

      <ResourceGrid>
        <Resource
          href="/contenido/pricing"
          icon="📕"
          label="Contenido de soporte de pricing"
          meta="Infografía · abre en nueva pestaña"
          external={false}
        />
      </ResourceGrid>

      <Callout
        icon="💡"
        text={
          <>
            <strong>Caso práctico:</strong> Diseña tu estrategia de pricing o
            evalúa tu estrategia actual.
          </>
        }
      />
    </>
  );
}

import { VideoBlock } from "@/components/VideoBlock";
import { Resource } from "@/components/Resource";
import { ModuleP, ResourceGrid } from "@/components/ModuleParts";

export function Module08() {
  return (
    <>
      <ModuleP>
        Seguro que muchas veces te has preguntado:{" "}
        <strong>¿un 5% de churn es bueno?</strong> ¿estoy en la media? Pues la
        cuestión es que depende de cómo y con quién te compares.
      </ModuleP>
      <ModuleP>
        En este módulo hablaremos sobre el benchmark de métricas SaaS entre
        negocios.
      </ModuleP>

      <VideoBlock youtubeId="pDTfWOlFlDE" caption="Benchmark SaaS" />

      <ResourceGrid>
        <Resource
          href="https://firebasestorage.googleapis.com/v0/b/nextscenario-cf4c6.appspot.com/o/templates%2FEnglish%202024%20Saas%20Benchmark%20%20Report.pdf?alt=media&token=113de9b2-9c8d-4163-8f30-a5c5bffb6ed8"
          icon="📥"
          label="Descargar estudio sobre retención"
          meta="2024 SaaS Benchmark Report (PDF · inglés)"
          variant="primary"
        />
      </ResourceGrid>
    </>
  );
}

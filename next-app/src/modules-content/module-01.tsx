import { VideoBlock } from "@/components/VideoBlock";
import { Resource } from "@/components/Resource";
import { ModuleP, ResourceGrid } from "@/components/ModuleParts";

export function Module01() {
  return (
    <>
      <ModuleP>
        Este módulo es una introducción al modelo de negocio SaaS, en el que
        veremos sus características y los principales factores de fracaso.
      </ModuleP>

      <VideoBlock
        youtubeId="NFrDckgU0ko"
        caption="Módulo 1 · Introducción modelos de negocio SaaS"
      />

      <ResourceGrid>
        <Resource
          href="/contenido/modulo1"
          icon="📕"
          label="Contenido de apoyo"
          meta="Infografía del módulo · abre en nueva pestaña"
          external={false}
        />
      </ResourceGrid>
    </>
  );
}

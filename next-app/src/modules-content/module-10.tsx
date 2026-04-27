import { VideoBlock } from "@/components/VideoBlock";
import { Resource } from "@/components/Resource";
import { ModuleP, ResourceGrid } from "@/components/ModuleParts";

export function Module10() {
  return (
    <>
      <ModuleP>
        En este módulo hablamos de cómo reportar a inversores y las principales
        herramientas que se utilizan: el <strong>One Pager</strong> y el{" "}
        <strong>Data Room</strong>.
      </ModuleP>

      <VideoBlock youtubeId="9ap1qGGTTF0" caption="Reporting a inversores" />

      <ResourceGrid>
        <Resource
          href="/contenido/reporting"
          icon="📑"
          label="Contenido reporting: Data Room y One Pager"
          meta="Infografía · abre en nueva pestaña"
          external={false}
        />
      </ResourceGrid>
    </>
  );
}

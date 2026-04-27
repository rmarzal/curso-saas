import { VideoBlock } from "@/components/VideoBlock";
import { Resource } from "@/components/Resource";
import {
  ModuleP,
  ModuleH2,
  ResourceGrid,
  Reflection,
} from "@/components/ModuleParts";

export function Module02() {
  return (
    <>
      <ModuleP>
        En este módulo veremos las principales metodologías de Go to Market:
        Ventas vs Product Led Growth, los modelos Freemium vs Free Trial, y las
        principales estrategias para limitar un producto. Esta parte es
        fundamental antes de entrar en el pricing.
      </ModuleP>

      <ModuleH2>Go To Market: Product Led Growth</ModuleH2>
      <VideoBlock youtubeId="VlhroskJsJk" caption="Product Led Growth" />
      <ResourceGrid>
        <Resource
          href="/contenido/product-led-growth"
          icon="📕"
          label="Contenido Product Led Growth"
          meta="Infografía · abre en nueva pestaña"
          external={false}
        />
      </ResourceGrid>

      <ModuleH2>Go To Market: Sales &amp; Product Led Sales</ModuleH2>
      <VideoBlock youtubeId="FJYZMjG_YZs" caption="Product Led Sales" />
      <ResourceGrid>
        <Resource
          href="/contenido/product-led-sales"
          icon="📕"
          label="Contenido Product Led Sales"
          meta="Infografía · abre en nueva pestaña"
          external={false}
        />
      </ResourceGrid>

      <ModuleH2>Cómo limitar un producto: Freemium vs Free Trial</ModuleH2>
      <VideoBlock
        youtubeId="aOX4yy79L_0"
        caption="Cómo limitar un producto · Freemium vs Free Trial"
      />
      <ResourceGrid>
        <Resource
          href="/contenido/modelos-de-negocio"
          icon="📕"
          label="Contenido modelos de negocio"
          meta="Infografía · abre en nueva pestaña"
          external={false}
        />
      </ResourceGrid>

      <ModuleH2>Reflexión antes de continuar</ModuleH2>
      <ModuleP>
        Después de las etapas iniciales del curso, me gustaría que pararas tu
        tiempo para reflexionar lo que has hecho hasta ahora y/o los próximos
        pasos a seguir. Tómate tu tiempo antes de avanzar más en el curso.
      </ModuleP>
      <Reflection
        questions={[
          "¿Qué estrategia de Go To Market estás siguiendo y cómo la estás ejecutando?",
          "¿Cómo estás limitando el uso de tu producto?",
          "¿Tienes un modelo freemium o free trial? ¿Tiene sentido para ti?",
        ]}
      />
    </>
  );
}

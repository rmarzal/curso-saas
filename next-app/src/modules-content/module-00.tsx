import { VideoBlock } from "@/components/VideoBlock";
import { Resource } from "@/components/Resource";

export function Module00() {
  return (
    <>
      <VideoBlock youtubeId="2XsJIB7AjbA" caption="Introducción al curso" />

      <h3
        style={{
          fontFamily: "var(--font-sans)",
          fontWeight: 500,
          fontSize: 18,
          letterSpacing: "-0.015em",
          marginTop: 24,
          color: "var(--color-ink)",
          display: "flex",
          alignItems: "center",
          gap: 10,
        }}
      >
        📌 Módulo de reflexión personal antes de empezar
      </h3>
      <p style={{ fontSize: 16, lineHeight: 1.6, color: "var(--color-ink)", opacity: 0.86 }}>
        En este apartado nos gustaría que reflexiones sobre el tipo de empresa que
        tienes o en la que trabajas, o si aún estás lanzándola, cómo te gustaría
        que fuese.
      </p>

      <VideoBlock
        youtubeId="iow1Qv5LPH4"
        caption="¿Qué empresa quieres construir?"
      />

      <div style={{ marginTop: 18, display: "grid", gap: 10 }}>
        <Resource
          href="/contenido/que-empresa-quieres-construir"
          icon="📕"
          label="Contenido: Qué empresa quieres construir"
          meta="Infografía de apoyo · abre en nueva pestaña"
          external={false}
        />
      </div>

      <h2
        className="h3-display"
        style={{
          marginTop: 40,
          paddingLeft: "0.95rem",
          borderLeft: "4px solid var(--color-accent)",
          lineHeight: 1.25,
        }}
      >
        Ahora debes hacer tu reflexión
      </h2>

      <Reflection
        questions={[
          "¿Qué empresa quieres construir o en cuál te gustaría trabajar?",
          "¿Estás en el camino correcto o debes replantearte la manera en la que lo estás haciendo?",
          "¿Te has decidido por levantar inversión o ser una empresa bootstrapeada que se financia con sus propios recursos o ahorros? ¿Vas solo o acompañado?",
        ]}
      />
    </>
  );
}

function Reflection({ questions }: { questions: string[] }) {
  return (
    <div style={{ marginTop: 16, display: "grid", gap: 10 }}>
      {questions.map((q, i) => (
        <div
          key={i}
          style={{
            display: "flex",
            gap: 16,
            alignItems: "flex-start",
            background: "var(--color-paper)",
            border: "1px solid var(--color-line)",
            borderRadius: 14,
            padding: "16px 18px",
            color: "var(--color-ink)",
            fontSize: 16,
            lineHeight: 1.5,
          }}
        >
          <span
            style={{
              flexShrink: 0,
              width: 28,
              height: 28,
              borderRadius: "50%",
              background: "var(--color-ink)",
              color: "var(--color-accent)",
              fontFamily: "var(--font-mono)",
              fontWeight: 600,
              fontSize: 12,
              display: "flex",
              alignItems: "center",
              justifyContent: "center",
            }}
          >
            {i + 1}
          </span>
          <span dangerouslySetInnerHTML={{ __html: q }} />
        </div>
      ))}
    </div>
  );
}

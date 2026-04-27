interface Props {
  youtubeId: string;
  caption: string;
}

export function VideoBlock({ youtubeId, caption }: Props) {
  return (
    <div className="my-5">
      <div
        style={{
          position: "relative",
          paddingBottom: "56.25%",
          height: 0,
          overflow: "hidden",
          borderRadius: 16,
          background: "var(--color-ink)",
          border: "1px solid var(--color-line)",
        }}
      >
        <iframe
          src={`https://www.youtube.com/embed/${youtubeId}`}
          title={caption}
          allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
          allowFullScreen
          style={{
            position: "absolute",
            inset: 0,
            width: "100%",
            height: "100%",
            border: 0,
          }}
        />
      </div>
      <div
        style={{
          display: "flex",
          alignItems: "center",
          gap: 10,
          marginTop: 12,
          fontFamily: "var(--font-mono)",
          fontSize: 11,
          color: "var(--color-mute)",
          letterSpacing: "0.1em",
          textTransform: "uppercase",
        }}
      >
        <span
          style={{
            background: "var(--color-accent)",
            color: "var(--color-ink)",
            fontFamily: "var(--font-mono)",
            fontWeight: 600,
            fontSize: 10,
            padding: "3px 8px",
            borderRadius: 4,
            letterSpacing: "0.08em",
          }}
        >
          VIDEO
        </span>
        {caption}
      </div>
    </div>
  );
}

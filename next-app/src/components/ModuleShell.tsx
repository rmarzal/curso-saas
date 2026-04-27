import { ModuleNav } from "./ModuleNav";
import type { ModuleEntry } from "@/lib/modules";

interface Props {
  module: ModuleEntry;
  prev: ModuleEntry | null;
  next: ModuleEntry | null;
  children: React.ReactNode;
}

export function ModuleShell({ module, prev, next, children }: Props) {
  return (
    <div className="max-w-[1100px] mx-auto px-8 max-md:px-5">
      <header className="py-14 max-md:py-10">
        <span className="eyebrow">
          <span className="dot"></span>
          Módulo {module.num} · Del curso
        </span>
        <h1 className="h1-display mt-5 max-w-[24ch]" style={{ fontSize: "clamp(36px, 5vw, 64px)" }}>
          {module.title}
        </h1>
        <p className="lede mt-5 max-w-[64ch]">{module.subtitle}</p>
      </header>

      <ModuleNav prev={prev} next={next} />

      <main className="content-card mb-6">{children}</main>

      <ModuleNav prev={prev} next={next} />
    </div>
  );
}

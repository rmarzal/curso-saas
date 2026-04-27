import { notFound } from "next/navigation";
import { ModuleShell } from "@/components/ModuleShell";
import { getModuleBySlug, getPrevNext, modules } from "@/lib/modules";
import { moduleContent } from "@/modules-content";

export async function generateStaticParams() {
  return modules.map((m) => ({ slug: m.slug }));
}

export async function generateMetadata({
  params,
}: {
  params: Promise<{ slug: string }>;
}) {
  const { slug } = await params;
  const m = getModuleBySlug(slug);
  if (!m) return {};
  return {
    title: `${m.title} · Curso SaaS`,
    description: m.shortDesc,
  };
}

export default async function ModulePage({
  params,
}: {
  params: Promise<{ slug: string }>;
}) {
  const { slug } = await params;
  const module = getModuleBySlug(slug);
  if (!module) notFound();

  const { prev, next } = getPrevNext(slug);
  const Content = moduleContent[slug as keyof typeof moduleContent];

  return (
    <ModuleShell module={module} prev={prev} next={next}>
      {Content ? <Content /> : <p>Contenido en migración…</p>}
    </ModuleShell>
  );
}

/**
 * Definición canónica de los 11 módulos del curso.
 * Orden viene de Notion — no se debe cambiar.
 *
 * Cada módulo tiene su slug (que aparece en la URL), título, lede, videos
 * de YouTube y links a infografías relacionadas. La estructura específica
 * de cada uno (videos en orden, callouts, listas de reflexión) se define
 * en su `page.tsx` correspondiente para tener control total.
 */

export interface ModuleEntry {
  num: string;
  slug: string;
  title: string;
  subtitle: string;
  shortDesc: string;
}

export const modules: ModuleEntry[] = [
  {
    num: "00",
    slug: "que-empresa-quieres-construir",
    title: "¿Qué empresa quieres construir?",
    subtitle:
      "Reflexión inicial antes de empezar el curso: el tipo de empresa SaaS que quieres construir y el camino que estás tomando.",
    shortDesc: "Reflexión inicial sobre el tipo de empresa SaaS que quieres crear.",
  },
  {
    num: "01",
    slug: "introduccion-modelos-negocio",
    title: "Introducción Modelos de negocio SaaS",
    subtitle:
      "Características del modelo SaaS y los principales factores de fracaso. La base sobre la que construimos el resto del curso.",
    shortDesc:
      "Características del modelo SaaS y los principales factores de fracaso.",
  },
  {
    num: "02",
    slug: "modelos-de-negocio",
    title: "Modelos de negocio y limitación de producto",
    subtitle:
      "Las principales metodologías de Go to Market: Ventas vs Product Led Growth, los modelos Freemium vs Free Trial y las estrategias para limitar un producto.",
    shortDesc:
      "Sales vs PLG, Freemium vs Free Trial y cómo limitar el producto.",
  },
  {
    num: "03",
    slug: "pricing",
    title: "Pricing SaaS",
    subtitle:
      "Diferentes estrategias de pricing para posicionarnos en el mercado: desde cómo definir los precios hasta cómo presentarlos.",
    shortDesc: "Estrategias para definir y presentar tus precios.",
  },
  {
    num: "04",
    slug: "metricas-fundamentales",
    title: "Métricas SaaS fundamentales",
    subtitle:
      "El lenguaje universal de los negocios SaaS. MRR, ARR, LTV, CAC, churn, eficiencia y unit economics.",
    shortDesc: "MRR, ARR, LTV, CAC, churn, eficiencia y unit economics.",
  },
  {
    num: "05",
    slug: "framework-b2b",
    title: "B2B SaaS Metrics Journey Framework",
    subtitle:
      "Las métricas que importan en cada etapa del viaje B2B SaaS, desde la captación hasta la expansión.",
    shortDesc: "Las métricas que importan en cada etapa del viaje B2B.",
  },
  {
    num: "06",
    slug: "retencion-engagement",
    title: "Retención y Engagement",
    subtitle:
      "Veremos la retención en detalle, desde cómo calcularla hasta una visión de producto. Una introducción a la analítica de producto para poder analizarla.",
    shortDesc:
      "Cómo medir retención e introducción a la analítica de producto.",
  },
  {
    num: "07",
    slug: "analisis-cohortes",
    title: "Análisis de Cohortes",
    subtitle:
      "Cómo realizar un estudio de cohortes paso a paso. Incluye plantilla descargable de Google Sheets.",
    shortDesc: "Estudio de cohortes paso a paso con plantilla de Sheets.",
  },
  {
    num: "08",
    slug: "benchmark",
    title: "Benchmark SaaS — Cómo comparar negocios SaaS",
    subtitle:
      "El benchmark de métricas SaaS entre negocios. Para saber si tu churn, tu CAC o tu LTV están en la media.",
    shortDesc: "Cómo comparar tu SaaS con el mercado y situarte en la media.",
  },
  {
    num: "09",
    slug: "modelos-financieros",
    title: "Modelos Financieros SaaS",
    subtitle:
      "Los principales modelos financieros en la gestión de una empresa: cashflow, cuenta de resultados y balance.",
    shortDesc: "Cashflow, cuenta de pérdidas y ganancias y balance.",
  },
  {
    num: "10",
    slug: "reporting",
    title: "Reporting a inversores",
    subtitle:
      "Cómo reportar a inversores y las principales herramientas que se utilizan: el One Pager y el Data Room.",
    shortDesc: "Data Room y One Pager para presentar a inversores.",
  },
];

export const extraContent = [
  {
    num: "E1",
    slug: "entrevistas-clientes",
    title: "Entrevistas a clientes",
    desc: "Cómo hacer entrevistas a clientes que aporten señal.",
  },
  {
    num: "E2",
    slug: "quien-lidera-metricas",
    title: "Quién lidera las métricas",
    desc: "Roles y responsabilidades en torno a los datos.",
  },
];

export function getModuleBySlug(slug: string): ModuleEntry | undefined {
  return modules.find((m) => m.slug === slug);
}

export function getPrevNext(slug: string) {
  const idx = modules.findIndex((m) => m.slug === slug);
  if (idx === -1) return { prev: null, next: null };
  const prev = idx > 0 ? modules[idx - 1] : null;
  const next = idx < modules.length - 1 ? modules[idx + 1] : null;
  return { prev, next };
}

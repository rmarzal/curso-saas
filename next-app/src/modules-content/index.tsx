/**
 * Registry de contenidos por módulo. Cada slug mapea a un componente que
 * renderiza el contenido específico (videos + recursos + reflexión) del
 * módulo dentro del shell común (ModuleShell).
 */
import { Module00 } from "./module-00";
import { Module01 } from "./module-01";
import { Module02 } from "./module-02";
import { Module03 } from "./module-03";
import { Module04 } from "./module-04";
import { Module05 } from "./module-05";
import { Module06 } from "./module-06";
import { Module07 } from "./module-07";
import { Module08 } from "./module-08";
import { Module09 } from "./module-09";
import { Module10 } from "./module-10";

export const moduleContent = {
  "que-empresa-quieres-construir": Module00,
  "introduccion-modelos-negocio": Module01,
  "modelos-de-negocio": Module02,
  pricing: Module03,
  "metricas-fundamentales": Module04,
  "framework-b2b": Module05,
  "retencion-engagement": Module06,
  "analisis-cohortes": Module07,
  benchmark: Module08,
  "modelos-financieros": Module09,
  reporting: Module10,
} as const;

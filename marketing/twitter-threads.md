# Twitter / X · 4 threads

Formato: tweet 1 cazaclicks, después numeración 2/, 3/, etc. Termina siempre con
CTA + link. Cada tweet entre 240-280 caracteres aprovechando el límite.

---

## Thread 1 · "11 métricas SaaS en 11 tweets"

**1/** El 80% de los founders SaaS que conozco solo miran 2-3 métricas.

Las otras 8 son las que separan un negocio rentable de uno que cierra en 18 meses.

Te las explico todas en un thread 👇

**2/** MRR (Monthly Recurring Revenue)

Tus ingresos recurrentes mensualizados.

No basta con el total: descompón en
  • New MRR (clientes nuevos)
  • Expansion (upgrades)
  • Contraction (downgrades)
  • Churn (bajas)
  • Reactivation (vuelven)

Esa descomposición te dice qué crece y qué se rompe.

**3/** ARR

MRR × 12.

Pero ojo con cómo lo calculas. CrowdStrike y Dynatrace usan métodos distintos.

En B2B con contratos anuales: ACV (Annual Contract Value) puede ser más limpio.

Una empresa con 50% mensual y 50% anual no puede mostrar un ARR sin asterisco.

**4/** Churn Rate

% de clientes que cancelan en un periodo.

Pero hay 4 churns distintos:
  • Customer churn (clientes)
  • MRR churn (ingresos)
  • Voluntario (decisión activa)
  • Involuntario (tarjeta caducada)

El involuntario lo recuperas si lo detectas. El voluntario no.

**5/** NRR (Net Revenue Retention)

((MRR inicial + Expansión - Contracción - Churn) / MRR inicial) × 100

NRR > 100% = tu base existente crece sola, sin clientes nuevos.

Snowflake, Datadog, Twilio operan a 130%+. Ese es el santo grial del SaaS.

**6/** CAC (Customer Acquisition Cost)

(Marketing + Ventas) / Nuevos clientes.

Pero calcúlalo:
  • Por canal
  • Por plan
  • Por etapa del funnel
  • Blended y solo de campañas

Un CAC global agregado oculta dónde estás quemando dinero. Casi siempre es 1 canal.

**7/** LTV (Lifetime Value)

ARPU / Churn (versión simple) — o mejor, basado en cohortes reales.

LTV con margen bruto en lugar de ARPU es más honesto: refleja euros que de verdad te quedan.

Si tu LTV simple dice €5K y el ajustado por margen dice €1.5K, es ruido.

**8/** Ratio LTV/CAC

LTV / CAC.

  > 3 → modelo saludable
  3 → ineficiencia
  < 1 → pierdes dinero por cliente

Esta es la métrica que mira cualquier inversor antes de levantar el ojo de tu deck.

**9/** Payback Period

CAC / (ARPU × Margen Bruto Mensual).

Tiempo que tardas en recuperar el coste de adquirir un cliente.

5-12 meses es saludable en B2B SMB. 18+ meses requiere mucha caja para sostener.

**10/** Burn Multiple

Cash Burn / Nuevo MRR Anualizado.

  < 1 → eficiente
  1-1.5 → bien
  1.5-2 → mejorable
  > 2 → preocupante

Métrica que David Sacks puso de moda. Mide si tu crecimiento justifica lo que quemas.

**11/** Rule of 40

Crecimiento anual % + Margen EBITDA %.

Suma > 40% = SaaS sano.

Crecer 60% perdiendo 30% (Rule = 30) está peor que crecer 25% con +15% margen (Rule = 40).

Lección: no sirve crecer a cualquier precio.

**12/12** Resumen rápido:
  ▸ MRR/ARR para tamaño
  ▸ NRR para expansión orgánica
  ▸ Churn para retención
  ▸ CAC/LTV/Payback para eficiencia
  ▸ Burn Multiple + Rule of 40 para salud global

Las 12 desglosadas con fórmulas, ejemplos y casos reales en el curso 👇

cursos.nextscenario.com

---

## Thread 2 · "Caso real PLS: cómo redujimos 3× el churn"

**1/** Un caso real de un SaaS B2B con free trial.

Empezaron 100% self-service. 70% conversiones venían de auto-onboarding.

Tras 4 meses de datos, hicieron una cosa "anti PLG" y el churn cayó 3×.

Cuento la historia 👇

**2/** Punto de partida (mes 1):

  ▸ Usuarios que se registraban: 100% self-service
  ▸ Conversión a pago: ~12%
  ▸ Churn mes 1: 15% (alto)
  ▸ Equipo de ventas: 0 personas
  ▸ Filosofía: "el producto vende solo"

**3/** Detectaron algo en los datos:

Los pocos casos donde un humano del equipo había contactado por DM, email, o demo casual...

→ Tasa de conversión 3× mayor.
→ Churn 3× menor.

¿Casualidad? Lo decidieron probar formalmente.

**4/** Experimento (mes 2-3):

Mitad de los nuevos signups → activación 100% self-service (control)
Otra mitad → Sales-Assisted: ofrecían 30 min con un humano para acompañar onboarding

NADA invasivo. Solo mensaje: "¿Quieres que te muestre cómo sacar partido en 30 min?"

**5/** Resultado mes 4:

  Self-service: churn 15% / conv. 12%
  Sales-Assisted: churn 5% / conv. 35%

3× MENOS churn. 3× MÁS conversión. En la mitad asistida humanamente.

**6/** ¿Por qué?

  1. **Compromiso por la reunión.** Quien agenda dedica más tiempo al producto del que dedicaría solo.
  2. **El humano transmite valor.** Una landing tarda 6 meses en pulir; una persona lo hace en 30 min.
  3. **Adaptación.** El humano detecta el caso de uso real y adapta el onboarding.

**7/** Decisión: pivotaron.

Pasaron de 30% atribuido a sales-assisted → 50% en 2 meses.

No mataron el self-service. Lo combinaron. PLS = Product Led Sales.

Lo mejor de PLG (escalabilidad, freemium) + lo mejor de B2B sales (humano detrás).

**8/** Lección:

Si estás en early stage y tu producto no tiene PMF claro...

Más humanos. Menos automatización.

Ya tendrás tiempo de escalar la automatización cuando el producto venda solo. Pero pre-PMF, el humano es lo que cierra.

**9/9** Caso completo + framework PLS en el módulo 2 del curso 👇

cursos.nextscenario.com/metricas/

---

## Thread 3 · "Por qué el precio bajo en B2B mata tu SaaS"

**1/** Veo este error CADA semana:

Un fundador SaaS B2B me pregunta:
"¿Te parece bien €19/mes para mi plan?"

No.

Casi siempre es no.

Te explico por qué 👇

**2/** En B2C el precio sí importa mucho. €9.99 vs €14.99 puede triplicar conversión.

En B2B la dinámica es totalmente distinta.

Variables que pesan más que el precio:
  ▸ Confianza
  ▸ Soporte
  ▸ Integraciones
  ▸ Certificaciones
  ▸ Riesgo de fallar

**3/** Y el precio bajo NO genera confianza.

Genera dudas:
  ▸ "¿Será serio?"
  ▸ "¿Aguantará 5.000 usuarios?"
  ▸ "¿Tendrá soporte 24/7?"
  ▸ "¿Cumplirá GDPR?"
  ▸ "¿Existirá en 2 años?"

Cuanto más barato, más sospechoso.

**4/** Casos reales que veo:

SaaS B2B con plan de €29/mes.

Llega un cliente potencial con 200 empleados.

Mira el plan, mira a la competencia que cobra €500/mes.

Decisión: contrata al de €500, "porque debe ser mejor".

**5/** Las matemáticas tampoco ayudan al precio bajo:

Para facturar €5K MRR puedes ir por:

A) 834 clientes × €6 → necesitas equipo de soporte enorme
B) 34 clientes × €150 → 1 persona los gestiona
C) 16 clientes × €300 → lo haces tú con un freelance

Cualquier B2B SaaS de éxito juega C.

**6/** Estrategia que funciona:

  1. Empieza alto. Más alto del que crees. Si nadie te dice que es caro, sube.
  2. Es más fácil bajar precios que subirlos. Lo contrario es traumático.
  3. En enterprise, oculta los precios. La conversación de valor importa más.

**7/** Si quieres profundizar, en el módulo 3 del curso desgrano:

  ▸ 11 estrategias de pricing
  ▸ Cuándo usar cada una
  ▸ Lifetime Deals (peligros)
  ▸ Psicología del precio
  ▸ Mostrar precios vs ocultarlos
  ▸ Casos reales de SaaS españoles

cursos.nextscenario.com

---

## Thread 4 · "10 errores en métricas que veo cada semana"

**1/** Los 10 errores más comunes que veo en métricas SaaS.

Si hay alguno que tu equipo comete, te está costando dinero ahora mismo.

Thread con cómo arreglar cada uno 👇

**2/** Error 1: Mirar solo el churn agregado.

5% mensual no significa nada sin contexto.

Solución: desglosa churn por:
  ▸ Plan
  ▸ País
  ▸ Cohorte de adquisición
  ▸ Voluntario vs involuntario

Casi siempre el problema está en 1 cohorte específica que arrastra al resto.

**3/** Error 2: Asumir que todos los CAC son iguales.

CAC blended de €200 oculta:
  ▸ CAC orgánico €40
  ▸ CAC paid €450
  ▸ CAC ferias €1.200

Si paid se come tu margen, lo ves o no lo ves según hagas el zoom.

**4/** Error 3: Calcular LTV con churn anualizado.

Cohortes pequeñas + 1 año de datos = LTV inflado.

Solución: LTV basado en cohortes con mínimo 12 meses de observación. O bien LTV con margen bruto en lugar de ARPU.

**5/** Error 4: Confundir engagement con valor.

DAU/MAU alto no significa felicidad. Significa hábito.

Hay productos de los que los usuarios son adictos pero los ODIAN. Mide NPS junto con DAU.

**6/** Error 5: No separar churn voluntario del involuntario.

El involuntario (tarjetas caducadas) es 10-15% del total y lo puedes recuperar.

Pasos:
  ▸ Detéctalo
  ▸ Avisa al cliente
  ▸ Reintenta cobro
  ▸ Da 14 días de gracia

Esa "ventana de churn" reduce un 30-50% del churn involuntario.

**7/** Error 6: Optimizar el funnel sin saber dónde se rompe.

Conversión global del 2% no te dice nada.

Necesitas:
  ▸ Visitor → Lead
  ▸ Lead → Trial
  ▸ Trial → Paid

Una mejora del 1% en una etapa baja del funnel multiplica el resultado.

**8/** Error 7: Confundir actividad con valor.

"Ejecutamos 200 features este Q" → ¿qué pasó con churn? ¿con NRR? ¿con LTV?

Métricas de output (lo que haces) ≠ métricas de outcome (lo que cambias).

Mide outcomes. Output ya lo cuenta tu Jira.

**9/** Error 8: Olvidar el burn multiple.

Crecer 100% gastando €500K para conseguir €100K nuevo MRR (5×) es ineficiente.

Crecer 30% gastando €100K para €100K nuevo MRR (1×) es eficiente.

Hoy los inversores miran burn multiple antes que growth rate.

**10/** Error 9: Tablas en lugar de cohortes.

"El churn ha bajado del 6% al 4%" puede ser real... o un sesgo de mix de cohortes.

Mira siempre la cohorte de mes 12 vs mes 12. No medias agregadas.

**11/** Error 10: Métricas de éxito sin baseline.

"Hemos crecido 50% YoY" → ¿bien o mal?

Sin saber:
  ▸ Tu mercado total
  ▸ El crecimiento del mercado
  ▸ La competencia

…es imposible saber si vas o no.

**12/12** Los 10 errores. Y cómo arreglar cada uno.

Más material en el curso 👇

cursos.nextscenario.com/metricas/

PD: ¿alguno te ha disparado un "ah claro yo eso lo hago"? Cuéntame en respuesta.

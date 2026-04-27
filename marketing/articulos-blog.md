# Artículos blog · 3 piezas largas (1500-2500 palabras)

Para publicar en `nextscenario.com/blog/` o LinkedIn Articles. Optimizados para
SEO con keywords relevantes ("métricas SaaS", "modelos financieros SaaS",
"product led growth", etc.). Cada artículo termina con CTA al curso.

---

## Artículo 1 · "Las 12 métricas SaaS que de verdad importan (y las 5 que solo te distraen)"

**Slug:** `metricas-saas-importantes-vanity-metrics`
**Meta:** "Guía completa de las 12 métricas SaaS clave que diferencian negocios rentables de los que cierran. Con fórmulas, ejemplos reales y benchmarks por etapa."
**Keywords:** métricas saas, MRR ARR, LTV CAC, NRR, churn rate, vanity metrics, métricas accionables

---

# Las 12 métricas SaaS que de verdad importan

Llevo 10 años viendo SaaS que cierran. La gran mayoría no muere por falta de mercado o por mal producto. Mueren porque el equipo persigue las métricas equivocadas y descubre tarde que estaba construyendo algo que no escalaba.

Este artículo es un mapa: las 12 métricas que sí mueven la aguja, y las 5 que solo te hacen sentir bien sin construir negocio.

## El problema de las métricas en SaaS

Eric Ries lo nombró en *The Lean Startup*: "vanity metrics". Métricas que **suenan** importantes — usuarios registrados, descargas, tráfico web — pero que no te dicen qué hacer mañana.

El test rápido es preguntar **"¿y qué?"** después de cada métrica. Si la respuesta no es una acción concreta, es vanity:

- "Tenemos 50K seguidores en LinkedIn." → ¿Y qué? ¿Generan leads cualificados? ¿Convierten? Si no sabes, vanity.
- "1.000 usuarios registrados este mes." → ¿Cuántos activan el producto? ¿Cuántos pagan? Sin esa info, vanity.
- "1M visitas web." → ¿De qué fuente? ¿Convierten igual de bien las orgánicas que las pagadas? Sin ese desglose, vanity.

Las métricas accionables, en cambio, te dicen qué cambiar. CAC por canal te dice dónde invertir más. Activation rate por cohorte te dice qué onboarding funciona. NRR te dice si tu base se expande sola.

A continuación, las 12 que realmente cuentan.

## 1. MRR (Monthly Recurring Revenue)

Tus ingresos recurrentes mensualizados. Es el corazón del SaaS y la métrica más repetida en cualquier dashboard.

**Fórmula:** Clientes activos × ARPU mensual

Pero el MRR total no basta. Lo importante son sus movimientos:

- **New MRR** — ingresos de clientes nuevos.
- **Expansion MRR** — upgrades, cross-selling, más usuarios en la misma cuenta.
- **Contraction MRR** — downgrades, reducción de usuarios.
- **Churn MRR** — cancelaciones.
- **Reactivation MRR** — clientes que vuelven tras dar de baja.

Si tu MRR crece pero tu churn MRR también, estás en un agujero negro. Si crece tu expansion MRR, tienes producto que se queda con el cliente. Esa descomposición es lo que separa una empresa con tracción real de una rotación con maquillaje.

## 2. ARR (Annual Recurring Revenue)

MRR × 12. Métrica de talla, sobre todo cara a inversores.

Cuidado con cómo se calcula. CrowdStrike multiplica MRR diario × 365. Dropbox simplemente MRR × 12. Otras empresas con contratos anuales usan ACV (Annual Contract Value) directamente. Si comparas ARRs entre empresas, asegúrate de que usan la misma metodología.

## 3. NRR (Net Revenue Retention)

La métrica favorita del SaaS moderno. Mide cuánto retiene tu base de clientes existente, contando expansiones y churn:

**NRR = ((MRR inicial + Expansión - Contracción - Churn) / MRR inicial) × 100**

- NRR < 90%: estás perdiendo dinero solo manteniendo clientes.
- NRR 90-100%: la base se mantiene pero no crece.
- NRR > 100%: tu base existente crece sola, sin clientes nuevos.
- NRR > 130%: nivel de Snowflake/Datadog/Twilio. Modelo perfecto.

NRR alto es señal de PMF profundo: tus clientes te aman tanto que cada año te pagan más.

## 4. Churn Rate

% de clientes que cancelan en un periodo.

**Fórmula:** (Clientes perdidos / Clientes al inicio) × 100

Pero hay que distinguir cuatro variantes:

- **Customer churn** — cuántos clientes se van.
- **MRR churn** — cuántos ingresos pierdes.
- **Voluntario** — el cliente decide cancelar activamente.
- **Involuntario** — fallo de pago, tarjeta caducada, error técnico.

El churn involuntario es 10-15% del total y se puede recuperar. Implementa una "ventana de churn" de 14-30 días donde reintentas cobros, avisas al cliente y das un periodo de gracia. Esa única práctica reduce un 30-50% del churn involuntario.

## 5. Usuarios Activos (DAU/WAU/MAU)

DAU = activos diarios, WAU = semanales, MAU = mensuales.

Métricas de engagement útiles para productos de uso frecuente. Para SaaS B2B con uso semanal o mensual, la más relevante es WAU o MAU. Para productos B2C diarios (Slack, Spotify), DAU.

**Ratio DAU/MAU = stickiness**: > 0.20 indica que un 20% de tus usuarios mensuales también lo usan diario. Buen hábito de uso.

## 6. NPS (Net Promoter Score)

% Promotores (9-10) − % Detractores (0-6). Promotores recomiendan, detractores hablan mal.

NPS positivo es mejor que negativo. NPS > 40 es excelente. NPS > 70 es excepcional.

Pero más útil que el número absoluto es la tendencia trimestral y los comentarios cualitativos asociados. Un NPS estable de 30 puede ser mejor que uno volátil de 45 si el primero te genera referencias predecibles.

## 7. CAC (Customer Acquisition Cost)

(Marketing + Ventas) / Nuevos clientes adquiridos.

CAC global no te dice nada. Tienes que descomponer:

- **Por canal** (orgánico, paid, referidos, ferias)
- **Por plan** (¿es lo mismo el CAC de un plan de €19 que el de €490?)
- **Por etapa** (CPL, CAC user, CAC ventas, CAC marketing)
- **Blended vs solo de campañas**

Casi siempre el problema está en un solo canal. CAC blended de €200 puede ocultar un CAC paid de €600 que está aniquilando tu margen.

## 8. LTV (Lifetime Value)

Ingresos totales esperados de un cliente.

**LTV simple:** ARPU / Churn de clientes.
**LTV con margen:** ARPU × Margen Bruto / Churn.
**LTV por cohortes:** observas ingresos reales de una cohorte mes a mes hasta que la mayoría cancela.

El LTV con margen es más honesto. El LTV por cohortes es más preciso pero requiere mucha data histórica.

## 9. LTV/CAC

LTV dividido entre CAC. Métrica de viabilidad.

- **Ratio < 1**: pierdes dinero por cliente. Insostenible.
- **Ratio 1-3**: ineficiencia, pero recuperable.
- **Ratio > 3**: modelo saludable.
- **Ratio > 5**: deberías invertir más en captación, dejas dinero sobre la mesa.

Esta es la métrica que mira primero un inversor en tu deck.

## 10. CAC Payback Period

CAC / (ARPU × Margen Bruto Mensual).

Tiempo que tardas en recuperar lo que invertiste en adquirir un cliente.

- 3-12 meses: sano para B2B SMB.
- 12-18 meses: aceptable si tu LTV es alto.
- > 18 meses: necesitas mucha caja para sostenerlo.

Más corto = mejor flujo de caja. Más largo = más dependencia de financiación.

## 11. Burn Multiple

Cash Burn / Nuevo MRR Anualizado.

Métrica popularizada por David Sacks. Mide eficiencia de capital.

- **< 1**: excelente.
- **1-1.5**: buena.
- **1.5-2**: mejorable.
- **> 2**: ineficiencia preocupante.

Hoy los inversores miran burn multiple antes que tasa de crecimiento. No basta con crecer rápido — tienes que crecer eficientemente.

## 12. Rule of 40

Crecimiento anual % + Margen EBITDA %.

Si la suma supera 40, tu SaaS está en buen sitio. Crecer 60% perdiendo 30% (Rule = 30) es peor que crecer 25% con +15% margen (Rule = 40).

La regla de oro de SaaS maduros: no creas a cualquier precio.

## Las 5 vanity metrics que debes ignorar

A modo de contraste, estas son las métricas que no te van a hacer rico:

1. **Visitas a la web** — sin conversión, son ruido.
2. **Seguidores en RRSS** — útil si convierten en leads, irrelevante si no.
3. **Descargas o registros sin activar** — la mitad probablemente no vuelve.
4. **Tiempo total en la aplicación** — engagement no es valor.
5. **Reuniones agendadas sin cierre** — solo el cierre paga.

## Conclusión

Lo que mide tu equipo determina lo que construye tu equipo. Si mides MRR sin descomponer movimientos, persiguen volumen y descuidan retención. Si mides DAU sin NPS, persiguen adicción y no satisfacción.

Las 12 métricas anteriores son las que separan SaaS rentables de SaaS que cierran. Aprende a interpretarlas no como números aislados sino como un sistema interconectado: un cambio en CAC afecta el payback, que afecta el burn multiple, que afecta el runway.

Y por favor, descompón. Las medias agregadas mienten. Las cohortes te dicen lo que pasa de verdad.

---

> **¿Quieres profundizar?**
>
> En [el módulo 4 del curso SaaS](https://cursos.nextscenario.com) desglosamos cada una de estas métricas con fórmulas, ejemplos numéricos, benchmarks por segmento y errores típicos al calcularlas. Plantilla de Google Sheets descargable incluida.

---
---

## Artículo 2 · "Cómo construir un modelo de cashflow que te salve la empresa"

**Slug:** `modelo-cashflow-saas-completo`
**Meta:** "Guía paso a paso para montar un cashflow proyectado a 12 meses en SaaS. CFO, CFI, CFF, alertas de caja y plantilla descargable."
**Keywords:** cashflow saas, modelo financiero, flujo de caja, runway, burn rate

---

# Cómo construir un modelo de cashflow que te salve la empresa

Llevo 10 años viendo SaaS quebrar. Y casi todos murieron por la misma razón: se quedaron sin caja antes de alcanzar la siguiente ronda o la rentabilidad.

No fueron malos productos. No fueron malos mercados. Fueron mal gestionados financieramente.

Este artículo es la guía que me hubiera gustado tener cuando empezaba: cómo montar un modelo de cashflow real, qué partidas te van a hundir y qué alertas configurar para no quedarte ciego.

## Por qué el cashflow es la métrica más importante

Hay una frase que repito en cada mentoría: **"Cash is king. Profit is opinion."**

Profit es contabilidad. Cash es físico. Tu cuenta de resultados puede mostrar beneficios sobre el papel mientras tu cuenta corriente está en negativo. Si no puedes pagar a proveedores, nóminas, IVA o servidores, da igual cuánto factures.

El cashflow es la película real. La PyG es una foto retocada.

## Las 3 partes de un cashflow

Un modelo de cashflow profesional separa el dinero según su origen y destino:

### 1. Cash Flow de Operaciones (CFO)

Dinero que entra y sale por la actividad diaria del negocio:

**Entradas:**
- Cobros de clientes (cuidado: las ventas cerradas no son ventas cobradas)
- Reembolsos
- Otros ingresos operativos

**Salidas:**
- Nóminas y seguros sociales
- Impuestos (IVA trimestral, IRPF, Sociedades)
- Hosting y software (AWS, GCP, Stripe fees)
- Marketing y ventas
- Suministros y oficina

Esta es la parte que más impacta tu día a día. Si tu CFO es negativo de forma persistente, tu modelo no funciona — vendes pero no recuperas.

### 2. Cash Flow de Inversiones (CFI)

Dinero asociado a compra/venta de activos a largo plazo:

- Compra de hardware o software perpetuo
- Inversión en otra empresa
- Adquisiciones
- Venta de activos

En SaaS early stage suele ser pequeño. Pero importa cuando compras una herramienta cara con licencia perpetua o haces una adquisición.

### 3. Cash Flow de Financiación (CFF)

Dinero que entra/sale por temas financieros:

- Rondas de inversión (entran)
- Préstamos bancarios (entran al recibirlos, salen al devolverlos)
- Pago de dividendos
- Recompra de acciones

Es la partida que muchos founders esperan para "salvar" su CFO negativo. Pero hay que decirlo: si tu CFO siempre está en negativo, financiación solo te aplaza el problema.

## Cómo montar tu propio modelo

Mi recomendación es construirlo en Google Sheets para empezar. La complejidad viene después. Los pasos:

### Paso 1: Plantilla mensual a 12 meses

Crea una hoja con 12 columnas (un mes cada una) y filas para cada partida. Empieza simple:

```
                    Ene   Feb   Mar   Abr   ... Dic
─────────────────────────────────────────────────────
INGRESOS
  Cobros recurrentes
  Otros ingresos
─────────────────────────────────────────────────────
GASTOS OPERATIVOS
  Nóminas
  Seguros sociales
  Hosting (AWS)
  Software (Stripe, etc)
  Marketing
  Otros
─────────────────────────────────────────────────────
IMPUESTOS
  IVA
  IRPF
  Sociedades
─────────────────────────────────────────────────────
INVERSIONES (CFI)
  Compras hardware
─────────────────────────────────────────────────────
FINANCIACIÓN (CFF)
  Rondas
  Préstamos
─────────────────────────────────────────────────────
NETO MES
SALDO ACUMULADO
```

### Paso 2: Diferenciar real vs proyectado

Tienes que tener dos columnas por mes: real y proyectado. Cada cierre de mes, sustituyes proyectado por real. Eso te da:

- Histórico fiable.
- Diferencias entre lo que esperabas y lo que pasó.
- Insights sobre qué partidas estimas mal.

### Paso 3: Modelar cobros, no ventas

El error más típico es tratar ventas como cobros. En SaaS B2B con clientes pagando a 60 días, el cobro llega 2 meses después de la firma. Si tu modelo cuenta ventas como cobros, vives una ilusión.

Solución: por cada cliente, modelas cuándo paga, no cuándo firma.

### Paso 4: Modelar recurrencias

SaaS tiene el lujo de ser predecible. Renovaciones automáticas, suscripciones que se cobran sin intervención. Aprovecha esa previsibilidad para proyectar:

- Cohortes de clientes con su churn esperado.
- Pagos de servidores que crecen con el uso.
- Salarios que aumentan con contrataciones planificadas.
- Calendarios de impuestos (IVA trimestral, etc.).

### Paso 5: Configurar alertas

Una métrica fría no salva nada. Una alerta a las 3 AM cuando tu caja prevista para Q4 baja de €200K te da margen para reaccionar.

Configura mínimo:

- **Alerta de runway < 6 meses.**
- **Alerta de caja prevista < umbral.**
- **Alerta de cobro retrasado > 30 días.**
- **Alerta de pico de gasto > 20% mes anterior.**

WhatsApp, Slack, email — donde sea que mires todos los días. La alerta lleva el insight a tu cara, no espera a que vayas tú a buscarlo.

## Los KPIs financieros que tienes que mirar

Junto al cashflow puro, vigila:

### Burn Rate

Net Burn = Cash Out − Cash In (mensual)

Cuánto te estás "quemando" cada mes.

### Runway

Runway = Saldo de Caja / Net Burn Mensual

Cuántos meses te quedan antes de quedarte sin dinero, si no entra nada nuevo. Métrica vital para early stage.

### Burn Multiple

Burn Multiple = Cash Burn / Nuevo MRR Anualizado

Mide eficiencia. Crecer 100% gastando 5× ese crecimiento es ineficiente. Crecer 30% gastando 1× es saludable.

### Rule of 40

Crecimiento Anual % + Margen EBITDA %

Si suma > 40, tu SaaS está sano. Si suma < 40, estás creciendo demasiado caro o no creces lo suficiente.

## Errores típicos al modelar cashflow

He visto cientos. Los más comunes:

1. **Confundir ventas con cobros.** Te crees rentable. Estás en quiebra.
2. **Olvidarse del IVA.** El IVA cobrado no es tuyo. Sepáralo en una cuenta aparte.
3. **No proyectar costes que crecen.** Si contratas a 5 personas el próximo Q, el cashflow tiene que reflejar nóminas + seguros + equipos.
4. **Ignorar one-offs.** Setup fees, costes de integración, pagos extraordinarios. Suelen ser pequeños individualmente pero suman.
5. **No revisar diariamente.** El cashflow no es un documento que generas el día 1 y archivas. Es vivo.

## Consejos prácticos para alargar tu runway

Si tu cashflow proyectado te dice que llegas justo, estos son los puentes que sí funcionan:

1. **Cierra notas convertibles** con inversores que no entraron en tu última ronda.
2. **Líneas de crédito bancario** — pídelas cuando NO las necesitas. Cuando las necesitas, no te las dan.
3. **Cobra anual con descuento.** "10% off por pagar 12 meses anticipados" mejora tu cashflow inmediatamente.
4. **Renegocia con proveedores.** AWS, Stripe, software anual — todos negocian si pides.
5. **Revisa antes de contratar.** Un equipo más eficiente con 7 personas vale más que uno desbordado con 12.

## Conclusión

El cashflow no es un Excel para presentar a inversores. Es la película real de tu empresa. Si lo tienes claro, dormir es más fácil. Si lo ignoras, te despertarás un día con una crisis que nadie vio venir.

Tres reglas que te van a salvar:

1. **Cobros, no ventas.**
2. **Real vs proyectado, todos los meses.**
3. **Alertas, no documentos.**

---

> **Plantilla descargable**
>
> Te dejamos la plantilla de cashflow + B2B SaaS Metrics que usamos con clientes:
>
> [Descargar plantilla](https://docs.google.com/spreadsheets/d/1KlPY1AlP5QDZ27SltZuMOi-cyEFo93FBbGWBe47kpVk/edit)
>
> Y si quieres profundizar, en el [módulo 9 del curso SaaS](https://cursos.nextscenario.com) está el detalle completo con casos reales y vídeo paso a paso.

---
---

## Artículo 3 · "Por qué Product Led Growth es mentira en early stage"

**Slug:** `product-led-growth-mentira-early-stage`
**Meta:** "PLG funciona en empresas maduras, pero pre-PMF te puede arruinar. 6 razones por las que necesitas un humano vendiendo antes de productelizar."
**Keywords:** product led growth, plg, early stage saas, sales-led, product-market fit

---

# Por qué Product Led Growth es mentira en early stage

(Y por qué deberías vender con un humano detrás antes de "productelizar".)

---

Hay una corriente de pensamiento muy popular en SaaS desde hace 5 años: el producto se vende solo. Si construyes algo bueno, el usuario lo encuentra, lo prueba, paga.

Es un mito.

O mejor: es una verdad parcial que solo aplica a empresas con Product Market Fit profundo y muchísimo capital quemado para llegar ahí.

Si tú estás antes de ese punto — la mayoría de fundadores lo está — copiar el playbook PLG de Slack o Atlassian es una receta para gastarte el runway sin vender nada.

## Qué es Product Led Growth (PLG)

PLG es una estrategia Go-to-Market donde el producto es el motor principal de adquisición y conversión. Sin equipo comercial empujando, sin demos, sin emails de seguimiento. El usuario llega, se registra, prueba el producto y paga si lo usa.

Sus tres pilares teóricos:

1. **Producto fácil de usar.** Onboarding intuitivo. El usuario no necesita formación.
2. **Valor claro y diferenciado.** El usuario percibe el beneficio en segundos.
3. **Freemium o trial.** Pruebas el valor antes de pagar.

La premisa: *"Si un producto es lo suficientemente bueno, los clientes pagarán por él sin la intervención de nadie."*

Suena precioso. Y funciona — eventualmente. El problema es el *eventualmente*.

## Por qué no funciona pre-PMF

Cuando estás en early stage, casi nada de lo que necesitas para que PLG funcione está listo. Te explico las 6 razones que veo cada semana en mentorías:

### 1. No tienes claro tu buyer persona

Antes del PMF, no sabes a quién vendes. Conoces a varios "tipos" de cliente potencial pero no has identificado el segmento que más rentable es y donde mejor encaja tu producto.

PLG depende de un onboarding genérico que sirva a todos. Pero "todos" no convierte. Y mientras intentas adivinar el segmento por analítica de producto, estás 6-12 meses sin vender.

Un comercial detecta el segmento en 20 conversaciones.

### 2. Tu UX no transmite valor

Comunicar la propuesta de valor a través de una landing y un trial requiere meses de iteración pulida. Cada flujo, cada microcopy, cada email de onboarding tiene que estar afinado.

Empresas como Notion o Slack llevaron AÑOS puliendo eso. Y aún así pierden usuarios en los primeros 5 minutos.

Un humano transmite valor en 15 minutos. La landing necesita 6 meses.

### 3. Necesitas un setup analítico que probablemente no tienes

PLG sin datos es como pilotar a ciegas. Necesitas:

- Estrategia de medición clara.
- Definición de eventos relevantes.
- Stack: Rudderstack o Segment + Mixpanel o Amplitude.
- Personal técnico para implementarlo.
- Personal de producto para interpretarlo.

Eso son 3-6 meses solo de setup. Más cientos de horas de mantenimiento. Y aún así, sacar insights accionables de la analítica es complicado.

### 4. Vas a depender de financiación externa

PLG puro pre-PMF significa que durante meses no vendes. O vendes muy poco. Mientras tanto pagas hosting, salarios, herramientas.

Para sostenerlo necesitas caja. Mucha caja. O una ronda.

Sales-led B2B te financia con tus clientes. PLG early stage te exige financiación externa. La diferencia es enorme.

### 5. Detrás de muchos PLG hay miedo a vender

El elefante en la habitación. Hay fundadores técnicos que prefieren construir features que hacer una llamada de ventas.

PLG les da una excusa filosófica: "el producto vende solo, no hace falta vender". Pero la realidad es que están evitando una conversación incómoda — y esa conversación es la que descubre el PMF.

Si te incomoda vender, súbela. Vender es información. Cada "no" te dice algo sobre tu producto que el churn rate no te dice.

### 6. Pierdes el feedback cualitativo del cliente

Una analítica de producto te dice qué hizo el usuario. Un humano te dice POR QUÉ.

"El usuario abandonó en el paso 3" — útil. ¿Por qué? Sin saber, vas a iterar a ciegas.

Una conversación de 20 minutos con 5 usuarios pre-PMF te enseña más que un mes de heatmaps.

## Casos reales que parecen PLG y no lo son

Slack, Atlassian, Hubspot, Zoom — todos los "casos PLG" globales tienen algo en común que casi nadie cuenta: **equipo comercial detrás**.

- **Slack** tiene equipos de ventas para cuentas Enterprise.
- **Atlassian** vende Jira con SDRs y AEs cuando el deal es grande.
- **Hubspot** es famoso por su PLG, pero su segmento Enterprise tiene sales reps dedicados.
- **Zoom** vende a empresas grandes con un equipo de ventas tradicional.

Lo que llamamos "PLG" en estas empresas es realmente **PLS (Product Led Sales)**: el producto atrae usuarios, pero los humanos cierran las cuentas grandes.

## Caso real: cómo el PLS redujo 3× el churn

En una mentoría reciente trabajé con un SaaS B2B con free trial. Empezaron 100% self-service, 70% de las activaciones venían sin contacto humano.

Tras 4 meses, los datos mostraban algo claro:

- **Self-service** → conversión 12%, churn mes 1: 15%.
- **Sales-assisted** (un humano dedicaba 30 min al onboarding) → conversión 35%, churn 5%.

3× MENOS churn. 3× MÁS conversión. Solo por meter un humano en los primeros 30 minutos.

Pivotaron: pasaron de 30% atribuido a sales-assisted al 50% en 2 meses. No mataron el self-service — lo combinaron.

Eso es PLS en la práctica.

## Cuándo SÍ hacer PLG

PLG sí funciona, pero después de:

1. **PMF claro.** Sabes exactamente a quién vendes.
2. **UX puluda.** Tu onboarding convierte sin ayuda.
3. **Stack analítico maduro.** Sabes qué medir y cómo.
4. **Caja suficiente.** Puedes sostener 12+ meses sin vender.
5. **Producto auto-explicativo.** El valor es obvio en 60 segundos.

Si te falta UNO de esos puntos, no estás listo para PLG puro. Y eso está bien — es lo normal.

## Qué hacer en lugar de PLG en early stage

1. **Vende a humanos directamente.** Llamadas, demos, propuestas. Cada conversación es información.
2. **Cobra cuanto antes.** El cliente que paga es el que valida tu producto, no el usuario gratis.
3. **Itera basándote en feedback cualitativo.** Cinco entrevistas con clientes pesan más que un mes de analytics.
4. **Empieza con un Sales-Assisted Onboarding.** Cada nuevo cliente, 30 minutos contigo. Te enseñará más que cualquier curso.
5. **Cuando el segmento esté claro y la conversión asistida sea > 30%, AHÍ empiezas a productelizar.**

## Conclusión

Product Led Growth es una buena estrategia para empresas maduras. Es un destino, no un punto de partida.

Si estás pre-PMF, el camino es vender con humano detrás. Producteliza después, cuando el producto sea bueno solo y tengas datos para optimizarlo.

Vender no es de fundadores torpes. Vender es información. La estrategia de "el producto se vende solo" suele esconder a alguien que no quiere coger el teléfono.

---

> **¿Quieres profundizar en go-to-market SaaS?**
>
> En el [módulo 2 del curso SaaS](https://cursos.nextscenario.com) explico Product Led Sales, los casos reales (Slack, Hubspot), las 6 razones detalladas por las que PLG falla en early stage, y cómo diseñar una estrategia GTM híbrida.
>
> [Acceso al curso](https://cursos.nextscenario.com/metricas/login.php) · [Mentoría individual](https://tidycal.com/nextscenario/mentoria-curso)

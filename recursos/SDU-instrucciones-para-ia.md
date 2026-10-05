# Sistema de Diseño del Estado Uruguayo (AGESIC / SDD) — Guía Oficial para Desarrollo Asistido por IA

> Este archivo es el recurso oficial de contexto y referencia para asistentes de IA y desarrolladores que implementen el **Sistema de Diseño del Estado Uruguayo (AGESIC / SDD)**. Contiene exclusivamente las reglas, tokens, componentes, comportamientos responsivos, lineamientos de accesibilidad WCAG 2.1 AA y convenciones obligatorias de código HTML/CSS/JS **firmemente establecidas y publicadas en la documentación oficial activa de `https://sdd.puppo.uy/`**.

---

## 1. Contexto General y Principios de Diseño

El sistema está construido bajo los siguientes principios rectores:
- **Mobile First**: Diseñar y estructurar primero para pantallas móviles y escalar progresivamente a escritorio mediante media queries y breakpoints.
- **Accesibilidad Universal**: Cumplimiento estricto del estándar **WCAG 2.1 nivel AA / AAA**, requerido legalmente por la Ley N° 19.924.
- **Diseño Atómico**: Tokens de diseño (valores invariantes) → Componentes (bloques interactivos y de contenido) → Layouts y Grillas.
- **Consistencia Absoluta**: Utilizar siempre las clases BEM y variables CSS (tokens) provistas por el sistema. **Prohibido hardcodear valores de color, espaciado o tipografía**.
- **Sin dependencias externas**: El sistema se implementa en HTML semántico + CSS puro (BEM en español). No utiliza frameworks externos (no Bootstrap, no Tailwind).

---

## 2. Tokens de Diseño (CSS Custom Properties)

Todas las propiedades visuales deben referenciarse mediante `var(--token)`. Nunca deben utilizarse valores literales en los archivos de componentes o layout.

### 2.1 Paleta de Colores

#### Colores institucionales
Colores principales de identidad visual de gub.uy para destacar elementos relevantes y reforzar la presencia institucional:
```css
--primario-mas-claro   /* Azul muy suave para fondos (#E6F0FA) */
--primario-claro       /* Azul claro para estados hover secundarios (#90C2FF) */
--primario-principal   /* Azul institucional principal (#003DA5) */
--primario-oscuro      /* Azul oscuro para énfasis y active (#002669) */

--secundario-claro     /* Amarillo suave (#FFF3C4) */
--secundario-principal /* Amarillo institucional (#F5B300) */
--secundario-oscuro    /* Amarillo oscuro (#B88200) */
```

#### Colores funcionales (Estados del sistema)
```css
/* Éxito (Confirmaciones, tareas completadas) */
--funcional-exito-claro / -medio / -acento / -medio_oscuro / -oscuro

/* Error (Problemas críticos, acciones destructivas) */
--funcional-error-claro / -medio / -acento / -medio_oscuro / -oscuro

/* Advertencia (Precaución, atención requerida) */
--funcional-advertencia-claro / -medio / -acento / -medio_oscuro / -oscuro

/* Información (Contenido de apoyo, datos complementarios) */
--funcional-informacion-claro / -medio / -acento / -medio_oscuro / -oscuro

/* Notificación (Avisos del sistema no dependientes de acción del usuario) */
--funcional-notificacion-claro / -medio / -acento / -medio_oscuro / -oscuro
```

#### Neutros
```css
--neutro-0      /* Blanco puro #ffffff */
--neutro-25     /* Casi blanco, fondos secundarios #fbfbfb */
--neutro-50     /* Gris muy claro, fondo de página #f7f7f8 */
--neutro-100 al --neutro-950  /* Escala de grises cálidos para bordes, fondos y textos */
--neutro-1000   /* Negro puro #000000 */
```

#### Colores de texto semánticos
```css
--texto-principal       /* Texto general de alta legibilidad (#1A1A23) */
--texto-auxiliar        /* Texto secundario de apoyo (#595969) */
--texto-info_adicional  /* Metadatos y notas secundarias (#7D7D8E) */
--texto-placeholder     /* Placeholder en inputs (#A9A9B5) */
--texto-enlace-primario /* Azul institucional para enlaces (#003DA5) */
--texto-enlace-oscuro   /* Enlaces sobre fondo claro */
--texto-enlace-claro    /* Enlaces sobre fondo oscuro */
```

#### Foco visible (Accesibilidad obligatoria)
```css
--foco-acento       /* Naranja visible para anillo de foco (#FF6A00) */
--foco-acento-claro /* Naranja claro para halo exterior (#FFB885) */
--sombra-foco       /* 0 0 0 3px var(--foco-acento-claro), 0 0 0 4px var(--foco-acento) */
```

#### Colores de clasificación (Tags categóricos)
```css
--clasificacion-rojo-claro / -oscuro
--clasificacion-naranja-claro / -oscuro
--clasificacion-verde-claro / -oscuro
--clasificacion-verde-agua-claro / -oscuro
--clasificacion-celeste-claro / -oscuro
--clasificacion-fucsia-claro / -oscuro
--clasificacion-violeta-claro / -oscuro
--clasificacion-gris-claro / -oscuro
```

---

### 2.2 Tipografía

#### Regla de Oro de Familias Tipográficas (Estricta)
- **Open Sans (`--tipo-familia-base`)**: Es la **tipografía principal del sistema**. Se utiliza para **títulos, párrafos y la totalidad de la interfaz** por su alta legibilidad en entornos digitales. Los títulos utilizan Open Sans en pesos Light, Regular, Semibold y Bold.
- **Sora (`--tipo-familia-marca`)**: Se utiliza **exclusivamente para el texto identificatorio del organismo en el cabezal** (`.Logo-title` / `.App-brand-title`). El uso de Sora fuera de este contexto **no está contemplado** dentro del sistema.

```css
--tipo-familia-base: 'Open Sans', system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif;
--tipo-familia-marca: 'Sora', system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif;

/* Pesos */
--tipo-peso-light: 300;
--tipo-peso-regular: 400;
--tipo-peso-medium: 500;
--tipo-peso-semibold: 600;
--tipo-peso-bold: 700;

/* Tamaños de Título (Responsive: se reducen en móvil < 768px) */
--tipo-tamano-titulo-xxl: 2.25rem; /* 36px en móvil -> 48px en escritorio */
--tipo-tamano-titulo-xl: 1.875rem; /* 30px en móvil -> 36px en escritorio */
--tipo-tamano-titulo-l: 1.5rem;    /* 24px en móvil -> 28px en escritorio */
--tipo-tamano-titulo-m: 1.25rem;   /* 20px en móvil -> 22px en escritorio */
--tipo-tamano-titulo-s: 1.125rem;  /* 18px */
--tipo-tamano-titulo-xs: 1rem;     /* 16px */

/* Tamaños de Párrafo (mantienen el mismo valor en móvil y escritorio) */
--tipo-tamano-parrafo-xl: 1.25rem;  /* 20px */
--tipo-tamano-parrafo-l: 1.125rem;  /* 18px */
--tipo-tamano-parrafo-m: 1rem;      /* 16px (Tamaño base recomendado) */
--tipo-tamano-parrafo-s: 0.875rem;  /* 14px */
--tipo-tamano-parrafo-xs: 0.75rem;  /* 12px */
--tipo-tamano-parrafo-xxs: 0.6875rem; /* 11px */

/* Alturas de línea */
--tipo-altura-linea-xl: 1.6;
--tipo-altura-linea-l: 1.5;
--tipo-altura-linea-m: 1.4;
--tipo-altura-linea-s: 1.3;
--tipo-altura-linea-xs: 1.2;
--tipo-altura-linea-xxs: 1.1;
--tipo-altura-linea-1: 1;
```

---

### 2.3 Espaciados (Escala Progresiva en múltiplos de 4px)

```css
--espaciado-0: 0px;
--espaciado-2: 2px;
--espaciado-4: 4px;
--espaciado-8: 8px;
--espaciado-12: 12px;
--espaciado-16: 16px;
--espaciado-20: 20px;
--espaciado-24: 24px;
--espaciado-28: 28px;
--espaciado-32: 32px;
--espaciado-36: 36px;
--espaciado-40: 40px;
--espaciado-48: 48px;
--espaciado-56: 56px;
--espaciado-64: 64px;
--espaciado-72: 72px;
--espaciado-80: 80px;
```

---

### 2.4 Bordes

```css
/* Grosores */
--borde-grosor-0: 0px;
--borde-grosor-1: 1px;
--borde-grosor-2: 2px;
--borde-grosor-3: 3px;
--borde-grosor-4: 4px;
--borde-grosor-5: 5px;
--borde-grosor-6: 6px;

/* Radios */
--borde-radio-0: 0px;
--borde-radio-xxs: 2px;
--borde-radio-xs: 4px;
--borde-radio-s: 6px;
--borde-radio-m: 8px;
--borde-radio-l: 12px;
--borde-radio-xl: 16px;
--borde-radio-xxl: 24px;
--borde-radio-full: 9999px; /* Pastilla o circular */
```

---

### 2.5 Sombras

- **Difuminadas**: Bordes suaves y transiciones graduales para elevación natural.
- **Duras**: Bordes definidos y contraste marcado.
- **Niveles de elevación**:
  - `xs`: Separación mínima y sutil.
  - `s`: Pequeña elevación (tarjetas base).
  - `m`: Nivel base recomendado para componentes estándar.
  - `l`: Elevación destacada (menús, toolbars flotantes).
  - `xl`: Máxima elevación para componentes superpuestos (modales, diálogos).

```css
--sombra-difuminada-xs / -s / -m / -l / -xl
--sombra-dura-xs / -s / -m / -l / -xl
--sombra-foco /* Anillo visible naranja para accesibilidad */
```

---

## 3. Catálogo y Reglas de Componentes Oficiales

### 3.1 Acciones

#### A. Botones (`.boton` / `.Button`)
Permiten al usuario ejecutar acciones.
- **Jerarquías**:
  - **Primario (`.boton--primario`)**: Acción principal del contexto (fondo azul). Máximo una acción primaria visible por bloque.
  - **Secundario (`.boton--secundario`)**: Acciones alternativas o complementarias (borde azul, fondo transparente).
  - **Terciario / Botón Enlace (`.boton--enlace`)**: Acciones opcionales de baja jerarquía visual.
  - **Peligro (`.boton--peligro`)**: Acciones destructivas o irreversibles (fondo rojo).
- **Variantes de contenido**:
  - Solo texto: `<button class="boton boton--primario">Guardar</button>`
  - Con ícono a la izquierda: `<button class="boton boton--primario"><svg class="icono" aria-hidden="true"><use href="#icono-mas"></use></svg>Agregar</button>`
  - Con ícono a la derecha: `<button class="boton boton--secundario">Siguiente<svg class="icono" aria-hidden="true"><use href="#icono-flecha"></use></svg></button>`
  - Solo ícono (`.boton--icono`): Obligatorio incluir texto accesible mediante `aria-label` o `<span class="u-hideVisually">Descripción</span>`.
- **Tamaños**: Grande (`.boton--l`), Medio (defecto), Chico (`.boton--s`).
- **Buenas prácticas**:
  - Utilizar verbos en infinitivo o imperativo ("Guardar", "Confirmar", "Descargar").
  - Evitar textos genéricos como "clic aquí" o "ver más".
  - Nunca escribir textos de botones completamente en mayúsculas sostenidas.

#### B. Enlaces (`<a>` / `.Enlace`)
Para navegación o acciones de bajo peso visual:
- Formatos: Solo texto, Texto + ícono a la izquierda, Texto + ícono a la derecha, y **Enlace externo** (para comunicar explícitamente que se abandona el dominio del sistema).
- **Regla**: No utilizar enlaces para acciones críticas (guardar, enviar).

#### C. Grupo de Botones (`.Grupo-botones`)
Agrupa entre **2 y 5 botones de igual jerarquía**:
- Modos: Iconográfico (solo íconos con nombre accesible), Con texto, o Mixto.
- Uso típico: Barras de herramientas de tablas, controles de vista o acciones sobre un registro.

---

### 3.2 Mensajes y Diálogos

#### A. Alertas (`.alerta` / `.Alert`)
Comunican el estado de un proceso, resultado o advertencia importante.
- **Estados funcionales**:
  - `alerta--exito`: Confirmación de acción completada.
  - `alerta--advertencia`: Precaución o revisión antes de continuar.
  - `alerta--error`: Error crítico que impide continuar.
  - `alerta--informacion`: Contenido informativo de apoyo.
  - `alerta--notificacion`: Avisos del sistema.
- **Formatos**:
  - **Alerta completa**: Título, descripción detallada y botón de cierre opcional.
  - **Alerta simple**: Mensaje breve de una sola línea para espacios reducidos.
  - **Alerta emergente (Toast)**: Temporal en una esquina de la pantalla para aplicaciones web.
- **Accesibilidad**: `role="alert"` o `role="status"` + `aria-live="polite"`.

#### B. Tags / Etiquetas (`.tag` / `.Tag`)
Etiquetas breves para clasificar o comunicar estado.
- **Tipos**:
  - **Clasificación**: Categorización temática (`.tag--rojo`, `.tag--verde`, `.tag--celeste`, `.tag--violeta`, `.tag--naranja`, `.tag--fucsia`, `.tag--gris`).
  - **Estado**: `.tag--exito` (Activo/Completado), `.tag--error` (Cancelado/Error), `.tag--advertencia` (Pendiente/En espera), `.tag--informacion`.
  - **En vivo**: Tag especial con punto animado intermitente para emisiones en directo. De color y texto fijos, presencia temporal.
- **Tamaños**: Normal y Chico (`.tag--s`).
- **Regla**: Máximo 2 palabras por etiqueta. No mezclar tags de clasificación con tags de estado para el mismo concepto.

#### C. Modales (`.modal` / `.Modal`)
Ventanas superpuestas que bloquean la interacción hasta resolver una decisión o tarea puntual.
- **Tamaños fijos en escritorio**:
  - **Chico (480px)**: 1 sola decisión, sin ingreso de datos (confirmación destructiva, aviso simple). Botones con etiquetas breves.
  - **Mediano (690px - Por defecto)**: Formularios de 1 columna de hasta 6-8 campos, selección acotada o listas.
  - **Grande (900px)**: Contenido que requiere mayor espacio o agrupaciones de campos.
- **Comportamiento en móvil**: Ocupa el ancho completo de la pantalla con margen de 24px respecto a los bordes.
- **Reglas estrictas de accesibilidad (WCAG AAA)**:
  - `role="dialog"`, `aria-modal="true"`, `aria-labelledby` vinculado al título del modal.
  - Focus trap activo: la tecla `Tab` cicla únicamente dentro de los elementos del modal.
  - Cierre obligatorio mediante tecla `Escape`, botón de cerrar o clic en el overlay.
  - Retornar automáticamente el foco al elemento que abrió el modal tras cerrarse.
  - **Prohibido abrir un modal encima de otro modal**.

#### D. Indicadores de Estado
Componentes visuales para comunicar el estado de un proceso o sistema dentro de la interfaz.

---

### 3.3 Textos y Tipografía

- **Títulos (`.titulo`, `.titulo--xxl` a `.titulo--xs`)**:
  - Organizan y jerarquizan el contenido.
  - Utilizan la familia **Open Sans (`--tipo-familia-base`)** y los pesos Light, Regular, Semibold y Bold.
- **Párrafos (`.parrafo`, `.parrafo--xl`, `.parrafo--l`, `.parrafo--m`, `.parrafo--s`, `.parrafo--xs`, `.parrafo--xxs`)**:
  - Presentan el contenido principal y los textos de apoyo.
  - Utilizan la familia **Open Sans**. Tamaño base recomendado: **M (16px)**. Peso máximo recomendado: **Semibold**.
- **Listados (`.List-text`, `<ul/ol>`)**:
  - Organizan información en ítems para facilitar el escaneo visual y la lectura.

---

### 3.4 Íconos Funcionales (`.icono`)

#### A. Origen y Biblioteca Oficial
- Los íconos del sistema son funcionales y provienen **exclusivamente de la biblioteca oficial del repositorio (`biblioteca/recursos/iconos/`)**, basada en trazados normalizados de **Material Design** en una grilla de `24x24` (`viewBox="0 0 24 24"`).
- **Prohibición**: Está estrictamente prohibido dibujar trazados SVG genéricos ad-hoc, inventar íconos o importar librerías externas (FontAwesome, Bootstrap Icons, Feather, etc.) para componentes del sistema.

#### B. Convención de Nomenclatura Estricta
Cada ícono se define en el sprite mediante la convención:
- **`#icono-<nombre>--lineal`**: Formato de trazo simple. **Es el formato recomendado por defecto para la mayoría de los usos**.
- **`#icono-<nombre>--relleno`**: Formato de forma sólida. Se utiliza cuando se requiere mayor presencia visual o para comunicar un **estado activo / seleccionado**.

#### C. Catálogo de Íconos Oficiales Disponibles
- **Acciones e interacción**: `buscar`, `mas`, `editar`, `borrar`, `cerrar`, `check`, `descargar`, `filtrar`, `ordenar`, `duplicar`, `cambiar`, `mostrar`, `edicion-rapida`, `mas-opciones`, `enlace-externo`.
- **Navegación y dirección**: `home`, `flecha-larga-abajo`, `flecha-larga-arriba`, `flecha-larga-derecha`, `flecha-larga-izquierda`, `flecha-doble`, `chevron-derecha`, `chevron-izquierda`, `menu-hamburguesa`, `colapsable-abajo`, `colapsable-arriba`.
- **Estados y mensajes**: `exito`, `error`, `advertencia`, `informacion`, `notificacion`, `alerta-notificacion`, `ayuda`.
- **Estructura y datos**: `tareas`, `tabla`, `fecha`, `hora`, `historial`, `usuario`, `co-editor`, `chat`, `comentario`, `contrasena`, `configuracion`, `logout`.
- **Ícono especial**: `Avatar de usuario` (construido mediante CSS para identificar usuarios autenticados en cabezales o perfiles).

#### D. Sintaxis de Inserción y Renderizado
Se insertan mediante `<svg class="icono"><use href="#icono-..."></use></svg>`:
```html
<!-- Ícono por defecto (lineal, 24px) -->
<svg class="icono" aria-hidden="true">
  <use href="#icono-buscar--lineal"></use>
</svg>

<!-- Ícono con tamaño y color semántico -->
<svg class="icono icono--s icono--exito" aria-hidden="true">
  <use href="#icono-check--lineal"></use>
</svg>

<!-- Ícono en estado activo (relleno) -->
<svg class="icono icono--m icono--principal" aria-hidden="true">
  <use href="#icono-notificacion--relleno"></use>
</svg>
```

#### E. Modificadores de Tamaño
| Clase | Tamaño | Uso recomendado |
|---|---|---|
| `icono--xxs` | 12px | Metadatos muy compactos, tags pequeños |
| `icono--xs` | 16px | Botones chicos (`.boton--s`), inputs, badges |
| `icono--s` | 20px | Acciones secundarias, listas compactas |
| `icono--m` | 24px (por defecto) | Botones estándar (`.boton`), cabezal, alertas |
| `icono--l` | 32px | Encabezados de tarjetas destacadas |
| `icono--xl` | 40px | Bloques vacíos (*empty states*), modales |
| `icono--xxl` | 48px | Ilustraciones funcionales principales |
| `icono--xxxl` | 64px+ | Pantallas de confirmación o error de página |

#### F. Modificadores de Color
- `icono--principal`: Azul institucional (`var(--primario-principal)`)
- `icono--exito`: Verde éxito (`var(--funcional-exito-acento)`)
- `icono--error`: Rojo error (`var(--funcional-error-acento)`)
- `icono--advertencia`: Naranja advertencia (`var(--funcional-advertencia-acento)`)
- `icono--informacion`: Azul información (`var(--funcional-informacion-acento)`)
- `icono--notificacion`: Azul notificación (`var(--funcional-notificacion-acento)`)
- `icono--negativo`: Blanco (`var(--neutro-0)`) sobre fondos oscuros
- `icono--texto-principal`: Color de texto general (`var(--texto-principal)`)

#### G. Reglas de Accesibilidad para Íconos
- **Nunca utilizar un ícono como único medio para transmitir información** (siempre acompañar con texto explicativo o etiqueta).
- **Íconos decorativos**: Siempre incluir `aria-hidden="true"`.
- **Botones o enlaces de solo ícono**: Obligatorio proveer `aria-label="Descripción"` en el elemento interactivo o `<span class="u-hideVisually">Descripción</span>`.
- **Garantizar contraste**: Todos los íconos deben mantener un ratio de contraste mínimo de **4.5:1** respecto a su fondo.

---

### 3.5 Formularios (`.Formulario`, `.Campo`)

#### A. Regla Estricta de Disposición: Columna Única Centrada
- **Estructura por defecto (Mandatoria)**: Salvo que sea estrictamente necesario o de vital importancia por diseño justificado utilizar dos o más columnas, los formularios deben construirse y disponerse **siempre en una única columna centrada en la interfaz**.
- **Fundamento de UX y Accesibilidad**:
  - **Flujo visual unidireccional**: La lectura en una sola columna vertical permite que el usuario complete los campos de arriba hacia abajo sin desviaciones, evitando la dispersión del patrón en zigzag ("Z-pattern") y reduciendo la carga cognitiva.
  - **Secuencia de foco accesible y predecible**: Garantiza un orden de tabulación (`Tab`) consistente y libre de confusiones tanto para navegación por teclado como para tecnologías asistivas (lectores de pantalla).
  - **Eficiencia y prevención de errores**: Disminuye las omisiones involuntarias de campos y reduce la tasa de abandono del trámite o registro.
- **Ancho del contenedor**: Los campos no deben extenderse desmedidamente a lo ancho de pantallas de escritorio. El contenedor o tarjeta del formulario (`.Tarjeta-formulario`) debe estar horizontalmente centrado (`margin-left: auto; margin-right: auto;`) con un ancho máximo legible y controlado (óptimo entre `560px` y `690px`, acorde a la escala de modales y contenedores de lectura).
- **Criterio de excepción para dos o más columnas**: Solo se justifica el uso de dos o más columnas contiguas cuando los campos representan datos inseparables y fuertemente acoplados en una única unidad lógica (por ejemplo: fecha dividida en `Mes / Año`, código de área y teléfono, o número de puerta y apartamento). Campos independientes como *Primer Nombre* y *Segundo Nombre*, *Primer Apellido* y *Segundo Apellido*, o *Contraseña* y *Confirmar Contraseña* deben disponerse en filas sucesivas de **una sola columna**.

#### B. Componentes del Campo (`.Campo`)
- Estructura vertical con etiqueta superior visible:
  ```html
  <div class="Campo">
    <label for="campo-ejemplo" class="Campo-label">
      Nombre del campo:
      <span class="Campo-obligatorio" aria-hidden="true">*</span>
    </label>
    <input
      type="text"
      id="campo-ejemplo"
      name="ejemplo"
      class="Campo-control"
      required
      aria-required="true"
    >
  </div>
  ```
- **Etiquetas**: Obligatoriamente visibles encima del input. Prohibido usar placeholders en reemplazo de la etiqueta (`label`).
- **Campos obligatorios**: Marcar con asterisco visual `*` mediante `.Campo-obligatorio` y atributos `required` y `aria-required="true"`.

---

## 4. Grilla y Estructura Responsiva

```html
<div class="Container">
  <div class="Grid">
    <div class="Grid-item u-md-size1of2"><!-- Columna 1 --></div>
    <div class="Grid-item u-md-size1of2"><!-- Columna 2 --></div>
  </div>
</div>
```

- **Breakpoints**:
  - Móvil: < 768px (1 columna por defecto)
  - `sm`: >= 768px (`.u-sm-size*`)
  - `md`: >= 992px (`.u-md-size*`)
  - `lg`: >= 1200px (`.u-lg-size*`)
- **Clases de tamaño frecuentes**: `.u-md-size1of2` (50%), `.u-md-size1of3` (33.3%), `.u-md-size2of3` (66.6%), `.u-md-size1of4` (25%), `.u-md-size3of4` (75%), `.u-lg-size7of10` (70%).

#### Regla de Grilla para Formularios
- Salvo requerimiento expreso y justificado de diseño para pares de datos acoplados, los elementos de un formulario deben utilizar `.u-md-sizefull` (100% de ancho de columna) dentro de un contenedor o tarjeta centrada (`margin: 0 auto; max-width: 690px;`). No usar clases de media columna (`.u-md-size1of2`) por defecto en formularios.

---

## 5. Clases de Utilidad

```css
.u-hideVisually   /* Oculta visualmente pero accesible para lectores de pantalla */
.u-md-hide        /* Oculta en pantallas medianas y grandes */
.u-sm-hide        /* Oculta en pantallas móviles */
.u-mt0 al .u-mt5  /* Margen superior según escala de espaciado */
.u-mb0 al .u-mb5  /* Margen inferior según escala de espaciado */
.u-textCenter / .u-textRight / .u-textLeft
.u-flex / .u-flexBetween / .u-flexCenter / .u-flexWrap
```

---

## 6. Reglas Generales de Accesibilidad (WCAG 2.1 AA / AAA)

1. **Contraste mínimo**: Ratio mínimo de 4.5:1 para texto normal y 3:1 para texto grande.
2. **Foco visible**: Nunca aplicar `outline: none` sin proveer el anillo visible naranja con `--sombra-foco`.
3. **Jerarquía de títulos**: Estructura secuencial sin saltar niveles (`h1` → `h2` → `h3`).
4. **Imágenes e íconos**: Atributo `alt` descriptivo o `aria-hidden="true"` si es decorativo.
5. **Semántica HTML**: Usar elementos nativos (`<button>`, `<a>`, `<nav>`, `<dialog>`). No reemplazarlos por `<div>` o `<span>`.
6. **Idioma**: Atributo `lang="es"` en la etiqueta `<html>`.

---

## 7. Lo que NO se debe hacer (Prohibiciones Estrictas)

- ❌ **No usar Sora fuera de la marca del cabezal**: Sora es de uso exclusivo para la identificación del organismo en el cabezal (`.Logo-title`). Open Sans es la tipografía para todos los títulos, párrafos y elementos de UI.
- ❌ **No hardcodear colores o medidas**: Usar siempre variables `--primario-*`, `--funcional-*`, `--espaciado-*`.
- ❌ **No usar Bootstrap, Tailwind u otros frameworks** en paralelo con este sistema.
- ❌ **No omitir `aria-label` en botones o enlaces de solo ícono**.
- ❌ **No escribir textos completamente en mayúsculas sostenidas**.
- ❌ **No abrir un modal encima de otro modal**.
- ❌ **No inventar trazados SVG ni usar librerías externas de íconos** (FontAwesome, Bootstrap Icons, etc.): Los íconos funcionales deben tomarse exclusivamente de la biblioteca oficial de Material Design normalizada en el repositorio (`biblioteca/recursos/iconos/`).
- ❌ **No usar íconos como imágenes `<img>`, `background-image` CSS ni fuentes de íconos (icon fonts)**: Usar siempre SVG sprite con `<svg class="icono"><use href="#icono-<nombre>--<variante>"></use></svg>`.
- ❌ **No maquetar formularios en múltiples columnas por defecto**: Salvo que sea imprescindible por diseño estricto para campos fuertemente acoplados, los formularios **deben ser siempre de una única columna centrada en la interfaz**. Prohibido fragmentar campos consecutivos independientes en dos o más columnas (`.u-md-size1of2`), ya que rompe el flujo de lectura vertical y perjudica la navegación accesible por teclado.

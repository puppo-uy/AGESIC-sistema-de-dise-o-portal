# Sistema de Diseño del Estado Uruguayo (AGESIC / SDD) — Guía Oficial para Desarrollo Asistido por IA

> Este archivo es el recurso oficial de contexto y referencia para asistentes de IA y equipos de desarrollo que implementen el **Sistema de Diseño del Estado Uruguayo (AGESIC / SDD)**. Contiene exclusivamente las reglas, tokens CSS (`main.css`), componentes (`biblioteca/comp/`), comportamientos responsivos, lineamientos de accesibilidad WCAG 2.1 AA / AAA y convenciones obligatorias de código HTML/CSS/JS **establecidas en la fuente de verdad del sistema**.

---

## 1. Contexto General y Principios de Diseño

El sistema está construido bajo los siguientes principios rectores:
- **Diseño Responsivo y Escalable**: Uso combinado de grillas CSS Grid (`.row` / `.col-*`), contenedores flexibles (`.mod-flex`) y tokens tipográficos que se adaptan automáticamente en pantallas móviles (`<= 768px`).
- **Accesibilidad Universal**: Cumplimiento estricto del estándar **WCAG 2.1 nivel AA / AAA**, requerido legalmente por la Ley N° 19.924.
- **Diseño Atómico**: Tokens de diseño (`:root`) → Elementos base y Tipografía → Componentes (`.boton`, `.grupo-botones`, `.boton-desplegable`, `.enlace`, `.icono`, `.tag`, `.alerta`, `.modal`) → Layouts (`.app`, `.header--app`, `.barra-lateral`, `.container`, `.row`, `.mod-flex`) → Utilidades (`.u-*`, `.divider`).
- **Consistencia Absoluta**: Utilizar siempre las clases BEM en español y variables CSS (`var(--token)`) provistas en `main.css`. **Prohibido hardcodear valores de color, espaciado o tipografía**.
- **Sin dependencias externas**: El sistema se implementa en HTML semántico + CSS nativo compilado desde SCSS. No utiliza frameworks externos (no Bootstrap, no Tailwind).

### Guías Específicas por Componente Disponibles
Cuando se implemente o audite alguno de los siguientes componentes, consultar su archivo `.md` específico:
- **Acciones e Iconografía**:
  - **Botones (`.boton`)**: `botones.md`
  - **Grupo de botones (`.grupo-botones`)**: `grupo-botones.md`
  - **Botón con desplegable (`.boton-desplegable` / `.menubutton--split`)**: `boton-desplegable.md`
  - **Enlaces (`.enlace` / `.enlace--externo`)**: `enlaces.md`
  - **Íconos funcionales y Avatar (`.icono` / `.icono--iniciales`)**: `iconos.md`
  - **Indicadores de notificación/estado (`.tag.tag--indicador`)**: `indicadores.md`
- **Mensajes, Diálogos y Texto (`segunda tanda/`)**:
  - **Alertas (`.alerta`)**: `segunda tanda/alertas.md`
  - **Tags / Etiquetas (`.tag`)**: `segunda tanda/tags.md`
  - **Modales (`<dialog>` / `.modal`)**: `segunda tanda/modales.md`
  - **Títulos (`h1`–`h6` / `.titulo--*`)**: `segunda tanda/titulos.md`
  - **Párrafos (`<p>` / `.parrafo--*`)**: `segunda tanda/parrafos.md`
  - **Listados (`.lista`, `.lista--texto`, `.lista--numerada`)**: `segunda tanda/listados.md`

---

## 2. Tokens de Diseño (`:root` en `main.css`)

Todas las propiedades visuales deben referenciarse mediante `var(--token)`. Nunca deben utilizarse valores literales en los archivos de componentes o layout.

### 2.1 Paleta de Colores (`_colors.scss`)

#### Colores institucionales (Primarios y Secundarios)
```css
--primario-mas-claro: #f4f6fa;   /* Azul muy suave para fondos y hovers de menú */
--primario-claro: #e9ecf4;       /* Azul claro para hover de .boton--enlace y divisores */
--primario-principal: #25418e;   /* Azul institucional principal */
--primario-oscuro: #14244e;      /* Azul oscuro para hover/active de botones primarios y secundarios */

--secundario-claro: #fbf7e6;     /* Amarillo suave (ej. resaltado <mark>) */
--secundario-principal: #daaa00; /* Amarillo institucional */
--secundario-oscuro: #9b7900;    /* Amarillo oscuro */
```

#### Escala de Neutros
```css
--neutro-0: #ffffff;    /* Blanco puro (fondos de tarjetas, modales, inputs, encabezados) */
--neutro-25: #f9f9f9;   /* Fondo general de aplicación (body y .layout--app main) */
--neutro-50: #f2f2f2;   /* Fondos secundarios, tags base y bordes divisorios suaves */
--neutro-100: #d6d6d6;
--neutro-200: #c2c2c2;  /* Bordes de menús desplegables, <hr>, <blockquote> */
--neutro-300: #a6a6a6;
--neutro-400: #959595;
--neutro-500: #7a7a7a;
--neutro-600: #6f6f6f;
--neutro-700: #575757;  /* Bordes por defecto de campos de formulario y fieldsets */
--neutro-800: #434343;  /* Texto de información adicional y placeholders */
--neutro-900: #2a2a2a;  /* Texto auxiliar */
--neutro-950: #151515;
--neutro-1000: #000000; /* Negro puro (texto principal) */
```

#### Colores Funcionales (Estados del Sistema)
```css
/* Información */
--funcional-informacion-claro: #f2f2f2;
--funcional-informacion-medio: #c2c2c2;
--funcional-informacion-acento: #7a7a7a;
--funcional-informacion-medio_oscuro: #434343;
--funcional-informacion-oscuro: #151515;

/* Notificación */
--funcional-notificacion-claro: #ecf3fd;
--funcional-notificacion-medio: #8abbf1;
--funcional-notificacion-acento: #006ce0;
--funcional-notificacion-medio_oscuro: #003b7b;
--funcional-notificacion-oscuro: #00162f;

/* Éxito */
--funcional-exito-claro: #e9f5ec;
--funcional-exito-medio: #9cd2a7;
--funcional-exito-acento: #279e3f;
--funcional-exito-medio_oscuro: #155723;
--funcional-exito-oscuro: #08210d;

/* Error */
--funcional-error-claro: #faebeb;
--funcional-error-medio: #e8a1a1;
--funcional-error-acento: #cc3333;
--funcional-error-medio_oscuro: #701c1c;
--funcional-error-oscuro: #2b0a0a;

/* Advertencia */
--funcional-advertencia-claro: #fff4e9;
--funcional-advertencia-medio: #fdcc98;
--funcional-advertencia-acento: #fa911f;
--funcional-advertencia-medio_oscuro: #8a5011;
--funcional-advertencia-oscuro: #351e06;
```

#### Colores de Clasificación (Tags Categóricos)
> **Nota técnica (`colores-decorativos.php`)**: Las escalas cromáticas primitivas (`rojo--25` a `950`, `naranja--25` a `950`, etc.) están en `scss/tokens/_primitives.scss` y **no existen como custom properties en `:root`**. En tiempo de ejecución solo deben consumirse los tokens semánticos `--clasificacion-*` y `--decorativo-*` listados abajo:
```css
--clasificacion-rojo-claro: #ffe6e6;       --clasificacion-rojo-oscuro: #8c0000;
--clasificacion-naranja-claro: #fff0e6;    --clasificacion-naranja-oscuro: #8c3a00;
--clasificacion-amarillo-claro: #fbf7e6;
--clasificacion-verde-claro: #f1f3e8;      --clasificacion-verde-oscuro: #414c0c;
--clasificacion-verde-agua-claro: #e6f2f3; --clasificacion-verde-agua-oscuro: #00454c;
--clasificacion-celeste-claro: #e6f5ff;    --clasificacion-celeste-oscuro: #00548c;
--clasificacion-fucsia-claro: #f4e7f2;     --clasificacion-fucsia-oscuro: #510945;
--clasificacion-violeta-claro: #ede7f0;    --clasificacion-violeta-oscuro: #270639;
--decorativo-celeste-claro: #e6f5ff;
```

#### Colores de Texto Semánticos
```css
--texto-principal: var(--neutro-1000);          /* #000000 — Texto general */
--texto-auxiliar: var(--neutro-900);            /* #2a2a2a — Texto secundario de apoyo */
--texto-info_adicional: var(--neutro-800);      /* #434343 — Metadatos y notas (nota el guion bajo) */
--texto-placeholder: var(--neutro-800);         /* #434343 — Placeholder en inputs */
--texto-enlace-primario: var(--primario-principal); /* #25418e — Enlaces por defecto */
--texto-enlace-oscuro: var(--neutro-1000);      /* #000000 — Variante .enlace--oscuro */
--texto-enlace-claro: var(--neutro-0);          /* #ffffff — Variante .enlace--claro */
```

#### Foco Visible y Formularios
```css
--foco-acento: #ffa500;       /* Naranja para anillo de foco :focus-visible */
--foco-acento-claro: #fff6e6; /* Halo exterior para sombra de foco en inputs */
--sombra-foco: 0 0 0 4px var(--formulario-campo-sombra-foco);

/* Tokens semánticos de formulario */
--formulario-borde-fieldset: var(--neutro-700);
--fomulario-texto-label: var(--texto-principal);
--fomulario-texto-input: var(--texto-principal);
--formulario-texto-ayuda_info: var(--texto-auxiliar);
--formulario-texto-placeholder: var(--texto-placeholder);
--formulario-validacion-texto-error: var(--funcional-error-medio_oscuro);
--formulario-validacion-texto-advertencia: var(--funcional-advertencia-medio_oscuro);
--formulario-validacion-texto-exito: var(--funcional-exito-medio_oscuro);
--formulario-campo-borde-default: var(--neutro-700);
--formulario-campo-borde-foco: var(--foco-acento);
--formulario-campo-sombra-foco: var(--foco-acento-claro);
--formulario-campo-fondo-default: var(--neutro-0);
--formulario-campo-borde-error: var(--funcional-error-acento);
--formulario-campo-borde-advertencia: var(--funcional-advertencia-acento);
```

---

### 2.2 Tipografía (`_typography.scss`)

#### Regla de Oro de Familias Tipográficas (Estricta)
- **Open Sans (`--tipo-familia-base`)**: Es la **tipografía principal del sistema** (disponible en pesos Light `300`, Regular `400`, Semibold `600` y Bold `700`). Se utiliza para **títulos (`h1`–`h6`, `.titulo--*`), párrafos (`p`, `.parrafo--*`), botones, tablas, formularios y la totalidad de la interfaz**.
- **Sora (`--tipo-familia-marca`)**: Se utiliza **exclusivamente para el nombre identificatorio de la marca/organismo en el cabezal** (`header .Logo-nombre` / `.header--app .Logo-nombre`). Sora no posee archivo de fuente para el peso Light (`300`), solo Regular, Medium, Semibold, Bold y Extrabold. Está prohibido usar Sora fuera del logo del cabezal.

```css
--tipo-familia-base: Open Sans, sans-serif;
--tipo-familia-marca: Sora;

/* Pesos */
--tipo-peso-light: 300;
--tipo-peso-regular: 400;
--tipo-peso-medium: 500;
--tipo-peso-semibold: 600;
--tipo-peso-bold: 700;
--tipo-peso-extrabold: 700;

/* Tamaños de Título (Escritorio > 768px | Móvil <= 768px) */
--tipo-tamano-titulo-xxl: 2.5rem;  /* 40px en escritorio -> 2rem (32px) en <= 768px */
--tipo-tamano-titulo-xl: 2rem;     /* 32px en escritorio -> 1.75rem (28px) en <= 768px */
--tipo-tamano-titulo-l: 1.75rem;   /* 28px en escritorio -> 1.5rem (24px) en <= 768px */
--tipo-tamano-titulo-m: 1.5rem;    /* 24px en escritorio -> 1.25rem (20px) en <= 768px */
--tipo-tamano-titulo-s: 1.25rem;   /* 20px en escritorio -> 1.125rem (18px) en <= 768px */
--tipo-tamano-titulo-xs: 1rem;     /* 16px (fijo en móvil y escritorio) */

/* Tamaños de Párrafo (Fijos en móvil y escritorio) */
--tipo-tamano-parrafo-xl: 1.25rem;   /* 20px */
--tipo-tamano-parrafo-l: 1.125rem;   /* 18px */
--tipo-tamano-parrafo-m: 1rem;       /* 16px (Tamaño base por defecto) */
--tipo-tamano-parrafo-s: 0.875rem;   /* 14px */
--tipo-tamano-parrafo-xs: 0.75rem;   /* 12px */
--tipo-tamano-parrafo-xxs: 0.625rem; /* 10px */

/* Alturas de línea */
--tipo-altura-linea-xl: 1.6;
--tipo-altura-linea-l: 1.5;
--tipo-altura-linea-m: 1.4;
--tipo-altura-linea-s: 1.3;
--tipo-altura-linea-xs: 1.2;
--tipo-altura-linea-xxs: 1.1;
--tipo-altura-linea-1: 1;

/* Espaciado inferior de títulos y párrafos */
--heading-spacing-xl: var(--espaciado-36);
--heading-spacing-l: var(--espaciado-32);
--heading-spacing-m: var(--espaciado-24);
--heading-spacing-s: var(--espaciado-20);
--heading-spacing-xs: var(--espaciado-16);

--parrafo-spacing-xl: var(--espaciado-24);
--parrafo-spacing-l: var(--espaciado-20);
--parrafo-spacing-m: var(--espaciado-16);
--parrafo-spacing-s: var(--espaciado-12);
--parrafo-spacing-xs: var(--espaciado-8);
```

---

### 2.3 Espaciados (`_spacing.scss`)

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

### 2.4 Bordes (`_borders.scss`)

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
--borde-radio-s: 8px;
--borde-radio-m: 12px;
--borde-radio-l: 16px;
--borde-radio-xl: 20px;
--borde-radio-xxl: 24px;
--borde-radio-full: 9999px;
```

---

### 2.5 Sombras, Animaciones y Capas Z-Index (`_shadows.scss`, `_animations.scss`, `_tools.scss`)

```css
/* Sombras difuminadas */
--sombra-difuminada-xs: 0 1px 2px 0 rgba(0, 0, 0, 0.1);
--sombra-difuminada-s: 0 2px 4px 0 rgba(0, 0, 0, 0.1);
--sombra-difuminada-m: 0 4px 8px 0 rgba(0, 0, 0, 0.1);
--sombra-difuminada-l: 0 8px 16px 0 rgba(0, 0, 0, 0.1);
--sombra-difuminada-xl: 0 16px 24px 0 rgba(0, 0, 0, 0.1);

/* Sombras duras */
--sombra-dura-xs: 0 1px 1px 0 rgba(0, 0, 0, 0.2);
--sombra-dura-s: 0 2px 2px 0 rgba(0, 0, 0, 0.2);
--sombra-dura-m: 0 4px 4px 0 rgba(0, 0, 0, 0.2);
--sombra-dura-l: 0 8px 8px 0 rgba(0, 0, 0, 0.2);
--sombra-dura-xl: 0 16px 16px 0 rgba(0, 0, 0, 0.2);

/* Animaciones */
--animacion-base: all 450ms ease;
--animacion-rapida: all 300ms ease;
--animacion-fade: opacity 450ms ease-in-out;
--animacion-slide: transform 450ms ease;

/* Capas Z-Index */
--z-badge: 100;
--z-header: 101;
--z-dropdown: 102;
--z-overlay: 200;
--z-drawer: 201;
--z-skip: 300;
```

---

## 3. Catálogo y Reglas de Componentes Oficiales

### 3.1 Acciones

#### A. Botones (`.boton`) → *Ver detalle completo en `botones.md`*
Permiten al usuario ejecutar acciones o comandos.
- **Jerarquías válidas (únicamente 3)**:
  - **Primario (`.boton--primario`)**: Acción principal del contexto (fondo `--primario-principal`, texto blanco). **Máximo 1 por vista o bloque**.
  - **Secundario (`.boton--secundario`)**: Acciones alternativas o complementarias (fondo blanco, borde y texto `--primario-principal`).
  - **Terciario / Enlace (`.boton--enlace`)**: Acciones opcionales de bajo peso visual (fondo transparente, texto azul subrayado, sin sombra).
  - *(Nota: No existe `.boton--peligro` ni `.Button` en `main.css`).*
- **Estructura DOM obligatoria (`<span>`)**:
  - El texto del botón **siempre debe envolverse en `<span>Texto</span>`**, ya que `main.css` estiliza `.boton > span:not(.icono)`.
  - Solo texto: `<button type="button" class="boton boton--primario"><span>Guardar</span></button>`
  - Con ícono: `<button type="button" class="boton boton--primario"><svg class="icono" aria-hidden="true"><use href="#icono-co-editor--lineal"></use></svg><span>Editar</span></button>`
  - Solo ícono (`.boton--icono`): `<button type="button" class="boton boton--secundario boton--icono"><svg class="icono" aria-hidden="true"><use href="#icono-descargar--lineal"></use></svg><span>Descargar</span></button>`. El CSS de `.boton.boton--icono > span:not(.tag--indicador):not(.icono)` oculta visualmente el `<span>` de forma automática conservándolo accesible para lectores de pantalla.
- **Tamaños**: Chico (`.boton--s`, `min-height: 39px`), Medio (por defecto o `.boton--m`, `min-height: 42px`), Grande (`.boton--l`, `min-height: 43px`).

#### B. Grupo de Botones (`.grupo-botones`) → *Ver detalle completo en `grupo-botones.md`*
Agrupa entre **2 y 5 botones de igual jerarquía y tamaño** dentro de una lista `<ul class="grupo-botones"><li>...</li></ul>`:
- **Jerarquías del contenedor**: `.grupo-botones--secundaria`, `.grupo-botones--primaria`, `.grupo-botones--enlace`.
- **Tamaños del contenedor**: `.grupo-botones--s`, *(defecto)*, `.grupo-botones--l`.
- **Modos**: Iconográfico (botones `.boton--icono` con `<span>` accesible), Con texto, o Mixto.

#### C. Botón con Desplegable (`.boton-desplegable`) → *Ver detalle completo en `boton-desplegable.md`*
Botón dividido (*split button*) con una acción principal directa a la izquierda y un segundo botón `.boton--icono` disparador a la derecha (`data-menu-trigger` + `<svg class="icono down">`) que abre un menú `.menubutton.menubutton--split` (`role="menu"`).
- **Jerarquías**: Secundaria (`.boton-desplegable.desplegable-wrapper`) y Primaria (`.boton-desplegable.boton-desplegable--primario.desplegable-wrapper`).

#### D. Enlaces (`.enlace`) → *Ver detalle completo en `enlaces.md`*
Para navegación hacia otras páginas, anclas o sitios externos:
- **Tamaños**: `.enlace--s`, *(defecto)* o `.enlace--m`, `.enlace--l`.
- **Variantes de color**: Por defecto (`--texto-enlace-primario`), `.enlace--oscuro` (`#000000`), `.enlace--claro` (`#ffffff`, exclusivo sobre fondos oscuros).
- **Con ícono**: Al incluir `<svg class="icono" aria-hidden="true">` y `<span>Texto</span>`, el selector `.enlace:has(.icono)` activa automáticamente `display: inline-flex; gap: var(--espaciado-4);`.
- **Enlace externo (`.enlace--externo`)**: Inyecta automáticamente por CSS `::after` (`mask-image`) el ícono de enlace externo (`12px`). Es obligatorio incluir `<span class="u-hideVisually"> (enlace externo)</span>` dentro del `<a>` y **no agregar un `<svg>` manual duplicado**.

---

### 3.2 Mensajes, Etiquetas, Indicadores y Diálogos

#### A. Alertas (`.alerta`)
Comunican estados del sistema, resultados o advertencias.
- **Estructura DOM oficial (`main.css`)**:
  ```html
  <div class="alerta alerta--informacion" role="status" aria-live="polite">
    <svg class="icono" aria-hidden="true">
      <use href="#icono-informacion--relleno"></use>
    </svg>
    <div class="contenido">
      <p>Mensaje informativo del sistema.</p>
    </div>
  </div>
  ```
- **Modificadores de estado**: `.alerta--exito`, `.alerta--error`, `.alerta--advertencia`, `.alerta--informacion`, `.alerta--notificacion`.
- **Modificadores de formato**:
  - Simple (por defecto): ícono de `24px` (`--icono-tamano-m`).
  - Completa (`.alerta--completa`) y Emergente (`.alerta--emergente`, `max-width: 420px`): usan `<svg class="icono icono--alerta">` (`48px` en escritorio, `40px` en móvil), `<div class="contenido">` con título `.titulo--sm` y opcionalmente botón de cierre `<button type="button" class="boton boton--enlace boton--icono boton--cerrar">`.

#### B. Tags / Etiquetas (`.tag`)
Etiquetas breves tipo pastilla (`border-radius: var(--borde-radio-full)`).
- **Modificadores de tamaño**: `.tag--l` (`18px`), `.tag--m` (`16px`), `.tag--s` (`14px`).
- **Modificadores de clasificación**: `.tag--rojo`, `.tag--naranja`, `.tag--amarillo`, `.tag--verde`, `.tag--verde-agua`, `.tag--celeste`, `.tag--fucsia`, `.tag--violeta`.
- **Modificadores de estado (con `<span class="dot"></span>` interno)**:
  - `.tag--activo`: Fondo `--funcional-exito-claro`, texto `--funcional-exito-oscuro`, punto `.dot` en `--funcional-exito-acento`.
  - `.tag--inactivo`: Fondo `--funcional-informacion-claro`, texto `--funcional-informacion-oscuro`, punto `.dot` en `--funcional-informacion-acento`.
  - `.tag--error`: Fondo `--funcional-error-claro`, texto `--funcional-error-oscuro`, punto `.dot` en `--funcional-error-acento`.
  - `.tag--advertencia`: Fondo `--funcional-advertencia-claro`, texto `--funcional-advertencia-oscuro`, punto `.dot` en `--funcional-advertencia-acento`.
  ```html
  <span class="tag tag--s tag--activo">
    <span class="dot"></span>
    <span>Activo</span>
  </span>
  ```
- **Modificadores en vivo**: `.tag--en-vivo` (con `.dot` rojo parpadeante animado) y `.tag--en-vivo-inactivo`.

#### C. Indicadores (`.tag.tag--indicador`) → *Ver detalle completo en `indicadores.md`*
Badges superpuestos (`position: absolute; top: 0; right: 0; z-index: var(--z-badge)`) acoplados dentro de `.boton` o `.icono--iniciales`:
- **Indicador de punto**:
  ```html
  <span class="tag tag--advertencia tag--indicador">
    <span class="dot"></span>
  </span>
  ```
- **Indicador numérico**:
  ```html
  <span class="tag tag--advertencia tag--indicador tag--indicador--numerico">
    <span>99+</span>
  </span>
  ```

#### D. Modales (`dialog`, `.modal`)
Ventanas de diálogo nativas `<dialog class="modal">` (`max-width: 690px`, `padding: var(--espaciado-48) var(--espaciado-56)` en escritorio y `var(--espaciado-32) var(--espaciado-24)` en móvil).
- **Estructura DOM oficial (`main.css`)**:
  ```html
  <dialog class="modal" id="modal-ejemplo" aria-labelledby="modal-ejemplo-titulo">
    <button type="button" class="boton boton--enlace boton--icono modal-cerrar" data-modal-close>
      <svg class="icono" aria-hidden="true">
        <use href="#icono-cerrar--lineal"></use>
      </svg>
      <span>Cerrar ventana</span>
    </button>
    <h2 id="modal-ejemplo-titulo" class="titulo--md modal-titulo">Título del modal</h2>
    <p class="parrafo--md">Contenido descriptivo del modal.</p>
    <div class="mod-flex flex-justify-end flex-items-center flex-gap-12 u-mt4">
      <button type="button" class="boton boton--secundario" data-modal-close>
        <span>Cancelar</span>
      </button>
      <button type="button" class="boton boton--primario">
        <span>Confirmar</span>
      </button>
    </div>
  </dialog>
  ```
- Cuando un modal está abierto, se agrega `.modal-open` a `<html>` y `<body>` (`overflow: hidden`).

---

### 3.3 Textos y Tipografía (`_titles.scss`, `_paragraphs.scss`, `_list.scss`)

> **Atención a la nomenclatura de clases**: Mientras los tokens CSS usan `-l`, `-m`, `-s`, **las clases CSS de títulos y párrafos en `main.css` usan `--lg`, `--md`, `--sm`**.

- **Títulos**:
  - `.titulo--xxl` (`--tipo-tamano-titulo-xxl`)
  - `.titulo--xl` (`--tipo-tamano-titulo-xl`)
  - `.titulo--lg` (`--tipo-tamano-titulo-l`)
  - `.titulo--md` (`--tipo-tamano-titulo-m`)
  - `.titulo--sm` (`--tipo-tamano-titulo-s`)
  - `.titulo--xs` (`--tipo-tamano-titulo-xs`)
- **Párrafos**:
  - `.parrafo--xl` (`--tipo-tamano-parrafo-xl`)
  - `.parrafo--lg` (`--tipo-tamano-parrafo-l`)
  - `.parrafo--md` (`--tipo-tamano-parrafo-m`)
  - `.parrafo--sm` (`--tipo-tamano-parrafo-s`)
  - `.parrafo--xs` (`--tipo-tamano-parrafo-xs`)
- **Listas (`.lista`, `.lista--texto`, `.lista--numerada`)** → *Ver detalle completo en `segunda tanda/listados.md`*:
  - Aplicar `<ul class="lista lista--texto">` para listas con viñetas u `<ol class="lista lista--numerada">` para listas ordenadas (`margin-top: var(--espaciado-8)` entre ítems de nivel 1 y `var(--espaciado-4)` en sublistas anidadas dentro de `<li>`).

---

### 3.4 Íconos Funcionales (`.icono`) → *Ver detalle completo en `iconos.md`*

- **Origen exclusivo**: Los 48 íconos oficiales del sprite (`biblioteca/recursos/dist/sprites.svg`) con sufijo obligatorio `--lineal` o `--relleno` (`#icono-<nombre>--lineal` / `#icono-<nombre>--relleno`).
- **Catálogo completo (48 íconos)**:
  - **Acciones e interacción (18)**: `abrir-detalle`, `cerrar-detalle`, `borrar`, `buscar`, `cambiar`, `cerrar`, `check`, `descargar`, `duplicar`, `edicion-rapida`, `editar`, `co-editor`, `enlace-externo`, `filtrar`, `mas`, `mas-opciones`, `mostrar`, `ordenar`.
  - **Navegación y dirección (11)**: `home`, `chevron-derecha`, `chevron-izquierda`, `colapsable-abajo`, `colapsable-arriba`, `flecha-doble`, `flecha-larga-abajo`, `flecha-larga-arriba`, `flecha-larga-derecha`, `flecha-larga-izquierda`, `menu-hamburguesa`.
  - **Estados, alertas y ayuda (7)**: `advertencia`, `alerta-notificacion`, `ayuda`, `error`, `exito`, `informacion`, `notificacion`.
  - **Estructura, datos y usuario (12)**: `chat`, `comentario`, `configuracion`, `contrasena`, `doc-validado`, `fecha`, `historial`, `hora`, `logout`, `tabla`, `tareas`, `usuario`.
- **Escala de tamaños (`.icono--*`)**:
  - `.icono--xxs` (`12px`), `.icono--xs` (`16px`), `.icono--s` (`20px`), `.icono--m` (`24px`, por defecto), `.icono--l` (`32px`), `.icono--xl` (`40px`), `.icono--xxl` (`48px`), `.icono--xxxl` (`56px`).
  - Dentro de `.boton`, `.enlace` y `.tag`, el componente padre dimensiona automáticamente al `.icono` hijo (ej. `.boton` M asigna `20px`, `.boton--s` asigna `16px`, `.boton--l` asigna `24px`).
- **Modificadores de color**: `.icono--principal`, `.icono--texto-principal`, `.icono--negativo`, `.icono--exito`, `.icono--error`, `.icono--advertencia`, `.icono--informacion`, `.icono--notificacion`.
- **Avatar de usuario (`.icono--iniciales`)**: `<span class="icono icono--iniciales icono--principal"><span>AB</span></span>`.

---

### 3.5 Formularios

#### A. Regla de Disposición: Columna Única Centrada
- Salvo para pares de datos fuertemente acoplados (ej. `Mes / Año`, código de área y teléfono) o barras de filtrado horizontal sobre tablas, los formularios de carga deben disponerse en **una única columna vertical** dentro de un contenedor de ancho controlado (`max-width: 690px`) para preservar el flujo de lectura y el orden de tabulación accesible.

#### B. Accesibilidad y Tokens de Campos
- Todo `<input>`, `<select>` o `<textarea>` debe tener su `<label for="...">` visible asociado. Prohibido reemplazar `<label>` por `placeholder`.
- Utilizar los tokens `--formulario-campo-*` para bordes (`var(--formulario-campo-borde-default)`), foco (`border-color: var(--formulario-campo-borde-foco); box-shadow: var(--sombra-foco)`) y estados de validación (`--formulario-campo-borde-error`, `--formulario-validacion-texto-error`).

---

## 4. Layout, Grilla (`.row` / `.col-*`) y Flexbox (`.mod-flex`)

### 4.1 Estructura de Aplicación y Cabezal (`_app.scss`, `_header-app.scss`)
```html
<div class="app">
  <a class="SkipLink" href="#contenido-principal">Saltar al contenido principal</a>
  <header class="header--app">
    <a class="Header-logo" href="/">
      <span class="Logo-nombre">Nombre del Organismo o Sistema</span>
    </a>
    <div class="Header-acciones">
      <!-- Acciones de usuario / menú -->
    </div>
  </header>
  <div class="layout--app">
    <!-- Barra lateral opcional (.navegacion-lateral > .barra-lateral) -->
    <main id="contenido-principal">
      <div class="container">
        <!-- Contenido de la vista -->
      </div>
    </main>
  </div>
</div>
```

### 4.2 Sistema de Grilla de 12 Columnas (`_grids.scss`)
El contenedor `.row` define un CSS Grid de 1 columna en móvil (`< 768px`) y **12 columnas** a partir de `768px` (`gap: 16px; margin-bottom: var(--espaciado-32)`).

```html
<div class="container">
  <div class="row">
    <div class="col-12 col-md-6"><!-- 100% en móvil/tablet, 50% en >= 992px --></div>
    <div class="col-12 col-md-6"><!-- 100% en móvil/tablet, 50% en >= 992px --></div>
  </div>
</div>
```

- **Breakpoints y clases de columna**:
  - Móvil (`< 768px`): 1 columna por defecto (o usar `.row--no-stack` + `.col-m-1` a `.col-m-12` para mantener columnas en móvil).
  - `>= 768px` (`sm` / base desktop): `.col-1` a `.col-12` y `.col-sm-1` a `.col-sm-12`.
  - `>= 992px` (`md`): `.col-md-1` a `.col-md-12`.
  - `>= 1367px` (`lg`): `.col-lg-1` a `.col-lg-12`.
- **Filas de columnas automáticas (`row-cols-*`)**:
  - `.row.row-cols-1` a `.row.row-cols-12` (y variantes `.row-cols-sm-*`, `.row-cols-md-*`, `.row-cols-lg-*`).
  - `.row-cols-auto`: `grid-template-columns: repeat(auto-fit, minmax(220px, 1fr))`.

### 4.3 Módulo Flexbox (`.mod-flex` en `_flex.scss`)
Por defecto `.mod-flex` es `flex-direction: column` en móvil (`< 768px`) y pasa a `flex-direction: row; justify-content: space-between; align-items: flex-start;` en `>= 768px`, con `gap: 16px`.

- **Dirección**: `.flex-dir-row`, `.flex-dir-column`, `.sm-flex-dir-row`, `.sm-flex-dir-column`, `.sm-stack`.
- **Justificación horizontal**: `.flex-justify-start`, `.flex-justify-center`, `.flex-justify-end`, `.flex-justify-between`, `.flex-justify-around`, `.flex-justify-evenly` (y variantes `.sm-flex-justify-*`).
- **Alineación transversal**: `.flex-items-start`, `.flex-items-center`, `.flex-items-end`, `.flex-items-stretch` (y variantes `.sm-flex-items-*`).
- **Espaciado (`gap`)**: `.flex-gap-0` (`4px`), `.flex-gap-4` (`4px`), `.flex-gap-8` (`8px`), `.flex-gap-12` (`12px`), `.flex-gap-16` (`16px`), `.flex-gap-20` (`20px`), `.flex-gap-24` (`24px`).

---

## 5. Clases de Utilidad y Divisores (`_margin.scss`, `_accessibility.scss`, `_text.scss`, `_dividers.scss`)

```css
/* Accesibilidad (oculto visualmente, legible por lector de pantalla) */
.u-hideVisually

/* Márgenes verticales (escala: 0=0px, 1=8px, 2=16px, 3=24px, 4=32px, 5=40px, 6=48px) */
.u-mt0, .u-mt1, .u-mt2, .u-mt3, .u-mt4, .u-mt5, .u-mt6
.u-mb0, .u-mb1, .u-mb2, .u-mb3, .u-mb4, .u-mb5, .u-mb6

/* Pesos y estilos de texto */
.u-text-regular    /* font-weight: 400 */
.u-text-semibold   /* font-weight: 600 */
.u-text-bold       /* font-weight: 700 */
.u-text-italic     /* font-style: italic */

/* Alineación de texto */
.u-text-left
.u-text-center
.u-text-right

/* Colores de texto */
.u-color-principal       /* var(--texto-principal) */
.u-color-auxiliar        /* var(--texto-auxiliar) */
.u-color-info-adicional  /* var(--texto-info_adicional) */
.u-color-primario        /* var(--primario-principal) */
.u-color-inverso         /* var(--neutro-0) */

/* Divisores (<hr class="divider ...">) */
.divider
.divider--space-0 / -8 / -16 / -24 / -32 / -40 / -48 / -64
.divider--neutro-25 / -50 / -100 / -200 / -300 / -400 / -500 / -600 / -700
```

---

## 6. Reglas Generales de Accesibilidad (WCAG 2.1 AA / AAA)

1. **Contraste mínimo**: Ratio mínimo de 4.5:1 para texto normal y 3:1 para texto grande e íconos funcionales.
2. **Foco visible global (`:focus-visible`)**: Definido en `main.css` como:
   ```css
   :focus-visible {
     outline: 3px solid var(--foco-acento);
     outline-offset: 2px;
     border-radius: inherit;
   }
   ```
   Prohibido anular `:focus-visible` con `outline: none`.
3. **Jerarquía de títulos**: Estructura secuencial sin saltar niveles (`h1` → `h2` → `h3`).
4. **Íconos y elementos de solo ícono**: Todo `<svg class="icono">` lleva `aria-hidden="true"`. En `.boton--icono` incluir siempre su `<span>Descripción accesible</span>` hijo directo; en enlaces externos incluir `<span class="u-hideVisually"> (enlace externo)</span>`.
5. **Semántica HTML**: Usar elementos nativos (`<button>`, `<a>`, `<nav>`, `<dialog>`, `<table>` con `<caption>` y `<th scope="col|row">`).
6. **Idioma**: Atributo `lang="es"` en la etiqueta `<html>`.

---

## 7. Lo que NO se debe hacer (Prohibiciones Estrictas)

- ❌ **No usar Sora fuera de `.Logo-nombre`**: Sora (`--tipo-familia-marca`) es de uso exclusivo para el nombre del organismo en el cabezal. `Open Sans` (`--tipo-familia-base`) es la fuente para todos los títulos, párrafos y componentes.
- ❌ **No alucinar clases inexistentes**:
  - No existen `.boton--peligro`, `.Button`, `.Enlace`, `.Grupo-botones`, `.Alert`, `.Tag`, `.Modal`.
  - No existen `.Container`, `.Grid`, `.Grid-item`, `.u-md-size*`, `.u-flex`, `.u-flexBetween`, `.u-textRight`, `.u-sr-only`. Usar `.container`, `.row`/`.col-*`, `.mod-flex`, `.u-text-right` y `.u-hideVisually`.
  - No existen `.titulo--l/m/s` ni `.parrafo--l/m/s`: usar `.titulo--lg/md/sm` y `.parrafo--lg/md/sm`.
- ❌ **No omitir `<span>Texto</span>` dentro de `.boton`**: Tanto en botones con texto visible como en `.boton--icono`, el texto va dentro de un `<span>` hijo directo.
- ❌ **No hardcodear colores o medidas**: Usar siempre variables `--primario-*`, `--funcional-*`, `--neutro-*`, `--espaciado-*`.
- ❌ **No usar Bootstrap, Tailwind ni librerías externas de íconos**: Los íconos provienen únicamente del sprite oficial `#icono-<nombre>--<lineal|relleno>`.
- ❌ **No escribir textos de botones, enlaces o etiquetas en MAYÚSCULAS SOSTENIDAS**.
- ❌ **No abrir un modal encima de otro modal**.

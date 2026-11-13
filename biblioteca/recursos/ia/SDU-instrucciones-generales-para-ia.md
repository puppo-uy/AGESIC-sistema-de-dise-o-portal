# Sistema de Diseño del Estado Uruguayo (AGESIC / SDD) — Guía Oficial para Desarrollo Asistido por IA

> Este archivo es la referencia oficial para asistentes de IA y equipos de desarrollo que implementen interfaces con el **Sistema de Diseño del Estado Uruguayo (AGESIC / SDD)**. Describe exclusivamente el marcado HTML semántico, las clases BEM, los tokens CSS disponibles en `main.css`, el comportamiento responsivo y los lineamientos de accesibilidad **WCAG 2.2 nivel AA**. Es agnóstico a lenguajes y frameworks.

---

## 0. Requisitos de Integración y Regla de Bloqueo (Leer primero)

Las guías describen marcado HTML, clases y reglas de uso; **no reemplazan los archivos compilados del sistema**.

### Archivos que deben estar cargados en el proyecto
Antes de generar o modificar interfaz, verifica que el proyecto cuente con:
- **`main.css`** y la carpeta hermana **`../fonts/`** (`opensans-web/` y `sora-web/`), conservando esa relación relativa para que carguen las tipografías.
- **`sprites.svg`** (sprite oficial de íconos), servido desde el **mismo origen** del proyecto o inyectado inline en el HTML.
- **`scripts/main.js`** *(opcional)*: necesario solo en proyectos HTML/JS vanilla que usen modales (`<dialog data-modal>`) o desplegables (`[data-menu]`). Si la interactividad se resuelve por otra vía, debe respetarse exactamente el mismo marcado, clases y atributos ARIA.

### Regla obligatoria si faltan archivos
- **Si `main.css` no está cargado en el proyecto**: **detente, avisa al usuario qué archivo falta y NO escribas CSS propio para reimplementar estilos, variables o utilidades de los componentes del sistema.**
- **Si `sprites.svg` no está disponible**: avisa al usuario antes de asumir rutas de íconos.

### Cómo referenciar íconos (`sprites.svg`)
- **Por defecto (archivo estático en el mismo origen)**: usa la ruta donde el proyecto sirva `sprites.svg` (adaptando `<ruta>`):
  ```html
  <svg class="icono" aria-hidden="true">
    <use href="<ruta>/sprites.svg#icono-descargar--lineal"></use>
  </svg>
  ```
- **Excepción (sprite inline)**: usa `href="#icono-descargar--lineal"` **únicamente** si verificaste que el contenido completo de `sprites.svg` ya está inyectado dentro del `<body>`.

---

## 1. Contexto General y Principios de Diseño

- **Diseño Responsivo y Escalable**: Grillas CSS Grid (`.row` / `.col-*`), contenedores flexibles (`.mod-flex`) y tokens tipográficos adaptables entre móvil (`< 768px`) y escritorio (`>= 768px`).
- **Accesibilidad Universal**: Cumplimiento estricto del estándar **WCAG 2.2 nivel AA**, requerido por la Ley N° 19.924.
- **Diseño Atómico**: Tokens (`:root` en `main.css`) → Base y Tipografía → Componentes → Layouts → Utilidades (`.u-*`, `.divider`).
- **Consistencia Absoluta**: Usar siempre las clases BEM en español y variables CSS (`var(--token)`) provistas en `main.css`. **Prohibido hardcodear valores de color, espaciado o tipografía para componentes del sistema**.
- **Sin dependencias externas**: HTML semántico + CSS nativo. No utilizar Bootstrap, Tailwind ni librerías externas de íconos.
- **Registro lingüístico consistente**: Mantener un único trato en toda la vista o producto. En los textos orientados a la persona usuaria (mensajes, confirmaciones, ayudas) usar **voseo** de forma consistente en estos ejemplos (ej. *"¿Querés continuar?"*, *"Confirmá los cambios"*), y en botones usar acciones directas que comiencen con verbo.

### Guías Específicas por Componente Disponibles
- **Botones (`.boton`)**: `botones.md`

*(El resto de los componentes se documentan en forma compacta en la Sección 3 hasta que se publiquen sus guías específicas).*

---

## 2. Tokens de Diseño disponibles en `main.css`

> **Advertencia**: Todos estos tokens **ya vienen definidos en `:root` dentro de `main.css`**. **No copies ni redeclares este bloque `:root` en tu proyecto.** Consúmelos únicamente mediante `var(--token)` si necesitás estilar contenedores o ajustes propios de una vista.

### 2.1 Paleta de Colores

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
> **Nota**: Solo deben consumirse los tokens semánticos `--clasificacion-*` y `--decorativo-*` listados abajo. **`--clasificacion-amarillo-oscuro` no existe** (`.tag--amarillo` utiliza el color de texto por defecto).
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

#### Foco Visible y Tokens de Formularios
```css
--foco-acento: #b57500;       /* Naranja accesible para anillo de foco :focus-visible */
--foco-acento-claro: #fff6e6; /* Halo exterior para sombra de foco en inputs */
--sombra-foco: 0 0 0 4px var(--formulario-campo-sombra-foco);

/* Tokens semánticos de formulario disponibles en main.css */
--formulario-borde-fieldset: var(--neutro-700);
--formulario-texto-label: var(--texto-principal);
--formulario-texto-input: var(--texto-principal);
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

### 2.2 Tipografía

#### Regla de Familias Tipográficas (Estricta)
- **Open Sans (`--tipo-familia-base`)**: Es la **tipografía principal del sistema** (pesos Light `300`, Regular `400`, Semibold `600` y Bold `700`). Se utiliza para **títulos (`h1`–`h6`, `.titulo--*`), párrafos (`p`, `.parrafo--*`), botones, tablas y la totalidad de la interfaz**.
- **Sora (`--tipo-familia-marca`)**: Se utiliza **exclusivamente para el nombre identificatorio de la marca/organismo en el cabezal** (`header .Logo-nombre` / `.header--app .Logo-nombre`). Está prohibido usar Sora fuera del logo del cabezal.

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

/* Tamaños de Título (Escritorio >= 768px | Móvil < 768px) */
--tipo-tamano-titulo-xxl: 2.5rem;  /* 40px en escritorio -> 2rem (32px) en < 768px */
--tipo-tamano-titulo-xl: 2rem;     /* 32px en escritorio -> 1.75rem (28px) en < 768px */
--tipo-tamano-titulo-l: 1.75rem;   /* 28px en escritorio -> 1.5rem (24px) en < 768px */
--tipo-tamano-titulo-m: 1.5rem;    /* 24px en escritorio -> 1.25rem (20px) en < 768px */
--tipo-tamano-titulo-s: 1.25rem;   /* 20px en escritorio -> 1.125rem (18px) en < 768px */
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

### 2.3 Espaciados

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
--borde-radio-s: 8px;
--borde-radio-m: 12px;
--borde-radio-l: 16px;
--borde-radio-xl: 20px;
--borde-radio-xxl: 24px;
--borde-radio-full: 9999px;
```

---

### 2.5 Sombras, Animaciones, Íconos y Capas Z-Index

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

/* Tamaños de ícono */
--icono-tamano-xxs: 12px;
--icono-tamano-xs: 16px;
--icono-tamano-s: 20px;
--icono-tamano-m: 24px;
--icono-tamano-l: 32px;
--icono-tamano-xl: 40px;
--icono-tamano-xxl: 48px;
--icono-tamano-xxxl: 56px;

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

#### A. Botones (`.boton`) → *Ver guía completa de variantes, reglas UX y checklist en `botones.md`*
- **Jerarquías válidas (únicamente 3)**: `.boton--primario` (máximo 1 por contexto: página, modal o *card* independiente), `.boton--secundario` (acciones alternativas o complementarias), `.boton--enlace` (acciones opcionales de bajo peso visual, incluido *"Cancelar"*). *(No existe `.boton--peligro` ni `.Button`).*
- **Reglas mínimas de marcado**: usar `<button>` nativo con `type` explícito (`button`, `submit` o `reset`), y envolver siempre el texto en `<span>Texto</span>` hijo directo.
- **Tamaños**: `.boton--s` (Chico), *(por defecto)* o `.boton--m` (Medio), `.boton--l` (Grande). Variante solo ícono: `.boton--icono` (mantiene su `<span>` accesible oculto automáticamente).
```html
<button type="button" class="boton boton--primario">
  <span>Guardar cambios</span>
</button>
<button type="button" class="boton boton--secundario">
  <svg class="icono" aria-hidden="true">
    <use href="<ruta>/sprites.svg#icono-descargar--lineal"></use>
  </svg>
  <span>Descargar comprobante</span>
</button>
<button type="button" class="boton boton--enlace">
  <span>Cancelar</span>
</button>
```

#### B. Grupo de Botones (`.grupo-botones`)
Agrupa entre **2 y 5 botones de igual jerarquía y tamaño** dentro de una lista `<ul class="grupo-botones"><li>...</li></ul>`:
- **Jerarquías del contenedor**: `.grupo-botones--secundaria`, `.grupo-botones--primaria`, `.grupo-botones--enlace`.
- **Tamaños del contenedor**: `.grupo-botones--s`, *(defecto)*, `.grupo-botones--l`.
- **Modos**: Iconográfico (botones `.boton--icono` con `<span>` accesible), Con texto, o Mixto.

#### C. Botón con Desplegable (`.boton-desplegable`)
Botón dividido (*split button*) con una acción principal directa a la izquierda y un segundo botón `.boton--icono` disparador a la derecha (`data-menu-trigger` + `<svg class="icono down">`) que abre un menú `.menubutton.menubutton--split` (`role="menu"`).
- **Jerarquías**: Secundaria (`.boton-desplegable.desplegable-wrapper`) y Primaria (`.boton-desplegable.boton-desplegable--primario.desplegable-wrapper`).

#### D. Enlaces (`.enlace`)
Para navegación hacia otras páginas, anclas o sitios externos:
- **Tamaños**: `.enlace--s`, *(defecto)* o `.enlace--m`, `.enlace--l`.
- **Variantes de color**: Por defecto (`--texto-enlace-primario`), `.enlace--oscuro` (`#000000`), `.enlace--claro` (`#ffffff`, exclusivo sobre fondos oscuros).
- **Con ícono**: Al incluir `<svg class="icono" aria-hidden="true">` y `<span>Texto</span>`, el enlace activa automáticamente `display: inline-flex; gap: var(--espaciado-4);`.
- **Enlace externo (`.enlace--externo`)**: Inyecta automáticamente por CSS `::after` el ícono de enlace externo (`12px`). Es obligatorio incluir `<span class="u-hideVisually"> (enlace externo)</span>` dentro del `<a>` y **no agregar un `<svg>` manual duplicado**.

---

### 3.2 Mensajes, Etiquetas, Indicadores y Diálogos

#### A. Alertas (`.alerta`)
Comunican estados del sistema, resultados o advertencias:
```html
<div class="alerta alerta--informacion" role="status" aria-live="polite">
  <svg class="icono" aria-hidden="true">
    <use href="<ruta>/sprites.svg#icono-informacion--relleno"></use>
  </svg>
  <div class="contenido">
    <p>Revisá los datos antes de confirmar el envío.</p>
  </div>
</div>
```
- **Modificadores de estado**: `.alerta--exito`, `.alerta--error`, `.alerta--advertencia`, `.alerta--informacion`, `.alerta--notificacion`.
- **Modificadores de formato**: Simple (por defecto: ícono `24px`), Completa (`.alerta--completa`) y Emergente (`.alerta--emergente`, `max-width: 420px`), que usan `<svg class="icono icono--alerta" aria-hidden="true">`, `<div class="contenido">` con título `.titulo--sm` y opcionalmente botón de cierre `<button type="button" class="boton boton--enlace boton--icono boton--cerrar">`.

#### B. Tags / Etiquetas (`.tag`)
Etiquetas breves tipo pastilla (`border-radius: var(--borde-radio-full)`).
- **Modificadores de tamaño**: `.tag--l`, `.tag--m`, `.tag--s`.
- **Modificadores de clasificación**: `.tag--rojo`, `.tag--naranja`, `.tag--amarillo`, `.tag--verde`, `.tag--verde-agua`, `.tag--celeste`, `.tag--fucsia`, `.tag--violeta`.
- **Modificadores de estado (con `<span class="dot" aria-hidden="true"></span>` interno)**:
  - `.tag--activo`, `.tag--inactivo`, `.tag--error`, `.tag--advertencia`.
  ```html
  <span class="tag tag--s tag--activo">
    <span class="dot" aria-hidden="true"></span>
    <span>Activo</span>
  </span>
  ```
- **Modificadores en vivo**: `.tag--en-vivo` (con `.dot` rojo parpadeante animado) y `.tag--en-vivo-inactivo`.

#### C. Indicadores (`.tag.tag--indicador`)
Badges superpuestos acoplados dentro de `.boton` o `.icono--iniciales`. Para que lectores de pantalla anuncien el estado sin pegarlo al nombre del botón, marcar el badge visual con `aria-hidden="true"` y describirlo dentro del `<span>` de texto del botón usando `.u-hideVisually`:
```html
<!-- Indicador de punto -->
<button type="button" class="boton boton--primario">
  <span>Notificaciones<span class="u-hideVisually"> (con novedad)</span></span>
  <span class="tag tag--advertencia tag--indicador" aria-hidden="true">
    <span class="dot"></span>
  </span>
</button>

<!-- Indicador numérico -->
<button type="button" class="boton boton--primario">
  <span>Notificaciones<span class="u-hideVisually"> (99+ pendientes)</span></span>
  <span class="tag tag--advertencia tag--indicador tag--indicador--numerico" aria-hidden="true">
    <span>99+</span>
  </span>
</button>
```

#### D. Modales (`<dialog>`, `.modal`)
Ventanas de diálogo nativas `<dialog>` (`max-width: 690px`):
```html
<button type="button" class="boton boton--primario" data-modal-open data-modal-target="modal-ejemplo">
  <span>Abrir modal</span>
</button>

<dialog data-modal="modal-ejemplo" aria-labelledby="modal-ejemplo-titulo">
  <div class="modal-contenido">
    <h2 id="modal-ejemplo-titulo" class="modal-titulo">Confirmar eliminación</h2>
    <p class="parrafo--md">¿Querés eliminar este elemento de forma permanente? Esta acción no se puede deshacer.</p>
    <div class="mod-flex u-mt6">
      <div>
        <button type="button" class="boton boton--enlace" data-modal-close>
          <span>Cancelar</span>
        </button>
      </div>
      <div class="mod-flex flex-items-end">
        <button type="button" class="boton boton--secundario">
          <span>Revisar detalle</span>
        </button>
        <button type="button" class="boton boton--primario">
          <span>Confirmar</span>
        </button>
      </div>
    </div>
  </div>
  <button type="button" class="modal-cerrar boton boton--enlace boton--icono" data-modal-close>
    <svg class="icono" aria-hidden="true">
      <use href="<ruta>/sprites.svg#icono-cerrar--lineal"></use>
    </svg>
    <span>Cerrar modal</span>
  </button>
</dialog>
```
- Cuando un modal está abierto, se agrega `.modal-open` a `<html>` y `<body>` (`overflow: hidden`).

---

### 3.3 Textos y Tipografía

> **Atención a la nomenclatura de clases**: Mientras los tokens CSS usan `-l`, `-m`, `-s`, **las clases CSS de títulos y párrafos en `main.css` usan `--lg`, `--md`, `--sm`**.

- **Títulos**: `.titulo--xxl`, `.titulo--xl`, `.titulo--lg`, `.titulo--md`, `.titulo--sm`, `.titulo--xs`.
- **Párrafos**: `.parrafo--xl`, `.parrafo--lg`, `.parrafo--md`, `.parrafo--sm`, `.parrafo--xs`.
- **Listas**: `<ul class="lista lista--texto">` para listas con viñetas u `<ol class="lista lista--numerada">` para listas ordenadas (`margin-top: var(--espaciado-8)` entre ítems de nivel 1 y `var(--espaciado-4)` en sublistas anidadas dentro de `<li>`).

---

### 3.4 Íconos Funcionales (`.icono`)

- **Origen exclusivo**: Los 48 íconos oficiales del sprite `sprites.svg` con sufijo obligatorio `--lineal` o `--relleno` (`<ruta>/sprites.svg#icono-<nombre>--lineal` / `--relleno`, o `#icono-...` si el sprite está inline en `<body>`).
- **Catálogo completo (48 íconos)**:
  - **Acciones e interacción (18)**: `abrir-detalle`, `cerrar-detalle`, `borrar`, `buscar`, `cambiar`, `cerrar`, `check`, `descargar`, `duplicar`, `edicion-rapida`, `editar`, `co-editor`, `enlace-externo`, `filtrar`, `mas`, `mas-opciones`, `mostrar`, `ordenar`.
  - **Navegación y dirección (11)**: `home`, `chevron-derecha`, `chevron-izquierda`, `colapsable-abajo`, `colapsable-arriba`, `flecha-doble`, `flecha-larga-abajo`, `flecha-larga-arriba`, `flecha-larga-derecha`, `flecha-larga-izquierda`, `menu-hamburguesa`.
  - **Estados, alertas y ayuda (7)**: `advertencia`, `alerta-notificacion`, `ayuda`, `error`, `exito`, `informacion`, `notificacion`.
  - **Estructura, datos y usuario (12)**: `chat`, `comentario`, `configuracion`, `contrasena`, `doc-validado`, `fecha`, `historial`, `hora`, `logout`, `tabla`, `tareas`, `usuario`.
- **Escala de tamaños (`.icono--*`)**: `.icono--xxs` (`12px`), `.icono--xs` (`16px`), `.icono--s` (`20px`), `.icono--m` (`24px`, por defecto), `.icono--l` (`32px`), `.icono--xl` (`40px`), `.icono--xxl` (`48px`), `.icono--xxxl` (`56px`). Dentro de `.boton`, el botón asigna automáticamente el tamaño del ícono hijo; **no agregar `.icono--*` dentro de `.boton`**.
- **Modificadores de color**: `.icono--principal`, `.icono--texto-principal`, `.icono--negativo`, `.icono--exito`, `.icono--error`, `.icono--advertencia`, `.icono--informacion`, `.icono--notificacion`.
- **Avatar de usuario (`.icono--iniciales`)**: `<span class="icono icono--iniciales icono--principal"><span>AB</span></span>`.

---

## 4. Layout, Grilla (`.row` / `.col-*`) y Flexbox (`.mod-flex`)

### 4.1 Estructura de Aplicación y Cabezal
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

### 4.2 Sistema de Grilla de 12 Columnas
El contenedor `.row` define un CSS Grid de 1 columna en móvil (`< 768px`) y **12 columnas** en escritorio (`>= 768px`, `gap: 16px; margin-bottom: var(--espaciado-32)`).

```html
<div class="container">
  <div class="row">
    <div class="col-12 col-md-6"><!-- 100% en < 992px, 50% en >= 992px --></div>
    <div class="col-12 col-md-6"><!-- 100% en < 992px, 50% en >= 992px --></div>
  </div>
</div>
```

- **Breakpoints y clases de columna**:
  - Móvil (`< 768px`): 1 columna por defecto (o usar `.row--no-stack` + `.col-m-1` a `.col-m-12` para mantener columnas en móvil).
  - `>= 768px` (`sm` / base escritorio): `.col-1` a `.col-12` y `.col-sm-1` a `.col-sm-12`.
  - `>= 992px` (`md`): `.col-md-1` a `.col-md-12`.
  - `>= 1367px` (`lg`): `.col-lg-1` a `.col-lg-12`.
- **Filas de columnas automáticas (`row-cols-*`)**:
  - `.row.row-cols-1` a `.row.row-cols-12` (y variantes `.row-cols-sm-*`, `.row-cols-md-*`, `.row-cols-lg-*`).
  - `.row-cols-auto`: `grid-template-columns: repeat(auto-fit, minmax(220px, 1fr))`.

### 4.3 Módulo Flexbox (`.mod-flex`)
Por defecto `.mod-flex` es `flex-direction: column` en móvil (`< 768px`) y pasa a `flex-direction: row; justify-content: space-between; align-items: flex-start;` en escritorio (`>= 768px`), con `gap: 16px`.

- **Dirección**: `.flex-dir-row`, `.flex-dir-column`, `.sm-flex-dir-row`, `.sm-flex-dir-column`, `.sm-stack`.
- **Justificación horizontal**: `.flex-justify-start`, `.flex-justify-center`, `.flex-justify-end`, `.flex-justify-between`, `.flex-justify-around`, `.flex-justify-evenly` (y variantes `.sm-flex-justify-*`).
- **Alineación transversal**: `.flex-items-start`, `.flex-items-center`, `.flex-items-end`, `.flex-items-stretch` (y variantes `.sm-flex-items-*`).
- **Espaciado (`gap`)**: `.flex-gap-0` (`4px`), `.flex-gap-4` (`4px`), `.flex-gap-8` (`8px`), `.flex-gap-12` (`12px`), `.flex-gap-16` (`16px`), `.flex-gap-20` (`20px`), `.flex-gap-24` (`24px`).

---

## 5. Clases de Utilidad y Divisores

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

## 6. Reglas Generales de Accesibilidad (WCAG 2.2 Nivel AA)

1. **Contraste mínimo**: Ratio mínimo de **4.5:1** para texto normal y **3:1** para texto grande, íconos funcionales e indicadores de foco.
2. **Foco visible global (`:focus-visible`)**: Definido en `main.css` con `outline: 3px solid var(--foco-acento); outline-offset: 2px; border-radius: inherit;`. Prohibido anular `:focus-visible` con `outline: none`.
3. **Jerarquía de títulos**: Estructura secuencial sin saltar niveles (`h1` → `h2` → `h3`).
4. **Íconos y elementos de solo ícono**: Todo `<svg class="icono">` decorativo lleva `aria-hidden="true"`. En `.boton--icono` incluir siempre su `<span>Descripción accesible</span>` hijo directo; en enlaces externos incluir `<span class="u-hideVisually"> (enlace externo)</span>`.
5. **Semántica HTML**: Usar elementos nativos (`<button>`, `<a>`, `<nav>`, `<dialog>`, `<table>` con `<caption>` y `<th scope="col|row">`).
6. **Idioma**: Atributo `lang="es"` en la etiqueta `<html>`.

---

## 7. Lo que NO se debe hacer (Prohibiciones Estrictas)

- ❌ **No reimplementar componentes ni copiar `:root` si falta `main.css`**: Si `main.css` no está cargado en el proyecto, detenerse y avisar al usuario.
- ❌ **No usar Sora fuera de `.Logo-nombre`**: Sora (`--tipo-familia-marca`) es de uso exclusivo para el nombre del organismo en el cabezal. `Open Sans` (`--tipo-familia-base`) es la fuente para todos los títulos, párrafos y componentes.
- ❌ **No alucinar clases inexistentes**:
  - No existen `.boton--peligro`, `.Button`, `.Enlace`, `.Grupo-botones`, `.Alert`, `.Tag`, `.Modal`.
  - No existen `.Container`, `.Grid`, `.Grid-item`, `.u-md-size*`, `.u-flex`, `.u-flexBetween`, `.u-textRight`, `.u-sr-only`. Usar `.container`, `.row`/`.col-*`, `.mod-flex`, `.u-text-right` y `.u-hideVisually`.
  - No existen `.titulo--l/m/s` ni `.parrafo--l/m/s`: usar `.titulo--lg/md/sm` y `.parrafo--lg/md/sm`.
- ❌ **No omitir `<span>Texto</span>` dentro de `.boton`**: Tanto en botones con texto visible como en `.boton--icono`, el texto va dentro de un `<span>` hijo directo.
- ❌ **No hardcodear colores o medidas para componentes del sistema**: Usar siempre las clases del sistema o variables `--primario-*`, `--funcional-*`, `--neutro-*`, `--espaciado-*`.
- ❌ **No usar Bootstrap, Tailwind ni librerías externas de íconos**: Los íconos provienen únicamente del sprite oficial `sprites.svg`.
- ❌ **No escribir textos de botones, enlaces o etiquetas en MAYÚSCULAS SOSTENIDAS**.
- ❌ **No abrir un modal encima de otro modal**.

---
name: sdu-componente-botones
description: Reglas, tokens CSS, estructura DOM y criterios WCAG AAA para implementar botones (.boton) del Sistema de Diseño del Estado Uruguayo (AGESIC). Activar siempre que se creen, editen o auditen elementos <button>, acciones de formulario, controles de interfaz o botones con ícono/indicador.
---

# Componente: Botones (`.boton`)

> **Fuentes oficiales**: `portal/sist-doc-botones.php` · `biblioteca/scss/components/_button.scss` · `biblioteca/scss/tokens/_components.scss` · `biblioteca/comp/acciones/boton-*.php`

---

## 1. Árbol de Decisión Rápido (Cuándo y Qué Usar)

- **SI** el usuario ejecuta una acción o comando en la interfaz (enviar formulario, guardar, confirmar, abrir modal, filtrar, descargar) → **USAR** `<button class="boton ...">`.
- **SI** el usuario navega a otra página o sitio externo sin ejecutar comando de aplicación → **NO USAR** `.boton`; usar el componente **Enlaces** (`<a class="enlace" href="...">`).
- **SI** es la acción principal o por defecto de la pantalla/modal → **USAR** `.boton.boton--primario` (**máximo 1 por vista o contexto**).
- **SI** es una acción alternativa que acompaña a la principal → **USAR** `.boton.boton--secundario` (pueden coexistir varios).
- **SI** es una acción opcional o de bajo peso visual (ej. *"Cancelar"*, *"Limpiar"*, *"Filtrar"*) → **USAR** `.boton.boton--enlace`.
- **SI** se agrupan de 2 a 5 botones de igual jerarquía → **USAR** el contenedor **Grupo de botones** (`grupo-botones.md`).
- **SI** el botón despliega un menú de opciones al hacer clic → **USAR** **Botón desplegable** (`boton-desplegable.md`).

---

## 2. Reglas Obligatorias de Contenido y UX

1. **Longitud máxima**: Textos claros, directos y concisos de **máximo 3 palabras** (recomendado).
2. **Voz activa**: Iniciar con **verbos en infinitivo o imperativo** (ej. *"Enviar"*, *"Guardar"*, *"Descargar"*, *"Enviar formulario"*).
3. **Autodescriptivo**: El texto debe explicar exactamente qué ocurrirá al accionarlo. Prohibido usar términos genéricos o referencias visuales (*"ver más"*, *"clic aquí"*, *"aquí"*).
4. **Capitalización**: Usar mayúscula inicial únicamente (*Sentence case*). **Prohibido escribir el texto en MAYÚSCULAS SOSTENIDAS**.

---

## 3. Contrato de Clases (BEM) y Atributos HTML

| Selector / Atributo | Tipo | Obligatorio | Comportamiento / Descripción |
| :--- | :--- | :---: | :--- |
| `.boton` | Clase base | **Sí** | Contenedor `inline-flex`, alineación centrada, tipografía, bordes, sombra y transiciones. |
| `.boton--primario` | Modificador de jerarquía | **Sí** (elegir 1) | Acción principal (fondo azul institucional, texto blanco). **Máximo 1 por contexto**. |
| `.boton--secundario` | Modificador de jerarquía | **Sí** (elegir 1) | Acción alternativa (fondo blanco, borde y texto azul institucional). |
| `.boton--enlace` | Modificador de jerarquía | **Sí** (elegir 1) | Acción terciaria (fondo transparente, texto azul subrayado, sin sombra). |
| `.boton--s` | Modificador de tamaño | No | Tamaño Chico (S). `min-height: 39px`, texto `14px`, ícono `16px`. |
| *(sin modificador)* o `.boton--m` | Tamaño por defecto | No | Tamaño Medio (M). `min-height: 42px`, texto `16px`, ícono `20px`. |
| `.boton--l` | Modificador de tamaño | No | Tamaño Grande (L). `min-height: 43px`, texto `18px`, ícono `24px`. |
| `.boton--icono` | Modificador de variante | No | Botón cuadrado (`aspect-ratio: 1`) de solo ícono. Oculta visualmente el `<span>` de texto manteniendo su accesibilidad para lectores de pantalla. |
| `type="button\|submit\|reset"` | Atributo HTML | **Sí** | Definir siempre el tipo explícito en `<button>` para evitar envíos accidentales de formulario. |
| `disabled` | Atributo HTML | No | Estado inactivo (`opacity: 0.4`, `cursor: not-allowed`, `box-shadow: none`). |
| `aria-expanded="true\|false"` | Atributo ARIA | No | En botones que controlan desplegables: con `"true"` fija estado activo y rota `180deg` el `<svg class="icono down">`. |

---

## 4. Tokens de Diseño y Especificaciones CSS

### 4.1 Tokens Semánticos del Componente (`_components.scss` e `_icons.scss`)
```css
:root {
  /* Estructura y espaciado */
  --btn-gap: var(--espaciado-8);                  /* 8px — separación entre ícono y texto */
  --btn-padding-y: var(--espaciado-8);            /* 8px — padding vertical base y de .boton--icono */
  --btn-padding-x: var(--espaciado-24);           /* 24px — padding horizontal de referencia */
  --btn-radius: var(--borde-radio-xs);            /* 4px — radio de borde */
  --btn-shadow: var(--sombra-difuminada-xs);      /* 0 1px 2px 0 rgba(0, 0, 0, 0.10) */

  /* Colores semánticos de botón */
  --btn-color-primary: var(--primario-principal); /* #25418e — azul institucional principal */
  --color-primary-hover: var(--primario-oscuro);  /* #14244e — azul oscuro para hover/focus */
  --color-primary-text: var(--neutro-0);          /* #ffffff — texto sobre fondo primario */
  --color-secondary-hover: var(--primario-claro); /* #e9ecf4 — fondo hover para .boton--enlace */

  /* Indicadores (badges acoplados al botón) */
  --btn-badge-point-size: var(--espaciado-12);    /* 12px */
  --btn-badge-tag-size: var(--espaciado-24);      /* 24px */
  --btn-badge-border: var(--borde-grosor-1) solid var(--neutro-0);
}
```

### 4.2 Tokens Globales Consumidos Directamente
- **Tipografía**: `font-family: var(--tipo-familia-base)` (`Open Sans, sans-serif`), `font-weight: var(--tipo-peso-semibold)` (`600`), `line-height: var(--tipo-altura-linea-l)` (`1.5` en S/M) y `var(--tipo-altura-linea-m)` (`1.4` en L).
- **Foco accesible global (`:focus-visible`)**: `outline: 3px solid var(--foco-acento)` (`#ffa500`), `outline-offset: 2px`, `border-radius: inherit`.

### 4.3 Matriz de Estados Visuales por Jerarquía

| Jerarquía | Estado Base | `:hover`, `:focus-visible`, `[aria-expanded="true"]` | `:active:not(:disabled)` | `:disabled` |
| :--- | :--- | :--- | :--- | :--- |
| **Primario** (`.boton--primario`) | Fondo: `var(--btn-color-primary)`<br>Texto: `var(--color-primary-text)`<br>Borde: `1px solid transparent`<br>Sombra: `var(--btn-shadow)` | Fondo: `var(--color-primary-hover)`<br>Texto: `var(--color-primary-text)` | `transform: scale(0.98)`<br>`box-shadow: inset 0 3px 5px rgba(0,0,0,0.125)` | `opacity: 0.4`<br>`box-shadow: none`<br>`cursor: not-allowed` |
| **Secundario** (`.boton--secundario`) | Fondo: `var(--neutro-0)`<br>Texto: `var(--btn-color-primary)`<br>Borde: `1px solid var(--btn-color-primary)`<br>Sombra: `var(--btn-shadow)` | Fondo: `var(--color-primary-hover)`<br>Texto: `var(--color-primary-text)` | `transform: scale(0.98)`<br>`box-shadow: inset 0 3px 5px rgba(0,0,0,0.125)` | `opacity: 0.4`<br>`box-shadow: none`<br>`cursor: not-allowed` |
| **Terciario / Enlace** (`.boton--enlace`) | Fondo: `transparent`<br>Texto: `var(--btn-color-primary)`<br>Subrayado: `underline` (`0.0625rem`, offset `0.1625em`)<br>Sombra: `none` | Fondo: `var(--color-secondary-hover)`<br>Subrayado: `none` | `transform: scale(0.98)`<br>`box-shadow: inset 0 3px 5px rgba(0,0,0,0.125)` | `opacity: 0.4`<br>`box-shadow: none`<br>`cursor: not-allowed` |

### 4.4 Matriz de Escalas y Dimensiones

| Tamaño | Modificador | `min-height` | `padding` (con texto) | `padding` (`.boton--icono`) | `font-size` | Tamaño automático de `.icono` hijo |
| :--- | :--- | :--- | :--- | :--- | :--- | :--- |
| **Chico (S)** | `.boton--s` | `39px` | `var(--espaciado-8) var(--espaciado-16)` (`8px 16px`) | `var(--btn-padding-y)` (`8px`) | `var(--tipo-tamano-parrafo-s)` (`0.875rem` / `14px`) | `xs` (`--icono-tamano-xs`: `16px`) |
| **Medio (M)** | *(defecto)* | `42px` | `var(--espaciado-8) 20px` (`8px 20px`) | `var(--btn-padding-y)` (`8px`) | Heredado (`1rem` / `16px`) | `s` (`--icono-tamano-s`: `20px`) |
| **Grande (L)** | `.boton--l` | `43px` | `var(--espaciado-8) var(--espaciado-24)` (`8px 24px`) | `var(--btn-padding-y)` (`8px`) | `var(--tipo-tamano-parrafo-l)` (`1.125rem` / `18px`) | `m` (`--icono-tamano-m`: `24px`) |

---

## 5. Plantillas HTML Canónicas

> **Regla DOM crítica**: El texto dentro de `.boton` **SIEMPRE debe envolverse en `<span>Texto</span>`**. El CSS del sistema selecciona `.boton > span:not(.icono)` para el layout flex y, cuando se aplica `.boton--icono`, oculta visualmente ese `<span>` (`clip: rect(0, 0, 0, 0)`) conservándolo accesible para lectores de pantalla. Para alinear varios botones en una fila, utilizar el contenedor `<div class="mod-flex flex-justify-start flex-items-end u-mb2">`.

### 5.1 Solo texto (Jerarquías Primario, Secundario y Terciario)
```html
<!-- Primario (Tamaño M por defecto) -->
<button type="button" class="boton boton--primario">
  <span>Guardar cambios</span>
</button>

<!-- Secundario (Tamaño M por defecto) -->
<button type="button" class="boton boton--secundario">
  <span>Descargar comprobante</span>
</button>

<!-- Terciario / Botón enlace (Tamaño M por defecto) -->
<button type="button" class="boton boton--enlace">
  <span>Cancelar</span>
</button>
```

### 5.2 Tamaños (Chico `S`, Medio `M`, Grande `L`)
```html
<button type="button" class="boton boton--primario boton--s">
  <span>Confirmar</span>
</button>

<button type="button" class="boton boton--primario">
  <span>Confirmar</span>
</button>

<button type="button" class="boton boton--primario boton--l">
  <span>Confirmar</span>
</button>
```

### 5.3 Con Ícono + Texto
El `<svg class="icono">` debe incluir `aria-hidden="true"` y apuntar al sprite oficial (`#icono-<nombre>--lineal`). No agregar clases de tamaño al `<svg>`, ya que `.boton` ajusta el tamaño del ícono automáticamente según la escala del botón.

```html
<!-- Primario con ícono -->
<button type="button" class="boton boton--primario">
  <svg class="icono" aria-hidden="true">
    <use href="#icono-co-editor--lineal"></use>
  </svg>
  <span>Editar registro</span>
</button>

<!-- Secundario con ícono -->
<button type="button" class="boton boton--secundario">
  <svg class="icono" aria-hidden="true">
    <use href="#icono-descargar--lineal"></use>
  </svg>
  <span>Descargar archivo</span>
</button>

<!-- Terciario (enlace) con ícono -->
<button type="button" class="boton boton--enlace">
  <svg class="icono" aria-hidden="true">
    <use href="#icono-filtrar--lineal"></use>
  </svg>
  <span>Filtrar resultados</span>
</button>
```

### 5.4 Solo Ícono (`.boton--icono`)
Obligatorio incluir el `<span>` con la descripción accesible de la acción dentro del `<button>`. El CSS de `.boton--icono` lo oculta visualmente de forma automática.

```html
<button type="button" class="boton boton--primario boton--icono boton--s">
  <svg class="icono" aria-hidden="true">
    <use href="#icono-co-editor--lineal"></use>
  </svg>
  <span>Editar documento</span>
</button>

<button type="button" class="boton boton--secundario boton--icono">
  <svg class="icono" aria-hidden="true">
    <use href="#icono-descargar--lineal"></use>
  </svg>
  <span>Descargar documento</span>
</button>

<button type="button" class="boton boton--enlace boton--icono boton--l">
  <svg class="icono" aria-hidden="true">
    <use href="#icono-filtrar--lineal"></use>
  </svg>
  <span>Filtrar listado</span>
</button>
```

### 5.5 Estado Deshabilitado (`disabled`)
```html
<button type="button" class="boton boton--primario" disabled>
  <svg class="icono" aria-hidden="true">
    <use href="#icono-co-editor--lineal"></use>
  </svg>
  <span>Guardar cambios</span>
</button>
```

### 5.6 Con Indicador / Badge (`.tag.tag--indicador`)
> Ver especificación completa en `indicadores.md` y referencia en `biblioteca/comp/mensajes/indicadores.php`. Cuando un botón incluye indicador e ícono, se utiliza `<svg class="icono icono--m" aria-hidden="true">`.

```html
<!-- Indicador de punto: Botón primario con texto -->
<button type="button" class="boton boton--primario">
  <span>Botón primario</span>
  <span class="tag tag--advertencia tag--indicador">
    <span class="dot"></span>
  </span>
</button>

<!-- Indicador de punto: Botón enlace de solo ícono -->
<button type="button" class="boton boton--enlace boton--icono">
  <svg class="icono icono--m" aria-hidden="true">
    <use href="#icono-filtrar--lineal"></use>
  </svg>
  <span>Acción botón enlace</span>
  <span class="tag tag--advertencia tag--indicador">
    <span class="dot"></span>
  </span>
</button>

<!-- Indicador de punto: Botón enlace con ícono y texto -->
<button type="button" class="boton boton--enlace">
  <svg class="icono icono--m" aria-hidden="true">
    <use href="#icono-filtrar--lineal"></use>
  </svg>
  <span>Botón enlace</span>
  <span class="tag tag--advertencia tag--indicador">
    <span class="dot"></span>
  </span>
</button>

<!-- Indicador numérico: Botón primario con texto -->
<button type="button" class="boton boton--primario">
  <span>Botón primario</span>
  <span class="tag tag--advertencia tag--indicador tag--indicador--numerico">
    <span>99+</span>
  </span>
</button>

<!-- Indicador numérico: Botón secundario de solo ícono -->
<button type="button" class="boton boton--secundario boton--icono">
  <svg class="icono icono--m" aria-hidden="true">
    <use href="#icono-descargar--lineal"></use>
  </svg>
  <span>Acción botón secundario</span>
  <span class="tag tag--advertencia tag--indicador tag--indicador--numerico">
    <span>56</span>
  </span>
</button>
```

---

## 6. Reglas de Accesibilidad (WCAG 2.1 Nivel AAA)

- **Semántica nativa**: Usar siempre `<button>`. Prohibido usar `<div role="button">` o `<a href="#">` para ejecutar acciones.
- **Nombre accesible en `.boton--icono`**: Todo botón de solo ícono debe contener su `<span>Descripción de la acción</span>` interno. El texto debe describir el propósito funcional (ej. *"Descargar recibo"*), nunca la apariencia del ícono (no usar *"Flecha abajo"*).
- **Ocultamiento de íconos decorativos**: Todo `<svg class="icono">` dentro de un botón debe llevar `aria-hidden="true"`.
- **Preservación del foco**: Prohibido aplicar `outline: none` sobre `:focus-visible`.

---

## 7. Prohibiciones Estrictas (Guardrails para IA)

- ❌ **No alucinar clases inexistentes**: No existen `.boton--peligro`, `.boton--exito`, `.boton--terciario`, `.btn`, `.btn-primary` ni `.Button` en la hoja de estilos de este componente. Las únicas clases de jerarquía válidas son `.boton--primario`, `.boton--secundario` y `.boton--enlace`.
- ❌ **No escribir texto suelto sin `<span>`**: Nunca generar `<button class="boton boton--primario">Guardar</button>`; siempre envolver en `<span>Guardar</span>`.
- ❌ **No colocar más de un `.boton--primario` por vista o bloque**: Si hay acciones contiguas (ej. confirmar y cancelar), combinar `.boton--primario` con `.boton--secundario` o `.boton--enlace`.
- ❌ **No hardcodear estilos inline ni valores CSS literales**: No sobreescribir `padding`, `background-color`, `border-radius` ni `font-size` del botón.
- ❌ **No usar librerías externas de íconos ni trazados `<path>` sueltos**: Usar únicamente `<svg class="icono" aria-hidden="true"><use href="#icono-<nombre>--lineal"></use></svg>`.

---

## 8. Checklist de Validación (Autocorrección del Agente)

Antes de entregar cualquier código que incluya botones del sistema, verificar cada ítem:

- [ ] ¿El elemento es un `<button>` nativo con atributo `type` explícito (`button`, `submit` o `reset`)?
- [ ] ¿Posee la clase base `.boton` acompañada de una única clase de jerarquía válida (`.boton--primario`, `.boton--secundario` o `.boton--enlace`)?
- [ ] ¿El texto del botón está dentro de un `<span>` hijo directo (`<span>Texto</span>`), tiene máximo 3 palabras, comienza con un verbo y no está en mayúsculas sostenidas?
- [ ] ¿Existe como máximo un (1) `.boton--primario` en la vista o contenedor actual?
- [ ] Si es un botón de solo ícono (`.boton--icono`), ¿incluye igualmente el `<span>Descripción accesible</span>` dentro del `<button>`?
- [ ] Si incluye un ícono SVG, ¿usa `<svg class="icono" aria-hidden="true"><use href="#icono-..."></use></svg>` del catálogo oficial sin clases de tamaño forzadas?

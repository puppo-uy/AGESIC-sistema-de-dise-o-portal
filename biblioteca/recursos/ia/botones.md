---
name: sdu-componente-botones
description: Reglas, estructura HTML, variantes y criterios WCAG 2.2 AA para implementar botones (.boton) del Sistema de Diseño del Estado Uruguayo (AGESIC). Activar siempre que se creen, editen o auditen elementos <button>, acciones o controles de comando.
---

# Componente: Botones (`.boton`)

---

## 0. Requisitos previos

- Requiere **`main.css`** (con su carpeta hermana **`../fonts/`**), **`sprites.svg`** y la guía general **`SDU-instrucciones-generales-para-ia.md`** cargados en el proyecto.
- **Si `main.css` no está cargado en el proyecto**: detente, avisa al usuario qué falta y **NO escribas CSS propio para reimplementar estilos de este componente**.
- En botones con ícono, referencia el sprite del mismo origen como `<ruta>/sprites.svg#icono-...` (usa `#icono-...` únicamente si verificaste que `sprites.svg` ya está inyectado inline en `<body>`). Si `sprites.svg` no está disponible, avisa antes de asumir rutas.

---

## 1. Árbol de Decisión Rápido (Cuándo y Qué Usar)

- **SI** el usuario ejecuta una acción o comando en la interfaz (enviar formulario, guardar, confirmar, abrir modal, filtrar, descargar) → **USAR** `<button class="boton ...">`.
- **SI** el usuario navega a otra página o sitio externo sin ejecutar comando de aplicación → **NO USAR** `.boton`; usar el componente **Enlaces** (`<a class="enlace" href="...">`).
- **SI** es la acción principal del contexto (página, modal o *card* independiente) → **USAR** `.boton.boton--primario` (**máximo 1 por contexto**).
- **SI** es una acción alternativa que acompaña a la principal → **USAR** `.boton.boton--secundario` (pueden coexistir varios).
- **SI** es una acción opcional o de bajo peso visual (ej. *"Cancelar"*, *"Limpiar"*, *"Filtrar"*) → **USAR** `.boton.boton--enlace`.
- **SI** se agrupan de 2 a 5 botones de igual jerarquía y tamaño → **USAR** `<ul class="grupo-botones">` (ver guía general).
- **SI** el botón despliega un menú de opciones al hacer clic → **USAR** `.boton-desplegable` (ver guía general).

---

## 2. Reglas Obligatorias de Contenido y UX

1. **Longitud máxima**: Textos claros, directos y concisos de **máximo 3 palabras** (recomendado).
2. **Voz activa**: Iniciar con **verbos en infinitivo o imperativo** (ej. *"Enviar"*, *"Guardar"*, *"Descargar"*, *"Enviar formulario"*).
3. **Autodescriptivo**: El texto debe explicar exactamente qué ocurrirá al accionarlo. Prohibido usar términos genéricos o referencias visuales (*"ver más"*, *"clic aquí"*, *"aquí"*).
4. **Capitalización**: Usar mayúscula inicial únicamente (*Sentence case*). **Prohibido escribir el texto en MAYÚSCULAS SOSTENIDAS**.
5. **Consistencia de registro**: Mantener el mismo trato en toda la vista o producto (en los textos de ejemplo cercanos al botón en estas guías se utiliza voseo).

---

## 3. Contrato de Clases (BEM) y Atributos HTML

| Selector / Atributo | Tipo | Obligatorio | Comportamiento / Descripción |
| :--- | :--- | :---: | :--- |
| `.boton` | Clase base | **Sí** | Contenedor base del botón (alineación centrada, tipografía, bordes, sombra y transiciones). |
| `.boton--primario` | Modificador de jerarquía | **Sí** (elegir 1) | Acción principal (fondo azul institucional, texto blanco). **Máximo 1 por contexto**. |
| `.boton--secundario` | Modificador de jerarquía | **Sí** (elegir 1) | Acción alternativa (fondo blanco, borde y texto azul institucional). |
| `.boton--enlace` | Modificador de jerarquía | **Sí** (elegir 1) | Acción terciaria (fondo transparente, texto azul subrayado, sin sombra). Usar para *"Cancelar"*. |
| `.boton--s` | Modificador de tamaño | No | Tamaño Chico (S): `min-height: 39px`, texto `14px`, ícono `16px`. |
| *(sin modificador)* o `.boton--m` | Tamaño por defecto | No | Tamaño Medio (M): `min-height: 42px`, texto `16px`, ícono `20px`. |
| `.boton--l` | Modificador de tamaño | No | Tamaño Grande (L): `min-height: 43px`, texto `18px`, ícono `24px`. |
| `.boton--icono` | Modificador de variante | No | Botón cuadrado de solo ícono. Oculta visualmente su `<span>` de texto manteniendo su accesibilidad para lectores de pantalla. |
| `type="button\|submit\|reset"` | Atributo HTML | **Sí** | Definir siempre el tipo explícito en `<button>` para evitar envíos accidentales de formulario. |
| `disabled` | Atributo HTML | No | Estado inactivo (opacidad reducida, cursor `not-allowed`, sin sombra). |
| `aria-expanded="true\|false"` | Atributo ARIA | No | En botones que controlan desplegables: con `"true"` fija estado activo y rota `180deg` el `<svg class="icono down">`. |

---

## 4. Plantillas HTML Canónicas

> **Regla DOM crítica**: El texto dentro de `.boton` **SIEMPRE debe envolverse en `<span>Texto</span>` hijo directo**. El CSS del sistema selecciona `.boton > span:not(.icono)` para el layout y, cuando se aplica `.boton--icono`, oculta visualmente ese `<span>` conservándolo accesible para lectores de pantalla.
>
> Para alinear varios botones en fila, utilizar las clases de layout y utilidad de la guía general (`SDU-instrucciones-generales-para-ia.md`): `<div class="mod-flex flex-justify-start flex-items-end u-mb2">` (`.mod-flex` organiza los ítems en fila en escritorio `>= 768px` y en columna en `< 768px`; `.u-mb2` agrega `16px` de margen inferior).

### 4.1 Solo texto (Jerarquías Primario, Secundario y Terciario)
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

### 4.2 Tamaños (Chico `S`, Medio `M`, Grande `L`)
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

### 4.3 Con Ícono + Texto
El `<svg class="icono">` debe incluir `aria-hidden="true"` y apuntar al sprite oficial (`<ruta>/sprites.svg#icono-<nombre>--lineal`). No agregar clases de tamaño `.icono--*` al `<svg>`, ya que `.boton` ajusta el tamaño del ícono automáticamente según la escala del botón.

```html
<!-- Primario con ícono -->
<button type="button" class="boton boton--primario">
  <svg class="icono" aria-hidden="true">
    <use href="<ruta>/sprites.svg#icono-co-editor--lineal"></use>
  </svg>
  <span>Editar registro</span>
</button>

<!-- Secundario con ícono -->
<button type="button" class="boton boton--secundario">
  <svg class="icono" aria-hidden="true">
    <use href="<ruta>/sprites.svg#icono-descargar--lineal"></use>
  </svg>
  <span>Descargar archivo</span>
</button>

<!-- Terciario (enlace) con ícono -->
<button type="button" class="boton boton--enlace">
  <svg class="icono" aria-hidden="true">
    <use href="<ruta>/sprites.svg#icono-filtrar--lineal"></use>
  </svg>
  <span>Filtrar resultados</span>
</button>
```

### 4.4 Solo Ícono (`.boton--icono`)
Obligatorio incluir el `<span>` con la descripción accesible de la acción dentro del `<button>`. El CSS de `.boton--icono` lo oculta visualmente de forma automática.

```html
<button type="button" class="boton boton--primario boton--icono boton--s">
  <svg class="icono" aria-hidden="true">
    <use href="<ruta>/sprites.svg#icono-co-editor--lineal"></use>
  </svg>
  <span>Editar documento</span>
</button>

<button type="button" class="boton boton--secundario boton--icono">
  <svg class="icono" aria-hidden="true">
    <use href="<ruta>/sprites.svg#icono-descargar--lineal"></use>
  </svg>
  <span>Descargar documento</span>
</button>

<button type="button" class="boton boton--enlace boton--icono boton--l">
  <svg class="icono" aria-hidden="true">
    <use href="<ruta>/sprites.svg#icono-filtrar--lineal"></use>
  </svg>
  <span>Filtrar listado</span>
</button>
```

### 4.5 Estado Deshabilitado (`disabled`)
```html
<button type="button" class="boton boton--primario" disabled>
  <svg class="icono" aria-hidden="true">
    <use href="<ruta>/sprites.svg#icono-co-editor--lineal"></use>
  </svg>
  <span>Guardar cambios</span>
</button>
```

### 4.6 Con Indicador / Badge (`.tag.tag--indicador`)
Para que lectores de pantalla anuncien el estado sin pegarlo al texto del botón, colocar `aria-hidden="true"` en el badge visual (`.tag--indicador`) y agregar la descripción accesible con `.u-hideVisually` (ver guía general) dentro del `<span>` del botón. No agregar clases `.icono--*` en el `<svg>`.

```html
<!-- Indicador de punto: Botón primario con texto -->
<button type="button" class="boton boton--primario">
  <span>Guardar cambios<span class="u-hideVisually"> (con novedad)</span></span>
  <span class="tag tag--advertencia tag--indicador" aria-hidden="true">
    <span class="dot"></span>
  </span>
</button>

<!-- Indicador de punto: Botón enlace de solo ícono -->
<button type="button" class="boton boton--enlace boton--icono">
  <svg class="icono" aria-hidden="true">
    <use href="<ruta>/sprites.svg#icono-filtrar--lineal"></use>
  </svg>
  <span>Filtrar resultados<span class="u-hideVisually"> (con filtros activos)</span></span>
  <span class="tag tag--advertencia tag--indicador" aria-hidden="true">
    <span class="dot"></span>
  </span>
</button>

<!-- Indicador de punto: Botón enlace con ícono y texto -->
<button type="button" class="boton boton--enlace">
  <svg class="icono" aria-hidden="true">
    <use href="<ruta>/sprites.svg#icono-filtrar--lineal"></use>
  </svg>
  <span>Filtrar resultados<span class="u-hideVisually"> (con filtros activos)</span></span>
  <span class="tag tag--advertencia tag--indicador" aria-hidden="true">
    <span class="dot"></span>
  </span>
</button>

<!-- Indicador numérico: Botón primario con texto -->
<button type="button" class="boton boton--primario">
  <span>Revisar avisos<span class="u-hideVisually"> (99+ pendientes)</span></span>
  <span class="tag tag--advertencia tag--indicador tag--indicador--numerico" aria-hidden="true">
    <span>99+</span>
  </span>
</button>

<!-- Indicador numérico: Botón secundario de solo ícono -->
<button type="button" class="boton boton--secundario boton--icono">
  <svg class="icono" aria-hidden="true">
    <use href="<ruta>/sprites.svg#icono-descargar--lineal"></use>
  </svg>
  <span>Descargar archivos<span class="u-hideVisually"> (56 pendientes)</span></span>
  <span class="tag tag--advertencia tag--indicador tag--indicador--numerico" aria-hidden="true">
    <span>56</span>
  </span>
</button>
```

---

## 5. Reglas de Accesibilidad (WCAG 2.2 Nivel AA)

- **Semántica nativa**: Usar siempre `<button>`. Prohibido usar `<div role="button">` o `<a href="#">` para ejecutar acciones.
- **Nombre accesible en `.boton--icono`**: Todo botón de solo ícono debe contener su `<span>Descripción de la acción</span>` interno. El texto debe describir el propósito funcional (ej. *"Descargar recibo"*), nunca la apariencia del ícono (no usar *"Flecha abajo"*).
- **Indicadores accesibles**: En botones con `.tag--indicador`, anunciar el estado o conteo mediante `.u-hideVisually` dentro del `<span>` del botón y ocultar el badge decorativo con `aria-hidden="true"`.
- **Ocultamiento de íconos decorativos**: Todo `<svg class="icono">` dentro de un botón debe llevar `aria-hidden="true"`.
- **Preservación del foco**: Prohibido aplicar `outline: none` sobre `:focus-visible`.

---

## 6. Prohibiciones Estrictas (Guardrails para IA)

- ❌ **No escribir CSS para este componente**: Si `main.css` no está cargado en el proyecto, detente y avisa al usuario; no reconstruyas estilos ni copies variables de botones.
- ❌ **No alucinar clases inexistentes**: No existen `.boton--peligro`, `.boton--exito`, `.boton--terciario`, `.btn`, `.btn-primary` ni `.Button`. Las únicas clases de jerarquía válidas son `.boton--primario`, `.boton--secundario` y `.boton--enlace`.
- ❌ **No escribir texto suelto sin `<span>`**: Nunca generar `<button class="boton boton--primario">Guardar</button>`; siempre envolver en `<span>Guardar</span>`.
- ❌ **No colocar más de un `.boton--primario` por contexto**: En un mismo contexto (vista, modal o *card* independiente), combinar `.boton--primario` con `.boton--secundario` o `.boton--enlace` (usar `.boton--enlace` para *"Cancelar"*).
- ❌ **No hardcodear estilos inline ni valores CSS literales**: No sobreescribir `padding`, `background-color`, `border-radius` ni `font-size` del botón.
- ❌ **No usar librerías externas de íconos ni trazados `<path>` sueltos**: Usar únicamente `<svg class="icono" aria-hidden="true"><use href="<ruta>/sprites.svg#icono-<nombre>--lineal"></use></svg>` (o `#icono-...` si el sprite está inline).

---

## 7. Checklist de Validación (Autocorrección del Agente)

Antes de entregar cualquier código que incluya botones del sistema, verificar cada ítem:

- [ ] ¿Confirmaste que `main.css` (con `../fonts/`) y `sprites.svg` están cargados en el proyecto sin haber escrito CSS de reemplazo?
- [ ] ¿El elemento es un `<button>` nativo con atributo `type` explícito (`button`, `submit` o `reset`)?
- [ ] ¿Posee la clase base `.boton` acompañada de una única clase de jerarquía válida (`.boton--primario`, `.boton--secundario` o `.boton--enlace`) y usa `.boton--enlace` para *"Cancelar"*?
- [ ] ¿El texto del botón está dentro de un `<span>` hijo directo (`<span>Texto</span>`), tiene máximo 3 palabras, comienza con un verbo y no está en mayúsculas sostenidas?
- [ ] ¿Existe como máximo un (1) `.boton--primario` por contexto?
- [ ] Si es un botón de solo ícono (`.boton--icono`), ¿incluye igualmente el `<span>Descripción accesible</span>` dentro del `<button>`?
- [ ] Si incluye un ícono SVG, ¿usa `<svg class="icono" aria-hidden="true"><use href="..."></use></svg>` apuntando al sprite oficial según cómo esté montado (`<ruta>/sprites.svg#...` o `#...` inline) y sin clases de tamaño `.icono--*`?
- [ ] Si incluye `.tag--indicador`, ¿el badge tiene `aria-hidden="true"` y el estado/conteo se anuncia con `.u-hideVisually` dentro del `<span>` de texto del botón?

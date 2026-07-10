<?php
$iconName = isset($_GET['name']) ? $_GET['name'] : null;
$iconSize = isset($_GET['size']) ? $_GET['size'] : null;
$iconType = isset($_GET['type']) ? $_GET['type'] : null;
?>

<?php if ($iconName) : ?>
<svg class="icono<?php echo $iconSize ? ' icono--' . htmlspecialchars($iconSize) : ''; ?>">
  <use href="#icono-<?php echo htmlspecialchars($iconName); ?>"></use>
</svg>
<?php elseif ($iconType === 'comparativa') : ?>
<div style="display: flex; gap: 32px; align-items: center;">
  <div style="text-align: center;">
    <svg class="icono icono--xl" style="color: var(--primario-principal);">
      <use href="#icono-alerta--lineal"></use>
    </svg>
    <p style="margin: 8px 0 0 0; font-size: 14px; font-family: var(--tipo-familia-base); color: var(--texto-principal);">Lineal</p>
  </div>
  <div style="text-align: center;">
    <svg class="icono icono--xl" style="color: var(--primario-principal);">
      <use href="#icono-alerta--relleno"></use>
    </svg>
    <p style="margin: 8px 0 0 0; font-size: 14px; font-family: var(--tipo-familia-base); color: var(--texto-principal);">Relleno</p>
  </div>
</div>
<?php elseif ($iconType === 'avatar') : ?>
<span class="icono icono--xxl icono--iniciales icono--principal">
    <span>AB</span>
    <span class="tag tag--advertencia tag--indicador tag--indicador--numerico">
        <span>8</span>
    </span>
</span>
<?php else : ?>
<div>Iconos</div>

<svg class="icono icono--l">
  <use href="#icono-alerta--relleno"></use>
</svg>

<svg class="icono icono--l">
  <use href="#icono-alerta--lineal"></use>
</svg>

<svg class="icono icono--l">
  <use href="#icono-ayuda--relleno"></use>
</svg>

<svg class="icono icono--l">
  <use href="#icono-ayuda--lineal"></use>
</svg>

<svg class="icono icono--l">
  <use href="#icono-exito--relleno"></use>
</svg>

<svg class="icono icono--l">
  <use href="#icono-exito--lineal"></use>
</svg>

<svg class="icono icono--l">
  <use href="#icono-informacion--relleno"></use>
</svg>

<svg class="icono icono--l">
  <use href="#icono-informacion--lineal"></use>
</svg>

<svg class="icono icono--l">
  <use href="#icono-error--relleno"></use>
</svg>

<svg class="icono icono--l">
  <use href="#icono-error--lineal"></use>
</svg>

<br />

<svg class="icono icono--l">
  <use href="#icono-alerta-notificacion--relleno"></use>
</svg>

<svg class="icono icono--l">
  <use href="#icono-alerta-notificacion--lineal"></use>
</svg>

<svg class="icono icono--l">
  <use href="#icono-notificacion--relleno"></use>
</svg>

<svg class="icono icono--l">
  <use href="#icono-notificacion--lineal"></use>
</svg>

<svg class="icono icono--l">
  <use href="#icono-informacion--relleno"></use>
</svg>

<svg class="icono icono--l">
  <use href="#icono-informacion--lineal"></use>
</svg>

<svg class="icono icono--l">
  <use href="#icono-cerrar"></use>
</svg>

<svg class="icono icono--l">
  <use href="#icono-editar--relleno"></use>
</svg>

<svg class="icono icono--l">
  <use href="#icono-editar--lineal"></use>
</svg>

<svg class="icono icono--l">
  <use href="#icono-borrar--relleno"></use>
</svg>

<br />

<svg class="icono icono--l">
  <use href="#icono-borrar--lineal"></use>
</svg>

<svg class="icono icono--l">
  <use href="#icono-mas-opciones--lineal"></use>
</svg>

<svg class="icono icono--l">
  <use href="#icono-colapsable-abajo--relleno"></use>
</svg>

<svg class="icono icono--l">
  <use href="#icono-colapsable-arriba--relleno"></use>
</svg>

<svg class="icono icono--l">
  <use href="#icono-colapsable-abajo--lineal"></use>
</svg>

<svg class="icono icono--l">
  <use href="#icono-colapsable-arriba--lineal"></use>
</svg>

<svg class="icono icono--l">
  <use href="#icono-enlace-externo--lineal"></use>
</svg>

<svg class="icono icono--l">
  <use href="#icono-fecha--lineal"></use>
</svg>

<svg class="icono icono--l">
  <use href="#icono-fecha--relleno"></use>
</svg>

<svg class="icono icono--l">
  <use href="#icono-check--relleno"></use>
</svg>

<br />

<svg class="icono icono--l">
  <use href="#icono-flecha-larga-derecha--lineal"></use>
</svg>

<svg class="icono icono--l">
  <use href="#icono-flecha-larga-izquierda--lineal"></use>
</svg>

<svg class="icono icono--l">
  <use href="#icono-flecha-larga-abajo--lineal"></use>
</svg>

<svg class="icono icono--l">
  <use href="#icono-flecha-larga-arriba--lineal"></use>
</svg>

<svg class="icono icono--l">
  <use href="#icono-mas--lineal"></use>
</svg>

<svg class="icono icono--l">
  <use href="#icono-buscar--lineal"></use>
</svg>

<svg class="icono icono--l">
  <use href="#icono-hora--lineal"></use>
</svg>

<svg class="icono icono--l">
  <use href="#icono-hora--relleno"></use>
</svg>

<svg class="icono icono--l">
  <use href="#icono-edicion-rapida--lineal"></use>
</svg>

<svg class="icono icono--l">
  <use href="#icono-edicion-rapida--relleno"></use>
</svg>

<br />

<svg class="icono icono--l">
  <use href="#icono-mostrar--lineal"></use>
</svg>

<svg class="icono icono--l">
  <use href="#icono-mostrar--relleno"></use>
</svg>

<svg class="icono icono--l">
  <use href="#icono-descargar--lineal"></use>
</svg>

<svg class="icono icono--l">
  <use href="#icono-flecha-doble--lineal"></use>
</svg>

<svg class="icono icono--l">
  <use href="#icono-chevron-derecha--lineal"></use>
</svg>

<svg class="icono icono--l">
  <use href="#icono-chevron-izquierda--lineal"></use>
</svg>

<svg class="icono icono--l">
  <use href="#icono-co-editor--lineal"></use>
</svg>

<svg class="icono icono--l">
  <use href="#icono-comentario--lineal"></use>
</svg>

<svg class="icono icono--l">
  <use href="#icono-cambiar--lineal"></use>
</svg>

<svg class="icono icono--l">
  <use href="#icono-duplicar--lineal"></use>
</svg>

<br />

<svg class="icono icono--l">
  <use href="#icono-usuario--lineal"></use>
</svg>

<svg class="icono icono--l">
  <use href="#icono-usuario--relleno"></use>
</svg>

<svg class="icono icono--l">
  <use href="#icono-filtrar--lineal"></use>
</svg>

<svg class="icono icono--l">
  <use href="#icono-home--lineal"></use>
</svg>

<svg class="icono icono--l">
  <use href="#icono-home--relleno"></use>
</svg>

<svg class="icono icono--l">
  <use href="#icono-tabla--lineal"></use>
</svg>

<svg class="icono icono--l">
  <use href="#icono-tabla--relleno"></use>
</svg>

<svg class="icono icono--l">
  <use href="#icono-tareas--lineal"></use>
</svg>

<svg class="icono icono--l">
  <use href="#icono-tareas--relleno"></use>
</svg>

<svg class="icono icono--l">
  <use href="#icono-configuracion--lineal"></use>
</svg>

<br />

<svg class="icono icono--l">
  <use href="#icono-configuracion--relleno"></use>
</svg>

<svg class="icono icono--l">
  <use href="#icono-abrir-detalle--lineal"></use>
</svg>

<svg class="icono icono--l">
  <use href="#icono-cerrar-detalle--lineal"></use>
</svg>

<svg class="icono icono--l">
  <use href="#icono-menu-hamburguesa--lineal"></use>
</svg>

<svg class="icono icono--l">
  <use href="#icono-logout--lineal"></use>
</svg>

<svg class="icono icono--l">
  <use href="#icono-doc-validado--lineal"></use>
</svg>

<svg class="icono icono--l">
  <use href="#icono-doc-validado--relleno"></use>
</svg>

<svg class="icono icono--l">
  <use href="#icono-chat--lineal"></use>
</svg>

<svg class="icono icono--l">
  <use href="#icono-chat--relleno"></use>
</svg>

<svg class="icono icono--l">
  <use href="#icono-contrasena--lineal"></use>
</svg>


<br>



<svg class="icono icono--l">
  <use href="#icono-contrasena--relleno"></use>
</svg>

<svg class="icono icono--l">
  <use href="#icono-ordenar"></use>
</svg>

<br>

<h2>Tamaños</h2>

<svg class="icono icono--xxs">
  <use href="#icono-alerta--relleno"></use>
</svg>

<svg class="icono icono--xs">
  <use href="#icono-alerta--relleno"></use>
</svg>

<svg class="icono icono--s">
  <use href="#icono-alerta--relleno"></use>
</svg>

<svg class="icono icono--m">
  <use href="#icono-alerta--relleno"></use>
</svg>

<svg class="icono icono--l">
  <use href="#icono-alerta--relleno"></use>
</svg>

<svg class="icono icono--xl">
  <use href="#icono-alerta--relleno"></use>
</svg>

<svg class="icono icono--xxl">
  <use href="#icono-alerta--relleno"></use>
</svg>

<h2>Colores</h2>

<svg class="icono icono--l icono--texto-principal">
  <use href="#icono-alerta--relleno"></use>
</svg>

<svg class="icono icono--l icono--negativo">
  <use href="#icono-alerta--relleno"></use>
</svg>

<svg class="icono icono--l icono--principal">
  <use href="#icono-alerta--relleno"></use>
</svg>

<svg class="icono icono--l icono--error">
  <use href="#icono-alerta--relleno"></use>
</svg>

<svg class="icono icono--l icono--advertencia">
  <use href="#icono-alerta--relleno"></use>
</svg>

<svg class="icono icono--l icono--exito">
  <use href="#icono-alerta--relleno"></use>
</svg>

<svg class="icono icono--l icono--informacion">
  <use href="#icono-alerta--relleno"></use>
</svg>

<svg class="icono icono--l icono--notificacion">
  <use href="#icono-alerta--relleno"></use>
</svg>

<h2>Default</h2>

<svg class="icono icono--exito">
  <use href="#icono-alerta--relleno"></use>
</svg>


<h2>Usuario</h2>

<span class="icono icono--s icono--iniciales">
    <span>AB</span>
</span>

<span class="icono icono--iniciales">
    <span>AB</span>
</span>

<span class="icono icono--l icono--iniciales">
    <span>AB</span>
</span>

<span class="icono icono--xl icono--iniciales">
    <span>AB</span>
</span>


<span class="icono icono--xxl icono--iniciales">
    <span>AB</span>
</span>

<span class="icono icono--xxxl icono--iniciales">
    <span>AB</span>
</span>

<br /><br />

<span class="icono icono--s icono--iniciales icono--principal">
    <span>AB</span>
    <span class="tag tag--advertencia tag--indicador" >
      <span class="dot"></span>
    </span>
</span>


<span class="icono icono--m  icono--iniciales icono--principal">
    <span>AB</span>
    <span class="tag tag--advertencia tag--indicador" >
      <span class="dot"></span>
    </span>
</span>

<span class="icono icono--l  icono--iniciales icono--principal">
    <span>AB</span>
    <span class="tag tag--advertencia tag--indicador" >
      <span class="dot"></span>
    </span>
</span>

<span class="icono icono--xl  icono--iniciales icono--principal">
    <span>AB</span>
    <span class="tag tag--advertencia tag--indicador" >
      <span class="dot"></span>
    </span>
</span>

<span class="icono icono--xxl  icono--iniciales icono--principal">
    <span>AB</span>
    <span class="tag tag--advertencia tag--indicador" >
      <span class="dot"></span>
    </span>
</span>

<span class="icono icono--xxxl  icono--iniciales icono--principal">
    <span>AB</span>
    <span class="tag tag--advertencia tag--indicador" >
      <span class="dot"></span>
    </span>
</span>



<br /><br />

<span class="icono--s icono--iniciales icono--principal">
    <span>AB</span>
    <span class="tag tag--advertencia tag--indicador tag--indicador--numerico">
        <span>8</span>
    </span>
</span>

&nbsp;&nbsp;

<span class="icono icono--iniciales icono--principal">
    <span>AB</span>
    <span class="tag tag--advertencia tag--indicador tag--indicador--numerico">
        <span>8</span>
    </span>
</span>

&nbsp;&nbsp;

<span class="icono icono--l icono--iniciales icono--principal">
    <span>AB</span>
    <span class="tag tag--advertencia tag--indicador tag--indicador--numerico">
        <span>8</span>
    </span>
</span>

&nbsp;&nbsp;

<span class="icono icono--xl icono--iniciales icono--principal">
    <span>AB</span>
    <span class="tag tag--advertencia tag--indicador tag--indicador--numerico">
        <span>8</span>
    </span>
</span>


&nbsp;&nbsp;

<span class="icono icono--xxl icono--iniciales icono--principal">
    <span>AB</span>
    <span class="tag tag--advertencia tag--indicador tag--indicador--numerico">
        <span>8</span>
    </span>
</span>


&nbsp;&nbsp;

<span class="icono icono--xxxl icono--iniciales icono--principal">
    <span>AB</span>
    <span class="tag tag--advertencia tag--indicador tag--indicador--numerico">
        <span>8</span>
    </span>
</span>


<br /><br /><br />

<button class="boton boton--enlace boton--icono">

<span class="icono icono--xxxl icono--iniciales icono--principal">
    <span>AB</span>
    <span class="tag tag--advertencia tag--indicador tag--indicador--numerico">
        <span>8</span>
    </span>
</span>

</button>
<?php endif; ?>



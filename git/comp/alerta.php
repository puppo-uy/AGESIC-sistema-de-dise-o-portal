<?php
$selectedType = isset($_GET['type']) ? $_GET['type'] : null;
$selectedButton = isset($_GET['button']) ? $_GET['button'] : null;
?>

<?php if (!$selectedType || $selectedType === 'exito') : ?>
	<?php if ($selectedButton === null || $selectedButton === 'no') : ?>
	<!-- Alerta simple: Exito -->
	<div class="alerta alerta--exito">
		<svg class="icono icono--exito">
			<use href="#icono-exito--relleno"></use>
		</svg>
		<div class="contenido">
			<p class="">Texto de la alerta Lorem ipsum dolor sit amet, consectetur adipiscing elit. Párrafo de texto tamaño MD. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
		</div>
	</div>
	<?php endif; ?>

	<?php if ($selectedButton === null || $selectedButton === 'si') : ?>
	<!-- Alerta simple: Exito con botón cerrar-->
	<div class="alerta alerta--exito">
		<svg class="icono icono--exito">
			<use href="#icono-exito--relleno"></use>
		</svg>
		<div class="contenido">
			<p class="">Texto de la alerta Lorem ipsum dolor sit amet, consectetur adipiscing elit. Párrafo de texto tamaño MD. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
		</div>
		<button class="boton boton--s boton--enlace boton--icono boton--cerrar">
			<svg class="icono">
				<use href="#icono-cerrar"></use>
			</svg>
			<span>Cerrar alerta</span>
		</button>
	</div>
	<?php endif; ?>
<?php endif; ?>

<?php if (!$selectedType || $selectedType === 'error') : ?>
<!-- Alerta simple: Error -->
<div class="alerta alerta--error">
	<svg class="icono icono--error">
		<use href="#icono-error--relleno"></use>
	</svg>
	<div class="contenido">
		<p class="">Texto de la alerta Lorem ipsum dolor sit amet, consectetur adipiscing elit. Párrafo de texto tamaño MD. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
	</div>
	<button class="boton boton--s boton--enlace boton--icono boton--cerrar">
		<svg class="icono">
			<use href="#icono-cerrar"></use>
		</svg>
		<span>Cerrar alerta</span>
	</button>
</div>
<?php endif; ?>

<?php if (!$selectedType || $selectedType === 'advertencia') : ?>
<!-- Alerta simple: Advertencia -->
<div class="alerta alerta--advertencia">
	<svg class="icono icono--advertencia">
		<use href="#icono-alerta--relleno"></use>
	</svg>
	<div class="contenido">
		<p class="">Texto de la alerta Lorem ipsum dolor sit amet, consectetur adipiscing elit. Párrafo de texto tamaño MD. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
	</div>
	<button class="boton boton--s boton--enlace boton--icono boton--cerrar">
		<svg class="icono">
			<use href="#icono-cerrar"></use>
		</svg>
		<span>Cerrar alerta</span>
	</button>
</div>
<?php endif; ?>

<?php if (!$selectedType || $selectedType === 'info') : ?>
<!-- Alerta simple: Información -->
<div class="alerta alerta--informacion">
	<svg class="icono icono--informacion">
		<use href="#icono-informacion--relleno"></use>
	</svg>
	<div class="contenido">
		<p class="">Texto de la alerta Lorem ipsum dolor sit amet, consectetur adipiscing elit. Párrafo de texto tamaño MD. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
	</div>
	<button class="boton boton--s boton--enlace boton--icono boton--cerrar">
		<svg class="icono">
			<use href="#icono-cerrar"></use>
		</svg>
		<span>Cerrar alerta</span>
	</button>
</div>
<?php endif; ?>

<?php if (!$selectedType || $selectedType === 'notificacion') : ?>
<!-- Alerta simple: Notificación -->
<div class="alerta alerta--notificacion">
	<svg class="icono icono--notificacion">
		<use href="#icono-alerta-notificacion--relleno"></use>
	</svg>
	<div class="contenido">
		<p class="">Texto de la alerta Lorem ipsum dolor sit amet, consectetur adipiscing elit. Párrafo de texto tamaño MD. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
	</div>
	<button class="boton boton--s boton--enlace boton--icono boton--cerrar">
		<svg class="icono">
			<use href="#icono-cerrar"></use>
		</svg>
		<span>Cerrar alerta</span>
	</button>
</div>
<?php endif; ?>
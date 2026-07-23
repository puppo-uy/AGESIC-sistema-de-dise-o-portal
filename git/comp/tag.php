<?php
$selectedType = isset($_GET['type']) ? $_GET['type'] : null;
$selectedSize = isset($_GET['size']) ? $_GET['size'] : null;
?>

<?php // Mostrar solo el último tag normal (notificacion) - se eliminó el resto ?>

<?php if ($selectedType === null || $selectedType === 'estado') : ?>
	<?php if ($selectedSize === null || $selectedSize === 'normal') : ?>
	<!-- Tag: Notificación (único mostrado) -->
	<span class="tag tag--notificacion">
		<span class="dot"></span>
		<span>Tag notificacion</span>
	</span>
	<?php endif; ?>
<?php endif; ?>

<?php if (($selectedSize === null || $selectedSize === 'small') && ($selectedType === null || $selectedType === 'clasificacion' || $selectedType === 'normal')) : ?>
	<?php if ($selectedSize === 'small') : ?>
	<!-- Tag chico -->
	<span class="tag tag--small">
		<!--<span class="dot"></span>-->
		<span>Tag chico</span>
	</span>
	<?php endif; ?>
<?php endif; ?>

<?php if ($selectedType === null || $selectedType === 'estado' || $selectedType === 'small-estado') : ?>
	<?php if ($selectedSize === null || $selectedSize === 'small') : ?>
	<!-- Tag chico: Información -->
	<span class="tag tag--small tag--informacion">
		<span class="dot"></span>
		<span>Tag informacion</span>
	</span>

	<!-- Tag chico: Activo -->
	<span class="tag tag--small tag--activo">
		<span class="dot"></span>
		<span>Tag activo</span>
	</span>

	<!-- Tag chico: Error -->
	<span class="tag tag--small tag--error">
		<span class="dot"></span>
		<span>Tag error</span>
	</span>

	<!-- Tag chico: Advertencia  -->
	<span class="tag tag--small tag--advertencia">
		<span class="dot"></span>
		<span>Tag advertencia</span>
	</span>

	<!-- Tag chico: Notificación -->
	<span class="tag tag--small tag--notificacion">
		<span class="dot"></span>
		<span>Tag notificacion</span>
	</span>
	<?php endif; ?>
<?php endif; ?>

<?php if ($selectedType === 'tamanos') : ?>
<!-- Tag Normal -->
<span class="tag">
	<span>Tag normal</span>
</span>

<!-- Tag Chico -->
<span class="tag tag--small">
	<span>Tag chico</span>
</span>
<?php endif; ?>
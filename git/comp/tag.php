<?php
$selectedType = isset($_GET['type']) ? $_GET['type'] : null;
$selectedSize = isset($_GET['size']) ? $_GET['size'] : null;
?>

<?php if (($selectedSize === null || $selectedSize === 'normal') && ($selectedType === null || $selectedType === 'clasificacion' || $selectedType === 'normal')) : ?>
<!-- Tag Normal / Clasificación -->
<span class="tag">
	<!--<span class="dot"></span>-->
	<span>Tag normal</span>
</span>
<?php endif; ?>

<?php if ($selectedType === null || $selectedType === 'estado') : ?>
	<?php if ($selectedSize === null || $selectedSize === 'normal') : ?>
	<!-- Tag: Información -->
	<span class="tag tag--informacion">
		<span class="dot"></span>
		<span>Tag informacion</span>
	</span>

	<!-- Tag: Activo -->
	<span class="tag tag--activo">
		<span class="dot"></span>
		<span>Tag activo</span>
	</span>

	<!-- Tag: Error -->
	<span class="tag tag--error">
		<span class="dot"></span>
		<span>Tag error</span>
	</span>

	<!-- Tag: Advertencia -->
	<span class="tag tag--advertencia">
		<span class="dot"></span>
		<span>Tag advertencia</span>
	</span>

	<!-- Tag: Notificación -->
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
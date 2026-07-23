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

	
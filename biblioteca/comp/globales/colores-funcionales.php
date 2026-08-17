<?php
include __DIR__ . '/../../inc/muestra-colores.php';

$grupos_funcionales = [
	'Información' => 'informacion',
	'Notificación' => 'notificacion',
	'Éxito' => 'exito',
	'Error' => 'error',
	'Advertencia' => 'advertencia',
];
$pasos_funcionales = ['claro', 'medio', 'acento', 'medio_oscuro', 'oscuro'];
?>

<div class="muestra-colores">

	<?php foreach ($grupos_funcionales as $etiqueta => $slug): ?>
	<div>
		<p class="titulo--sm"><?php echo $etiqueta; ?></p>
		<div class="muestra-colores__fila">

			<?php foreach ($pasos_funcionales as $paso): ?>
			<?php $token = '--funcional-' . $slug . '-' . $paso; ?>
			<div class="muestra-color">
				<span class="muestra-color__chip" style="background: var(<?php echo $token; ?>);"></span>
				<div class="muestra-color__info">
					<span class="muestra-color__hex" data-token="<?php echo $token; ?>"></span>
					<code class="muestra-color__nombre"><?php echo $token; ?></code>
				</div>
			</div>
			<?php endforeach; ?>

		</div>
	</div>
	<?php endforeach; ?>

</div>

<?php include __DIR__ . '/../../inc/muestra-colores-resolver.php'; ?>

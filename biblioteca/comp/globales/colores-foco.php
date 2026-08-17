<?php
include __DIR__ . '/../../inc/muestra-colores.php';

$tokens_foco = ['--foco-acento-claro', '--foco-acento'];
?>

<div class="muestra-colores">

	<div>
		<p class="titulo--sm">Foco</p>
		<div class="muestra-colores__fila">

			<?php foreach ($tokens_foco as $token): ?>
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

</div>

<?php include __DIR__ . '/../../inc/muestra-colores-resolver.php'; ?>

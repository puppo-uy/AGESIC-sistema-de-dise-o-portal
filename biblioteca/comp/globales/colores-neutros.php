<?php
include __DIR__ . '/../../inc/muestra-colores.php';

$tokens_neutros = [
	'--neutro-0', '--neutro-25', '--neutro-50', '--neutro-100', '--neutro-200',
	'--neutro-300', '--neutro-400', '--neutro-500', '--neutro-600', '--neutro-700',
	'--neutro-800', '--neutro-900', '--neutro-950', '--neutro-1000',
];
?>

<div class="muestra-colores">

	<div>
		<p class="titulo--sm">Neutros</p>
		<div class="muestra-colores__fila">

			<?php foreach ($tokens_neutros as $token): ?>
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

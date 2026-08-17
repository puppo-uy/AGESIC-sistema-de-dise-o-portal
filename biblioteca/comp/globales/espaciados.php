<?php
$tokens_espaciado = [
	'--espaciado-0', '--espaciado-2', '--espaciado-4', '--espaciado-8',
	'--espaciado-12', '--espaciado-16', '--espaciado-20', '--espaciado-24',
	'--espaciado-28', '--espaciado-32', '--espaciado-36', '--espaciado-40',
	'--espaciado-48', '--espaciado-56', '--espaciado-64', '--espaciado-72',
	'--espaciado-80',
];
?>

<style>
	.muestra-espaciados {
		display: flex;
		flex-direction: column;
		gap: var(--espaciado-16);
	}

	.muestra-espaciado {
		display: flex;
		align-items: center;
		gap: var(--espaciado-16);
	}

	.muestra-espaciado__info {
		display: flex;
		align-items: baseline;
		gap: var(--espaciado-8);
		width: 160px;
		flex-shrink: 0;
	}

	.muestra-espaciado__valor {
		font-family: monospace;
		font-size: var(--tipo-tamano-parrafo-s);
		color: var(--texto-principal);
	}

	.muestra-espaciado__nombre {
		font-family: monospace;
		font-size: var(--tipo-tamano-parrafo-xs);
		color: var(--texto-auxiliar);
	}

	.muestra-espaciado__barra {
		display: block;
		height: var(--espaciado-16);
		background: var(--primario-principal);
		border-radius: var(--borde-radio-xxs);
	}
</style>

<div class="muestra-espaciados">

	<p class="titulo--sm">Espaciado</p>

	<?php foreach ($tokens_espaciado as $token): ?>
	<div class="muestra-espaciado">
		<div class="muestra-espaciado__info">
			<span class="muestra-espaciado__valor" data-token="<?php echo $token; ?>"></span>
			<code class="muestra-espaciado__nombre"><?php echo $token; ?></code>
		</div>
		<span class="muestra-espaciado__barra" style="width: var(<?php echo $token; ?>);"></span>
	</div>
	<?php endforeach; ?>

</div>

<script>
	(function () {
		var raiz = getComputedStyle(document.documentElement);
		document.querySelectorAll('.muestra-espaciado__valor[data-token]').forEach(function (el) {
			var valor = raiz.getPropertyValue(el.getAttribute('data-token')).trim();
			el.textContent = valor;
		});
	})();
</script>

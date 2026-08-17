<?php
$tokens_grosor = [
	'--borde-grosor-0', '--borde-grosor-1', '--borde-grosor-2', '--borde-grosor-3',
	'--borde-grosor-4', '--borde-grosor-5', '--borde-grosor-6',
];
?>

<style>
	.muestra-bordes {
		display: flex;
		flex-direction: column;
		gap: var(--espaciado-32);
	}

	.muestra-bordes__fila {
		display: flex;
		flex-wrap: wrap;
		gap: var(--espaciado-16);
	}

	.muestra-borde {
		width: 120px;
	}

	.muestra-borde__caja {
		display: block;
		height: 64px;
		background: var(--neutro-0);
	}

	.muestra-borde__info {
		display: flex;
		flex-direction: column;
		gap: var(--espaciado-2);
		margin-top: var(--espaciado-8);
	}

	.muestra-borde__valor {
		font-family: monospace;
		font-size: var(--tipo-tamano-parrafo-s);
		color: var(--texto-principal);
	}

	.muestra-borde__nombre {
		font-family: monospace;
		font-size: var(--tipo-tamano-parrafo-xs);
		color: var(--texto-auxiliar);
	}
</style>

<div class="muestra-bordes">

	<div>
		<p class="titulo--sm">Grosor</p>
		<div class="muestra-bordes__fila">

			<?php foreach ($tokens_grosor as $token): ?>
			<div class="muestra-borde">
				<span class="muestra-borde__caja" style="border-radius: var(--borde-radio-xs); border-style: solid; border-color: var(--primario-principal); border-width: var(<?php echo $token; ?>);"></span>
				<div class="muestra-borde__info">
					<span class="muestra-borde__valor" data-token="<?php echo $token; ?>"></span>
					<code class="muestra-borde__nombre"><?php echo $token; ?></code>
				</div>
			</div>
			<?php endforeach; ?>

		</div>
	</div>

</div>

<script>
	(function () {
		var raiz = getComputedStyle(document.documentElement);
		document.querySelectorAll('.muestra-borde__valor[data-token]').forEach(function (el) {
			var valor = raiz.getPropertyValue(el.getAttribute('data-token')).trim();
			el.textContent = valor;
		});
	})();
</script>

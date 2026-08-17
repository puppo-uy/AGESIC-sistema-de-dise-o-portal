<?php
$tamanos_sombra = [
	'XS' => '--sombra-dura-xs',
	'S' => '--sombra-dura-s',
	'M' => '--sombra-dura-m',
	'L' => '--sombra-dura-l',
	'XL' => '--sombra-dura-xl',
];
?>

<style>
	.muestra-sombras {
		display: flex;
		flex-direction: column;
		gap: var(--espaciado-32);
	}

	.muestra-sombras__fila {
		display: flex;
		flex-wrap: wrap;
		gap: var(--espaciado-32);
		padding: var(--espaciado-16);
	}

	.muestra-sombra {
		width: 140px;
	}

	.muestra-sombra__info {
		display: flex;
		flex-direction: column;
		gap: var(--espaciado-2);
		margin-bottom: var(--espaciado-8);
	}

	.muestra-sombra__caja {
		display: block;
		height: 80px;
		border-radius: var(--borde-radio-xs);
		background: var(--neutro-0);
	}

	.muestra-sombra__tamano {
		font-family: var(--tipo-familia-base);
		font-size: var(--tipo-tamano-parrafo-s);
		font-weight: var(--tipo-peso-semibold);
		color: var(--texto-principal);
	}

	.muestra-sombra__nombre {
		font-family: monospace;
		font-size: var(--tipo-tamano-parrafo-xs);
		color: var(--texto-auxiliar);
	}
</style>

<div class="muestra-sombras">

	<div>
		<p class="titulo--sm">Dura</p>
		<div class="muestra-sombras__fila">

			<?php foreach ($tamanos_sombra as $tamano => $token): ?>
			<div class="muestra-sombra">
				<div class="muestra-sombra__info">
					<span class="muestra-sombra__tamano"><?php echo $tamano; ?></span>
					<code class="muestra-sombra__nombre"><?php echo $token; ?></code>
				</div>
				<span class="muestra-sombra__caja" style="box-shadow: var(<?php echo $token; ?>);"></span>
			</div>
			<?php endforeach; ?>

		</div>
	</div>

</div>

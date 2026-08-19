<?php
$texto_muestra = 'Aa Bb Cc Dd Ee Ff Gg Hh Ii Jj Kk Ll Mm Nn Ññ Oo Pp Qq Rr Ss Tt Uu Vv Ww Xx Yy Zz · Áá Éé Íí Óó Úú Üü · 0123456789 · & @ € $ % # ¿? ¡! + − × = / ( ) [ ] { }';

$familia_nombre = 'Open Sans';
$familia_token = '--tipo-familia-base';

$pesos = [
	'Light' => '--tipo-peso-light',
	'Regular' => '--tipo-peso-regular',
	'Semibold' => '--tipo-peso-semibold',
	'Bold' => '--tipo-peso-bold',
];
?>

<style>
	.muestra-tipografias {
		display: flex;
		flex-direction: column;
		gap: var(--espaciado-16);
	}

	.muestra-tipografia__info {
		display: flex;
		align-items: baseline;
		gap: var(--espaciado-8);
		margin-bottom: var(--espaciado-4);
	}

	.muestra-tipografia__peso {
		font-family: var(--tipo-familia-base);
		font-size: var(--tipo-tamano-parrafo-s);
		font-weight: var(--tipo-peso-semibold);
		color: var(--texto-principal);
	}

	.muestra-tipografia__nombre {
		font-family: monospace;
		font-size: var(--tipo-tamano-parrafo-xs);
		color: var(--texto-auxiliar);
	}

	.muestra-tipografia__muestra {
		font-size: var(--tipo-tamano-titulo-s);
		color: var(--texto-principal);
		margin: 0;
	}
</style>

<div class="muestra-tipografias">

	<?php foreach ($pesos as $etiqueta_peso => $token_peso): ?>
	<div class="muestra-tipografia">
		<div class="muestra-tipografia__info">
			<span class="muestra-tipografia__peso"><?php echo $familia_nombre . ' ' . $etiqueta_peso; ?></span>
			<code class="muestra-tipografia__nombre">(<?php echo $familia_token . ', ' . $token_peso; ?>)</code>
		</div>
		<p class="muestra-tipografia__muestra" style="font-family: var(<?php echo $familia_token; ?>); font-weight: var(<?php echo $token_peso; ?>);"><?php echo $texto_muestra; ?></p>
	</div>
	<?php endforeach; ?>

</div>

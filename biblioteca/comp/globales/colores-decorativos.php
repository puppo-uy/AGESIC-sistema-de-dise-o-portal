<?php
include __DIR__ . '/../../inc/muestra-colores.php';

// Colores cromáticos (primitivos) definidos en scss/tokens/_primitives.scss.
// No existen como custom property en tiempo de ejecución, por eso los valores
// se listan acá directamente en vez de resolverse en vivo con JS.
$colores_cromaticos = [
	'rojo' => [
		'25' => '#fff3f3', '50' => '#ffe6e6', '100' => '#ffb0b0', '200' => '#ff8a8a',
		'300' => '#ff5454', '400' => '#ff3333', '500' => '#ff0000', '600' => '#e80000',
		'700' => '#b50000', '800' => '#8c0000', '900' => '#6b0000', '950' => '#350000',
	],
	'naranja' => [
		'25' => '#fff8f3', '50' => '#fff0e6', '100' => '#ffd1b0', '200' => '#ffba8a',
		'300' => '#ff9b54', '400' => '#ff8733', '500' => '#ff6900', '600' => '#e86000',
		'700' => '#b54b00', '800' => '#8c3a00', '900' => '#6b2c00', '950' => '#351600',
	],
	'verde' => [
		'25' => '#f8f9f4', '50' => '#f1f3e8', '100' => '#d5dbb6', '200' => '#c0c993',
		'300' => '#a4b162', '400' => '#92a144', '500' => '#778a15', '600' => '#6c7e13',
		'700' => '#54620f', '800' => '#414c0c', '900' => '#323a09', '950' => '#191d04',
	],
	'verde-agua' => [
		'25' => '#f3f9f9', '50' => '#e6f2f3', '100' => '#b0d7db', '200' => '#8ac3c9',
		'300' => '#54a8b1', '400' => '#3397a1', '500' => '#007d8a', '600' => '#00727e',
		'700' => '#005962', '800' => '#00454c', '900' => '#00353a', '950' => '#001a1d',
	],
	'celeste' => [
		'25' => '#f3faff', '50' => '#e6f5ff', '100' => '#b0dfff', '200' => '#8ad0ff',
		'300' => '#54bbff', '400' => '#33adff', '500' => '#0099ff', '600' => '#008be8',
		'700' => '#006db5', '800' => '#00548c', '900' => '#00406b', '950' => '#002035',
	],
	'fucsia' => [
		'25' => '#faf3f9', '50' => '#f4e7f2', '100' => '#deb5d7', '200' => '#cd92c4',
		'300' => '#b760a9', '400' => '#a94198', '500' => '#93117e', '600' => '#860f73',
		'700' => '#680c59', '800' => '#510945', '900' => '#3e0735', '950' => '#1f031a',
	],
	'violeta' => [
		'25' => '#f6f3f8', '50' => '#ede7f0', '100' => '#c6b3d0', '200' => '#aa8eba',
		'300' => '#845b9a', '400' => '#6c3b86', '500' => '#470a68', '600' => '#41095f',
		'700' => '#32074a', '800' => '#270639', '900' => '#1e042c', '950' => '#0f0216',
	],
];
?>

<div class="muestra-colores">

	<?php foreach ($colores_cromaticos as $familia => $pasos): ?>
	<div>
		<p class="titulo--sm"><?php echo ucwords($familia, '-'); ?></p>
		<div class="muestra-colores__fila">

			<?php foreach ($pasos as $paso => $hex): ?>
			<div class="muestra-color">
				<span class="muestra-color__chip" style="background: <?php echo $hex; ?>;"></span>
				<div class="muestra-color__info">
					<span class="muestra-color__hex"><?php echo $hex; ?></span>
					<code class="muestra-color__nombre"><?php echo $familia; ?>--<?php echo $paso; ?></code>
				</div>
			</div>
			<?php endforeach; ?>

		</div>
	</div>
	<?php endforeach; ?>

</div>

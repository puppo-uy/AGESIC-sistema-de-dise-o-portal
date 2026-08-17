<?php
// Petición AJAX: devuelve únicamente el fragmento del componente pedido.
if (isset($_GET['ajax']) && isset($_GET['comp'])) {
	$comp = preg_replace('/\.php$/i', '', $_GET['comp']);

	// Validación básica para prevenir directory traversal
	if ($comp && preg_match('/^[a-zA-Z0-9\-\/]+$/', $comp)) {
		$file = __DIR__ . '/comp/' . $comp . '.php';
		if (file_exists($file)) {
			include $file;
		} else {
			http_response_code(404);
			echo 'Componente no encontrado: ' . htmlspecialchars($comp);
		}
	} else {
		http_response_code(400);
		echo 'Nombre de componente inválido';
	}
	exit;
}

// Escaneo recursivo de biblioteca/comp para armar el listado buscable.
function listarComponentes($dir, $base = '') {
	$items = [];
	foreach (scandir($dir) as $entry) {
		if ($entry === '.' || $entry === '..') continue;
		$path = $dir . '/' . $entry;
		if (is_dir($path)) {
			$items = array_merge($items, listarComponentes($path, $base . $entry . '/'));
		} elseif (substr($entry, -4) === '.php') {
			$items[] = $base . substr($entry, 0, -4);
		}
	}
	return $items;
}

$componentes = listarComponentes(__DIR__ . '/comp');
sort($componentes);

$title = 'Muestrario de componentes';
?>

<?php include "inc/head.php"; ?>

<style>
	.muestrario { max-width: 1100px; margin: 0 auto; padding: 32px 24px; }
	.muestrario-buscador { margin-bottom: 16px; }
	.muestrario-buscador input {
		width: 100%; box-sizing: border-box; padding: 10px 14px;
		font-size: 16px; border: 1px solid #ccc; border-radius: 6px;
	}
	.muestrario-listado {
		display: flex; flex-wrap: wrap; gap: 8px; margin-bottom: 24px;
	}
	.muestrario-item {
		padding: 6px 12px; border: 1px solid #ccc; border-radius: 20px;
		background: #fff; cursor: pointer; font-size: 13px; font-family: inherit;
	}
	.muestrario-item:hover { border-color: #25418E; }
	.muestrario-item--activo { background: #25418E; color: #fff; border-color: #25418E; }
	.muestrario-vacio { display: none; color: #666; font-style: italic; }
	.muestrario-preview {
		border: 1px dashed #ccc; border-radius: 8px; padding: 24px; min-height: 120px;
	}
	.muestrario-preview-titulo {
		font-size: 12px; text-transform: uppercase; letter-spacing: .04em;
		color: #666; margin: 0 0 16px;
	}
</style>

<main id="contenido" class="muestrario">
	<h1><?php echo $title; ?></h1>

	<div class="muestrario-buscador">
		<label for="buscador-input">Buscar componente</label>
		<input type="search" id="buscador-input" autocomplete="off" placeholder="Ej: alerta, boton-primario, texto/titulo-lg...">
	</div>

	<div class="muestrario-listado" id="listado-componentes">
		<?php foreach ($componentes as $comp): ?>
			<button type="button" class="muestrario-item" data-comp="<?php echo htmlspecialchars($comp); ?>">
				<?php echo htmlspecialchars($comp); ?>
			</button>
		<?php endforeach; ?>
		<p class="muestrario-vacio" id="sin-resultados">Sin resultados</p>
	</div>

	<div class="muestrario-preview" id="preview-componente">
		<p>Seleccioná un componente de la lista para visualizarlo acá.</p>
	</div>
</main>

<script>
(function () {
	var input = document.getElementById('buscador-input');
	var items = Array.prototype.slice.call(document.querySelectorAll('.muestrario-item'));
	var sinResultados = document.getElementById('sin-resultados');
	var preview = document.getElementById('preview-componente');

	input.addEventListener('input', function () {
		var term = input.value.toLowerCase();
		var visibles = 0;
		items.forEach(function (item) {
			var coincide = item.getAttribute('data-comp').toLowerCase().indexOf(term) !== -1;
			item.style.display = coincide ? '' : 'none';
			if (coincide) visibles++;
		});
		sinResultados.style.display = visibles === 0 ? '' : 'none';
	});

	items.forEach(function (item) {
		item.addEventListener('click', function () {
			var comp = item.getAttribute('data-comp');

			items.forEach(function (i) { i.classList.remove('muestrario-item--activo'); });
			item.classList.add('muestrario-item--activo');

			preview.innerHTML = '<p>Cargando...</p>';

			fetch('index-componentes.php?ajax=1&comp=' + encodeURIComponent(comp))
				.then(function (res) { return res.text(); })
				.then(function (html) {
					preview.innerHTML = '<p class="muestrario-preview-titulo">' + comp + '</p>' + html;

					// Los <script> insertados vía innerHTML no se ejecutan; se reemplazan por
					// copias nuevas para forzar su ejecución.
					preview.querySelectorAll('script').forEach(function (viejo) {
						var nuevo = document.createElement('script');
						if (viejo.src) {
							nuevo.src = viejo.src;
						} else {
							nuevo.textContent = viejo.textContent;
						}
						viejo.replaceWith(nuevo);
					});

					// Reinicializa componentes con JS (modales, desplegables) cargados dinámicamente.
					if (window.SistemaGravity) {
						preview.querySelectorAll('dialog[data-modal]').forEach(function (el) {
							new window.SistemaGravity.Modal(el);
						});
						preview.querySelectorAll('[data-menu]').forEach(function (el) {
							new window.SistemaGravity.Dropdown(el);
						});
					}
				})
				.catch(function () {
					preview.innerHTML = '<p>Error al cargar el componente.</p>';
				});
		});
	});
})();
</script>

<?php include "inc/foot.php"; ?>

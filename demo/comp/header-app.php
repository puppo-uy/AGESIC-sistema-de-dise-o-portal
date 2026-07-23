<header class="header--app">
	
	<a href="#" class="Header-logo" >
		<svg class="icono icono--principal">
			<use href="#icono-exito--relleno"></use>
		</svg>
		<span class="Logo-nombre">Nombre de aplicación</span>
	</a>

	<div class="Header-acciones">
		<button class="boton boton--enlace boton--icono" id="boton-hamburguesa" aria-controls="barra-lateral" aria-expanded="false" aria-label="Abrir menú">
			<svg class="icono">
				<use href="#icono-menu-hamburguesa"></use>
			</svg>
			<span>Menú principal</span>
		</button>

		<div class="Header-usuario">
			<div class="desplegable-wrapper">
				<button class="boton boton--enlace boton--icono" data-menu-trigger data-menu-target="header-notificaciones" aria-expanded="false">
					<svg class="icono">
						<use href="#icono-notificacion--lineal"></use>
					</svg>
					<span class="tag tag--advertencia tag--indicador tag--indicador--numerico">
							<span>8</span>
					</span>
					<span>Acción botón enlace</span>
				</button>
				<?php 
					$idDropdown = 'header-notificaciones';
					include "comp/desplegable-notificaciones.php"; 
				?>
			</div>
			
			<div class="desplegable-wrapper">
				<button class="boton boton--enlace" id="boton-usuario" data-menu-trigger data-menu-target="header-usuario" aria-expanded="false">
					<?php if (isset($_GET['log-out'])) : ?>
					
					<svg class="icono">
						<use href="#icono-usuario--lineal"></use>
					</svg>
					<span class="etiqueta">Ingresar</span>
					
					<?php else: ?>

					<span class="icono icono--m icono--iniciales icono--principal">
						<span>AB</span>
					</span>
					<span class="etiqueta">Alan Bueno</span>

					<?php endif; ?>
				</button>
				<?php 
					$idDropdown = 'header-usuario';
					include "comp/desplegable-usuario.php"; 
				?>
			</div>
		
		</div>	
	</div>
</header>
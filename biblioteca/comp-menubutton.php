<?php
  $title = 'Menú desplegable';
  $section = 'componentes';
  $subsection = 'opcion-06'; 
?>

<?php include "inc/head.php"; ?>

<div class="app">
	
	<?php include "comp/header-app.php" ?>

  <div class="layout layout--app">

    <?php include "comp/nav-lateral.php" ?>
		
		<!-- La lógica JS de los menús desplegables ha sido migrada a scripts/components/dropdown.js y se ejecuta globalmente a través de scripts/main.js -->

    <main id="contenido">
			
			<!-- Breadcrumb -->	
			<?php include "comp/breadcrumb.php"; ?>
			
      <h1><?php echo $title; ?></h1>
			
			<h2 class="u-mt5 u-mb3">Menu opciones</h2>	
			<?php /*include "comp/menubutton.php";*/ ?>
			
			<ul class="botonera">
				<li>
					<button class="boton boton--secundario boton--icono">
						<svg class="icono">
							<use href="#icono-abrir-detalle--lineal"></use>
						</svg>
						<span>Expandir</span>
					</button>	
				</li>
				<li>
					<button class="boton boton--secundario boton--icono">
						<svg class="icono">
							<use href="#icono-edicion-rapida--lineal"></use>
						</svg>
						<span>Acción botón</span>
					</button>
				</li>	
				<li>
					<button class="boton boton--secundario boton--icono" disabled="">
						<svg class="icono">
							<use href="#icono-borrar--lineal"></use>
						</svg>
						<span>Acción botón</span>
					</button>
				</li>	
				<li>
					<div class="desplegable-wrapper">
						<button class="boton boton--secundario boton--icono" data-menu-trigger data-menu-target="menu-opciones" aria-expanded="false">
							<svg class="icono">
								<use href="#icono-mas-opciones--lineal"></use>
							</svg>
							<span>Acción botón</span>
						</button>
						<?php 
							$idDropdown = 'menu-opciones';
							include "comp/desplegable-opciones.php"; 
						?>
					</div>
				</li>
			</ul>		
			
			<h2 class="u-mt5 u-mb3">Menu notificaciones</h2>
			
			<div class="desplegable-wrapper">
				<button class="boton boton--enlace boton--icono" data-menu-trigger data-menu-target="menu-notificaciones" aria-expanded="false">
					<svg class="icono">
						<use href="#icono-notificacion--lineal"></use>
					</svg>
					<span class="tag tag--advertencia tag--indicador tag--indicador--numerico">
							<span>8</span>
					</span>
					<span>Acción botón enlace</span>
				</button>
				<?php 
					$idDropdown = 'menu-notificaciones';
					include "comp/desplegable-notificaciones.php"; 
				?>
			</div>
			
			
			<h2 class="u-mt5 u-mb3">Menu usuario</h2>
			<div class="desplegable-wrapper">
				<button class="boton boton--enlace" data-menu-trigger data-menu-target="menu-usuario" aria-expanded="false">
					<span class="icono icono--m icono--iniciales icono--principal">
						<span>AB</span>
					</span>
					<span class="etiqueta">Alan Bueno</span>
				</button>
				<?php 
					$idDropdown = 'menu-usuario';
					include "comp/desplegable-usuario.php"; 
				?>
			</div>
			
				
			
    </main>

  </div>

</div>

<?php include "inc/foot.php"; ?>
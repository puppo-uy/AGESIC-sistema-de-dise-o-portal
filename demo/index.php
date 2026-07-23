<?php
  $title = 'Inicio';
  $section = 'inicio';
  $subsection = "";
?>

<?php include "inc/head.php"; ?>

<div class="app">

	<?php include "comp/header-app.php" ?>

  <div class="layout layout--app">

    <?php include "comp/nav-lateral.php" ?>

    <main id="contenido">
			
			<!-- Breadcrumb -->	
			<?php include "comp/breadcrumb.php"; ?>
			
			<div class="mod-flex u-mb4">
				<h1 class="u-mb0"><?php echo $title; ?></h1>
				
				<button class="boton boton--primario">
						<svg class="icono icono--m">
								<use href="#icono-mas--lineal"></use>
						</svg>
						<span>Nuevo registro</span>
				</button>
			</div>
			
      

			
			<!-- Tabla treegrid -->
			<?php include "comp/tablas/treegrid.php"; ?>

			
    </main>

  </div>


</div>

<?php include "inc/foot.php"; ?>
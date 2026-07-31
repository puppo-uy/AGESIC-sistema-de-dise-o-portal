<?php
  $title = 'Botones';
  $section = 'componentes';
  $subsection = 'opcion-02'; 
?>

<?php include "inc/head.php"; ?>


<div class="app">

	<?php include "comp/header-app.php" ?>

  <div class="layout layout--app">

    <?php include "comp/nav-lateral.php" ?>

    <main id="contenido">
			
			<!-- Breadcrumb -->	
			<?php include "comp/breadcrumb.php"; ?>
			
      <h1><?php echo $title; ?></h1>
			
			
			<h2 class="u-mt5 u-mb2">Botón primario</h2>
			<div>
				<!-- Botón primario -->
				<?php include "comp/botones/boton-primario.php"; ?>
			</div>

			
			<h2 class="u-mt5 u-mb2">Botón secundario</h2>
			<div>
				<!-- Botón secundario -->
				<?php include "comp/botones/boton-secundario.php"; ?>
			</div>
			

			<h2 class="u-mt5 u-mb2">Botón enlace</h2>
			<div>
				<!-- Botón enlace -->
				<?php include "comp/botones/boton-enlace.php"; ?>
			</div>
			

			<h2 class="u-mt5 u-mb2">Enlace</h2>
			<div style="display: flex; align-items: center; gap: 24px;">
				<!-- Enlace -->
				<?php include "comp/botones/enlace.php"; ?>
			</div>
			
			
			<h2 class="u-mt5">Grupo de botones</h2>
			<div style="margin: var(--espaciado-16);">
				<!-- Botonera -->
				<?php include "comp/botones/botonera.php"; ?>
			</div>
			
			<h2>Botón con desplegable</h2>
			<div style="margin: var(--espaciado-16);">
				<!-- Botón con desplegable -->
				<?php include "comp/botones/boton-desplegable.php"; ?>
			</div>
			
			<h2 class="u-mt5">Con indicadores</h2>

			<div style="margin: var(--espaciado-16);">
			<?php include "comp/botones/indicadores.php" ?>
			</div>

			
    </main>

  </div>

</div>

<?php include "inc/foot.php"; ?>
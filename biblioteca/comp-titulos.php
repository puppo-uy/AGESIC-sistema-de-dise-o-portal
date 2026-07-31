<?php
  $title = 'Títulos y textos';
  $section = 'componentes';
  $subsection = 'opcion-01'; 
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
			
			<h2 class="u-mt5">Títulos</h2>
			
			<!-- Título 1 - XXL -->
			<?php include "comp/texto/titulo-xxl.php"; ?>

			<!-- Título 2 - XL -->
			<?php include "comp/texto/titulo-xl.php"; ?>

			<!-- Título 3 - LG -->
			<?php include "comp/texto/titulo-lg.php"; ?>

			<!-- Título 4 - MD -->
			<?php include "comp/texto/titulo-md.php"; ?>

			<!-- Título 5 - SM -->
			<?php include "comp/texto/titulo-sm.php"; ?>

			<!-- Título 6 - XS -->
			<?php include "comp/texto/titulo-xs.php"; ?>
			

			<h2 class="u-mt5">Párrafos</h2>
			<!-- Párrafo XL -->
			<?php include "comp/texto/parrafo-xl.php"; ?>

			<!-- Párrafo LG -->
			<?php include "comp/texto/parrafo-lg.php"; ?>

			<!-- Párrafo MD -->
			<?php include "comp/texto/parrafo-md.php"; ?>

			<!-- Párrafo SM -->
			<?php include "comp/texto/parrafo-sm.php"; ?>

			<!-- Párrafo XS -->
			<?php include "comp/texto/parrafo-xs.php"; ?>
			
			
			<h2 class="u-mt5">Listas y sublistas</h2>
			<h3 class="u-mt4">Listas de viñetas</h3>
			<?php include "comp/texto/lista.php"; ?>
			
			<h3 class="u-mt4">Lista numeradas</h3>
			<?php include "comp/texto/lista-numerada.php"; ?>
			
			</main>
  </div>

</div>

<?php include "inc/foot.php"; ?>
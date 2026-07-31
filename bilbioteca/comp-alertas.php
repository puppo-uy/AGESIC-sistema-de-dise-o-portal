<?php
  $title = 'Alertas y tags';
  $section = 'componentes';
  $subsection = 'opcion-04'; 
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
			
			<h2>Alertas</h2>
			
			<h3 class="u-mt5">Alerta simple</h3>
			<!-- Alertas -->
			<?php include "comp/alerta.php"; ?>
			
			<h3 class="u-mt5">Alerta completa</h3>
			<?php include "comp/alerta-completa.php"; ?>
			
			<h3 class="u-mt5">Alerta emergente</h3>
			<?php include "comp/alerta-emergente.php"; ?>
			
			<h2 class="u-mt5">Tags (Etiquetas)</h2>
			<!-- Tags -->
			<?php include "comp/tag.php"; ?>

    </main>

  </div>

</div>

<?php include "inc/foot.php"; ?>
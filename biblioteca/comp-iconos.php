<?php
  $title = 'Íconos';
  $section = 'componentes';
  $subsection = 'opcion-03'; 
?>

<?php include "inc/head.php"; ?>


<div class="app">
	
	<?php include "comp/header-app.php" ?>

  <div class="layout layout--app">

    <?php include "comp/nav-lateral.php" ?>

    <main id="contenido">
			
			<!-- Breadcrumb -->	
			<?php include "comp/breadcrumb.php"; ?>
			
      <h1 style="margin-bottom: var(--espaciado-24);"><?php echo $title; ?></h1>
			
			<!-- Icono -->
			<?php include "comp/icono/icono-lineal.php"; ?>
			<?php include "comp/icono/icono-relleno.php"; ?>
			<?php include "comp/icono/icono-tamanos.php"; ?>
			<?php include "comp/icono/icono-colores.php"; ?>
			<?php include "comp/icono/icono-usuario.php"; ?>
			
    </main>

  </div>

</div>

<?php include "inc/foot.php"; ?>
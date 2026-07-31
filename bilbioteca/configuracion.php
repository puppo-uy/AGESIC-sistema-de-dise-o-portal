<?php
  $title = 'Configuración';
  $section = 'configuracion';
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
			
      <h1 style="margin-bottom: var(--espaciado-24);"><?php echo $title; ?></h1>
		</main>

	</div>

</div>

<?php include "inc/foot.php"; ?>
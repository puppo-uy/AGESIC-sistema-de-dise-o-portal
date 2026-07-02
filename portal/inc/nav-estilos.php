<nav class="Page-nav Page-nav--mf Page-nav--only">
	<div class="Page-navWrap">
		<a class="Page-navTitle collapsed" data-toggle="collapse" href="#nav-target" role="button">Estilos globales <span class="Page-navStatus"></span></a>
	</div>
	<ul id="nav-target" class="Page-navList collapse">
		<li class="<?php if($activeItem == 'colores') echo 'is-active'; ?>"><a href="sist-doc-colores.php">Colores</a></li>
		<li class="<?php if($activeItem == 'espaciados') echo 'is-active'; ?>"><a href="sist-doc-espaciados.php">Espaciados</a></li>
		<li class="<?php if($activeItem == 'sombras') echo 'is-active'; ?>"><a href="sist-doc-sombras.php">Sombras</a></li>
		<li class="<?php if($activeItem == 'bordes') echo 'is-active'; ?>"><a href="sist-doc-bordes.php">Bordes</a></li>
		<li class="<?php if($activeItem == 'tipografias') echo 'is-active'; ?>"><a href="sist-doc-tipografias.php">Tipografías</a></li>
		<li class="<?php if($activeItem == 'estructura') echo 'is-active'; ?>"><a href="sist-doc-estructura.php">Grillas y módulo flex</a></li>
	</ul>
</nav>

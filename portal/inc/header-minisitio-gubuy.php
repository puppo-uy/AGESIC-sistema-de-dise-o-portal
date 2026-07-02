<header class="Header Header--slim Header--minisitio">
<!-- Igual a header-minisitio.php pero con Header-site vacio y sin Site-menu -->
	
	<div class="Header-top">

		<div class="Container">

			<div class="Header-site">
			</div>

			<div class="Header-login">

				<?php if (isset($_GET['lang'])) : ?>

					<!-- Menú desplegable de idioma -->
					<?php include "../recursos/inc/cabezal/dropdown-lang.php"; ?>

				<?php endif ?>

				<!-- Usuario Móvil -->
				<div class="user-access u-md-hide">
					<button class="link-user-access js-gubuyMegamenu">

						<?php if (isset($_GET['user'])) : ?>

						<span class="Comment-avatar Comment-avatar--small u-bgColor1"><span>MB</span></span>

						<span class="Brand Brand--blue Brand--sm">
							<span class="Brand-text">gub.uy</span>
						</span>

						<?php else: ?>

						<span class="Icon Icon--user--blue"></span>
						<span class="Brand Brand--blue Brand--sm">
							<span class="Brand-text">gub.uy</span>
						</span>

						<?php endif; ?>

					</button>
				</div>
				<!-- -->

			</div>
		</div>

	</div>

	<div class="Header-body">

		<div class="Container">

			<div class="Header-logo">
				<!-- Logo -->
				<a href="./">
					<div class="Logo">
						<img class="Logo-image" src="../recursos/img/60x60.png" alt="">
						<div class="Logo-text">
							<h1 class="Logo-title">
									<span class="Logo-role">Instituto Nacional</span>
									<span>de Minisitios en Gubuy</span>
							</h1>
						</div>
					</div>
				</a>
			</div>

			<div class="Header-right">

				<div class="NavSearch-wrapper">
                
					<!-- Menú -->
					<nav class="Nav--flex js-navDropdown show" id="menu">

						<ul>
							<li>
								<!-- Ejemplo de item de menú seleccionado -->
								<!-- <a href="#" id="item-1-minisitio" class="Nav-inside">Formato Carpeta</a> -->
								<a href="#" id="item-1-minisitio">Formato Carpeta</a>
							</li>
							<li>
								<a href="#" id="item-2-minisitio">Formato Documento</a>
							</li>
							<li>
								<a href="#" id="item-3-minisitio">Elemento de menú</a>
							</li>
							<li>
								<a href="#" id="item-4-minisitio">Programas</a>
							</li>
							<li>
								<a href="#" id="item-5-minisitio">Publicaciones</a>
							</li>
						</ul>
					</nav>
					
					<!-- Botón abrir buscador -->
					<div class="searchButtonWrap-md" id="searchButtonWrap-md">
						<button class="Button Button--inverse Button--w-icon" aria-label="Abrir buscador y buscar">
							<svg xmlns="http://www.w3.org/2000/svg" width="20.28" height="20.279" viewBox="0 0 20.28 20.279">
								<path fill="#6D6E70" d="M8.361 16.722C3.75 16.722 0 12.971 0 8.361S3.75 0 8.361 0c4.611 0 8.363 3.75 8.363 8.361s-3.752 8.361-8.363 8.361zm0-15.222C4.578 1.5 1.5 4.578 1.5 8.361s3.078 6.861 6.861 6.861c3.784 0 6.863-3.078 6.863-6.861S12.145 1.5 8.361 1.5z"/>
								<path fill="#6D6E70" d="M14.2 13.139l6.08 6.08-1.06 1.06-6.08-6.08z"/>
							</svg><span class="u-hideVisually">Abrir buscador y</span> Buscar
						</button>
					</div>

					<!-- Buscador -->
					<div class="Header-search">
						<div class="navButtonWrap-md">
							<button class="Button Button--primary Button--w-icon" id="navButtonWrap-md" aria-label="Abrir menú">
							<svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 20 21" xml:space="preserve">
									<path d="M0,17.2v-1.7h20v1.7H0z M0,11.3V9.7h20v1.7H0z M0,5.5V3.8h20v1.7H0z"/>
							</svg>
							Menú
							</button>
						</div>

						<div class="search-form" id="search-form">
							<div class="Search">
								<form action="./">
									<label for="search" class="u-hideVisually">Buscador:</label>
									<input id="search" class="Search-input" type="search" placeholder="Buscar en INM">
									<label for="Search-checkbox" class="Search-checkboxLabel"><input type="checkbox" id="Search-checkbox" value="INM" checked="">INM</label> 
									<button class="Search-button" type="submit">Buscar</button>
								</form>
							</div>
						</div>
					</div>

				</div>	

				<!-- Botónes para llamar al menú/buscador en móvil -->
				<?php include "../recursos/inc/cabezal/nav-search-button-mobile.php"; ?>

				<!-- Usuario Escritorio -->  
				<div class="user-access">
					<button class="link-user-access js-gubuyMegamenu">
						
						<?php if (isset($_GET['user'])) : ?>
							<span  class="Comment-avatar u-bgColor1"><span>MB</span></span>
						<?php  else: ?>
							<span class="Icon Icon--user--blue"></span>
						<?php  endif; ?>
						<span><span class="u-hideVisually">Desplegar menú de </span>gub.uy</span>
						
					</button>
				</div>
				<!-- -->
				
			</div>
			
		</div>
		
	</div>	
			
	<!-- Megamenú de Gubuy -->
	<?php include "../recursos/inc/cabezal/gubuy-megamenu.php"; ?>

</header>

<header class="Header Header--slim">
    <div class="Header-top">

        <div class="Container">

            <div class="Header-site"></div>
            
            <div class="Header-login">

							<?php if (isset($_GET['lang'])) : ?>

								<!-- Menú desplegable de idioma -->
								<?php include "../recursos/inc/cabezal/dropdown-lang.php"; ?>

							<?php endif ?>

						
            </div>
					
        </div>

    </div>

    <div class="Header-body">

        <div class="Container">

            <div class="Header-logo">

                <!-- Logo -->
                <a href="index.php">
									<div class="Logo">
										<img class="Logo-image" src="../recursos/assets/iso-agesic.png" alt=""><!---->
										<div class="Logo-text">
											<h1 class="Logo-title">
												<span class="Logo-role">Sistema de Diseño</span>
												<span>del Estado Uruguayo</span>
											</h1>
										</div>
									</div>
                </a>
							
            </div>

            <div class="Header-right">

							<div class="NavSearch-wrapper">
                
								<nav class="Nav--flex js-navDropdown show" id="menu">
									<ul>
										<li>
											<a href="index.php" id="item-1">Sobre este Sistema de diseño</a>
										</li>
										<li>
											<a href="#" id="item-2" class="NavToggle-item">Estilos globales</a>
											<div class="subnav">
												<ul>
													<li><a href="sist-doc-colores.php">Colores</a></li>
													<li><a href="sist-doc-espaciados.php">Espaciados</a></li>
													<li><a href="sist-doc-sombras.php">Sombras</a></li>
													<li><a href="sist-doc-bordes.php">Bordes</a></li>
													<li><a href="sist-doc-tipografias.php">Tipografías</a></li>
													<li><a href="sist-doc-estructura.php">Grillas y módulo flex</a></li>
												</ul>
											</div>
										</li>
										<li>
											<a href="#" id="item-3" class="NavToggle-item">Componentes</a>
											<div class="subnav">
												<ul>
													<li><a href="sist-doc-iconos.php">Íconos</a></li>
													<li><a href="sist-doc-textos.php">Textos</a></li>
													<li><a href="sist-doc-navegacion.php">Navegación</a></li>
													<li><a href="sist-doc-mensajes-dialogos.php">Mensajes y diálogos</a></li>
													<li><a href="sist-doc-formularios.php">Formularios</a></li>
													<li><a href="sist-doc-tablas.php">Tablas</a></li>
													<li><a href="sist-doc-acciones.php">Acciones</a></li>
												</ul>
											</div>
										</li>
									</ul>
								</nav>

								<!-- Botón abrir buscador 
								<div class="searchButtonWrap-md" id="searchButtonWrap-md">
									<button class="Button Button--inverse Button--w-icon" aria-label="Abrir buscador y buscar">
										<svg xmlns="http://www.w3.org/2000/svg" width="20.28" height="20.279" viewBox="0 0 20.28 20.279">
											<path fill="#6D6E70" d="M8.361 16.722C3.75 16.722 0 12.971 0 8.361S3.75 0 8.361 0c4.611 0 8.363 3.75 8.363 8.361s-3.752 8.361-8.363 8.361zm0-15.222C4.578 1.5 1.5 4.578 1.5 8.361s3.078 6.861 6.861 6.861c3.784 0 6.863-3.078 6.863-6.861S12.145 1.5 8.361 1.5z"/>
											<path fill="#6D6E70" d="M14.2 13.139l6.08 6.08-1.06 1.06-6.08-6.08z"/>
										</svg><span class="u-hideVisually">Abrir buscador y</span> Buscar
									</button>
								</div>
								-->

								<!-- Buscador -->
								<!--<div class="Header-search">
									
									Botón abrir menú 
									<div class="navButtonWrap-md">
										<button class="Button Button--primary Button--w-icon" id="navButtonWrap-md" aria-label="Abrir menú">
											<svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 20 21" xml:space="preserve">
												<path d="M0,17.2v-1.7h20v1.7H0z M0,11.3V9.7h20v1.7H0z M0,5.5V3.8h20v1.7H0z"/>
											</svg>Menú
										</button>
									</div>

									<div class="search-form" id="search-form">
										<div class="Search">
											<form action="./">
												<label for="search" class="u-hideVisually">Buscador:</label>
												<input id="search" class="Search-input" type="search" placeholder="Buscar en MGAP">
												<label for="Search-checkbox" class="Search-checkboxLabel"><input type="checkbox" id="Search-checkbox" value="MGAP" checked="">MGAP</label> 
												<button class="Search-button" type="submit">Buscar</button>
											</form>
										</div>
									</div>
								</div>
								 -->

							</div>
							
							<!-- Disparador del menú en móvil -->
							<div class="navButtonWrap u-md-hide">
								<button class="js-navTrigger Button--w-icon">
									<span class="menu">
										<svg fill="#000000" height="14" width="14" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 14 14">
											<path d="M13.1,7.7H0.9C0.5,7.7,0.2,7.4,0.2,7s0.3-0.8,0.8-0.8h12.1c0.4,0,0.8,0.3,0.8,0.8S13.5,7.7,13.1,7.7z"/>
											<path d="M13.1,11.8H0.9c-0.4,0-0.8-0.3-0.8-0.8s0.3-0.8,0.8-0.8h12.1c0.4,0,0.8,0.3,0.8,0.8S13.5,11.8,13.1,11.8z"/>
											<path d="M13.1,3.7H0.9C0.5,3.7,0.2,3.4,0.2,3s0.3-0.8,0.8-0.8h12.1c0.4,0,0.8,0.3,0.8,0.8S13.5,3.7,13.1,3.7z"/>
										</svg>
										<span class="u-hideVisually">Abrir </span>
									</span>
									<span class="close">
										<svg fill="#000000" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 14 14">
											<path d="M1.9,12.7c-0.2,0-0.3-0.1-0.4-0.2c-0.2-0.2-0.2-0.6,0-0.9L11.6,1.5c0.2-0.2,0.6-0.2,0.9,0c0.2,0.2,0.2,0.6,0,0.9L2.4,12.5 C2.3,12.6,2.1,12.7,1.9,12.7z"/>
											<path d="M12,12.6c-0.2,0-0.3-0.1-0.4-0.2l-10-10c-0.2-0.2-0.2-0.6,0-0.9s0.6-0.2,0.9,0l10,10c0.2,0.2,0.2,0.6,0,0.9 C12.3,12.5,12.1,12.6,12,12.6z"/>
										</svg>
										<span class="u-hideVisually">Cerrar </span>
									</span>	
									<span>Menú</span>
								</button>
							</div>

							<!-- Botónes para llamar al menú/buscador en móvil -->
							<?php /*include "../recursos/inc/cabezal/nav-search-button-mobile.php";*/ ?>

							<!-- Usuario Escritorio -->  
							<!-- 
							<div class="user-access">
								<button class="link-user-access js-gubuyMegamenu" aria-expanded="false">

									<?php /* if (isset($_GET['user'])) :*/ ?>
									
										<span class="Comment-avatar u-bgColor1">
											 <span>MB</span>
										</span>
									
									<?php /* else:*/ ?>
									
										<span class="Icon Icon--user--blue"></span>
									
									<?php /* endif;*/ ?>
									
									<span><span class="u-hideVisually">Desplegar menú de </span>gub.uy</span>

								</button>
							</div>
							--->

            </div>

        </div>

    </div>
	
	<!-- Megamenú de Gubuy -->
	<?php /*include "../recursos/inc/cabezal/gubuy-megamenu.php";*/ ?>

</header>
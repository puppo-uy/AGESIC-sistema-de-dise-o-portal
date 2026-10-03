<div class="gubuy-mega-menu" id="gubuy-mega-menu">
	<div class="Container">

		<div class="head-mega-menu">    
			<a href="#" class="close-mega-menu">
				<span class="Icon Icon--close--white"></span>
				<span class="u-hideVisually">Cerrar menú</span>
			</a>     
		</div>

		<div class="body-mega-menu">
			<div class="Grid">
					<div class="Grid-item u-md-size1of4 user-gubuy">

						<?php if (isset($_GET['user'])) : ?>

						<!-- Menú desplegable de usuario logueado -->
						<?php include "../recursos/inc/cabezal/dropdown-user.php"; ?>

						<?php else: ?>

						<a href="?user" class="link-gubuy-access">
							<span class="Icon Icon--user--white"></span>
							<span>Ingresar a Perfil gub.uy</span>
						</a>

						<?php endif; ?>
						
					</div>
				
					<div class="Grid-item u-md-size3of4">
						<div class="Grid search-gubuy">
							<div class="Grid-item u-md-size1of5">
								<a href="./home-gubuy.php">
									<span class="Brand Brand--white">
										<span class="Brand-text">gub.uy</span>
									</span>
								</a>
							</div>
							<div class="Grid-item u-md-size4of5">
								<form action="./">
									<input class="Search-input" type="search" placeholder="Buscar en gub.uy" aria-label="Buscador de gub.uy">
									<button class="Search-button" type="submit">Buscar en gub.uy</button>
								</form>
							</div>
						</div>

						<div class="Nav-megamenu js-navDropdown" id="nav-menu">
							<ul>
								<li>
									<a href="#" id="item-meg-1" tabindex="-1" class="NavToggle-item">Organismos</a>
									<div class="subnav">
											<ul aria-labelledby="item-meg-1">
												<li><a href="">Presidencia</a></li>
												<li><a href="">Ministerios</a></li>
												<li><a href="">Gobierno departamental</a></li>
												<li><a href="">Otros organismos</a></li>
												<li><a href="">Iniciativas Interinstitucionales</a></li>
											</ul>
									</div>
								</li>
								<li>
									<a href="#" id="item-meg-2" tabindex="-1" class="NavToggle-item">Servicios</a>
									<div class="subnav">
											<ul aria-labelledby="item-meg-2">
												<li><a href="">Trámites y servicios</a></li>
												<li><a href="">Atención a la ciudadanía</a></li>
												<li><a href="">Información por temas</a></li>
											</ul>
									</div>
								</li>
								<li>
									<a href="#" id="item-meg-3" tabindex="-1" class="NavToggle-item">Participación</a>
									<div class="subnav">
											<ul aria-labelledby="item-meg-3">
												<li><a href="">Gobierno Abierto</a></li>
												<li><a href="">Participación ciudadana</a></li>
												<li><a href="">Ciudadanía Digital</a></li>
											</ul>
									</div>
								</li>
								<li>
									<a href="#" id="item-meg-4" tabindex="-1" class="NavToggle-item">Datos y estadísticas</a>
									<div class="subnav">
											<ul aria-labelledby="item-meg-4">
													<li><a href="">Datos abiertos</a></li>
													<li><a href="">Observatorios</a></li>
											</ul>
									</div>
								</li>
								<li>
									<a href="#" id="item-meg-5" tabindex="-1" class="NavToggle-item">Comunicación</a>
									<div class="subnav">
											<ul aria-labelledby="item-meg-5">
													<li><a href="">Campañas</a></li>
													<li><a href="">Uruguay Presidencia</a></li>
											</ul>
									</div>
								</li>
							</ul>
						</div>
					</div>

				</div>
			</div>

	</div>
</div>
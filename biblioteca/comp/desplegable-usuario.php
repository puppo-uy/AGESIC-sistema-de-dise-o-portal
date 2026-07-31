<!-- Menu desplegable usuario -->
<?php $idDropdown = $idDropdown ?? 'menu-usuario'; ?>
<div class="menubutton menubutton--usuario Menu" data-menu="<?php echo $idDropdown; ?>" hidden>
	<div class="usuario-datos">
		<div class="usuario-nombre">
			<span class="icono icono--xxl icono--iniciales icono--principal">
				<span>AB</span>
			</span>
			<p class="parrafo-lg u-mb0">Alan Bueno Giménez</p>
		</div>

		<div class="usuario-metodo">
			<span class="icono icono--xl icono--iniciales icono--principal">
				<span>AB</span>
			</span>
			<div>
				<p class="u-mb0">Usuario Gub.uy</p>
				<span class="mod-flex flex-justify-start flex-items-center flex-dir-row flex-gap-4">
					<svg class="icono icono--xs">
						<use href="#icono-co-editor--lineal"></use>
					</svg>
					<p class="nivel-seguridad parrafo-sm u-mb0">Nivel intermedio</p>
				</span>
			</div>
		</div>

		<button class="boton boton--secundario">Administrar usuario</button>
	</div>

	<!-- Lista de opciones -->
	<ul>
		<li>
			<a class="enlace" href="#">
				<svg class="icono">
					<use href="#icono-home--lineal"></use>
				</svg>
				<span>Perfil gub.uy</span>
			</a>
		</li>
		<li>
			<a class="enlace" href="#">
				<svg class="icono">
					<use href="#icono-logout--lineal"></use>
				</svg>
				<span>Cerrar sesión</span>
			</a>
		</li>
	</ul>
</div>
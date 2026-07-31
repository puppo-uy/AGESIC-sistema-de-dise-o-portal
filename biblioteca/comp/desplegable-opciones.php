<!-- Menu desplegable acciones -->
<?php $idDropdown = $idDropdown ?? 'menu-opciones'; ?>
<div class="menubutton menubutton--acciones Menu" data-menu="<?php echo $idDropdown; ?>" hidden>
	<ul>
		<li>
			<a class="enlace" href="#">
				<svg class="icono">
					<use href="#icono-co-editor--lineal"></use>
				</svg>
				<span>Enlace opción 1</span>
			</a>
		</li>
		<li>
			<a class="enlace" href="#">
				<svg class="icono">
					<use href="#icono-descargar--lineal"></use>
				</svg>
				<span>Enlace opción 2</span>
			</a>
		</li>
		<li>
			<a class="enlace" href="#">
				<svg class="icono">
					<use href="#icono-hora--lineal"></use>
				</svg>
				<span>Historial de modificaciones</span>
			</a>
		</li>
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
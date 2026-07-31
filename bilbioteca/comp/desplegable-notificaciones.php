<!-- Menu button notificaciones -->
<?php $idDropdown = $idDropdown ?? 'menu-notificaciones'; ?>
<div class="menubutton menubutton--notificaciones Menu" data-menu="<?php echo $idDropdown; ?>" hidden>

	<!-- Nombre del contenido -->
	<h4>Notificaciones</h4>

	<!-- Lista de notificaciones -->
	<ul>
		<li>
			<a class="enlace" href="#">
				<svg class="icono">
					<use href="#icono-notificacion--relleno"></use>
				</svg>
				<span>Texto de notificación 1</span>
			</a>
		</li>
		<li>
			<a class="enlace" href="#">
				<svg class="icono">
					<use href="#icono-notificacion--lineal"></use>
				</svg>
				<span>Texto de notificación 2 más largo de lo que entra</span>
			</a>
		</li>
		<li>
			<a class="enlace" href="#">
				<svg class="icono">
					<use href="#icono-notificacion--lineal"></use>
				</svg>
				<span>Texto de notificación 3</span>
			</a>
		</li>
	</ul>

	<!-- Enlace al pie -->
	<a class="enlace enlace--s" href="#">
		<span>Todas las notificaciones</span>
		<svg class="icono">
			<use href="#icono-flecha-larga-derecha--lineal"></use>
		</svg>

	</a>
</div>
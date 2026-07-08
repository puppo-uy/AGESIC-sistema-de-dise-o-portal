<!-- Botón Desplegable Primario Estándar -->
<div class="boton-desplegable boton-desplegable--primario desplegable-wrapper">
	<button class="boton boton--primario">
		<svg class="icono">
			<use href="#icono-descargar--lineal"></use>
		</svg>
		<span>Descargar PDF</span>
	</button>	
	<button class="boton boton--primario boton--icono" type="button" data-menu-trigger data-menu-target="split-prim" aria-haspopup="true" aria-expanded="false">
		<svg class="icono down">
			<use href="#icono-colapsable-abajo--lineal"></use>
		</svg>
		<span class="u-sr-only">Más acciones</span>
	</button>
	<div class="menubutton menubutton--split" data-menu="split-prim" role="menu" hidden>
		<ul>
			<li>
				<button role="menuitem" class="boton boton--primario">
					<svg class="icono">
						<use href="#icono-descargar--lineal"></use>
					</svg>
					<span>Descargar CSV</span>
				</button>
			</li>	
			<li>
				<button role="menuitem" class="boton boton--primario">
					<svg class="icono">
						<use href="#icono-descargar--lineal"></use>
					</svg>
					<span>Descargar TXT</span>
				</button>
			</li>
		</ul>
	</div>
</div>

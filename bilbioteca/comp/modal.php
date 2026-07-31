<!-- Botón apertura Modal -->
<button class="boton boton--primario u-mb6" data-modal-open data-modal-target="modal-simple">
	<!--<svg class="icono">
		<use href="#icono-abrir-detalle--lineal"></use>
	</svg>-->
	<span>Abrir modal simple</span>
</button>

<!-- Modal -->
<dialog data-modal="modal-simple" aria-labelledby="titulo-modal-ejemplo">

	<div class="modal-contenido">

		<h2 class="modal-titulo" id="titulo-modal-ejemplo">Título del modal simple</h2>

		<p>Esto es un texto que representa el contenido del modal que se muestra en la página. Está a punto de borrar el elemento Ítem 4 del sistema de forma permanente.</p> 
		<p>Esta acción no se puede deshacer. ¿Desea continuar?</p>

		<div class="mod-flex u-mt6">
				<div>
						<button class="boton boton--enlace" data-modal-close>
								<span>Cancelar</span>
						</button>
				</div>
				<div class="mod-flex flex-items-end">
						<button class="boton boton--secundario">
								<span>Acción secundaria</span>
						</button>

						<button class="boton boton--primario">
								<span>Confirmar</span>
								<svg class="icono icono--m">
										<use href="#icono-flecha-larga-derecha--lineal"></use>
								</svg>
						</button>
				</div>
		</div>

	</div>

	<button class="modal-cerrar boton boton--enlace boton--icono" data-modal-close>
		<svg class="icono icono--m">
			<use href="#icono-cerrar--lineal"></use>
		</svg>
		<span>Cerrar modal</span>
	</button>

</dialog>

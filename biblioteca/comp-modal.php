<?php
  $title = 'Modal';
  $section = 'componentes';
  $subsection = 'opcion-05'; 
?>

<?php include "inc/head.php"; ?>


<div class="app">
	
	<?php include "comp/header-app.php" ?>

  <div class="layout layout--app">

    <?php include "comp/nav-lateral.php" ?>

    <main id="contenido">
			
			<!-- Breadcrumb -->	
			<?php include "comp/breadcrumb.php"; ?>
			
      <h1><?php echo $title; ?></h1>
			
			<h2>Modal simple</h2>
			
			<?php include "comp/modal.php"; ?>
			
			<h3>Ejemplo de modal con formulario</h3>
			
			<button class="boton boton--primario u-mb6" data-modal-open data-modal-target="modal-formulario">
				<!--<svg class="icono">
					<use href="#icono-abrir-detalle--lineal"></use>
				</svg>-->
				<span>Abrir modal con formulario</span>
			</button>
			
			<!-- Modal con formulario -->
			<dialog data-modal="modal-formulario" aria-labelledby="titulo-modal-formulario-ejemplo">

				<div class="modal-contenido">
					
					<h2 class="modal-titulo" id="titulo-modal-formulario-ejemplo">Modal con formulario</h2>
					
					<p>Esto es un texto que representa el contenido del modal que se muestra en la página.</p>
					
					<form class="Form--tipo Form--stacked Form--stacked--hidden-fieldset u-mt4">
						<fieldset>
							<legend><span>Nombre del grupo de campos</span></legend>
							
							<div class="Form-group">
									<div class="Form-label-wrap">
											<label class="Form-label" for="example-campo-comun">Etiqueta de campo común:</label>
									</div>
									<div class="Form-object-wrap">
											<input class="Form-widget" name="example-campos-comun" type="text" id="example-campo-comun">
									</div>
							</div>

							<div class="Form-group">
									<div class="Form-label-wrap">
											<label for="combo-1" class="Form-label">Etiqueta de combo:</label>
									</div>

									<div class="Form-object-wrap">
											<select class="Form-widget" name="combo-1" id="combo-1">
													<option value="0">Opción seleccionada de un combo</option>
													<option value="1">Opción 1</option>
													<option value="2">Opción 2</option>
													<option value="3">Opción 3</option>
											</select>
											<div class="Form-hint" id="ayuda-campo">Este es un texto de ayuda</div>
									</div>
							</div>
							
							<div class="Form-group" role="group" aria-labelledby="grupo-radios">       
									<div class="Form-label-wrap">
											<div id="grupo-radios" class="Form-label">Grupo de opciones de radio button:</div>
									</div>

									<div class="Form-object-wrap">
											<div class="Form-options">
													<label for="opcion_1" class="Form-option">
															<input type="radio" id="opcion_1" name="opciones">
															<span>Radio 1</span>
													</label>
													<label for="opcion_2" class="Form-option">
															<input type="radio" id="opcion_2" name="opciones">
															<span>Radio 2</span>
													</label>
													<label for="opcion_3" class="Form-option">
															<input type="radio" id="opcion_3" name="opciones">
															<span>Radio 3 <span class="Form-hint">Opción con texto de ayuda</span></span>
													</label>
													<label for="opcion_4" class="Form-option">
															<input type="radio" id="opcion_4" name="opciones">
															<span>Radio 4</span>
													</label>
											</div>
									</div>
							</div>
							
						</fieldset>
					</form>
					
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
			
			<h3>Recomendaciones de accesibilidad</h3>
			<p>Recuerda usar aria-labelledby o arial-label, nunca debe existir un modal sin nombre accesible.</p>
    </main>

  </div>

</div>

<?php include "inc/foot.php"; ?>
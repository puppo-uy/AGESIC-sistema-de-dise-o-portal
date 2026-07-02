<div class="Box Box--mf Box--atencionCiudadana Box--color<?php echo $num_color; ?>">
	<div class="Box-header">
		<h3 class="Box-name">
			<a href="https://www.gub.uy/atencion-ciudadania">Atención a la Ciudadanía</a>
		</h3>
	</div>

	<div class="Box-body">
		<p class="Box-text">Informate sobre trámites y servicios del Estado, en el canal de atención que prefieras.</p>
		
		<!-- Pestañas -->
		<ul class="u-listReset nav nav-tabs" role="tablist">
			<li role="presentation" class="active">
				<a href="#tab-digital" aria-controls="tab-digital" role="tab" data-toggle="tab">
					<img src="../recursos/img/atencion-digital.png" alt="" width="40">
					<span class="tab-label">Digital</span>
				</a>
			</li>
			<li role="presentation">
				<a href="#tab-telefonico" aria-controls="tab-telefonico" role="tab" data-toggle="tab">
					<img src="../recursos/img/atencion-telefonica.png" alt="" width="40">
					<span class="tab-label">Telefónica</span>
				</a>
			</li>
			<li role="presentation">
				<a href="#tab-presencial" aria-controls="tab-presencial" role="tab" data-toggle="tab">
					<img src="../recursos/img/atencion-presencial.png" alt="" width="40">
					<span class="tab-label">Presencial</span>
				</a>
			</li>
		</ul>
		<!-- -->
		
		<ul class="Box-gridList Box-gridList--grid Box-gridList--rowSize<?php echo $num_colums; ?> tab-content Box-items">
			<!-- Contenido pestaña Digital -->
			<li class="Grid-item tab-pane fade in active" id="tab-digital">
				<div class="Box-item" role="tabpanel" aria-label="Canal digital">
					<h4 class="u-hide u-md-show">Digital</h4>
					<div class="Flag">
						<div class="Flag-image">
							<img src="../recursos/img/atencion-digital.png" alt="" height="48" width="48">
						</div>
						<div class="Flag-body">
							<div>info@atencionalaciudadania.gub.uy</div>
							<div>
								<a href="https://www.gub.uy/contacto">Formulario de consulta</a>
							</div>
							<div>
								<a href="https://www.facebook.com/atencionuy" target="_blank" rel="noopener noreferrer" class="u-outerLink">Facebook<span class="u-hideVisually">Enlace externo</span></a>
							</div>
							<div><a href="#" class="u-outerLink">Whatsapp<span class="u-hideVisually">Enlace externo</span></a></div>
						</div>
					</div>
				</div>
			</li>
			
			<!-- Contenido pestaña Telefónica -->
			<li class="Grid-item tab-pane fade" id="tab-telefonico">
				<div class="Box-item" role="tabpanel" aria-label="Canal telefónico">
					<h4 class="u-hide u-md-show">Telefónica</h4>
					<div class="Flag">
						<div class="Flag-image">
							<img src="../recursos/img/atencion-telefonica.png" alt="">
						</div>
						<div class="Flag-body">
							<div>0800 INFO (4636)</div>
							<div><a href="tel:*463">*463 <span class="u-textBlack">para celulares</span></a></div>
						</div>
					</div>
				</div>
			</li>	
			
			<!-- Contenido pestaña Presencial -->
			<li class="Grid-item tab-pane fade" id="tab-presencial">
				<div class="Box-item" role="tabpanel" aria-label="Canal presencial">
					<h4 class="u-hide u-md-show">Presencial</h4>
					<div class="Flag">
						<div class="Flag-image">
							<img src="../recursos/img/atencion-presencial.png" alt="">
						</div>
						<div class="Flag-body">
							<a href="https://www.gub.uy/politicas-y-gestion/puntos-atencion-ciudadania-departamento">Puntos de Atención a la Ciudadanía</a>
							<p class="Box-info">Accedé al listado de direcciones, teléfonos y horarios de los Puntos de Atención Ciudadana</p>
						</div>
					</div>
				</div>
			</li>
			
		</ul>
	</div>
	
	<!-- Enlace al pie opcional -->
	<!--
	<div class="Box-footer">
		<a href="#" class="Box-more">Ver más</a>
	</div>
	-->
	
</div>

<!--
 * Clases modificadoras
	 - De color: Box--color1, Box--color2, Box--color3, Box--color4, Box--color5, Box--color6, Box--color7, Box--color8
	 - Columnas en la grilla (Box-gridList +): Box-gridList--rowSize2, Box-gridList--rowSize3 
     Se deben ajustar automáticamente al ancho de la columna del 3x3 donde sea utilizado.

 * Recomendaciones de uso
 	 - Para uso en 1 columna se recomienda grilla altura LG, 2 columnas grilla altura 450 y 3 columnas grilla altura XS.
   - El enlace al pie queda para uso opcional

 * Textos (No dejar etiquetas html vacías cuando los campos opcionales quedan sin valor, se eliminan)
   Los textos de este contenedor vienen predefinidos con datos de "Atención a la ciudadanía" de gubuy.

-->
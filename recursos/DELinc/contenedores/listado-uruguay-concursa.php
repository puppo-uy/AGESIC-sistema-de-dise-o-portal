<div class="Box Box--mf Box--uruguayConcursa Box--color<?php echo $num_color; ?>">
	<div class="Box-header">
		<h3 class="Box-name">Últimos llamados Uruguay Concursa</h3>
	</div>
	<div class="Box-body">
		<ul class="Box-gridList Box-gridList--grid Box-gridList--rowSize<?php echo $num_colums; ?> Box-gridList--gridScroll">
			<li class="Grid-item">
				<div class="Box-item">
					<div class="Box-info">
						<span class="u-textUppercase u-textHiddenEllipsis">Asistente / Auxiliar</span>
						<span>26 May - 9 Jun</span>
					</div>
					<h4 class="Box-title"><a href="#" class="u-outerLink">Auxiliar de Registros Médicos (Suplente)<span class="u-hideVisually"> Enlace externo</span></a></h4>
					<p class="Box-text">Administración de Servicios de Salud del Estado</p>
				</div>
			</li>
			<li class="Grid-item">
				<div class="Box-item">
					<div class="Box-info">
						<span class="u-textUppercase u-textHiddenEllipsis">Administrativas</span>
						<span>26 May - 9 Jun</span>
					</div>
					<h4 class="Box-title"><a href="#" class="u-outerLink">Becarios de Biblioteca<span class="u-hideVisually"> Enlace externo</span></a></h4>
					<p class="Box-text">Banco de Seguros del Estado</p>
				</div>
			</li>
			<li class="Grid-item">
				<div class="Box-item">
					<div class="Box-info">
						<span class="u-textUppercase u-textHiddenEllipsis">Asistente / Auxiliar</span>
						<span>26 May - 9 Jun</span>
					</div>	
					<h4 class="Box-title"><a href="#" class="u-outerLink">Suplente Auxiliar de Enfermería<span class="u-hideVisually"> Enlace externo</span></a></h4>
					<p class="Box-text">Administración de Servicios de Salud del Estado</p>
				</div>
			</li>
			<li class="Grid-item">
				<div class="Box-item">
					<div class="Box-info">
						<span class="u-textUppercase u-textHiddenEllipsis">Técnico profesional</span>
						<span>26 May - 9 Jun</span>
					</div>	
					<h4 class="Box-title"><a href="#" class="u-outerLink">Asistente CTI con funciones CENAQUE<span class="u-hideVisually"> Enlace externo</span></a></h4>
					<p class="Box-text">Universidad de la República</p>
				</div>
			</li>
			<li class="Grid-item">
				<div class="Box-item">
					<div class="Box-info">
						<span class="u-textUppercase u-textHiddenEllipsis">Operativa servicio con supervisión</span>
						<span>26 May - 9 Jun</span>
					</div>
					<h4 class="Box-title"><a href="#" class="u-outerLink">Aux. Servicio, Tisanero, Aux. Cocina<span class="u-hideVisually"> Enlace externo</span></a></h4>
					<p class="Box-text">Administración de Servicios de Salud del Estado</p>
				</div>
			</li>
			<li class="Grid-item">
				<div class="Box-item">
					<div class="Box-info">
						<span class="u-textUppercase u-textHiddenEllipsis">Técnico profesional</span>
						<span>26 May - 9 Jun</span>
					</div>	
					<h4 class="Box-title"><a href="#" class="u-outerLink">Asesor Contratación Pública ARCE<span class="u-hideVisually"> Enlace externo</span></a></h4>
					<p class="Box-text">Presidencia</p>
				</div>
			</li>
		</ul>
		
	</div>	
	<div class="Box-footer">
		<a href="#" class="Box-more">Todos los llamados</a>
	</div>
</div>

<!--
 * Clases modificadoras
	 - De color: Box--color1, Box--color2, Box--color3, Box--color4, Box--color5, Box--color6, Box--color7, Box--color8
	 - Columnas en la grilla (Box-gridList +): Box-gridList--rowSize2, Box-gridList--rowSize3 
     Se deben ajustar al ancho de la columna del 3x3 donde sea utilizado.

 * Cantidad de items en la lista (Grid-item):
	 - Se podría cambiar la cantidad de items según la grilla donde se ubique el contenedor. 
		 Para una columna, se visualizarán según la altura del 3x3.
     Para el resto, se recomienda usar múltiplos de 2 o 3 según la cantidad de columnas que ocupe en el 3x3.
	 - En móvil la el comportamiento pasa a ser en scroll horizontal.

 * Textos (No dejar etiquetas html vacías cuando los campos opcionales quedan sin valor, se eliminan)
   Los textos de este contenedor se toman automáticamente de los datos de Uruguay Concursa
	 - Box-name: Contenido fijo - "Últimos llamados Uruguay Concursa"
   - Box-info: Dato "Tipo de tarea" y "Fecha inicio-fin". Obligatorio.
	 - Box-title: Dato "Título del puesto/cargo". Óptimo 80 caracteres. Obligatorio.
 	 - Box-text: Dato "Organismo - Unidad Ejecutora". Óptimo 100 caracteres. Obligatorio.
	 - Box-more: Óptimo 40 caracteres. 
-->
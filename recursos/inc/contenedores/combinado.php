<div class="Box Box--mf Box--combinado">
	<div class="Grid Grid--noGutter">
		<div class="Grid-item u-md-size2of3">
			<!-- Ejemplo imagen -->
			<!--<img class="Hero-image" src="../recursos/img/fondo-punta.jpg" alt="Descripción de la imagen">-->
			
			<!-- Ejemplo video de YouTube (sin LSU) -->
			<div class="Video Video--flex">
				<iframe src="https://www.youtube-nocookie.com/embed/ub4L2GVZnEA" title="Titulo del Video" loading="lazy" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>

				<!-- Se muestra agregando .Video--signLang en .Video -->
				<?php include '../recursos/inc/moleculas/flag-signLang.php' ?>
			</div>	
		</div>
		<div class="Grid-item u-md-size1of3">
			<?php include $url_contenedor; ?>
			<!-- Ver contenedores posibles en las consideraciones -->
		</div>
	</div>
</div>


<!--
 * Consideraciones y reglas
	 - El contenedor no puede usarse en grillas 3x3 con altura mayor a "lg".
	 - El contenedor se divide siempre en 2/3 - 1/3 o 1/3 - 2/3.
	 - El orden de contenido/audiovisual puede invertirse indistintamente entre izquierda o derecha y en móvil se representará arriba o abajo.
	 - Los contenedores y variantes que se pueden agregar son los que permiten su uso en 1/3 o 2/3 de la grilla según corresponda y no tienen imagen de fondo hasta los bordes. Se detallan: Acceso destacado, Destacado 3, Destacado 4, Formato completo, Agenda, Listado de enlaces, Listado de accesos, Lista de descargas, Listado de trámites y Datos numéricos.

 * Clases modificadoras
	 - De diseño: Box--combinadoReverse
   - Aviso de LSU en video (Video +): Video--signLang

	* Imagen o video
	 - Puede usarse imagen o video, se adaptará al espacio.
   - El video puede tener aviso de uso de LSU, se muestra agregando .Video--signLang en .Video
	 - La imagen puede aparecer recortada en escritorio. 

 * Textos (No dejar etiquetas html vacías cuando los campos opcionales quedan sin valor, se eliminan)
	 - Hereda comportamiento y reglas de los contenedores que sean utilizados.
-->
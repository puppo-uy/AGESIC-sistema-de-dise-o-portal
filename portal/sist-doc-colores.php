<?php
  $title = 'Colores';
?>
<?php include "inc/head.php"; ?>

  <!-- Cabezal -->
  <?php include "inc/header.php"; ?>

  <!-- Breadcrumb -->
  <div class="Breadcrumb">
    <div class="Container">
      <ul>
        <li><a href="sist-que-es.php">Inicio</a></li>
        <li>Estilos globales</li>
				<li>Colores</li>
      </ul>
    </div>
  </div>

  <!-- Contenido -->
  <div class="u-main" id="contenido">
    <div class="Container">
      <div class="Page Page--hasNav">
        <div class="Grid Grid--noGutter">
          <div class="Grid-item u-md-size1of4">
						
						<!-- Menú lateral -->
						<?php 
							$activeItem = 'colores';
							include "inc/nav-estilos.php"; 
						?>
						
          </div>

          <div class="Grid-item u-md-size3of4">
            <div class="Page-body">

              <div class="Page-document">

                <span class="Page-subtitle">Estilos globales</span>
                <h2 class="Page-title">Colores</h2>
								
								 <div class="Page-info">
									<div class="Bar">
										<div class="Bar-cell">
											<div class="Page-date">Versión 1.0</div>
										</div>
									</div>
								</div>
								
								<p class="Page-description">El sistema de colores establece cómo se utilizan los colores para comunicar estados, jerarquías e interacción de forma consistente y accesible.</p>
								
								<p>La paleta fue diseñada para ser amplia y flexible, contemplando una variedad de matices que permiten cubrir distintos contextos de uso sin perder coherencia visual. Cada color se define a través de una escala tonal que va desde valores claros a oscuros, lo que facilita su aplicación en fondos, textos o bordes según el contexto. </p>
								
								<h3>Paleta de colores</h3>
				<p>La paleta se organiza en cuatro grandes grupos, según su función dentro de la interfaz: </p>
				
				<ul class="List-text">
                  <li>Colores institucionales</li>
                  <li>Colores funcionales</li>
                  <li>Colores neutros</li>
                  <li>Colores decorativos</li>
                </ul>

				<h4>Colores institucionales</h4>
				<p>Incluyen los colores principales de identidad visual de gub.uy. Se utilizan para destacar elementos relevantes de la interfaz y reforzar la presencia institucional de forma consistente.</p>
				<p>Estos colores se aplican en componentes clave como botones, cabezales y otros elementos de alto peso visual o funcional. Su uso no es decorativo, sino que responde a la necesidad de jerarquizar acciones, secciones y contenidos importantes dentro de la interfaz.</p>

				<iframe
					src="../git/iframe-preview.php?comp=colores&grupo=institucionales"
					class="component-preview"
					title="Colores institucionales"
					scrolling="no"
					style="width:100%;border:none;display:block;"
				></iframe>

				<h4>Colores funcionales</h4>
				<p>Se utilizan para comunicar estados y dar feedback al usuario. Incluyen colores asociados a éxito, advertencia, error, notificación y foco.</p>
				<p>Estos colores deben utilizarse exclusivamente con el significado definido por el sistema y no con fines decorativos.</p>

				<iframe
					src="../git/iframe-preview.php?comp=colores&grupo=funcionales"
					class="component-preview"
					title="Colores funcionales"
					scrolling="no"
					style="width:100%;border:none;display:block;"
				></iframe>

				<h4>Color de foco</h4>
				<p>Dentro de los colores funcionales, el sistema define un color específico destinado a representar el estado de foco.</p>
				<p>Este color se utiliza exclusivamente para indicar visualmente qué elemento de la interfaz se encuentra enfocado, ya sea en campos de formulario o durante la navegación mediante teclado.</p>

				<iframe
					src="../git/iframe-preview.php?comp=colores&grupo=foco"
					class="component-preview"
					title="Color de foco"
					scrolling="no"
					style="width:100%;border:none;display:block;"
				></iframe>

				<h4>Colores neutros</h4>
				<p>Los colores neutros se utilizan principalmente para fondos, textos, bordes y separadores, permitiendo que los otros colores destaquen correctamente.</p>

				<iframe
					src="../git/iframe-preview.php?comp=colores&grupo=neutros"
					class="component-preview"
					title="Colores neutros"
					scrolling="no"
					style="width:100%;border:none;display:block;"
				></iframe>

				<h4>Colores decorativos</h4>
				<p>Los colores decorativos amplían la paleta y permiten resolver necesidades visuales específicas, como gráficos, ilustraciones o elementos de apoyo visual.</p>
				<p>Su uso no debe interferir con la jerarquía ni con los colores funcionales definidos por el sistema.</p>

				<iframe
					src="../git/iframe-preview.php?comp=colores&grupo=decorativos"
					class="component-preview"
					title="Colores decorativos"
					scrolling="no"
					style="width:100%;border:none;display:block;"
				></iframe>

				<h3>Matices</h3>
				<p>La paleta se compone de escalas tonales que van desde el valor 25 hasta el 950, donde los tonos más claros se utilizan principalmente para fondos y superficies, y los más oscuros para textos.</p>
				<p>Cada escala permite:</p>
				<ul class="List-text">
                  <li>Mantener consistencia visual entre componentes.</li>
                  <li>Adaptar el color según el contexto (fondo, texto, estado).</li>
                  <li>Garantizar combinaciones con contraste adecuado.</li>
                </ul>

				<h3>Accesibilidad y contraste</h3>
				<p>Los colores del sistema fueron definidos teniendo en cuenta el contraste entre texto y fondo para asegurar la legibilidad de los contenidos.</p>
				<p>No todas las combinaciones posibles entre matices están permitidas. El uso correcto del color implica respetar los roles definidos por el sistema y evitar combinaciones que reduzcan el contraste o dificulten la lectura.</p>
								
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>


  <!-- Footer -->
  <?php include "inc/footer.php"; ?>

  <script src="../recursos/js/vendor/iframeResizer.min.js"></script>
  <script>
    document.addEventListener("DOMContentLoaded", function() {
        iFrameResize({
            log: false,
            checkOrigin: false,
            heightCalculationMethod: 'lowestElement',
            heightOffset: 50
        }, '.component-preview');
    });
  </script>

<?php include "inc/foot.php"; ?>

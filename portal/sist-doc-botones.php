<?php
  $title = 'Botones';
?>
<?php include "inc/head.php"; ?>

  <!-- Cabezal -->
  <?php include "inc/header.php"; ?>

  <!-- Breadcrumb -->
  <div class="Breadcrumb">
    <div class="Container">
      <ul>
        <li><a href="sist-que-es.php">Inicio</a></li>
        <li>Componentes</li>
				<li>Botones</li>
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
							$activeItem = 'botones';
							include "inc/nav-componentes.php"; 
						?>
						
          </div>

          <div class="Grid-item u-md-size3of4">
            <div class="Page-body">

              <div class="Page-document">

                <span class="Page-subtitle">Acciones</span>
                <h2 class="Page-title">Botones</h2>
								
								 <div class="Page-info">
									<div class="Bar">
										<div class="Bar-cell">
											<div class="Page-date">Versión 1.0</div>
										</div>
									</div>
								</div>
								
								<p class="Page-description">Los botones permiten al usuario ejecutar acciones dentro de una interfaz. Según su jerarquía visual y funcional, los botones se utilizan para destacar la acción principal de una pantalla, ofrecer acciones alternativas o accesos secundarios, manteniendo siempre una clara diferenciación entre ellos.</p>
								
								<h3 class="u-mt4">Estructura del componente</h3>
                                <iframe src="../git/iframe-preview.php?comp=botones/boton-primario" class="component-preview u-mb3" style="width: 100%; border: none; min-height: 80px;" scrolling="no"></iframe>
								<h5 class="u-mt3">Elementos que lo componen:</h5>
								<ul class="List-text">
                                    <li>Fondo</li>
                                    <li>Borde</li>
                                    <li>Texto</li>
                                    <li>Ícono</li>
                                    <li>Sombra</li>
								</ul>

								<h3 class="u-mt4">Recomendaciones de uso</h3>
                                <h4 class="u-mt3">Buenas prácticas</h4>
                                <ul class="List-text">
                                    <li>Utilizar textos claros, directos y concisos. Máximo recomendado de 3 palabras.</li>
                                    <li>Texto corto, claro y en voz activa, preferiblemente usar verbos. (Ej: "Enviar", "Guardar", "Descargar").</li>
                                    <li>Acciones concretas y autodescriptivas (Ej: Enviar formulario). Evitar términos genéricos sin contexto.</li>
                                </ul>

                                <h3 class="u-mt4">Variantes</h3>
                                <h4 class="u-mt3 u-mb3">Jerarquía</h4>
                                
                                <h5 class="u-mb2">Primario</h5>
                                <iframe src="../git/iframe-preview.php?comp=botones/boton-primario" class="component-preview u-mb2" style="width: 100%; border: none; min-height: 80px;" scrolling="no"></iframe>
                                <p class="u-mb4">Designa la acción principal o por defecto de una pantalla. Debe destacar visualmente sobre los demás botones para guiar al usuario hacia el objetivo principal. Solo debería haber uno por vista o contexto.</p>

                                <h5 class="u-mb2">Secundario</h5>
                                <iframe src="../git/iframe-preview.php?comp=botones/boton-secundario" class="component-preview u-mb2" style="width: 100%; border: none; min-height: 80px;" scrolling="no"></iframe>
                                <p class="u-mb4">Se utiliza para acciones alternativas a la principal. Su peso visual es menor para no competir con el botón primario. Puede haber varios en una misma pantalla.</p>

                                <h5 class="u-mb2">Terciario</h5>
                                <iframe src="../git/iframe-preview.php?comp=botones/boton-enlace" class="component-preview u-mb2" style="width: 100%; border: none; min-height: 80px;" scrolling="no"></iframe>
                                <p class="u-mb4">Se utiliza para acciones opcionales o de menor importancia. Tiene menor prominencia visual.</p>

                                <h4 class="u-mt4 u-mb3">Tamaño</h4>
                                <iframe src="../git/iframe-preview.php?comp=botones/boton-tamanos" class="component-preview u-mb3" style="width: 100%; border: none; min-height: 80px;" scrolling="no"></iframe>
                                <ul class="List-text">
                                    <li>Grande (L)</li>
                                    <li>Medio (M)</li>
                                    <li>Chico (S)</li>
                                </ul>

                                <h3 class="u-mt4">Accesibilidad</h3>
                                <h4>WCAG Nivel AAA</h4>
                                <h5 class="u-mt3">Recomendaciones para no perder la accesibilidad</h5>
                                <ul class="List-text">
                                    <li>No utilizar botones de solo ícono sin proporcionar un texto alternativo descriptivo.</li>
                                    <li>Evitar el uso de textos genéricos o usar referencias visuales en la redacción. (Ej: Evitar textos como "ver más", "clic aquí").</li>
                                    <li>Evitar textos completamente en mayúsculas.</li>
                                </ul>

                                <h3 class="u-mt4">Componentes relacionados</h3>
                                <ul class="List-text">
                                    <li><a href="sist-doc-enlaces.php">Enlaces</a></li>
                                    <li><a href="sist-doc-grupo-botones.php">Grupo de botones</a></li>
                                    <li><a href="sist-doc-boton-desplegable.php">Botón desplegable</a></li>
                                </ul>
								

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

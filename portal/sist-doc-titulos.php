<?php
  $title = 'Títulos';
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
        <li><a href="sist-doc-textos.php">Textos</a></li>
        <li>Títulos</li>
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
              $activeItem = 'titulos';
              include "inc/nav-componentes.php"; 
            ?>
            
          </div>

          <div class="Grid-item u-md-size3of4">
            <div class="Page-body">

              <div class="Page-document">

                <span class="Page-subtitle">Textos</span>
                <h2 class="Page-title">Títulos</h2>
                
                <p class="Page-description">Los títulos son componentes de texto que se utilizan para organizar y jerarquizar el contenido dentro de la interfaz. Permiten estructurar la información, guiar la lectura y facilitar la comprensión del contenido en distintos niveles.</p>
                <p>Además de su función visual, cumplen un rol semántico fundamental, ya que definen la estructura lógica del contenido.</p>
                
                 <iframe src="../git/iframe-preview.php?comp=texto/titulos-todos" title="Ejemplos de títulos del sistema" class="component-preview u-mb3" style="width: 100%; border: none; min-height: 380px;" scrolling="no"></iframe>

                
                <h3>Recomendaciones de uso</h3>
                <h4>Casos típicos de uso</h4>
                <ul class="List-text">
                    <li>Encabezado principal de una página o pantalla.</li>
                    <li>Títulos de secciones y subsecciones.</li>
                    <li>Encabezados de bloques de contenido dentro de una vista.</li>
                </ul>

                <h4>Cuándo no usarlos</h4>
                <ul class="List-text">
                    <li>Para destacar texto que no representa una jerarquía.</li>
                    <li>Para párrafos de texto.</li>
                </ul>

                <h3>Buenas prácticas</h3>
                <ul class="List-text">
                    <li>Utilizar un único Encabezado 1 por pantalla.</li>
                    <li>Respetar el orden jerárquico de los encabezados, evitando saltos entre niveles.</li>
                    <li>Redactar títulos claros, breves y descriptivos.</li>
                    <li>Utilizar títulos para estructurar el contenido, no para estilizarlo.</li>
                </ul>

                <h3>Variantes</h3>
                <p class="u-mb2">Los títulos se organizan en seis niveles jerárquicos, que deben utilizarse de acuerdo con la estructura del contenido.</p>
                <div class="table-responsive">
                    <table class="Table">
                        <thead>
                            <tr>
                                <th>Componente</th>
                                <th>Estilo tipográfico</th>
                                <th>Peso</th>
                                <th>Uso</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>H1</td>
                                <td>Título XXL</td>
                                <td>Semibold</td>
                                <td>Título de la página o pantalla. Máxima jerarquía visual. Uno solo por página.</td>
                            </tr>
                            <tr>
                                <td>H2</td>
                                <td>Título XL</td>
                                <td>Semibold</td>
                                <td>Secciones principales dentro de la pantalla. Puede repetirse varias veces si la página lo requiere.</td>
                            </tr>
                            <tr>
                                <td>H3</td>
                                <td>Título LG</td>
                                <td>Semibold</td>
                                <td>Subsecciones o títulos de bloques importantes.</td>
                            </tr>
                            <tr>
                                <td>H4</td>
                                <td>Título MD</td>
                                <td>Semibold</td>
                                <td>Subsubsecciones o títulos dentro de contenedores.</td>
                            </tr>
                            <tr>
                                <td>H5</td>
                                <td>Título SM</td>
                                <td>Semibold</td>
                                <td>Títulos en contextos con menor jerarquía después de un H4.</td>
                            </tr>
                            <tr>
                                <td>H6</td>
                                <td>Título XS</td>
                                <td>Semibold</td>
                                <td>Títulos de elementos muy secundarios o títulos dentro de microcomponentes.</td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <h3>Accesibilidad</h3>
                <h4>WCAG Nivel AAA</h4>
                <h5 class="u-mt4">Recomendaciones para no perder la accesibilidad</h5>
                <ul class="List-text">
                    <li>Utilizar cada nivel de título según la jerarquía real del contenido.</li>
                    <li>Mantener un orden lógico de encabezados, evitando saltos innecesarios entre niveles.</li>
                    <li>Asegurar que el texto del título sea claro y comprensible por sí mismo.</li>
                    <li>Evitar reemplazar títulos por texto común con estilos visuales similares.</li>
                    <li>Asegurar contraste suficiente entre el texto y el fondo.</li>
                </ul>

                <h3>Componentes relacionados</h3>
                <ul class="List-text">
                    <li><a href="sist-doc-parrafos.php">Párrafos</a></li>
                    <li><a href="sist-doc-listados.php">Listados</a></li>
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

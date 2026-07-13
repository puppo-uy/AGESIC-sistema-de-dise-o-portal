<?php
  $title = 'Listados';
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
        <li>Listados</li>
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
              $activeItem = 'listados';
              include "inc/nav-componentes.php"; 
            ?>
            
          </div>

          <div class="Grid-item u-md-size3of4">
            <div class="Page-body">

              <div class="Page-document">

                <span class="Page-subtitle">Textos</span>
                <h2 class="Page-title">Listados</h2>
                
                 <div class="Page-info">
                  <div class="Bar">
                    <div class="Bar-cell">
                      <div class="Page-date">Versión 1.0</div>
                    </div>
                  </div>
                </div>
                
                <p class="Page-description">Los listados son componentes de texto que permiten organizar información relacionada en forma de ítems, facilitando la lectura y el escaneo del contenido.</p>
                <p>Se utilizan para presentar punteos, pasos, o características de manera clara y estructurada.</p>

                <h3>Recomendaciones de uso</h3>
                <h4>Casos típicos de uso</h4>
                <ul class="List-text">
                    <li>Enumerar pasos dentro de un proceso.</li>
                    <li>Presentar características, requisitos o condiciones.</li>
                    <li>Agrupar información relacionada dentro de una sección.</li>
                    <li>Detallar contenidos de forma más clara que un párrafo continuo.</li>
                </ul>

                <h4>Cuándo no usarlos</h4>
                <ul class="List-text">
                    <li>Para contenidos que requieren desarrollo (usar párrafos).</li>
                </ul>

                <h3>Buenas prácticas</h3>
                <ul class="List-text">
                    <li>Mantener los ítems breves y claros.</li>
                    <li>Utilizar la misma estructura gramatical en todos los ítems de un mismo listado.</li>
                    <li>Evitar listados excesivamente largos; dividirlos en bloques si es necesario.</li>
                    <li>Respetar el espaciado definido por el sistema entre ítems.</li>
                </ul>

                <h3>Variantes</h3>
                <h4>Formato</h4>
                <div class="u-mt3 u-mb4">
                     <h5 class="u-mb2">No ordenadas (Viñetas)</h5>
                     <iframe src="../git/iframe-preview.php?comp=texto/lista" title="Ejemplo de lista no ordenada" class="component-preview u-mb3" style="width: 100%; border: none; min-height: 200px;" scrolling="no"></iframe>
                     <p class="u-mb4">Se utilizan cuando el orden de los elementos no es relevante. Emplean un bullet (viñeta) negro para marcar cada ítem.</p>
 
                     <h5 class="u-mb2">Ordenadas (Numeradas)</h5>
                     <iframe src="../git/iframe-preview.php?comp=texto/lista-numerada" title="Ejemplo de lista ordenada" class="component-preview u-mb3" style="width: 100%; border: none; min-height: 200px;" scrolling="no"></iframe>
                     <p class="u-mb2">Se utilizan cuando los elementos siguen una secuencia lógica, cronológica o de jerarquía. Emplean números seguidos de un punto (ej: 1., 2., 3.).</p>
                </div>

                <h3>Accesibilidad</h3>
                <h5 class="u-mt4">Recomendaciones para no perder la accesibilidad</h5>
                <ul class="List-text">
                    <li>Utilizar el tipo de listado adecuado según el significado del contenido (viñetas o numeración).</li>
                    <li>Mantener una estructura lógica y coherente entre niveles.</li>
                    <li>Evitar listados anidados en exceso, ya que dificultan la lectura.</li>
                    <li>Asegurar suficiente contraste entre el texto y el fondo.</li>
                </ul>

                <h3>Componentes relacionados</h3>
                <ul class="List-text">
                    <li><a href="sist-doc-titulos.php">Títulos</a></li>
                    <li><a href="sist-doc-parrafos.php">Párrafos</a></li>
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

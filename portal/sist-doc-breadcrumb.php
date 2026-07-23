<?php
  $title = 'Breadcrumb';
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
        <li><a href="sist-doc-navegacion.php">Navegación</a></li>
        <li>Breadcrumb</li>
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
              $activeItem = 'breadcrumb';
              include "inc/nav-componentes.php"; 
            ?>
            
          </div>

          <div class="Grid-item u-md-size3of4">
            <div class="Page-body">

              <div class="Page-document">

                <span class="Page-subtitle">Navegación</span>
                <h2 class="Page-title">Breadcrumb</h2>
                
                 <div class="Page-info">
                  <div class="Bar">
                    <div class="Bar-cell">
                      <div class="Page-date">Versión 1.0</div>
                    </div>
                  </div>
                </div>
                
                <p class="Page-description">El breadcrumb es un componente de navegación secundaria que indica al usuario la ubicación actual dentro de la estructura del sitio o aplicación. Permite comprender el contexto de navegación y facilita el regreso a niveles anteriores de forma rápida y predecible.</p>

                <h3 class="u-mt4">Estructura del componente</h3>
                 <iframe src="../git/iframe-preview.php?comp=breadcrumb" title="Ejemplo de estructura de breadcrumb" class="component-preview u-mb3" style="width: 100%; border: none; min-height: 80px;" scrolling="no"></iframe>
                <h5 class="u-mt3">Elementos que lo componen</h5>
                <ul class="List-text">
                    <li>Texto (Solo lectura)</li>
                    <li>Separador entre niveles (Ícono)</li>
                    <li>Enlaces</li>
                </ul>

                <h3 class="u-mt4">Recomendaciones de uso</h3>
                <h4 class="u-mt3">Casos típicos de uso</h4>
                <ul class="List-text">
                    <li>Navegación entre secciones de más de un nivel.</li>
                    <li>Páginas internas que no se acceden directamente desde la navegación principal.</li>
                    <li>Flujos donde es importante que el usuario comprenda en qué sección se encuentra.</li>
                </ul>

                <h4 class="u-mt3">Cuándo no usarlo</h4>
                <ul class="List-text">
                    <li>En pantallas de nivel único.</li>
                    <li>Como reemplazo de la navegación principal.</li>
                </ul>

                <h3 class="u-mt4">Buenas prácticas</h3>
                <ul class="List-text">
                    <li>Mostrar siempre la ruta desde el nivel principal de la sección, sin incluir la página de inicio (home).</li>
                    <li>El último nivel visible debe ser el nivel anterior al contenido actual.</li>
                    <li>Mantener consistencia en la nomenclatura, los nombres deben coincidir con los títulos de las secciones o páginas.</li>
                </ul>

                <h3 class="u-mt4">Accesibilidad</h3>
                <h4>WCAG Nivel AAA</h4>
                <h5 class="u-mt3">Recomendaciones para no perder la accesibilidad</h5>
                <ul class="List-text">
                    <li>Mantener un orden lógico y secuencial de los niveles.</li>
                    <li>Asegurar que los enlaces sean claramente identificables.</li>
                    <li>Garantizar contraste suficiente entre texto y fondo.</li>
                </ul>

                <h3 class="u-mt4">Componentes relacionados</h3>
                <ul class="List-text">
                    <li><a href="sist-doc-cabezales.php">Cabezales</a></li>
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

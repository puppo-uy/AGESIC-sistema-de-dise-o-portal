<?php
  $title = 'Sombras';
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
        <li>Sombras</li>
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
              $activeItem = 'sombras';
              include "inc/nav-estilos.php"; 
            ?>
            
          </div>

          <div class="Grid-item u-md-size3of4">
            <div class="Page-body">

              <div class="Page-document">

                <span class="Page-subtitle">Estilos globales</span>
                <h2 class="Page-title">Sombras</h2>
                
                 <div class="Page-info">
                  <div class="Bar">
                    <div class="Bar-cell">
                      <div class="Page-date">Versión 1.0</div>
                    </div>
                  </div>
                </div>
                
                <p class="Page-description">Las sombras permiten representar distintos niveles de profundidad dentro de la interfaz, ayudando a diferenciar elementos superpuestos o a destacar componentes sobre el fondo.</p>
                <p>El sistema define distintos niveles de sombra, que van desde sombras muy sutiles hasta sombras más marcadas, según la jerarquía y el contexto del componente.</p>

                <h3 class="u-mt4">Variantes</h3>
                <h4 class="u-mt3">Tipo</h4>

                <h5 class="u-mt3 u-mb2">Difuminadas</h5>
                <p class="u-mb3">Las sombras difuminadas tienen bordes suaves y transiciones graduales. Generan una separación visual leve entre un elemento y su entorno.</p>
                <iframe
                  src="../git/iframe-preview.php?comp=sombras&grupo=difuminadas"
                  class="component-preview"
                  title="Sombras difuminadas"
                  scrolling="no"
                  style="width:100%;border:none;display:block;"
                ></iframe>

                <h5 class="u-mt2 u-mb2">Duras</h5>
                <p class="u-mb3">Las sombras duras tienen bordes definidos y sin difuminado, lo que produce un contraste más marcado con el fondo.</p>
                <iframe
                  src="../git/iframe-preview.php?comp=sombras&grupo=duras"
                  class="component-preview"
                  title="Sombras duras"
                  scrolling="no"
                  style="width:100%;border:none;display:block;"
                ></iframe>

                <h4 class="u-mt3 u-mb2">Nivel</h4>
                <p>Cada tipo de sombra cuenta con cinco niveles de intensidad que regulan la separación del componente con el fondo. Estos niveles son:</p>
                <ul class="List-text u-mb4">
                    <li><strong>xs</strong> — sombra mínima, para separaciones muy sutiles.</li>
                    <li><strong>s</strong> — sombra pequeña.</li>
                    <li><strong>m</strong> — sombra media, nivel base recomendado para la mayoría de los componentes.</li>
                    <li><strong>l</strong> — sombra grande, para elementos que deben destacarse claramente.</li>
                    <li><strong>xl</strong> — sombra máxima, reservada para componentes superpuestos como modales o menús desplegables.</li>
                </ul>

                <h3 class="u-mt4">Buenas prácticas</h3>
                <ul class="List-text">
                    <li>Evitar el uso de sombras con fines decorativos.</li>
                    <li>Mantener el mismo nivel de sombra en componentes del mismo tipo o jerarquía.</li>
                    <li>Priorizar siempre la claridad y la legibilidad sobre el impacto visual.</li>
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
            heightOffset: 32
        }, '.component-preview');
    });
  </script>

<?php include "inc/foot.php"; ?>

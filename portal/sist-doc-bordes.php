<?php
  $title = 'Bordes';
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
        <li>Bordes</li>
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
              $activeItem = 'bordes';
              include "inc/nav-estilos.php"; 
            ?>
            
          </div>

          <div class="Grid-item u-md-size3of4">
            <div class="Page-body">

              <div class="Page-document">

                <span class="Page-subtitle">Estilos globales</span>
                <h2 class="Page-title">Bordes</h2>
                
                 <div class="Page-info">
                  <div class="Bar">
                    <div class="Bar-cell">
                      <div class="Page-date">Versión 1.0</div>
                    </div>
                  </div>
                </div>
                
                <p class="Page-description">Los bordes se utilizan para delimitar, separar o enfatizar elementos dentro de la interfaz. Los estilos de borde se dividen en dos grupos: grosores y radios.</p>

                <h3 class="u-mt4">Grosores</h3>
                <p class="u-mb3">El sistema define distintos grosores de borde, expresados en valores fijos en píxeles. Estos grosores permiten adaptarse a diferentes tipos de componentes, desde separaciones sutiles hasta delimitaciones más visibles.</p>
                <p class="u-mb3">Los grosores de borde van desde <code>borde-0</code> hasta <code>borde-6</code>.</p>

                <iframe
                  src="../git/iframe-preview.php?comp=bordes&grupo=grosores"
                  class="component-preview"
                  title="Grosores de borde"
                  scrolling="no"
                  style="width:100%;border:none;display:block;"
                ></iframe>

                <div class="table-responsive u-mb5">
                    <table class="Table Table--striped">
                        <thead>
                            <tr>
                                <th>Variable</th>
                                <th>Valor</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr><td>$bordes-grosores-0</td><td>0px</td></tr>
                            <tr><td>$bordes-grosores-1</td><td>1px</td></tr>
                            <tr><td>$bordes-grosores-2</td><td>2px</td></tr>
                            <tr><td>$bordes-grosores-3</td><td>3px</td></tr>
                            <tr><td>$bordes-grosores-4</td><td>4px</td></tr>
                            <tr><td>$bordes-grosores-5</td><td>5px</td></tr>
                            <tr><td>$bordes-grosores-6</td><td>6px</td></tr>
                        </tbody>
                    </table>
                </div>

                <h3 class="u-mt4">Radios</h3>
                <p class="u-mb3">Los radios definen el nivel de redondeo de las esquinas de contenedores y componentes. El sistema contempla desde esquinas completamente rectas hasta esquinas totalmente redondeadas. El valor máximo de redondeo permite que ciertos elementos adopten una forma de "pastilla" o circular, según su proporción.</p>

                <iframe
                  src="../git/iframe-preview.php?comp=bordes&grupo=radios"
                  class="component-preview"
                  title="Radios de borde"
                  scrolling="no"
                  style="width:100%;border:none;display:block;"
                ></iframe>

                <div class="table-responsive u-mb5">
                    <table class="Table Table--striped">
                        <thead>
                            <tr>
                                <th>Variable</th>
                                <th>Valor</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr><td>$bordes-radios-0</td><td>0px</td></tr>
                            <tr><td>$bordes-radios-xxs</td><td>2px</td></tr>
                            <tr><td>$bordes-radios-xs</td><td>4px</td></tr>
                            <tr><td>$bordes-radios-s</td><td>8px</td></tr>
                            <tr><td>$bordes-radios-m</td><td>12px</td></tr>
                            <tr><td>$bordes-radios-l</td><td>16px</td></tr>
                            <tr><td>$bordes-radios-xl</td><td>20px</td></tr>
                            <tr><td>$bordes-radios-xxl</td><td>24px</td></tr>
                            <tr><td>$bordes-radios-full</td><td>9999px</td></tr>
                        </tbody>
                    </table>
                </div>

                <h3 class="u-mt4">Buenas prácticas</h3>
                <ul class="List-text">
                    <li>Utilizar el mismo radio en componentes similares.</li>
                    <li>Evitar combinar distintos radios dentro de un mismo componente.</li>
                    <li>Usar bordes sutiles cuando el contenido ya está claramente separado por espaciado.</li>
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

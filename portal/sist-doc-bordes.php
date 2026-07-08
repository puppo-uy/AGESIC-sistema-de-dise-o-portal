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

                <img src="img/ejemplos_documentacion/bordes_grosores.png" alt="Escala de grosores de borde — borde-0 a borde-6" class="u-mb4" style="max-width: 100%;">

                <div class="table-responsive u-mb5">
                    <table class="Table Table--striped">
                        <thead>
                            <tr>
                                <th>Variable</th>
                                <th>Valor</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr><td>borde-0</td><td>0px</td></tr>
                            <tr><td>borde-1</td><td>1px</td></tr>
                            <tr><td>borde-2</td><td>2px</td></tr>
                            <tr><td>borde-3</td><td>3px</td></tr>
                            <tr><td>borde-4</td><td>4px</td></tr>
                            <tr><td>borde-5</td><td>5px</td></tr>
                            <tr><td>borde-6</td><td>6px</td></tr>
                        </tbody>
                    </table>
                </div>

                <h3 class="u-mt4">Radios</h3>
                <p class="u-mb3">Los radios definen el nivel de redondeo de las esquinas de contenedores y componentes. El sistema contempla desde esquinas completamente rectas hasta esquinas totalmente redondeadas. El valor máximo de redondeo permite que ciertos elementos adopten una forma de "pastilla" o circular, según su proporción.</p>

                <img src="img/ejemplos_documentacion/bordes_radios.png" alt="Escala de radios de borde — radio-0 a radio-full" class="u-mb4" style="max-width: 100%;">

                <div class="table-responsive u-mb5">
                    <table class="Table Table--striped">
                        <thead>
                            <tr>
                                <th>Variable</th>
                                <th>Valor</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr><td>radio-0</td><td>0px</td></tr>
                            <tr><td>radio-xxs</td><td>2px</td></tr>
                            <tr><td>radio-xs</td><td>4px</td></tr>
                            <tr><td>radio-s</td><td>8px</td></tr>
                            <tr><td>radio-m</td><td>12px</td></tr>
                            <tr><td>radio-l</td><td>16px</td></tr>
                            <tr><td>radio-xl</td><td>20px</td></tr>
                            <tr><td>radio-xxl</td><td>24px</td></tr>
                            <tr><td>radio-full</td><td>9999px</td></tr>
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

<?php include "inc/foot.php"; ?>

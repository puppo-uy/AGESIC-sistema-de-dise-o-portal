<?php
  $title = 'Espaciados';
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
        <li>Espaciados</li>
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
              $activeItem = 'espaciados';
              include "inc/nav-estilos.php"; 
            ?>
            
          </div>

          <div class="Grid-item u-md-size3of4">
            <div class="Page-body">

              <div class="Page-document">

                <span class="Page-subtitle">Estilos globales</span>
                <h2 class="Page-title">Espaciados</h2>
                
                 <div class="Page-info">
                  <div class="Bar">
                    <div class="Bar-cell">
                      <div class="Page-date">Versión 1.0</div>
                    </div>
                  </div>
                </div>
                
                <p class="Page-description">Los espaciados definen las medidas de separación entre los elementos de la interfaz, tanto en el espacio interno de los componentes como en el espacio externo entre componentes.</p>
                <p>El sistema utiliza una serie de valores fijos en píxeles que permiten resolver desde separaciones pequeñas hasta separaciones más amplias, manteniendo consistencia visual en toda la interfaz.</p>

                <h3 class="u-mt4" id="titulo-espaciados">Tokens de espaciado</h3>
                <p class="u-mb3">El sistema define una escala progresiva de valores fijos. Cada token lleva como nombre su propio valor en píxeles, lo que facilita su identificación directa en código.</p>

                <iframe
                  src="../git/iframe-preview.php?comp=espaciados"
                  class="component-preview"
                  title="Escala de tokens de espaciado"
                  scrolling="no"
                  style="width:100%;border:none;display:block;"
                ></iframe>

                <div class="table-responsive">
                    <table class="Table Table--striped" aria-labelledby="titulo-espaciados">
                        <thead>
                            <tr>
                                <th>Variable</th>
                                <th>Valor</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr><td>$espaciados-0</td><td>0px</td></tr>
                            <tr><td>$espaciados-2</td><td>2px</td></tr>
                            <tr><td>$espaciados-4</td><td>4px</td></tr>
                            <tr><td>$espaciados-8</td><td>8px</td></tr>
                            <tr><td>$espaciados-12</td><td>12px</td></tr>
                            <tr><td>$espaciados-16</td><td>16px</td></tr>
                            <tr><td>$espaciados-20</td><td>20px</td></tr>
                            <tr><td>$espaciados-24</td><td>24px</td></tr>
                            <tr><td>$espaciados-28</td><td>28px</td></tr>
                            <tr><td>$espaciados-32</td><td>32px</td></tr>
                            <tr><td>$espaciados-36</td><td>36px</td></tr>
                            <tr><td>$espaciados-40</td><td>40px</td></tr>
                            <tr><td>$espaciados-48</td><td>48px</td></tr>
                            <tr><td>$espaciados-56</td><td>56px</td></tr>
                            <tr><td>$espaciados-64</td><td>64px</td></tr>
                            <tr><td>$espaciados-72</td><td>72px</td></tr>
                            <tr><td>$espaciados-80</td><td>80px</td></tr>
                        </tbody>
                    </table>
                </div>

                <h3 class="u-mt4">Recomendaciones de uso</h3>
                <h4 class="u-mt3">Casos típicos de uso</h4>
                <ul class="List-text">
                    <li>Definir el espacio interno entre el contenido y el borde dentro de un componente (padding).</li>
                    <li>Establecer la distancia entre componentes, secciones y bloques de contenido (margin).</li>
                    <li>Organizar la información de forma clara y legible en la pantalla para que los diferentes contenidos estén bien diferenciados entre sí.</li>
                </ul>

                <h3 class="u-mt4">Buenas prácticas</h3>
                <ul class="List-text">
                    <li>Utilizar siempre las medidas de espaciado definidas por el sistema.</li>
                    <li>Mantener el mismo espaciado en componentes y estructuras similares.</li>
                    <li>Priorizar el uso del espacio para jerarquizar y ordenar la información antes que recurrir a otros recursos visuales.</li>
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

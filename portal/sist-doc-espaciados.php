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

                <h3 class="u-mt4">Tokens de espaciado</h3>
                <p class="u-mb3">El sistema define una escala progresiva de valores fijos. Cada token lleva como nombre su propio valor en píxeles, lo que facilita su identificación directa en código.</p>

                <img src="img/ejemplos_documentacion/espaciados.png" alt="Escala de tokens de espaciado" class="u-mb4" style="max-width: 100%;">

                <div class="table-responsive">
                    <table class="Table Table--striped">
                        <thead>
                            <tr>
                                <th>Variable</th>
                                <th>Valor</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr><td>espaciado-0</td><td>0px</td></tr>
                            <tr><td>espaciado-2</td><td>2px</td></tr>
                            <tr><td>espaciado-4</td><td>4px</td></tr>
                            <tr><td>espaciado-8</td><td>8px</td></tr>
                            <tr><td>espaciado-12</td><td>12px</td></tr>
                            <tr><td>espaciado-16</td><td>16px</td></tr>
                            <tr><td>espaciado-20</td><td>20px</td></tr>
                            <tr><td>espaciado-24</td><td>24px</td></tr>
                            <tr><td>espaciado-28</td><td>28px</td></tr>
                            <tr><td>espaciado-32</td><td>32px</td></tr>
                            <tr><td>espaciado-36</td><td>36px</td></tr>
                            <tr><td>espaciado-40</td><td>40px</td></tr>
                            <tr><td>espaciado-48</td><td>48px</td></tr>
                            <tr><td>espaciado-56</td><td>56px</td></tr>
                            <tr><td>espaciado-64</td><td>64px</td></tr>
                            <tr><td>espaciado-72</td><td>72px</td></tr>
                            <tr><td>espaciado-80</td><td>80px</td></tr>
                            <tr><td>espaciado-88</td><td>88px</td></tr>
                            <tr><td>espaciado-96</td><td>96px</td></tr>
                            <tr><td>espaciado-104</td><td>104px</td></tr>
                            <tr><td>espaciado-112</td><td>112px</td></tr>
                            <tr><td>espaciado-120</td><td>120px</td></tr>
                            <tr><td>espaciado-128</td><td>128px</td></tr>
                            <tr><td>espaciado-136</td><td>136px</td></tr>
                            <tr><td>espaciado-144</td><td>144px</td></tr>
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

<?php include "inc/foot.php"; ?>

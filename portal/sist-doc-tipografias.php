<?php
  $title = 'Tipografías';
?>
<?php include "inc/head.php"; ?>

  <!-- Cabezal -->
  <?php include "inc/header.php"; ?>

  <!-- Breadcrumb -->
  <div class="Breadcrumb">
    <div class="Container">
      <ul>
        <li><a href="index.php">Inicio</a></li>
        <li>Estilos globales</li>
        <li>Tipografías</li>
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
              $activeItem = 'tipografias';
              include "inc/nav-estilos.php"; 
            ?>
            
          </div>

          <div class="Grid-item u-md-size3of4">
            <div class="Page-body">

              <div class="Page-document">

                <span class="Page-subtitle">Estilos globales</span>
                <h2 class="Page-title">Tipografías</h2>
                
                 <div class="Page-info">
                  <div class="Bar">
                    <div class="Bar-cell">
                      <div class="Page-date">Versión 1.0</div>
                    </div>
                  </div>
                </div>
                
                <p class="Page-description">La tipografía es uno de los pilares fundamentales del sistema de diseño, ya que define la jerarquía de la información y asegura la legibilidad de los contenidos en los distintos soportes.</p>

                <h3 class="u-mt4">Familias tipográficas</h3>
                <p class="u-mb3">El sistema utiliza dos familias tipográficas, cada una con un propósito específico:</p>
                <ul class="List-text u-mb4">
                    <li><strong>Open Sans:</strong> Es la tipografía principal del sistema. Se utiliza para títulos, párrafos y la mayoría de los textos de la interfaz por su alta legibilidad en entornos digitales.</li>
                    <li><strong>Sora:</strong> Se utiliza exclusivamente para el texto identificatorio del organismo en el cabezal. El uso de Sora fuera de este contexto no está contemplado dentro del sistema.</li>
                </ul>

                <h3 class="u-mt4">Estilos</h3>
                <p class="u-mb3">Se definen estilos tipográficos para títulos, párrafos y textos especiales. Cada estilo se define por: familia tipográfica, tamaño de fuente, peso y altura de línea.</p>

                <h4 class="u-mt3">Títulos</h4>
                <p class="u-mb3">Los títulos se utilizan para estructurar el contenido y guiar la lectura. Utilizan la familia <strong>Open Sans</strong> y los pesos Light, Regular, Semibold y Bold.</p>
                <img src="img/ejemplos_documentacion/tipografias_titulos.png" alt="Escala de títulos tipográficos" class="u-mb3" style="max-width: 100%;">
                <div class="table-responsive u-mb5">
                    <table class="Table Table--striped">
                        <thead>
                            <tr>
                                <th>Estilo</th>
                                <th>Tamaño</th>
                                <th>Altura de línea</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr><td>Título XXL</td><td>40px</td><td>48px (120%)</td></tr>
                            <tr><td>Título XL</td><td>32px</td><td>38px (120%)</td></tr>
                            <tr><td>Título L</td><td>28px</td><td>34px (130%)</td></tr>
                            <tr><td>Título M</td><td>24px</td><td>31px (140%)</td></tr>
                            <tr><td>Título S</td><td>20px</td><td>28px (140%)</td></tr>
                            <tr><td>Título XS</td><td>16px</td><td>24px (150%)</td></tr>
                        </tbody>
                    </table>
                </div>

                <h4 class="u-mt4">Párrafos</h4>
                <p class="u-mb3">Los estilos de párrafos se utilizan para el contenido principal y los textos descriptivos. El tamaño M (16px) es el tamaño base recomendado.</p>
                <img src="img/ejemplos_documentacion/tipografias_parrafos.png" alt="Escala de párrafos tipográficos" class="u-mb3" style="max-width: 100%;">
                <div class="table-responsive u-mb5">
                    <table class="Table Table--striped">
                        <thead>
                            <tr>
                                <th>Estilo</th>
                                <th>Tamaño</th>
                                <th>Altura de línea</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr><td>Párrafo XL</td><td>20px</td><td>28px (140%)</td></tr>
                            <tr><td>Párrafo L</td><td>18px</td><td>25px (140%)</td></tr>
                            <tr><td>Párrafo M</td><td>16px</td><td>24px (150%)</td></tr>
                            <tr><td>Párrafo S</td><td>14px</td><td>21px (150%)</td></tr>
                            <tr><td>Párrafo XS</td><td>12px</td><td>18px (150%)</td></tr>
                        </tbody>
                    </table>
                </div>

                <h4 class="u-mt4">Estilos de texto especial</h4>
                <p class="u-mb3">Los estilos de texto especiales corresponden a usos tipográficos específicos que no forman parte del flujo general de lectura.</p>
                <div class="table-responsive u-mb5">
                    <table class="Table Table--striped">
                        <thead>
                            <tr>
                                <th>Estilo</th>
                                <th>Familia</th>
                                <th>Tamaño</th>
                                <th>Altura de línea</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr><td>Organismo cabezal</td><td>Sora</td><td>16px</td><td>21px (130%)</td></tr>
                        </tbody>
                    </table>
                </div>

                <h3 class="u-mt4">Uso responsivo</h3>
                <p class="u-mb3">El sistema tipográfico está diseñado para adaptarse a distintos tamaños de pantalla. Los párrafos mantienen los mismos valores en móvil y escritorio. Los títulos se ajustan según el dispositivo:</p>
                <div class="table-responsive u-mb5">
                    <table class="Table Table--striped">
                        <thead>
                            <tr>
                                <th>Nivel</th>
                                <th>Escritorio</th>
                                <th>Móvil</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr><td>XXL</td><td>40px</td><td>32px</td></tr>
                            <tr><td>XL</td><td>32px</td><td>28px</td></tr>
                            <tr><td>L</td><td>28px</td><td>24px</td></tr>
                            <tr><td>M</td><td>24px</td><td>20px</td></tr>
                            <tr><td>S</td><td>20px</td><td>18px</td></tr>
                            <tr><td>XS</td><td>16px</td><td>16px</td></tr>
                        </tbody>
                    </table>
                </div>

                <h3 class="u-mt4">Buenas prácticas</h3>
                <ul class="List-text">
                    <li>Utilizar siempre los estilos tipográficos definidos por el sistema.</li>
                    <li>Evitar combinaciones personalizadas de tamaño, peso y altura de línea.</li>
                    <li>Priorizar la jerarquía por tamaño antes que por peso.</li>
                    <li>Mantener consistencia entre pantallas similares.</li>
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

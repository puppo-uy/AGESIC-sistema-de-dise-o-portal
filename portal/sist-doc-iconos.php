<?php
  $title = 'Íconos';
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
        <li>Íconos</li>
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
              $activeItem = 'iconos';
              include "inc/nav-componentes.php"; 
            ?>
            
          </div>

          <div class="Grid-item u-md-size3of4">
            <div class="Page-body">

              <div class="Page-document">

                <span class="Page-subtitle">Componentes</span>
                <h2 class="Page-title">Íconos</h2>
                
                 <div class="Page-info">
                  <div class="Bar">
                    <div class="Bar-cell">
                      <div class="Page-date">Versión 1.0</div>
                    </div>
                  </div>
                </div>
                
                <p class="Page-description">Los íconos permiten comunicar acciones, estados o conceptos de forma visual y sintética. Se utilizan para reforzar el significado de textos, optimizar el espacio en la interfaz y/o facilitar el reconocimiento rápido de acciones o información.</p>
                <p>Dentro del sistema de diseño, los íconos se utilizan siempre como elementos de apoyo, ya sea acompañando texto o como parte de otros componentes.</p>

                <h3>Variantes</h3>
                <h4>Tamaño</h4>
                <p class="u-mb2">Existen distintos tamaños predefinidos que permiten adaptar los íconos al contexto de uso sin perder legibilidad.</p>

                <div class="table-responsive">
                    <table class="Table Table--striped">
                        <thead>
                            <tr>
                                <th>Referencia</th>
                                <th>Nombre de la variante</th>
                                <th>Tamaño en píxeles</th>
                            </tr>
                        </thead>
                        <tbody>
                             <tr>
                                 <td style="min-height: 56px; vertical-align: middle;"><iframe src="../git/iframe-preview.php?comp=icono&name=buscar--lineal&size=xxl&nopadding=1" title="Ejemplo de ícono tamaño XXL" width="48" height="48" style="border: none; overflow: hidden; display: block; margin: auto;" scrolling="no"></iframe></td>
                                 <td>XXL</td>
                                 <td>48px</td>
                             </tr>
                             <tr>
                                 <td style="min-height: 56px; vertical-align: middle;"><iframe src="../git/iframe-preview.php?comp=icono&name=buscar--lineal&size=xl&nopadding=1" title="Ejemplo de ícono tamaño XL" width="40" height="40" style="border: none; overflow: hidden; display: block; margin: auto;" scrolling="no"></iframe></td>
                                 <td>XL</td>
                                 <td>40px</td>
                             </tr>
                             <tr>
                                 <td style="min-height: 56px; vertical-align: middle;"><iframe src="../git/iframe-preview.php?comp=icono&name=buscar--lineal&size=l&nopadding=1" title="Ejemplo de ícono tamaño L" width="32" height="32" style="border: none; overflow: hidden; display: block; margin: auto;" scrolling="no"></iframe></td>
                                 <td>L</td>
                                 <td>32px</td>
                             </tr>
                             <tr>
                                 <td style="min-height: 56px; vertical-align: middle;"><iframe src="../git/iframe-preview.php?comp=icono&name=buscar--lineal&size=m&nopadding=1" title="Ejemplo de ícono tamaño M" width="24" height="24" style="border: none; overflow: hidden; display: block; margin: auto;" scrolling="no"></iframe></td>
                                 <td>M</td>
                                 <td>24px</td>
                             </tr>
                             <tr>
                                 <td style="min-height: 56px; vertical-align: middle;"><iframe src="../git/iframe-preview.php?comp=icono&name=buscar--lineal&size=s&nopadding=1" title="Ejemplo de ícono tamaño S" width="20" height="20" style="border: none; overflow: hidden; display: block; margin: auto;" scrolling="no"></iframe></td>
                                 <td>S</td>
                                 <td>20px</td>
                             </tr>
                             <tr>
                                 <td style="min-height: 56px; vertical-align: middle;"><iframe src="../git/iframe-preview.php?comp=icono&name=buscar--lineal&size=xs&nopadding=1" title="Ejemplo de ícono tamaño XS" width="16" height="16" style="border: none; overflow: hidden; display: block; margin: auto;" scrolling="no"></iframe></td>
                                 <td>XS</td>
                                 <td>16px</td>
                             </tr>
                             <tr>
                                 <td style="min-height: 56px; vertical-align: middle;"><iframe src="../git/iframe-preview.php?comp=icono&name=buscar--lineal&size=xxs&nopadding=1" title="Ejemplo de ícono tamaño XXS" width="12" height="12" style="border: none; overflow: hidden; display: block; margin: auto;" scrolling="no"></iframe></td>
                                 <td>XXS</td>
                                 <td>12px</td>
                             </tr>
                        </tbody>
                    </table>
                </div>

                <h4>Formato</h4>
                 <h5 class="u-mt4">Lineales y rellenos</h5>
                 <iframe src="../git/iframe-preview.php?comp=icono&type=comparativa" title="Ejemplo de íconos lineales y rellenos" class="component-preview u-mb3" style="width: 100%; border: none; min-height: 100px;" scrolling="no"></iframe>
                 <p>Íconos de trazo simple o lineales, recomendados para la mayoría de los usos.</p>
                 <p>Íconos de forma sólida, rellenos, utilizados cuando se necesita mayor presencia visual o para indicar estado de activo.</p>
 
                 <h3>Íconos especiales</h3>
                 <h4>Avatar de usuario</h4>
                 <iframe src="../git/iframe-preview.php?comp=icono&type=avatar" title="Ejemplo de avatar de usuario" class="component-preview u-mb3" style="width: 100%; border: none; min-height: 80px;" scrolling="no"></iframe>
                 <p>El Avatar de usuario es un ícono específico, construido mediante CSS, que se utiliza como indicador de usuario autenticado dentro de la interfaz, y puede aparecer, por ejemplo, en el cabezal o en contextos asociados al perfil del usuario.</p>
                <p>Este ícono se comporta de la misma forma que el resto de los íconos del sistema, teniendo de variantes los mismos tamaños disponibles.</p>
                <p>Su uso está limitado a contextos relacionados con la identidad del usuario y no debe utilizarse con fines decorativos ni como reemplazo de otros íconos funcionales.</p>

                <h3>Accesibilidad</h3>
                <h4>Recomendaciones para no perder la accesibilidad</h4>
                <ul class="List-text">
                    <li>No utilizar íconos como único medio para transmitir información.</li>
                    <li>Asegurar contraste suficiente entre el ícono y el fondo.</li>
                    <li>Acompañar los íconos con texto cuando representen acciones.</li>
                    <li>Proveer textos alternativos o etiquetas accesibles cuando el ícono sea interactivo.</li>
                </ul>

                <h3>Criterios de diseño y uso en Figma</h3>
                <h4>Uso de íconos</h4>
                <p>Para insertar un ícono, arrastrar una instancia del componente padre desde "Recursos" y luego:</p>
                
                <ol class="List-text">
                    <li>Seleccionar en las propiedades del componente:
                        <ul class="List-text">
                            <li>Tamaño</li>
                            <li>Formato</li>
                            <li>Vector del ícono</li>
                        </ul>
                    </li>
                    <li class="u-mt2">Para cambiar el color, aplicar una variable semántica de color en el relleno de la instancia.</li>
                </ol>

                <h4 class="u-mt4">Construcción de un nuevo ícono</h4>
                <p>Para agregar un nuevo ícono al kit de íconos en Figma, debe hacerse desde el grupo de variantes "icono_vector" siguiendo los siguientes criterios:</p>
                
                <ul class="List-text">
                    <li>Todos los vectores de íconos deben llamarse "icono".</li>
                    <li>Cada vector debe estar contenido dentro de un frame sin auto layout de 24px × 24px, con relación de aspecto bloqueada.</li>
                    <li>El vector debe estar centrado vertical y horizontalmente en el frame</li>
                    <li>Comportamiento de reescalado (Constraints):
                        <ul class="List-text">
                            <li>Horizontal: center</li>
                            <li>Vertical: scale</li>
                        </ul>
                    </li>
                    <li>El color de relleno del vector debe ser siempre el color semántico "neutro-0" (blanco), para permitir que los cambios de variables funcionen correctamente en las instancias.</li>
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

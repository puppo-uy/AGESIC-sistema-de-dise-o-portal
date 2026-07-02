<?php
  $title = 'Grillas y módulo flex';
?>
<?php include "inc/head.php"; ?>

  <!-- Cabezal -->
  <?php include "inc/header.php"; ?>

  <!-- Breadcrumb -->
  <div class="Breadcrumb">
    <div class="Container">
      <ul>
        <li><a href="sist-que-es.php">Inicio</a></li>
        <li>Grillas y módulo flex</li>
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
              $activeItem = 'estructura';
              include "inc/nav-estilos.php"; 
            ?>
            
          </div>

          <div class="Grid-item u-md-size3of4">
            <div class="Page-body">

              <div class="Page-document Ejemplo-grillas-flex">

                <span class="Page-subtitle">Estilos globales</span>
                <h2 class="Page-title">Grillas y módulo flex</h2>
                
                 <div class="Page-info">
                  <div class="Bar">
                    <div class="Bar-cell">
                      <div class="Page-date">Versión 1.0</div>
                    </div>
                  </div>
                </div>
                
                <p>Las directrices de grillas y el módulo flex definen cómo deben organizarse los elementos de la interfaz para asegurar una lectura clara y consistente en diferentes dispositivos móviles o de escritorio.</p>
                
                <h3 class="u-mt4">Grillas: Sistema de grillas (CSS Grid)</h3>
                <p>Este sistema define una grilla responsiva basada en CSS Grid, con soporte para:</p>
                <ul class="List-text">
                    <li>Elemento contenedor <code>.container</code></li>
                    <li>Filas <code>.row</code> que agrupan las grillas</li>
                    <li>Columnas mediante:
                        <ul class="List-text">
                            <li>Cantidad de columnas por fila <code>.row.row-cols-N</code></li>
                            <li>Anchos específicos <code>.col-N</code></li>
                            <li>Variantes responsivas <code>.row-cols-sm-N</code>, <code>.col-md-N</code>, etc.</li>
                        </ul>
                    </li>
                </ul>
                <p class="u-mt2">El uso de grillas por Grid, es ideal para estructuras precisas.</p>

                <h4 class="u-mt4">Elemento contenedor .container</h4>
                <p>Define el ancho del contenido de la pantalla.</p>

                <h4 class="u-mt4">Fila .row</h4>
                <p>La fila funciona como contenedor de columnas:</p>
                <ul class="List-text">
                    <li>En móviles: 1 columna</li>
                    <li>A partir de sm (768px): 12 columnas</li>
                </ul>

                <h4 class="u-mt4">Control por cantidad de columnas .row.row-cols-</h4>
                <p>Controla cuantas columnas tendrá la fila, sin importar cuántos elementos contiene.<br>
                Ejemplo: <code>.row row-cols-3</code>. A partir de sm (768px), divide la fila en 3 columnas iguales.</p>
                <div class="row row-cols-3">
                    <div class="col"><div>Columna</div></div>
                    <div class="col"><div>Columna</div></div>
                    <div class="col"><div>Columna</div></div>
                    <div class="col"><div>Columna</div></div>
                </div>

                <h5 class="u-mt2">Variaciones responsivas</h5>
                <p>Al ejemplo anterior le incorporamos comportamientos diferentes dependiendo del ancho de la pantalla<br>
                Ejemplo: <code>.row row-cols-1 row-cols-md-3 row-cols-lg-4</code>. Hasta md divide la fila en una sola columna, a partir de md pasa a 3 columnas, y desde lg a 4.</p>

                <h4 class="u-mt4">Columnas con ancho específico .col-*</h4>
                <p>Permite que una columna ocupe un número específico de columnas del grid (12 en total).</p>
                <div class="row">
                    <div class="col-8">.col-8</div>
                    <div class="col-4">.col-4</div>
                </div>
                <p>También se pueden incorporar una o varias columnas sin necesidad de llegar a completar los 12 espacios de la grilla. En todos los casos, en móviles las columnas siempre ocupan el 100% de la fila.</p>
                <div class="row">
                    <div class="col-3">.col-3</div>
                    <div class="col-5">.col-5</div>
                </div>
                
                <h5 class="u-mt2">Variaciones responsivas</h5>
                <p>También pueden variar los anchos de las columnas dependiendo del ancho de la pantalla (ejemplo: <code>col-sm-6 col-lg-4</code>).</p>

                <h4 class="u-mt4">Forzar columnas en móviles .row--no-stack</h4>
                <p>En una grilla tradicional, en dispositivos móviles todos los elementos se apilan en una sola columna (1fr). Esto es lo esperado en diseño mobile-first para mejorar legibilidad y accesibilidad.<br>
                Sin embargo, hay casos de uso donde se desea mantener múltiples columnas incluso en móviles, por ejemplo:</p>
                <ul class="List-text">
                    <li>campos de fecha divididos en partes (Día, Mes, Año)</li>
                    <li>formularios con campos cortos que conviene mostrar en línea</li>
                </ul>
                <p class="u-mt2">Para esos casos, se provee una clase modificadora en el contenedor <code>.row</code> y es <code>.row--no-stack</code>.</p>
                <div class="row row--no-stack">
                    <div class="col-8">.col-8 (.row--no-stack)</div>
                    <div class="col-4">.col-4 (.row--no-stack)</div>
                </div>
                
                <h5 class="u-mt2">Tamaños de columnas en móviles col-m-*</h5>
                <p>Al mismo tiempo, se incluye la posibilidad de controlar el ancho de la columna en tamaños menores a sm. La forma de hacerlo es a través de un class extra <code>col-m-N</code> donde N representa al número de columnas.</p>
                <p>Nota: si no se incluye el class <code>col-m-*</code> en la columna, la misma tomará el class <code>col-*</code> de la columna.</p>

                <hr class="u-mt6 u-mb6">

                <h3 class="u-mt4">Módulo flex: Distribución y alineación de elementos (CSS Flex)</h3>
                <p>El Módulo Flex permite controlar la relaciones de alineación y distribución entre elementos sin depender del sistema grid. Provee utilidades básicas para controlar contenedores flex: <code>justify-content</code>, <code>align-items</code> y <code>flex-direction</code>.</p>

                <h4 class="u-mt4">Elemento contenedor .mod-flex</h4>
                <p>La clase <code>.mod-flex</code> es la que activa el comportamiento flex sobre el contenedor. Los valores por defecto son los siguientes:</p>
                <ul class="List-text">
                    <li><strong>En móviles:</strong> <code>flex-direction: column</code>, <code>justify-content: flex-start</code>, <code>align-items: stretch</code></li>
                    <li><strong>A partir de sm (768px):</strong> <code>flex-direction: row</code>, <code>justify-content: space-between</code>, <code>align-items: flex-start</code></li>
                </ul>
                <div class="mod-flex u-mb4">
                    <div>Elemento 1</div>
                    <div>Elemento 2</div>
                    <div>Elemento 3</div>
                </div>
                <div class="mod-flex">
                    <div>Elemento 1</div>
                    <div>Elemento 2</div>
                    <div>Elemento 3</div>
                    <div>Elemento 4</div>
                    <div>Elemento 5</div>
                    <div>Elemento 6</div>
                </div>

                <h4 class="u-mt4">Utilizades disponibles</h4>
                <ul class="List-text">
                    <li><strong>Justify-content:</strong> <code>.flex-justify-start</code>, <code>.flex-justify-center</code>, <code>.flex-justify-end</code>, <code>.flex-justify-between</code>, <code>.flex-justify-around</code></li>
                    <li><strong>Align-items:</strong> <code>.flex-items-start</code>, <code>.flex-items-center</code>, <code>.flex-items-end</code>, <code>.flex-items-stretch</code></li>
                    <li><strong>Flex-direction:</strong> <code>.flex-dir-row</code>, <code>.flex-dir-column</code></li>
                </ul>

                <h5 class="u-mt4">Variantes responsive (a partir de sm / 768px)</h5>
                <p>A estas utilidades se les incorpora el prefijo <code>sm-</code> en el class. Ejemplos:</p>
                <ul class="List-text">
                    <li><code>.sm-flex-justify-center</code>, <code>.sm-flex-justify-between</code>, etc.</li>
                    <li><code>.sm-flex-items-center</code>, <code>.sm-flex-items-start</code>, etc.</li>
                    <li><code>.sm-flex-dir-row</code>, <code>.sm-flex-dir-column</code>, etc.</li>
                    <li><code>.sm-stack</code>, utilidad práctica que fuerza <code>flex-direction: column</code></li>
                </ul>
                <p class="u-mt2">Ejemplo de contenedor con atributos extra (<code>flex-justify-center sm-flex-items-center</code>):</p>
                <div class="mod-flex flex-justify-center sm-flex-items-center" style="min-height: 150px;">
                    <div>Elemento centrado 1</div>
                    <div>Elemento centrado 2</div>
                </div>


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

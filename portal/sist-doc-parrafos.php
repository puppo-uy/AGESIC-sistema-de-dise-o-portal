<?php
  $title = 'Párrafos';
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
        <li>Párrafos</li>
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
              $activeItem = 'parrafos';
              include "inc/nav-componentes.php"; 
            ?>
            
          </div>

          <div class="Grid-item u-md-size3of4">
            <div class="Page-body">

              <div class="Page-document">

                <span class="Page-subtitle">Textos</span>
                <h2 class="Page-title">Párrafos</h2>
                
                <p class="Page-description">Los párrafos son componentes de texto encargados de presentar el contenido principal y los textos de apoyo dentro de la interfaz. Se utilizan para desarrollar los contenidos introducidos por los títulos.</p>

                <h3 class="u-mt4">Estructura del componente</h3>
                <img src="img/ejemplos_documentacion/parrafos.png" alt="Ejemplo de Párrafos" class="u-mb3" style="max-width: 100%;">

                <h3>Recomendaciones de uso</h3>
                <h4>Casos típicos de uso</h4>
                <ul class="List-text">
                    <li>Texto principal de una página o sección.</li>
                    <li>Descripciones de contenidos, funcionalidades o procesos.</li>
                    <li>Textos explicativos asociados a otros componentes.</li>
                </ul>

                <h4>Cuándo no usarlos</h4>
                <ul class="List-text">
                    <li>Para títulos o encabezados (usar el componente de Títulos).</li>
                </ul>

                <h3>Buenas prácticas</h3>
                <ul class="List-text">
                    <li>Mantener la alineación del texto en bandera a la izquierda para facilitar la lectura.</li>
                    <li>Separar los párrafos utilizando el espaciado definido por el sistema.</li>
                    <li>Evitar bloques de texto extensos sin divisiones visuales.</li>
                    <li>Evitar utilizar párrafos completos en peso semibold. Utilizar este recurso solo para resaltar información importante.</li>
                </ul>

                <h3>Variantes</h3>
                <p class="u-mb2">Los párrafos cuentan con tres variantes, que deben utilizarse según la jerarquía del contenido.</p>
                <div class="table-responsive">
                    <table class="Table">
                        <thead>
                            <tr>
                                <th>Componente</th>
                                <th>Estilo tipográfico</th>
                                <th>Peso</th>
                                <th>Uso</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Párrafo principal</td>
                                <td>Párrafo XL</td>
                                <td>Regular, Semibold</td>
                                <td>Contenido descriptivo principal de la pantalla. Generalmente se ubica inmediatamente debajo del Encabezado 1 y funciona como introducción o síntesis del contenido.</td>
                            </tr>
                            <tr>
                                <td>Párrafo secundario</td>
                                <td>Párrafo M</td>
                                <td>Regular, Semibold</td>
                                <td>Desarrollo del contenido. Aplica a la mayoría de los textos que continúan al párrafo principal dentro de una misma pantalla o sección.</td>
                            </tr>
                            <tr>
                                <td>Párrafo de apoyo</td>
                                <td>Párrafo S</td>
                                <td>Regular, Semibold</td>
                                <td>Información secundaria, aclaraciones o textos de apoyo. Debe aplicarse únicamente en contextos de menor jerarquía visual y semántica.</td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <h3>Accesibilidad</h3>
                <h5 class="u-mt4">Recomendaciones para no perder la accesibilidad</h5>
                <ul class="List-text">
                    <li>Asegurar contraste suficiente entre el texto y el fondo.</li>
                    <li>Evitar textos demasiado largos sin separación en párrafos.</li>
                    <li>Utilizar un lenguaje claro y comprensible.</li>
                </ul>

                <h3>Componentes relacionados</h3>
                <ul class="List-text">
                    <li><a href="sist-doc-titulos.php">Títulos</a></li>
                    <li><a href="sist-doc-listados.php">Listados</a></li>
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

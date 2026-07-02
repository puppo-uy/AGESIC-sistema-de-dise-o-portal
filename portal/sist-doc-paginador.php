<?php
  $title = 'Paginador';
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
        <li>Paginador</li>
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
              $activeItem = 'paginador';
              include "inc/nav-componentes.php"; 
            ?>
            
          </div>

          <div class="Grid-item u-md-size3of4">
            <div class="Page-body">

              <div class="Page-document">

                <span class="Page-subtitle">Navegación</span>
                <h2 class="Page-title">Paginador</h2>
                
                 <div class="Page-info">
                  <div class="Bar">
                    <div class="Bar-cell">
                      <div class="Page-date">Versión 1.0</div>
                    </div>
                  </div>
                </div>
                
                <p class="Page-description">El paginador es un componente de navegación que permite al usuario recorrer contenido dividido en múltiples páginas. Facilita la navegación por grandes volúmenes de información de forma ordenada y controlada.</p>

                <h3 class="u-mt4">Estructura del componente</h3>
                <img src="img/ejemplos_documentacion/paginador.png" alt="Estructura de Paginador" class="u-mb3" style="max-width: 100%;">
                <h5 class="u-mt3">Elementos que lo componen</h5>
                <ul class="List-text">
                    <li>Botones</li>
                    <li>Texto</li>
                    <li>Colores</li>
                    <li>Números</li>
                    <li>Íconos</li>
                </ul>

                <h3 class="u-mt4">Recomendaciones de uso</h3>
                <h4 class="u-mt3">Casos típicos de uso</h4>
                <ul class="List-text">
                    <li>Contenidos extensos que requieren división en múltiples páginas.</li>
                    <li>Listados donde es necesario controlar la cantidad de información visible.</li>
                </ul>

                <h4 class="u-mt3">Cuándo no usarlo</h4>
                <ul class="List-text">
                    <li>En contenidos breves que pueden mostrarse completos.</li>
                    <li>En formularios o procesos paso a paso (usar menú de pasos).</li>
                </ul>

                <h3 class="u-mt4">Buenas prácticas</h3>
                <ul class="List-text">
                    <li>Utilizar la variante estándar a menos que sea necesario usar la otra por la disponibilidad del espacio en pantalla o el contexto. Utilizar el paginador compacto solo en tablas o vistas densas.</li>
                    <li>Mantener consistencia en su ubicación, generalmente al pie del contenido.</li>
                    <li>En tablas o vistas extensas, puede repetirse arriba y abajo.</li>
                    <li>Incluir información contextual cuando aporte claridad, por ejemplo: “Mostrando X de Y resultados”.</li>
                </ul>

                <h3 class="u-mt4">Variantes</h3>
                <h4 class="u-mt3">Estándar</h4>
                <img src="img/ejemplos_documentacion/paginador.png" alt="Variante Estándar" class="u-mb2 u-mt2" style="max-width: 100%;">
                <p class="u-mb4">Se utiliza para listados extensos de contenido donde el usuario puede necesitar navegar rápidamente a otras páginas.</p>

                <h4 class="u-mt3">Compacto</h4>
                <img src="img/ejemplos_documentacion/paginador_compacto.png" alt="Variante Compacta" class="u-mb2 u-mt2" style="max-width: 100%;">
                <p class="u-mb4">Diseñado para usarse en tablas, aplicaciones, o en contextos donde el espacio es limitado.</p>

                <h3 class="u-mt4">Accesibilidad</h3>
                <h4>WCAG Nivel AAA</h4>
                <h5 class="u-mt3">Recomendaciones para no perder la accesibilidad</h5>
                <ul class="List-text">
                    <li>Permitir la navegación por teclado entre los controles del paginador.</li>
                    <li>Indicar de forma explícita la página actual.</li>
                    <li>No cambiar textos de botones, ni colores del componente.</li>
                </ul>

                <h3 class="u-mt4">Componentes relacionados</h3>
                <ul class="List-text">
                    <li><a href="sist-doc-menu-pasos.php">Menú de pasos</a></li>
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

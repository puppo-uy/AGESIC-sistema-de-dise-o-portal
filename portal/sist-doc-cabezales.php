<?php
  $title = 'Cabezales';
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
        <li>Cabezales</li>
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
              $activeItem = 'cabezales';
              include "inc/nav-componentes.php"; 
            ?>
            
          </div>

          <div class="Grid-item u-md-size3of4">
            <div class="Page-body">

              <div class="Page-document">

                <span class="Page-subtitle">Navegación</span>
                <h2 class="Page-title">Cabezales</h2>
                
                 <div class="Page-info">
                  <div class="Bar">
                    <div class="Bar-cell">
                      <div class="Page-date">Versión 1.0</div>
                    </div>
                  </div>
                </div>
                
                <p class="Page-description">El cabezal es un componente de navegación y contexto ubicado en la parte superior de la interfaz. En él se encuentran la identidad del sitio o aplicación, y el acceso a acciones o secciones clave según el tipo de producto.</p>
                
                <h3 class="u-mt4 u-mb3">Cabezal de aplicación</h3>
                <p>Este cabezal se utiliza únicamente en aplicaciones web. Su función principal es brindar contexto sobre la aplicación y ofrecer acceso a las acciones relacionadas con la sesión del usuario y las notificaciones.</p>

                <h4 class="u-mt4">Estructura del componente</h4>
                 <iframe src="../git/iframe-preview.php?comp=header-app" title="Ejemplo de estructura de cabezal de aplicación" class="component-preview u-mb3" style="width: 100%; border: none; min-height: 80px;" scrolling="no"></iframe>
                <h5 class="u-mt3">Elementos que lo componen</h5>
                <ul class="List-text">
                    <li>Iconos</li>
                    <li>Texto</li>
                    <li>Fondo</li>
                    <li>Bordes</li>
                    <li>Identidad (isotipo y nombre)</li>
                    <li>Accesos</li>
                    <li>Menú (versión móvil)</li>
                </ul>

                <h4 class="u-mt4">Recomendaciones de uso</h4>
                
                <p>Aplicaciones web, donde el foco está puesto en la realización de tareas que requieren interacción con un sistema y no meramente el consumo de información estática.</p>

                <h5 class="u-mt3">Cuándo no usarlo</h5>
                <ul class="List-text">
                    <li>En portales institucionales o sitios web de carácter informativo.</li>
                </ul>

                <h5 class="u-mt3">Buenas prácticas</h5>
                <ul class="List-text">
                    <li>Mantener el color propuesto por el sistema salvo que haya una razón de fuerza mayor que requiera una presencia de otro color por el contexto de navegación de la aplicación.</li>
                    <li>Evitar agregar accesos o funcionalidades nuevas.</li>
                    <li>Evitar el uso del cabezal móvil en pantallas de escritorio.</li>
                </ul>

                <h4 class="u-mt4">Comportamiento responsive</h4>
                <h5 class="u-mt3">Escritorio</h5>
                 <iframe src="../git/iframe-preview.php?comp=header-app" title="Ejemplo de cabezal de aplicación en escritorio" class="component-preview u-mb2 u-mt2" style="width: 100%; border: none; min-height: 80px;" scrolling="no"></iframe>
                <ul class="List-text">
                    <li>Se presenta en una única fila horizontal.</li>
                    <li>La identidad de la aplicación se ubica a la izquierda.</li>
                    <li>Los accesos de usuario y notificaciones se ubican a la derecha.</li>
                    <li>Está separado del menú de navegación.</li>
                </ul>

                <h5 class="u-mt3">Móvil</h5>
                 <iframe src="../git/iframe-preview.php?comp=header-app" title="Ejemplo de cabezal de aplicación en móvil" class="component-preview u-mb2 u-mt2" style="width: 100%; max-width: 360px; border: 1px solid #ddd; min-height: 80px; margin: 0 auto; display: block;" scrolling="no"></iframe>
                <ul class="List-text">
                    <li>Se adapta para ocupar menos espacio.</li>
                    <li>La identidad se presenta en formato reducido en la parte superior, en una única fila.</li>
                    <li>Se accede a la navegación principal mediante un botón de menú hamburguesa.</li>
                    <li>Los accesos de usuario y notificaciones se representan solo con íconos.</li>
                </ul>


                <h3>Accesibilidad</h3>
                <h4>WCAG Nivel AAA</h4>
                <h5 class="u-mt4">Recomendaciones para no perder la accesibilidad</h5>
                <ul class="List-text">
                    <li>Permitir la navegación por teclado a todos los elementos interactivos.</li>
                    <li>Proveer etiquetas accesibles para íconos sin texto visible.</li>
                    <li>Mantener un orden lógico de lectura para el lector de pantallas.</li>
                </ul>

                <h3 class="u-mt4">Componentes relacionados</h3>
                <ul class="List-text">
                    <li><a href="sist-doc-menu.php">Menú de navegación</a></li>
                    <li><a href="sist-doc-breadcrumb.php">Breadcrumb</a></li>
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

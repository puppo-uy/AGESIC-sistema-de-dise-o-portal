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

                 <h3 class="u-mt4">Estructura del componente</h3>
                 <iframe src="iframe-preview.php?comp=header-app" title="Ejemplo de estructura de cabezal de aplicación" class="component-preview u-mb3" style="width: 100%; border: none; min-height: 80px;" scrolling="no"></iframe>
                 <h5 class="u-mt3">Elementos que lo componen:</h5>
                 <ul class="List-text">
                     <li>Logo del organismo / Marca</li>
                     <li>Título de la aplicación</li>
                     <li>Botón de menú / Navegación (móvil)</li>
                     <li>Buscador / Acciones secundarias (opcional)</li>
                     <li>Selector de perfil / Usuario (opcional)</li>
                 </ul>

                 <h3 class="u-mt4">Recomendaciones de uso</h3>
                 <h4 class="u-mt3">Casos típicos de uso</h4>
                 <ul class="List-text">
                     <li>Como encabezado superior en sistemas web, trámites en línea y aplicaciones de gobierno.</li>
                     <li>Para mantener la identidad institucional visible en todo momento durante el uso de la aplicación.</li>
                 </ul>

                 <h4 class="u-mt3">Cuándo no usarlo</h4>
                 <ul class="List-text">
                     <li>En sitios institucionales o portales informativos donde se debe utilizar el cabezal estándar de gub.uy.</li>
                 </ul>

                 <h3 class="u-mt4">Modos y comportamiento responsive</h3>
                 
                 <h4 class="u-mt3">Escritorio</h4>
                 <iframe src="iframe-preview.php?comp=header-app" title="Ejemplo de cabezal de aplicación en escritorio" class="component-preview u-mb2 u-mt2" style="width: 100%; border: none; min-height: 80px;" scrolling="no"></iframe>
                 <ul class="List-text">
                     <li>Muestra todos los elementos de navegación y acciones visibles horizontalmente.</li>
                 </ul>

                 <h4 class="u-mt4">Móvil</h4>
                 <iframe src="iframe-preview.php?comp=header-app" title="Ejemplo de cabezal de aplicación en móvil" class="component-preview u-mb2 u-mt2" style="width: 100%; max-width: 360px; border: 1px solid #ddd; min-height: 380px; margin: 0 auto; display: block;" scrolling="no"></iframe>
                <ul class="List-text">
                    <li>Se presenta en una única fila horizontal.</li>
                    <li>La identidad de la aplicación se ubica a la izquierda.</li>
                    <li>Los accesos de usuario y notificaciones se ubican a la derecha.</li>
                    <li>Está separado del menú de navegación.</li>
                </ul>

                <h5 class="u-mt3">Móvil</h5>
                 <iframe src="iframe-preview.php?comp=header-app" title="Ejemplo de cabezal de aplicación en móvil" class="component-preview u-mb2 u-mt2" style="width: 100%; max-width: 360px; border: 1px solid #ddd; min-height: 380px; margin: 0 auto; display: block;" scrolling="no"></iframe>
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

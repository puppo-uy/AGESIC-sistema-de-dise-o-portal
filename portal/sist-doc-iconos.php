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
                
                <p class="Page-description">Los íconos funcionales permiten comunicar acciones, estados o conceptos de forma visual y sintética. Se utilizan para reforzar el significado de textos, optimizar el espacio en la interfaz y/o facilitar el reconocimiento rápido de acciones o información.</p>
                <p>Los íconos propuestos por el sistema de diseño son íconos funcionales y están destinados a utilizarse dentro de componentes para aportar contexto o evidenciar acciones. Por ejemplo, pueden formar parte de botones, campos, controles, mensajes y otros componentes de la interfaz. Son los únicos íconos que deben utilizarse como parte de los componentes del sistema.</p>
                <p>Los íconos utilizados como parte del contenido quedan fuera del alcance de este sistema, ya que pueden responder a necesidades específicas de cada contenido y no necesariamente requieren seguir una referencia estética o comunicacional común.</p>
                
                

                <h3>Modos</h3>
                <h4>Tamaño</h4>
                <p class="u-mb2">Existen distintos tamaños predefinidos que permiten adaptar los íconos al contexto de uso sin perder legibilidad.</p>
                 <iframe src="iframe-preview.php?comp=icono/icono-tamanos" title="Ejemplo de tamaños de íconos" class="component-preview u-mb3" style="width: 100%; border: none; min-height: 100px;" scrolling="no"></iframe>
                                
                <h5 class="u-mt4">Colores</h5>  
                <p>Se recomeienda el uso de los colores semánticos definidos en los estilos globales. De usar otro tipo de colores se debe asegurar el correcto contraste con el fondo.</p>               
                <iframe src="iframe-preview.php?comp=icono/icono-colores" title="Ejemplo de avatar de usuario" class="component-preview u-mb3" style="width: 100%; border: none; min-height: 80px;" scrolling="no"></iframe>
              
                <h4>Formato</h4>
                <p>Íconos de trazo simple o lineales, recomendados para la mayoría de los usos.</p>
                 <h5 class="u-mt4">Lineales</h5>
                 <iframe src="iframe-preview.php?comp=icono/icono-lineal" title="Ejemplo de íconos lineales" class="component-preview u-mb3" style="width: 100%; border: none; min-height: 100px;" scrolling="no"></iframe>
                 
                 
                 <h5 class="u-mt4">Rellenos</h5>
                 <p>Íconos de forma sólida, rellenos, utilizados cuando se necesita mayor presencia visual o para indicar estado de activo.</p>
                 <iframe src="iframe-preview.php?comp=icono/icono-relleno" title="Ejemplo de íconos rellenos" class="component-preview u-mb3" style="width: 100%; border: none; min-height: 100px;" scrolling="no"></iframe>                 
                 
 
                 <h3>Íconos especiales</h3>
                 <h4>Avatar de usuario</h4>
                 <p>El Avatar de usuario es un ícono específico, construido mediante CSS, que se utiliza como indicador de usuario autenticado dentro de la interfaz, y puede aparecer, por ejemplo, en el cabezal o en contextos asociados al perfil del usuario.</p>
                <p>Este ícono se comporta de la misma forma que el resto de los íconos del sistema, teniendo de variantes los mismos tamaños disponibles.</p>
                <p>Su uso está limitado a contextos relacionados con la identidad del usuario y no debe utilizarse con fines decorativos ni como reemplazo de otros íconos funcionales.</p>
                 <iframe src="iframe-preview.php?comp=icono/icono-usuario" title="Ejemplo de avatar de usuario" class="component-preview u-mb3" style="width: 100%; border: none; min-height: 80px;" scrolling="no"></iframe>
                 
<h3>Biblioteca de íconos</h3>
<p>El sistema de diseño utiliza como base la biblioteca de íconos de Material Design. Esta biblioteca ofrece una amplia variedad de íconos con una lógica visual y criterios de construcción consistentes, lo que facilita mantener coherencia entre los distintos componentes y contextos de uso.</p>

<p>Cuando se necesite un ícono que no esté disponible en el sistema, se recomienda verificar primero si existe un ícono equivalente o similar en la biblioteca de Material Design antes de incorporar uno nuevo. Esto permite mantener la consistencia visual y evitar la incorporación innecesaria de recursos con estilos diferentes.</p>

<h3>Accesibilidad</h3>
                <h4>Recomendaciones para no perder la accesibilidad</h4>
                <ul class="List-text">
                    <li>No utilizar íconos como único medio para transmitir información.</li>
                    <li>Asegurar contraste suficiente entre el ícono y el fondo.</li>
                    <li>Acompañar los íconos con texto cuando representen acciones.</li>
                    <li>Proveer textos alternativos o etiquetas accesibles cuando el ícono sea interactivo.</li>
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

<?php
  $title = 'Grupo de botones';
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
        <li><a href="sist-doc-acciones.php">Acciones</a></li>
        <li>Grupo de botones</li>
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
              $activeItem = 'grupo-botones';
              include "inc/nav-componentes.php"; 
            ?>
            
          </div>

          <div class="Grid-item u-md-size3of4">
            <div class="Page-body">

              <div class="Page-document">

                <span class="Page-subtitle">Acciones</span>
                <h2 class="Page-title">Grupo de botones</h2>
                
                 <div class="Page-info">
                  <div class="Bar">
                    <div class="Bar-cell">
                      <div class="Page-date">Versión 1.0</div>
                    </div>
                  </div>
                </div>
                
                <p class="Page-description">El grupo de botones es un componente de acción que agrupa botones de solo ícono para presentar acciones de igual jerarquía dentro de un mismo contexto. Se utiliza principalmente en vistas donde el espacio es reducido o donde las acciones deben mantenerse visualmente neutras, como tablas o listados.</p>

                <h3 class="u-mt4">Estructura del componente</h3>
                <iframe src="../git/iframe-preview.php?comp=botones/grupo-botones-horizontal" title="Ejemplo de estructura de grupo de botones" class="component-preview u-mb3" style="width: 100%; border: none; min-height: 80px;" scrolling="no"></iframe>

                <h5 class="u-mt3">Elementos que lo componen:</h5>
                <ul class="List-text">
                    <li>Ícono</li>
                    <li>Nombre accesible</li>
                </ul>

                <h3 class="u-mt4">Recomendaciones de uso</h3>
                
                <h4 class="u-mt3">Cuándo usarlo:</h4> 

<ul class="List-text">
  <li>Cuando se necesita mostrar varias acciones de manera paralela y con el mismo nivel jerárquico.</li> 

<li>Para agrupar funciones similares o relacionadas (Ej: acciones de edición, descargas, vista de lista/cuadrícula). </li>

En contextos donde la interfaz requiere ahorrar espacio y organizar opciones. </li>




                <h4 class="u-mt3">Cuándo no usarlo</h4>
                <ul class="List-text">
                    <li>Cuando las acciones no tienen relación entre sí.</li>
                    <li>Para mostrar más de cinco opciones. </li>
                    <li>Como reemplazo de un menú si las acciones no son frecuentes.</li> 
                </ul>

                <h3 class="u-mt4">Buenas prácticas</h3>
                <ul class="List-text">
                    <li>Mantener entre 2 y 5 botones como máximo. </li>
                    <li>Elegir íconos reconocibles y con el mismo estilo visual. </li>
                    
                </ul>

                <h3 class="u-mt4">Variantes</h3>
<ul class="List-text">
                <li>Iconográfica: cada acción está representada únicamente por un ícono. Recomendable cuando las acciones son universales y reconocibles (Ej: descargar, compartir, editar). </li>

<li>Con texto: cada ítem incluye un label textual que explica la acción. Adecuado cuando el ícono no es suficiente o se busca mayor claridad. </li>

<li>Mixta: texto acompañado de ícono para reforzar la acción. </li>



                <h4 class="u-mt3 u-mb3">Alineación</h4>
                
                <h5 class="u-mb2">Horizontal</h5>


                <iframe src="../git/iframe-preview.php?comp=botones/botonera" title="Ejemplo de grupo de botones alineación horizontal" class="component-preview u-mb3" style="width: 100%; border: none; min-height: 80px;" scrolling="no"></iframe>
                <p class="u-mb4">Los botones se alinean en una única fila. Esta es la disposición estándar.</p>
                
                <h5 class="u-mb2">Vertical</h5>
                <iframe src="../git/iframe-preview.php?comp=botones/botonera" title="Ejemplo de grupo de botones alineación vertical" class="component-preview u-mb3" style="width: 100%; border: none; min-height: 120px;" scrolling="no"></iframe>
                <p class="u-mb2">Los botones se apilan uno sobre el otro. Se utiliza en contextos donde el espacio horizontal es limitado, principalmente en resoluciones móviles.</p>

                <h3 class="u-mt4">Accesibilidad</h3>
                <h4>WCAG Nivel AAA</h4>
                <h5 class="u-mt3">Recomendaciones para mantener la accesibilidad en cambios de color</h5>
                <h6 class="u-mt3">Para el texto o ícono (Foreground color)</h6>
                <ul class="List-text">
                    <li>El contraste mínimo garantizado es 4.5:1, ideal 7:1 (AAA).</li>
                </ul>

                <h3 class="u-mt4">Componentes relacionados</h3>
                <ul class="List-text">
                    <li><a href="sist-doc-botones.php">Botones</a></li>
                    <li><a href="sist-doc-boton-desplegable.php">Botón desplegable</a></li>
                </ul>
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

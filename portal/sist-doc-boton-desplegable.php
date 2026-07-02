<?php
  $title = 'Botón con desplegable';
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
        <li>Botón con desplegable</li>
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
              $activeItem = 'boton-desplegable';
              include "inc/nav-componentes.php"; 
            ?>
            
          </div>

          <div class="Grid-item u-md-size3of4">
            <div class="Page-body">

              <div class="Page-document">

                <span class="Page-subtitle">Acciones</span>
                <h2 class="Page-title">Botón con desplegable</h2>
                
                 <div class="Page-info">
                  <div class="Bar">
                    <div class="Bar-cell">
                      <div class="Page-date">Versión 1.0</div>
                    </div>
                  </div>
                </div>
                
                <p class="Page-description">Un botón con desplegable combina la acción de un botón tradicional con la capacidad de revelar un menú de opciones secundarias o relacionadas con la acción principal.</p>

                <h3 class="u-mt4">Estructura del componente</h3>
                <img src="img/ejemplos_documentacion/botombo.png" alt="Estructura de Botón con desplegable" class="u-mb3" style="max-width: 100%;">
                <h5 class="u-mt3">Elementos que lo componen:</h5>
                <ul class="List-text">
                    <li>Botón</li>
                    <li>Ícono indicador de despliegue</li>
                    <li>Menú desplegable</li>
                    <li>Item de menú</li>
                </ul>

                <h3 class="u-mt4">Recomendaciones de uso</h3>
                <h4 class="u-mt3">Casos típicos de uso</h4>
                <ul class="List-text">
                    <li>Cuando hay una acción principal (ej. "Guardar") y acciones secundarias estrechamente relacionadas (ej. "Guardar como borrador", "Guardar y agendar").</li>
                    <li>Cuando el espacio en pantalla es limitado y se necesitan agrupar acciones.</li>
                    <li>Para agrupaciones de acciones masivas sobre elementos seleccionados en una tabla.</li>
                </ul>

                <h4 class="u-mt3">Cuándo no usarlo</h4>
                <ul class="List-text">
                    <li>Como menú de navegación principal de un sitio web.</li>
                </ul>

                <h3 class="u-mt4">Buenas prácticas</h3>
                <ul class="List-text">
                    <li>El botón principal siempre debe ejecutar la acción predeterminada o más frecuente.</li>
                    <li>Las opciones agrupadas en el desplegable deben estar lógicamente relacionadas con la acción principal.</li>
                    <li>Mantener los textos de las opciones breves (1-2 palabras preferentemente).</li>
                </ul>

                <h3 class="u-mt4">Variantes</h3>
                <h4 class="u-mt3 u-mb3">Tamaño</h4>

                <ul class="List-text">
                    <li>M</li>
                    <li>S</li>
                </ul>

                <h3 class="u-mt4">Comportamiento responsive</h3>
                <h4 class="u-mt3">Escritorio</h4>
                <img src="img/ejemplos_documentacion/botombo_abierto.png" alt="Botón desplegable en escritorio" class="u-mb2 u-mt2" style="max-width: 100%;">
                <ul class="List-text">
                    <li>El menú se despliega justo debajo del botón.</li>
                    <li>El ancho del menú se adapta al contenido, con un ancho mínimo que suele ser igual al del botón.</li>
                    <li>Si no hay espacio vertical debajo, se despliega hacia arriba.</li>
                    <li>Se cierra al hacer clic fuera del menú o al seleccionar una opción.</li>
                </ul>

                <h4 class="u-mt3">Móvil</h4>

                <ul class="List-text">
                    <li>El comportamiento es similar al de escritorio, adaptándose al ancho de pantalla disponible.</li>
                    <li>Se asegura que las opciones (touch targets) sean lo suficientemente grandes para ser seleccionadas con facilidad (mínimo 44x44px recomendados por WCAG).</li>
                </ul>

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
                    <li><a href="sist-doc-grupo-botones.php">Grupo de botones</a></li>
                </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Footer -->
  <?php include "inc/footer.php"; ?>

<?php include "inc/foot.php"; ?>

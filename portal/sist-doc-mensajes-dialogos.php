<?php
  $title = 'Mensajes y diálogos';
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
        <li>Mensajes y diálogos</li>
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
              $activeItem = 'mensajes';
              include "inc/nav-componentes.php"; 
            ?>
            
          </div>

          <div class="Grid-item u-md-size3of4">
            <div class="Page-body">

              <div class="Page-document">

                <span class="Page-subtitle">Componentes</span>
                <h2 class="Page-title">Mensajes y diálogos</h2>
                
                 <div class="Page-info">
                  <div class="Bar">
                    <div class="Bar-cell">
                      <div class="Page-date">Versión 1.0</div>
                    </div>
                  </div>
                </div>
                
                <p class="Page-description">Los componentes de mensajes y diálogos comunican información al usuario sobre el resultado de acciones, estados del sistema o solicitudes de confirmación. Permiten mantener al usuario informado de forma clara y sin interrumpir innecesariamente el flujo.</p>

                <h3 class="u-mt4">Componentes</h3>
                <ul class="List-text u-mt3">
                    <li>
                        <a href="sist-doc-alertas.php"><strong>Alertas</strong></a> — Mensajes que comunican información importante al usuario sobre el resultado de una acción o sobre el estado del sistema, pudiendo ser de éxito, error, advertencia o notificación.
                    </li>
                    <li>
                        <a href="sist-doc-tags.php"><strong>Tags</strong></a> — Etiquetas visuales que permiten clasificar información o comunicar el estado de un elemento dentro de la interfaz de forma breve y clara.
                    </li>
                    <li>
                        <a href="sist-doc-modales.php"><strong>Modales</strong></a> — Ventanas superpuestas que requieren la atención del usuario antes de continuar con el flujo principal. Se utilizan para confirmar acciones, mostrar información crítica o solicitar datos adicionales.
                    </li>
                    <li>
                        <a href="sist-doc-tooltips.php"><strong>Tooltips</strong></a> — Textos de ayuda contextual que aparecen al posicionarse sobre un elemento, ofreciendo información adicional sin ocupar espacio permanente en la interfaz.
                    </li>
                    <li>
                        <a href="sist-doc-indicadores.php"><strong>Indicadores de estado</strong></a> — Componentes visuales que comunican el estado actual de un proceso, elemento o sistema dentro de la interfaz.
                    </li>
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

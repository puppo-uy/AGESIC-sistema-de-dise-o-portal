<?php
  $title = 'Tooltips';
?>
<?php include "inc/head.php"; ?>

  <!-- Cabezal -->
  <?php include "inc/header.php"; ?>

  <!-- Breadcrumb -->
  <div class="Breadcrumb">
    <div class="Container">
      <ul>
        <li><a href="index.php">Inicio</a></li>
        <li>Componentes</li>
        <li><a href="sist-doc-mensajes-dialogos.php">Mensajes y diálogos</a></li>
        <li>Tooltips</li>
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
              $activeItem = 'tooltips';
              include "inc/nav-componentes.php"; 
            ?>
            
          </div>

          <div class="Grid-item u-md-size3of4">
            <div class="Page-body">

              <div class="Page-document">

                <span class="Page-subtitle">Mensajes y diálogos</span>
                <h2 class="Page-title">Tooltips</h2>
                
                 <div class="Page-info">
                  <div class="Bar">
                    <div class="Bar-cell">
                      <div class="Page-date">Versión 1.0</div>
                    </div>
                  </div>
                </div>
                
                <p class="Page-description">Los tooltips son textos de ayuda contextual que ofrecen información adicional sobre un elemento de la interfaz. Se muestran sin ocupar espacio permanente en la pantalla, complementando el contenido visible sin interrumpir el flujo del usuario.</p>

                
               <h5 class="u-mt3">Elementos que lo componen:</h5>
                <ul class="List-text">
                    <li>Texto de ayuda</li>
                    <li>Contenedor (globo)</li>
                    <li>Flecha indicadora de origen</li>
                    <li>Elemento disparador (botón o ícono de información)</li>
                </ul>

                <h3 class="u-mt4">Recomendaciones de uso</h3>
                <h4 class="u-mt3">Casos típicos de uso</h4>
                <ul class="List-text">
                    <li>Explicar el significado de íconos o elementos poco familiares para el usuario.</li>
                    <li>Ofrecer información complementaria sin ocupar espacio en la interfaz.</li>
                    <li>Aclarar el resultado esperado de una acción antes de ejecutarla.</li>
                </ul>

                <h4 class="u-mt3">Cuándo no usarlo</h4>
                <ul class="List-text">
                    <li>Para información crítica que el usuario necesita para completar una tarea. En ese caso, integrar el texto directamente en la interfaz.</li>
                    <li>Como reemplazo de etiquetas o instrucciones visibles permanentemente.</li>
                    <li>Para contenidos extensos; el tooltip debe ser breve y directo.</li>
                </ul>

                <h3 class="u-mt4">Interacción</h3>
                <p>El tooltip debe dispararse siempre mediante <strong>clic o toque</strong>, y nunca exclusivamente mediante hover (pasar el cursor por encima).</p>
                <p>Los dispositivos móviles y táctiles no tienen cursor, por lo que un tooltip que solo responde al hover es invisible para esos usuarios. Activar el tooltip con clic garantiza que el comportamiento sea consistente y accesible en todos los dispositivos.</p>

                <h3 class="u-mt4">Buenas prácticas</h3>
                <ul class="List-text">
                    <li>Utilizar textos breves, claros y en una sola idea por tooltip.</li>
                    <li>Posicionar el tooltip de forma que no tape contenido importante cercano al elemento disparador.</li>
                    <li>Incluir un mecanismo claro para cerrarlo (clic fuera o botón de cierre).</li>
                </ul>

                <h3 class="u-mt4">Accesibilidad</h3>
                <h4>WCAG Nivel AAA</h4>
                <h5 class="u-mt3">Recomendaciones para no perder la accesibilidad</h5>
                <ul class="List-text">
                    <li>Asegurar que el contenido del tooltip sea accesible por teclado (activable con Enter o Espacio).</li>
                    <li>Proporcionar un texto alternativo o etiqueta ARIA cuando el elemento disparador sea solo un ícono.</li>
                    <li>Garantizar contraste suficiente entre el texto del tooltip y su fondo.</li>
                </ul>

                <h3 class="u-mt4">Componentes relacionados</h3>
                <ul class="List-text">
                    <li><a href="sist-doc-alertas.php">Alertas</a></li>
                    <li><a href="sist-doc-modales.php">Modales</a></li>
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

<?php
  $title = 'Indicadores de carga';
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
        <li>Indicadores de carga</li>
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
              $activeItem = 'indicadores';
              include "inc/nav-componentes.php"; 
            ?>
            
          </div>

          <div class="Grid-item u-md-size3of4">
            <div class="Page-body">

              <div class="Page-document">

                <span class="Page-subtitle">Mensajes y diálogos</span>
                <h2 class="Page-title">Indicadores de carga</h2>
                
                 <div class="Page-info">
                  <div class="Bar">
                    <div class="Bar-cell">
                      <div class="Page-date">Versión 1.0</div>
                    </div>
                  </div>
                </div>
                
                <p class="Page-description">Los indicadores de carga (o <em>spinners</em>) comunican visualmente que el sistema está procesando una solicitud. Ayudan a reducir la incertidumbre del usuario al confirmar que la aplicación está respondiendo.</p>

                <h3 class="u-mt4">Recomendaciones de uso</h3>
                <ul class="List-text">
                    <li><strong>Feedback inmediato</strong>: Mostrá el indicador si un proceso tarda más de un segundo en completarse.</li>
                    <li><strong>Contexto</strong>: Si la carga afecta solo a una parte de la página (ej: una tabla), colocá el indicador dentro de ese componente en lugar de bloquear toda la pantalla.</li>
                    <li><strong>Accesibilidad</strong>: Asegurá que los lectores de pantalla reciban una notificación (ej: mediante <code>aria-live="polite"</code>) de que el contenido se está cargando.</li>
                </ul>
                <h3>Recomendaciones de uso</h3>
                <h4>Casos típicos</h4>
                <p>Los indicadores de carga se utilizan para comunicar al usuario que una acción está en progreso y que debe esperar a que finalice. Se utilizan en situaciones donde la respuesta del sistema no es inmediata, como la carga de datos, el envío de formularios o la ejecución de procesos largos.</p>

                <h4>Cuando no usarlo</h4>
                <p>No se deben utilizar indicadores de carga cuando la respuesta del sistema es inmediata, no se debe interrumpir el flujo del usuario con un indicador de carga salvo que sea necesario.</p>

                <h3>Buenas prácticas</h3>
                <p>Los indicadores de carga deben ser claros y concisos, deben proporcionar al usuario información sobre el estado pero sin entrar en detalles técnicos innecesarios.</p>

                <h3>Variantes</h3>
                <p>Los indicadores de carga se presentan en diferentes formatos, cada uno adecuado para distintas situaciones:</p>
                <ul>
                  <li><strong>Spinner:</strong> Ideal para indicar que una acción está en progreso y que el usuario debe esperar.</li>
                  <li><strong>Porcentaje:</strong> Se utiliza para indicar el progreso de una acción que toma tiempo y de la que se puede estimar el porcentaje de finalización.</li>
                </ul>

                <h3>Accesibilidad</h3>
                <p>Se debe utilizar el atributo ARIA role="status" para indicar que el indicador de carga es un estado que se actualiza dinámicamente.</p>
                <p>Se debe utilizar el atributo ARIA aria-busy="true" para indicar que el indicador de carga es un estado que se actualiza dinámicamente.</p>

                <h3>Componentes relacionados</h3>
                <p><a href="sist-doc-alertas.php">Alertas</a></p>
                <p><a href="sist-doc-modales.php">Modales</a></p>

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

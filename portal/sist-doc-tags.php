<?php
  $title = 'Tags';
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
        <li><a href="sist-doc-mensajes-dialogos.php">Mensajes y diálogos</a></li>
        <li>Tags</li>
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
              $activeItem = 'tags';
              include "inc/nav-componentes.php"; 
            ?>
            
          </div>

          <div class="Grid-item u-md-size3of4">
            <div class="Page-body">

              <div class="Page-document">

                <span class="Page-subtitle">Mensajes y diálogos</span>
                <h2 class="Page-title">Tags</h2>
                
                 <div class="Page-info">
                  <div class="Bar">
                    <div class="Bar-cell">
                      <div class="Page-date">Versión 1.0</div>
                    </div>
                  </div>
                </div>
                
                <p class="Page-description">Las tags son etiquetas visuales que permiten clasificar información o comunicar el estado de un elemento dentro de la interfaz. Se utilizan para aportar contexto de forma breve y clara, sin competir con el contenido principal ni interrumpir el flujo de lectura.</p>
                <p>Pueden utilizarse en listados, tablas o tarjetas para facilitar el escaneo de la información.</p>


                <h3 class="u-mt4">Recomendaciones de uso</h3>
                <h4 class="u-mt3">Casos típicos</h4>
                <ul class="List-text">
                    <li>Clasificar contenidos.</li>
                    <li>Comunicar el estado de un elemento dentro de un flujo o proceso.</li>
                    <li>Tag Transmitiendo en vivo: Transmisiones que están saliendo al aire en el momento en que el usuario mira la pantalla.</li>
                </ul>

                <h4 class="u-mt3">Cuándo no usarlo</h4>
                <ul class="List-text">
                    <li>Para comunicar información compleja o extensa.</li>
                    <li>Tag Transmitiendo en vivo: Como recurso para destacar contenido que no es una transmisión. El tag tiene un significado literal y usarlo de otro modo hace que pierda su valor dentro del sistema.</li>
                </ul>

                <h3 class="u-mt4">Buenas prácticas</h3>
                <ul class="List-text">
                    <li>Utilizar textos claros y concisos. Máximo 2 palabras.</li>
                    <li>Mantener consistencia entre el tipo de tag y su uso en la interfaz. No mezclar tags de clasificación con tags de estado para comunicar un mismo concepto.</li>
                </ul>

                <h3 class="u-mt4">Modos</h3>
                <h4 class="u-mt3 u-mb3">Tipo</h4>
                
                <h5 class="u-mb2">Clasificación</h5>
                 <iframe src="iframe-preview.php?comp=alertas/tag-clasificacion" title="Ejemplo de tag de clasificación" class="component-preview u-mb3" style="width: 100%; border: none; min-height: 80px;" scrolling="no"></iframe>
                <p class="u-mb4">Se utilizan para categorizar contenidos. Identifican temáticas, tipos o atributos de un elemento.</p>
                
                <h5 class="u-mb2">Estado</h5>
                 <div class="u-mt3 u-mb4">
                     <iframe src="iframe-preview.php?comp=alertas/tag-estado" title="Ejemplo de tags de estado" class="component-preview" style="width: 100%; border: none; min-height: 80px;" scrolling="no"></iframe>
                 </div>
                <p class="u-mb2">Se utilizan para comunicar el estado actual de un elemento dentro de un flujo o proceso. Los estados pueden ser:</p>
                <ul class="List-text u-mb4">
                    <li>Activo / Completado</li>
                    <li>Error / Cancelado</li>
                    <li>Inactivo / Abandonado</li>
                    <li>Pendiente / En espera</li>
                    
                </ul>
              
 <h5 class="u-mb2">En vivo</h5>
   <iframe src="iframe-preview.php?comp=alertas/tag-en-vivo" title="Ejemplo de tag en vivo" class="component-preview" style="width: 100%; border: none; min-height: 80px;" scrolling="no"></iframe>
                <p>El tag de transmitiendo en vivo indica que un contenido se está transmitiendo en este momento. Es el único tag del sistema con animación propia, ya que el punto que acompaña a la etiqueta parpadea de forma continua mientras la transmisión está en vivo.</p>
<p>Se distingue del resto de los tags en tres motivos:</p>
<ul>
  <li>Tiene una identidad visual propia y diferente al resto.</li>
  <li>Su color y su etiqueta son fijos, no se editan ni se reemplazan por otro texto.</li>
  <li>Su presencia en pantalla es temporal. Aparece cuando la transmisión comienza y desaparece cuando termina. No queda como marca permanente sobre el contenido.</li>
</ul>
                 <h4 class="u-mt3 u-mb3">Tamaño</h4>
               
                <ul class="List-text">
                    <li>Normal</li>
                    <li>Chico (S)</li>
                </ul>

                <h3 class="u-mt4">Accesibilidad</h3>
                <h4>WCAG Nivel AAA</h4>
                <h5 class="u-mt3">Recomendaciones para no perder la accesibilidad</h5>
                <ul class="List-text">
                    <li>Utilizar los colores propuestos por el sistema para garantizar legibilidad y contraste entre texto y fondo.</li>
                    <li>Evitar abreviaturas o siglas poco claras.</li>
                </ul>

                <h3 class="u-mt4">Componentes relacionados</h3>
                <ul class="List-text">
                    <li><a href="sist-doc-alertas.php">Alertas</a></li>
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

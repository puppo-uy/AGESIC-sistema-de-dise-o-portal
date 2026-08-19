<?php
  $title = 'Alertas';
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
				<li>Alertas</li>
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
							$activeItem = 'alertas';
							include "inc/nav-componentes.php"; 
						?>
						
          </div>

          <div class="Grid-item u-md-size3of4">
            <div class="Page-body">

              <div class="Page-document">

                <span class="Page-subtitle">Mensajes y diálogos</span>
                <h2 class="Page-title">Alertas</h2>
								
								 <div class="Page-info">
									<div class="Bar">
										<div class="Bar-cell">
											<div class="Page-date">Versión 1.0</div>
										</div>
									</div>
								</div>
								
								<p class="Page-description">Las alertas comunican mensajes relevantes al usuario sobre el estado de un proceso, el resultado de una acción o información que requiere atención. Permiten confirmar, advertir, informar o notificar de manera clara y jerarquizada, y pueden variar su formato según su tipo de mensaje y nivel de permanencia en la pantalla.</p>
								
                <h3>Recomendaciones de uso</h3>
								
								<h4>Casos típicos</h4>

								<ul class="List-text">
                  <li>Informar un resultado o estado de una acción (Ej: “Formulario enviado correctamente”).</li>
                  <li>Advertir sobre posibles consecuencias o confirmar que el usuario debe revisar algo antes de continuar.</li>
                  <li>Mostrar errores que impiden completar una acción.</li>
                  <li>Comunicar información complementaria, no urgente.</li>
                </ul>
								
								<h4>Cuándo no usarlo</h4>
								
								<ul class="List-text">
                  <li>Para confirmaciones menores que puedan resolverse dentro del flujo (Ej: un cambio guardado de forma automática).</li>
                  <li>Para mensajes extensos o con contenido de ayuda detallado. En ese caso, utilizar una ventana modal o una página específica.</li>
                  <li>Para interrumpir tareas en curso sin justificación o sin una acción esperada por parte del usuario.</li>
                </ul>

								<h4>Buenas prácticas</h4>
								
								<ul class="List-text">
                  <li>Usar un tono claro, directo y conciso.</li>
                  <li>Colocar la alerta cerca del área o componente al que hace referencia.</li>
                  <li>Evitar el uso de palabras completamente en mayúscula o signos de exclamación innecesarios.</li>
                </ul>
								
								<h3>Modos</h3>

								<h4>Estados</h4>

                    <h5 class="u-mt2 u-mb1 u-h6">Éxito</h5>
                    <p>Indica que una acción se completó correctamente.</p>

                    <h5 class="u-mt2 u-mb1 u-h6">Advertencia</h5>
                    <p>Señala una posible consecuencia o requerimiento de atención.</p>

                    <h5 class="u-mt2 u-mb1 u-h6">Información</h5>
                    <p>Presenta contenido informativo o complementario.</p>

                    <h5 class="u-mt2 u-mb1 u-h6">Error</h5>
                    <p>Indica un problema que impide continuar o completar una acción.</p>

                    <h5 class="u-mt2 u-mb1 u-h6">Notificación</h5>
                    <p>Comunica estados o mensajes del sistema que no dependen de una acción directa del usuario.</p>
          
								
								<h4>Formatos</h4>
								
								<h5>Alerta completa</h5>
								<p>Se utiliza cuando el mensaje requiere contexto o instrucciones adicionales que el usuario debe leer. Puede usarse para comunicar información que debe permanecer visible dentro del flujo hasta que el usuario la atienda mediante una acción relacionada.</p>
								<iframe src="iframe-preview.php?comp=alertas/alerta-completa" title="Ejemplo de alerta completa" class="component-preview u-mb3" style="width: 100%; border: none; min-height: 480px;" scrolling="no"></iframe>
								
								<h5>Alerta simple</h5>
								<p>Se utiliza para dar avisos breves y explícitos cuya intención se entiende con un título breve y conciso. Se usa cuando el contexto ya aporta suficiente detalle y no es necesario añadir texto explicativo ni acciones complementarias, o cuando hay poco espacio en pantalla.</p>
								<iframe src="iframe-preview.php?comp=alertas/alerta-simple" title="Ejemplo de alerta simple" class="component-preview u-mb3" style="width: 100%; border: none; min-height: 480px;" scrolling="no"></iframe>
								
								<h5>Alerta emergente</h5>
								<p>Sirve para mensajes temporales que informan sin interrumpir la tarea en curso. Aparece en una esquina de la pantalla y puede cerrarse manualmente para no bloquear el flujo de trabajo del usuario. Se utiliza principalmente en aplicaciones.</p>
								<iframe src="iframe-preview.php?comp=alertas/alerta-emergente" title="Ejemplo de alerta emergente" class="component-preview u-mb3" style="width: 100%; border: none; min-height: 520px;" scrolling="no"></iframe>	
								
								<h3>Accesibilidad</h3>
								<h4>Recomendaciones para no perder la accesibilidad</h4>
								<ul class="List-text">
                  <li>Evitar el uso de textos genéricos o usar referencias visuales en la redacción. (Ej: Evitar textos como “ver más”, “clic aquí”).</li>
                  <li>Evitar textos completamente en mayúsculas.</li>
                  <li>Escribir frases y oraciones breves. Los párrafos extensos exigen más concentración y dificultan la lectura y comprensión del texto.</li>
									<li>No cambiar los tokens de color del componente, se podría reducir el contraste y entorpecer la lectura.</li>
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

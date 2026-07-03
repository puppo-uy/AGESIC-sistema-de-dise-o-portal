<?php
  $title = 'Modales';
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
        <li>Modales</li>
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
              $activeItem = 'modales';
              include "inc/nav-componentes.php"; 
            ?>
            
          </div>

          <div class="Grid-item u-md-size3of4">
            <div class="Page-body">

              <div class="Page-document">

                <span class="Page-subtitle">Mensajes y diálogos</span>
                <h2 class="Page-title">Modales</h2>
                
                 <div class="Page-info">
                  <div class="Bar">
                    <div class="Bar-cell">
                      <div class="Page-date">Versión 1.0</div>
                    </div>
                  </div>
                </div>
                
                <p class="Page-description">Los modales son ventanas superpuestas que aparecen sobre el contenido principal, interrumpiendo el flujo para solicitar una decisión, mostrar información crítica o recopilar datos adicionales. Al abrirse, bloquean la interacción con el resto de la interfaz hasta que el usuario resuelve la acción.</p>

                <h3 class="u-mt4">Estructura del componente</h3>
                
                <h5 class="u-mt3">Elementos que lo componen</h5>
                <ul class="List-text">
                    <li>Overlay (fondo oscurecido)</li>
                    <li>Contenedor del modal</li>
                    <li>Encabezado con título y botón de cierre</li>
                    <li>Cuerpo con el contenido o formulario</li>
                    <li>Pie con las acciones disponibles</li>
                </ul>

                <h3 class="u-mt4">Recomendaciones de uso</h3>
                <h4 class="u-mt3">Casos típicos de uso</h4>
                <ul class="List-text">
                    <li>Confirmar acciones destructivas o irreversibles (eliminar, cancelar un proceso).</li>
                    <li>Recopilar datos adicionales sin abandonar el contexto actual.</li>
                    <li>Mostrar información crítica que requiere atención inmediata del usuario.</li>
                </ul>

                <h4 class="u-mt3">Cuándo no usarlo</h4>
                <ul class="List-text">
                    <li>Para mostrar información que el usuario puede ignorar; en ese caso utilizar alertas o tooltips.</li>
                    <li>Como contenedor de flujos complejos de múltiples pasos; en ese caso, navegar a una página dedicada.</li>
                    <li>En contextos donde el usuario ya está en medio de otra acción crítica.</li>
                </ul>

                <h3 class="u-mt4">Buenas prácticas</h3>
                <ul class="List-text">
                    <li>Limitar el contenido del modal a una sola decisión o tarea concreta.</li>
                    <li>Ofrecer siempre una opción clara para cancelar o cerrar el modal.</li>
                    <li>Permitir cerrar el modal haciendo clic en el overlay o presionando Escape.</li>
                    <li>Devolver el foco al elemento que abrió el modal al cerrarlo.</li>
                </ul>

                <h3 class="u-mt4">Variantes</h3>

                <h4 class="u-mt3 u-mb3">Modal simple</h4>
                <div class="u-mb6">
                    <button class="Button Button--primary" data-modal-target="modal-simple">
                        Abrir modal simple
                    </button>
                </div>

                <!-- Modal simple -->
                <div class="Modal" id="modal-simple" role="dialog" aria-labelledby="modal-simple-title" aria-modal="true">
                    <div class="Modal-dialog" role="document">
                        <div class="Modal-content">
                            <div class="Modal-header">
                                <h2 class="Modal-title" id="modal-simple-title">Título del modal simple</h2>
                                <button type="button" class="Modal-close" data-modal-close aria-label="Cerrar modal">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M3.69469 22L2 20.3053L10.3049 12L2 3.69469L3.69469 2L12 10.3049L20.3053 2L22 3.69469L13.6951 12L22 20.3053L20.3053 22L12 13.6951L3.69469 22Z" fill="currentColor"/>
                                    </svg>
                                </button>
                            </div>
                            <div class="Modal-body">
                                <p>Esto es un texto que representa el contenido del modal que se muestra en la página. Está a punto de borrar el elemento <strong>Ítem 4</strong> del sistema de forma permanente.</p>
                                <p>Esta acción no se puede deshacer. ¿Desea continuar?</p>
                            </div>
                            <div class="Modal-footer">
                                <button type="button" class="Button Button--link" data-modal-close>Cancelar</button>
                                <button type="button" class="Button Button--inverse">Acción secundaria</button>
                                <button type="button" class="Button Button--primary">
                                    Confirmar
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" style="vertical-align: middle; margin-left: 8px;">
                                        <path d="M16.6969 13.125H3V10.875H16.6969L10.3969 4.575L12 3L21 12L12 21L10.3969 19.425L16.6969 13.125Z" fill="currentColor"/>
                                    </svg>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                <h4 class="u-mt4 u-mb3">Modal con formulario</h4>
                <div class="u-mb6">
                    <button class="Button Button--primary" data-modal-target="modal-formulario">
                        Abrir modal con formulario
                    </button>
                </div>

                <!-- Modal con formulario -->
                <div class="Modal" id="modal-formulario" role="dialog" aria-labelledby="modal-form-title" aria-modal="true">
                    <div class="Modal-dialog" role="document">
                        <div class="Modal-content">
                            <div class="Modal-header">
                                <h2 class="Modal-title" id="modal-form-title">Modal con formulario</h2>
                                <button type="button" class="Modal-close" data-modal-close aria-label="Cerrar modal">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M3.69469 22L2 20.3053L10.3049 12L2 3.69469L3.69469 2L12 10.3049L20.3053 2L22 3.69469L13.6951 12L22 20.3053L20.3053 22L12 13.6951L3.69469 22Z" fill="currentColor"/>
                                    </svg>
                                </button>
                            </div>
                            <div class="Modal-body">
                                <p>Esto es un texto que representa el contenido del modal que se muestra en la página.</p>
                                <form class="Form--tipo Form--stacked Form--stacked--hidden-fieldset u-mt4">
                                    <fieldset>
                                        <legend><span>Nombre del grupo de campos</span></legend>
                                        <div class="Form-group">
                                            <div class="Form-label-wrap">
                                                <label class="Form-label" for="campo-modal">Etiqueta de campo común:</label>
                                            </div>
                                            <div class="Form-object-wrap">
                                                <input class="Form-widget" type="text" id="campo-modal" placeholder="">
                                            </div>
                                        </div>
                                        <div class="Form-group">
                                            <div class="Form-label-wrap">
                                                <label class="Form-label" for="combo-modal">Etiqueta de combo:</label>
                                            </div>
                                            <div class="Form-object-wrap">
                                                <select class="Form-widget" id="combo-modal">
                                                    <option value="">Opción seleccionada de un combo</option>
                                                    <option value="1">Opción 1</option>
                                                    <option value="2">Opción 2</option>
                                                </select>
                                                <span class="Form-hint">Este es un texto de ayuda</span>
                                            </div>
                                        </div>
                                        <div class="Form-group" role="group" aria-labelledby="grupo-radios">
                                            <div class="Form-label-wrap">
                                                <div id="grupo-radios" class="Form-label">Grupo de opciones de radio button:</div>
                                            </div>
                                            <div class="Form-object-wrap">
                                                <div class="Form-options">
                                                    <label class="Form-option" for="radio1">
                                                        <input type="radio" name="radio-modal" id="radio1" checked>
                                                        <span>Radio 1</span>
                                                    </label>
                                                    <label class="Form-option" for="radio2">
                                                        <input type="radio" name="radio-modal" id="radio2">
                                                        <span>Radio 2</span>
                                                    </label>
                                                    <label class="Form-option" for="radio3">
                                                        <input type="radio" name="radio-modal" id="radio3">
                                                        <span>Radio 3 <span class="Form-hint">Opción con texto de ayuda</span></span>
                                                    </label>
                                                    <label class="Form-option" for="radio4">
                                                        <input type="radio" name="radio-modal" id="radio4">
                                                        <span>Radio 4</span>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </fieldset>
                                </form>
                            </div>
                            <div class="Modal-footer">
                                <button type="button" class="Button Button--link" data-modal-close>Cancelar</button>
                                <button type="button" class="Button Button--inverse">Acción secundaria</button>
                                <button type="button" class="Button Button--primary">
                                    Confirmar
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" style="vertical-align: middle; margin-left: 8px;">
                                        <path d="M16.6969 13.125H3V10.875H16.6969L10.3969 4.575L12 3L21 12L12 21L10.3969 19.425L16.6969 13.125Z" fill="currentColor"/>
                                    </svg>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                <h3 class="u-mt4">Accesibilidad</h3>
                <h4>WCAG Nivel AAA</h4>
                <h5 class="u-mt3">Recomendaciones para no perder la accesibilidad</h5>
                <ul class="List-text">
                    <li>Usar siempre <code>aria-labelledby</code> o <code>aria-label</code>. Nunca debe existir un modal sin nombre accesible.</li>
                    <li>Al abrir el modal, mover el foco al interior del mismo.</li>
                    <li>Mantener el foco atrapado dentro del modal mientras esté abierto (focus trap).</li>
                    <li>Al cerrar el modal, devolver el foco al elemento que lo activó.</li>
                    <li>Permitir cerrar el modal con la tecla <kbd>Escape</kbd>.</li>
                </ul>

                <h3 class="u-mt4">Componentes relacionados</h3>
                <ul class="List-text">
                    <li><a href="sist-doc-alertas.php">Alertas</a></li>
                    <li><a href="sist-doc-tooltips.php">Tooltips</a></li>
                    <li><a href="sist-doc-botones.php">Botones</a></li>
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

<!-- Modal — solo en esta página -->
<script src="scripts/plugins/modal-doc.js"></script>

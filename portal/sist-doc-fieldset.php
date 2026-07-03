<?php
  $title = 'Fieldset';
  $form = true;
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
        <li><a href="sist-doc-formularios.php">Formularios</a></li>
        <li>Fieldset</li>
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
              $activeItem = 'fieldset';
              include "inc/nav-componentes.php"; 
            ?>
            
          </div>

          <div class="Grid-item u-md-size3of4">
            <div class="Page-body">

              <div class="Page-document">

                <span class="Page-subtitle">Formularios</span>
                <h2 class="Page-title">Fieldset</h2>
                
                 <div class="Page-info">
                  <div class="Bar">
                    <div class="Bar-cell">
                      <div class="Page-date">Versión 1.0</div>
                    </div>
                  </div>
                </div>
                
                <p class="Page-description">El componente Fieldset se utiliza para agrupar lógica y visualmente un conjunto de campos relacionados en un formulario, facilitando la comprensión de la estructura de la información.</p>

                <h3 class="u-mt4">Recomendaciones de uso</h3>
                <ul class="List-text">
                    <li><strong>Agrupación lógica</strong>: Utilizalo para separar secciones temáticas dentro de un formulario (ej: "Datos personales", "Domicilio").</li>
                    <li><strong>Leyenda (Legend)</strong>: Todo fieldset debe contar con un título o leyenda clara que identifique al grupo de campos.</li>
                    <li><strong>Jerarquía</strong>: Ayuda a reducir la carga cognitiva al fragmentar formularios extensos en bloques manejables.</li>
                </ul>
                
                <h3>Estructura del componente</h3>
<form action="./" class="Form Form--tipo">

                        <fieldset>

                            <legend><span>Grupo de campos anidados</span></legend>

                            <div class="Form-group">

                                <div class="Form-label-wrap">
                                    <label for="example0" class="Form-label">Campo Padre:</label>
                                </div>
                                <div class="Form-object-wrap">
                                    <input type="text" class="Form-widget" id="example0" name="example0">
                                </div>

                            </div>

                            <fieldset>

                                <legend><span>Grupo de campos nivel 1</span></legend>

                                <p>Se utilizan los fieldset para agrupar campos, por ejemplo por el tipo de información solicitada.</p>

                                <div class="Form-group">
                                    <div class="Form-label-wrap">
                                        <label for="example1.1" class="Form-label">Campo 1 nivel 1:</label>
                                    </div>
                                    <div class="Form-object-wrap">
                                        <input type="text" class="Form-widget" id="example1.1" name="example1.1">
                                    </div>
                                </div>

                                <div class="Form-group">
                                    <div class="Form-label-wrap">
                                        <label for="example2.1" class="Form-label">Campo 2 nivel 1:</label>
                                    </div>
                                    <div class="Form-object-wrap">
                                        <input type="text" class="Form-widget" id="example2.1" name="example2.1">
                                    </div>
                                </div>

                                <fieldset>

                                    <legend><span>Grupo de campos nivel 1.1</span></legend>

                                    <div class="Form-group">
                                        <div class="Form-label-wrap">
                                            <label for="example1.1.1" class="Form-label">Campo 1 nivel 1.1:</label>
                                        </div>
                                        <div class="Form-object-wrap">
                                            <input type="text" class="Form-widget" id="example1.1.1" name="example1.1.1">
                                        </div>
                                    </div>

                                    <div class="Form-group">
                                        <div class="Form-label-wrap">
                                            <label for="example1.1.2" class="Form-label">Campo 2 nivel 1.1:</label>
                                        </div>
                                        <div class="Form-object-wrap">
                                            <input type="text" class="Form-widget" id="example1.1.2" name="example1.1.2">
                                        </div>
                                    </div>

                                    <fieldset>

                                        <legend><span>Grupo de campos nivel 1.1.1</span></legend>

                                        <div class="Form-group">
                                            <div class="Form-label-wrap">
                                                <label for="example1.1.1.1" class="Form-label">Campo 1 nivel 1.1.1:</label>
                                            </div>
                                            <div class="Form-object-wrap">
                                                <input type="text" class="Form-widget" id="example1.1.1.1" name="example1.1.1.1">
                                            </div>
                                        </div>

                                        <div class="Form-group">
                                            <div class="Form-label-wrap">
                                                <label for="example1.1.1.2" class="Form-label">Campo 2 nivel 1.1.1:</label>
                                            </div>
                                            <div class="Form-object-wrap">
                                                <input type="text" class="Form-widget" id="example1.1.1.2" name="example1.1.1.2">
                                            </div>
                                        </div>

                                    </fieldset>

                                    <div class="Form-group">
                                        <div class="Form-label-wrap">
                                            <label for="example1.1.3" class="Form-label">Campo 3 nivel 1.1:</label>
                                        </div>
                                        <div class="Form-object-wrap">
                                            <input type="text" class="Form-widget" id="example1.1.2" name="example1.1.3">
                                        </div>
                                    </div>


                                </fieldset>

                                <div class="Form-group">
                                    <div class="Form-label-wrap">
                                        <label for="example1.3" class="Form-label">Campo 3 nivel 1:</label>
                                    </div>
                                    <div class="Form-object-wrap">
                                        <input type="text" class="Form-widget" id="example1.3" name="example1.3">
                                    </div>
                                </div>

                            </fieldset>

                            <fieldset>

                                <legend><span>Grupo de campos nivel 2</span></legend>

                                <div class="Form-group">
                                    <div class="Form-label-wrap">
                                        <label for="example2.1" class="Form-label">Campo 1 nivel 2:</label>
                                    </div>
                                    <div class="Form-object-wrap">
                                        <input type="text" class="Form-widget" id="example2.1" name="example2.1">
                                    </div>
                                </div>

                            </fieldset>

                        </fieldset>

                    </form>

<!-- BACKLOG: Faltan recomendaciones de uso, accesibilidad, etc. -->
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

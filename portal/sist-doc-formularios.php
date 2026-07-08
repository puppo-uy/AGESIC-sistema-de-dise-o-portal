<?php
  $title = 'Formularios';
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
        <li>Formularios</li>
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
              $activeItem = 'formularios';
              include "inc/nav-componentes.php"; 
            ?>
            
          </div>

          <div class="Grid-item u-md-size3of4">
            <div class="Page-body">

              <div class="Page-document">

                <span class="Page-subtitle">Componentes</span>
                <h2 class="Page-title">Formularios</h2>
                
                 <div class="Page-info">
                  <div class="Bar">
                    <div class="Bar-cell">
                      <div class="Page-date">Versión 1.0</div>
                    </div>
                  </div>
                </div>
                
                <p class="Page-description">Los formularios son la modalidad de interacción nativa de la web. Permiten a las personas usuarias ingresar datos que son procesados en bloques o paquetes y enviados al servidor para ejecutar una acción.</p>

                <div class="u-mb6">
                    <a href="https://www.gub.uy/agencia-gobierno-electronico-sociedad-informacion-conocimiento/comunicacion/publicaciones/guia-para-creacion-formularios-digitales/guia-para-creacion-formularios" target="_blank" rel="noopener noreferrer" class="Button Button--inverse">
                        Ir a la Guía oficial de Formularios (Agesic)
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" style="vertical-align: middle; margin-left: 8px;">
                            <path d="M16.6969 13.125H3V10.875H16.6969L10.3969 4.575L12 3L21 12L12 21L10.3969 19.425L16.6969 13.125Z" fill="currentColor"/>
                        </svg>
                    </a>
                </div>
                
                <h3 class="u-mt4">Estructura y componentes</h3>
                <p>Un buen formulario debe seguir una jerarquía visual clara. Utilizá estos elementos y componentes para guiar al usuario:</p>
                <ul class="List-text">
                    <li><a href="sist-doc-titulos.php"><strong>Título</strong></a>: Describe el propósito general del formulario.</li>
                    <li><a href="sist-doc-menu-pasos.php"><strong>Pasos</strong></a>: Indican el progreso y la extensión total del proceso (especialmente útil en flujos largos).</li>
                    <li><a href="sist-doc-fieldset.php"><strong>Fieldsets</strong></a>: Agrupaciones lógicas y visuales de información relacionada.</li>
                    <li><a href="sist-doc-campos.php"><strong>Campos</strong></a>: Diferentes tipos de entradas de datos (texto, fecha, combos, etc.).</li>
                    <li><a href="sist-doc-mensajes-dialogos.php"><strong>Mensajes y diálogos</strong></a>: Feedback sobre validaciones, errores y diálogos de confirmación.</li>
                    <li><a href="sist-doc-botones.php"><strong>Botones de acción</strong></a>: Ubicados al pie, diferenciando la acción primaria (enviar/continuar) de las secundarias.</li>
                </ul>

                <h3 class="u-mt4">Buenas prácticas y recomendaciones</h3>
                <p>Breve resumen de las recomendaciones oficiales para mejorar la usabilidad:</p>
                
                <h4 class="u-mt3">Minimización de datos</h4>
                <ul class="List-text">
                    <li>Pedir solo la información absolutamente necesaria para completar el trámite.</li>
                    <li>Si es posible inferir datos (ej: departamento a partir del código postal), hacelo automáticamente.</li>
                    <li>No pidas la misma información dos veces (ej: permitir marcar "Igual que dirección de facturación").</li>
                </ul>

                <h4 class="u-mt3">Claridad y enfoque</h4>
                <ul class="List-text">
                    <li>Utilizá una <strong>columna única</strong> para los campos; facilita la lectura y evita que el usuario pase por alto algún input.</li>
                    <li>Evitá pedir decisiones técnicas que el usuario no comprenda; si es necesario, explicá las consecuencias de cada opción.</li>
                    <li>Las etiquetas (Labels) deben estar siempre visibles y asociadas permanentemente a su campo.</li>
                </ul>

                <h4 class="u-mt3">Interacción</h4>
                <ul class="List-text">
                    <li>No limites el tiempo de completado, o asegurate de que sea lo suficientemente amplio y avisar antes de que expire.</li>
                    <li>Asegurá que la tecla <code>Enter</code> ejecute la acción por omisión (botón primario) del formulario.</li>
                    <li>Diferenciá claramente la acción principal (ej: "Siguiente" o "Enviar") de las secundarias (ej: "Volver" o "Cancelar").</li>
                </ul>

                <h3 class="u-mt4">Accesibilidad</h3>
                <ul class="List-text">
                    <li>Garantizar que todos los elementos sean operables mediante teclado.</li>
                    <li>Asegurar la relación correcta entre <code>label for</code> y <code>input id</code>.</li>
                    <li>Proporcionar mensajes de error claros y descriptivos que ayuden a corregir el problema.</li>
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

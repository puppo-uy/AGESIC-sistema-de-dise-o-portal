<?php
  $title = 'Tablas';
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
        <li>Tablas</li>
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
              $activeItem = 'tablas';
              include "inc/nav-componentes.php"; 
            ?>
            
          </div>

          <div class="Grid-item u-md-size3of4">
            <div class="Page-body">

              <div class="Page-document">

                <span class="Page-subtitle">Componentes</span>
                <h2 class="Page-title">Tablas</h2>
                
                 <div class="Page-info">
                  <div class="Bar">
                    <div class="Bar-cell">
                      <div class="Page-date">Versión 1.0</div>
                    </div>
                  </div>
                </div>
                
                <p class="Page-description">Las tablas organizan información en filas y columnas, permitiendo al usuario comparar datos y encontrar información específica de manera eficiente.</p>

                <h3 class="u-mt4">Estructura del componente</h3>
                <iframe src="../git/iframe-preview.php?comp=tablas/tabla-estandar" title="Ejemplo de estructura de tabla" class="component-preview u-mb3" style="width: 100%; border: none; min-height: 80px;" scrolling="no"></iframe>
                <h5 class="u-mt3">Elementos que lo componen:</h5>
                <ul class="List-text">
                    <li><strong>Cabezal de tabla (thead)</strong>: Contiene los títulos de las columnas (th).</li>
                    <li><strong>Cuerpo de tabla (tbody)</strong>: Contiene las filas de datos (tr) y celdas individuales (td).</li>
                    <li><strong>Celdas de cabecera (th)</strong>: Identifican el tipo de datos de cada columna.</li>
                    <li><strong>Celdas de datos (td)</strong>: Contienen la información o acciones del componente.</li>
                </ul>

                <h3 class="u-mt4">Recomendaciones de uso</h3>
                <h4 class="u-mt3">Casos típicos de uso</h4>
                <ul class="List-text">
                    <li>Visualizar listados de elementos con múltiples atributos comparables.</li>
                    <li>Tabular datos numéricos, financieros o cronológicos.</li>
                    <li>Mostrar listados dinámicos que soporten acciones (ej: editar, borrar, cambiar estado).</li>
                </ul>

                <h4 class="u-mt3">Cuándo no usarlo</h4>
                <ul class="List-text">
                    <li>Para maquetar layouts o estructuras de página (usar Flexbox o CSS Grid en su lugar).</li>
                    <li>Cuando la información es muy simple y se puede representar mejor mediante listas de texto.</li>
                    <li>Cuando el volumen de datos es inmenso y no se acompaña de filtros o paginadores.</li>
                </ul>

                <h3 class="u-mt4">Buenas prácticas</h3>
                <ul class="List-text">
                    <li><strong>Alineación del contenido</strong>: 
                        <ul>
                            <li>Textos y datos generales: Alineados a la izquierda.</li>
                            <li>Valores numéricos, montos y fechas: Alineados a la derecha (para facilitar la comparación).</li>
                            <li>Estados, tags y botones de acción: Centrados o alineados a la derecha.</li>
                        </ul>
                    </li>
                    <li><strong>Diseño responsivo</strong>: Envolver la tabla en un contenedor con desborde horizontal para evitar que se rompa la grilla en pantallas móviles (ej: <code>overflow-x: auto</code>).</li>
                    <li><strong>Cabezales fijos</strong>: En tablas muy extensas, fijar la primera fila (Cabezal) al hacer scroll.</li>
                </ul>

                <h3 class="u-mt4">Variantes</h3>
                
                <h4 class="u-mt3 u-mb2">Tabla Estándar</h4>
                <p class="u-mb3">Disposición de datos plana clásica, con diseño responsivo y efectos hover para facilitar la lectura de registros.</p>
                <iframe src="../git/iframe-preview.php?comp=tablas/tabla-estandar" title="Ejemplo de tabla estándar" class="component-preview u-mb4" style="width: 100%; border: none; min-height: 80px;" scrolling="auto"></iframe>

                <h4 class="u-mt4 u-mb2">Tabla Jerárquica (TreeGrid)</h4>
                <p class="u-mb3">Permite mostrar datos estructurados de forma jerárquica con filas que se expanden o colapsan interactivamente.</p>
                <iframe src="../git/iframe-preview.php?comp=tablas/treegrid" title="Ejemplo de tabla jerárquica (treegrid)" class="component-preview u-mb3" style="width: 100%; border: none; min-height: 200px;" scrolling="auto"></iframe>

                <h3 class="u-mt4">Accesibilidad</h3>
                <h4 class="u-mt3">WCAG y Estándares WAI-ARIA</h4>
                <ul class="List-text">
                    <li><strong>Etiquetado semántico</strong>: Utilizar siempre <code>&lt;table&gt;</code>, <code>&lt;thead&gt;</code>, <code>&lt;tbody&gt;</code>, <code>&lt;th&gt;</code> y <code>&lt;td&gt;</code> correctamente para que los lectores de pantalla puedan anunciar las coordenadas de cada celda.</li>
                    <li><strong>Estructura jerárquica</strong>: Para tablas TreeGrid, utilizar los atributos <code>role="treegrid"</code>, <code>role="row"</code>, <code>aria-level</code>, <code>aria-expanded</code> y asociar los eventos de teclado W3C para navegación (flechas arriba/abajo para navegar filas, izquierda/derecha para colapsar/expandir).</li>
                </ul>

                <h3 class="u-mt4">Componentes relacionados</h3>
                <ul class="List-text">
                    <li><a href="sist-doc-botones.php">Botones</a></li>
                    <li><a href="sist-doc-boton-desplegable.php">Botón con desplegable</a></li>
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

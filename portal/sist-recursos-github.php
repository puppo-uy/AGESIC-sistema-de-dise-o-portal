<?php
  $title = 'Github';
?>
<?php include "inc/head.php"; ?>

  <!-- Cabezal -->
  <?php include "inc/header.php"; ?>

  <!-- Breadcrumb -->
  <div class="Breadcrumb">
    <div class="Container">
      <ul>
        <li><a href="sist-que-es.php">Inicio</a></li>
        <li>Recursos</li>
        <li>Github</li>
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
              $activeItem = 'github';
              include "inc/nav-recursos.php"; 
            ?>
            
          </div>

          <div class="Grid-item u-md-size3of4">
            <div class="Page-body">

              <div class="Page-document">

                <span class="Page-subtitle">Recursos</span>
                <h2 class="Page-title">Github</h2>
                
                <div class="Page-info">
                  <div class="Bar">
                    <div class="Bar-cell">
                      <div class="Page-date">Versión 1.0</div>
                    </div>
                  </div>
                </div>
                
                <p class="Page-description">Asegura que los componentes estén fielmente representados en código (HTML/CSS), para acercar el diseño a las herramientas de desarrollo. Reduciendo fricciones entre diseño y desarrollo, mejora la coherencia entre lo diseñado y lo construido, y garantiza un sistema accesible, escalable y fácil de mantener.</p>
                
                <h3>Repositorio del Sistema de Diseño</h3>
                <p>En el repositorio oficial de GitHub se encuentra disponible el código fuente de los estilos y componentes del sistema. Incluye la estructura SCSS, tokens de diseño, hojas de estilos compiladas y ejemplos para su integración en proyectos web de la administración pública.</p>

                <p class="u-mt3">
                  <a href="https://github.com/" target="_blank" rel="noopener noreferrer" class="Button Button--primary">Acceder al repositorio en GitHub</a>
                </p>

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

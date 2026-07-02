<?php
  $title = 'Herramientas';
?>
<?php include "inc/head.php"; ?>

  <!-- Cabezal -->
  <?php include "inc/header.php"; ?>

  <!-- Breadcrumb -->
  <div class="Breadcrumb">
    <div class="Container">
      <ul>
        <li><a href="sist-que-es.php">Inicio</a></li>
        <li>Herramientas</li>
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
							$activeItem = 'herramientas';
							include "inc/nav-inicio.php"; 
						?>
						
          </div>

          <div class="Grid-item u-md-size3of4">
            <div class="Page-body">

              <div class="Page-document">

                <span class="Page-subtitle">Sobre este Sistema de diseño</span>
                <h2 class="Page-title">Herramientas</h2>
								
								 <div class="Page-info">
									<div class="Bar">
										<div class="Bar-cell">
											<div class="Page-date">Versión 1.0</div>
										</div>

									</div>
								</div>
								
								<p>El sistema de diseño tiene dos herramientas para su aplicación:</p>
								
								<ul class="List-text">
									<li><b>Figma:</b> Estándar de la industria del diseño digital, que permite alinear de forma directa el diseño con su implementación real, facilita la colaboración, la exploración visual y el uso consistente de componentes por parte de perfiles no técnicos.</li>
									<li><b>HTML/CSS:</b> asegura que los componentes estén fielmente representados en código, para acercar el diseño a las herramientas de desarrollo. Reduciendo fricciones entre diseño y desarrollo, mejora la coherencia entre lo diseñado y lo construido, y garantiza un sistema accesible, escalable y fácil de mantener.</li>
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

<?php
  $title = '¿Qué es el sistema de diseño de gub.uy?';
?>
<?php include "inc/head.php"; ?>

  <!-- Cabezal -->
  <?php include "inc/header.php"; ?>

  <!-- Breadcrumb -->
  <div class="Breadcrumb">
    <div class="Container">
      <ul>
        <li><a href="index.php">Inicio</a></li>
        <li>¿Qué es el Sistema de Diseño del Estado Uruguayo? </li>
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
							$activeItem = 'que-es';
							include "inc/nav-inicio.php"; 
						?>
						
          </div>

          <div class="Grid-item u-md-size3of4">
            <div class="Page-body">

              <div class="Page-document">

                <!--<span class="Page-subtitle">Mensajes y diálogos</span>-->
                <h2 class="Page-title">¿Qué es el Sistema de Diseño del Estado Uruguayo? </h2>
								
								 <div class="Page-info">
									<div class="Bar">
										<div class="Bar-cell">
											<div class="Page-date">Versión 1.0</div>
										</div>

									</div>
								</div>
								
								<p>El sistema de diseño del Estado es un conjunto de herramientas para el diseño y construcción de interfaces digitales, que tienen como finalidad construir servicios digitales consistentes, con foco en la ciudadanía, accesibles y optimizados para dispositivos móviles.</p>


								<p>Es una estrategia transversal que promueve la calidad, coherencia y eficiencia en el diseño de servicios y productos digitales. Está pensado como un ecosistema vivo que articula herramientas, estándares y acompañamiento para fortalecer las capacidades de diseño centrado en las personas en los proyectos públicos.</p>
								
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

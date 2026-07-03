<?php
  $title = 'Objetivos y alcance';
?>
<?php include "inc/head.php"; ?>

  <!-- Cabezal -->
  <?php include "inc/header.php"; ?>

  <!-- Breadcrumb -->
  <div class="Breadcrumb">
    <div class="Container">
      <ul>
        <li><a href="index.php">Inicio</a></li>
        <li>Objetivos y alcance</li>
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
							$activeItem = 'objetivos';
							include "inc/nav-inicio.php"; 
						?>
						
          </div>

          <div class="Grid-item u-md-size3of4">
            <div class="Page-body">

              <div class="Page-document">

                <span class="Page-subtitle">Sobre este Sistema de diseño</span>
                <h2 class="Page-title">Objetivos y alcance</h2>
								
								 <div class="Page-info">
									<div class="Bar">
										<div class="Bar-cell">
											<div class="Page-date">Versión 1.0</div>
										</div>

									</div>
								</div>
								
								<p>El objetivo principal del sistema es proveer a la ciudadanía un lenguaje de interacción unificado y coherente en los distintos puntos de contacto digital con el Estado, lo que se traduce en una experiencia más clara, accesible y predecible para las personas.</p>
								
								<p>Contar con un sistema de diseño permite que los servicios digitales sean más fáciles de entender y usar, independientemente del organismo que los provea. Favorece también la inclusión, al aplicar criterios comunes que contemplan las necesidades de distintos perfiles de usuarios.</p>

								<p>Favorece al fortalecimiento de la confianza de la ciudadanía en los servicios digitales del Estado, la calidad de la atención y contribuye a una relación más simple, transparente y eficiente entre las personas y la administración pública.</p>

								<h3>El sistema de diseño incluye:</h3>
								
								<ul class="List-text">
                  <li><strong>Estilos:</strong> Lineamientos visuales de diseño como tipografía, paleta de colores, bordes, fondos, íconos y elementos decorativos, que hacen que los servicios se perciban como parte de un todo por parte de la ciudadanía.</li>
                  <li><strong>Comportamientos:</strong> Definiciones de lenguaje de interacción orientadas a que los entornos digitales sean intuitivos, sencillos y sobre todo consistentes.</li>
                  <li><strong>Componentes:</strong> Piezas reutilizables, creadas con una visión transversal que contempla las buenas prácticas y lineamientos sobre Diseño de interacción y Accesibilidad. Ahorran tiempo de diseño y desarrollo, reutilizando bloques pre creados como navegación, botones, campos, tablas, y tarjetas.</li>
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

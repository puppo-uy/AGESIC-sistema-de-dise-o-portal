<?php
  $title = 'Principios rectores';
?>
<?php include "inc/head.php"; ?>

  <!-- Cabezal -->
  <?php include "inc/header.php"; ?>

  <!-- Breadcrumb -->
  <div class="Breadcrumb">
    <div class="Container">
      <ul>
        <li><a href="index.php">Inicio</a></li>
        <li>Principios rectores</li>
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
							$activeItem = 'principios';
							include "inc/nav-inicio.php"; 
						?>
						
          </div>

          <div class="Grid-item u-md-size3of4">
            <div class="Page-body">

              <div class="Page-document">

                <span class="Page-subtitle">Sobre este Sistema de diseño</span>
                <h2 class="Page-title">Principios rectores del sistema</h2>
								
								 <div class="Page-info">
									<div class="Bar">
										<div class="Bar-cell">
											<div class="Page-date">Versión 1.0</div>
										</div>

									</div>
								</div>
								
								<p>Todos los elementos que componen el sistema de diseño fueron creados teniendo como punto de partida las buenas prácticas de diseño usable y accesible, documentado en las guías de creación de portales de Agesic, publicado hace más de una década. A partir de ese documento original, y sumando la experiencia recogida a lo largo de más de 15 años en experiencia de usuario, se definieron los principios rectores para la creación de este sistema.</p>
								
								<ul class="List-text">
                  <li><i><b>Mobile first</b></i><br> 
										Como respuesta al aumento en las estadísticas de tráfico móvil globales, el sistema de diseño concibe el diseño desde la perspectiva de “primero el móvil”; diseñando primero la solución para dispositivos móviles y, a partir de ahí, escalar el diseño y las funcionalidades para pantallas más grandes (escritorio). Priorizando el contenido esencial, la rapidez de carga y la usabilidad en móviles, asegurando una mejor experiencia para la mayoría de los usuarios. </li>
									<li><b>Accesibilidad</b><br>
										La accesibilidad digital es el resultado de diseñar y desarrollar servicios y productos digitales para que el mayor número de personas puedan usarlos, independientemente de sus condiciones personales y de su entorno. El objetivo del sistema de diseño es contemplar desde el diseño los requisitos que deben cumplir los servicios y productos digitales para ser considerados accesibles, tal como se establece en el <a href="https://www.impo.com.uy/bases/leyes/19924-2020/88">Artículo 88 de la Ley N°.19.924 de presupuesto nacional 2020-2025</a>.</li>
                  <li><b>Diseño atómico</b><br> 
										Un sistema de diseño construido bajo el principio de diseño atómico se fundamenta en la idea de descomponer la interfaz en unidades pequeñas, reutilizables y coherentes, que escalan de forma ordenada hasta formar experiencias completas. Este enfoque permite definir primero los elementos más básicos (colores, tipografías, iconos o botones) para luego, al combinarlos, se asegure una mayor consistencia visual, funcional y técnica en todo el producto. </li>
									<li><b>Variantes de diseño asociadas a los componentes</b><br>
										Cada componente que forma parte del sistema cuenta con un conjunto definido de variantes que permiten, sin necesidad de conocimientos específicos de diseño, explorar distintas configuraciones hasta identificar la opción que mejor se ajusta al problema a resolver. De este modo, al seleccionar un tipo de componente se accede automáticamente a una amplia gama de alternativas visuales y funcionales, facilitando su adaptación a diferentes contextos y casos de uso, sin comprometer la coherencia ni la calidad del sistema en su conjunto. </li>
									<li><b>Comunidad</b><br> 
										La participación activa de la comunidad, en especial de los equipos de comunicación y desarrollo, es una condición clave para la evolución del sistema. Su retroalimentación constante permite identificar oportunidades de mejora, detectar necesidades reales y validar las soluciones existentes, logrando así que el sistema crezca de manera orgánica, se perfeccione continuamente y se vuelva cada vez más robusto y útil para todos los equipos que lo utilizan. 
									</li>
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

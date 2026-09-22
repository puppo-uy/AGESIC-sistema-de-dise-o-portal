<?php
  $title = '¿A quién está dirigido el Sistema de Diseño del Estado Uruguayo?';
?>
<?php include "inc/head.php"; ?>

  <!-- Cabezal -->
  <?php include "inc/header.php"; ?>

  <!-- Breadcrumb -->
  <div class="Breadcrumb">
    <div class="Container">
      <ul>
        <li><a href="sist-que-es.php">Inicio</a></li>
        <li>Sobre este Sistema de diseño</li>
        <li>¿A quién está dirigido el Sistema de Diseño del Estado Uruguayo?</li>
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
							$activeItem = 'a-quien-esta-dirigido';
							include "inc/nav-inicio.php"; 
						?>
						
          </div>

          <div class="Grid-item u-md-size3of4">
            <div class="Page-body">

              <div class="Page-document">

                <span class="Page-subtitle">Sobre este Sistema de diseño</span>
                <h2 class="Page-title">¿A quién está dirigido el Sistema de Diseño del Estado Uruguayo?</h2>
								
								<div class="Page-info">
									<div class="Bar">
										<div class="Bar-cell">
											<div class="Page-date">Versión 1.0</div>
										</div>
									</div>
								</div>
								
								<!-- Contenido a incorporar por el usuario -->
								<p class="Page-description">El Sistema de Diseño del Estado Uruguayo permite establecer criterios comunes para la creación de interfaces digitales. Al compartir estilos, componentes, recomendaciones y recursos, facilita que los distintos equipos puedan trabajar coordinados y favorece experiencias más consistentes en productos digitales.</p>

								<p>No es una herramienta exclusiva de quienes diseñan interfaces y tampoco pertenece a un único equipo. Este Sistema de Diseño busca ordenar y facilitar el trabajo colaborativo entre las diferentes personas que intervienen en un producto digital, ayudando a que todos los involucrados puedan tomar decisiones a partir de referencias compartidas.</p>

                <h3>¿Cuáles son algunos de los roles y equipos beneficiados por esta herramienta?   </h3>
                  <ul>
                    <li><strong>Equipos y profesionales de diseño UX/UI</strong> para diseñar nuevas
                  soluciones o evolucionar productos existentes a partir de estilos, patrones
                  y componentes compartidos, documentar usos y mantener la coherencia
                  visual y de interacción entre productos.</li>
                    <li><strong>Equipos y profesionales de desarrollo front-end</strong> para implementar
                  componentes reutilizables, integrar los patrones de diseño al código y
                  asegurar su funcionamiento en distintos productos, dispositivos y
                  tamaños de pantalla.</li>
                    <li><strong>Especialistas de experiencia de usuario y accesibilidad</strong> para revisar
                  criterios de interacción, validar que los componentes sean comprensibles,
                  usables y accesibles, realizar evaluaciones y pruebas, e identificar
                  oportunidades de mejora.</li>
                    <li>  <strong>Equipos de producto</strong> para planificar y priorizar soluciones a partir de
                  componentes y criterios ya definidos, coordinar el trabajo entre distintas
                  áreas, y evitar que cada producto vuelva a resolver de manera
                  independiente problemas comunes.</li>
                    <li><strong>Equipos de contenidos y comunicación</strong> para aplicar criterios comunes de
                  identidad visual y comunicacional, mantener la consistencia de la marca
                  en distintos productos digitales y utilizar referencias compartidas para la
                  creación de contenidos.</li>
                    <li><strong>Personas responsables de la gestión o evaluación de proyectos digitales</strong> para definir requisitos, orientar decisiones, evaluar propuestas y verificar
                  que los productos incorporen criterios comunes. También les permite
                  contar con una referencia compartida al momento de contratar,
                  supervisar o evolucionar soluciones digitales.</li>
                    <li><strong>Proveedores con diferentes especialidades</strong> para trabajar desde el inicio con criterio y referencias compartidas, independientemente de su
                  disciplina. Este Sistema de Diseño les permite alinear su trabajo con los
                  estándares definidos, reducir decisiones y facilitar la coordinación y
                  validación con los equipos de la organización.</li>
                  </ul>  

                <p>El nivel de uso del Sistema de Diseño puede variar según el rol. Algunas personas
                utilizarán directamente los recursos de Figma o Github, mientras que otras
                consultarán los criterios de accesibilidad o las recomendaciones de uso, y otras
                necesitarán conocer el sistema para acompañar proyectos.</p>

                <p>Si bien algunos perfiles harán un uso más técnico de este Sistema de Diseño,
                cualquier persona interesada en mejorar la calidad de los productos digitales puede
                consultarlo y utilizarlo como referencia.</p>

                <p>De esta manera, funciona como una herramienta compartida que ayuda a
                establecer un lenguaje y criterios comunes entre las distintas personas y
                organizaciones involucradas.</p>

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

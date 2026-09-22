<?php
  $title = '¿Para qué sirve el Sistema de Diseño?';
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
        <li>¿Para qué sirve el Sistema de Diseño?</li>
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
							$activeItem = 'para-que-sirve';
							include "inc/nav-inicio.php"; 
						?>
						
          </div>

          <div class="Grid-item u-md-size3of4">
            <div class="Page-body">

              <div class="Page-document">

                <span class="Page-subtitle">Sobre este Sistema de diseño</span>
                <h2 class="Page-title">¿Para qué sirve el Sistema de Diseño?</h2>
								
								<div class="Page-info">
									<div class="Bar">
										<div class="Bar-cell">
											<div class="Page-date">Versión 1.0</div>
										</div>
									</div>
								</div>
								
								<!-- Contenido a incorporar por el usuario -->
								<p class="Page-description">Al crear productos digitales, los equipos suelen enfrentar distintos desafíos como
definir criterios de diseño e interacción, resolver problemas de accesibilidad y tomar
decisiones sobre aspectos que, en muchas oportunidades, ya fueron discutidos en
otros productos.</p>

                <p>Cuando no existe una base común, los equipos trabajan desde cero y usan criterios
                diferentes. Esto suele generar retrabajo, dificulta la consistencia entre productos y
                hace más complejo su mantenimiento y evolución.</p>
                <p>El Sistema de Diseño del Estado Uruguayo busca ser una respuesta a estos
                desafíos. Brinda una base común para crear productos digitales de forma más
                consistente, accesible, eficiente y escalable. Reúne estilos, componentes
                reutilizables y recomendaciones de uso que pueden aplicarse en diferentes
                soluciones digitales.</p>
                <p>De esta forma, los equipos pueden apoyarse en decisiones previamente definidas y
                concentrar sus esfuerzos en comprender las necesidades de las personas
                usuarias, resolver los problemas específicos de cada producto digital y generar una
                óptima experiencia de usuario.</p>
                <h3>Principales beneficios del uso de este sistema:</h3>

                <h4>Facilita la creación de productos digitales</h4>
                <p>El sistema proporciona estilos y componentes que pueden reutilizarse en portales,
                formularios, aplicaciones web y otros productos digitales. Esto permite partir de una
                base común y concentrar el trabajo de los equipos en las necesidades específicas
                de las soluciones digitales. También agiliza la creación de nuevas soluciones y
                facilita su evolución.</p>

                <h4>Mejora la consistencia</h4>
                <p>Contar con criterios compartidos ayuda a mantener una experiencia visual y de
                interacción coherente entre distintos productos. Colores, tipografías, espaciados,
                componentes y patrones se definen de forma centralizada para que puedan
                utilizarse de manera coherente.</p>
                <p>Esto evita volver a discutir las mismas decisiones en cada proyecto y contribuye a
                que las personas encuentren comportamientos y formas de interacción más
                previsibles entre diferentes soluciones.</p>

                <h4>Favorece la accesibilidad</h4>
                <p>Los componentes se diseñan, prueban y mejoran antes de incorporarse a los
                productos digitales. Esto permite identificar barreras de forma temprana y verificar
                el cumplimiento de criterios de accesibilidad, incluida la normativa uruguaya
                vigente, para que puedan ser utilizados por la mayor cantidad posible de personas.</p>

                <h4>Optimiza tiempos y recursos</h4>
                <p>La reutilización de soluciones previamente definidas evita repetir tareas de diseño y
                de desarrollo en los equipos. También permite realizar mejoras de manera
                centralizada y facilita el mantenimiento y mejora de los productos que utilizan el
                sistema.</p>

                <h4>Mejora el trabajo entre equipos</h4>
                <p>El Sistema de Diseño del Estado Uruguayo funciona como un punto común de
                referencia para los equipos de Diseño, Desarrollo, Comunicación y Marketing, entre
                otros. Compartir criterios y pautas reduce ambigüedades y permite tomar
                decisiones de manera más coordinada.</p>

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

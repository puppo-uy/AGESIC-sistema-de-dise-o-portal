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
      
        <div class="Grid">
					
          <div class="Grid-item Grid-item--center u-md-size3of4 u-lg-size7of10">
						
						<div class="Page">
            <div class="Page-body">

              <div class="Page-document">

                <!--<span class="Page-subtitle">Mensajes y diálogos</span>-->
                <h2 class="Page-title">¿¿Qué es el Sistema de Diseño del Estado Uruguayo? </h2>
								
								 <div class="Page-info">
									<div class="Bar">
										<div class="Bar-cell">
											<div class="Page-date">Versión 1.0</div>
										</div>
										<div class="Bar-cell">
											<ul class="Page-actions">
												<li>
													<?php include "./../recursos/inc/moleculas/dropdown-compartir.php"; ?>
												</li>
											</ul>
										</div>
									</div>
								</div>
								
								<p class="Page-description">El sistema de diseño del Estado es un conjunto de herramientas para el diseño y construcción de interfaces digitales, que tienen como finalidad construir servicios digitales consistentes, con foco en la ciudadanía, accesibles y optimizados para dispositivos móviles. </p>
								
								<h3>Objetivos y alcance</h3>
								
								<h4>El sistema de diseño incluye:</h4>
								
								<ul class="List-text">
                  <li><strong>Estilos:</strong> Lineamientos visuales de diseño como tipografía, paleta de colores, bordes, fondos, íconos y elementos decorativos, que hacen que los servicios se perciban como parte de un todo por parte de la ciudadanía. </li>
                  <li><strong>Comportamientos:</strong> Definiciones de lenguaje de interacción orientadas a que los entornos digitales sean intuitivos, sencillos y sobre todo consistentes. </li>
                  <li><strong>Componentes:</strong> Piezas reutilizables, creadas con una visión transversal que contempla las buenas prácticas y lineamientos sobre Diseño de interacción y Accesibilidad. Ahorran tiempo de diseño y desarrollo, reutilizando bloques pre creados como navegación, botones, campos, tablas, y tarjetas. </li>
                </ul>

								<h4>Principios rectores del sistema</h4>
								
								<p>Todos los elementos que componen el sistema de diseño fueron creados teniendo como punto de partida las buenas prácticas de diseño usable y accesible, documentado en las guías de creación de portales de Agesic, publicado hace más de una década. A partir de ese documento original, y sumando la experiencia recogida a lo largo de más de 15 años en experiencia de usuario, se definieron los principios rectores para la creación de este sistema.</p>
								
								<ul class="List-text">
                  <li><i><b>Mobile first</b></i><br> 
										Como respuesta al aumento en las estadísticas de tráfico móvil globales, el sistema de diseño concibe el diseño desde la perspectiva de “primero el móvil”; diseñar primero la versión del sitio para dispositivos móviles y, a partir de ahí, escalar el diseño y las funcionalidades para pantallas más grandes (escritorio). Priorizando el contenido esencial, la rapidez de carga y la usabilidad en móviles, asegurando una mejor experiencia para la mayoría de los usuarios. </li>
									<li><b>Accesibilidad</b><br>
										La accesibilidad digital es el resultado de diseñar y desarrollar servicios y productos digitales para que el mayor número de personas puedan usarlos, independientemente de sus condiciones personales y de su entorno. El objetivo del sistema de diseño es contemplar desde el diseño los requisitos que deben cumplir los servicios y productos digitales para ser considerados accesibles, tal como se establece en el <a href="https://www.impo.com.uy/bases/leyes/19924-2020/88">Artículo 88 de la Ley N°.19.924 de presupuesto nacional 2020-2025</a>.</li>
                  <li><b>Diseño atómico</b><br> 
										Un sistema de diseño construido bajo el principio de diseño atómico se fundamenta en la idea de descomponer la interfaz en unidades pequeñas, reutilizables y coherentes, que escalan de forma ordenada hasta formar experiencias completas. Este enfoque permite definir primero los elementos más básicos (colores, tipografías, iconos o botones) para luego, al combinarlos, se asegure una mayor consistencia visual, funcional y técnica en todo el producto.</li>
									<li><b>Variantes de diseño asociadas a los componentes</b><br>
										Cada componente que forma parte del sistema cuenta con un conjunto definido de variantes que permiten, sin necesidad de conocimientos específicos de diseño, explorar distintas configuraciones hasta identificar la opción que mejor se ajusta al problema a resolver. De este modo, al seleccionar un tipo de componente se accede automáticamente a una amplia gama de alternativas visuales y funcionales, facilitando su adaptación a diferentes contextos y casos de uso, sin comprometer la coherencia ni la calidad del sistema en su conjunto.</li>
									<li><b>Comunidad</b><br> 
										La participación activa de la comunidad, en especial de los equipos de comunicación y desarrollo, es una condición clave para la evolución del sistema. Su retroalimentación constante permite identificar oportunidades de mejora, detectar necesidades reales y validar las soluciones existentes, logrando así que el sistema crezca de manera orgánica, se perfeccione continuamente y se vuelva cada vez más robusto y útil para todos los equipos que lo utilizan.
									</li>
                </ul>
								
								<h3>Figma + HTML/CSS</h3>
								<p>El sistema de diseño tiene dos herramientas para su aplicación:</p>
								
								<ul class="List-text">
									<li><b>Figma:</b> Estándar de la industria del diseño digital, que permite alinear de forma directa el diseño con su implementación real, facilita la colaboración, la exploración visual y el uso consistente de componentes por parte de perfiles no técnicos.</li>
									<li><b>HTML/CSS:</b> asegura que los componentes estén fielmente representados en código, para acercar el diseño a las herramientas de desarrollo. Reduciendo fricciones entre diseño y desarrollo, mejora la coherencia entre lo diseñado y lo construido, y garantiza un sistema accesible, escalable y fácil de mantener.</li>
								</ul>
							
								<h4>Especificaciones técnicas</h4>
								
								<h5>Idioma del código</h5>
								<p>Utilizamos español para todos los términos salvo cuando usar inglés aporte a la mejor comprensión del concepto a transmitir.</p>
								
								<h5>Variables</h5>
								
								<h6 class="u-mt4 u-mb2">Variables primitivas</h6>
								
								<p>Son valores básicos, sin semántica ni contexto específico, que definen las propiedades fundamentales del diseño. Funcionan como el punto de partida neutro y reutilizable del sistema, estableciendo una base sólida sobre la cual construir portales, formularios, aplicaciones web y cualquier otro componente digital.</p>
								<p>Centralizar estos estilos garantiza coherencia visual, facilita su mantenimiento y permite adaptarse a cambios globales con eficiencia.</p>
								<p>Estas variables contemplan diversas categorías, como colores, tipografías (familias, pesos, tamaños, interlineados), bordes (grosores y radios), espaciados (para márgenes y paddings) y sombras.</p>
								
								<h6 class="u-mt4 u-mb2">Variables semánticas</h6>
								<p>Las variables semánticas otorgan significado y contexto a los valores de diseño. A diferencia de las variables primitivas, que son valores neutrales, las semánticas se usan para nombrar estilos según su función o intención dentro de la interfaz.</p>
								<p>Estas variables permiten traducir decisiones abstractas en elecciones de diseño concretas:</p>
								<ul class="List-text">
									<li>En lugar de usar “<code>#FF0000</code>”, usamos la variable semántica “<code>color-error (rojo-error)</code>”; separando la intención del diseño de su valor específico.</li>
									<li>En lugar de “<code>radio-8px (8px)</code>”, usamos “<code>radio-s (radio-8px)</code>”; referenciando a un valor semántico del sistema y no directamente al valor numérico.</li>
								</ul>
								
								<p>Esto mejora la legibilidad del código, facilita la colaboración entre equipos y permite realizar cambios globales sin afectar la coherencia visual del sistema. </p>
								<p>En conjunto, las variables semánticas permiten construir componentes y patrones que se adaptan a diferentes contextos (como modo claro/oscuro, pantallas móviles o de escritorio, además de distintas marcas o productos) sin perder consistencia.</p>
								<p>Las variables semánticas se organizan según su propósito y definición del sistema de diseño y están asociadas a variables primitivas u otras variables semánticas ya definidas. Por ejemplo:</p>
								
								<ul class="List-text">
									<li>Colores: <code>color-primario</code>, <code>color-secundario</code>, <code>color-neutral</code>, <code>color-exito</code>, <code>color-error</code>.</li>
									<li>Tipografía: <code>fuente-marca</code>, <code>fuente-texto</code>, <code>tamano-titulo-xl</code>, <code>tamano-cuerpo-m</code>, <code>altura-linea-cuerpo</code>.</li>
									<li>Espaciado: <code>espaciado-4</code>, <code>espaciado-8</code>, <code>separacion-columnas</code>, <code>separacion-listado</code>.</li>
									<li>Bordes y radio: <code>border-radius-sm</code>, <code>border-radius-boton</code>, <code>border-radius-tarjeta</code>.</li>
									<li>Sombras: <code>sombra-xs</code>, <code>sombra-s</code>, <code>sombra-boton</code>, <code>sombra-tarjeta</code>.</li>
								</ul>
								
								<h6 class="u-mt4 u-mb2">Nombre de las variables</h6>
								<p>Los atributos se separan con “-” y las palabras con “_”. Por ejemplo: <code>titulo_tarjeta-titulo-xxl-bold</code>.</p>
							
								<!--
                <h3>Etiquetas</h3>

                <div class="Tags">
                  <a href="#" class="Tags-item">Etiqueta</a>
                  <a href="#" class="Tags-item">Uruguay</a>
                  <a href="#" class="Tags-item">Palabra clave</a>
                </div>
                -->


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

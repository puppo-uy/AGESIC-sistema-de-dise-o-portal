<?php
  $title = 'Especificaciones técnicas';
?>
<?php include "inc/head.php"; ?>

  <!-- Cabezal -->
  <?php include "inc/header.php"; ?>

  <!-- Breadcrumb -->
  <div class="Breadcrumb">
    <div class="Container">
      <ul>
        <li><a href="sist-que-es.php">Inicio</a></li>
        <li>Especificaciones técnicas</li>
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
							$activeItem = 'especificaciones';
							include "inc/nav-inicio.php"; 
						?>
						
          </div>

          <div class="Grid-item u-md-size3of4">
            <div class="Page-body">

              <div class="Page-document">

                <span class="Page-subtitle">Sobre este Sistema de diseño</span>
                <h2 class="Page-title">Especificaciones técnicas</h2>
								
								 <div class="Page-info">
									<div class="Bar">
										<div class="Bar-cell">
											<div class="Page-date">Versión 1.0</div>
										</div>

									</div>
								</div>
								
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

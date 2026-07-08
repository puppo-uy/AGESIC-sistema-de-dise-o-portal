<?php
  $title = 'Documento HTML';
?>
<?php include "inc/head.php"; ?>

  <!-- Cabezal -->
  <?php include "inc/header.php"; ?>

  <!-- Breadcrumb -->
  <div class="Breadcrumb">
    <div class="Container">
      <ul>
        <li><a href="sist-que-es.php">Inicio</a></li>
        <li><a href="#">Componentes</a></li>
				<li>Acciones</li>
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
						<nav class="Page-nav Page-nav--mf Page-nav--only">
							<div class="Page-navWrap">
								<a class="Page-navTitle collapsed" data-toggle="collapse" href="#nav-target" role="button">Componentes <span class="Page-navStatus"></span></a>
							</div>
							<ul id="nav-target" class="Page-navList collapse">
								<li><a href="#">Íconos</a></li>
								<li><a href="#">Texto</a></li>
								<li><a href="#">Navegación</a></li>
								<li><a href="#">Mensajes y diálogos</a></li>
								<li><a href="#">Formularios</a></li>
								<li>
									<a href="#">Acciones</a>
									<ul class="Page-navSublist">
										<li class="is-active"><a href="#">Botones</a></li>
										<li><a href="#">Enlaces</a></li>
										<li><a href="#">Grupo de botones</a></li>
										<li><a href="#">Botón con desplegable</a></li>
									</ul>
								</li>
								<li><a href="#">Contenedores gubuy</a></li>
								<li><a href="#">Visualización de datos</a></li>
							</ul>
						</nav>
						
          </div>

          <div class="Grid-item u-md-size3of4">
            <div class="Page-body">

              <div class="Page-document">

                <span class="Page-subtitle">Acciones</span>
                <h2 class="Page-title">Botones</h2>
								
								 <div class="Page-info">
									<div class="Bar">
										<div class="Bar-cell">
											<div class="Page-date">Versión 1.0</div>
										</div>
									</div>
								</div>
								
								<p class="Page-description">Los botones permiten al usuario ejecutar acciones dentro de una interfaz. Según su jerarquía visual y funcional, los botones se utilizan para destacar la acción principal de una pantalla, ofrecer acciones alternativas o accesos secundarios, manteniendo siempre una clara diferenciación entre ellos. </p>
								
								<h3>Estructura del componente</h3>
								
								<img src="img/botones" alt="Componente Botón">
								
								<div class="Grid">
									<div class="Grid-item u-size1of2">
										<h4>Elementos que lo componen:</h4>
										<ul class="List-text">
											<li>Fondo</li>
											<li>Borde</li>
											<li>Texto</li>
											<li>Ícono</li>
											<li>Sombra</li>
										</ul>
									</div>
									<div class="Grid-item u-size1of2">
										<h4>Variantes:</h4>
										<ul class="List-text">
											<li><b>Jerarquía</b>: Botón primario, Botón secundario, Botón enlace</li>
											<li><b>Estado interactivo</b>: Por defecto, Hover, Presionado, Deshabilitado</li>
											<li><b>Formato</b>: Solo texto, Texto + icono, Solo icono</li>
											<li><b>Tamaño</b>: L, M, S</li>
										</ul>
									</div>
								</div>

                <!--
                <div class="Page-image">
                  <img src="../recursos/img/uruguay.jpg" alt="Uruguay">
                </div>
                -->

                <!-- Inicio de HTML Portal Unificado -->
                <h3>Recomendaciones de uso</h3>
								
								<h4>Buenas prácticas</h4>
								
								<ul class="List-text">
                  <li>Utilizar textos claros, directos y concisos. Máximo recomendado de 3 palabras.</li>
                  <li>Texto corto, claro y en voz activa, preferiblemente usar verbos. (Ej: “Enviar”, “Guardar”, “Descargar”).</li>
                  <li>Acciones concretas y autodescriptivas (Ej: Enviar formulario). Evitar términos genéricos sin contexto.</li>
                </ul>
								
								<h3>Variantes</h3>

								<h4>Jerarquía</h4>
								
								<h5>Botón primario</h5>
								<img src="#" alt="Botón primario">
								<p>Representa la acción principal dentro de una pantalla. Se utiliza para guiar al usuario hacia el paso más importante del flujo. </p>
								
								<h6 class="u-mt4 u-mb2">Casos típicos de uso:</h6>
								<ul class="List-text">
                  <li>Enviar formulario o avanzar al siguiente paso del formulario.</li>
                  <li>Confirmar una decisión en un modal. </li>
                  <li>Acción que marca una acción destacada. (Ej: Publicar, Eliminar).</li>
                  <li>Acción principal en una pantalla o bloque donde hay una clara jerarquía de acciones.</li>
                </ul>
								
								<h6 class="u-mt4 u-mb2">Cuándo no usarlo:</h6>
								<ul class="List-text">
                  <li>Para acciones secundarias o de menor importancia.</li>
									<li>Cuando ya existe otro botón primario en la misma vista (solo debe haber uno).</li>
                </ul>
								
								
								<h5>Botón secundario</h5>
								<img src="#" alt="Botón secundario">
								<p>Complementa al botón primario y permite ejecutar acciones de apoyo o alternativas, sin competir visualmente con la acción principal.</p>
								
								<h6 class="u-mt4 u-mb2">Casos típicos de uso:</h6>
								<ul class="List-text">
                  <li>Cuando existe una acción secundaria que acompaña a la principal (Ej: “Cancelar”, “Volver”).</li>
                  <li>En diálogos o modales junto al botón primario.</li>
                  <li>En flujos donde hay más de una opción, pero solo una es prioritaria. </li>
                </ul>
								
								<h6 class="u-mt4 u-mb2">Cuándo no usarlo:</h6>
								<ul class="List-text">
                  <li>Como reemplazo del botón primario en acciones principales, salvo que se requiera intencionalmente una menor jerarquía visual y no exista otro botón principal en la pantalla.</li>
									<li>Para demasiadas acciones al mismo nivel.</li>
                </ul>
								
								
								<h5>Botón enlace</h5>
								<img src="#" alt="Botón enlace">
								<p>Funciona como la acción de menor jerarquía. Se utiliza cuando la acción no debe competir visualmente con botones primarios o secundarios.</p>
								
								<h6 class="u-mt4 u-mb2">Casos típicos de uso:</h6>
								<ul class="List-text">
                  <li>Para acciones de bajo peso dentro de un flujo (Ej: “Compartir”).</li>
                  <li>Para accesos a información complementaria o configuraciones secundarias.</li>
                </ul>
								
								<h6 class="u-mt4 u-mb2">Cuándo no usarlo:</h6>
								<ul class="List-text">
                  <li>Como acción principal de una pantalla.</li>
									<li>Para tareas críticas o irreversibles.</li>
                </ul>
								
								<h4>Estado interactivo</h4>
								
								<h4>Formatos</h4>
								
								<h5>Alerta completa</h5>
								<img class="u-mb2" src="img/alertas/completa.png" alt="Componente Alerta completa">
								<p>Es una alerta fija que se utiliza cuando el mensaje requiere contexto o instrucciones adicionales que el usuario debe leer. Puede usarse para comunicar información que debe permanecer visible dentro del flujo hasta que el usuario la atienda mediante una acción relacionada.</p>
								
								
								<h3>Accesibilidad</h3>
								<div class="Tags">
                  <span class="Tags-item">WCAG Nivel AAA</span>
                </div>
								
								<h4>Recomendaciones para no perder la accesibilidad</h4>
								<ul class="List-text">
                  <li>No utilizar botones de solo ícono sin proporcionar un texto alternativo descriptivo.</li>
                  <li>Evitar el uso de textos genéricos o usar referencias visuales en la redacción. (Ej: Evitar textos como “ver más”, “clic aquí”).</li>
                  <li>Evitar textos completamente en mayúsculas.</li>
                </ul>
								
								<h3>Recursos</h3>
								<div class="Table-wrapper">
                  <table class="Table Table--responsive">
                    <caption>Tabla 2. Título de tabla agregado con la etiqueta <code>caption</code></caption>
                    <thead>
                      <tr>
												<th>Tipo</th>
                        <th>Recurso</th>
                        <th>Estado</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td data-title="Tipo">Diseño</td>
                        <td data-title="Recursos"><a href="#" class="u-outerLink">Figma: Sistema de Diseño<span class="u-hideVisually">Enlace externo</span></a></td>
												<td data-title="Estado">Versión: 2.1.56 - 2025/02/05</td>
                      </tr>
                      <tr>
                        <td data-title="Tipo">Implementación</td>
                        <td data-title="Recursos"><a href="#" class="u-outerLink">Github<span class="u-hideVisually">Enlace externo</span></a></td>
												<td data-title="Estado">Última versión: 2.1.72 - 2025/02/05</td>
                      </tr>
                    </tbody>
                  </table>
                </div>
								
								<h3>Componentes relacionados</h3>
								

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

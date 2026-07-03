<?php
  $title = 'Alertas';
?>
<?php include "inc/head.php"; ?>

  <!-- Cabezal -->
  <?php include "inc/header.php"; ?>

  <!-- Breadcrumb -->
  <div class="Breadcrumb">
    <div class="Container">
      <ul>
        <li><a href="index.php">Inicio</a></li>
        <li>Componentes</li>
				<li>Alertas</li>
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
							$activeItem = 'alertas';
							include "inc/nav-componentes.php"; 
						?>
						
          </div>

          <div class="Grid-item u-md-size3of4">
            <div class="Page-body">

              <div class="Page-document">

                <span class="Page-subtitle">Mensajes y diálogos</span>
                <h2 class="Page-title">Alertas</h2>
								
								 <div class="Page-info">
									<div class="Bar">
										<div class="Bar-cell">
											<div class="Page-date">Versión 1.0</div>
										</div>
									</div>
								</div>
								
								<p class="Page-description">Las alertas comunican mensajes relevantes al usuario sobre el estado de un proceso, el resultado de una acción o información que requiere atención. Permiten confirmar, advertir, informar o notificar de manera clara y jerarquizada, y pueden variar su formato según su tipo de mensaje y nivel de permanencia en la pantalla.</p>
								
								<h3>Estructura del componente</h3>
								
								<img src="img/alertas/emergente.png" alt="Componente Alerta emergente">
								
								<div class="Grid">
									<div class="Grid-item u-size1of2">
										<h4>Elementos que lo componen:</h4>
										<ul class="List-text">
											<li>Fondo</li>
											<li>Borde</li>
											<li>Título</li>
											<li>Párrafo</li>
											<li>Ícono de estado</li>
											<li>Ícono de cerrar</li>
											<li>Enlace de acción</li>
										</ul>
									</div>
									<div class="Grid-item u-size1of2">
										<h4>Variantes:</h4>
										<ul class="List-text">
											<li><b>Estado</b>: Éxito, Error, Advertencia, Notificación, Información</li>
											<li><b>Formato</b>: Completa, Simple, Emergente</li>
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
								
								<h4>Casos típicos</h4>

								<ul class="List-text">
                  <li>Informar un resultado o estado de una acción (Ej: “Formulario enviado correctamente”).</li>
                  <li>Advertir sobre posibles consecuencias o confirmar que el usuario debe revisar algo antes de continuar.</li>
                  <li>Mostrar errores que impiden completar una acción.</li>
                  <li>Comunicar información complementaria, no urgente.</li>
                </ul>
								
								<h4>Cuándo no usarlo</h4>
								
								<ul class="List-text">
                  <li>Para confirmaciones menores que puedan resolverse dentro del flujo (Ej: un cambio guardado de forma automática).</li>
                  <li>Para mensajes extensos o con contenido de ayuda detallado (en ese caso, usar una ventana modal o un bloque informativo).</li>
                  <li>Para interrumpir tareas en curso sin justificación o sin una acción esperada por parte del usuario.</li>
                </ul>

								<h4>Buenas prácticas</h4>
								
								<ul class="List-text">
                  <li>Usar un tono claro, directo y conciso.</li>
                  <li>Colocar la alerta cerca del área o componente al que hace referencia.</li>
                  <li>Evitar el uso de palabras completamente en mayúscula o signos de exclamación innecesarios.</li>
                </ul>
								
								<h3>Variantes</h3>

								<h4>Estados</h4>
								
								<div class="Table-wrapper">
                  <table class="Table Table--responsive">
                    <caption>Tabla 2. Título de tabla agregado con la etiqueta <code>caption</code></caption>
                    <thead>
                      <tr>
                        <th>Muestra</th>
                        <th>Descripción</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td data-title="Muestra">
													<img src="img/alertas/exito.png" alt="Componente Alerta completa éxito">
												</td>
                        <td data-title="Descripción">
													<h5 class="u-mt2 u-mb1 u-h6">Éxito</h5>
													<p>Indica que una acción se completó correctamente.</p>
												</td>
                      </tr>
                      <tr>
                        <td data-title="Muestra">
													<img src="img/alertas/advertencia.png" alt="Componente Alerta completa advertencia">
												</td>
                        <td data-title="Descripción">
													<h5 class="u-mt2 u-mb1 u-h6">Advertencia</h5>
													<p>Señala una posible consecuencia o requerimiento de atención.</p>
												</td>
                      </tr>
											<tr>
                        <td data-title="Muestra">
													<img src="img/alertas/info.png" alt="Componente Alerta completa información">
												</td>
                        <td data-title="Descripción">
													<h5 class="u-mt2 u-mb1 u-h6">Información</h5>
													<p>Presenta contenido informativo o complementario.</p>
												</td>
                      </tr>
											<tr>
                        <td data-title="Muestra">
													<img src="img/alertas/error.png" alt="Componente Alerta completa error">
												</td>
                        <td data-title="Descripción">
													<h5 class="u-mt2 u-mb1 u-h6">Error</h5>
													<p>Indica un problema que impide continuar o completar una acción.</p>
												</td>
                      </tr>
											<tr>
                        <td data-title="Muestra">
													<img src="img/alertas/notificacion.png" alt="Componente Alerta completa notificación">
												</td>
                        <td data-title="Descripción">
													<h5 class="u-mt2 u-mb1 u-h6">Notificación</h5>
													<p>Comunica estados o mensajes del sistema que no dependen de una acción directa del usuario.</p>
												</td>
                      </tr>
                    </tbody>
                  </table>
                  <!--<p id="descripcionTabla3">Descripción de la tabla 2 - Tabla con clase <code>Table--responsive</code> y descripción abajo.</p>-->
                </div>
								
								<h4>Formatos</h4>
								
								<h5>Alerta completa</h5>
								<img class="u-mb2" src="img/alertas/completa.png" alt="Componente Alerta completa">
								<p>Es una alerta fija que se utiliza cuando el mensaje requiere contexto o instrucciones adicionales que el usuario debe leer. Puede usarse para comunicar información que debe permanecer visible dentro del flujo hasta que el usuario la atienda mediante una acción relacionada.</p>
								
								<h5>Alerta simple</h5>
								<img class="u-mb2" src="img/alertas/simple.png" alt="Componente Alerta simple">
								<p>También es una alerta fija. Se utiliza para dar avisos breves y explícitos cuya intención se entiende con un título breve y conciso. Se usa cuando el contexto ya aporta suficiente detalle y no es necesario añadir texto explicativo ni acciones complementarias, o cuando hay poco espacio en pantalla.</p>
								
								<h5>Alerta emergente</h5>
								<img class="u-mb2" src="img/alertas/emergente.png" alt="Componente Alerta emergente">
								<p>Sirve para mensajes temporales que informan sin interrumpir la tarea en curso. Aparece en una esquina de la pantalla y puede cerrarse manualmente para no bloquear el flujo de trabajo del usuario. Se utiliza principalmente en aplicaciones.</p>	
								
								<h3>Accesibilidad</h3>
								<h4>Recomendaciones para no perder la accesibilidad</h4>
								<ul class="List-text">
                  <li>Evitar el uso de textos genéricos o usar referencias visuales en la redacción. (Ej: Evitar textos como “ver más”, “clic aquí”).</li>
                  <li>Evitar textos completamente en mayúsculas.</li>
                  <li>Escribir frases y oraciones breves. Los párrafos extensos exigen más concentración y dificultan la lectura y comprensión del texto.</li>
									<li>No cambiar los tokens de color del componente, se podría reducir el contraste y entorpecer la lectura.</li>
                </ul>
								
                <!-- Fin de HTML Portal Unificado -->
                <!--
                <h3>Otros contenidos</h3>

                <div class="Alert">
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempora sapiente inventore fugiat velit, ipsam nemo recusandae corporis labore optio quas.
                </div>

                <div class="Alert">
                  <h3>Encabezado H3</h3>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repudiandae eligendi asperiores assumenda atque impedit perferendis, quasi, ratione facere reprehenderit quia!</p>
                  <ul>
                    <li>Lorem ipsum dolor sit.</li>
                    <li>Praesentium voluptates quos, alias.</li>
                    <li>Architecto deserunt ipsam, quasi.</li>
                    <li>Fugit molestias ad excepturi?</li>
                  </ul>
                </div>

                <a class="Download" href="#" title="Descargar: Formulario para inscripción (.pdf 354 KB)">
                  <div class="Media">
                    <div class="Media-image">
                      <span class="Download-icon">
          <span class="Icon Icon--download"></span>
                      </span>
                    </div>
                    <div class="Media-body">
                      <div class="Download-title">Formulario para inscripción (.pdf 354 KB)</div>
                      <div class="Download-description">Lorem ipsum dolor sit amet consectetur</div>
                    </div>
                  </div>
                </a>

                <h3>Audios</h3>
                <div class="Audio">
                  <div id="audioTitle1" class="Audio-title">Título del audio</div>
                  <audio aria-labelledby="audioTitle1" src="https://archive.org/download/testmp3testfile/mpthreetest.mp3" preload="none" controls>
                    Su navegador no permite reproducir este archivo de audio.
                  </audio>
                  <a href="#audioTitle1Transcription" class="Audio-link collapsed" data-toggle="collapse" aria-expanded="false" aria-controls="audioTitle1Transcription">
                    <span>Ver transcripción</span>
                    <span class="u-hideVisually"> de Título del audio</span>
                  </a>

                  <div class="collapse" id="audioTitle1Transcription">
                    <div class="u-p3">
                      <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Atque perspiciatis accusamus, officia possimus ea voluptatem adipisci a vel veritatis deserunt!</p>

                      <p>Lorem ipsum dolor sit, <strong>amet consectetur adipisicing</strong> elit. Reprehenderit animi nulla facere. Aliquam eius voluptate perspiciatis deserunt, corrupti placeat facere? Assumenda voluptate velit distinctio commodi dolor. Quae ea ab eligendi!</p>

                      <p>Lorem ipsum dolor sit amet <em>consectetur adipisicing elit</em>. Incidunt itaque atque optio unde delectus perferendis porro, animi quis, dolorem aspernatur saepe natus sint nostrum labore. Quibusdam vero saepe pariatur dolorum.</p>
                    </div>
                  </div>
                </div>

                <div class="Audio">
                  <div id="audioTitle2" class="Audio-title">Título del audio 2</div>
                  <audio aria-labelledby="audioTitle2" src="https://archive.org/download/testmp3testfile/mpthreetest.mp3" preload="none" controls>
                    Su navegador no permite reproducir este archivo de audio.
                  </audio>
                  <a href="#audioTitle2Transcription" class="Audio-link collapsed" data-toggle="collapse" aria-expanded="false" aria-controls="audioTitle2Transcription">
                    <span>Ver transcripción</span>
                    <span class="u-hideVisually"> de Título del audio</span>
                  </a>

                  <div class="collapse" id="audioTitle2Transcription">
                    <div class="u-p3">
                      <p>Transcripción de Audio 2.</p>

                      <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Atque perspiciatis accusamus, officia possimus ea voluptatem adipisci a vel veritatis deserunt!</p>

                      <p>Lorem ipsum dolor sit, <strong>amet consectetur adipisicing</strong> elit. Reprehenderit animi nulla facere. Aliquam eius voluptate perspiciatis deserunt, corrupti placeat facere? Assumenda voluptate velit distinctio commodi dolor. Quae ea ab eligendi!</p>

                      <p>Lorem ipsum dolor sit amet <em>consectetur adipisicing elit</em>. Incidunt itaque atque optio unde delectus perferendis porro, animi quis, dolorem aspernatur saepe natus sint nostrum labore. Quibusdam vero saepe pariatur dolorum.</p>
                    </div>
                  </div>
                </div>

                <h3>Video</h3>
                <div class="Video">
                  <div class="FlexEmbed FlexEmbed--16by9">
                    <iframe class="FlexEmbed-item" src="https://www.youtube.com/embed/JYKje4jO-iY?rel=0" title="Video"></iframe>
                  </div>
                </div>

                <h3>Galería de imágenes</h3>
                <div class="Carousel" tabindex="0">
                  <div>
                    <img src="../recursos/img/720x350-yellow.png" alt="Nombre imagen 1">
                    <p class="Carousel-caption">
                      <span>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</span>
                      <a href="#"><span class="Icon Icon--download u-mr1"></span><span>Descargar imagen<span class="u-hideVisually">: Nombre imagen 1</span></span></a>
                    </p>
                  </div>
                  <div>
                    <img src="../recursos/img/720x350-red.png" alt="Nombre imagen 2">
                    <p class="Carousel-caption">
                      <span>Perferendis, doloribus nemo quae quis earum dignissimos rem! Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas minima ipsam veniam nemo, odio similique, maiores unde aut architecto cum at saepe voluptatum quidem quo voluptatibus dicta sapiente sit.</span>
                      <a href="#"><span class="Icon Icon--download u-mr1"></span><span>Descargar imagen<span class="u-hideVisually">: Nombre imagen 2</span></span></a>
                    </p>
                  </div>
                  <div>
                    <img src="../recursos/img/720x350-blue.png" alt="Nombre imagen 3">
                    <p class="Carousel-caption">
                      <span>Animi, necessitatibus. Quas dolor vel quidem magni iusto.</span>
                      <a href="#"><span class="Icon Icon--download u-mr1"></span><span>Descargar imagen<span class="u-hideVisually">: Nombre imagen 3</span></span></a>
                    </p>
                  </div>
                  <div>
                    <img src="../recursos/img/720x350-green.png" alt="Nombre imagen 4">
                    <p class="Carousel-caption">
                      <span>Iure, sint possimus voluptatum hic temporibus ullam, natus.</span>
                      <a href="#"><span class="Icon Icon--download u-mr1"></span><span>Descargar imagen<span class="u-hideVisually">: Nombre imagen 4</span></span></a>
                    </p>
                  </div>
                </div>

                <a class="Carousel-download Download" href="#" title="Descargar todas las imágenes (.zip 4 MB)">
                  <div class="Media u-textSmall">
                    <div class="Media-image">
                      <span class="Download-icon">
                        <span class="Icon Icon--download"></span>
                      </span>
                    </div>
                    <div class="Media-body">
                      <div class="Download-title">Descargar todas las imágenes (.zip 4 MB)</div>
                      <div class="Download-description">14 imágenes, 4 MB</div>
                    </div>
                  </div>
                </a>

                <h3>Enlaces relacionados</h3>

                <ul>
                  <li><a href="#">Lorem ipsum dolor sit.</a></li>
                  <li><a href="#">Libero eos voluptate nemo.</a></li>
                  <li><a href="#">Omnis exercitationem, itaque quibusdam!</a></li>
                </ul>

                <h3>Enlaces de descarga</h3>

                <ul class="Page-downloads List">
                  <li>
                    <a class="Download" href="#" title="Descargar: Formulario para inscripción (.pdf 354 KB)">
                      <div class="Media">
                        <div class="Media-image">
                          <span class="Download-icon">
                            <span class="Icon Icon--download"></span>
                          </span>
                        </div>
                        <div class="Media-body">
                          <div class="Download-title">Formulario para inscripción (.pdf 354 KB)</div>
                          <div class="Download-description">Lorem ipsum dolor sit amet consectetur</div>
                        </div>
                      </div>
                    </a>
                  </li>
                  <li>
                    <a class="Download" href="#" title="Descargar: Formulario para inscripción (.pdf 354 KB)">
                      <div class="Media">
                        <div class="Media-image">
                          <span class="Download-icon">
                            <span class="Icon Icon--download"></span>
                          </span>
                        </div>
                        <div class="Media-body">
                          <div class="Download-title">Formulario para inscripción (.pdf 354 KB)</div>
                          <div class="Download-description">Lorem ipsum dolor sit amet consectetur</div>
                        </div>
                      </div>
                    </a>
                  </li>
                  <li>
                    <a class="Download" href="#" title="Descargar: Formulario para inscripción (.pdf 354 KB)">
                      <div class="Media">
                        <div class="Media-image">
                          <span class="Download-icon">
                            <span class="Icon Icon--download"></span>
                          </span>
                        </div>
                        <div class="Media-body">
                          <div class="Download-title">Formulario para inscripción (.pdf 354 KB)</div>
                          <div class="Download-description">Lorem ipsum dolor sit amet consectetur</div>
                        </div>
                      </div>
                    </a>
                  </li>

                  <li>
                    <a class="Download" href="#" title="Descargar todos los archivos adjuntos (.zip 12 MB)">
                      <div class="Media">
                        <div class="Media-body">
                          <span class="Download-title u-textNormal u-textSmall">Descargar todos los archivos adjuntos (.zip 12 MB)</span>
                        </div>
                      </div>
                    </a>
                  </li>
                </ul>

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

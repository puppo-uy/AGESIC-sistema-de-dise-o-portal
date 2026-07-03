<?php
  $title = 'Menú de pasos';
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
        <li><a href="sist-doc-navegacion.php">Navegación</a></li>
        <li>Menú de pasos</li>
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
              $activeItem = 'menu-pasos';
              include "inc/nav-componentes.php"; 
            ?>
            
          </div>

          <div class="Grid-item u-md-size3of4">
            <div class="Page-body">

              <div class="Page-document">

                <span class="Page-subtitle">Navegación</span>
                <h2 class="Page-title">Menú de pasos</h2>
                
                 <div class="Page-info">
                  <div class="Bar">
                    <div class="Bar-cell">
                      <div class="Page-date">Versión 1.0</div>
                    </div>
                  </div>
                </div>
                
                <p class="Page-description">El menú de pasos es un componente de navegación progresiva que organiza un flujo en etapas consecutivas. Permite al usuario comprender en qué paso se encuentra, cuáles ya completó y cuántos faltan para finalizar el proceso.</p>

                <h3 class="u-mt4">Estructura del componente</h3>
                <img src="img/ejemplos_documentacion/pasos_escritorio.png" alt="Estructura de Menú de pasos" class="u-mb3" style="max-width: 100%;">
                <h5 class="u-mt3">Elementos que lo componen</h5>
                <ul class="List-text">
                    <li>Texto (Nombre del paso)</li>
                    <li>Separador visual entre pasos</li>
                    <li>Indicador de estado del paso.</li>
                    <li>Enlace (En móvil)</li>
                </ul>

                <h3 class="u-mt4">Recomendaciones de uso</h3>
                <h4 class="u-mt3">Casos típicos de uso</h4>
                <ul class="List-text">
                    <li>Procesos largos o complejos divididos en múltiples pasos.</li>
                    <li>Formularios extensos.</li>
                    <li>Flujos donde es necesario validar información antes de avanzar.</li>
                </ul>

                <h4 class="u-mt3">Cuándo no usarlo</h4>
                <ul class="List-text">
                    <li>En procesos de un solo paso o flujos simples.</li>
                    <li>Como reemplazo de la navegación principal.</li>
                </ul>

                <h3 class="u-mt4">Buenas prácticas</h3>
                <ul class="List-text">
                    <li>Utilizar nombres de pasos breves, claros y descriptivos.</li>
                    <li>Evitar flujos excesivamente largos; en esos casos, agrupar pasos o dividir el proceso en secciones.</li>
                </ul>

                <h3 class="u-mt4">Variantes</h3>
                <h4 class="u-mt3 u-mb3">Estado de los pasos</h4>
                <div class="table-responsive">
                    <table class="Table">
                        <thead>
                            <tr>
                                <th>Referencia</th>
                                <th>Estado</th>
                                <th>Descripción</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><img src="img/ejemplos_documentacion/activo.png" alt="Paso Activo" style="max-width: 100px;"></td>
                                <td>Activo</td>
                                <td>Paso en el que se encuentra el usuario.</td>
                            </tr>
                            <tr>
                                <td><img src="img/ejemplos_documentacion/completado.png" alt="Paso Completado" style="max-width: 100px;"></td>
                                <td>Completado</td>
                                <td>Paso ya finalizado. Se permite la navegación entre pasos ya completados.</td>
                            </tr>
                            <tr>
                                <td><img src="img/ejemplos_documentacion/pendiente.png" alt="Paso Pendiente" style="max-width: 100px;"></td>
                                <td>Pendiente</td>
                                <td>Paso aún no alcanzado dentro del flujo.</td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <h3 class="u-mt4">Comportamiento responsive</h3>
                <h4 class="u-mt3">Escritorio</h4>
                <img src="img/ejemplos_documentacion/pasos_escritorio.png" alt="Menú de pasos en escritorio" class="u-mb2 u-mt2" style="max-width: 100%;">
                <ul class="List-text">
                    <li>Se visualizan todos los pasos del flujo.</li>
                    <li>El indicador de paso muestra el número correspondiente.</li>
                    <li>Al completarse un paso, el número se reemplaza por un ícono de confirmación.</li>
                    <li>Solo el paso activo muestra su nombre visible.</li>
                </ul>

                <h4 class="u-mt3">Móvil</h4>
                <img src="img/ejemplos_documentacion/pasos_movil.png" alt="Menú de pasos en móvil" class="u-mb2 u-mt2" style="max-width: 100%;">
                <ul class="List-text">
                    <li>El menú de pasos se simplifica para ocupar menos espacio.</li>
                    <li>Se muestra un título indicador con el paso actual y la cantidad total de pasos.</li>
                    <li>Existe un enlace de “mostrar detalle” que permite visualizar el flujo completo en un modal.</li>
                </ul>

                <h3 class="u-mt4">Accesibilidad</h3>
                <h5 class="u-mt3">Recomendaciones para no perder la accesibilidad</h5>
                <ul class="List-text">
                    <li>Mantener una lectura clara y secuencial del flujo.</li>
                    <li>Proveer textos comprensibles para cada paso.</li>
                    <li>Permitir la navegación por teclado entre los pasos ya completados.</li>
                </ul>

                <h3 class="u-mt4">Componentes relacionados</h3>
                <ul class="List-text">
                    <li><a href="sist-doc-paginador.php">Paginador</a></li>
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

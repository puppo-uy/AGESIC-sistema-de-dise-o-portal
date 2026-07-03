<?php
  $title = 'Navegación';
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
        <li>Navegación</li>
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
              $activeItem = 'navegacion';
              include "inc/nav-componentes.php"; 
            ?>
            
          </div>

          <div class="Grid-item u-md-size3of4">
            <div class="Page-body">

              <div class="Page-document">

                <span class="Page-subtitle">Componentes</span>
                <h2 class="Page-title">Navegación</h2>
                
                 <div class="Page-info">
                  <div class="Bar">
                    <div class="Bar-cell">
                      <div class="Page-date">Versión 1.0</div>
                    </div>
                  </div>
                </div>
                
                <p class="Page-description">Los componentes de navegación guían al usuario dentro de la aplicación, permitiéndole comprender su ubicación dentro de la interfaz y moverse entre secciones de forma clara y predecible.</p>

                <h3 class="u-mt4">Componentes</h3>
                <ul class="List-text u-mt3">
                    <li>
                        <a href="sist-doc-cabezales.php"><strong>Cabezales</strong></a> — Componente ubicado en la parte superior de la interfaz. Contiene la identidad del sitio o aplicación y el acceso a acciones o secciones clave.
                    </li>
                    <li>
                        <a href="sist-doc-pie-pagina.php"><strong>Pie de página</strong></a> — Componente de cierre de la interfaz. Incluye información institucional, enlaces secundarios y datos de contacto.
                    </li>
                    <li>
                        <a href="sist-doc-menu-navegacion.php"><strong>Menú de navegación</strong></a> — Componente que organiza y da acceso a las secciones principales del sitio o aplicación.
                    </li>
                    <li>
                        <a href="sist-doc-breadcrumb.php"><strong>Breadcrumb</strong></a> — Componente de navegación secundaria que indica al usuario su ubicación actual dentro de la estructura del sitio.
                    </li>
                    <li>
                        <a href="sist-doc-paginador.php"><strong>Paginador</strong></a> — Componente que permite al usuario recorrer contenido dividido en múltiples páginas.
                    </li>
                    <li>
                        <a href="sist-doc-menu-pasos.php"><strong>Menú de pasos</strong></a> — Componente de navegación progresiva que organiza un flujo en etapas consecutivas.
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

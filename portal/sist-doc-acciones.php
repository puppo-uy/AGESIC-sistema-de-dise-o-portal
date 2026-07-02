<?php
  $title = 'Acciones';
?>
<?php include "inc/head.php"; ?>

  <!-- Cabezal -->
  <?php include "inc/header.php"; ?>

  <!-- Breadcrumb -->
  <div class="Breadcrumb">
    <div class="Container">
      <ul>
        <li><a href="sist-que-es.php">Inicio</a></li>
        <li>Componentes</li>
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
            <?php 
              $activeItem = 'acciones';
              include "inc/nav-componentes.php"; 
            ?>
            
          </div>

          <div class="Grid-item u-md-size3of4">
            <div class="Page-body">

              <div class="Page-document">

                <span class="Page-subtitle">Componentes</span>
                <h2 class="Page-title">Acciones</h2>
                
                 <div class="Page-info">
                  <div class="Bar">
                    <div class="Bar-cell">
                      <div class="Page-date">Versión 1.0</div>
                    </div>
                  </div>
                </div>
                
                <p class="Page-description">Los componentes de acción son aquellos con los que el usuario interactúa para ejecutar algo dentro de la interfaz. Permiten iniciar procesos, confirmar decisiones o acceder a contenidos de forma directa.</p>

                <h3 class="u-mt4">Componentes</h3>
                <ul class="List-text u-mt3">
                    <li>
                        <a href="sist-doc-botones.php"><strong>Botones</strong></a> — Permiten al usuario ejecutar acciones dentro de una interfaz. Según su jerarquía visual y funcional, se dividen en primario, secundario y botón enlace.
                    </li>
                    <li>
                        <a href="sist-doc-enlaces.php"><strong>Enlaces</strong></a> — Permiten al usuario acceder a información, secciones o acciones de baja jerarquía dentro de una interfaz, sin competir visualmente con los botones.
                    </li>
                    <li>
                        <a href="sist-doc-grupo-botones.php"><strong>Grupo de botones</strong></a> — Agrupación de botones relacionados que permiten al usuario elegir entre un conjunto de opciones o ejecutar acciones vinculadas.
                    </li>
                    <li>
                        <a href="sist-doc-boton-desplegable.php"><strong>Botón desplegable</strong></a> — Botón que al ser accionado despliega un menú con opciones adicionales, agrupando acciones secundarias bajo una sola acción principal.
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


<?php
  $title = 'Pestañas';
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
        <li><a href="sist-doc-navegacion.php">Navegación</a></li>
        <li>Pestañas</li>
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
              $activeItem = 'pestanas';
              include "inc/nav-componentes.php"; 
            ?>
            
          </div>

          <div class="Grid-item u-md-size3of4">
            <div class="Page-body">

              <div class="Page-document">

                <span class="Page-subtitle">Componentes</span>
                <h2 class="Page-title">Pestañas</h2>
                
                 <div class="Page-info">
                  <div class="Bar">
                    <div class="Bar-cell">
                      <div class="Page-date">Versión 1.0</div>
                    </div>
                  </div>
                </div>
                <h3 class="u-textRed">BACKLOG</h3>
                <p class="Page-description">Componente para agrupar contenido relacionado mediante un sistema de tabs.</p>
                
                <!-- Contenido detallado del componente va aquí -->
                 <p>Las pestañas permiten organizar y navegar entre diferentes secciones de contenido dentro de una misma pantalla, optimizando el espacio y facilitando el acceso rápido a la información.</p>
                 <p>Se utilizan para separar contenidos, que pueden pertenecer a distintas categorías, pero que tiene sentido agruparlas en un único contexto, permitiendo al usuario cambiar entre ellas de forma ágil y visualmente clara.</p>
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

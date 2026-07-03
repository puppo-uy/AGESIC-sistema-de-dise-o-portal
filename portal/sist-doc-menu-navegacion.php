<?php
  $title = 'Menú de navegación';
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
        <li>Menú de navegación</li>
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
              $activeItem = 'menu-navegacion';
              include "inc/nav-componentes.php"; 
            ?>
            
          </div>

          <div class="Grid-item u-md-size3of4">
            <div class="Page-body">

              <div class="Page-document">

                <span class="Page-subtitle">Navegación</span>
                <h2 class="Page-title">Menú de navegación</h2>
                
                 <div class="Page-info">
                  <div class="Bar">
                    <div class="Bar-cell">
                      <div class="Page-date">Versión 1.0</div>
                    </div>
                  </div>
                </div>
                
                <p class="Page-description">La barra lateral es el primer nivel de navegación de la aplicación y facilita el acceso rápido a las secciones principales. Cuando una sección tiene subsecciones, se despliega un subnivel con las opciones relacionadas.</p>

                <h3 class="u-mt4">Estructura del componente</h3>
                <h4 class="u-mt3">Barra lateral</h4>
                <img src="img/ejemplos_documentacion/menu_escitorio.png" alt="Barra lateral" class="u-mb3" style="max-width: 100%;">
                
                <h4 class="u-mt3">Submenú</h4>
                <img src="img/ejemplos_documentacion/menu_escitorio.png" alt="Submenú" class="u-mb3" style="max-width: 100%;">

                <h3 class="u-mt4">Comportamiento</h3>
                <h4 class="u-mt3">Escritorio</h4>
                <img src="img/ejemplos_documentacion/menu_escitorio.png" alt="Comportamiento en escritorio" class="u-mb2 u-mt2" style="max-width: 100%;">
                <ul class="List-text">
                    <li>La barra de navegación principal está siempre visible en pantalla (posición fija a la izquierda).</li>
                    <li>Si una sección tiene subnivel, ese subnivel aparece como una solapa colapsable junto a la barra lateral.</li>
                    <li>La solapa de subnivel está cerrada por defecto y se abre cuando el usuario activa la sección correspondiente.</li>
                    <li>Al seleccionar una subsección dentro de la solapa, la solapa se cierra automáticamente, pero la barra lateral principal permanece visible.</li>
                </ul>

                <h4 class="u-mt4">Móvil</h4>
                <img src="img/ejemplos_documentacion/menu_movil.png" alt="Comportamiento en móvil" class="u-mb2 u-mt2" style="max-width: 100%;">
                <ul class="List-text">
                    <li>La navegación principal se sustituye por un menú hamburguesa en el cabezal.</li>
                    <li>Al tocar el menú hamburguesa aparece un desplegable en el lateral izquierdo. Dentro del desplegable se muestran los niveles principales con colapsables, si se requiere, para mostrar los subniveles.</li>
                    <li>Al elegir una sección o subsección en móvil, el menú hamburguesa se cierra automáticamente y el foco se devuelve al contenido principal.</li>
                </ul>

                <h3 class="u-mt4">Componentes relacionados</h3>
                <ul class="List-text">
                    <li><a href="sist-doc-cabezales.php">Cabezales</a></li>
                    <li><a href="sist-doc-breadcrumb.php">Breadcrumb</a></li>
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

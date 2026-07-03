<?php
  $title = 'Grupo de botones';
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
        <li><a href="sist-doc-acciones.php">Acciones</a></li>
        <li>Grupo de botones</li>
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
              $activeItem = 'grupo-botones';
              include "inc/nav-componentes.php"; 
            ?>
            
          </div>

          <div class="Grid-item u-md-size3of4">
            <div class="Page-body">

              <div class="Page-document">

                <span class="Page-subtitle">Acciones</span>
                <h2 class="Page-title">Grupo de botones</h2>
                
                 <div class="Page-info">
                  <div class="Bar">
                    <div class="Bar-cell">
                      <div class="Page-date">Versión 1.0</div>
                    </div>
                  </div>
                </div>
                
                <p class="Page-description">El grupo de botones permite organizar múltiples acciones relacionadas en una misma ubicación, facilitando el acceso a opciones complementarias de manera agrupada.</p>

                <h3 class="u-mt4">Estructura del componente</h3>

                <h5 class="u-mt3">Elementos que lo componen:</h5>
                <ul class="List-text">
                    <li>Botones (Primario, Secundario, Terciario)</li>
                    <li>Separación entre botones</li>
                </ul>

                <h3 class="u-mt4">Recomendaciones de uso</h3>
                <h4 class="u-mt3">Casos típicos de uso</h4>
                <ul class="List-text">
                    <li>Formularios, diálogos o modales con más de una opción disponible (Ej: "Guardar", "Guardar y salir", "Cancelar").</li>
                    <li>Cuando se requiere presentar acciones complementarias que tienen relación entre sí.</li>
                </ul>

                <h4 class="u-mt3">Cuándo no usarlo</h4>
                <ul class="List-text">
                    <li>Para acciones independientes o ubicadas en diferentes contextos de la interfaz.</li>
                </ul>

                <h3 class="u-mt4">Buenas prácticas</h3>
                <ul class="List-text">
                    <li>El primer botón (ubicado a la izquierda o arriba) debe ser siempre el de mayor jerarquía.</li>
                    <li>En caso de tener más de una opción, usar un solo botón primario.</li>
                    <li>Mantener una separación constante entre los botones (M o S).</li>
                </ul>

                <h3 class="u-mt4">Variantes</h3>
                <h4 class="u-mt3 u-mb3">Alineación</h4>
                
                <h5 class="u-mb2">Horizontal</h5>

                <p class="u-mb4">Los botones se alinean en una única fila. Esta es la disposición estándar.</p>
                
                <h5 class="u-mb2">Vertical</h5>

                <p class="u-mb2">Los botones se apilan uno sobre el otro. Se utiliza en contextos donde el espacio horizontal es limitado, principalmente en resoluciones móviles.</p>

                <h3 class="u-mt4">Accesibilidad</h3>
                <h4>WCAG Nivel AAA</h4>
                <h5 class="u-mt3">Recomendaciones para mantener la accesibilidad en cambios de color</h5>
                <h6 class="u-mt3">Para el texto o ícono (Foreground color)</h6>
                <ul class="List-text">
                    <li>El contraste mínimo garantizado es 4.5:1, ideal 7:1 (AAA).</li>
                </ul>

                <h3 class="u-mt4">Componentes relacionados</h3>
                <ul class="List-text">
                    <li><a href="sist-doc-botones.php">Botones</a></li>
                    <li><a href="sist-doc-boton-desplegable.php">Botón desplegable</a></li>
                </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Footer -->
  <?php include "inc/footer.php"; ?>

<?php include "inc/foot.php"; ?>

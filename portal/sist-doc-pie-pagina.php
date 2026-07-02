<?php
  $title = 'Pie de página';
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
        <li>Pie de página</li>
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
              $activeItem = 'pie-pagina';
              include "inc/nav-componentes.php"; 
            ?>
            
          </div>

          <div class="Grid-item u-md-size3of4">
            <div class="Page-body">

              <div class="Page-document">

                <span class="Page-subtitle">Navegación</span>
                <h2 class="Page-title">Pie de página</h2>
                
                 <div class="Page-info">
                  <div class="Bar">
                    <div class="Bar-cell">
                      <div class="Page-date">Versión 1.0</div>
                    </div>
                  </div>
                </div>
                
                <p class="Page-description">El pie de página es el componente de cierre de la interfaz. Proporciona información institucional, enlaces de contacto y navegación secundaria, asegurando que el usuario tenga acceso a recursos clave en cualquier momento.</p>

                <h3 class="u-mt4">Recomendaciones de uso</h3>
                <ul class="List-text">
                    <li><strong>Información institucional</strong>: Incluir siempre el logo del organismo, dirección física y medios de contacto oficiales.</li>
                    <li><strong>Jerarquía</strong>: Organizá los enlaces en grupos lógicos (ej: "Trámites", "Institucional", "Contacto") para facilitar el escaneo visual.</li>
                    <li><strong>Consistencia</strong>: El pie de página debe ser idéntico en todas las páginas del sitio para mantener la coherencia y confianza del usuario.</li>
                </ul>
                
                <h3>Estructura del componente</h3>
                <p>Información sin definir</p>

                <h3>Recomendaciones de uso</h3>
                <h4>Casos típicos</h4>
                <p>Información sin definir</p>

                <h4>Cuando no usarlo</h4>
                <p>Información sin definir</p>

                <h3>Buenas prácticas</h3>
                <p>Información sin definir</p>

                <h3>Variantes</h3>
                <p>Información sin definir</p>

                <h3>Accesibilidad</h3>
                <p>Información sin definir</p>

                <h3>Recursos</h3>
                <p>Información sin definir</p>

                <h3>Componentes relacionados</h3>
                <p>Información sin definir</p>

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

<?php
  $title = 'Tablas';
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
        <li>Tablas</li>
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
              $activeItem = 'tablas';
              include "inc/nav-componentes.php"; 
            ?>
            
          </div>

          <div class="Grid-item u-md-size3of4">
            <div class="Page-body">

              <div class="Page-document">

                <span class="Page-subtitle">Componentes</span>
                <h2 class="Page-title">Tablas</h2>
                
                 <div class="Page-info">
                  <div class="Bar">
                    <div class="Bar-cell">
                      <div class="Page-date">Versión 1.0</div>
                    </div>
                  </div>
                </div>
                
                <p class="Page-description">Las tablas organizan información en filas y columnas, permitiendo al usuario comparar datos y encontrar información específica de manera eficiente.</p>

                <h3 class="u-mt4">Recomendaciones de uso</h3>
                <ul class="List-text">
                    <li><strong>Encabezados claros</strong>: Utilizá siempre la etiqueta <code>&lt;th&gt;</code> para los títulos de las columnas, asegurando que sean breves y descriptivos.</li>
                    <li><strong>Diseño responsivo</strong>: Para pantallas pequeñas, implementá el desplazamiento horizontal o transformá la tabla en tarjetas de datos.</li>
                    <li><strong>Simplicidad</strong>: Evitá saturar la tabla con demasiadas columnas. Si la información es muy densa, considerá el uso de filtros o paginación.</li>
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

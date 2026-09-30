<?php
  $title = 'Figma';
?>
<?php include "inc/head.php"; ?>

  <!-- Cabezal -->
  <?php include "inc/header.php"; ?>

  <!-- Breadcrumb -->
  <div class="Breadcrumb">
    <div class="Container">
      <ul>
        <li><a href="sist-que-es.php">Inicio</a></li>
        <li>Recursos</li>
        <li>Figma</li>
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
              $activeItem = 'figma';
              include "inc/nav-recursos.php"; 
            ?>
            
          </div>

          <div class="Grid-item u-md-size3of4">
            <div class="Page-body">

              <div class="Page-document">

                <span class="Page-subtitle">Recursos</span>
                <h2 class="Page-title">Figma</h2>
                
                <div class="Page-info">
                  <div class="Bar">
                    <div class="Bar-cell">
                      <div class="Page-date">Versión 1.0</div>
                    </div>
                  </div>
                </div>
                <!--
                <p class="Page-description">Figma es el estándar de la industria del diseño digital, que permite alinear de forma directa el diseño con su implementación real, facilita la colaboración, la exploración visual y el uso consistente de componentes por parte de perfiles no técnicos.</p>
                
                <h3>Librería del Sistema de Diseño en Figma</h3>
                <p>En el archivo de Figma del Sistema de Diseño del Estado Uruguayo encontrarás todos los estilos globales (colores institucionales, tipografías, espaciados, bordes, sombras) y la biblioteca de componentes interactivos listos para diseñar interfaces de servicios digitales consistentes y accesibles.</p>

                <p class="u-mt3">
                  <a href="https://www.figma.com/design/uvnRB5uOO0OjjXboaPkZEb/Sistema-de-dise%C3%B1o-del-Estado-Uruguayo---V1.0?node-id=0-1&p=f&t=Uo9sVB33xgq1m0cc-0" target="_blank" rel="noopener noreferrer" class="Button Button--primary">Acceder a los archivos en Figma</a>
                </p>
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

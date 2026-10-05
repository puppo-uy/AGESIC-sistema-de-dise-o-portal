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
              
                <p>Figma es una herramienta colaborativa para el diseño de interfaces digitales. Permite crear y organizar estilos, componentes y otros elementos que pueden reutilizarse en diferentes pantallas y productos digitales. Por sus características, es la herramienta seleccionada para alojar y organizar los recursos de diseño del Sistema de Diseño del Estado Uruguayo.</p>
                <p>La documentación del sitio complementa este recurso con información sobre el uso de los componentes, recomendaciones y criterios que deben considerarse al incorporarlos a un producto digital.</p>

                <h3>¿Para qué sirve este recurso?</h3>
                <p>El archivo de Figma funciona como una referencia para diseñar nuevos productos digitales y para evolucionar productos existentes. Permite utilizar una base común de colores, tipografías, espaciados, íconos, componentes y otros elementos.</p>
                <p>Trabajar con estos recursos facilita que diferentes equipos puedan tomar decisiones a partir de criterios compartidos y mantener una mayor consistencia entre productos. También permite concentrar el trabajo de diseño en las necesidades específicas de cada solución, evitando dedicar tiempo a resolver nuevamente elementos que ya fueron definidos.</p>
                <p>El recurso está dirigido principalmente a equipos y profesionales de diseño UX/UI, aunque también puede ser consultado por otros profesionales que necesiten conocer cómo están definidos los componentes, sus variantes y sus comportamientos.</p>

                <h3>Un recurso que evoluciona</h3>
                <p>El archivo de Figma se actualizará a medida que el Sistema de Diseño incorpore nuevos estilos, componentes o ajustes. Por eso, debe entenderse como un recurso en evolución y no como una biblioteca cerrada.</p>
                <p>La documentación disponible en el portal complementa este recurso con información sobre el uso de los componentes y los criterios que deben considerarse al incorporarlos a un producto digital.</p>
                
                <a href="https://www.figma.com/community/" class="u-outerLink u-h6">Acceder a Figma</a>
               
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

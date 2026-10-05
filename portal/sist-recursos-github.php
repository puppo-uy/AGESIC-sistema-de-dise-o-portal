<?php
  $title = 'Github';
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
        <li>Github</li>
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
              $activeItem = 'github';
              include "inc/nav-recursos.php"; 
            ?>
            
          </div>

          <div class="Grid-item u-md-size3of4">
            <div class="Page-body">

              <div class="Page-document">

                <span class="Page-subtitle">Recursos</span>
                <h2 class="Page-title">Github</h2>
                
                <div class="Page-info">
                  <div class="Bar">
                    <div class="Bar-cell">
                      <div class="Page-date">Versión 1.0</div>
                    </div>
                  </div>
                </div>
                
                <p class="Page-description">GitHub es una plataforma para alojar y gestionar repositorios de código. Permite registrar los cambios realizados en el código, mantener un historial de versiones y facilitar el trabajo colaborativo entre equipos. También permite organizar distintas versiones de un proyecto y controlar cómo se incorporan las modificaciones.</p>
                
               
                <p>El Sistema de Diseño del Estado Uruguayo pone a disposición un repositorio con el código necesario para implementar sus compone ntes en productos digitales. Mientras que Figma permite trabajar en el diseño, este repositorio proporciona los recursos necesarios para llevar esas definiciones a la etapa de desarrollo. De esta manera, diseño y código parten de una misma referencia.</p>
                
                <h3>¿Para qué sirve este recurso?</h3>
                
                <p>El repositorio permite a los equipos de desarrollo consultar y reutilizar los componentes disponibles en el Sistema de Diseño del Estado Uruguayo. De esta manera, se evita que en cada proyecto haya que desarrollar desde cero.</p>

                <p>Además del código, este recurso funciona como un espacio de referencia para conocer cómo están implementados los componentes, sus variantes y las actualizaciones que se realizan a medida que el Sistema de Diseño evoluciona. La reutilización de componentes facilita el desarrollo de productos digitales y ayuda a mantener una mayor consistencia entre lo que se define en diseño y lo que finalmente se implementa.</p>
                  
                <p>El repositorio está dirigido a equipos y profesionales de desarrollo, tanto de las organizaciones, como de proveedores que trabajen en la creación o evolución de productos digitales.</p>

                <h3>Un recurso que evoluciona</h3>  
                <p>El código se actualizará a medida que se incorporen nuevos componentes, variantes y mejoras. El portal del Sistema de Diseño proporcionará la documentación necesaria para comprender cuándo y cómo utilizar cada recurso.</p>
                
                <p>GitHub permite conservar un historial de los cambios realizados, organizar versiones y dar seguimiento a la evolución de los componentes. Esto facilita que los equipos puedan identificar qué se modificó, trabajar sobre versiones actualizadas y mantener una referencia común para la implementación.</p>

                <a href="https://github.com/AGESIC-UY/componentes-reutilizables-sistema-disenio" class="class="u-outerLink u-h6">Acceder a GitHub</a>

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

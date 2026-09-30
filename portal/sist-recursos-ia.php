<?php
  $title = 'Herramientas para desarrollo con IA';
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
        <li>Herramientas para desarrollo con IA</li>
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
              $activeItem = 'ia';
              include "inc/nav-recursos.php"; 
            ?>
            
          </div>

          <div class="Grid-item u-md-size3of4">
            <div class="Page-body">

              <div class="Page-document">

                <span class="Page-subtitle">Recursos</span>
                <h2 class="Page-title">Herramientas para desarrollo con IA</h2>
                
                <div class="Page-info">
                  <div class="Bar">
                    <div class="Bar-cell">
                      <div class="Page-date">Versión 1.0</div>
                    </div>
                  </div>
                </div>
                <!--
                <p class="Page-description">Guías, recomendaciones y recursos orientados al uso de Inteligencia Artificial como acelerador en el desarrollo e implementación de interfaces, asegurando la consistencia y el cumplimiento de los estándares del Sistema de Diseño.</p>
                
                <h3>Aceleración con IA en el Sistema de Diseño</h3>
                <p>Las herramientas de desarrollo asistidas por inteligencia artificial (asistentes de código, modelos de lenguaje y entornos integrados) permiten agilizar la construcción de prototipos, la generación de marcado HTML accesible y la integración de componentes del Estado.</p>

                <h3>Buenas prácticas recomendadas</h3>
                <ul class="List-text">
                  <li><strong>Contexto del Sistema de Diseño:</strong> Proveer a los asistentes y modelos de lenguaje la documentación de los tokens, componentes y pautas del sistema para generar código consistente con los estilos oficiales.</li>
                  <li><strong>Prioridad en Accesibilidad:</strong> Todo componente o estructura generada mediante IA debe verificarse manualmente contra las pautas WCAG 2.2 y los requisitos de accesibilidad digital de la normativa vigente.</li>
                  <li><strong>Validación y revisión humana:</strong> La IA actúa como soporte y acelerador; el equipo de desarrollo y diseño es responsable de revisar y validar la calidad del código y la experiencia de usuario final.</li>
                </ul>

                <h3>Recursos y plantillas de configuración</h3>
                <p>Próximamente se incorporarán archivos de reglas, perfiles de instrucciones (System Prompts) y configuraciones optimizadas para editores y herramientas asistidas por IA como Cursor, GitHub Copilot y otros entornos de desarrollo.</p>
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

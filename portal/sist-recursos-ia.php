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
                
                <p class="Page-description">Existen distintas herramientas de inteligencia artificial generativa que pueden utilizarse como apoyo para crear prototipos, interfaces y código a partir de instrucciones en lenguaje natural. El Sistema de Diseño del Estado Uruguayo pone a disposición orientaciones específicas para que las personas que utilicen estas herramientas puedan incorporar sus estilos, componentes y criterios desde el inicio de un desarrollo.</p>
                <p>La idea es que, al trabajar con inteligencia artificial, el Sistema de Diseño funcione como referencia para la generación de soluciones basadas en criterios de diseño, componentes y patrones previamente definidos y validados.</p>

                <h3>Aceleración con IA en el Sistema de Diseño</h3>
                <p>Las herramientas de desarrollo asistidas por inteligencia artificial (asistentes de código, modelos de lenguaje y entornos integrados) permiten agilizar la construcción de prototipos, la generación de marcado HTML accesible y la integración de componentes del Estado.</p>

                <h3>¿Para qué sirve este recurso?</h3>
                <p>Este recurso busca proporcionar a las herramientas de inteligencia artificial el contexto y las indicaciones necesarias para que, al generar una interfaz, un componente o código, puedan tomar como referencia el Sistema de Diseño.</p>
                <p>Por ejemplo, una persona puede solicitar a una herramienta de inteligencia artificial que genere un componente específico y proporcionar, junto con esa solicitud, las instrucciones disponibles en este espacio. De esta manera, la herramienta contará con información sobre los estilos y criterios de interacción y otras definiciones que debería considerar.</p>
                <p>Esto permite incorporar el Sistema de Diseño desde las primeras etapas de un desarrollo realizado con apoyo de inteligencia artificial y trabajar a partir de componentes y patrones previamente definidos, en lugar de dejar que cada herramienta proponga soluciones de interfaz.</p>


                <h3>La inteligencia artificial como apoyo</h3>

                <p>Estos recursos buscan facilitar el trabajo de las personas y equipos que utilizan inteligencia artificial para desarrollar productos digitales, pero no sustituyen la revisión profesional ni la validación de los resultados generados.</p>
                <p>Las interfaces y el código producidos mediante estas herramientas deben revisarse antes de su implementación para verificar que los componentes se utilicen correctamente, que la solución responda a las necesidades del producto y que cumpla con los criterios de experiencia de usuario y con la normativa vigente en materia de accesibilidad digital.</p>
                <p>Las herramientas de inteligencia artificial deben entenderse, por tanto, como un apoyo dentro del proceso de producto, y no como un reemplazo.</p>

                <h3>Instrucciones para utilizar el Sistema de Diseño con IA</h3>
                <p>Adjunto se encuentras las instrucciones preparadas para utilizar como contexto en
herramientas de inteligencia artificial al momento de solicitar la generación de una
solución digital.</p>
                <p>A medida que el Sistema de Diseño del Estado Uruguayo evolucione, estas instrucciones también podrán actualizarse para incorporar nuevos componentes y criterios.</p>

                  <h3>Descarga</h3>
                  <a href="../recursos/SDU-instrucciones-para-ia.md" download="SDU-instrucciones-para-ia.md">SDU-instrucciones-para-ia.md</a>
                  

               
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

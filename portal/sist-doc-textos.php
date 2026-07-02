<?php
  $title = 'Textos';
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
        <li>Textos</li>
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
              $activeItem = 'textos';
              include "inc/nav-componentes.php"; 
            ?>
            
          </div>

          <div class="Grid-item u-md-size3of4">
            <div class="Page-body">

              <div class="Page-document">

                <span class="Page-subtitle">Componentes</span>
                <h2 class="Page-title">Textos</h2>
                
                 <div class="Page-info">
                  <div class="Bar">
                    <div class="Bar-cell">
                      <div class="Page-date">Versión 1.0</div>
                    </div>
                  </div>
                </div>
                
                <p class="Page-description">Los componentes de texto definen cómo se presenta y estructura la información escrita dentro de la interfaz, asegurando claridad, consistencia y la correcta jerarquía de contenidos.</p>
                <p>Esta sección documenta los distintos tipos de texto utilizados en la interfaz desde una perspectiva de uso como componentes, complementando las definiciones de estilo establecidas en la sección de <a href="sist-estilos-globales.php">Estilos globales</a>.</p>

                <h3 class="u-mt4">Componentes</h3>
                <ul class="List-text u-mt3">
                    <li>
                        <a href="sist-doc-titulos.php"><strong>Títulos</strong></a> — Componentes de texto que organizan y jerarquizan el contenido dentro de la interfaz. Permiten estructurar la información, guiar la lectura y facilitar la comprensión del contenido en distintos niveles.
                    </li>
                    <li>
                        <a href="sist-doc-parrafos.php"><strong>Párrafos</strong></a> — Componentes de texto encargados de presentar el contenido principal y los textos de apoyo dentro de la interfaz. Se utilizan para desarrollar los contenidos introducidos por los títulos.
                    </li>
                    <li>
                        <a href="sist-doc-listados.php"><strong>Listados</strong></a> — Componentes de texto que permiten organizar información relacionada en forma de ítems, facilitando la lectura y el escaneo del contenido.
                    </li>
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

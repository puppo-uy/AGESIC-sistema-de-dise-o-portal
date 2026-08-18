<?php
  $title = 'Modales';
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
        <li>Panel desplegable</li>
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
              $activeItem = 'modales';
              include "inc/nav-componentes.php"; 
            ?>
            
          </div>

          <div class="Grid-item u-md-size3of4">
            <div class="Page-body">

              <div class="Page-document">

                <span class="Page-subtitle">Navegación</span>
                <h2 class="Page-title">Panel desplegable</h2>
                
                 <div class="Page-info">
                  <div class="Bar">
                    <div class="Bar-cell">
                      <div class="Page-date">Versión 1.0</div>
                    </div>
                  </div>
                </div>
                 <p class="Page-description">El panel desplegable es un contenedor contextual que se muestra al activar un botón o control asociado. Permite presentar información, opciones o acciones relacionadas con el elemento que lo activa, sin abandonar la vista actual.</p>
                    <p>Su contenido puede variar según el contexto. Puede utilizarse para presentar un conjunto de acciones, un listado de elementos o información más completa asociada a un usuario. El panel se posiciona en relación con el elemento que lo activa y permanece vinculado visual y funcionalmente a este.</p>
<h3 class="u-mt4">Recomendaciones de uso</h3>
<h4 class="u-mt3">Casos típicos de uso</h4>
                <ul class="List-text">
                    <li>Presentar un menú de acciones asociado a un elemento, por ejemplo, mediante un botón de más opciones.</li>
                   
                    <li>Mostrar un listado breve de notificaciones o elementos recientes desde el cabezal.</li>
                    <li>Presentar información y acciones relacionadas con el usuario autenticado.</li>
                    <li>Mostrar opciones contextuales que no necesitan ocupar espacio permanente en la interfaz.</li>
                </ul>
                <h4 class="u-mt3">Cuándo no usarlo</h4>
                <ul class="List-text">
                    <li>Para contenidos extensos que requieran una interacción prolongada o una lectura independiente.</li>
                    <li>Para información que debe permanecer visible de forma permanente en la interfaz.</li>
                    <li>Para reemplazar un modal cuando la interacción requiera interrumpir el flujo actual o solicitar una decisión explícita.</li>
                    <li>Para presentar acciones o información que no tengan una relación clara con el elemento que activa el panel.</li>
                </ul>
                <h4 class="u-mt3">Buenas prácticas</h4>
                <ul class="List-text">
                    <li>Mantener una relación clara entre el botón que activa el panel y el contenido que este presenta.</li>
                    <li>Utilizar el panel para contenido contextual y acotado.</li>
                    <li>Organizar las acciones y opciones de forma clara y fácil de recorrer.</li>
                    <li>Utilizar etiquetas descriptivas para las acciones y evitar depender únicamente de los íconos.</li>
                    <li>Mantener una posición y un tamaño que permitan identificar fácilmente el origen del panel.</li>
                    <li>Cerrar el panel cuando el usuario selecciona una opción, cuando la interacción finaliza o cuando corresponde según el comportamiento del componente.</li>
                    <li>Evitar que el panel oculte información o controles relevantes de la interfaz.</li>
                </ul>
                <h4 class="u-mt3">Modos</h4>
                <h5 class="u-mt3">Menú de acciones</h5>
                <p>Se utiliza para presentar un conjunto de acciones relacionadas con un elemento o contexto específico. Es adecuado para acciones secundarias o menos frecuentes que no necesitan estar visibles de forma permanente.</p>
                <h5 class="u-mt3">Notificaciones</h5>
                <p>Se utiliza para mostrar un listado breve de notificaciones desde el cabezal. Puede incluir las notificaciones más recientes y un acceso al panel o sección donde el usuario puede consultar el listado completo.</p>
                <h5 class="u-mt3">Usuario</h5>
                <p>Se utiliza para presentar información y acciones relacionadas con el usuario autenticado. Puede incluir datos básicos del perfil, información contextual y acciones como administrar el usuario, acceder al perfil o cerrar sesión.</p>
                <h4 class="u-mt3">Comportamiento</h4>
                <p>El panel se muestra como respuesta a la activación del control asociado y debe permanecer abierto mientras el usuario interactúa con su contenido. El control que lo activa debe permitir identificar claramente su función y, cuando corresponda, su estado de apertura.Cuando el panel contiene acciones, la selección de una opción debe producir el resultado esperado y cerrar el panel cuando la interacción haya finalizado. En los casos en que el contenido permita continuar navegando dentro del panel, este debe permanecer abierto hasta que el usuario complete la interacción o lo cierre.</p>
                <h4 class="u-mt3">Accesibilidad</h4>
                <p>El panel se muestra como respuesta a la activación del control asociado y debe permanecer abierto mientras el usuario interactúa con su contenido. El control que lo activa debe permitir identificar claramente su función y, cuando corresponda, su estado de apertura.</p>
                <p>Cuando el panel contiene acciones, la selección de una opción debe producir el resultado esperado y cerrar el panel cuando la interacción haya finalizado. En los casos en que el contenido permita continuar navegando dentro del panel, este debe permanecer abierto hasta que el usuario complete la interacción o lo cierre.</p>
                <h4 class="u-mt3">Recomendaciones para no perder la accesibilidad</h4>
                <ul class="List-text">
                    <li>Asegurar que el control que activa el panel tenga un nombre accesible y permita identificar su función.</li>
                    <li>Permitir abrir, recorrer e interactuar con el panel mediante teclado.</li>
                    <li>Mantener un orden lógico de navegación entre el control disparador y el contenido del panel.</li>
                    <li>Asegurar un contraste suficiente entre el contenido del panel, sus íconos, controles y el fondo.</li>
                    <li>No utilizar íconos como único medio para comunicar acciones o estados.</li>
                    <li>Asegurar que el panel no quede oculto, recortado o fuera del área visible cuando se abre.</li>
                </ul>



               
                <h3 class="u-mt4">Componentes relacionados</h3>
                <ul class="List-text">
                    <li><a href="sist-doc-menu-lateral.php">Menú lateral</a></li>
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

<!-- Modal — solo en esta página -->
<script src="scripts/plugins/modal-doc.js"></script>

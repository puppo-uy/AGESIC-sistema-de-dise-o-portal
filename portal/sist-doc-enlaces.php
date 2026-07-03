<?php
  $title = 'Enlaces';
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
        <li>Enlaces</li>
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
              $activeItem = 'enlaces';
              include "inc/nav-componentes.php"; 
            ?>
            
          </div>

          <div class="Grid-item u-md-size3of4">
            <div class="Page-body">

              <div class="Page-document">

                <span class="Page-subtitle">Acciones</span>
                <h2 class="Page-title">Enlaces</h2>
                
                 <div class="Page-info">
                  <div class="Bar">
                    <div class="Bar-cell">
                      <div class="Page-date">Versión 1.0</div>
                    </div>
                  </div>
                </div>
                
                <p class="Page-description">Los enlaces permiten al usuario acceder a información, secciones o acciones de baja jerarquía dentro de una interfaz. Se utilizan para ofrecer caminos complementarios o alternativos sin competir visualmente con los botones, manteniendo un peso visual mínimo.</p>

                <h3 class="u-mt4">Estructura del componente</h3>
                <img src="img/ejemplos_documentacion/enlace.png" alt="Estructura de Enlaces" class="u-mb3" style="max-width: 100%;">
                <h5 class="u-mt3">Elementos que lo componen:</h5>
                <ul class="List-text">
                    <li>Texto subrayado</li>
                    <li>Ícono (Opcional)</li>
                </ul>

                <h3 class="u-mt4">Recomendaciones de uso</h3>
                <h4 class="u-mt3">Casos típicos de uso</h4>
                <ul class="List-text">
                    <li>Para acciones de bajo peso dentro de un flujo.</li>
                    <li>Cuando se quiere ofrecer un camino alternativo, pero sin distraer de la acción principal.</li>
                    <li>Como enlace a información adicional, configuraciones o secciones no críticas.</li>
                </ul>

                <h4 class="u-mt3">Cuándo no usarlo</h4>
                <ul class="List-text">
                    <li>Como acción principal de una pantalla.</li>
                    <li>Para tareas críticas (guardar, confirmar, enviar), ya que puede pasar desapercibido.</li>
                    <li>En contextos donde varios enlaces seguidos puedan confundir al usuario.</li>
                </ul>

                <h3 class="u-mt4">Buenas prácticas</h3>
                <ul class="List-text">
                    <li>Mantener el texto breve, claro y siempre relacionado a una acción o destino.</li>
                    <li>Colocar el ícono solo cuando refuerce la acción (Ej: flecha para "Ir a", descarga para "Descargar").</li>
                </ul>

                <h3 class="u-mt4">Variantes</h3>
                <h4 class="u-mt3 u-mb3">Formato</h4>
                
                

                
               
<h5 class="u-mb2">Solo texto</h5>
 <img src="img/ejemplos_documentacion/enlace_default.png" alt="Enlace" class="u-mb3" style="max-width: 100%;">
<p class="u-mb4">Se presenta únicamente como texto interactivo y se utiliza para la mayoría de los casos de navegación o acceso a información dentro del sistema. Es el formato recomendado cuando el contexto ya es claro y no se requiere reforzar visualmente la acción o el destino. </p>

<h5 class="u-mb2">Texto + icono a la izquierda</h5>
 <img src="img/ejemplos_documentacion/enlace_icn.png" alt="Enlace" class="u-mb3" style="max-width: 100%;">
<p class="u-mb4">Este formato combina el texto del enlace con un ícono alineado horizontalmente. El ícono puede ubicarse a la izquierda o a la derecha del texto, siguiendo el mismo criterio de uso que en los botones. </p>
<p class="u-mb4">Se utiliza cuando el ícono aporta información adicional sobre la acción o el destino del enlace (Ej: navegación, descarga), sin modificar la jerarquía del componente. </p>

<h5 class="u-mb2">Texto + icono a la derecha</h5>
<img src="img/ejemplos_documentacion/enlace_icnDer.png" alt="Enlace" class="u-mb3" style="max-width: 100%;"> 
<p class="u-mb4">Se utiliza solo cuando el ícono refuerza la dirección o consecuencia de la acción (Ej:“Siguiente” o “Ir a”).

<h5 class="u-mb2">Enlace externo</h5>
 <img src="img/ejemplos_documentacion/enlace_externo.png" alt="Enlace" class="u-mb3" style="max-width: 100%;"> 
<p class="u-mb4">Formato específico para enlaces que dirigen al usuario fuera del dominio o sistema actual. Su función es comunicar de forma explícita que la acción implica abandonar el entorno en el que se encuentra. Debe utilizarse exclusivamente para enlaces externos y no para navegación interna. </p>

             
                <h4 class="u-mt4 u-mb3">Tamaño</h4>
                <div class="u-mt3 u-mb4">
                    <img src="img/ejemplos_documentacion/enlace_l.png" alt="Enlace L" class="u-mb3 u-mr3" style="max-height: 48px;">
                    <img src="img/ejemplos_documentacion/enlace_m.png" alt="Enlace M" class="u-mb3 u-mr3" style="max-height: 48px;">
                    <img src="img/ejemplos_documentacion/enlace_s.png" alt="Enlace S" class="u-mb3" style="max-height: 48px;">
                </div>
                <ul class="List-text">
                    <li>Grande</li>
                    <li>Medio</li>
                    <li>Chico</li>
                </ul>

                <h3 class="u-mt4">Accesibilidad</h3>
                <h4>WCAG Nivel AAA</h4>
                <h5 class="u-mt3">Recomendaciones para no perder la accesibilidad</h5>
                <ul class="List-text">
                    <li>No utilizar enlaces de solo ícono sin proporcionar un texto alternativo descriptivo.</li>
                    <li>Evitar el uso de textos genéricos o usar referencias visuales en la redacción. (Ej: Evitar textos como "ver más", "clic aquí").</li>
                    <li>Evitar textos completamente en mayúsculas.</li>
                </ul>

                <h3 class="u-mt4">Componentes relacionados</h3>
                <ul class="List-text">
                    <li><a href="sist-doc-botones.php">Botones</a></li>
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

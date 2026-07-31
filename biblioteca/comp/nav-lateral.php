<?php
if (!isset($section)) $section = '';
if (!isset($subsection)) $subsection = '';
?>

<script>
  window.SECCION_ACTUAL = "<?php echo htmlspecialchars($section, ENT_QUOTES, 'UTF-8'); ?>";
  window.SUBSECCION_ACTUAL = "<?php echo htmlspecialchars($subsection, ENT_QUOTES, 'UTF-8'); ?>";
</script>


<nav id="menu" class="navegacion navegacion-lateral" aria-label="Navegación principal">

    <div class="barra-lateral" aria-label="Menú principal">

        <ul class="barra-lateral-lista" role="menubar">

            <!-- item con link directo -->

            <li class="barra-lateral-item" role="none">
                <a href="index.php" class="barra-lateral-enlace" role="menuitem" tabindex="0" data-seccion="inicio">
                    <svg class="icono">
												<use href="#icono-home--lineal"></use>
										</svg>
                    <span class="barra-lateral-texto">Inicio</span>
                </a>
            </li>

					
            <!-- item con con links dentro -->
            <li class="barra-lateral-item tiene-submenu" role="none">

                <button class="barra-lateral-enlace barra-lateral-enlace--boton" aria-haspopup="true" aria-expanded="false" data-submenu-id="submenu-1" data-seccion="estructura">
                    <!--<span class="barra-lateral-icono">-->
                        <svg class="icono">
                            <use href="#icono-tabla--lineal"></use>
                        </svg>
                    <!--</span>-->
                    <span class="barra-lateral-texto">Estructura</span>
                </button>

                <ul id="submenu-1" class="barra-lateral-submenu" role="menu" aria-hidden="true">
                    <li role="none"><a href="grillas.php" role="menuitem" tabindex="-1" data-subseccion="grillas">Grillas</a></li>
                    <li role="none"><a href="modulo-flex.php" role="menuitem" tabindex="-1" data-subseccion="flex">Módulo Flex</a></li>
                </ul>

            </li>


            <!-- item con con links dentro -->
            <li class="barra-lateral-item tiene-submenu" role="none">

							<button class="barra-lateral-enlace barra-lateral-enlace--boton" aria-haspopup="true" aria-expanded="false" data-submenu-id="submenu-2" data-seccion="componentes">
									<svg class="icono">
											<use href="#icono-tabla--lineal"></use>
									</svg>
									<span class="barra-lateral-texto">Componentes</span>
							</button>

							<ul id="submenu-2" class="barra-lateral-submenu" role="menu" aria-hidden="true">
								<li role="none"><a href="comp-titulos.php" role="menuitem" tabindex="-1" data-subseccion="opcion-01">Títulos y textos</a></li>
								<li role="none"><a href="comp-botones.php" role="menuitem" tabindex="-1" data-subseccion="opcion-02">Botones</a></li>
								<li role="none"><a href="comp-iconos.php" role="menuitem" tabindex="-1" data-subseccion="opcion-03">Íconos</a></li>
								<li role="none"><a href="comp-alertas.php" role="menuitem" tabindex="-1" data-subseccion="opcion-04">Alertas y tags</a></li>
								<li role="none"><a href="comp-modal.php" role="menuitem" tabindex="-1" data-subseccion="opcion-05">Modal</a></li>
								<li role="none"><a href="comp-menubutton.php" role="menuitem" tabindex="-1" data-subseccion="opcion-06">Menú desplegable</a></li>
	            </ul>

            </li>

            <!-- formulario tipo -->
            <li class="barra-lateral-item tiene-submenu" role="none">
							<button class="barra-lateral-enlace barra-lateral-enlace--boton" aria-haspopup="true" aria-expanded="false" data-submenu-id="submenu-formulario-tipo" data-seccion="formulario-tipo">
								<svg class="icono">
										<use href="#icono-tabla--lineal"></use>
								</svg>
								<span class="barra-lateral-texto">Formulario Tipo</span>
							</button>
							<ul id="submenu-formulario-tipo" class="barra-lateral-submenu" role="menu" aria-hidden="true">
								<li role="none"><a href="comp-fieldset.php" role="menuitem" tabindex="-1" data-subseccion="fieldset">Fieldset</a></li>
								<li role="none"><a href="comp-campos.php" role="menuitem" tabindex="-1" data-subseccion="campos">Campos</a></li>
	            </ul>
            </li>

            <!-- item con link directo -->
            <li class="barra-lateral-item" role="none">
                <a href="configuracion.php" class="barra-lateral-enlace" role="menuitem" tabindex="0" data-seccion="configuracion">
										<svg class="icono">
												<use href="#icono-home--lineal"></use>
										</svg>
                    <span class="barra-lateral-texto">Configuración</span>
                </a>
            </li>
					
						<!-- item con link directo - prueba 2 líneas -->
						<li class="barra-lateral-item" role="none">
							<a href="configuracion.php" class="barra-lateral-enlace" role="menuitem" tabindex="0" data-seccion="nombre-dos-lineas">
								<svg class="icono icono--l">
										<use href="#icono-home--lineal"></use>
								</svg>
								<span class="barra-lateral-texto">Nombre en 2 líneas</span>
							</a>
						</li>
        </ul>

    </div>

</nav>
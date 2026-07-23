<nav class="Page-nav Page-nav--mf Page-nav--only">
	<div class="Page-navWrap">
		<a class="Page-navTitle js-toggleLocalNav collapsed" data-toggle="collapse" href="#nav-target" role="button">Componentes <span class="Page-navStatus"></span></a>
	</div>
	<ul id="nav-target" class="Page-navList collapse">
		<!-- Nivel 1 -->
		<li class="<?php if($activeItem == 'iconos') echo 'is-active'; ?>"><a href="sist-doc-iconos.php">Íconos</a></li>
		
		<!-- Menú anidado: Textos -->
		<?php $isTextosExpanded = in_array($activeItem, ['titulos', 'parrafos', 'listados', 'textos']); ?>
		<li class="<?php if($activeItem == 'textos') echo 'is-active'; ?>">
			<a href="sist-doc-textos.php">Textos</a>
			<ul class="Page-navSublist" <?php if(!$isTextosExpanded) echo 'style="display:none;"'; ?>>
				<li class="<?php if($activeItem == 'titulos') echo 'is-active'; ?>"><a href="sist-doc-titulos.php">Títulos</a></li>
				<li class="<?php if($activeItem == 'parrafos') echo 'is-active'; ?>"><a href="sist-doc-parrafos.php">Párrafos</a></li>
				<li class="<?php if($activeItem == 'listados') echo 'is-active'; ?>"><a href="sist-doc-listados.php">Listados</a></li>
			</ul>
		</li>
		
		<!-- Menú anidado: Navegación -->
		<?php $isNavExpanded = in_array($activeItem, ['navegacion', 'cabezales', 'pie-pagina', 'breadcrumb', 'paginador', 'menu-pasos']); ?>
		<li class="<?php if($activeItem == 'navegacion') echo 'is-active'; ?>">
			<a href="sist-doc-navegacion.php">Navegación</a>
			<ul class="Page-navSublist" <?php if(!$isNavExpanded) echo 'style="display:none;"'; ?>>
				<li class="<?php if($activeItem == 'cabezales') echo 'is-active'; ?>"><a href="sist-doc-cabezales.php">Cabezales</a></li>
				<li class="<?php if($activeItem == 'pie-pagina') echo 'is-active'; ?>"><a href="sist-doc-pie-pagina.php">Pie de página</a></li>
				<li class="<?php if($activeItem == 'breadcrumb') echo 'is-active'; ?>"><a href="sist-doc-breadcrumb.php">Breadcrumb</a></li>
				<li class="<?php if($activeItem == 'paginador') echo 'is-active'; ?>"><a href="sist-doc-paginador.php">Paginador</a></li>
				<li class="<?php if($activeItem == 'menu-pasos') echo 'is-active'; ?>"><a href="sist-doc-menu-pasos.php">Menú de pasos</a></li>

			</ul>
		</li>
		
		<!-- Menú anidado: Mensajes y diálogos -->
		<?php $isMensajesExpanded = in_array($activeItem, ['mensajes', 'alertas', 'modales', 'tooltips', 'indicadores', 'tags']); ?>
		<li class="<?php if($activeItem == 'mensajes') echo 'is-active'; ?>">
			<a href="sist-doc-mensajes-dialogos.php">Mensajes y diálogos</a>
			<ul class="Page-navSublist" <?php if(!$isMensajesExpanded) echo 'style="display:none;"'; ?>>
				<li class="<?php if($activeItem == 'alertas') echo 'is-active'; ?>"><a href="sist-doc-alertas.php">Alertas</a></li>
				<li class="<?php if($activeItem == 'modales') echo 'is-active'; ?>"><a href="sist-doc-modales.php">Modales</a></li>
				<li class="<?php if($activeItem == 'tooltips') echo 'is-active'; ?>"><a href="sist-doc-tooltips.php">Tooltips</a></li>
				<li class="<?php if($activeItem == 'indicadores') echo 'is-active'; ?>"><a href="sist-doc-indicadores.php">Indicadores de carga</a></li>
				<li class="<?php if($activeItem == 'tags') echo 'is-active'; ?>"><a href="sist-doc-tags.php">Tags</a></li>
			</ul>
		</li>

		<!-- Menú anidado: Formularios -->
		<?php $isFormulariosExpanded = in_array($activeItem, ['formularios', 'campos', 'fieldset']); ?>
		<li class="<?php if($activeItem == 'formularios') echo 'is-active'; ?>">
			<a href="sist-doc-formularios.php">Formularios</a>
			<ul class="Page-navSublist" <?php if(!$isFormulariosExpanded) echo 'style="display:none;"'; ?>>
				<li class="<?php if($activeItem == 'campos') echo 'is-active'; ?>"><a href="sist-doc-campos.php">Campos</a></li>
				<li class="<?php if($activeItem == 'fieldset') echo 'is-active'; ?>"><a href="sist-doc-fieldset.php">Fieldset</a></li>
			</ul>
		</li>

		<li class="<?php if($activeItem == 'tablas') echo 'is-active'; ?>"><a href="sist-doc-tablas.php">Tablas</a></li>

		<!-- Menú anidado: Acciones -->
		<?php $isAccionesExpanded = in_array($activeItem, ['acciones', 'botones', 'enlaces', 'grupo-botones', 'boton-desplegable']); ?>
		<li class="<?php if($activeItem == 'acciones') echo 'is-active'; ?>">
			<a href="sist-doc-acciones.php">Acciones</a>
			<ul class="Page-navSublist" <?php if(!$isAccionesExpanded) echo 'style="display:none;"'; ?>>
				<li class="<?php if($activeItem == 'botones') echo 'is-active'; ?>"><a href="sist-doc-botones.php">Botones</a></li>
				<li class="<?php if($activeItem == 'enlaces') echo 'is-active'; ?>"><a href="sist-doc-enlaces.php">Enlaces</a></li>
				<li class="<?php if($activeItem == 'grupo-botones') echo 'is-active'; ?>"><a href="sist-doc-grupo-botones.php">Grupo de botones</a></li>
				<li class="<?php if($activeItem == 'boton-desplegable') echo 'is-active'; ?>"><a href="sist-doc-boton-desplegable.php">Botón con desplegable</a></li>
			</ul>
		</li>
		
		</li>
	</ul>
</nav>

<?php
  $title = 'Campos';
  $section = 'formulario-tipo';
  $subsection = 'campos'; 
?>

<?php include "inc/head.php"; ?>

<div class="app">

    <?php include "comp/header-app.php" ?>

    <div class="layout layout--app">

        <?php include "comp/nav-lateral.php" ?>

        <main id="contenido">

			<!-- Breadcrumb -->	
			<?php include "comp/breadcrumb.php"; ?>

            <h1><?php echo $title; ?></h1>

            <div class="row">

                <div class="col-sm-12 col-md-12 col-lg-8">

                    <form class="Form--tipo">

                        <fieldset>

                            <legend><span>Etiquetas y campos</span></legend>

                            <div class="Form-group">
                                <div class="Form-label-wrap">
                                    <label class="Form-label" for="example-campo-comun">Etiqueta de campo común:</label>
                                </div>
                                <div class="Form-object-wrap">
                                    <input class="Form-widget" name="example-campos-comun" type="text" id="example-campo-comun">
                                </div>
                            </div>

                            <div class="Form-group">
                                <div class="Form-label-wrap">
                                    <label class="Form-label" for="example-campo-mediano">Etiqueta de campo mediano:</label>
                                </div>
                                <div class="Form-object-wrap">
                                    <input class="Form-widget Form-widget--medium" name="example-campo-mediano" type="text" id="example-campo-mediano">
                                </div>
                            </div>

                            <div class="Form-group">
                                <div class="Form-label-wrap">
                                    <label class="Form-label" for="example-campo-chico">Etiqueta de campo chico:</label>
                                </div>
                                <div class="Form-object-wrap">
                                    <input class="Form-widget Form-widget--small" name="example-campo-chico" type="text" id="example-campo-chico">
                                </div>
                            </div>

                            <div class="Form-group Form-group--disabled">
                                <div class="Form-label-wrap">
                                    <label class="Form-label" for="example-campo-disabled">Etiqueta de campo deshabilitado:</label>
                                </div>
                                <div class="Form-object-wrap">
                                    <input class="Form-widget" type="text" id="example-campo-disabled" name="example-campo-disabled" disabled="">
                                </div>
                            </div>

                            <div class="Form-group">
                                <div class="Form-label-wrap">
                                    <label for="example-campo-textarea" class="Form-label">Etiqueta de campo de área de texto:</label>
                                </div>
                                <div class="Form-object-wrap">
                                    <textarea name="example-campo-textarea" id="example-campo-textarea" class="Form-widget"></textarea>
                                </div>
                            </div>

                            <div class="Form-group Form-group--alert Form-group--error">
                                <div class="Form-label-wrap">
                                    <label class="Form-label" for="example-campo-error">Etiqueta de campo con error:</label>
                                </div>
                                <div class="Form-object-wrap">
                                    <input class="Form-widget" name="example-campo-error" type="text" id="example-campo-error" aria-describedby="error-campo">
                                    <div class="Form-status Form-status--error" id="error-campo">
                                        <svg class="icono icono--s">
		                                    <use href="#icono-error--relleno"></use>
	                                    </svg>    
                                        <span><strong>ERROR</strong> - Este campo es obligatorio</span>
                                    </div>
                                </div>
                            </div>

                            <div class="Form-group Form-group--alert Form-group--warning">
                                <div class="Form-label-wrap">
                                    <label class="Form-label" for="example-campo-warning">Etiqueta de campo con advertencia:</label>
                                </div>
                                <div class="Form-object-wrap">
                                    <input class="Form-widget" name="example-campo-warning" type="text" id="example-campo-warning" aria-describedby="advertencia-campo">
                                    <div class="Form-status Form-status--warning" id="advertencia-campo">
                                        <svg class="icono icono--s">
		                                    <use href="#icono-alerta--relleno"></use>
	                                    </svg>    
                                        <span><strong>Advertencia</strong> - No se pudo validar el dato</span>
                                    </div>
                                </div>
                            </div>

                            <div class="Form-group">
                                <div class="Form-label-wrap">
                                    <label class="Form-label" for="example-campo-con-ayuda">Etiqueta de campo con ayuda:</label>
                                </div>
                                <div class="Form-object-wrap">
                                    <input class="Form-widget" name="example-campo-con-ayuda" type="text" id="example-campo-con-ayuda" aria-describedby="ayuda-campo">
                                    <div class="Form-hint" id="ayuda-campo">Este es un texto de ayuda</div>
                                </div>
                            </div>

                            <div class="Form-group">
                                <div class="Form-label-wrap">
                                    <label class="Form-label" for="example-campo-con-placeholder">Etiqueta de campo con placeholder:</label>
                                </div>
                                <div class="Form-object-wrap">
                                    <input class="Form-widget" name="example-campo-con-placeholder" type="text" id="example-campo-con-placeholder" placeholder="example-campo-con-placeholder">
                                </div>
                            </div>

                        </fieldset>

                        <fieldset>

                            <legend><span>Selectores</span></legend>

                            <div class="Form-group">

                                <div class="Form-label-wrap">
                                    <label for="combo-1" class="Form-label">Etiqueta de combo:</label>
                                </div>

                                <div class="Form-object-wrap">
                                    <select class="Form-widget" name="combo-1" id="combo-1">
                                        <option value="0">Opción seleccionada de un combo</option>
                                        <option value="1">Opción 1</option>
                                        <option value="2">Opción 2</option>
                                        <option value="3">Opción 3</option>
                                    </select>
                                    <div class="Form-hint" id="ayuda-campo">Este es un texto de ayuda</div>
                                </div>

                            </div>

                        </fieldset>

                        <fieldset>

                            <legend><span>Buscador</span></legend>

                            <div class="Form-group Form-group--search">
                                <div class="Form-label-wrap">
                                    <label class="Form-label" for="example-campo-busqueda">Buscar:</label>
                                </div>
                                <div class="Form-object-wrap">
                                    <input class="Form-widget" name="example-campos-busqueda" type="search" id="example-campo-busqueda" placeholder="Buscar...">
                                    <button type="submit" class="boton boton--enlace boton--icono boton--l" aria-label="Buscar">
                                        <svg class="icono icono--m">
                                            <use href="#icono-buscar--lineal"></use>
                                        </svg>
                                        <span>Buscar</span>
                                    </button>
                                </div>
                            </div>

                            <div class="Form-group Form-group--search Form-group--search--label-hide">
                                <div class="Form-label-wrap">
                                    <label class="Form-label" for="example-campo-busqueda">Buscar:</label>
                                </div>
                                <div class="Form-object-wrap">
                                    <input class="Form-widget" name="example-campos-busqueda" type="search" id="example-campo-busqueda" placeholder="Buscar..." aria-describedby="ayuda-label-oculto">
                                    <button type="submit" class="boton boton--enlace boton--icono boton--l" aria-label="Buscar">
                                        <svg class="icono icono--m">
                                            <use href="#icono-buscar--lineal"></use>
                                        </svg>
                                        <span>Buscar</span>
                                    </button>
                                    <div class="Form-hint" id="ayuda-label-oculto">Ejemplo con label oculto</div>
                                </div>
                            </div>

                        </fieldset>


                        <fieldset>

                            <legend><span>Campos combinados</span></legend>
                        
                            <div class="Form-group" role="group" aria-labelledby="grupo-identidad">
                                <div class="Form-label-wrap">
                                    <div id="grupo-identidad" class="Form-label">Documento de Identidad:</div>
                                </div>
                                <div class="Form-object-wrap">
                                    <div class="row row--no-stack">
                                        <div class="col-4">
                                            <label for="select-cedula" class="u-hideVisually">Tipo de Documento</label>
                                            <select name="select-cedula" id="select-cedula" class="Form-widget">
                                                <option value="ci">C.I.</option>
                                                <option value="pasaporte">Pasaporte</option>
                                            </select>
                                        </div>
                                        <div class="col-8">
                                            <label for="numero-cedula" class="u-hideVisually">Número de Documento</label>
                                            <input type="text" class="Form-widget" name="numero-cedula" aria-describedby="ayuda-numero-cedula" id="numero-cedula">
                                            <div class="Form-hint" id="ayuda-numero-cedula">Incluir dígito verificador</div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="Form-group Form-group--alert Form-group--error" role="group" aria-labelledby="grupo-identidad-error">
                                <div class="Form-label-wrap">
                                    <div id="grupo-identidad-error" class="Form-label">Documento de Identidad:</div>
                                </div>
                                <div class="Form-object-wrap" role="group" aria-describedby="documento-error">
                                    <div class="row row--no-stack">
                                        <div class="col-4">
                                            <label for="select-cedula-error" class="Form-label u-hideVisually">Tipo de Documento con error</label>
                                            <select name="select-cedula-error" id="select-cedula-error" class="Form-widget">
                                                <option value="ci">C.I.</option>
                                                <option value="pasaporte">Pasaporte</option>
                                            </select>
                                        </div>
                                        <div class="col-8">
                                            <label for="numero-cedula-error" class="Form-label u-hideVisually">Número de Documento</label>
                                            <input id="numero-cedula-error" name="numero-cedula-error" type="text" aria-describedby="ayuda-numero-cedula-2" class="Form-widget">
                                            <div class="Form-hint" id="ayuda-numero-cedula-2">Incluir dígito verificador</div>
                                        </div>
                                    </div>

                                    <div class="Form-status Form-status--error" id="error-campo">
                                        <svg class="icono icono--s">
		                                    <use href="#icono-error--relleno"></use>
	                                    </svg>    
                                        <span><strong>ERROR</strong> - Este campo es obligatorio</span>
                                    </div>

                                </div>
                            </div>

                        </fieldset>

                        <fieldset>

                            <legend><span>Fechas</span></legend>

                            <div class="Form-group">

                                <div class="Form-label-wrap">
                                    <label for="fecha-campo" class="Form-label">Fecha:</label>
                                </div>
                                <div class="Form-object-wrap">
                                    <input type="date" class="Form-widget Form-widget--medium" name="fecha-campo" id="fecha-campo">
                                </div>

                            </div>

                            <div class="Form-group" role="group" aria-labelledby="fecha-multicampo">

                                <div class="Form-label-wrap">
                                    <div id="fecha-multicampo" class="Form-label">Fecha multicampo:</div>
                                </div>
                            
                                <div class="Form-object-wrap" role="group" aria-describedby="descripcion-fecha">
                            
                                    <div class="row row--no-stack">
                                        <div class="col-m-4 col-3">
                                            <label for="day" class="Form-label"><em>Día</em></label>
                                            <input type="number" class="Form-widget" id="day" name="day" placeholder="DD" min="1" max="31">
                                        </div>
                                        <div class="col-m-4 col-3">
                                            <label for="month" class="Form-label"><em>Mes</em></label>
                                            <input type="number" class="Form-widget" id="month" name="month" placeholder="MM" min="1" max="12">
                                        </div>
                                        <div class="col-m-4 col-3">
                                            <label for="year" class="Form-label"><em>Año</em></label>
                                            <input type="number" class="Form-widget" id="year" name="year" placeholder="AAAA" min="1900" max="2019">
                                        </div>
                                    </div>

                                    <div class="Form-hint" id="descripcion-fecha">Ejemplo: 31 12 1980</div>

                                </div>

                            </div>

                            <div class="Form-group" role="group" aria-labelledby="fecha-multicampo-meses">

                                <div class="Form-label-wrap">
                                    <div id="fecha-multicampo-meses" class="Form-label">Fecha multicampo (mes con combo):</div>
                                </div>

                                <div class="Form-object-wrap" role="group" aria-describedby="descripcion-fecha-meses">

                                    <div class="row row--no-stack">
                                        <div class="col-m-4 col-3">
                                            <label for="day-mc" class="Form-label"><em>Día</em></label>
                                            <input type="number" class="Form-widget" id="day-mc" name="day-mc" placeholder="DD" min="1" max="31">
                                        </div>
                                        <div class="col-m-4 col-4">
                                            <label for="select-mes" class="Form-label"><em>Mes</em></label>
                                            <select name="select-mes" id="select-mes" class="Form-widget">
                                                <option value="enero">enero</option>
                                                <option value="febrero">febrero</option>
                                                <option value="marzo">marzo</option>
                                                <option value="abril">abril</option>
                                                <option value="mayo">mayo</option>
                                                <option value="junio">junio</option>
                                                <option value="julio">julio</option>
                                                <option value="agosto">agosto</option>
                                                <option value="setiembre">setiembre</option>
                                                <option value="octubre">octubre</option>
                                                <option value="noviembre">noviembre</option>
                                                <option value="diciembre">diciembre</option>
                                            </select>
                                        </div>
                                        <div class="col-m-4 col-3">
                                            <label for="year-mc" class="Form-label"><em>Año</em></label>
                                            <input type="number" class="Form-widget" id="year-mc" name="year-mc" placeholder="AAAA" min="1900" max="2019">
                                        </div>
                                    </div>

                                    <div class="Form-hint" id="descripcion-fecha-meses">Ejemplo: 31 marzo 1980</div>

                                </div>

                            </div>

                        </fieldset>

                        <fieldset>

                            <legend><span>Archivos adjuntos</span></legend>

                            <div class="Form-group">
                                <div class="Form-label-wrap">
                                    <label class="Form-label" for="adjuntos-1">Archivos:</label>
                                </div>
                                <div class="Form-object-wrap">
                                    <input class="Form-widget" type="file" name="adjuntos-1" id="adjuntos-1">
                                    <div class="Form-hint" id="ayuda-campo">Formatos aceptados: PDF, JPG y ZIP de hasta 3Mb.</div>
                                </div>
                            </div>

                            <div class="Form-group">
                                <div class="Form-label-wrap">
                                    <label class="Form-label" for="adjuntos-2">Archivos con link:</label>
                                </div>
                                <div class="Form-object-wrap">
                                    <input class="Form-widget" type="file" name="adjuntos-2" id="adjuntos-2">
                                    <a href="#" class="Button Button--link-simple">+ Agregar otro campo</a>
                                </div>
                            </div>

                        </fieldset>

                        <!-- <fieldset>

                            <legend><span>Calendario</span></legend>

                        </fieldset> -->

                        <fieldset>

                            <legend><span>Opciones</span></legend>

                            <div class="Form-group" role="group" aria-labelledby="grupo-radios">
                            
                                <div class="Form-label-wrap">
                                    <div id="grupo-radios" class="Form-label">Grupo de opciones de radio button:</div>
                                </div>
                                
                                <div class="Form-object-wrap">
                                    <div class="Form-options">
                                        <label for="opcion_1" class="Form-option">
                                            <input type="radio" id="opcion_1" name="opciones">
                                            <span>Radio 1</span>
                                        </label>
                                        <label for="opcion_2" class="Form-option">
                                            <input type="radio" id="opcion_2" name="opciones">
                                            <span>Radio 2</span>
                                        </label>
                                        <label for="opcion_3" class="Form-option">
                                            <input type="radio" id="opcion_3" name="opciones">
                                            <span>Radio 3 <span class="Form-hint">Opción con texto de ayuda</span></span>
                                        </label>
                                        <label for="opcion_4" class="Form-option">
                                            <input type="radio" id="opcion_4" name="opciones">
                                            <span>Radio 4</span>
                                        </label>
                                    </div>
                                </div>
                            
                            </div>

                            <div class="Form-group" role="group" aria-labelledby="grupo-radios-tags">

                                <div class="Form-label-wrap">
                                    <div id="grupo-radios-tags" class="Form-label">Grupo de opciones de etiquetas:</div>
                                </div>

                                <div class="Form-object-wrap">

                                    <div class="Form-options Form-options--tags">

                                        <label for="opcion_1_tag" class="Form-option">
                                            <input type="radio" id="opcion_1_tag" name="opciones-tag" checked="">
                                            <span>Etiqueta 1</span>
                                        </label>

                                        <label for="opcion_2_tag" class="Form-option">
                                            <input type="radio" id="opcion_2_tag" name="opciones-tag">
                                            <span>Etiqueta 2</span>
                                        </label>

                                        <label for="opcion_3_tag" class="Form-option">
                                            <input type="radio" id="opcion_3_tag" name="opciones-tag">
                                            <span>Etiqueta 3</span>
                                        </label>

                                    </div>

                                </div>

                            </div>

                            <div class="Form-group" role="group" aria-labelledby="grupo-checkboxes">

                                <div class="Form-label-wrap">
                                    <div id="grupo-checkboxes" class="Form-label">Grupo de opciones de checkboxes:</div>
                                </div>

                                <div class="Form-object-wrap">
                                    <div class="Form-options">
                                        <label for="opcion_check_3" class="Form-option">
                                            <input type="checkbox" id="opcion_check_3" name="opciones_check_2">
                                            <span>Checkbox 1</span>
                                        </label>
                                        <label for="opcion_check_4" class="Form-option">
                                            <input type="checkbox" id="opcion_check_4" name="opciones_check_2">
                                            <span>Checkbox 2 <span class="Form-hint">Opción con texto de ayuda</span></span>
                                        </label>
                                        <label for="opcion_check_3" class="Form-option">
                                            <input type="checkbox" id="opcion_check_5" name="opciones_check_3">
                                            <span>Checkbox 3</span>
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="Form-group Form-group--alert Form-group--error" role="group" aria-labelledby="grupo-checkboxes-error">

                                <div class="Form-label-wrap">
                                    <div id="grupo-checkboxes-error" class="Form-label">Grupo de opciones con error:</div>
                                </div>

                                <div class="Form-object-wrap" role="group" aria-describedby="error-grupo-opciones">

                                    <div class="Form-options">

                                        <label for="opcion_check_5" class="Form-option">
                                            <input type="checkbox" id="opcion_check_5" name="opciones_check">
                                            <span>Checkbox 1 con error</span>
                                        </label>

                                        <label for="opcion_check_6" class="Form-option">
                                            <input type="checkbox" id="opcion_check_6" name="opciones_check">
                                            <span>Checkbox 2 con error</span>
                                        </label>

                                    </div>

                                    <div class="Form-status Form-status--error" id="error-campo">
                                        <svg class="icono icono--s">
		                                    <use href="#icono-error--relleno"></use>
	                                    </svg>    
                                        <span><strong>ERROR</strong> - Este campo es obligatorio</span>
                                    </div>

                                </div>

                            </div>

                        </fieldset>

                        <!--

                        <fieldset>

                            <legend><span>Valoración</span></legend>



                            <div class="Form-group" role="group" aria-labelledby="grupo-valoraciones">

                                <div class="Form-label-wrap">
                                    <div id="grupo-valoraciones" class="Form-label">¿Cómo calificarías esta gestión?:</div>
                                </div>

                                <div class="Form-object-wrap">

                                    <div class="Rating">

                                        <input type="radio" id="Mala" class="Rating-control" name="rating-star" value="Mala" title="Mala">
                                        <input type="radio" id="Regular" class="Rating-control" name="rating-star" value="Regular" title="Regular">
                                        <input type="radio" id="Buena" class="Rating-control" name="rating-star" value="Buena" title="Buena" checked="">
                                        <input type="radio" id="Muybuena" class="Rating-control" name="rating-star" value="Muy buena" title="Muy buena">
                                        <input type="radio" id="Excelente" class="Rating-control" name="rating-star" value="Excelente" title="Excelente">

                                        <label for="Mala" class="Rating-item"><svg class="Rating-star"><use xlink:href="#star"></use></svg><span class="Rating-label">1 estrella</span></label>
                                        <label for="Regular" class="Rating-item"><svg class="Rating-star"><use xlink:href="#star"></use></svg><span class="Rating-label">2 estrella</span></label>
                                        <label for="Buena" class="Rating-item"><svg class="Rating-star"><use xlink:href="#star"></use></svg><span class="Rating-label">3 estrella</span></label>
                                        <label for="Muybuena" class="Rating-item"><svg class="Rating-star"><use xlink:href="#star"></use></svg><span class="Rating-label">4 estrella</span></label>
                                        <label for="Excelente" class="Rating-item"><svg class="Rating-star"><use xlink:href="#star"></use></svg><span class="Rating-label">5 estrella</span></label>	                        

                                        <svg xmlns="http://www.w3.org/2000/svg" class="u-hide">
                                            <symbol id="star" viewBox="0 0 26 28">
                                                <path d="M26 10.109c0 .281-.203.547-.406.75l-5.672 5.531 1.344 7.812c.016.109.016.203.016.313 0 .406-.187.781-.641.781a1.27 1.27 0 0 1-.625-.187L13 21.422l-7.016 3.687c-.203.109-.406.187-.625.187-.453 0-.656-.375-.656-.781 0-.109.016-.203.031-.313l1.344-7.812L.39 10.859c-.187-.203-.391-.469-.391-.75 0-.469.484-.656.875-.719l7.844-1.141 3.516-7.109c.141-.297.406-.641.766-.641s.625.344.766.641l3.516 7.109 7.844 1.141c.375.063.875.25.875.719z"></path>
                                            </symbol>
                                        </svg> 

                                    </div>

                                </div>

                            </div>

                           

                        </fieldset>

                        -->

                        <fieldset>

                            <legend><span>Grupo de campos solo lectura</span></legend>

                            <div class="Form-group">
                                <div class="Form-label-wrap">
                                    <label class="Form-label" for="example-campo-sololectura">Nombre completo:</label>
                                </div>
                                <div class="Form-object-wrap">
                                    <input type="text" class="Form-widget Form-widget--read" value="Juan Ignacio Rodríguez" id="example-campo-sololectura" readonly="">
                                </div>
                            </div>

                            <div class="Form-group">
                                <div class="Form-label-wrap">
                                    <label class="Form-label" for="example-campo-sololectura-2">Fecha de Nacimiento:</label>
                                </div>
                                <div class="Form-object-wrap">
                                    <input type="date" class="Form-widget Form-widget--read" value="1990-10-12" id="example-campo-sololectura-2" readonly="">
                                </div>
                            </div>

                        </fieldset>

                        <fieldset>

                            <legend><span>Tipos de datos especiales</span></legend>

                            <div class="Form-group">
                                <div class="Form-label-wrap">
                                    <label class="Form-label" for="telefono">Teléfono (tel):</label>
                                </div>
                                <div class="Form-object-wrap">
                                    <input type="tel" class="Form-widget" id="telefono" name="telefono">
                                </div>
                            </div>

                            <div class="Form-group">
                                <div class="Form-label-wrap">
                                    <label class="Form-label" for="correo">Correo electrónico (email):</label>
                                </div>
                                <div class="Form-object-wrap">
                                    <input type="email" class="Form-widget" id="correo" name="correo">
                                </div>
                            </div>

                            <div class="Form-group">
                                <div class="Form-label-wrap">
                                    <label class="Form-label" for="direccion_url">Dirección URL (url):</label>
                                </div>
                                <div class="Form-object-wrap">
                                    <input type="url" class="Form-widget" id="direccion_url" name="direccion_url">
                                </div>
                            </div>

                        </fieldset>

                        <fieldset>

                            <legend><span>Campos con indicadores</span></legend>

                            <div class="Form-group">
                                <div class="Form-label-wrap">
                                    <label class="Form-label" for="con_tooltip-1">Con ícono:</label>
                                </div>
                                <div class="Form-object-wrap">
                                    <input type="url" class="Form-widget" id="con_tooltip-1" name="con_tooltip-1" aria-describedby="campo-ok" value="1.121.122-4">

                                    <div class="Form-status Form-status--ok" id="campo-ok">
                                        <svg class="icono icono--s">
		                                    <use href="#icono-exito--relleno"></use>
	                                    </svg>    
                                        <span>Dato validado</span>
                                    </div>

                                </div>
                            </div>

                            <div class="Form-group">
                                <div class="Form-label-wrap">
                                    <label class="Form-label" for="con_tooltip-2">Con modal de ayuda:</label>
                                </div>
                                <div class="Form-object-wrap">
                                    <input type="url" class="Form-widget" id="con_tooltip-2" name="con_tooltip-2" aria-describedby="consulta-campo-con-link">

                                    <div class="Form-status Form-status--question" id="consulta-campo-con-link">
                                        <svg class="icono icono--s">
		                                    <use href="#icono-ayuda--relleno"></use>
	                                    </svg>    
                                        <a href="" data-toggle="modal" data-target="#modalExample">Link al modal</a>
                                    </div>
                                </div>
                            </div>

                            <!-- modal -->


                            <!-- fin modal -->

                        </fieldset>

                        <div class="mod-flex">

                            <div>

                                <button class="boton boton--enlace">
                                    <svg class="icono icono--m">
                                        <use href="#icono-flecha-larga-izquierda--lineal"></use>
                                    </svg>
                                    <span>Volver</span>
                                </button>

                            </div>

                            <div class="mod-flex flex-items-end" >

                                <button class="boton boton--secundario">
                                    <span>Acción secundaria</span>
                                </button>

                                <button class="boton boton--primario">
                                    <span>Continuar</span>
                                    <svg class="icono icono--m">
                                        <use href="#icono-flecha-larga-derecha--lineal"></use>
                                    </svg>
                                </button>

                            </div>

                        </div>

                    </form>

                    <hr class="divider divider--space-48 divider--neutro-300" />

                    <form class="Form--tipo">

                        <fieldset>

                            <legend><span>Botón alineado con los campos</span></legend>
                            <p>Utilizar esta alineación solamente para formularios muy cortos, como la solicitud de usuario y contraseña, o cuando no son la tarea central dentro de una página.</p>
                            
                            <div class="Form-group">
                                <div class="Form-label-wrap">
                                    <label for="alineado" class="Form-label">Alineado:</label>
                                </div>
                                <div class="Form-object-wrap">
                                    <input type="text" class="Form-widget" id="alineado" name="alineado">
                                </div>
                            </div>

                            <div class="Form-group">
                                <div class="Form-label-wrap">
                                    <label for="alineado_2" class="Form-label">Otro campo:</label>
                                </div>
                                <div class="Form-object-wrap">
                                    <input type="text" class="Form-widget" id="alineado_2" name="alineado_2">
                                </div>
                            </div>

                            <div class="Form-group">
                                <div class="Form-label-wrap"></div>
                                <div class="Form-object-wrap">
                                    <button class="boton boton--primario">Enviar</button>
                                    <button class="boton boton--enlace">Botón enlace</button>
                                </div>
                            </div>

                        </fieldset>

                    </form>

                </div>

            </div>

            <div class="row">

                <div class="col-sm-8 col-md-6 col-lg-4">

                    <form action="./" class="Form--tipo Form--stacked">

					    <fieldset>

						    <legend><span>Formulario apilado</span></legend>

                            <div class="Form-group">
                            
                                <div class="Form-label-wrap">
                                    <label for="ejemplo_stacked" class="Form-label">Etiqueta 1:</label>
                                </div>
                                
                                <div class="Form-object-wrap">
                                    <input type="text" class="Form-widget" id="ejemplo_stacked">
                                </div>
                                
                            </div>

                            <div class="Form-group">
							
                                <div class="Form-label-wrap">
									<label for="combo_stacked" class="Form-label">Etiqueta de combo:</label>
								</div>
								
                                <div class="Form-object-wrap">
									<select name="combo_stacked" id="combo_stacked" class="Form-widget">
										<option value="0">Opción seleccionada de un combo</option>
										<option value="1">Opción 1</option>
										<option value="2">Opción 2</option>
										<option value="3">Opción 3</option>
									</select>
								</div>
							
                            </div>

                            <div class="Form-group">
								
                                <div class="Form-label-wrap">
									<label for="ejemplo_stacked_2" class="Form-label">Etiqueta 2:</label>
								</div>
								
                                <div class="Form-object-wrap">
								    <input type="text" class="Form-widget" id="ejemplo_stacked_2">
                                </div>
                            
							</div>

                            <div class="Form-group Form-group--alert Form-group--error">

                                <div class="Form-label-wrap">
                                    <label class="Form-label" for="example-campo-stacked-error">Etiqueta de campo con error:</label>
                                </div>

                                <div class="Form-object-wrap">
                                    <input class="Form-widget" name="example-campo-stacked-error" type="text" id="example-campo-stacked-error" aria-describedby="error-campo">
                                    <div class="Form-status Form-status--error" id="error-campo-stacked">
                                        <svg class="icono icono--s">
		                                    <use href="#icono-error--relleno"></use>
	                                    </svg>    
                                        <span><strong>ERROR</strong> - Este campo es obligatorio</span>
                                    </div>
                                </div>

							</div>

                            <div class="Form-group Form-group--alert Form-group--warning">

								<div class="Form-label-wrap">
									<label class="Form-label" for="example-campo-stacked-warning">Etiqueta de campo con advertencia:</label>
								</div>
								
                                <div class="Form-object-wrap">
									<input class="Form-widget" name="example-campo-stacked-warning" type="text" id="example-campo-stacked-warning" aria-describedby="advertencia-campo">
                                    <div class="Form-status Form-status--warning" id="advertencia-campo-stacked">
                                        <svg class="icono icono--s">
		                                    <use href="#icono-alerta--relleno"></use>
	                                    </svg>    
                                        <span><strong>Advertencia</strong> - No se pudo validar el dato</span>
                                    </div>
								</div>

						    </div>

                            <div class="Form-group">

                                <div class="Form-label-wrap">
                                    <label class="Form-label" for="example-campo-stacked-con-ayuda">Etiqueta de campo con ayuda:</label>
                                </div>
                                
                                <div class="Form-object-wrap">
                                    <input class="Form-widget" name="example-campo-stacked-con-ayuda" type="text" id="example-campo-stacked-con-ayuda" aria-describedby="ayuda-campo">
                                    <div class="Form-hint" id="ayuda-campo">Este es un texto de ayuda</div>
                                </div>

							</div>

                            <div class="Form-group">
                                <div class="Form-label-wrap"></div>
                                <div class="Form-object-wrap">
                                    <button class="boton boton--primario">Filtrar</button>
                                </div>
                            </div>

                        </fieldset>

                    </form>

                    <form action="./" class="Form--tipo Form--stacked Form--stacked--hidden-fieldset u-mb4">

						<fieldset>

							<legend><span>Formulario apilado con fieldset oculto</span></legend>

                            <div class="Form-group">
								<div class="Form-label-wrap">
									<label for="ejemplo_stacked-sin-fieldset" class="Form-label">Etiqueta 1:</label>
                                </div>
								<div class="Form-object-wrap">
									<input type="text" class="Form-widget" id="ejemplo_stacked-sin-fieldset">
								</div>
							</div>

                            <div class="Form-group">
								<div class="Form-label-wrap">
									<label for="combo_stacked-sin-fieldset" class="Form-label">Etiqueta de combo:</label>
								</div>
								<div class="Form-object-wrap">
									<select name="combo_stacked-sin-fieldset" id="combo_stacked-sin-fieldset" class="Form-widget">
										<option value="0">Opción seleccionada de un combo</option>
										<option value="1">Opción 1</option>
										<option value="2">Opción 2</option>
										<option value="3">Opción 3</option>
									</select>
								</div>
							</div>

                            <div class="Form-group Form-group--alert Form-group--error">
								<div class="Form-label-wrap">
							    	<label class="Form-label" for="example-campo-stacked-error">Etiqueta de campo con error:</label>
								</div>
								<div class="Form-object-wrap">
									<input class="Form-widget" name="example-campo-stacked-error" type="text" id="example-campo-stacked-error" aria-describedby="error-campo">
                                    <div class="Form-status Form-status--error" id="error-campo-sin-fieldset">
                                        <svg class="icono icono--s">
		                                    <use href="#icono-error--relleno"></use>
	                                    </svg>    
                                        <span><strong>ERROR</strong> - Este campo es obligatorio</span>
                                    </div>
								</div>
							</div>

                            <div class="Form-group">
								<div class="Form-label-wrap">
									<label for="ejemplo_stacked-2-sin-fieldset" class="Form-label">Etiqueta 2:</label>
								</div>
							
                                <div class="Form-object-wrap">
							    	<input type="text" class="Form-widget" id="ejemplo_stacked-2-sin-fieldset">
								</div>
							</div>

                            <div class="Form-group">
                                <div class="Form-label-wrap"></div>
                                <div class="Form-object-wrap">
                                    <button class="boton boton--primario">Filtrar</button>
                                </div>
                            </div>

                        </fieldset>

                    </form>


                </div>

            </div>

        </main>

    </div>

</div>

<?php include "inc/foot.php"; ?>
<div class="table-wrap">
	<table id="treegrid" role="treegrid" aria-label="Lista de ítems con jerarquía">
  <colgroup>
    <col id="treegrid-col1">
    <col id="treegrid-col2">
    <col id="treegrid-col3">
		<col id="treegrid-col4">
		<col id="treegrid-col5">
  </colgroup>
  <thead>
    <tr>
      <th scope="col">
				<div class="treegrid-th-content">
					<input type="checkbox" class="form-checkbox" aria-label="Seleccionar todo">
					<span>Etiqueta</span>
					<svg class="icono icono--s">
						<use href="#icono-colapsable-abajo--lineal"></use>
					</svg>
				</div>
			</th>
			<th scope="col">
				<div class="treegrid-th-content">
					<span>Etiqueta</span>
					<svg class="icono icono--s">
						<use href="#icono-colapsable-abajo--lineal"></use>
					</svg>
				</div>
			</th>
      <th scope="col">
				<div class="treegrid-th-content">
					<span>Etiqueta</span>
					<svg class="icono icono--s">
						<use href="#icono-colapsable-abajo--lineal"></use>
					</svg>
				</div>
			</th>
      <th scope="col">
				<div class="treegrid-th-content">
					<span>Etiqueta</span>
					<svg class="icono icono--s">
						<use href="#icono-colapsable-abajo--lineal"></use>
					</svg>
				</div>
			</th>
			<th scope="col">
				<div class="treegrid-th-content--end">
					<svg class="icono icono--s"><use href="#icono-descargar--lineal"></use></svg>
					<svg class="icono icono--s"><use href="#icono-tabla--lineal"></use></svg>
				</div>
			</th>
    </tr>
  </thead>
  <tbody>
		
		<tr role="row" aria-level="1" aria-posinset="1" aria-setsize="3" aria-expanded="true">
      <td role="gridcell">
				<div class="cell-title-line">
					<span class="treegrid-expando"></span>
					<input type="checkbox" class="form-checkbox">
					<span class="cell-main-content">Ítem 1 con tremendo título así re largo mal que llegue a dos renglones</span>
				</div>
				<div class="cell-details">
					<span class="details-label">Etiqueta:</span>
					<span class="details-value">Contenido texto un poco más largo que llegue al segundo renglón</span>
				</div>
			</td>
			<td role="gridcell">
				<div class="cell-content">
					<span class="tag-figma">
						<span class="dot"></span>
						<span>Estado</span>
					</span>
					<div class="cell-details">
						<span class="details-label">Etiqueta:</span>
						<span class="details-value">Texto corto pero no tan corto, pero si</span>
					</div>
				</div>
			</td>
      <td role="gridcell">
				<div class="cell-content">
					<span class="cell-main-content">Contenido texto un poco más largo que lle...</span>
					<div class="cell-details">
						<span class="details-label">Etiqueta:</span>
						<span class="details-value">Contenido texto un poco más largo que lle...</span>
					</div>
				</div>
			</td>
      <td role="gridcell">
				<div class="cell-content">
					<a class="enlace" href="#" target="_blank" rel="noopener noreferrer">
						<span>Enlace</span>
						<svg class="icono icono--s">
							<use href="#icono-enlace-externo--lineal"></use>
						</svg>
					</a>
					<div class="cell-details">
						<span class="details-label">Etiqueta:</span>
						<span class="details-value">Contenido texto un poco más largo que llegue al segundo renglón</span>
					</div>
				</div>
			</td>
			<td role="gridcell" style="vertical-align: middle;">
				<ul class="botonera botonera--s">
					<li>
						<button class="boton boton--s boton--secundario boton--icono">
							<svg class="icono">
								<use href="#icono-abrir-detalle--lineal"></use>
							</svg>
							<span>Ver detalle</span>
						</button>	
					</li>
					<li>
						<button class="boton boton--s boton--secundario boton--icono">
							<svg class="icono">
								<use href="#icono-edicion-rapida--lineal"></use>
							</svg>
							<span>Editar</span>
						</button>
					</li>	
					<li>
						<button class="boton boton--s boton--secundario boton--icono">
							<svg class="icono">
								<use href="#icono-mas--lineal"></use>
							</svg>
							<span>Agregar</span>
						</button>
					</li>	
					<li>
						<button class="boton boton--s boton--secundario boton--icono">
							<svg class="icono">
								<use href="#icono-borrar--lineal"></use>
							</svg>
							<span>Borrar</span>
						</button>
					</li>	
					<li>
						<div class="desplegable-wrapper">
							<button class="boton boton--s boton--secundario boton--icono" data-menu-trigger data-menu-target="menu-opciones-1" aria-expanded="false">
								<svg class="icono">
									<use href="#icono-mas-opciones--lineal"></use>
								</svg>
								<span>Más opciones</span>
							</button>
							<?php 
								$idDropdown = 'menu-opciones-1';
								include "comp/desplegable-opciones.php"; 
							?>
						</div>
					</li>
				</ul>
			</td>	
    </tr>
		
    <tr role="row" aria-level="2" aria-posinset="1" aria-setsize="3" aria-expanded="false">
      <td role="gridcell">
				<div class="cell-title-line">
					<span class="treegrid-expando"></span>
					<input type="checkbox" class="form-checkbox">
					<span class="cell-main-content">Sub-ítem 1 con tremendo título así re largo mal que llegue a dos líneas</span>
				</div>
			</td>
			<td role="gridcell">
				<span class="tag-figma">
					<span class="dot"></span>
					<span>Estado</span>
				</span>
			</td>
      <td role="gridcell">
				<span class="cell-main-content">Contenido texto un poco más largo que...</span>
			</td>
      <td role="gridcell">
				<a class="enlace" href="#" target="_blank" rel="noopener noreferrer">
					<span>Enlace</span>
					<svg class="icono icono--s">
						<use href="#icono-enlace-externo--lineal"></use>
					</svg>
				</a>
			</td>
			<td role="gridcell">
				<ul class="botonera botonera--s">
					<li>
						<button class="boton boton--s boton--secundario boton--icono">
							<svg class="icono">
								<use href="#icono-abrir-detalle--lineal"></use>
							</svg>
							<span>Ver detalle</span>
						</button>	
					</li>
					<li>
						<button class="boton boton--s boton--secundario boton--icono">
							<svg class="icono">
								<use href="#icono-edicion-rapida--lineal"></use>
							</svg>
							<span>Editar</span>
						</button>
					</li>	
					<li>
						<button class="boton boton--s boton--secundario boton--icono">
							<svg class="icono">
								<use href="#icono-mas--lineal"></use>
							</svg>
							<span>Agregar</span>
						</button>
					</li>	
					<li>
						<button class="boton boton--s boton--secundario boton--icono">
							<svg class="icono">
								<use href="#icono-borrar--lineal"></use>
							</svg>
							<span>Borrar</span>
						</button>
					</li>	
					<li>
						<div class="desplegable-wrapper">
							<button class="boton boton--s boton--secundario boton--icono" data-menu-trigger data-menu-target="menu-opciones-2" aria-expanded="false">
								<svg class="icono">
									<use href="#icono-mas-opciones--lineal"></use>
								</svg>
								<span>Más opciones</span>
							</button>
							<?php 
								$idDropdown = 'menu-opciones-2';
								include "comp/desplegable-opciones.php"; 
							?>
						</div>
					</li>
				</ul>
			</td>
    </tr>
		
    <tr role="row" aria-level="2" aria-posinset="2" aria-setsize="3" aria-expanded="true">
      <td role="gridcell">
				<div class="cell-title-line">
					<span class="treegrid-expando"></span>
					<input type="checkbox" class="form-checkbox">
					<span class="cell-main-content">Sub-ítem 1 con tremendo título así re largo mal que llegue a dos líneas</span>
				</div>
				<div class="cell-details">
					<span class="details-label">Etiqueta:</span>
					<span class="details-value">Contenido texto un poco más largo que llegue al segundo renglón</span>
				</div>
			</td>
			<td role="gridcell">
				<div class="cell-content">
					<span class="tag-figma">
						<span class="dot"></span>
						<span>Estado</span>
					</span>
					<div class="cell-details">
						<span class="details-label">Etiqueta:</span>
						<span class="details-value">Texto corto pero no tan corto, pero si</span>
					</div>
				</div>
			</td>
      <td role="gridcell">
				<div class="cell-content">
					<span class="cell-main-content">Contenido texto un poco más largo que...</span>
					<div class="cell-details">
						<span class="details-label">Etiqueta:</span>
						<span class="details-value">Contenido texto un poco...</span>
					</div>
				</div>
			</td>
      <td role="gridcell">
				<div class="cell-content">
					<a class="enlace" href="#" target="_blank" rel="noopener noreferrer">
						<span>Enlace</span>
						<svg class="icono icono--s">
							<use href="#icono-enlace-externo--lineal"></use>
						</svg>
					</a>
					<div class="cell-details">
						<span class="details-label">Etiqueta:</span>
						<span class="details-value">Contenido texto un poco más largo que llegue al segundo renglón</span>
					</div>
				</div>
			</td>
			<td role="gridcell">
				<ul class="botonera botonera--s">
					<li>
						<button class="boton boton--s boton--secundario boton--icono">
							<svg class="icono">
								<use href="#icono-abrir-detalle--lineal"></use>
							</svg>
							<span>Ver detalle</span>
						</button>	
					</li>
					<li>
						<button class="boton boton--s boton--secundario boton--icono">
							<svg class="icono">
								<use href="#icono-edicion-rapida--lineal"></use>
							</svg>
							<span>Editar</span>
						</button>
					</li>	
					<li>
						<button class="boton--s boton--secundario boton--icono">
							<svg class="icono">
								<use href="#icono-mas--lineal"></use>
							</svg>
							<span>Agregar</span>
						</button>
					</li>	
					<li>
						<button class="boton boton--s boton--secundario boton--icono">
							<svg class="icono">
								<use href="#icono-borrar--lineal"></use>
							</svg>
							<span>Borrar</span>
						</button>
					</li>	
					<li>
						<div class="desplegable-wrapper">
							<button class="boton boton--s boton--secundario boton--icono" data-menu-trigger data-menu-target="menu-opciones-3" aria-expanded="false">
								<svg class="icono">
									<use href="#icono-mas-opciones--lineal"></use>
								</svg>
								<span>Más opciones</span>
							</button>
							<?php 
								$idDropdown = 'menu-opciones-3';
								include "comp/desplegable-opciones.php"; 
							?>
						</div>
					</li>
				</ul>
			</td>
    </tr>
		
    <tr role="row" aria-level="3" aria-posinset="1" aria-setsize="1" aria-expanded="false">
      <td role="gridcell">
				<div class="cell-title-line">
					<span class="treegrid-expando"></span>
					<input type="checkbox" class="form-checkbox">
					<span class="cell-main-content">Sub-Sub-ítem 1 con tremendo título así re largo mal que llegue a dos líneas</span>
				</div>
			</td>
			<td role="gridcell">
				<span class="tag-figma">
					<span class="dot"></span>
					<span>Estado</span>
				</span>
			</td>
      <td role="gridcell">
				<span class="cell-main-content">Contenido texto un poco más largo que...</span>
			</td>
      <td role="gridcell">
				<a class="enlace" href="#" target="_blank" rel="noopener noreferrer">
					<span>Enlace</span>
					<svg class="icono icono--s">
						<use href="#icono-enlace-externo--lineal"></use>
					</svg>
				</a>
			</td>
			<td role="gridcell">
				<ul class="botonera botonera--s">
					<li>
						<button class="boton boton--s boton--secundario boton--icono">
							<svg class="icono">
								<use href="#icono-abrir-detalle--lineal"></use>
							</svg>
							<span>Ver detalle</span>
						</button>	
					</li>
					<li>
						<button class="boton boton--s boton--secundario boton--icono">
							<svg class="icono">
								<use href="#icono-edicion-rapida--lineal"></use>
							</svg>
							<span>Editar</span>
						</button>
					</li>	
					<li>
						<button class="boton boton--s boton--secundario boton--icono">
							<svg class="icono">
								<use href="#icono-mas--lineal"></use>
							</svg>
							<span>Agregar</span>
						</button>
					</li>	
					<li>
						<button class="boton boton--s boton--secundario boton--icono">
							<svg class="icono">
								<use href="#icono-borrar--lineal"></use>
							</svg>
							<span>Borrar</span>
						</button>
					</li>	
					<li>
						<div class="desplegable-wrapper">
							<button class="boton boton--s boton--secundario boton--icono" data-menu-trigger data-menu-target="menu-opciones-4" aria-expanded="false">
								<svg class="icono">
									<use href="#icono-mas-opciones--lineal"></use>
								</svg>
								<span>Más opciones</span>
							</button>
							<?php 
								$idDropdown = 'menu-opciones-4';
								include "comp/desplegable-opciones.php"; 
							?>
						</div>
					</li>
				</ul>
			</td>
    </tr>
		
    <tr role="row" aria-level="3" aria-posinset="2" aria-setsize="3" aria-expanded="true">
      <td role="gridcell">
				<div class="cell-title-line">
					<span class="treegrid-expando"></span>
					<input type="checkbox" class="form-checkbox">
					<span class="cell-main-content">Sub-Sub-ítem 1 con tremendo título así re largo mal que llegue a dos líneas</span>
				</div>
				<div class="cell-details">
					<span class="details-label">Etiqueta:</span>
					<span class="details-value">Contenido texto un poco más largo que llegue al segundo renglón</span>
				</div>
			</td>
			<td role="gridcell">
				<div class="cell-content">
					<span class="tag-figma">
						<span class="dot"></span>
						<span>Estado</span>
					</span>
					<div class="cell-details">
						<span class="details-label">Etiqueta:</span>
						<span class="details-value">Texto corto pero no tan corto, pero si</span>
					</div>
				</div>
			</td>
      <td role="gridcell">
				<div class="cell-content">
					<span class="cell-main-content">Contenido texto un poco más largo que...</span>
					<div class="cell-details">
						<span class="details-label">Etiqueta:</span>
						<span class="details-value">Contenido texto un poco...</span>
					</div>
				</div>
			</td>
      <td role="gridcell">
				<div class="cell-content">
					<a class="enlace" href="#" target="_blank" rel="noopener noreferrer">
						<span>Enlace</span>
						<svg class="icono icono--s">
							<use href="#icono-enlace-externo--lineal"></use>
						</svg>
					</a>
					<div class="cell-details">
						<span class="details-label">Etiqueta:</span>
						<span class="details-value">Contenido texto un poco más largo que llegue al segundo renglón</span>
					</div>
				</div>
			</td>
			<td role="gridcell">
				<ul class="botonera botonera--s">
					<li>
						<button class="boton boton--s boton--secundario boton--icono">
							<svg class="icono">
								<use href="#icono-abrir-detalle--lineal"></use>
							</svg>
							<span>Ver detalle</span>
						</button>	
					</li>
					<li>
						<button class="boton boton--s boton--secundario boton--icono">
							<svg class="icono">
								<use href="#icono-edicion-rapida--lineal"></use>
							</svg>
							<span>Editar</span>
						</button>
					</li>	
					<li>
						<button class="boton boton--s boton--secundario boton--icono">
							<svg class="icono">
								<use href="#icono-mas--lineal"></use>
							</svg>
							<span>Agregar</span>
						</button>
					</li>	
					<li>
						<button class="boton boton--s boton--secundario boton--icono">
							<svg class="icono">
								<use href="#icono-borrar--lineal"></use>
							</svg>
							<span>Borrar</span>
						</button>
					</li>	
					<li>
						<div class="desplegable-wrapper">
							<button class="boton boton--s boton--secundario boton--icono" data-menu-trigger data-menu-target="menu-opciones-5" aria-expanded="false">
								<svg class="icono">
									<use href="#icono-mas-opciones--lineal"></use>
								</svg>
								<span>Más opciones</span>
							</button>
							<?php 
								$idDropdown = 'menu-opciones-5';
								include "comp/desplegable-opciones.php"; 
							?>
						</div>
					</li>
				</ul>
			</td>
    </tr>
		
    <tr role="row" aria-level="4" aria-posinset="1" aria-setsize="2" aria-expanded="false">
      <td role="gridcell">
				<div class="cell-title-line">
					<span class="treegrid-expando"></span>
					<input type="checkbox" class="form-checkbox">
					<span class="cell-main-content">Sub-Sub-Sub-ítem 1 con tremendo título así re largo mal que llegue a tres líneas</span>
				</div>
			</td>
			<td role="gridcell">
				<span class="tag-figma">
					<span class="dot"></span>
					<span>Estado</span>
				</span>
			</td>
      <td role="gridcell">
				<span class="cell-main-content">Contenido texto un poco más largo que...</span>
			</td>
      <td role="gridcell">
				<a class="enlace" href="#" target="_blank" rel="noopener noreferrer">
					<span>Enlace</span>
					<svg class="icono icono--s">
						<use href="#icono-enlace-externo--lineal"></use>
					</svg>
				</a>
			</td>
			<td role="gridcell">
				<ul class="botonera botonera--s">
					<li>
						<button class="boton boton--s boton--secundario boton--icono">
							<svg class="icono">
								<use href="#icono-abrir-detalle--lineal"></use>
							</svg>
							<span>Ver detalle</span>
						</button>	
					</li>
					<li>
						<button class="boton boton--s boton--secundario boton--icono">
							<svg class="icono">
								<use href="#icono-edicion-rapida--lineal"></use>
							</svg>
							<span>Editar</span>
						</button>
					</li>	
					<li>
						<button class="boton boton--s boton--secundario boton--icono">
							<svg class="icono">
								<use href="#icono-mas--lineal"></use>
							</svg>
							<span>Agregar</span>
						</button>
					</li>	
					<li>
						<button class="boton boton--s boton--secundario boton--icono">
							<svg class="icono">
								<use href="#icono-borrar--lineal"></use>
							</svg>
							<span>Borrar</span>
						</button>
					</li>	
					<li>
						<div class="desplegable-wrapper">
							<button class="boton boton--s boton--secundario boton--icono" data-menu-trigger data-menu-target="menu-opciones-6" aria-expanded="false">
								<svg class="icono">
									<use href="#icono-mas-opciones--lineal"></use>
								</svg>
								<span>Más opciones</span>
							</button>
							<?php 
								$idDropdown = 'menu-opciones-6';
								include "comp/desplegable-opciones.php"; 
							?>
						</div>
					</li>
				</ul>
			</td>
    </tr>
		
    <tr role="row" aria-level="4" aria-posinset="2" aria-setsize="2" aria-expanded="true">
      <td role="gridcell">
				<div class="cell-title-line">
					<span class="treegrid-expando"></span>
					<input type="checkbox" class="form-checkbox">
					<span class="cell-main-content">Sub-Sub-Sub-ítem 1 con tremendo título así re largo mal que llegue a tres líneas</span>
				</div>
				<div class="cell-details">
					<span class="details-label">Etiqueta:</span>
					<span class="details-value">Contenido texto un poco más largo que llegue al segundo renglón</span>
				</div>
			</td>
			<td role="gridcell">
				<div class="cell-content">
					<span class="tag-figma">
						<span class="dot"></span>
						<span>Estado</span>
					</span>
					<div class="cell-details">
						<span class="details-label">Etiqueta:</span>
						<span class="details-value">Texto corto pero no tan corto, pero si</span>
					</div>
				</div>
			</td>
      <td role="gridcell">
				<div class="cell-content">
					<span class="cell-main-content">Contenido texto un poco más largo que...</span>
					<div class="cell-details">
						<span class="details-label">Etiqueta:</span>
						<span class="details-value">Contenido texto un poco...</span>
					</div>
				</div>
			</td>
      <td role="gridcell">
				<div class="cell-content">
					<a class="enlace" href="#" target="_blank" rel="noopener noreferrer">
						<span>Enlace</span>
						<svg class="icono icono--s">
							<use href="#icono-enlace-externo--lineal"></use>
						</svg>
					</a>
					<div class="cell-details">
						<span class="details-label">Etiqueta:</span>
						<span class="details-value">Contenido texto un poco más largo que llegue al segundo renglón</span>
					</div>
				</div>
			</td>
			<td role="gridcell">
				<ul class="botonera botonera--s">
					<li>
						<button class="boton boton--s boton--secundario boton--icono">
							<svg class="icono">
								<use href="#icono-abrir-detalle--lineal"></use>
							</svg>
							<span>Ver detalle</span>
						</button>	
					</li>
					<li>
						<button class="boton boton--s boton--secundario boton--icono">
							<svg class="icono">
								<use href="#icono-edicion-rapida--lineal"></use>
							</svg>
							<span>Editar</span>
						</button>
					</li>	
					<li>
						<button class="boton boton--s boton--secundario boton--icono">
							<svg class="icono">
								<use href="#icono-mas--lineal"></use>
							</svg>
							<span>Agregar</span>
						</button>
					</li>	
					<li>
						<button class="boton boton--s boton--secundario boton--icono">
							<svg class="icono">
								<use href="#icono-borrar--lineal"></use>
							</svg>
							<span>Borrar</span>
						</button>
					</li>	
					<li>
						<div class="desplegable-wrapper">
							<button class="boton boton--s boton--secundario boton--icono" data-menu-trigger data-menu-target="menu-opciones-7" aria-expanded="false">
								<svg class="icono">
									<use href="#icono-mas-opciones--lineal"></use>
								</svg>
								<span>Más opciones</span>
							</button>
							<?php 
								$idDropdown = 'menu-opciones-7';
								include "comp/desplegable-opciones.php"; 
							?>
						</div>
					</li>
				</ul>
			</td>
    </tr>
		
    <tr role="row" aria-level="5" aria-posinset="1" aria-setsize="2">
      <td role="gridcell">
				<div class="cell-title-line">
					<span class="treegrid-expando"></span>
					<input type="checkbox" class="form-checkbox">
					<span class="cell-main-content">Sub-Sub-Sub-Sub-ítem 1 con tremendo título así re largo mal que llegue a tres líneas</span>
				</div>
			</td>
			<td role="gridcell">
				<span class="tag-figma">
					<span class="dot"></span>
					<span>Estado</span>
				</span>
			</td>
      <td role="gridcell">
				<span class="cell-main-content">Contenido texto un poco más largo que...</span>
			</td>
      <td role="gridcell">
				<a class="enlace" href="#" target="_blank" rel="noopener noreferrer">
					<span>Enlace</span>
					<svg class="icono icono--s">
						<use href="#icono-enlace-externo--lineal"></use>
					</svg>
				</a>
			</td>
			<td role="gridcell">
				<ul class="botonera botonera--s">
					<li>
						<button class="boton boton--s boton--secundario boton--icono">
							<svg class="icono">
								<use href="#icono-abrir-detalle--lineal"></use>
							</svg>
							<span>Ver detalle</span>
						</button>	
					</li>
					<li>
						<button class="boton boton--s boton--secundario boton--icono">
							<svg class="icono">
								<use href="#icono-edicion-rapida--lineal"></use>
							</svg>
							<span>Editar</span>
						</button>
					</li>	
					<li>
						<button class="boton boton--s boton--secundario boton--icono">
							<svg class="icono">
								<use href="#icono-mas--lineal"></use>
							</svg>
							<span>Agregar</span>
						</button>
					</li>	
					<li>
						<button class="boton boton--s boton--secundario boton--icono">
							<svg class="icono">
								<use href="#icono-borrar--lineal"></use>
							</svg>
							<span>Borrar</span>
						</button>
					</li>	
					<li>
						<div class="desplegable-wrapper">
							<button class="boton boton--s boton--secundario boton--icono" data-menu-trigger data-menu-target="menu-opciones-8" aria-expanded="false">
								<svg class="icono">
									<use href="#icono-mas-opciones--lineal"></use>
								</svg>
								<span>Más opciones</span>
							</button>
							<?php 
								$idDropdown = 'menu-opciones-8';
								include "comp/desplegable-opciones.php"; 
							?>
						</div>
					</li>
				</ul>
			</td>
    </tr>
		
    <tr role="row" aria-level="5" aria-posinset="2" aria-setsize="2">
      <td role="gridcell">
				<div class="cell-title-line">
					<span class="treegrid-expando"></span>
					<input type="checkbox" class="form-checkbox">
					<span class="cell-main-content">Sub-Sub-Sub-Sub-ítem 1 con tremendo título así re largo mal que llegue a tres líneas</span>
				</div>
				<div class="cell-details">
					<span class="details-label">Etiqueta:</span>
					<span class="details-value">Contenido texto un poco más largo que llegue al segundo renglón</span>
				</div>
			</td>
			<td role="gridcell">
				<div class="cell-content">
					<span class="tag-figma">
						<span class="dot"></span>
						<span>Estado</span>
					</span>
					<div class="cell-details">
						<span class="details-label">Etiqueta:</span>
						<span class="details-value">Texto corto pero no tan corto, pero si</span>
					</div>
				</div>
			</td>
      <td role="gridcell">
				<div class="cell-content">
					<span class="cell-main-content">Contenido texto un poco...</span>
					<div class="cell-details">
						<span class="details-label">Etiqueta:</span>
						<span class="details-value">Contenido texto un poco...</span>
					</div>
				</div>
			</td>
      <td role="gridcell">
				<div class="cell-content">
					<a class="enlace" href="#" target="_blank" rel="noopener noreferrer">
						<span>Enlace</span>
						<svg class="icono icono--s">
							<use href="#icono-enlace-externo--lineal"></use>
						</svg>
					</a>
					<div class="cell-details">
						<span class="details-label">Etiqueta:</span>
						<span class="details-value">Contenido texto un poco más largo que llegue al segundo renglón</span>
					</div>
				</div>
			</td>
			<td role="gridcell">
				<ul class="botonera botonera--s">
					<li>
						<button class="boton boton--s boton--secundario boton--icono">
							<svg class="icono">
								<use href="#icono-abrir-detalle--lineal"></use>
							</svg>
							<span>Ver detalle</span>
						</button>	
					</li>
					<li>
						<button class="boton boton--s boton--secundario boton--icono">
							<svg class="icono">
								<use href="#icono-edicion-rapida--lineal"></use>
							</svg>
							<span>Editar</span>
						</button>
					</li>	
					<li>
						<button class="boton boton--s boton--secundario boton--icono">
							<svg class="icono">
								<use href="#icono-mas--lineal"></use>
							</svg>
							<span>Agregar</span>
						</button>
					</li>	
					<li>
						<button class="boton boton--s boton--secundario boton--icono">
							<svg class="icono">
								<use href="#icono-borrar--lineal"></use>
							</svg>
							<span>Borrar</span>
						</button>
					</li>	
					<li>
						<div class="desplegable-wrapper">
							<button class="boton boton--s boton--secundario boton--icono" data-menu-trigger data-menu-target="menu-opciones-9" aria-expanded="false">
								<svg class="icono">
									<use href="#icono-mas-opciones--lineal"></use>
								</svg>
								<span>Más opciones</span>
							</button>
							<?php 
								$idDropdown = 'menu-opciones-9';
								include "comp/desplegable-opciones.php"; 
							?>
						</div>
					</li>
				</ul>
			</td>
    </tr>
		
		<tr role="row" aria-level="1" aria-posinset="2" aria-setsize="3" aria-expanded="false">
      <td role="gridcell">
				<div class="cell-title-line">
					<span class="treegrid-expando"></span>
					<input type="checkbox" class="form-checkbox">
					<span class="cell-main-content">Ítem 2 con tremendo título así re largo mal que llegue a dos renglones</span>
				</div>
			</td>
			<td role="gridcell">
				<span class="tag-figma">
					<span class="dot"></span>
					<span>Estado</span>
				</span>
			</td>
      <td role="gridcell">
				<span class="cell-main-content">Contenido texto un poco más largo que...</span>
			</td>
      <td role="gridcell">
				<a class="enlace" href="#" target="_blank" rel="noopener noreferrer">
					<span>Enlace</span>
					<svg class="icono icono--s">
						<use href="#icono-enlace-externo--lineal"></use>
					</svg>
				</a>
			</td>
			<td role="gridcell">
				<ul class="botonera botonera--s">
					<li>
						<button class="boton boton--s boton--secundario boton--icono">
							<svg class="icono">
								<use href="#icono-abrir-detalle--lineal"></use>
							</svg>
							<span>Ver detalle</span>
						</button>	
					</li>
					<li>
						<button class="boton boton--s boton--secundario boton--icono">
							<svg class="icono">
								<use href="#icono-edicion-rapida--lineal"></use>
							</svg>
							<span>Editar</span>
						</button>
					</li>	
					<li>
						<button class="boton boton--s boton--secundario boton--icono">
							<svg class="icono">
								<use href="#icono-mas--lineal"></use>
							</svg>
							<span>Agregar</span>
						</button>
					</li>	
					<li>
						<button class="boton boton--s boton--secundario boton--icono">
							<svg class="icono">
								<use href="#icono-borrar--lineal"></use>
							</svg>
							<span>Borrar</span>
						</button>
					</li>	
					<li>
						<div class="desplegable-wrapper">
							<button class="boton boton--s boton--secundario boton--icono" data-menu-trigger data-menu-target="menu-opciones-10" aria-expanded="false">
								<svg class="icono">
									<use href="#icono-mas-opciones--lineal"></use>
								</svg>
								<span>Más opciones</span>
							</button>
							<?php 
								$idDropdown = 'menu-opciones-10';
								include "comp/desplegable-opciones.php"; 
							?>
						</div>
					</li>
				</ul>
			</td>
   	</tr>
	
	  <tr role="row" aria-level="1" aria-posinset="3" aria-setsize="3">
      <td role="gridcell">
				<div class="cell-title-line">
					<span class="treegrid-expando"></span>
					<input type="checkbox" class="form-checkbox">
					<span class="cell-main-content">Ítem 3 sin hijos. Lorem ipsum dolor sit amet.</span>
				</div>
				<div class="cell-details">
					<span class="details-label">Etiqueta:</span>
					<span class="details-value">Contenido texto un poco más largo que llegue al segundo renglón</span>
				</div>
			</td>
			<td role="gridcell">
				<div class="cell-content">
					<span class="tag-figma">
						<span class="dot"></span>
						<span>Estado</span>
					</span>
					<div class="cell-details">
						<span class="details-label">Etiqueta:</span>
						<span class="details-value">Texto corto pero no tan corto, pero si</span>
					</div>
				</div>
			</td>
      <td role="gridcell">
				<div class="cell-content">
					<span class="cell-main-content">Párrafo de texto tamaño SM. Lorem ipsum dolor sit amet, consectetur...</span>
					<div class="cell-details">
						<span class="details-label">Etiqueta:</span>
						<span class="details-value">Contenido texto un poco...</span>
					</div>
				</div>
			</td>
      <td role="gridcell">
				<div class="cell-content">
					<a class="enlace" href="#" target="_blank" rel="noopener noreferrer">
						<span>Enlace</span>
						<svg class="icono icono--s">
							<use href="#icono-enlace-externo--lineal"></use>
						</svg>
					</a>
					<div class="cell-details">
						<span class="details-label">Etiqueta:</span>
						<span class="details-value">Contenido texto un poco más largo que llegue al segundo renglón</span>
					</div>
				</div>
			</td>
			<td role="gridcell">
				<ul class="botonera botonera--s">
					<li>
						<button class="boton boton--s boton--secundario boton--icono">
							<svg class="icono">
								<use href="#icono-abrir-detalle--lineal"></use>
							</svg>
							<span>Ver detalle</span>
						</button>	
					</li>
					<li>
						<button class="boton boton--s boton--secundario boton--icono">
							<svg class="icono">
								<use href="#icono-edicion-rapida--lineal"></use>
							</svg>
							<span>Editar</span>
						</button>
					</li>	
					<li>
						<button class="boton boton--s boton--secundario boton--icono">
							<svg class="icono">
								<use href="#icono-mas--lineal"></use>
							</svg>
							<span>Agregar</span>
						</button>
					</li>	
					<li>
						<button class="boton boton--s boton--secundario boton--icono">
							<svg class="icono">
								<use href="#icono-borrar--lineal"></use>
							</svg>
							<span>Borrar</span>
						</button>
					</li>	
					<li>
						<div class="desplegable-wrapper">
							<button class="boton boton--s boton--secundario boton--icono" data-menu-trigger data-menu-target="menu-opciones-11" aria-expanded="false">
								<svg class="icono">
									<use href="#icono-mas-opciones--lineal"></use>
								</svg>
								<span>Más opciones</span>
							</button>
							<?php 
								$idDropdown = 'menu-opciones-11';
								include "comp/desplegable-opciones.php"; 
							?>
						</div>
					</li>
				</ul>
			</td>
    </tr>
	
  </tbody>
</table>
</div>

<style>
/* ============================================================
   TREEGRID — Hoja de estilos única
   Sistema de Diseño AGESIC
   ============================================================ */

/* --- 1. Estructura base de la tabla --- */

#treegrid {
  width: 100%;
  border-collapse: collapse;
  table-layout: fixed;
  font-family: var(--tipo-familia-base);
}

/* Anchos de columna */
#treegrid-col1 { width: 34%; }
#treegrid-col2 { width: 10%; }
#treegrid-col3 { width: 20%; }
#treegrid-col4 { width: 12%; }
#treegrid-col5 { width: 24%; }

/* --- 2. Filas --- */

#treegrid tr {
  display: table-row;
  cursor: default;
  border-bottom: 1px solid var(--neutro-100, #eeeeee);
}

/* Ocultar filas colapsadas (manejado por JS) */
#treegrid tr.hidden {
  display: none;
}

/* --- 3. Cabezal --- */

#treegrid th {
  text-align: left;
  font-size: 12px;                                   /* parrafo/s = 12px */
  font-weight: 600;                                  /* semibold */
  color: var(--neutro-700, #575757);
  background-color: var(--primario-claro, #e9ecf4);  /* azul-50 institucional */
  border-bottom: 2px solid var(--neutro-200, #c2c2c2);
  padding: var(--espaciado-8, 8px) var(--espaciado-16, 16px);
  overflow: hidden;
  white-space: nowrap;
}

/* Contenedor flex del cabezal (antes estaba como estilo inline) */
.treegrid-th-content {
  display: flex;
  align-items: center;
  gap: 6px;
}

.treegrid-th-content--end {
  display: flex;
  align-items: center;
  justify-content: flex-end;
  gap: 8px;
}

.treegrid-th-content .form-checkbox,
#treegrid th .form-checkbox {
  margin: 0;
  flex-shrink: 0;
}

/* --- 4. Celdas del cuerpo --- */

#treegrid td {
  vertical-align: top;
  padding: var(--espaciado-8, 8px) var(--espaciado-16, 16px);  /* Figma: top/bottom=8 left/right=16 */
  border-bottom: 1px solid var(--neutro-100, #d6d6d6);
  overflow: hidden;
  font-size: 14px;                                              /* parrafo/m = 14px */
  color: var(--neutro-900, #2a2a2a);
  line-height: 1.4;
}

/* Columnas que no son la primera: sin padding-left extra (ya viene del td base) */
#treegrid tr > td:not(:first-child),
#treegrid tr > th:not(:first-child) {
  padding-left: var(--espaciado-16, 16px);
}

/* --- 5. Indentación por nivel (jerarquía del árbol) --- */
/* Figma: hijo-1 paddingLeft=VariableID:5:2 (2px), pero el subitem paddingLeft=VariableID:5:36 (32px) */
/* El indent real es el contenedor-subitem con paddingLeft acumulado */

#treegrid tr[aria-level="1"] > td:first-child { padding-left: var(--espaciado-16, 16px); }
#treegrid tr[aria-level="2"] > td:first-child { padding-left: var(--espaciado-32, 32px); }
#treegrid tr[aria-level="3"] > td:first-child { padding-left: calc(var(--espaciado-32, 32px) * 2); }
#treegrid tr[aria-level="4"] > td:first-child { padding-left: calc(var(--espaciado-32, 32px) * 3); }
#treegrid tr[aria-level="5"] > td:first-child { padding-left: calc(var(--espaciado-32, 32px) * 4); }

/* Primer cabezal: alineado con nivel 1 */
#treegrid tr > th:first-child {
  padding-left: var(--espaciado-16, 16px);
}

/* --- 6. Icono de expansión/colapso (.treegrid-expando) --- */

.treegrid-expando {
  display: inline-block;
  width: 12px;
  height: 12px;
  flex-shrink: 0;
  margin-top: 4px;
  background-repeat: no-repeat;
  background-position: center;
  transition: transform 0.25s ease;
  transform-origin: 6px 6px;
  cursor: pointer;
}

/* Filas con hijos: mostrar flecha */
#treegrid tr[aria-expanded] .treegrid-expando {
  background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='12' height='12'%3E%3Cpolygon fill='%231b2f6c' points='2,0 2,10 10,5'%3E%3C/polygon%3E%3C/svg%3E");
}

/* Fila expandida: rotar flecha 90° */
#treegrid tr[aria-expanded="true"] .treegrid-expando {
  transform: rotate(90deg);
}

/* Filas sin hijos: placeholder invisible (mantiene alineación) */
#treegrid tr:not([aria-expanded]) .treegrid-expando {
  visibility: hidden;
}

/* --- 7. Contenido de las celdas --- */

/* Línea de título (flecha + checkbox + texto) */
.cell-title-line {
  display: flex;
  align-items: flex-start;
  gap: 8px;
  width: 100%;
}

.cell-title-line .form-checkbox {
  margin: 0;
  margin-top: 3px;
  flex-shrink: 0;
  cursor: pointer;
}

/* Texto principal de la celda (hereda font-size y color del td) */
.cell-main-content {
  font-weight: 400;
  flex-grow: 1;
  line-height: 1.4;
}

/* Contenedor flex para celdas con título + detalles */
.cell-content {
  display: flex;
  flex-direction: column;
  gap: 4px;
}

/* Texto de detalles secundario (debajo del título) */
.cell-details {
  margin-top: 4px;
  font-size: 12px;
  color: var(--neutro-500, #666666);
  line-height: 1.4;
}

/* Alinear los detalles de la primera columna bajo el texto (compensar flecha + gap + checkbox + gap) */
/* Figma: expando 12px + gap 8px + checkbox 16px + gap 8px = 44px */
#treegrid td:first-child .cell-details {
  margin-left: 44px;
}

.details-label {
  font-weight: 600;
  color: var(--neutro-600, #555555);
  margin-right: 4px;
}

.details-value {
  color: var(--neutro-500, #666666);
}

/* --- 8. Tag de estado (pill de estado) ---
   Usa las clases .tag-estado y .tag-estado__dot del componente tag-estado del sistema.
   Equivalente a la variante "tipo=activo-completado" del COMPONENT_SET "tag-estado" (id: 2432:73)
*/
.tag-estado {
  display: inline-flex;
  align-items: center;
  gap: var(--espaciado-4, 4px);
  padding: var(--espaciado-2, 2px) var(--espaciado-8, 8px);
  background-color: var(--funcional-exito-claro, #e9f5ec);
  color: var(--funcional-exito-medio_oscuro, #155723);
  border-radius: var(--borde-radio-full, 9999px);
  font-size: 12px;
  font-weight: 500;
  white-space: nowrap;
}

.tag-estado .tag-estado__dot {
  width: 6px;
  height: 6px;
  background-color: currentColor;
  border-radius: 50%;
  flex-shrink: 0;
}

/* Alias retrocompatible (se mantendrá mientras se migra de .tag-figma a .tag-estado) */
.tag-figma { display: inline-flex; align-items: center; gap: 4px; padding: 2px 8px;
  background-color: var(--funcional-exito-claro, #e9f5ec); color: var(--funcional-exito-medio_oscuro, #155723);
  border-radius: 9999px; font-size: 12px; font-weight: 500; white-space: nowrap; }
.tag-figma .dot { width: 6px; height: 6px; background-color: var(--funcional-exito-acento, #279e3f);
  border-radius: 50%; display: inline-block; flex-shrink: 0; }

/* --- 9. Estados de foco (accesibilidad teclado) --- */

#treegrid tr:focus,
#treegrid td:focus {
  outline: 2px solid var(--primario, hsl(216, 94%, 50%));
  outline-offset: -2px;
}

#treegrid a:focus {
  outline: 2px solid var(--primario, hsl(216, 94%, 50%));
  border-bottom: none;
}

/* --- 10. Borde de grupo (línea azul derecha) — VariableID:543:42 = primario-principal #25418e --- */

/* Fila raíz expandida: borde azul en el primer td (izquierda) */
#treegrid tr[aria-level="1"][aria-expanded="true"] > td:first-child {
  border-left: 4px solid var(--primario-principal, #25418e);
}

/* Filas anidadas: borde azul en el primer td (izquierda) */
#treegrid tr[aria-level="2"] > td:first-child,
#treegrid tr[aria-level="3"] > td:first-child,
#treegrid tr[aria-level="4"] > td:first-child,
#treegrid tr[aria-level="5"] > td:first-child {
  border-left: 4px solid var(--primario-principal, #25418e);
}

/* --- 11. Fondos por nivel (Figma) ---
   VariableID:543:429 = neutro-0 (#ffffff) → filas default cerradas y cabezal hover
   VariableID:734:561 = primario-mas-claro (#f4f6fa, azul-25) → filas hijo
   VariableID:734:383 = primario-claro (#e9ecf4, azul-50) → cabezal
*/

/* Nivel 1 (default): fondo blanco */
#treegrid tr[aria-level="1"][aria-expanded="false"] > td { background-color: var(--neutro-0, #ffffff); }
#treegrid tr[aria-level="1"][aria-expanded="true"]  > td { background-color: var(--neutro-0, #ffffff); }
#treegrid tr[aria-level="1"]:not([aria-expanded])   > td { background-color: var(--neutro-0, #ffffff); }

/* Nivel 2 (hijo-1): fondo azul-25 claro */
#treegrid tr[aria-level="2"][aria-expanded="false"] > td { background-color: var(--primario-mas-claro, #f4f6fa); }
#treegrid tr[aria-level="2"][aria-expanded="true"]  > td { background-color: var(--primario-mas-claro, #f4f6fa); }
#treegrid tr[aria-level="2"]:not([aria-expanded])   > td { background-color: var(--primario-mas-claro, #f4f6fa); }

/* Nivel 3 (hijo-2): fondo blanco */
#treegrid tr[aria-level="3"][aria-expanded="false"] > td { background-color: var(--neutro-0, #ffffff); }
#treegrid tr[aria-level="3"][aria-expanded="true"]  > td { background-color: var(--neutro-0, #ffffff); }
#treegrid tr[aria-level="3"]:not([aria-expanded])   > td { background-color: var(--neutro-0, #ffffff); }

/* Nivel 4 (hijo-3): fondo azul-25 claro */
#treegrid tr[aria-level="4"][aria-expanded="false"] > td { background-color: var(--primario-mas-claro, #f4f6fa); }
#treegrid tr[aria-level="4"][aria-expanded="true"]  > td { background-color: var(--primario-mas-claro, #f4f6fa); }
#treegrid tr[aria-level="4"]:not([aria-expanded])   > td { background-color: var(--primario-mas-claro, #f4f6fa); }

/* Nivel 5: fondo blanco */
#treegrid tr[aria-level="5"] > td { background-color: var(--neutro-0, #ffffff); }

/* --- 12. Hover por nivel (leve oscurecimiento sobre el fondo del nivel) --- */

#treegrid tr[aria-level="1"]:hover > td { background-color: var(--primario-mas-claro, #f4f6fa); }

#treegrid tr[aria-level="2"]:hover > td { background-color: var(--primario-claro, #e9ecf4); }

#treegrid tr[aria-level="3"]:hover > td { background-color: var(--primario-mas-claro, #f4f6fa); }

#treegrid tr[aria-level="4"]:hover > td { background-color: var(--primario-claro, #e9ecf4); }

#treegrid tr[aria-level="5"]:hover > td { background-color: var(--primario-mas-claro, #f4f6fa); }

/* --- 13. Wrapper de la tabla --- */
.table-wrap p {
  display: inline;
}

</style>








<script>
	'use strict';
function TreeGrid(treegridElem, doAllowRowFocus, doStartRowFocus) {
  function initAttributes() {
    // Make sure focusable elements are not in the tab order
    // They will be added back in for the active row
    setTabIndexOfFocusableElements(treegridElem, -1);

    // Add tabindex="0" to first row, "-1" to other rows
    // We will use the roving tabindex method since aria-activedescendant
    var rows = getAllRows();
    var index = rows.length;
    var startRowIndex = doStartRowFocus ? 0 : -1;

    while (index--) {
      if (doAllowRowFocus) {
        rows[index].tabIndex = index === startRowIndex ? 0 : -1;
      } else {
        setTabIndexForCellsInRow(rows[index], -1);
        moveAriaExpandedToFirstCell(rows[index]);
      }
    }

    if (doStartRowFocus) {
      return;
    }

    // Start with cell focus
    var firstCell = getNavigableCols(rows[0])[0];
    setTabIndexForCell(firstCell);
  }

  function setTabIndexForCell(cell, tabIndex) {
    var focusable = getFocusableElements(cell)[0] || cell;
    focusable.tabIndex = tabIndex;
  }

  function setTabIndexForCellsInRow(row, tabIndex) {
    var cells = getNavigableCols(row);
    var cellIndex = cells.length;
    while (cellIndex--) {
      setTabIndexForCell(cells[cellIndex], tabIndex);
    }
  }

  function getAllRows() {
    var nodeList = treegridElem.querySelectorAll('tbody > tr');
    return Array.prototype.slice.call(nodeList);
  }

  function getFocusableElements(root) {
    // textarea not supported as a cell widget as it's multiple lines
    // and needs up/down keys
    // These should all be descendants of a cell
    var nodeList = root.querySelectorAll('a,button,input,td>[tabindex]');
    return Array.prototype.slice.call(nodeList);
  }

  function setTabIndexOfFocusableElements(root, tabIndex) {
    var focusableElements = getFocusableElements(root);
    var index = focusableElements.length;
    while (index--) {
      focusableElements[index].tabIndex = tabIndex;
    }
  }

  function getAllNavigableRows() {
    var nodeList = treegridElem.querySelectorAll(
      'tbody > tr:not([class~="hidden"])'
    );
    // Convert to array so that we can use array methods on it
    return Array.prototype.slice.call(nodeList);
  }

  function getNavigableCols(currentRow) {
    var nodeList = currentRow.getElementsByTagName('td');
    return Array.prototype.slice.call(nodeList);
  }

  function restrictIndex(index, numItems) {
    if (index < 0) {
      return 0;
    }
    return index >= numItems ? index - 1 : index;
  }

  function focus(elem) {
    elem.tabIndex = 0; // Ensure focusable
    elem.focus();
  }

  function focusCell(cell) {
    // Check for focusable child such as link or textbox
    // and use that if available
    var focusableChildren = getFocusableElements(cell);
    focus(focusableChildren[0] || cell);
  }

  // Restore tabIndex to what it should be when focus switches from
  // one treegrid item to another
  function onFocusIn(event) {
    var newTreeGridFocus =
      event.target !== window &&
      treegridElem.contains(event.target) &&
      event.target;

    // The last row we considered focused
    var oldCurrentRow = enableTabbingInActiveRowDescendants.tabbingRow;
    if (oldCurrentRow) {
      enableTabbingInActiveRowDescendants(false, oldCurrentRow);
    }
    if (
      doAllowRowFocus &&
      onFocusIn.prevTreeGridFocus &&
      onFocusIn.prevTreeGridFocus.localName === 'td'
    ) {
      // Was focused on td, remove tabIndex so that it's not focused on click
      onFocusIn.prevTreeGridFocus.removeAttribute('tabindex');
    }

    if (newTreeGridFocus) {
      // Stayed in treegrid
      if (oldCurrentRow) {
        // There will be a different current row that will be
        // the tabbable one
        oldCurrentRow.tabIndex = -1;
      }

      // The new row
      var currentRow = getRowWithFocus();
      if (currentRow) {
        currentRow.tabIndex = 0;
        // Items within current row are also tabbable
        enableTabbingInActiveRowDescendants(true, currentRow);
      }
    }

    onFocusIn.prevTreeGridFocus = newTreeGridFocus;
  }

  // Set whether interactive elements within a row are tabbable
  function enableTabbingInActiveRowDescendants(isTabbingOn, row) {
    if (row) {
      setTabIndexOfFocusableElements(row, isTabbingOn ? 0 : -1);
      if (isTabbingOn) {
        enableTabbingInActiveRowDescendants.tabbingRow = row;
      } else {
        if (enableTabbingInActiveRowDescendants.tabbingRow === row) {
          enableTabbingInActiveRowDescendants.tabbingRow = null;
        }
      }
    }
  }

  // The row with focus is the row that either has focus or an element
  // inside of it has focus
  function getRowWithFocus() {
    return getContainingRow(document.activeElement);
  }

  function getContainingRow(start) {
    var possibleRow = start;
    if (treegridElem.contains(possibleRow)) {
      while (possibleRow !== treegridElem) {
        if (possibleRow.localName === 'tr') {
          return possibleRow;
        }
        possibleRow = possibleRow.parentElement;
      }
    }
  }

  function isRowFocused() {
    return getRowWithFocus() === document.activeElement;
  }

  // Note: contenteditable not currently supported
  function isEditableFocused() {
    var focusedElem = document.activeElement;
    return focusedElem.localName === 'input';
  }

  function getColWithFocus(currentRow) {
    if (currentRow) {
      var possibleCol = document.activeElement;
      if (currentRow.contains(possibleCol)) {
        while (possibleCol !== currentRow) {
          if (possibleCol.localName === 'td') {
            return possibleCol;
          }
          possibleCol = possibleCol.parentElement;
        }
      }
    }
  }

  function getLevel(row) {
    return row && parseInt(row.getAttribute('aria-level'));
  }

  // Move backwards (direction = -1) or forwards (direction = 1)
  // If we also need to move down/up a level, requireLevelChange = true
  // When
  function moveByRow(direction, requireLevelChange) {
    var currentRow = getRowWithFocus();
    var requiredLevel =
      requireLevelChange && currentRow && getLevel(currentRow) + direction;
    var rows = getAllNavigableRows();
    var numRows = rows.length;
    var rowIndex = currentRow ? rows.indexOf(currentRow) : -1;
    // When moving down a level, only allow moving to next row as the
    // first child will never be farther than that
    var maxDistance = requireLevelChange && direction === 1 ? 1 : NaN;

    // Move in direction until required level is found
    do {
      if (maxDistance-- === 0) {
        return; // Failed to find required level, return without focus change
      }
      rowIndex = restrictIndex(rowIndex + direction, numRows);
    } while (requiredLevel && requiredLevel !== getLevel(rows[rowIndex]));

    if (!focusSameColInDifferentRow(currentRow, rows[rowIndex])) {
      focus(rows[rowIndex]);
    }
  }

  function focusSameColInDifferentRow(fromRow, toRow) {
    var currentCol = getColWithFocus(fromRow);
    if (!currentCol) {
      return;
    }

    var fromCols = getNavigableCols(fromRow);
    var currentColIndex = fromCols.indexOf(currentCol);

    if (currentColIndex < 0) {
      return;
    }

    var toCols = getNavigableCols(toRow);
    // Focus the first focusable element inside the <td>
    focusCell(toCols[currentColIndex]);
    return true;
  }

  function moveToExtreme(direction) {
    var currentRow = getRowWithFocus();
    if (!currentRow) {
      return;
    }
    var currentCol = getColWithFocus(currentRow);
    if (currentCol) {
      moveToExtremeCol(direction, currentRow);
    } else {
      // Move to first/last row
      moveToExtremeRow(direction);
    }
  }

  function moveByCol(direction) {
    var currentRow = getRowWithFocus();
    if (!currentRow) {
      return;
    }
    var cols = getNavigableCols(currentRow);
    var numCols = cols.length;
    var currentCol = getColWithFocus(currentRow);
    var currentColIndex = cols.indexOf(currentCol);
    // First right arrow moves to first column
    var newColIndex =
      currentCol || direction < 0 ? currentColIndex + direction : 0;
    // Moving past beginning focuses row
    if (doAllowRowFocus && newColIndex < 0) {
      focus(currentRow);
      return;
    }
    newColIndex = restrictIndex(newColIndex, numCols);
    focusCell(cols[newColIndex]);
  }

  function moveToExtremeCol(direction, currentRow) {
    // Move to first/last col
    var cols = getNavigableCols(currentRow);
    var desiredColIndex = direction < 0 ? 0 : cols.length - 1;
    focusCell(cols[desiredColIndex]);
  }

  function moveToExtremeRow(direction) {
    var rows = getAllNavigableRows();
    var newRow = rows[direction > 0 ? rows.length - 1 : 0];
    if (!focusSameColInDifferentRow(getRowWithFocus(), newRow)) {
      focus(newRow);
    }
  }

  function doPrimaryAction() {
    var currentRow = getRowWithFocus();
    if (!currentRow) {
      return;
    }

    // Si el foco está en la fila, disparar evento personalizado
    if (currentRow === document.activeElement) {
      currentRow.dispatchEvent(new CustomEvent('treegrid:rowactivate', {
        bubbles: true,
        detail: { row: currentRow }
      }));
      return;
    }

    // Si el foco está en la primera columna, expandir/colapsar
    toggleExpanded(currentRow);
  }

  function toggleExpanded(row) {
    var cols = getNavigableCols(row);
    var currentCol = getColWithFocus(row);
    if (currentCol === cols[0] && isExpandable(row)) {
      changeExpanded(!isExpanded(row), row);
    }
  }

  function changeExpanded(doExpand, row) {
    var currentRow = row || getRowWithFocus();
    if (!currentRow) {
      return;
    }
    var currentLevel = getLevel(currentRow);
    var rows = getAllRows();
    var currentRowIndex = rows.indexOf(currentRow);
    var didChange;
    var doExpandLevel = [];
    doExpandLevel[currentLevel + 1] = doExpand;

    while (++currentRowIndex < rows.length) {
      var nextRow = rows[currentRowIndex];
      var rowLevel = getLevel(nextRow);
      if (rowLevel <= currentLevel) {
        break; // Next row is not a level down from current row
      }
      // Only expand the next level if this level is expanded
      // and previous level is expanded
      doExpandLevel[rowLevel + 1] =
        doExpandLevel[rowLevel] && isExpanded(nextRow);
      var willHideRow = !doExpandLevel[rowLevel];
      var isRowHidden = nextRow.classList.contains('hidden');

      if (willHideRow !== isRowHidden) {
        if (willHideRow) {
          nextRow.classList.add('hidden');
        } else {
          nextRow.classList.remove('hidden');
        }
        didChange = true;
      }
    }
    if (didChange) {
      setAriaExpanded(currentRow, doExpand);
      return true;
    }
  }

  // Mirror aria-expanded from the row to the first cell in that row
  // (TBD is this a good idea? How else will screen reader user hear
  // that the cell represents the opportunity to collapse/expand rows?)
  function moveAriaExpandedToFirstCell(row) {
    var expandedValue = row.getAttribute('aria-expanded');
    var firstCell = getNavigableCols(row)[0];
    if (expandedValue) {
      firstCell.setAttribute('aria-expanded', expandedValue);
      row.removeAttribute('aria-expanded');
    }
  }

  function getAriaExpandedElem(row) {
    return doAllowRowFocus ? row : getNavigableCols(row)[0];
  }

  function setAriaExpanded(row, doExpand) {
    var elem = getAriaExpandedElem(row);
    elem.setAttribute('aria-expanded', doExpand);
  }

  function isExpandable(row) {
    var elem = getAriaExpandedElem(row);
    return elem.hasAttribute('aria-expanded');
  }

  function isExpanded(row) {
    var elem = getAriaExpandedElem(row);
    return elem.getAttribute('aria-expanded') === 'true';
  }

  function onKeyDown(event) {
    var ENTER = 13;
    var UP = 38;
    var DOWN = 40;
    var LEFT = 37;
    var RIGHT = 39;
    var HOME = 36;
    var END = 35;
    var CTRL_HOME = -HOME;
    var CTRL_END = -END;

    var numModifiersPressed =
      event.ctrlKey + event.altKey + event.shiftKey + event.metaKey;

    var key = event.keyCode;

    if (numModifiersPressed === 1 && event.ctrlKey) {
      key = -key; // Treat as negative key value when ctrl pressed
    } else if (numModifiersPressed) {
      return;
    }

    switch (key) {
      case DOWN:
        moveByRow(1);
        break;
      case UP:
        moveByRow(-1);
        break;
      case LEFT:
        if (isEditableFocused()) {
          return; // Leave key for editable area
        }
        if (isRowFocused()) {
          changeExpanded(false) || moveByRow(-1, true);
        } else {
          moveByCol(-1);
        }
        break;
      case RIGHT:
        if (isEditableFocused()) {
          return; // Leave key for editable area
        }

        // If row: try to expand
        // If col or can't expand, move column to right
        if (!isRowFocused() || !changeExpanded(true)) {
          moveByCol(1);
        }
        break;
      case CTRL_HOME:
        moveToExtremeRow(-1);
        break;
      case HOME:
        if (isEditableFocused()) {
          return; // Leave key for editable area
        }
        moveToExtreme(-1);
        break;
      case CTRL_END:
        moveToExtremeRow(1);
        break;
      case END:
        if (isEditableFocused()) {
          return; // Leave key for editable area
        }
        moveToExtreme(1);
        break;
      case ENTER:
        doPrimaryAction();
        break;
      default:
        return;
    }

    // Important: don't use key for anything else, such as scrolling
    event.preventDefault();
  }

  // Toggle row expansion if the click is anywhere on the first column cell
  function onClick(event) {
    var target = event.target;
    
    // Ignore clicks on inputs (like checkboxes), buttons, or links
    if (target.localName === 'input' || target.localName === 'button' || target.localName === 'a' || 
        target.closest('button') || target.closest('a') || target.closest('.botonera')) {
      return;
    }
    
    // Traverse up to the cell element in case they clicked a child tag
    while (target && target.localName !== 'td' && target.localName !== 'th') {
      target = target.parentElement;
    }
    
    if (!target || target.localName !== 'td') {
      return;
    }

    var row = getContainingRow(target);
    if (!isExpandable(row)) {
      return;
    }

    // Toggle expansion if they click on the first cell of the row (Title column)
    if (target === row.cells[0]) {
      changeExpanded(!isExpanded(row), row);
    }
  }

  // Double click on row toggles expansion
  function onDoubleClick(event) {
    var row = getContainingRow(event.target);
    if (row) {
      if (isExpandable(row)) {
        changeExpanded(!isExpanded(row), row);
      }
      event.preventDefault();
    }
  }

  initAttributes();
  treegridElem.addEventListener('keydown', onKeyDown);
  treegridElem.addEventListener('click', onClick);
  treegridElem.addEventListener('dblclick', onDoubleClick);
  // Polyfill for focusin necessary for Firefox < 52
  window.addEventListener(
    window.onfocusin ? 'focusin' : 'focus',
    onFocusIn,
    true
  );
}

/* Init Script for TreeGrid */
/* Get an object where each field represents a URL parameter */
function getQuery() {
  if (!getQuery.cached) {
    getQuery.cached = {};
    const queryStr = window.location.search.substring(1);
    const vars = queryStr.split('&');
    for (let i = 0; i < vars.length; i++) {
      const pair = vars[i].split('=');
      // If first entry with this name
      getQuery.cached[pair[0]] = pair[1] && decodeURIComponent(pair[1]);
    }
  }
  return getQuery.cached;
}

function initTreeGrid() {
  var cellParam = getQuery().cell;
  var doAllowRowFocus = cellParam !== 'force';
  var doStartRowFocus = doAllowRowFocus && cellParam !== 'start';
  
  var treegridElem = document.getElementById('treegrid');
  if (treegridElem) {
    TreeGrid(
      treegridElem,
      doAllowRowFocus,
      doStartRowFocus
    );
  }
  
  var choiceElem = document.getElementById(
    'option-cell-focus-' + (cellParam || 'allow')
  );
  if (choiceElem) {
    choiceElem.setAttribute('aria-current', 'true');
  }
}

if (document.readyState === 'loading') {
  document.addEventListener('DOMContentLoaded', initTreeGrid);
} else {
  initTreeGrid();
}

</script>
        

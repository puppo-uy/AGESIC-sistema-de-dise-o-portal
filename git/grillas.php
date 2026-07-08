<?php
  $title = 'Grillas';
  $section = 'estructura';
  $subsection = 'grillas'; 
?>

<?php include "inc/head.php"; ?>

<style>

    code{font-size: 1.125em; background-color: var(--primario-claro) }
    .row > *{background-color: var(--primario-claro)}

</style>    
<div class="app">

	<?php include "comp/header-app.php" ?>

  <div class="layout layout--app">

    <?php include "comp/nav-lateral.php" ?>

    <main id="contenido">
			
			<!-- Breadcrumb -->	
			<?php include "comp/breadcrumb.php"; ?>
			
            <h1><?php echo $title; ?></h1>

            <div class="container">

                <h2>Sistema de grillas (CSS Grid)</h2>

                <p>Este sistema define una grilla responsiva basada en <b>CSS Grid</b>, con soporte para:</p>
                <ul class="lista-texto">
                    <li>Elemento contenedor <code>.container</code></li>
                    <li>Filas <code>.row</code> que agrupan las grillas</li>
                    <li>Columnas mediante:
                        <ul class="lista-texto">
                            <li>Cantidad de columnas por fila <code>.row.row-cols-N</code></li>
                            <li>Anchos específicos <code>col-N</code></li>
                            <li>Variantes responsivas <code>.row-cols-sm-N, .col-md-N, etc.</code></li>
                        </ul>
                </ul>
                <p>El uso de grillas por Grid, es idal para layouts precisos.</p>

                <h3>Elemento contenedor <code>.container</code></h3>

                <p>Define el ancho del contenido de la pantalla</p>

                <div class="container u-mb4" style="background-color: var(--primario-claro); text-align: center"><code>Ejemplo .container</code></div>

                <h3>Fila <code>.row</code></h3>

                <p>La fila funciona como contenedor de columnas</p>

                <ul class="lista-texto">
                    <li>En móviles: 1 columna</li>
                    <li>A partir de <code>sm</code> (768px): 12 columnas</li>
                </ul>

                <div class="row">
                    <div class="col">1/12</div>
                    <div class="col">1/12</div>
                    <div class="col">1/12</div>
                    <div class="col">1/12</div>
                    <div class="col">1/12</div>
                    <div class="col">1/12</div>
                    <div class="col">1/12</div>
                    <div class="col">1/12</div>
                    <div class="col">1/12</div>
                    <div class="col">1/12</div>
                    <div class="col">1/12</div>
                    <div class="col">1/12</div>
                </div>

                <h3 >Control por cantidad de columnas <code>.row.row-cols-</code></h3>

                <p>Controla cuantas columnas tendrá la fila, sin importar cuántos elementos contiene.</div> 

                <p>Ejemplo: <code>.row row-cols-3</code>. A partir de <code>sm</code> (768px), divide la fila en 3 columnas iguales.</p>

                <div class="row">
                    <div class="col">Item 1</div>
                    <div class="col">Item 2</div>
                    <div class="col">Item 3</div>
                    <div class="col">Item 4</div>
                </div>

                <h4>Variaciones responsivas</h4>

                <p>Al ejemplo anterior le incorporamos comportamientos diferentes dependiendo del ancho de la pantalla</p>

                <p>Ejemplo: <code>.row row-cols-1 row-cols-md-3 row-cols-lg-4"</code>. Hasta <code>md</code> divide la fila en una sola columna, a partir de <code>md</code> pasa a 3 columnas, y desde <code>lg</code> a 4 columnas</p>

                <div class="row row-cols-1 row-cols-md-3 row-cols-lg-4">
                    <div class="col">Item 1</div>
                    <div class="col">Item 2</div>
                    <div class="col">Item 3</div>
                    <div class="col">Item 4</div>
                </div>

                <h3 >Columnas con con ancho específico <code>.col-*</code></h3>

                <p>Permite que una columna ocupe un número específico de columnas del grid (12 en total).</p>


                <div class="row">
                    <div class="col-8"><code>.col-8</code> (ocupa 8 columnas)</div>
                    <div class="col-4"><code>.col-4</code> (ocupa 4 columnas)</div>
                </div>

                <p>También se pueden incorporar una o varias columnas sin necesidad de llegar a completar los 12 espacios de la grilla</p>

                <div class="row">
                    <div class="col-3"><code>.col-3</code> (ocupa 3 columnas)</div>
                    <div class="col-5"><code>.col-5</code> (ocupa 5 columnas)</div>
                </div>

                <p>En todos los casos, en móviles las columnas siempre ocupan el 100% de la fila</p>

                <h4>Variaciones responsivas</h4>
                
                <p>También pueden variar los anchos de las columnas dependiendo del ancho de la pantalla</p>

                <div class="row">
                    <div class="col-sm-6 col-lg-4"><code>col-sm-6 col-lg-4</code></div>
                </div>

                <p>Esto significa:

                    <ul class="lista-texto">
                        <li><code>sm:</code>: ocupa 6 columnas (mitad)</li>
                        <li><code>lg:</code>: ocupa 4 columnas (un tercio)</li>
                    </ul>

                </p>

                <h3>Forzar columnas en móviles <code>.row--no-stack</code></h3>

                <p>En una grilla tradicional, en dispositivos móviles todos los elementos se apilan en una sola columna (1fr). Esto es lo esperado en diseño mobile-first para mejorar legibilidad y accesibilidad.<p>

                <p>Sin embargo, hay casos de uso donde se desea mantener múltiples columnas incluso en móviles, por ejemplo:</p>

                <ul>
                    <li>campos de fecha divididos en partes (Día, Mes, Año)</li>
                    <li>formularios con campos cortos que conviene mostrar en línea</li>
                </ul>

                <p>Para esos casos, se provee una clase modificadora en el contenedor <code>.row</code> y es <code>.row--no-stack</code>.<p> 

                <h4>Tamaños de columnas en móviles <code>col-m-*</code></h4>
                <p>Al mismo tiempo, se incluye la posibilidad de controlar el ancho de la columna en tamaños menores a <code>sm</code>. La forma de hacerlo es a través de un class extra <code>code-m-N</code> donde N representa al número de columnas.<p>

                <p>Ejemplo:</p>

                <div class="row row--no-stack">
                    <div class="col-m-4 col-3"><code>col-m-4 col-3</code></div>
                    <div class="col-m-4 col-3"><code>col-m-4 col-3</code></div>
                    <div class="col-m-4 col-3"><code>col-m-4 col-3</code></div>
                </div>

                <p>Nota: si no se inclye el class <code>col-m-*</code> en la columna, la misma tomara el class <code>col-*</code> de la columna. Ejemplo:</p>

                <div class="row row--no-stack">
                    <div class="col-6"><code>col-6</code></div>
                    <div class="col-6"><code>col-6</code></div>
                </div>


            </div>

    </main>

  </div>

</div>

<?php include "inc/foot.php"; ?>
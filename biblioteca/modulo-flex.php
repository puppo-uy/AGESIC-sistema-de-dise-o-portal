<?php
  $title = 'Módulo flex';
  $section = 'estructura';
  $subsection = 'flex'; 
?>

<?php include "inc/head.php"; ?>

<style>

    code{font-size: 1.125em; background-color: var(--primario-claro) }
    .mod-flex > div{background-color: var(--primario-claro)}

</style>

<div class="app">

    <?php include "comp/header-app.php" ?>

    <div class="layout layout--app">

        <?php include "comp/nav-lateral.php" ?>

        <main id="contenido">

            <?php include "comp/breadcrumb.php"; ?>

            <h1 class="u-mb3"><?php echo $title; ?></h1>

            <div class="container">

                <h2>Distribución y alineación de elementos (CSS Flex)</h2> 
            
                <p>El Módulo Flex es permite controlar la relaciones de alineación y distribución entre elementos sin depender del sistema grid. Provee utilidades básicas para controlar contenedores flex: <code>justify-content</code>, <code>align-items</code> y <code>flex-direction.</code></p>

                <h3>Elemento contenedor <code>.mod-flex</code></h3>

                <p>La clase <code>.mod-flex</code> es la que activa el comportamiento flex sobre el contenedor.</p>

                <p>Los valores por defecto son los siguientes:</p>

                <ul class="lista-texto">
                    <li>En móviles
                        <ul class="lista-texto">
                            <li><code>flex-direction: column</code></li>
                            <li><code>justify-content: flex-start</code></li>
                            <li><code>align-items: stretch</code></li>
                        </ul>
                    </li>
                    <li>A partir de <code>sm</code> (768px)
                        <ul class="lista-texto">
                            <li><code>flex-direction: row</code></li>
                            <li><code>justify-content: space-between</code></li>
                            <li><code>align-items: flex-start</code></li>
                        </ul>
                    </li>
                </ul>



                <p>Ejemplo básico con 2 elementos</p>

                <div class="mod-flex u-mb4">
                    <div>Elemento 1</div>
                    <div>Elemento 2</div>
                </div>

                <p>Ejemplo básico con 6 elementos</p>

                <div class="mod-flex u-mb4">
                    <div>Elemento 1</div>
                    <div>Elemento 2</div>
                    <div>Elemento 3</div>
                    <div>Elemento 4</div>
                    <div>Elemento 5</div>
                    <div>Elemento 6</div>
                </div>

                <h3>Utilizades disponibles</h3>

                <h4>Justify-content</h4>

                <ul class="lista-texto">
                    <li><code>.flex-justify-start</code></li>
                    <li><code>.flex-justify-center</code></li>
                    <li><code>.flex-justify-end</code></li>
                    <li><code>.flex-justify-between</code></li>
                    <li><code>.flex-justify-around</code></li>
                </ul>

                <h4>Align-items</h4>

                <ul class="lista-texto">
                    <li><code>.flex-items-start</code></li>
                    <li><code>.flex-items-center</code></li>
                    <li><code>.flex-items-end</code></li>
                    <li><code>.flex-items-stretch</code></li>
                </ul>

                <h4>Flex-direction</h4>

                <ul class="lista-texto">
                    <li><code>.flex-dir-row</code></li>
                    <li><code>.flex-dir-column</code></li>
                </ul>

                <h4>Variantes responsive (a partir de <code>sm</code> / 768px)</h4>

                <p>A estas utilidades se les incorpora el prefijo <code>sm-</code> en el class. Ejemplos</p>

                <ul class="lista-texto">
                    <li><code>.sm-flex-justify-center</code>, <code>.sm-flex-justify-between</code>, etc.</li>
                    <li><code>.sm-flex-items-center</code>, <code>.sm-flex-items-start</code>, etc.</li>
                    <li><code>.sm-flex-dir-row</code>, <code>.sm-flex-dir-column</code>, etc.</li>
                    <li><code>.sm-stack</code>, utilidad práctica que fuerza <code>flex-direction: column</code></li>
                </ul>

                <h3>Ejemplo con componentes</h3>

                <div class="mod-flex">

                    <h2>Título jerarquía 2 tamaño XL</h2>
                    <button class="boton boton--secundario">
                        <svg class="icono icono--m">
                            <use href="#icono-descargar--lineal"></use>
                        </svg>
                        <span>Botón secundario</span>
                    </button>

                </div>




            </div>

        </main>


    </div>

</div>

<?php include "inc/foot.php"; ?>
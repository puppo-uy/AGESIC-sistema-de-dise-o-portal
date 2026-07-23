<?php
  $title = 'Fieldset';
  $section = 'formulario-tipo';
  $subsection = 'fieldset'; 
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

                <div class="col-8">

                    <form action="./" class="Form Form--tipo">

                        <fieldset>

                            <legend><span>Grupo de campos anidados</span></legend>

                            <div class="Form-group">

                                <div class="Form-label-wrap">
                                    <label for="example0" class="Form-label">Campo Padre:</label>
                                </div>
                                <div class="Form-object-wrap">
                                    <input type="text" class="Form-widget" id="example0" name="example0">
                                </div>

                            </div>

                            <fieldset>

                                <legend><span>Grupo de campos nivel 1</span></legend>

                                <p>Se utilizan los fieldset para agrupar campos, por ejemplo por el tipo de información solicitada.</p>

                                <div class="Form-group">
                                    <div class="Form-label-wrap">
                                        <label for="example1.1" class="Form-label">Campo 1 nivel 1:</label>
                                    </div>
                                    <div class="Form-object-wrap">
                                        <input type="text" class="Form-widget" id="example1.1" name="example1.1">
                                    </div>
                                </div>

                                <div class="Form-group">
                                    <div class="Form-label-wrap">
                                        <label for="example2.1" class="Form-label">Campo 2 nivel 1:</label>
                                    </div>
                                    <div class="Form-object-wrap">
                                        <input type="text" class="Form-widget" id="example2.1" name="example2.1">
                                    </div>
                                </div>

                                <fieldset>

                                    <legend><span>Grupo de campos nivel 1.1</span></legend>

                                    <div class="Form-group">
                                        <div class="Form-label-wrap">
                                            <label for="example1.1.1" class="Form-label">Campo 1 nivel 1.1:</label>
                                        </div>
                                        <div class="Form-object-wrap">
                                            <input type="text" class="Form-widget" id="example1.1.1" name="example1.1.1">
                                        </div>
                                    </div>

                                    <div class="Form-group">
                                        <div class="Form-label-wrap">
                                            <label for="example1.1.2" class="Form-label">Campo 2 nivel 1.1:</label>
                                        </div>
                                        <div class="Form-object-wrap">
                                            <input type="text" class="Form-widget" id="example1.1.2" name="example1.1.2">
                                        </div>
                                    </div>

                                    <fieldset>

                                        <legend><span>Grupo de campos nivel 1.1.1</span></legend>

                                        <div class="Form-group">
                                            <div class="Form-label-wrap">
                                                <label for="example1.1.1.1" class="Form-label">Campo 1 nivel 1.1.1:</label>
                                            </div>
                                            <div class="Form-object-wrap">
                                                <input type="text" class="Form-widget" id="example1.1.1.1" name="example1.1.1.1">
                                            </div>
                                        </div>

                                        <div class="Form-group">
                                            <div class="Form-label-wrap">
                                                <label for="example1.1.1.2" class="Form-label">Campo 2 nivel 1.1.1:</label>
                                            </div>
                                            <div class="Form-object-wrap">
                                                <input type="text" class="Form-widget" id="example1.1.1.2" name="example1.1.1.2">
                                            </div>
                                        </div>

                                    </fieldset>

                                    <div class="Form-group">
                                        <div class="Form-label-wrap">
                                            <label for="example1.1.3" class="Form-label">Campo 3 nivel 1.1:</label>
                                        </div>
                                        <div class="Form-object-wrap">
                                            <input type="text" class="Form-widget" id="example1.1.2" name="example1.1.3">
                                        </div>
                                    </div>


                                </fieldset>

                                <div class="Form-group">
                                    <div class="Form-label-wrap">
                                        <label for="example1.3" class="Form-label">Campo 3 nivel 1:</label>
                                    </div>
                                    <div class="Form-object-wrap">
                                        <input type="text" class="Form-widget" id="example1.3" name="example1.3">
                                    </div>
                                </div>

                            </fieldset>

                            <fieldset>

                                <legend><span>Grupo de campos nivel 2</span></legend>

                                <div class="Form-group">
                                    <div class="Form-label-wrap">
                                        <label for="example2.1" class="Form-label">Campo 1 nivel 2:</label>
                                    </div>
                                    <div class="Form-object-wrap">
                                        <input type="text" class="Form-widget" id="example2.1" name="example2.1">
                                    </div>
                                </div>

                            </fieldset>

                        </fieldset>

                    </form>

                </div>

                <div class="col-4"></div>
            </div>



        </main>

    </div>

</div>

<?php include "inc/foot.php"; ?>
<!doctype html>
<html class="no-js" lang="es">
<head>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="robots" content="noindex">
  <meta name="googlebot" content="noindex">

  <title><?php echo $title; ?> | Sistema de Diseño</title>

  <link rel="stylesheet" href="../recursos/css/portal-unificado.css">
  <link rel="stylesheet" href="../recursos/css/custom.css">
	
	<?php if (isset($form) && $form) : ?>
  	<link rel="stylesheet" href="../recursos/css/formulario-tipo-1.2.css">
	<?php endif; ?>
  
	<link rel="stylesheet" href="css/custom.css">
	<link rel="stylesheet" href="css/ejemplos-doc.css">

  <!-- favicons -->
  <link rel="shortcut icon" type="image/ico" href="../recursos/assets/favicons/favicon.ico">
 	<link rel="icon" type="image/png" href="../recursos/assets/favicons/favicon.png">
  <link rel="icon" type="image/png" sizes="192x192" href="../recursos/assets/favicons/favicon-192.png">
  <link rel="apple-touch-icon" sizes="180x180" href="../recursos/assets/favicons/favicon-180.png">

  <!-- meta -->
  <meta name="theme-color" content="#003da5">
  <meta name="description" content="[Resumen de la página/contenido o información cargada al momento de crear subhome]">

  <meta property="og:title" content="[Titulo de la página/contenido/subhome]">
  <meta property="og:description" content="[Resumen de la página/contenido o información cargada al momento de crear subhome]">
  <meta property="og:image" content="[Logo de gubuy por defecto en todas las páginas (./assets/logo-gubuy.png) o imagen cargada al momento de crear subhome]">

  <!--[if lt IE 9]>
    <script src="../recursos/js/vendor/polyfills.js"></script>
  <![endif]-->
</head>
<body<?php if (isset($bg_white) && $bg_white) : ?> class="u-bgWhite"<?php endif; ?>>
  <a class="SkipLink" href="#contenido">Ir al contenido</a>
  <a class="SkipLink" href="#menu">Ir al menú de navegación</a>

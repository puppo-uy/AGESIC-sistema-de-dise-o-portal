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
 
  <!-- favicons -->
  <link rel="shortcut icon" type="image/ico" href="../recursos/assets/favicons/favicon.ico">
 	<link rel="icon" type="image/png" href="../recursos/assets/favicons/favicon.png">
  <link rel="icon" type="image/png" sizes="192x192" href="../recursos/assets/favicons/favicon-192.png">
  <link rel="apple-touch-icon" sizes="180x180" href="../recursos/assets/favicons/favicon-180.png">

  <!-- meta -->
  <meta name="theme-color" content="#003da5">
  <meta name="description" content="Herramientas para diseñar y construir interfaces digitales del Estado Uruguayo consistentes, accesibles y centradas en las personas.">

  <meta property="og:title" content="<?php echo htmlspecialchars((!empty($title) ? $title . ' | ' : '') . 'Sistema de Diseño del Estado Uruguayo', ENT_QUOTES, 'UTF-8'); ?>">
  <meta property="og:description" content="Herramientas para diseñar y construir interfaces digitales del Estado Uruguayo consistentes, accesibles y centradas en las personas.">
  <meta property="og:image" content="https://sistemadiseno.agesic.gub.uy/portal/img/sdd/hero-sdd.png">

  <!--[if lt IE 9]>
    <script src="../recursos/js/vendor/polyfills.js"></script>
  <![endif]-->
</head>
<body<?php if (isset($bg_white) && $bg_white) : ?> class="u-bgWhite"<?php endif; ?>>
  <a class="SkipLink" href="#contenido">Ir al contenido</a>
  <a class="SkipLink" href="#menu">Ir al menú de navegación</a>

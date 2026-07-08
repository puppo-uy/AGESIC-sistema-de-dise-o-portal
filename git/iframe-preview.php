<!doctype html>
<html class="no-js" lang="es" style="background: transparent;">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Preview Componente</title>
    <!-- CSS del sistema de diseño -->
    <link rel="stylesheet" href="recursos/css/main.css">
    <style>
        /* Estilos básicos para asegurar que el iframe no tenga márgenes extras */
        html, body {
            background: transparent;
            margin: 0;
            padding: 16px; /* Un poco de padding para que los estados focus/box-shadow no se corten */
            padding-bottom: 60px; /* Margen inferior de seguridad para dar espacio a los desplegables */
            overflow: hidden; /* iframe-resizer se encarga de mostrar todo */
        }
    </style>
</head>
<body>
    <!-- Iconos SVG necesarios -->
    <?php include 'recursos/dist/sprites.svg'; ?>

    <?php
    $comp = isset($_GET['comp']) ? $_GET['comp'] : '';
    
    // Validación básica para prevenir directory traversal
    if ($comp && preg_match('/^[a-zA-Z0-9\-\/]+$/', $comp)) {
        $file = __DIR__ . '/comp/' . $comp . '.php';
        if (file_exists($file)) {
            include $file;
        } else {
            echo "<p>Componente no encontrado: " . htmlspecialchars($comp) . "</p>";
        }
    } else {
        echo "<p>Componente no especificado o inválido.</p>";
    }
    ?>

    <!-- Script para comunicar la altura al portal -->
    <script src="recursos/scripts/iframeResizer.contentWindow.min.js"></script>
    <!-- Entry point del sistema de componentes JS -->
    <script type="module" src="scripts/main.js"></script>
</body>
</html>

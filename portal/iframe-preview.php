<!doctype html>
<html class="no-js" lang="es" style="background: transparent;">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Preview Componente</title>
    <!-- CSS del sistema de diseño -->
    <link rel="stylesheet" href="../biblioteca/recursos/css/main.css">
    <style>
        /* Estilos básicos para asegurar que el iframe no tenga márgenes extras */
        html, body {
            background: transparent;
            margin: 0;
            padding: <?php echo isset($_GET['nopadding']) ? '0' : '16px'; ?>;
            overflow-x: auto;
        }
        /* Contenedor con borde sutil para visualizar el componente externo */
        .preview-container {
            border: 1px solid #d0d7de;
            border-radius: 6px;
            padding: 16px;
            background-color: #ffffff;
            box-sizing: border-box;
        }
    </style>
</head>
<body>
    <!-- Iconos SVG necesarios -->
    <?php 
    $spriteFile = __DIR__ . '/../biblioteca/recursos/dist/sprites.svg';
    if (file_exists($spriteFile)) {
        include $spriteFile;
    }
    ?>

    <div class="preview-container">
    <?php
    $comp = isset($_GET['comp']) ? $_GET['comp'] : '';
    
    // Si viene la extensión .php en la URL (ej: texto/parrafo-lg.php), la removemos
    $comp = preg_replace('/\.php$/i', '', $comp);

    // Validación básica para prevenir directory traversal
    if ($comp && preg_match('/^[a-zA-Z0-9\-\/]+$/', $comp)) {
        $file = __DIR__ . '/../biblioteca/comp/' . $comp . '.php';
        if (file_exists($file)) {
            include $file;
        } else {
            echo "<p>Componente no encontrado: " . htmlspecialchars($comp) . "</p>";
        }
    } else {
        echo "<p>Componente no especificado o inválido.</p>";
    }
    ?>
    </div>

    <!-- Script para comunicar la altura al portal -->
    <script src="../recursos/js/vendor/iframeResizer.min.js"></script>
</body>
</html>

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
            padding: 0;
            overflow-x: auto;
        }
        /* Contenedor con borde sutil para visualizar el componente externo */
        .preview-container {
            position: relative;
            border: 2px solid #93c5fd;
            border-radius: 6px;
            padding: 24px 16px 16px 16px;
            background-color: #ffffff;
            box-sizing: border-box;
        }
        /* Etiqueta / Bloque en la esquina superior derecha */
        .preview-badge {
            position: absolute;
            top: -2px;
            right: -2px;
            background-color: #eff6ff;
            border: 2px solid #93c5fd;
            border-top-right-radius: 6px;
            border-bottom-left-radius: 6px;
            padding: 3px 10px;
            font-family: system-ui, -apple-system, "Segoe UI", Roboto, Helvetica, Arial, sans-serif;
            font-size: 11px;
            font-weight: 600;
            color: #1e40af;
            text-transform: uppercase;
            letter-spacing: 0.5px;
            line-height: 1.3;
            pointer-events: none;
            user-select: none;
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
        <span class="preview-badge">Componente de ejemplo</span>
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
    <script src="../recursos/js/vendor/iframeResizer.contentWindow.min.js"></script>
</body>
</html>

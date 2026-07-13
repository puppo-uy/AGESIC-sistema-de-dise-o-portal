<?php
// Determinar qué grupo mostrar
$grupo = $_GET['grupo'] ?? 'todos';

// Helper: determine if text should be light or dark based on bg color
function needsLightText($hex) {
    $hex = ltrim($hex, '#');
    $r = hexdec(substr($hex, 0, 2));
    $g = hexdec(substr($hex, 2, 2));
    $b = hexdec(substr($hex, 4, 2));
    $luminance = (0.299 * $r + 0.587 * $g + 0.114 * $b) / 255;
    return $luminance < 0.5;
}

function renderSwatch($hex, $label, $var = null) {
    $textColor = needsLightText($hex) ? '#fff' : '#1a1a1a';
    $borderClass = ($hex === '#ffffff') ? 'swatch__box--white-border' : 'swatch__box--normal-border';
    
    echo '<div class="swatch">';
    echo '  <div class="swatch__box ' . $borderClass . '" ';
    echo '       title="' . htmlspecialchars($hex) . ($var ? ' | ' . htmlspecialchars($var) : '') . '" ';
    echo '       style="background-color: ' . htmlspecialchars($hex) . '; color: ' . $textColor . ';">';
    echo '    <span class="swatch__label">' . htmlspecialchars($label) . '</span>';
    echo '    <span class="swatch__hex">' . htmlspecialchars($hex) . '</span>';
    echo '  </div>';
    if ($var) {
        echo '  <span class="swatch__var">' . htmlspecialchars($var) . '</span>';
    }
    echo '</div>';
}

function renderScale($colors, $title = null) {
    echo '<div class="swatch-group">';
    if ($title) {
        echo '  <p class="swatch-group__title">' . htmlspecialchars($title) . '</p>';
    }
    echo '  <div class="swatch-group__list">';
    foreach ($colors as $c) {
        renderSwatch($c['hex'], $c['label'], $c['var'] ?? null);
    }
    echo '  </div>';
    echo '</div>';
}

// ─── Paletas ─────────────────────────────────────────────────────────────────

$azul = [
    ['hex' => '#f4f6fa', 'label' => '25',    'var' => '--primario-mas-claro'],
    ['hex' => '#e9ecf4', 'label' => '50',    'var' => '--primario-claro'],
    ['hex' => '#bbc4dc', 'label' => '100'],
    ['hex' => '#9ba8cb', 'label' => '200'],
    ['hex' => '#6d80b3', 'label' => '300'],
    ['hex' => '#5167a5', 'label' => '400'],
    ['hex' => '#25418e', 'label' => '500',   'var' => '--primario-principal'],
    ['hex' => '#223b81', 'label' => '600'],
    ['hex' => '#1a2e65', 'label' => '700'],
    ['hex' => '#14244e', 'label' => '800',   'var' => '--primario-oscuro'],
    ['hex' => '#101b3c', 'label' => '900'],
    ['hex' => '#080d1e', 'label' => '950'],
];

$amarillo = [
    ['hex' => '#fdfbf3', 'label' => '25'],
    ['hex' => '#fbf7e6', 'label' => '50',    'var' => '--secundario-claro'],
    ['hex' => '#f4e5b0', 'label' => '100'],
    ['hex' => '#eed88a', 'label' => '200'],
    ['hex' => '#e6c654', 'label' => '300'],
    ['hex' => '#e1bb33', 'label' => '400'],
    ['hex' => '#daaa00', 'label' => '500',   'var' => '--secundario-principal'],
    ['hex' => '#c69b00', 'label' => '600'],
    ['hex' => '#9b7900', 'label' => '700',   'var' => '--secundario-oscuro'],
    ['hex' => '#785e00', 'label' => '800'],
    ['hex' => '#5c4700', 'label' => '900'],
    ['hex' => '#2e2300', 'label' => '950'],
];

$funcionales = [
    'Éxito' => [
        ['hex' => '#e9f5ec', 'label' => '50',  'var' => '--funcional-exito-claro'],
        ['hex' => '#9cd2a7', 'label' => '200',  'var' => '--funcional-exito-medio'],
        ['hex' => '#279e3f', 'label' => '500',  'var' => '--funcional-exito-acento'],
        ['hex' => '#155723', 'label' => '800',  'var' => '--funcional-exito-medio_oscuro'],
        ['hex' => '#08210d', 'label' => '950',  'var' => '--funcional-exito-oscuro'],
    ],
    'Error' => [
        ['hex' => '#faebeb', 'label' => '50',  'var' => '--funcional-error-claro'],
        ['hex' => '#e8a1a1', 'label' => '200',  'var' => '--funcional-error-medio'],
        ['hex' => '#cc3333', 'label' => '500',  'var' => '--funcional-error-acento'],
        ['hex' => '#701c1c', 'label' => '800',  'var' => '--funcional-error-medio_oscuro'],
        ['hex' => '#2b0a0a', 'label' => '950',  'var' => '--funcional-error-oscuro'],
    ],
    'Advertencia' => [
        ['hex' => '#fff4e9', 'label' => '50',  'var' => '--funcional-advertencia-claro'],
        ['hex' => '#fdcc98', 'label' => '200',  'var' => '--funcional-advertencia-medio'],
        ['hex' => '#fa911f', 'label' => '500',  'var' => '--funcional-advertencia-acento'],
        ['hex' => '#8a5011', 'label' => '800',  'var' => '--funcional-advertencia-medio_oscuro'],
        ['hex' => '#351e06', 'label' => '950',  'var' => '--funcional-advertencia-oscuro'],
    ],
    'Notificación' => [
        ['hex' => '#ecf3fd', 'label' => '50',  'var' => '--funcional-notificacion-claro'],
        ['hex' => '#8abbf1', 'label' => '200',  'var' => '--funcional-notificacion-medio'],
        ['hex' => '#006ce0', 'label' => '500',  'var' => '--funcional-notificacion-acento'],
        ['hex' => '#003b7b', 'label' => '800',  'var' => '--funcional-notificacion-medio_oscuro'],
        ['hex' => '#00162f', 'label' => '950',  'var' => '--funcional-notificacion-oscuro'],
    ],
    'Información' => [
        ['hex' => '#f2f2f2', 'label' => '50',  'var' => '--funcional-informacion-claro'],
        ['hex' => '#c2c2c2', 'label' => '200',  'var' => '--funcional-informacion-medio'],
        ['hex' => '#7a7a7a', 'label' => '500',  'var' => '--funcional-informacion-acento'],
        ['hex' => '#434343', 'label' => '800',  'var' => '--funcional-informacion-medio_oscuro'],
        ['hex' => '#151515', 'label' => '950',  'var' => '--funcional-informacion-oscuro'],
    ],
];

$foco = [
    ['hex' => '#fff6e6', 'label' => '50',  'var' => '--foco-acento-claro'],
    ['hex' => '#ffe3b0', 'label' => '100'],
    ['hex' => '#ffd68a', 'label' => '200'],
    ['hex' => '#ffc354', 'label' => '300'],
    ['hex' => '#ffb733', 'label' => '400'],
    ['hex' => '#ffa500', 'label' => '500',  'var' => '--foco-acento'],
    ['hex' => '#e89600', 'label' => '600'],
    ['hex' => '#b57500', 'label' => '700'],
    ['hex' => '#8c5b00', 'label' => '800'],
    ['hex' => '#6b4500', 'label' => '900'],
    ['hex' => '#352200', 'label' => '950'],
];

$neutros = [
    ['hex' => '#ffffff', 'label' => 'Blanco', 'var' => '--neutro-0'],
    ['hex' => '#f9f9f9', 'label' => '25',   'var' => '--neutro-25'],
    ['hex' => '#f2f2f2', 'label' => '50',   'var' => '--neutro-50'],
    ['hex' => '#d6d6d6', 'label' => '100',  'var' => '--neutro-100'],
    ['hex' => '#c2c2c2', 'label' => '200',  'var' => '--neutro-200'],
    ['hex' => '#a6a6a6', 'label' => '300',  'var' => '--neutro-300'],
    ['hex' => '#959595', 'label' => '400',  'var' => '--neutro-400'],
    ['hex' => '#7a7a7a', 'label' => '500',  'var' => '--neutro-500'],
    ['hex' => '#6f6f6f', 'label' => '600',  'var' => '--neutro-600'],
    ['hex' => '#575757', 'label' => '700',  'var' => '--neutro-700'],
    ['hex' => '#434343', 'label' => '800',  'var' => '--neutro-800'],
    ['hex' => '#2a2a2a', 'label' => '900',  'var' => '--neutro-900'],
    ['hex' => '#151515', 'label' => '950',  'var' => '--neutro-950'],
    ['hex' => '#000000', 'label' => 'Negro', 'var' => '--neutro-1000'],
];

$decorativos_raw = [
    'Rojo'       => ['25' => '#fff3f3', '50' => '#ffe6e6', '100' => '#ffb0b0', '200' => '#ff8a8a', '300' => '#ff5454', '400' => '#ff3333', '500' => '#ff0000', '600' => '#e80000', '700' => '#b50000', '800' => '#8c0000', '900' => '#6b0000', '950' => '#350000'],
    'Naranja'    => ['25' => '#fff8f3', '50' => '#fff0e6', '100' => '#ffd1b0', '200' => '#ffba8a', '300' => '#ff9b54', '400' => '#ff8733', '500' => '#ff6900', '600' => '#e86000', '700' => '#b54b00', '800' => '#8c3a00', '900' => '#6b2c00', '950' => '#351600'],
    'Verde'      => ['25' => '#f8f9f4', '50' => '#f1f3e8', '100' => '#d5dbb6', '200' => '#c0c993', '300' => '#a4b162', '400' => '#92a144', '500' => '#778a15', '600' => '#6c7e13', '700' => '#54620f', '800' => '#414c0c', '900' => '#323a09', '950' => '#191d04'],
    'Verde Agua' => ['25' => '#f3f9f9', '50' => '#e6f2f3', '100' => '#b0d7db', '200' => '#8ac3c9', '300' => '#54a8b1', '400' => '#3397a1', '500' => '#007d8a', '600' => '#00727e', '700' => '#005962', '800' => '#00454c', '900' => '#00353a', '950' => '#001a1d'],
    'Celeste'    => ['25' => '#f3faff', '50' => '#e6f5ff', '100' => '#b0dfff', '200' => '#8ad0ff', '300' => '#54bbff', '400' => '#33adff', '500' => '#0099ff', '600' => '#008be8', '700' => '#006db5', '800' => '#00548c', '900' => '#00406b', '950' => '#002035'],
    'Violeta'    => ['25' => '#f6f3f8', '50' => '#ede7f0', '100' => '#c6b3d0', '200' => '#aa8eba', '300' => '#845b9a', '400' => '#6c3b86', '500' => '#470a68', '600' => '#41095f', '700' => '#32074a', '800' => '#270639', '900' => '#1e042c', '950' => '#0f0216'],
    'Fucsia'     => ['25' => '#faf3f9', '50' => '#f4e7f2', '100' => '#deb5d7', '200' => '#cd92c4', '300' => '#b760a9', '400' => '#a94198', '500' => '#93117e', '600' => '#860f73', '700' => '#680c59', '800' => '#510945', '900' => '#3e0735', '950' => '#1f031a'],
];
?>
<style>
  * { box-sizing: border-box; }
  body {
    font-family: 'Open Sans', sans-serif;
    font-size: 14px;
    color: #1a1a1a;
    margin: 0;
    padding: 12px 16px 16px;
  }
  
  .swatch-group {
    margin-bottom: 24px;
  }
  .swatch-group__title {
    font-size: 12px;
    font-weight: 600;
    color: #2a2a2a;
    text-transform: uppercase;
    letter-spacing: 0.5px;
    margin: 16px 0 6px;
  }
  .swatch-group__list {
    display: flex;
    flex-wrap: wrap;
    gap: 8px;
    margin-bottom: 8px;
  }
  .swatch {
    display: inline-flex;
    flex-direction: column;
    align-items: center;
    gap: 6px;
    margin: 6px 4px;
  }
  .swatch__box {
    width: 96px;
    height: 68px;
    border-radius: 8px;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    gap: 3px;
  }
  .swatch__box--white-border {
    border: 1px solid #ccc;
  }
  .swatch__box--normal-border {
    border: 1px solid rgba(0,0,0,0.1);
  }
  .swatch__label {
    font-size: 13px;
    font-weight: 700;
    line-height: 1;
  }
  .swatch__hex {
    font-size: 11px;
    opacity: 0.85;
    line-height: 1;
  }
  .swatch__var {
    font-size: 11px;
    color: #1a1a1a;
    font-weight: 600;
    text-align: center;
    max-width: 96px;
    word-break: break-all;
    line-height: 1.2;
    font-family: 'Courier New', monospace;
  }
  .decorativo-header {
    font-size: 12px;
    font-weight: 600;
    color: #2a2a2a;
    text-transform: uppercase;
    letter-spacing: 0.5px;
    margin: 16px 0 6px;
  }
</style>

<?php if ($grupo === 'institucionales' || $grupo === 'todos'): ?>
  <?php renderScale($azul, 'Azul'); ?>
  <?php renderScale($amarillo, 'Amarillo'); ?>
<?php endif; ?>

<?php if ($grupo === 'funcionales' || $grupo === 'todos'): ?>
  <?php foreach ($funcionales as $nombre => $escala): ?>
    <?php renderScale($escala, $nombre); ?>
  <?php endforeach; ?>
<?php endif; ?>

<?php if ($grupo === 'foco' || $grupo === 'todos'): ?>
  <?php renderScale($foco, 'Naranja foco'); ?>
<?php endif; ?>

<?php if ($grupo === 'neutros' || $grupo === 'todos'): ?>
  <?php renderScale($neutros, 'Gris cálido'); ?>
<?php endif; ?>

<?php if ($grupo === 'decorativos' || $grupo === 'todos'): ?>
  <?php foreach ($decorativos_raw as $nombre => $escala): ?>
    <p class="decorativo-header"><?php echo htmlspecialchars($nombre); ?></p>
    <div class="swatch-group__list">
    <?php foreach ($escala as $label => $hex): renderSwatch($hex, (string)$label); endforeach; ?>
    </div>
  <?php endforeach; ?>
<?php endif; ?>

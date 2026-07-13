<?php
// Tipografías — valores de _primitives.scss
// Los rem se basan en 16px base

$titulos = [
    ['nombre' => 'Título XXL', 'var' => '--tipo-tamano-titulo-xxl', 'rem' => '2.5rem',   'px' => 40, 'lh' => '1.2',  'lh_label' => '120%'],
    ['nombre' => 'Título XL',  'var' => '--tipo-tamano-titulo-xl',  'rem' => '2rem',     'px' => 32, 'lh' => '1.2',  'lh_label' => '120%'],
    ['nombre' => 'Título L',   'var' => '--tipo-tamano-titulo-l',   'rem' => '1.75rem',  'px' => 28, 'lh' => '1.3',  'lh_label' => '130%'],
    ['nombre' => 'Título M',   'var' => '--tipo-tamano-titulo-m',   'rem' => '1.5rem',   'px' => 24, 'lh' => '1.4',  'lh_label' => '140%'],
    ['nombre' => 'Título S',   'var' => '--tipo-tamano-titulo-s',   'rem' => '1.25rem',  'px' => 20, 'lh' => '1.4',  'lh_label' => '140%'],
    ['nombre' => 'Título XS',  'var' => '--tipo-tamano-titulo-xs',  'rem' => '1rem',     'px' => 16, 'lh' => '1.5',  'lh_label' => '150%'],
];

$parrafos = [
    ['nombre' => 'Párrafo XL',  'var' => '--tipo-tamano-parrafo-xl',  'rem' => '1.25rem',  'px' => 20,   'lh' => '1.6',  'lh_label' => '160%'],
    ['nombre' => 'Párrafo L',   'var' => '--tipo-tamano-parrafo-l',   'rem' => '1.125rem', 'px' => 18,   'lh' => '1.5',  'lh_label' => '150%'],
    ['nombre' => 'Párrafo M',   'var' => '--tipo-tamano-parrafo-m',   'rem' => '1rem',     'px' => 16,   'lh' => '1.5',  'lh_label' => '150%'],
    ['nombre' => 'Párrafo S',   'var' => '--tipo-tamano-parrafo-s',   'rem' => '0.875rem', 'px' => 14,   'lh' => '1.5',  'lh_label' => '150%'],
    ['nombre' => 'Párrafo XS',  'var' => '--tipo-tamano-parrafo-xs',  'rem' => '0.75rem',  'px' => 12,   'lh' => '1.5',  'lh_label' => '150%'],
    ['nombre' => 'Párrafo XXS', 'var' => '--tipo-tamano-parrafo-xxs', 'rem' => '0.625rem', 'px' => 10,   'lh' => '1.1',  'lh_label' => '110%'],
];
?>
<style>
  * { box-sizing: border-box; }
  body {
    font-family: 'Open Sans', sans-serif;
    color: #1a1a1a;
    margin: 0;
    padding: 16px;
  }
  .type-section-title {
    font-size: 12px;
    font-weight: 700;
    text-transform: uppercase;
    letter-spacing: 0.6px;
    color: #555;
    margin: 24px 0 4px;
    border-bottom: 1px solid #eee;
    padding-bottom: 6px;
  }
  .type-section-title:first-child { margin-top: 0; }
  .type-row {
    display: flex;
    align-items: baseline;
    gap: 20px;
    padding: 10px 0;
    border-bottom: 1px solid #f0f0f0;
  }
  .type-sample {
    flex: 1;
    font-family: 'Open Sans', sans-serif;
    color: #1a1a1a;
    white-space: nowrap;
    overflow: hidden;
    text-overflow: ellipsis;
  }
  .type-meta {
    display: flex;
    flex-direction: column;
    gap: 2px;
    flex-shrink: 0;
    text-align: right;
    min-width: 180px;
  }
  .type-meta-name {
    font-size: 13px;
    font-weight: 700;
    color: #1a1a1a;
  }
  .type-meta-detail {
    font-size: 12px;
    color: #555;
    font-family: 'Courier New', monospace;
  }
  .type-meta-var {
    font-size: 11px;
    color: #1a1a1a;
    font-family: 'Courier New', monospace;
    font-weight: 600;
  }
  .familia-section {
    padding: 12px 0 16px;
    border-bottom: 1px solid #eee;
    margin-bottom: 4px;
  }
  .familia-name {
    font-size: 28px;
    font-weight: 700;
    margin: 0 0 2px;
  }
  .familia-name--open-sans {
    font-family: 'Open Sans', sans-serif;
  }
  .familia-name--sora {
    font-family: 'Sora', sans-serif;
  }
  .familia-sub {
    font-size: 13px;
    color: #555;
  }
</style>

<!-- Familias -->
<p class="type-section-title">Familias tipográficas</p>
<div class="familia-section">
  <div class="familia-name familia-name--open-sans">Open Sans</div>
  <div class="familia-sub">Tipografía base — títulos, párrafos e interfaz general</div>
</div>
<div class="familia-section" style="border-bottom:none;">
  <div class="familia-name familia-name--sora">Sora</div>
  <div class="familia-sub">Tipografía de marca — exclusiva para el identificador de organismo en el cabezal</div>
</div>

<!-- Títulos -->
<p class="type-section-title">Títulos</p>
<?php foreach ($titulos as $t): ?>
<div class="type-row">
  <div class="type-sample" style="font-size:<?php echo $t['rem']; ?>;line-height:<?php echo $t['lh']; ?>;">
    Aa · El sistema de diseño
  </div>
  <div class="type-meta">
    <span class="type-meta-name"><?php echo htmlspecialchars($t['nombre']); ?></span>
    <span class="type-meta-detail"><?php echo $t['rem']; ?> · <?php echo $t['px']; ?>px · LH <?php echo $t['lh_label']; ?></span>
    <span class="type-meta-var"><?php echo htmlspecialchars($t['var']); ?></span>
  </div>
</div>
<?php endforeach; ?>

<!-- Párrafos -->
<p class="type-section-title">Párrafos</p>
<?php foreach ($parrafos as $p): ?>
<div class="type-row">
  <div class="type-sample" style="font-size:<?php echo $p['rem']; ?>;line-height:<?php echo $p['lh']; ?>;">
    La tipografía define la jerarquía y legibilidad de los contenidos.
  </div>
  <div class="type-meta">
    <span class="type-meta-name"><?php echo htmlspecialchars($p['nombre']); ?></span>
    <span class="type-meta-detail"><?php echo $p['rem']; ?> · <?php echo $p['px']; ?>px · LH <?php echo $p['lh_label']; ?></span>
    <span class="type-meta-var"><?php echo htmlspecialchars($p['var']); ?></span>
  </div>
</div>
<?php endforeach; ?>

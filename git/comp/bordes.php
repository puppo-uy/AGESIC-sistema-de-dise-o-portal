<?php
// Grosores — $bordes-grosores-0 a $bordes-grosores-6
$grupo = $_GET['grupo'] ?? 'todos';
$grosores = [0, 1, 2, 3, 4, 5, 6];

// Radios — de _primitives.scss, ordenados de menor a mayor
$radios = [
    ['name' => '$bordes-radios-0',    'px' => 0,    'label' => '0'],
    ['name' => '$bordes-radios-xxs',  'px' => 2,    'label' => '2px'],
    ['name' => '$bordes-radios-xs',   'px' => 4,    'label' => '4px'],
    ['name' => '$bordes-radios-s',    'px' => 8,    'label' => '8px'],
    ['name' => '$bordes-radios-m',    'px' => 12,   'label' => '12px'],
    ['name' => '$bordes-radios-l',    'px' => 16,   'label' => '16px'],
    ['name' => '$bordes-radios-xl',   'px' => 20,   'label' => '20px'],
    ['name' => '$bordes-radios-xxl',  'px' => 24,   'label' => '24px'],
    ['name' => '$bordes-radios-full', 'px' => 9999, 'label' => '9999px (full)'],
];
?>
<style>
  * { box-sizing: border-box; }
  body {
    font-family: 'Open Sans', sans-serif;
    font-size: 13px;
    color: #1a1a1a;
    margin: 0;
    padding: 16px;
  }
  .section-title {
    font-size: 12px;
    font-weight: 700;
    text-transform: uppercase;
    letter-spacing: 0.6px;
    color: #555;
    margin: 24px 0 12px;
  }
  .section-title:first-child { margin-top: 0; }

  /* Grosores */
  .grosor-row {
    display: flex;
    align-items: center;
    gap: 16px;
    margin-bottom: 10px;
  }
  .grosor-line-wrap {
    width: 160px;
    flex-shrink: 0;
    display: flex;
    align-items: center;
  }
  .grosor-line {
    width: 100%;
    background: #25418e;
  }
  .grosor-label {
    font-family: 'Courier New', monospace;
    font-size: 12px;
    color: #1a1a1a;
  }
  .grosor-value {
    font-size: 12px;
    color: #555;
    margin-left: auto;
    min-width: 32px;
    text-align: right;
  }
  .grosor-row-inner {
    display: flex;
    align-items: center;
    flex: 1;
    gap: 12px;
  }

  /* Radios */
  .radio-grid {
    display: flex;
    flex-wrap: wrap;
    gap: 16px;
    margin-bottom: 8px;
  }
  .radio-item {
    display: flex;
    flex-direction: column;
    align-items: center;
    gap: 8px;
  }
  .radio-box {
    width: 72px;
    height: 48px;
    background: #e9ecf4;
    border: 2px solid #25418e;
  }
  .radio-name {
    font-size: 12px;
    font-family: 'Courier New', monospace;
    color: #1a1a1a;
    font-weight: 600;
    text-align: center;
  }
  .radio-val {
    font-size: 11px;
    color: #555;
    font-family: 'Courier New', monospace;
  }
</style>

<!-- Grosores -->
<?php if ($grupo === 'grosores' || $grupo === 'todos'): ?>
<p class="section-title">Grosores</p>
<?php foreach ($grosores as $px):
  $borderH = max($px, 1); // Para 0px, mostramos la línea pero invisible
  $opacity = ($px === 0) ? '0.15' : '1';
?>
<div class="grosor-row">
  <div class="grosor-line-wrap">
    <div class="grosor-line" style="height:<?php echo max($px,1); ?>px;opacity:<?php echo $opacity; ?>;"></div>
  </div>
  <div class="grosor-row-inner">
    <span class="grosor-label">$bordes-grosores-<?php echo $px; ?></span>
    <span class="grosor-value"><?php echo $px; ?>px</span>
  </div>
</div>
<?php endforeach; ?>
<?php endif; ?>

<!-- Radios -->
<?php if ($grupo === 'radios' || $grupo === 'todos'): ?>
<p class="section-title">Radios</p>
<div class="radio-grid">
<?php foreach ($radios as $r):
  $borderRadius = ($r['px'] >= 9999) ? '9999px' : $r['px'] . 'px';
  $shortName = str_replace('$bordes-radios-', '', $r['name']);
?>
  <div class="radio-item">
    <div class="radio-box" style="border-radius:<?php echo $borderRadius; ?>;"></div>
    <span class="radio-name"><?php echo htmlspecialchars($shortName); ?></span>
    <span class="radio-val"><?php echo $r['label']; ?></span>
  </div>
<?php endforeach; ?>
</div>
<?php endif; ?>

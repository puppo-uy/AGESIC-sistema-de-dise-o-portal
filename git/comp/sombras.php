<?php
// Sombras — tomadas de _shadows.scss y _primitives.scss
$grupo = $_GET['grupo'] ?? 'todos';

$difuminadas = [
    'xs' => '0 1px 2px rgba(0,0,0,0.10)',
    's'  => '0 2px 4px rgba(0,0,0,0.10)',
    'm'  => '0 4px 8px rgba(0,0,0,0.10)',
    'l'  => '0 8px 16px rgba(0,0,0,0.10)',
    'xl' => '0 16px 24px rgba(0,0,0,0.10)',
];

$duras = [
    'xs' => '0 1px 1px rgba(0,0,0,0.20)',
    's'  => '0 2px 2px rgba(0,0,0,0.20)',
    'm'  => '0 4px 4px rgba(0,0,0,0.20)',
    'l'  => '0 8px 8px rgba(0,0,0,0.20)',
    'xl' => '0 16px 16px rgba(0,0,0,0.20)',
];
?>
<style>
  * { box-sizing: border-box; }
  body {
    font-family: 'Open Sans', sans-serif;
    font-size: 13px;
    color: #1a1a1a;
    margin: 0;
    padding: 24px 16px;
    background: #f5f5f5;
  }
  .shadow-group {
    margin-bottom: 32px;
  }
  .shadow-group-title {
    font-size: 11px;
    font-weight: 700;
    text-transform: uppercase;
    letter-spacing: 0.6px;
    color: #777;
    margin: 0 0 16px;
  }
  .shadow-row {
    display: flex;
    align-items: center;
    gap: 20px;
    margin-bottom: 16px;
  }
  .shadow-box {
    width: 80px;
    height: 56px;
    background: #fff;
    border-radius: 6px;
    flex-shrink: 0;
  }
  .shadow-info {
    display: flex;
    flex-direction: column;
    gap: 2px;
  }
  .shadow-name {
    font-size: 13px;
    font-weight: 600;
    font-family: 'Courier New', monospace;
    color: #1a1a1a;
  }
  .shadow-value {
    font-size: 11px;
    color: #888;
    font-family: 'Courier New', monospace;
  }
</style>

<?php if ($grupo === 'difuminadas' || $grupo === 'todos'): ?>
<div class="shadow-group">
  <p class="shadow-group-title">Difuminadas</p>
  <?php foreach ($difuminadas as $nivel => $css): ?>
  <div class="shadow-row">
    <div class="shadow-box" style="box-shadow: <?php echo $css; ?>;"></div>
    <div class="shadow-info">
      <span class="shadow-name">--sombra-difuminada-<?php echo $nivel; ?></span>
      <span class="shadow-value"><?php echo htmlspecialchars($css); ?></span>
    </div>
  </div>
  <?php endforeach; ?>
</div>
<?php endif; ?>

<?php if ($grupo === 'duras' || $grupo === 'todos'): ?>
<div class="shadow-group">
  <p class="shadow-group-title">Duras</p>
  <?php foreach ($duras as $nivel => $css): ?>
  <div class="shadow-row">
    <div class="shadow-box" style="box-shadow: <?php echo $css; ?>;"></div>
    <div class="shadow-info">
      <span class="shadow-name">--sombra-dura-<?php echo $nivel; ?></span>
      <span class="shadow-value"><?php echo htmlspecialchars($css); ?></span>
    </div>
  </div>
  <?php endforeach; ?>
</div>
<?php endif; ?>

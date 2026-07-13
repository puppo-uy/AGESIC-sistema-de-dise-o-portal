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
    font-size: 0.8125rem; /* 13px */
    color: #1a1a1a;
    margin: 0;
    padding: 1.5rem 1rem;
    background-color: #f5f5f5;
  }
  .shadow-section {
    margin-bottom: 2rem; /* 32px */
  }
  .shadow-section__title {
    font-size: 0.75rem; /* 12px */
    font-weight: 700;
    text-transform: uppercase;
    letter-spacing: 0.0375rem; /* 0.6px */
    color: #1a1a1a; /* Contraste máximo contra #f5f5f5 */
    margin: 0 0 1rem;
  }
  .shadow-section__row {
    display: flex;
    align-items: center;
    gap: 1.25rem; /* 20px */
    margin-bottom: 1rem; /* 16px */
  }
  .shadow-section__box {
    width: 5rem; /* 80px */
    height: 3.5rem; /* 56px */
    background-color: #ffffff;
    border-radius: 0.375rem; /* 6px */
    flex-shrink: 0;
  }
  .shadow-section__info {
    display: flex;
    flex-direction: column;
    gap: 0.125rem; /* 2px */
  }
  .shadow-section__name {
    font-size: 0.8125rem; /* 13px */
    font-weight: 600;
    font-family: 'Courier New', monospace;
    color: #25418e; /* Contraste de 5.2:1 */
  }
  .shadow-section__value {
    font-size: 0.75rem; /* 12px */
    color: #2a2a2a; /* Contraste de 11.4:1 contra #f5f5f5 */
    font-family: 'Courier New', monospace;
  }
</style>

<?php if ($grupo === 'difuminadas' || $grupo === 'todos'): ?>
<div class="shadow-section">
  <p class="shadow-section__title">Difuminadas</p>
  <?php foreach ($difuminadas as $nivel => $css): ?>
  <div class="shadow-section__row">
    <div class="shadow-section__box" style="box-shadow: <?php echo $css; ?>;"></div>
    <div class="shadow-info">
      <span class="shadow-section__name">--sombra-difuminada-<?php echo $nivel; ?></span>
      <span class="shadow-section__value"><?php echo htmlspecialchars($css); ?></span>
    </div>
  </div>
  <?php endforeach; ?>
</div>
<?php endif; ?>

<?php if ($grupo === 'duras' || $grupo === 'todos'): ?>
<div class="shadow-section">
  <p class="shadow-section__title">Duras</p>
  <?php foreach ($duras as $nivel => $css): ?>
  <div class="shadow-section__row">
    <div class="shadow-section__box" style="box-shadow: <?php echo $css; ?>;"></div>
    <div class="shadow-info">
      <span class="shadow-section__name">--sombra-dura-<?php echo $nivel; ?></span>
      <span class="shadow-section__value"><?php echo htmlspecialchars($css); ?></span>
    </div>
  </div>
  <?php endforeach; ?>
</div>
<?php endif; ?>


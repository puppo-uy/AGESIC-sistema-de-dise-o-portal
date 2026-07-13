<?php
// Tokens de espaciado — tomados de _primitives.scss
$espaciados = [0, 2, 4, 8, 12, 16, 20, 24, 28, 32, 36, 40, 48, 56, 64, 72, 80];
?>
<style>
  * { box-sizing: border-box; }
  body {
    font-family: 'Open Sans', sans-serif;
    font-size: 0.8125rem; /* 13px */
    color: #1a1a1a;
    margin: 0;
    padding: 1rem;
  }
  .spacing-list {
    display: flex;
    flex-direction: column;
    gap: 0.375rem; /* 6px */
  }
  .spacing-list__item {
    display: flex;
    align-items: center;
    gap: 0.75rem; /* 12px */
  }
  .spacing-list__label {
    width: 8.125rem; /* 130px */
    flex-shrink: 0;
    font-size: 0.75rem; /* 12px */
    color: #1a1a1a; /* Contraste máximo */
    font-family: 'Courier New', monospace;
    font-weight: 600;
  }
  .spacing-list__bar-container {
    flex: 1;
    height: 1.5rem; /* 24px */
    display: flex;
    align-items: center;
  }
  .spacing-list__bar {
    height: 100%;
    background-color: #25418e;
    border-radius: 0.25rem; /* 4px */
    transition: width 0.2s ease;
  }
  .spacing-list__value {
    width: 2.75rem; /* 44px */
    flex-shrink: 0;
    font-size: 0.75rem; /* 12px */
    color: #1a1a1a; /* Contraste máximo */
    text-align: right;
    font-family: 'Courier New', monospace;
    font-weight: 600;
  }
</style>

<div class="spacing-list">
<?php foreach ($espaciados as $px):
    $label = '$espaciados-' . $px;
    $value = $px . 'px';
?>
  <div class="spacing-list__item">
    <span class="spacing-list__label"><?php echo htmlspecialchars($label); ?></span>
    <div class="spacing-list__bar-container">
      <div class="spacing-list__bar" style="width: <?php echo $px; ?>px;"></div>
    </div>
    <span class="spacing-list__value"><?php echo $value; ?></span>
  </div>
<?php endforeach; ?>
</div>


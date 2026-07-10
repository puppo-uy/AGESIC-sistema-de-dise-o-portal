<?php
// Tokens de espaciado — tomados de _primitives.scss
$espaciados = [0, 2, 4, 8, 12, 16, 20, 24, 28, 32, 36, 40, 48, 56, 64, 72, 80];
$max = max($espaciados);
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
  .spacing-row {
    display: flex;
    align-items: center;
    gap: 12px;
    margin-bottom: 6px;
  }
  .spacing-label {
    width: 130px;
    flex-shrink: 0;
    font-size: 12px;
    color: #555;
    font-family: 'Courier New', monospace;
  }
  .spacing-bar-wrap {
    flex: 1;
    height: 24px;
    display: flex;
    align-items: center;
  }
  .spacing-bar {
    height: 100%;
    background: #25418e;
    border-radius: 4px;
    min-width: 3px;
    transition: width 0.2s ease;
  }
  .spacing-value {
    width: 44px;
    flex-shrink: 0;
    font-size: 12px;
    color: #888;
    text-align: right;
  }
</style>

<?php foreach ($espaciados as $px):
    $pct = ($max > 0) ? round(($px / $max) * 100, 2) : 0;
    $label = '$espaciados-' . $px;
    $value = $px . 'px';
?>
<div class="spacing-row">
  <span class="spacing-label"><?php echo htmlspecialchars($label); ?></span>
  <div class="spacing-bar-wrap">
    <div class="spacing-bar" style="width:<?php echo $pct; ?>%"></div>
  </div>
  <span class="spacing-value"><?php echo $value; ?></span>
</div>
<?php endforeach; ?>

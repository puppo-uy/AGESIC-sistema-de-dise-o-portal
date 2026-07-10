<style>
  * { box-sizing: border-box; }
  body {
    font-family: 'Open Sans', sans-serif;
    font-size: 13px;
    color: #1a1a1a;
    margin: 0;
    padding: 16px;
  }

  /* Estilos visuales para hacer legibles los ejemplos de flex */
  .demo-item {
    background: #e9ecf4;
    border: 1px solid #9ba8cb;
    border-radius: 4px;
    padding: 10px 16px;
    font-size: 12px;
    font-family: 'Courier New', monospace;
    color: #25418e;
  }

  .demo-section {
    margin-bottom: 24px;
  }
  .demo-label {
    font-size: 11px;
    font-weight: 700;
    text-transform: uppercase;
    letter-spacing: 0.5px;
    color: #777;
    margin: 0 0 6px;
  }
  .demo-code {
    font-size: 11px;
    font-family: 'Courier New', monospace;
    color: #888;
    margin: 0 0 8px;
  }
  .demo-container {
    background: #f9f9f9;
    border: 1px dashed #c2c2c2;
    border-radius: 4px;
    padding: 12px;
  }
</style>

<!-- Default mod-flex -->
<div class="demo-section">
  <p class="demo-label">Comportamiento por defecto</p>
  <p class="demo-code">.mod-flex — columna en móvil, fila desde sm (768px)</p>
  <div class="demo-container">
    <div class="mod-flex">
      <div class="demo-item">Elemento 1</div>
      <div class="demo-item">Elemento 2</div>
      <div class="demo-item">Elemento 3</div>
    </div>
  </div>
</div>

<!-- flex-justify-center -->
<div class="demo-section">
  <p class="demo-label">Centrado horizontal</p>
  <p class="demo-code">.mod-flex.flex-justify-center</p>
  <div class="demo-container">
    <div class="mod-flex flex-justify-center">
      <div class="demo-item">Elemento 1</div>
      <div class="demo-item">Elemento 2</div>
    </div>
  </div>
</div>

<!-- flex-justify-between -->
<div class="demo-section">
  <p class="demo-label">Distribución entre extremos</p>
  <p class="demo-code">.mod-flex.flex-dir-row.flex-justify-between</p>
  <div class="demo-container">
    <div class="mod-flex flex-dir-row flex-justify-between">
      <div class="demo-item">Elemento 1</div>
      <div class="demo-item">Elemento 2</div>
      <div class="demo-item">Elemento 3</div>
    </div>
  </div>
</div>

<!-- flex-items-center con altura -->
<div class="demo-section">
  <p class="demo-label">Alineación vertical centrada</p>
  <p class="demo-code">.mod-flex.flex-dir-row.flex-justify-center.flex-items-center</p>
  <div class="demo-container">
    <div class="mod-flex flex-dir-row flex-justify-center flex-items-center" style="min-height: 100px;">
      <div class="demo-item">Centrado 1</div>
      <div class="demo-item" style="padding-top:24px;padding-bottom:24px;">Centrado 2<br>(más alto)</div>
    </div>
  </div>
</div>

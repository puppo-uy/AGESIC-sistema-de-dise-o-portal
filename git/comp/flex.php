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
  .flex-demo-item {
    background: #e9ecf4;
    border: 1px solid #9ba8cb;
    border-radius: 4px;
    padding: 10px 16px;
    font-size: 12px;
    font-family: 'Courier New', monospace;
    color: #25418e;
  }
  .flex-demo-item--tall {
    padding-top: 24px;
    padding-bottom: 24px;
  }

  .flex-demo-section {
    margin-bottom: 24px;
  }
  .flex-demo-section__label {
    font-size: 12px;
    font-weight: 700;
    text-transform: uppercase;
    letter-spacing: 0.5px;
    color: #555;
    margin: 0 0 6px;
  }
  .flex-demo-section__code {
    font-size: 12px;
    font-family: 'Courier New', monospace;
    color: #25418e;
    font-weight: 600;
    margin: 0 0 8px;
  }
  .flex-demo-container {
    background: #f9f9f9;
    border: 1px dashed #c2c2c2;
    border-radius: 4px;
    padding: 12px;
  }
  .flex-demo-container--min-height {
    min-height: 100px;
  }
</style>

<!-- Default mod-flex -->
<div class="flex-demo-section">
  <p class="flex-demo-section__label">Comportamiento por defecto</p>
  <p class="flex-demo-section__code">.mod-flex — columna en móvil, fila desde sm (768px)</p>
  <div class="flex-demo-container">
    <div class="mod-flex">
      <div class="flex-demo-item">Elemento 1</div>
      <div class="flex-demo-item">Elemento 2</div>
      <div class="flex-demo-item">Elemento 3</div>
    </div>
  </div>
</div>

<!-- flex-justify-center -->
<div class="flex-demo-section">
  <p class="flex-demo-section__label">Centrado horizontal</p>
  <p class="flex-demo-section__code">.mod-flex.flex-justify-center</p>
  <div class="flex-demo-container">
    <div class="mod-flex flex-justify-center">
      <div class="flex-demo-item">Elemento 1</div>
      <div class="flex-demo-item">Elemento 2</div>
    </div>
  </div>
</div>

<!-- flex-justify-between -->
<div class="flex-demo-section">
  <p class="flex-demo-section__label">Distribución entre extremos</p>
  <p class="flex-demo-section__code">.mod-flex.flex-dir-row.flex-justify-between</p>
  <div class="flex-demo-container">
    <div class="mod-flex flex-dir-row flex-justify-between">
      <div class="flex-demo-item">Elemento 1</div>
      <div class="flex-demo-item">Elemento 2</div>
      <div class="flex-demo-item">Elemento 3</div>
    </div>
  </div>
</div>

<!-- flex-items-center con altura -->
<div class="flex-demo-section">
  <p class="flex-demo-section__label">Alineación vertical centrada</p>
  <p class="flex-demo-section__code">.mod-flex.flex-dir-row.flex-justify-center.flex-items-center</p>
  <div class="flex-demo-container flex-demo-container--min-height">
    <div class="mod-flex flex-dir-row flex-justify-center flex-items-center">
      <div class="flex-demo-item">Centrado 1</div>
      <div class="flex-demo-item flex-demo-item--tall">Centrado 2<br>(más alto)</div>
    </div>
  </div>
</div>

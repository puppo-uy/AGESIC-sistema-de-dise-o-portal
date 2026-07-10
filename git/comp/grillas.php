<style>
  * { box-sizing: border-box; }
  body {
    font-family: 'Open Sans', sans-serif;
    font-size: 13px;
    color: #1a1a1a;
    margin: 0;
    padding: 16px;
  }

  /* Estilos visuales para hacer legibles los ejemplos de grilla */
  .grid-demo-col {
    background: #e9ecf4;
    border: 1px solid #9ba8cb;
    border-radius: 4px;
    padding: 10px 12px;
    font-size: 12px;
    font-family: 'Courier New', monospace;
    color: #25418e;
    min-height: 40px;
    display: flex;
    align-items: center;
  }

  .grid-demo-section {
    margin-bottom: 28px;
  }
  .grid-demo-section__label {
    font-size: 12px;
    font-weight: 700;
    text-transform: uppercase;
    letter-spacing: 0.5px;
    color: #555;
    margin: 0 0 8px;
  }
  .grid-demo-section__code {
    font-size: 12px;
    font-family: 'Courier New', monospace;
    color: #25418e;
    font-weight: 600;
    margin: 0 0 8px;
  }

  .grid-demo-row {
    margin-bottom: 0;
  }
  .grid-demo-row--margin-bottom {
    margin-bottom: 12px;
  }
</style>

<!-- row-cols-3 -->
<div class="grid-demo-section">
  <p class="grid-demo-section__label">Control por cantidad de columnas</p>
  <p class="grid-demo-section__code">.row.row-cols-3</p>
  <div class="row row-cols-3 grid-demo-row">
    <div class="col"><div class="grid-demo-col">.col</div></div>
    <div class="col"><div class="grid-demo-col">.col</div></div>
    <div class="col"><div class="grid-demo-col">.col</div></div>
    <div class="col"><div class="grid-demo-col">.col</div></div>
  </div>
</div>

<!-- col-* específicos -->
<div class="grid-demo-section">
  <p class="grid-demo-section__label">Columnas con ancho específico</p>
  <p class="grid-demo-section__code">.row → .col-8 + .col-4</p>
  <div class="row grid-demo-row--margin-bottom">
    <div class="col-8"><div class="grid-demo-col">.col-8</div></div>
    <div class="col-4"><div class="grid-demo-col">.col-4</div></div>
  </div>
  <p class="grid-demo-section__code">.row → .col-3 + .col-5</p>
  <div class="row grid-demo-row">
    <div class="col-3"><div class="grid-demo-col">.col-3</div></div>
    <div class="col-5"><div class="grid-demo-col">.col-5</div></div>
  </div>
</div>

<!-- row--no-stack -->
<div class="grid-demo-section">
  <p class="grid-demo-section__label">Forzar columnas en móviles</p>
  <p class="grid-demo-section__code">.row.row--no-stack → .col-8 + .col-4</p>
  <div class="row row--no-stack grid-demo-row">
    <div class="col-8"><div class="grid-demo-col">.col-8 (row--no-stack)</div></div>
    <div class="col-4"><div class="grid-demo-col">.col-4 (row--no-stack)</div></div>
  </div>
</div>

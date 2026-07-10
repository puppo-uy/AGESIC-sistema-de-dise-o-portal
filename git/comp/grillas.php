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
  .demo-col {
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

  .demo-section {
    margin-bottom: 28px;
  }
  .demo-label {
    font-size: 11px;
    font-weight: 700;
    text-transform: uppercase;
    letter-spacing: 0.5px;
    color: #777;
    margin: 0 0 8px;
  }
  .demo-code {
    font-size: 11px;
    font-family: 'Courier New', monospace;
    color: #888;
    margin: 0 0 8px;
  }
</style>

<!-- row-cols-3 -->
<div class="demo-section">
  <p class="demo-label">Control por cantidad de columnas</p>
  <p class="demo-code">.row.row-cols-3</p>
  <div class="row row-cols-3" style="margin-bottom:0;">
    <div class="col"><div class="demo-col">.col</div></div>
    <div class="col"><div class="demo-col">.col</div></div>
    <div class="col"><div class="demo-col">.col</div></div>
    <div class="col"><div class="demo-col">.col</div></div>
  </div>
</div>

<!-- col-* específicos -->
<div class="demo-section">
  <p class="demo-label">Columnas con ancho específico</p>
  <p class="demo-code">.row → .col-8 + .col-4</p>
  <div class="row" style="margin-bottom:12px;">
    <div class="col-8"><div class="demo-col">.col-8</div></div>
    <div class="col-4"><div class="demo-col">.col-4</div></div>
  </div>
  <p class="demo-code">.row → .col-3 + .col-5</p>
  <div class="row" style="margin-bottom:0;">
    <div class="col-3"><div class="demo-col">.col-3</div></div>
    <div class="col-5"><div class="demo-col">.col-5</div></div>
  </div>
</div>

<!-- row--no-stack -->
<div class="demo-section">
  <p class="demo-label">Forzar columnas en móviles</p>
  <p class="demo-code">.row.row--no-stack → .col-8 + .col-4</p>
  <div class="row row--no-stack" style="margin-bottom:0;">
    <div class="col-8"><div class="demo-col">.col-8 (row--no-stack)</div></div>
    <div class="col-4"><div class="demo-col">.col-4 (row--no-stack)</div></div>
  </div>
</div>

<?php
  // Valores por defecto
  if (!isset($archivo_nombre) || $archivo_nombre === '') {
    $archivo_nombre = "Nombre del archivo (.pdf 354 KB)";
  }

  if (!isset($archivo_descripcion) || $archivo_descripcion === '') {
    $archivo_descripcion = "Descripción del archivo que se descarga";
  }

  if (!isset($clase_modificadora)) {
    $clase_modificadora = '';
  }
	// Variante más chica: $clase_modificadora = "Download--small"
?>

<a class="Download <?php echo $clase_modificadora; ?>" href="#" aria-label="Descargar archivo: <?php echo htmlspecialchars($archivo_nombre); ?>" download>
  <div class="Media">
    <div class="Media-image">
      <span class="Download-icon">
        <?php include "../recursos/assets/icons-inc/icon-download.php"; ?>
      </span>
    </div>
    <div class="Media-body">
      <div class="Download-title"><?php echo htmlspecialchars($archivo_nombre); ?></div>
      <div class="Download-description"><?php echo htmlspecialchars($archivo_descripcion); ?></div>
    </div>
  </div>
</a>

<?php
  // Limpieza de variables
  unset($archivo_nombre, $archivo_descripcion, $clase_modificadora);
?>
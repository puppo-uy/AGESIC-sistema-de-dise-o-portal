<?php
  $title = 'Componentes';

  // Componentes activos accesibles desde el menú de navegación actual
  $componentes = [
    // Acciones
    [
      'title' => 'Acciones',
      'category' => 'Acciones',
      'url' => 'sist-doc-acciones.php',
      'description' => 'Componentes con los que el usuario interactúa para ejecutar tareas o comandos en la interfaz.',
      'keywords' => 'acciones interactivo botones enlaces comandos tareas'
    ],
    [
      'title' => 'Botones',
      'category' => 'Acciones',
      'url' => 'sist-doc-botones.php',
      'description' => 'Permiten al usuario ejecutar acciones dentro del sistema con diferentes niveles de jerarquía y estados.',
      'keywords' => 'botones boton button primario secundario accion click cta submit'
    ],
    [
      'title' => 'Enlaces',
      'category' => 'Acciones',
      'url' => 'sist-doc-enlaces.php',
      'description' => 'Permiten acceder a información, secciones internas o recursos externos con estilos accesibles.',
      'keywords' => 'enlaces enlace link hipervinculo url navegacion texto'
    ],
    [
      'title' => 'Grupo de botones',
      'category' => 'Acciones',
      'url' => 'sist-doc-grupo-botones.php',
      'description' => 'Agrupa dos o más botones relacionados para presentar un conjunto coordinado de opciones.',
      'keywords' => 'grupo de botones button group opciones conjunto botones agrupados'
    ],

    // Mensajes y diálogos
    [
      'title' => 'Mensajes y diálogos',
      'category' => 'Mensajes y diálogos',
      'url' => 'sist-doc-mensajes-dialogos.php',
      'description' => 'Componentes para comunicar información oportuna, retroalimentación del sistema y confirmaciones.',
      'keywords' => 'mensajes dialogos feedback notificaciones confirmaciones comunicacion'
    ],
    [
      'title' => 'Alertas',
      'category' => 'Mensajes y diálogos',
      'url' => 'sist-doc-alertas.php',
      'description' => 'Comunican mensajes relevantes sobre el estado de un proceso, resultado de una acción o advertencia.',
      'keywords' => 'alertas aviso banner error advertencia exito info notificacion estado'
    ],
    [
      'title' => 'Modales',
      'category' => 'Mensajes y diálogos',
      'url' => 'sist-doc-modales.php',
      'description' => 'Ventanas superpuestas que aparecen sobre el contenido para solicitar confirmación o mostrar información crítica.',
      'keywords' => 'modales modal popup ventana emergente dialogo superpuesto confirmacion'
    ],
    [
      'title' => 'Indicadores de carga',
      'category' => 'Mensajes y diálogos',
      'url' => 'sist-doc-indicadores.php',
      'description' => 'Comunican al usuario que una operación o carga de contenido se encuentra en progreso.',
      'keywords' => 'indicadores de carga spinner loader progreso cargando espera loading'
    ],
    [
      'title' => 'Tags',
      'category' => 'Mensajes y diálogos',
      'url' => 'sist-doc-tags.php',
      'description' => 'Etiquetas visuales que permiten clasificar información, atributos o estados de elementos.',
      'keywords' => 'tags tag etiqueta badge clasificacion categoria estado filtro rotulo'
    ],

    // Textos
    [
      'title' => 'Textos',
      'category' => 'Textos',
      'url' => 'sist-doc-textos.php',
      'description' => 'Visión general de componentes tipográficos y jerarquía de contenidos en pantalla.',
      'keywords' => 'textos texto tipografia contenido jerarquia tipografica fuentes'
    ],
    [
      'title' => 'Títulos',
      'category' => 'Textos',
      'url' => 'sist-doc-titulos.php',
      'description' => 'Jerarquía de encabezados (H1 a H6) para estructurar el contenido de forma clara y accesible.',
      'keywords' => 'titulos titulo encabezados heading h1 h2 h3 h4 h5 h6 jerarquia'
    ],
    [
      'title' => 'Párrafos',
      'category' => 'Textos',
      'url' => 'sist-doc-parrafos.php',
      'description' => 'Estilos y espaciados para cuerpos de texto claros, legibles y con adecuado contraste.',
      'keywords' => 'parrafos parrafo cuerpo de texto paragraph lectura bajada descripcion'
    ],
    [
      'title' => 'Listados',
      'category' => 'Textos',
      'url' => 'sist-doc-listados.php',
      'description' => 'Estructuras para organizar información en listas ordenadas, desordenadas o descriptivas.',
      'keywords' => 'listados listas lista ul ol items viñetas elementos'
    ],

    // Íconos
    [
      'title' => 'Íconos',
      'category' => 'Íconos',
      'url' => 'sist-doc-iconos.php',
      'description' => 'Catálogo de íconos funcionales para comunicar acciones, estados y orientar la interacción visual.',
      'keywords' => 'iconos icono iconografia svg simbolos pictogramas funcional'
    ]
  ];

  // Obtener categorías únicas y conteos
  $categorias = [];
  foreach ($componentes as $comp) {
    $cat = $comp['category'];
    if (!isset($categorias[$cat])) {
      $categorias[$cat] = 0;
    }
    $categorias[$cat]++;
  }
?>
<?php include "inc/head.php"; ?>

  <!-- Cabezal -->
  <?php include "inc/header.php"; ?>

  <!-- Breadcrumb -->
  <div class="Breadcrumb">
    <div class="Container">
      <ul>
        <li><a href="sist-que-es.php">Inicio</a></li>
        <li>Componentes</li>
      </ul>
    </div>
  </div>

  <!-- Contenido -->
  <div class="u-main" id="contenido">
    <div class="Container">
      
      <div class="Page">
        <div class="Page-body">
          <div class="Page-document">

            <span class="Page-subtitle">Sistema de Diseño del Estado Uruguayo</span>
            <h2 class="Page-title">Componentes</h2>
            
            <div class="Page-info">
              <div class="Bar">
                <div class="Bar-cell">
                  <div class="Page-date">Versión 1.0</div>
                </div>
              </div>
            </div>
            
            <p class="Page-description">Catálogo de componentes accesibles y reutilizables para la construcción de interfaces digitales del Estado Uruguayo. Utilizá el buscador y los filtros para explorar la documentación de cada componente.</p>

            <!-- Bloque de Buscador y Filtros -->
            <div class="Catalog-controls u-mt4">
              
              <!-- Campo de búsqueda -->
              <div class="Catalog-searchWrap">
                <label for="catalog-search" class="u-hideVisually">Buscar componentes</label>
                <div class="Catalog-searchBox">
                  <svg class="Catalog-searchIcon" aria-hidden="true" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <circle cx="11" cy="11" r="8"></circle>
                    <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
                  </svg>
                  <input 
                    type="search" 
                    id="catalog-search" 
                    class="Catalog-searchInput" 
                    placeholder="Buscar componentes por nombre, descripción o categoría..." 
                    autocomplete="off"
                    spellcheck="false"
                  >
                  <button type="button" id="catalog-clear" class="Catalog-clearBtn" aria-label="Limpiar búsqueda" style="display: none;">
                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                      <line x1="18" y1="6" x2="6" y2="18"></line>
                      <line x1="6" y1="6" x2="18" y2="18"></line>
                    </svg>
                  </button>
                </div>
              </div>

              <!-- Filtros por categoría -->
              <div class="Catalog-filterPills u-mt3" role="group" aria-label="Filtrar por categoría">
                <button type="button" class="Catalog-pill is-active" data-category="all">
                  Todos <span class="Catalog-pillCount"><?php echo count($componentes); ?></span>
                </button>
                <?php foreach ($categorias as $cat => $count): ?>
                  <button type="button" class="Catalog-pill" data-category="<?php echo htmlspecialchars($cat); ?>">
                    <?php echo htmlspecialchars($cat); ?> <span class="Catalog-pillCount"><?php echo $count; ?></span>
                  </button>
                <?php endforeach; ?>
              </div>

              <!-- Contador de resultados accesible -->
              <div class="Catalog-metaBar u-mt3">
                <p id="catalog-counter" class="Catalog-counter" aria-live="polite">
                  Mostrando <strong id="catalog-count-num"><?php echo count($componentes); ?></strong> de <?php echo count($componentes); ?> componentes
                </p>
              </div>

            </div>

            <!-- Grilla de Componentes -->
            <div class="Catalog-grid u-mt3" id="catalog-grid">
              <?php foreach ($componentes as $comp): ?>
                <article 
                  class="ComponentCard" 
                  data-category="<?php echo htmlspecialchars($comp['category']); ?>"
                  data-title="<?php echo htmlspecialchars(mb_strtolower($comp['title'], 'UTF-8')); ?>"
                  data-desc="<?php echo htmlspecialchars(mb_strtolower($comp['description'], 'UTF-8')); ?>"
                  data-keywords="<?php echo htmlspecialchars(mb_strtolower($comp['keywords'], 'UTF-8')); ?>"
                >
                  <div class="ComponentCard-body">
                    <span class="ComponentCard-tag"><?php echo htmlspecialchars($comp['category']); ?></span>
                    <h3 class="ComponentCard-title">
                      <a href="<?php echo htmlspecialchars($comp['url']); ?>">
                        <?php echo htmlspecialchars($comp['title']); ?>
                      </a>
                    </h3>
                    <p class="ComponentCard-desc">
                      <?php echo htmlspecialchars($comp['description']); ?>
                    </p>
                  </div>
                  <div class="ComponentCard-footer">
                    <a href="<?php echo htmlspecialchars($comp['url']); ?>" class="ComponentCard-action" tabindex="-1" aria-hidden="true">
                      <span>Ver documentación</span>
                      <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <line x1="5" y1="12" x2="19" y2="12"></line>
                        <polyline points="12 5 19 12 12 19"></polyline>
                      </svg>
                    </a>
                  </div>
                </article>
              <?php endforeach; ?>
            </div>

            <!-- Estado Vacío (Sin resultados) -->
            <div id="catalog-empty" class="Catalog-empty Alert Alert--info u-mt4" style="display: none;">
              <h3 class="Alert-title">No se encontraron componentes</h3>
              <p>No hay componentes que coincidan con los criterios de búsqueda actuales. Podés intentar con otros términos o reiniciar los filtros.</p>
              <button type="button" id="catalog-reset" class="Button Button--primary Button--small u-mt2">
                Mostrar todos los componentes
              </button>
            </div>

          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Estilos del Catálogo de Componentes -->
  <style>
    /* Controles y Buscador */
    .Catalog-controls {
      background: #ffffff;
      border: 1px solid #e0e0e0;
      border-radius: 6px;
      padding: 1.5rem;
      box-shadow: 0 1px 3px rgba(0, 0, 0, 0.04);
    }
    .Catalog-searchWrap {
      position: relative;
    }
    .Catalog-searchBox {
      display: flex;
      align-items: center;
      position: relative;
      background: #ffffff;
      border: 2px solid #25418e;
      border-radius: 4px;
      transition: border-color 0.2s, box-shadow 0.2s;
    }
    .Catalog-searchBox:focus-within {
      outline: 3px solid orange;
      outline-offset: 1px;
    }
    .Catalog-searchIcon {
      margin-left: 1rem;
      color: #25418e;
      flex-shrink: 0;
    }
    .Catalog-searchInput {
      flex: 1;
      border: none;
      background: transparent;
      padding: 0.75rem 0.75rem 0.75rem 0.5rem;
      font-size: 1rem;
      font-family: inherit;
      color: #333;
      outline: none;
      width: 100%;
    }
    .Catalog-searchInput::-webkit-search-cancel-button {
      display: none;
    }
    .Catalog-clearBtn {
      background: none;
      border: none;
      cursor: pointer;
      color: #666;
      padding: 0.5rem 0.75rem;
      display: flex;
      align-items: center;
      justify-content: center;
    }
    .Catalog-clearBtn:hover {
      color: #25418e;
    }

    /* Filtros por Categoría */
    .Catalog-filterPills {
      display: flex;
      flex-wrap: wrap;
      gap: 0.5rem;
      align-items: center;
    }
    .Catalog-pill {
      display: inline-flex;
      align-items: center;
      gap: 0.35rem;
      padding: 0.35rem 0.75rem;
      font-size: 0.875rem;
      font-family: inherit;
      font-weight: 500;
      color: #25418e;
      background: #f4f6fa;
      border: 1px solid #c7d2e8;
      border-radius: 999px;
      cursor: pointer;
      transition: all 0.2s ease;
      line-height: 1.3;
    }
    .Catalog-pill:hover {
      background: #e4eaf7;
      border-color: #25418e;
    }
    .Catalog-pill.is-active {
      background: #25418e;
      color: #ffffff;
      border-color: #25418e;
    }
    .Catalog-pillCount {
      display: inline-block;
      font-size: 0.75rem;
      padding: 0.1rem 0.4rem;
      border-radius: 999px;
      background: rgba(37, 65, 142, 0.12);
      color: inherit;
    }
    .Catalog-pill.is-active .Catalog-pillCount {
      background: rgba(255, 255, 255, 0.25);
      color: #ffffff;
    }

    /* Barra de conteo */
    .Catalog-metaBar {
      display: flex;
      align-items: center;
      justify-content: space-between;
      border-top: 1px solid #f0f0f0;
      padding-top: 0.75rem;
      margin-bottom: 0;
    }
    .Catalog-counter {
      font-size: 0.875rem;
      color: #666;
      margin-bottom: 0;
    }
    .Catalog-counter strong {
      color: #25418e;
    }

    /* Grilla de Tarjetas */
    .Catalog-grid {
      display: grid;
      grid-template-columns: repeat(auto-fill, minmax(280px, 1fr));
      gap: 1.25rem;
    }
    @media screen and (min-width: 992px) {
      .Catalog-grid {
        grid-template-columns: repeat(3, 1fr);
        gap: 1.5rem;
      }
    }

    /* Tarjeta de Componente */
    .ComponentCard {
      background: #ffffff;
      border: 1px solid #e2e5e9;
      border-radius: 6px;
      display: flex;
      flex-direction: column;
      justify-content: space-between;
      padding: 1.25rem;
      transition: border-color 0.2s, box-shadow 0.2s, transform 0.2s;
      position: relative;
    }
    .ComponentCard:hover {
      border-color: #25418e;
      box-shadow: 0 4px 14px rgba(37, 65, 142, 0.1);
      transform: translateY(-2px);
    }
    .ComponentCard-body {
      display: flex;
      flex-direction: column;
      flex-grow: 1;
    }
    .ComponentCard-tag {
      align-self: flex-start;
      font-size: 0.75rem;
      font-weight: 600;
      text-transform: uppercase;
      letter-spacing: 0.03em;
      color: #25418e;
      background: #eef2f9;
      padding: 0.2rem 0.5rem;
      border-radius: 3px;
      margin-bottom: 0.75rem;
    }
    .ComponentCard-title {
      font-size: 1.25rem;
      font-weight: 600;
      margin-top: 0;
      margin-bottom: 0.5rem;
      line-height: 1.3;
    }
    .ComponentCard-title a {
      color: #25418e;
      text-decoration: none;
    }
    .ComponentCard-title a:hover {
      text-decoration: underline;
    }
    .ComponentCard-title a::after {
      content: "";
      position: absolute;
      top: 0;
      right: 0;
      bottom: 0;
      left: 0;
      z-index: 1;
    }
    .ComponentCard-desc {
      font-size: 0.9375rem;
      line-height: 1.5;
      color: #555;
      margin-bottom: 1rem;
      flex-grow: 1;
    }
    .ComponentCard-footer {
      border-top: 1px solid #f0f0f0;
      padding-top: 0.75rem;
      margin-top: auto;
    }
    .ComponentCard-action {
      display: inline-flex;
      align-items: center;
      gap: 0.35rem;
      font-size: 0.875rem;
      font-weight: 600;
      color: #25418e;
      text-decoration: none;
    }
    .ComponentCard-action svg {
      transition: transform 0.2s ease;
    }
    .ComponentCard:hover .ComponentCard-action svg {
      transform: translateX(4px);
    }

    /* Estado Vacío */
    .Catalog-empty {
      padding: 2rem;
      text-align: center;
    }
    .Catalog-empty .Alert-title {
      margin-bottom: 0.5rem;
    }
  </style>

  <!-- Script interactivo de Búsqueda y Filtrado -->
  <script>
    document.addEventListener('DOMContentLoaded', function () {
      var searchInput = document.getElementById('catalog-search');
      var clearBtn = document.getElementById('catalog-clear');
      var pills = document.querySelectorAll('.Catalog-pill');
      var cards = document.querySelectorAll('.ComponentCard');
      var countNum = document.getElementById('catalog-count-num');
      var emptyState = document.getElementById('catalog-empty');
      var grid = document.getElementById('catalog-grid');
      var resetBtn = document.getElementById('catalog-reset');

      var currentCategory = 'all';
      var currentSearch = '';

      // Normalizador de texto para búsquedas (quita tildes y diacríticos)
      function normalizeText(text) {
        return (text || '')
          .toLowerCase()
          .normalize('NFD')
          .replace(/[\u0300-\u036f]/g, '')
          .trim();
      }

      // Función principal de filtrado
      function filterComponents() {
        var term = normalizeText(currentSearch);
        var visibleCount = 0;

        cards.forEach(function (card) {
          var cardCategory = card.getAttribute('data-category');
          var cardTitle = normalizeText(card.getAttribute('data-title'));
          var cardDesc = normalizeText(card.getAttribute('data-desc'));
          var cardKeywords = normalizeText(card.getAttribute('data-keywords'));

          // Coincidencia de categoría
          var matchesCategory = (currentCategory === 'all' || cardCategory === currentCategory);

          // Coincidencia de texto
          var matchesSearch = true;
          if (term.length > 0) {
            var searchTokens = term.split(/\s+/);
            matchesSearch = searchTokens.every(function (token) {
              return cardTitle.indexOf(token) !== -1 ||
                     cardDesc.indexOf(token) !== -1 ||
                     cardKeywords.indexOf(token) !== -1 ||
                     normalizeText(cardCategory).indexOf(token) !== -1;
            });
          }

          if (matchesCategory && matchesSearch) {
            card.style.display = '';
            visibleCount++;
          } else {
            card.style.display = 'none';
          }
        });

        // Actualizar contador
        countNum.textContent = visibleCount;

        // Mostrar / Ocultar estado vacío
        if (visibleCount === 0) {
          grid.style.display = 'none';
          emptyState.style.display = 'block';
        } else {
          grid.style.display = '';
          emptyState.style.display = 'none';
        }

        // Mostrar / Ocultar botón limpiar
        if (currentSearch.length > 0) {
          clearBtn.style.display = 'flex';
        } else {
          clearBtn.style.display = 'none';
        }
      }

      // Evento de escritura en el buscador
      searchInput.addEventListener('input', function (e) {
        currentSearch = e.target.value;
        filterComponents();
      });

      // Evento botón limpiar búsqueda
      clearBtn.addEventListener('click', function () {
        searchInput.value = '';
        currentSearch = '';
        searchInput.focus();
        filterComponents();
      });

      // Eventos en los pills de categoría
      pills.forEach(function (pill) {
        pill.addEventListener('click', function () {
          pills.forEach(function (p) { p.classList.remove('is-active'); });
          pill.classList.add('is-active');
          currentCategory = pill.getAttribute('data-category');
          filterComponents();
        });
      });

      // Evento botón reiniciar en estado vacío
      if (resetBtn) {
        resetBtn.addEventListener('click', function () {
          searchInput.value = '';
          currentSearch = '';
          currentCategory = 'all';
          pills.forEach(function (p) { p.classList.remove('is-active'); });
          var allPill = document.querySelector('.Catalog-pill[data-category="all"]');
          if (allPill) allPill.classList.add('is-active');
          searchInput.focus();
          filterComponents();
        });
      }
    });
  </script>

  <!-- Footer -->
  <?php include "inc/footer.php"; ?>

<?php include "inc/foot.php"; ?>

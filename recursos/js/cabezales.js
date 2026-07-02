/*
  Funcionamiento de Cabezales
 */

var $width = $(window).width();
var $respwidth = 992;

$(function () {

  function setupMenus() {
    $('.js-navDropdown').each(function () {
      var menu = $(this);

			menu.find('ul > li:has(.subnav)').find('a').addClass('w-sub');
			
			// Solo agrega aria-expanded a los elementos con la clase .NavToggle-item
			menu.find('.NavToggle-item').attr('aria-expanded', 'false');

			// Click en los elementos principales para desplegar/ocultar submenús
			menu.find('.NavToggle-item').click(function (e) {
				var subnav = $(this).siblings('.subnav');
				var isExpanded = $(this).attr('aria-expanded') === 'true';

				if (subnav.length > 0) {
					e.preventDefault();

					// Ocultar todos los submenús y restablecer aria-expanded
					menu.find('.subnav').not(subnav).removeClass('show').removeClass('show-right');
					menu.find('.NavToggle-item').not(this).removeClass('active').attr('aria-expanded', 'false');

					// Alternar visibilidad del submenú actual y su atributo aria-expanded
					subnav.toggleClass('show');
					$(this).toggleClass('active');
					$(this).attr('aria-expanded', !isExpanded);

					// Verificar si el submenú se corta contra el margen derecho
					if (subnav.offset().left + subnav.outerWidth() > $(window).width()) {
						subnav.addClass('show-right');
					}
				}
			});
			
			// Cerrar submenú con ESC
			menu.on('keydown', function (e) {
				if (e.key === 'Escape') {
					// Encuentra el submenú más cercano que estÃ© visible
					var activeSubnav = menu.find('.subnav.show');
					var activeToggle = activeSubnav.siblings('.NavToggle-item');

					if (activeSubnav.length > 0) {
						e.preventDefault();

						// Cerrar el submenú visible y restablecer aria-expanded
						activeSubnav.removeClass('show').removeClass('show-right');
						activeToggle.removeClass('active').attr('aria-expanded', 'false');

						// Enfocar de vuelta el elemento principal del submenú para accesibilidad
						activeToggle.focus();
					}
				}
			});
			
      // Ocultar el submenú al hacer clic en cualquier parte fuera del menú			
			$(document).click(function (event) {
				if (!$(event.target).closest(menu).length) {
					menu.find('.subnav').removeClass('show').removeClass('show-right');
					menu.find('.NavToggle-item').removeClass('active').attr('aria-expanded', 'false');
				}
			});
			
      // Ocultar el submenú al salir del mismo. (delay 250)
      var hideTimeout; // Variable para almacenar el tiempo de espera para ocultar el submenú

      menu.mouseleave(function () {
        // Establecer un retraso de 250 milisegundos (0.25 segundos) antes de ocultar el submenú
        hideTimeout = setTimeout(function () {
					menu.find('.subnav').removeClass('show').removeClass('show-right');
					menu.find('.NavToggle-item').removeClass('active').attr('aria-expanded', 'false');
				}, 250);
			});

      // Cancelar el tiempo de espera si el usuario vuelve al menú antes de que se oculte
			menu.find('.NavToggle-item, .subnav').mouseenter(function () {
				clearTimeout(hideTimeout);
			});
    });
  }

  // Llama a la función setupMenus para inicializar todos los menús
  setupMenus();

	var navFlex = $('.Nav--flex');
	var navSearchWrapper = $('.NavSearch-wrapper');
	var subNav = navFlex.find('.subnav');
	var navTrigger = $('.js-navTrigger');
	var headerBody = $('.Header-body');
	var headerTop = $('.Header-top');
	var searchTrigger = $('.js-searchTrigger');
	var headerSearch = $('.Header-search')
	
		
	// ESC para cerrar buscador y volver al menú (solo si el foco está dentro del buscador)
	$(document).on('keydown', function(e) {
			if (e.key === 'Escape' || e.keyCode === 27) {
					// Verificar si el buscador está visible y el foco está dentro de Ã©l
					if (headerSearch.hasClass('show') && $('.Header-search').has(document.activeElement).length > 0) {
							headerSearch.removeClass('show'); // Ocultar buscador
							$('.Header-right .searchButtonWrap-md').removeClass('hide'); // Mostrar botón buscar
							$('.Header-right nav ul').removeClass('hide'); // Mostrar menú

							// Ajustar tabindex de nuevo
							$('#menu a').removeAttr('tabindex'); // Hacer accesible el menú
							$('.Header-search input, .Header-search button').attr('tabindex', '-1'); // Ocultar elementos del buscador del foco

							// Devolver el foco al botón "Buscar"
							$('#searchButtonWrap-md button').focus();
					}
			}
	});

	
	// Buscador abierto en cabezal móvil de Catálogo
	navTrigger.click(function (e) {
		e.preventDefault();
		navSearchWrapper.css('top', headerBody.outerHeight() + headerTop.outerHeight() - 1);
		navSearchWrapper.removeClass('openSearch');
		navFlex.toggleClass('is-open');
		searchTrigger.removeClass('show');
		headerSearch.removeClass('show');
		$(this).toggleClass('show');
		navSearchWrapper.toggleClass('openNav');
		
		// Enviar foco al primer <a> dentro de #menu
    const firstLink = document.querySelector('#menu a');
    if (firstLink) {
        firstLink.focus();
    }
		// Elimina la clase si existe
		$('.Header--catalogo').removeClass('Header--openSearch');
	});

	searchTrigger.click(function (e) {
		e.preventDefault();
		navSearchWrapper.css('top', headerBody.outerHeight() + headerTop.outerHeight() - 1); 
		navSearchWrapper.removeClass('openNav');
		navFlex.removeClass('is-open');
		navTrigger.removeClass('show');
		$(this).toggleClass('show'); 
		navSearchWrapper.toggleClass('openSearch'); 
		$('#search').focus();
		// Elimina la clase si existe
		$('.Header--catalogo').removeClass('Header--openSearch');
	});

	// Despliega buscador en Header--catalogo al abrir mediante click
	if ($('.Header--catalogo').length > 0) {
			$('#navButtonWrap-md').click();
		
			if ($(window).width() < $respwidth) {
				searchTrigger.click();
				$('.Header--catalogo').toggleClass('Header--openSearch');
			}
	}
	
	// Menú padre Minisitio
	$('.js-site-menu-trigger').click(function (e) {
		e.preventDefault();
		$('.Nav-site').toggleClass('is-open');
		$('.Parent').toggleClass('is-open');
		$(this).toggleClass('is-open');
	});
	
});


// Megamenú GUBUY 
$(document).ready(function () {
  const $megamenu = $('.gubuy-mega-menu');
  const $triggerButton = $('.js-gubuyMegamenu');
  const excludedIds = ['#item-meg-1', '#item-meg-2', '#item-meg-3', '#item-meg-4', '#item-meg-5'];
  let originalParent = $megamenu.parent(); // Guardamos la posición original en el DOM

  function relocateMegamenu() {
    if ($(window).width() < 992) {
      $('.Header-body').before($megamenu);
    } else {
      originalParent.append($megamenu); // Restauramos la posición original en escritorio
    }
  }

  // Relocalizar en carga y en resize
  relocateMegamenu();
  $(window).resize(relocateMegamenu);

  // Asegurarse de que el menú no sea accesible al cargar la página
  if (!$megamenu.hasClass('show')) {
    $megamenu.find('a, button, input, [tabindex]').attr('tabindex', '-1');
  }

  // Mostrar/Ocultar megamenú
  $triggerButton.add('.close-mega-menu').click(function (e) {
    e.preventDefault();

    const isVisible = $megamenu.hasClass('show');

    if (!isVisible) {
      // Mostrar el megamenú
      $megamenu.addClass('show');
      $triggerButton.attr('aria-expanded', 'true');

      // Hacer interactivos los elementos dentro del menú
      $megamenu.find('a, button, input, [tabindex]').removeAttr('tabindex');

      // Restaurar tabindex="-1" en los elementos excluidos
      excludedIds.forEach((id) => {
        $megamenu.find(id).attr('tabindex', '-1');
      });

      // Mover el foco al primer elemento interactivo visible
      const $firstFocusable = $megamenu.find('a, button, input, [tabindex]:not([tabindex="-1"])').filter(':visible').first();
      if ($firstFocusable.length) {
        $firstFocusable.focus();
      }

      // Agregar listener para cerrar con tecla Escape
      $(document).on('keydown.megamenu', function (event) {
        if (event.key === 'Escape') {
          closeMegamenu($megamenu, $triggerButton);
        }
      });

    } else {
      closeMegamenu($megamenu, $triggerButton);
    }
  });

  // Función para cerrar el megamenú
  function closeMegamenu($megamenu, $triggerButton) {
    $megamenu.removeClass('show');
    $triggerButton.attr('aria-expanded', 'false');

    // Hacer no interactivos los elementos dentro del menú
    $megamenu.find('a, button, input, [tabindex]').attr('tabindex', '-1');

    // Devolver el foco al botón que abrió el menú
    $triggerButton.focus();

    // Remover listener de tecla Escape
    $(document).off('keydown.megamenu');
  }

  // Manejar el foco fuera del megamenú cuando no está visible
  $(document).on('focusin', function (e) {
    if (!$megamenu.hasClass('show') && $megamenu.has(e.target).length) {
      e.preventDefault();
      $triggerButton.focus();
    }
  });
});


// Control de botón menú/buscador encapsulado

(function HeaderSearchControl() {

  const searchBtn = $('#searchButtonWrap-md');
  const navBtn = $('#navButtonWrap-md');
  const headerSearch = $('.Header-search');
  const menu = $('#menu');
  const menuLinks = $('#menu a');
  const searchInputs = $('.Header-search input, .Header-search button');

  function toggleSearch(e, triggerBtn) {
    e.preventDefault();

    // Mostrar / ocultar buscador
    headerSearch.toggleClass('show');

    // Ocultar / mostrar botones del header
    $('.Header-right .searchButtonWrap-md').toggleClass('hide');
    $('.Header-right nav ul').toggleClass('hide');

    // Tabindex del menú
    if (menu.hasClass('hide')) {
      menuLinks.attr('tabindex', '-1');
    } else {
      menuLinks.removeAttr('tabindex');
    }

    // Tabindex del buscador
    if (headerSearch.hasClass('show')) {
      searchInputs.removeAttr('tabindex');
    } else {
      searchInputs.attr('tabindex', '-1');
    }

    // Foco cuando se abre desde el botón de búsqueda
    if (triggerBtn.is(searchBtn)) {
      $('#search').focus();
    }

    // Si se abrió desde el botón de menú
    if (triggerBtn.is(navBtn)) {
      $('#item-1').focus();
    }
  }

  // Eventos de clic
  searchBtn.add(navBtn).on('click', function (e) {
    toggleSearch(e, $(this));
  });

})();
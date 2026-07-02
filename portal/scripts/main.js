(function() {
  /**
   * Reemplaza clase 'no-js' del tag <html> por la clase 'js' (sin utilizar jQuery)
   */

  var htmlTag = document.getElementsByTagName('html')[0];
  htmlTag.className = htmlTag.className.replace(/\bno-js\b/, '') + 'js';

  /**
   * Detect if is a Touch Device
   * @return {Boolean} true if is a touch device
   */

  function isTouchDevice() {
    return 'ontouchstart' in window || navigator.maxTouchPoints;
  }

  /**
   * Agrega clase touch / no-touch si el navegador es touch o no
   */

  if (isTouchDevice()) {
    htmlTag.className = htmlTag.className + ' touch';
  } else {
    htmlTag.className = htmlTag.className + ' no-touch';
  }

  /**
   * isIE
   *
   * Detect IE and version number through injected conditional comments
   * (no UA detect, no need for cond. compilation / jscript check)
   *
   * version arg is for IE version (optional)
   * comparison arg supports 'lte', 'gte', etc (optional)
   */

  function isIE(version, comparison) {
    var cc = 'IE';
    var b = document.createElement('B');
    var docElem = document.documentElement;
    var isIEFlag = false;

    if (version) {
      cc = cc + ' ' + version;

      if (comparison) {
        cc = comparison + ' ' + cc;
      }
    }

    b.innerHTML = '<!--[if ' + cc + ']><b id="iecctest"></b><![endif]-->';
    docElem.appendChild(b);
    isIEFlag = Boolean(document.getElementById('iecctest')); // FIX: !!document.getElementById('iecctest')
    docElem.removeChild(b);

    return isIEFlag;
  }

  /**
   * Agrega clase ie8 / no-ie8 si el navegador es < IE8
   */

  if (isIE(8, 'lte')) {
    htmlTag.className = htmlTag.className + ' ie8';
  } else {
    htmlTag.className = htmlTag.className + ' no-ie8';
  }

  /**
   * Makes "skip to content" link work correctly in IE9, Chrome, and Opera
   * for better accessibility.
   * @link http://www.nczonline.net/blog/2013/01/15/fixing-skip-to-content-links/
   */

  (function() {
    var ua = navigator.userAgent.toLowerCase();

    if ((ua.indexOf('webkit') > -1 || ua.indexOf('opera') > -1 || ua.indexOf('msie') > -1) &&
      document.getElementById && window.addEventListener) {
      window.addEventListener('hashchange', function() {
        var element = document.getElementById(location.hash.substring(1));

        if (element) {
          if (!(/^(?:a|select|input|button|textarea)$/i).test(element.nodeName)) {
            element.tabIndex = -1;
          }

          element.focus();
        }
      }, false);
    }
  })();

  /**
   * Verifica que jQuery este definido y sino deja de leer
   */

  if (typeof jQuery === 'undefined') {
    throw new Error('JavaScript de Portal Unificado requiere jQuery.');
  }

  /**
   * Toggle Attribute (jQuery Plugin)
   * Usage: $(this).toggleAttr('aria-expanded', 'true', 'false');
   */

  $.fn.toggleAttr = function(attr, attr1, attr2) {
    return this.each(function() {
      var self = $(this);

      if (self.attr(attr) == attr1) {
        self.attr(attr, attr2);
      } else {
        self.attr(attr, attr1);
      }
    });
  };

  /**
   * Accessible Menu
   */

  $.fn.accessibleMenu = function() {
    var el = $(this);

    var itemClass = 'Nav-item';
    var hoverClass = 'hover';
    var subnavClass = 'Nav-subnav';

    $('.Nav-item', el).mouseover(function() {
      $(this).addClass(hoverClass);
    }).mouseout(function() {
      $(this).removeClass(hoverClass);
    });

    $('a', el).focus(function() {
      $(this).parents('.' + itemClass).addClass(hoverClass);
    }).blur(function() {
      $(this).parents('.' + itemClass).removeClass(hoverClass);
    });
  };

  /**
   * Inicializar Menu Accesible
   */

  if (jQuery().accessibleMenu) {
    if ($('.Nav .Container')) {
      $('.Nav .Container').accessibleMenu();
    }
  }

  if ($('.Nav-item')) {
    $('.Nav-item').click(function() {
      $(this).toggleClass('hover');
    });
  }

  /**
   * Remover capa sobre mapa
   */

  if ($('.Event-map')) {
    $('.Event-map').click(function() {
      $(this).addClass('is-visible');
    });
  }

  /**
   * Boton para imprimir documento
   */
  $('.js-print').click(function() {
    window.print();
  });

  /**
   * Variable de ancho de pantalla
   */

  var $body = $('body');
  var md = 992;
  var windowWidth = $(window).width();

  /**
   * Click event del menu local en moviles
   */

  $(window).resize(function() {
    windowWidth = $(window).width();

    if (windowWidth < md) {
      $('.js-toggleLocalNav').click(function(event) {
        event.preventDefault();
        $(this).parent('.Page-nav').toggleClass('is-open');
      });
    }
  });

  if (windowWidth < md) {
    $('.js-toggleLocalNav').click(function(event) {
      event.preventDefault();
      $(this).parent('.Page-nav').toggleClass('is-open');
    });
  }

  /**
   * Menu Trigger
   */

  $('.js-menuTrigger').on('click', function() {
    $('.js-mainNav').toggleClass('is-open');
    $body.toggleClass('has-menu');
  });

  /**
   * Menu lateral de gub.uy (apertura y cierre)
   */

  function closeMenuAside() {
    $body.removeClass('has-parentNavAside');
    $('.Menu-aside').empty();
    $('.Menu-item.has-submenu').removeClass('is-open');
  }

  $('.js-parentMenuTrigger').on('click', function() {
    $(window).scrollTop(0);
    $('.js-parentNav').toggleClass('is-open');
    $('.js-parentNav').find('.js-menuClose').focus();
    $body.toggleClass('has-menu');
  });

  $(window).on('click', function() {
    $('.js-parentNav').removeClass('is-open');
    $body.removeClass('has-menu');
  });

  // Clickeando fuera de estos elementos, se cierra el menú padre
  $('.js-parentMenuTrigger, .js-parentNav, .js-menuClose').on('click', function(ev) {
    ev.stopPropagation();
  });

  $('.js-menuClose').on('click', function() {
    $('.js-parentNav').removeClass('is-open');
    $body.removeClass('has-menu');

    closeMenuAside();
  });

  /**
   * Parent Nav (gub.uy)
   * TODO: Eliminar cuando este desarrollado el menu nuevo
   */

  function closeParentNavAside() {
    $body.removeClass('has-parentNavAside');
    $('.ParentNav-aside').empty();
    $('.ParentNav-item.has-submenu').removeClass('is-open');
  }

  // $('.js-parentMenuTrigger').on('click', function() {
  //   $(window).scrollTop(0);
  //   $('.js-parentNav').toggleClass('is-open');
  //   $('.js-parentNav').find('.js-menuClose').focus();
  //   $body.toggleClass('has-menu');
  // });

  // $(window).on('click', function() {
  //   $('.js-parentNav').removeClass('is-open');
  //   $body.removeClass('has-menu');
  // });

  // Clickeando fuera de estos elementos, se cierra el menú padre
  // $('.js-parentMenuTrigger, .js-parentNav, .js-menuClose').on('click', function(ev) {
  //   ev.stopPropagation();
  // });

  // $('.js-menuClose').on('click', function() {
  //   $('.js-parentNav').removeClass('is-open');
  //   $body.removeClass('has-menu');

  //   closeParentNavAside();
  // });

  // Al clickear un item que tiene submenu
  // Si ya esta abierto, lo cierra
  // Si no esta abierto, cierra todos los otros, y luego lo abre
  $('.ParentNav-item.has-submenu').on('keyup', function(event) {
    if (event.keyCode == 13) {
      $(this).click();
    }
  });

  $('.ParentNav-item.has-submenu').on('click', function() {
    if (!$(this).hasClass('is-open')) {
      if (windowWidth > 1180) {
        closeParentNavAside();
        var parentNavSubNav = $(this).find('.ParentNav-subNav').html();
        $(this).addClass('is-open');
        $body.addClass('has-parentNavAside');
        $('.ParentNav-aside').html(parentNavSubNav).find('a')[0].focus();
      } else {
        $('.ParentNav-item.has-submenu').removeClass('is-open');
        $('.ParentNav-subNav').removeClass('is-open');

        $(this).find('.ParentNav-subNav').addClass('is-open');
        $(this).addClass('is-open');
      }
    } else if (windowWidth > 1180) {
      closeParentNavAside();
    } else {
      $('.ParentNav-item.has-submenu').removeClass('is-open');
      $('.ParentNav-subNav').removeClass('is-open');
    }
  });
})();

/**
 * Índice de documentos
 */

(function() {
  var $pageIndex = $('.js-pageIndex');
  var $clone = null;

  if (!$pageIndex.length) {
    return false;
  }

  var mobile = false;
  if ($pageIndex.hasClass('js-pageIndexMobile')) {
    mobile = true;
  }

  $('.js-toggleIndex').on('click', function(event) {
    event.preventDefault();

    if ($clone) {
      $clone.toggleClass('is-open');
    } else {
      return false;
    }
  });

  $pageIndex.find('.Index-body a').on('click', function(event) {
    $pageIndex.removeClass('is-open');
    var anchor = $(this).attr('href');

    if (anchor[0] === '#') {
      event.preventDefault();
      anchor = anchor.replace('#', '');
      var el = document.getElementById(anchor);

      if (el) {
        el.scrollIntoView({
          block: 'start',
          behavior: 'smooth'
        });
      }
    }
  });

  $(window).on('scroll', function() {
    var scrollTop = $(this).scrollTop();
    var pageIndexHeight = $pageIndex.innerHeight();
    var pageDocumentTopPosition = $pageIndex.offset().top;

    if (mobile) {
      var $content = $('.u-main');

      if (!$content.length) {
        console.error('No se encontró .u-main');
        return;
      }

      var contentTop = $content.offset().top

      if (scrollTop > contentTop) {
        if (!$clone) {
          $clone = $pageIndex.clone(true).appendTo('body');
          $clone.addClass('is-clone');
        }

        $clone.addClass('is-visible');
        $clone.addClass('is-fixed');
      } else {
        if (!$clone) return;

        $clone.removeClass('is-open');
        $clone.removeClass('is-fixed');
      }
    } else {
      if (scrollTop > pageDocumentTopPosition + pageIndexHeight) {
        if (!$clone) {
          $clone = $pageIndex.clone(true).appendTo('body');
          $clone.addClass('is-clone');
        }

        $clone.addClass('is-visible');
        $clone.addClass('is-fixed');
      } else {
        if (!$clone) return;

        $clone.removeClass('is-open');
        $clone.removeClass('is-fixed');
      }
    }
  });
})();

/**
 * Menu
 * Navegacion global de gub.uy que se abre de manera lateral
 */

(function() {
  var SHOW_CLASS = 'is-visible';
  var OPEN_CLASS = 'is-open';

  var $breadcrumb = $('.js-menuBreadcrumb');

  // var $breadcrumbItem1 = $('#js-breadcrumb-1');
  var $breadcrumbItem2 = $('#js-breadcrumb-2');
  var $breadcrumbItem3 = $('#js-breadcrumb-3');

  var $root = $('.Menu-root');
  var $page = $('.Menu-page');
  var $subPage = $('.Menu-subPage');

  // Agregar listener de tecla Enter para entrar en items del menu
  $('.Menu-item.has-submenu > span').on('keyup', function(event) {
    if (event.keyCode == 13) {
      $(this).click();
      $(this)
        .siblings('.Menu-subNav')
        .find('List-item:first-child')
        .focus();
    }
  });

  // Al clickear un item que tiene submenu
  //  1. Si ya esta abierto, lo cierra
  //  2. Si no esta abierto, cierra todos los otros, y luego lo abre
  $('.Menu-item.has-submenu > span').on('click', function() {
    if ($(this).hasClass(OPEN_CLASS)) {
      $(this).removeClass(OPEN_CLASS);

      $(this).siblings('.Menu-subNav').animate({
        height: 'toggle'
      }, 250, function() {
        $(this).removeClass(OPEN_CLASS);
      });
    } else {
      $('.Menu-item.has-submenu > span').removeClass(OPEN_CLASS);
      $root.find('.Menu-subNav').slideUp().removeClass(OPEN_CLASS); // comportamiento acordeon
      $(this).addClass(OPEN_CLASS);

      $(this).siblings('.Menu-subNav').animate({
        height: 'toggle'
      }, 250, function() {
        $(this)
          .addClass(OPEN_CLASS)
          .find('.List-item:first-child')
          .focus();
      })
    }
  });

  // Agregar listener de Enter para items
  $('.Menu-root .List-item.has-submenu').on('keyup', function(event) {
    if (event.keyCode == 13) {
      $(this).click();
    }
  });

  // Item dentro del desplegable de Organismos
  //  1. Obtener el target
  //  2. Ocultar todo lo otro
  //  2. Mostrar el target
  //  3. Mostrar Breadcrumb y el item del medio
  $('.Menu-root .List-item.has-submenu').on('click', function() {
    var target = $(this).attr('data-target');

    $page.removeClass(SHOW_CLASS);
    $subPage.removeClass(SHOW_CLASS);
    $root.removeClass(SHOW_CLASS);

    $breadcrumbItem2.addClass(SHOW_CLASS);
    $breadcrumb.addClass(SHOW_CLASS);

    $(target).addClass(SHOW_CLASS);

    // $(target).css({ x: -300, opacity: 0, display: 'block' });

    // $(target).transition({ opacity: 1, x: 0 }, {
    //   duration: 250,
    //   easing: 'linear',
    //   complete: function() {
    //     $(target).addClass(SHOW_CLASS);
    //   }
    // });
  });

  // Mostrar las dependencias de un Organismo
  //  1. Obtener el target y el title
  //  2. Ocultar todo lo otro
  //  3. Mostrar el target
  //  4. Poner el title en el ultimo item del Breadcrumb y mostrarlo
  $('.js-childItems').on('click', function() {
    var target = $(this).attr('data-target');
    var title = $(this).closest('.Menu-page').attr('data-title');

    $root.removeClass(SHOW_CLASS);
    $page.removeClass(SHOW_CLASS);
    $subPage.removeClass(SHOW_CLASS);

    $(target).addClass(SHOW_CLASS);

    // NOTE: El <li> padre tiene el target que en algun momento deberia cambiar
    $breadcrumbItem3
      .html('<a href="#">' + title + '</a>')
      .addClass(SHOW_CLASS);
  });

  // Primer item del Breadcrumb
  //  1. Ocultar todos los otros items del Breadcrumb y el Breadcrumb
  //  2. El colapsable de Organismos deberia estar colapsado
  //  3. Ocultar todo lo otro
  //  4. Mostrar la raiz de la navegacion
  $('#js-breadcrumb-1').on('click', function(event) {
    event.preventDefault();

    $breadcrumbItem2.removeClass(SHOW_CLASS);
    $breadcrumbItem3.removeClass(SHOW_CLASS);
    $breadcrumb.removeClass(SHOW_CLASS);

    // Dejar colapsado item de Organismos
    $('.js-organismosSubmenu > span').removeClass(OPEN_CLASS);
    $('.js-organismosSubmenu > .Menu-subNav').removeClass(OPEN_CLASS).hide();

    // Ocultar todo lo otro
    $page.removeClass(SHOW_CLASS);
    $subPage.removeClass(SHOW_CLASS);

    // Mostrar la raiz de la navegacion
    $root.addClass(SHOW_CLASS);
  });

  // Item del medio del Breadcrumb
  //  1. Ocultar este mismo item y el ultimo item del Breadcrumb
  //  2. Obtener el target (que siempre es Organismos en realidad)
  //  3. Ocultar todo lo que está abierto
  //  4. Organismos deberia estar desplegado
  //  5. Ocultar completo el Breadcrumb
  //  6. Mostrar el target
  $breadcrumbItem2.on('click', function(event) {
    event.preventDefault();

    var target = $(this).attr('data-target');
    $(target).addClass(SHOW_CLASS);

    // Desplegar Organismos (colapsable)
    $('.js-organismosSubmenu > span').addClass(OPEN_CLASS);
    $('.js-organismosSubmenu > .Menu-subNav').addClass(OPEN_CLASS);

    // Ocultar los dos ultimos items del Breadcrumb
    $breadcrumbItem3.removeClass(SHOW_CLASS);
    $(this).removeClass(SHOW_CLASS);

    // Ocultar Breadcrumb
    $breadcrumb.removeClass(SHOW_CLASS);

    // Ocultar todo lo que este visible
    $subPage.removeClass(SHOW_CLASS);
    $page.removeClass(SHOW_CLASS);
  });

  // Ultimo item del Breadcrumb
  //  1. Ocultar este mismo item
  //  2. Obtener el target del atributo data-target
  //  3. Ocultar todo lo que pueda estar abierto
  //  4. Mostrar el target
  $breadcrumbItem3.on('click', function(event) {
    event.preventDefault();

    var target = $(this).attr('data-target');

    $(this).removeClass(SHOW_CLASS);

    $page.removeClass(SHOW_CLASS);
    $subPage.removeClass(SHOW_CLASS);

    $(target).addClass(SHOW_CLASS);
  });
})();

/**
 * Listado Horizontal con Scroll tipo Carousel
 */

(function() {
  var $wrap = $('.js-scrollWrap');
  var $next = $('.js-scrollNext');
  var $prev = $('.js-scrollPrev');

  var SCROLL_FACTOR = 1.75;
  var SCROLL_TRANSITION = 500;
  var FADE_TRANSITION = 350;

  $prev.hide();

  $next.on('click', function() {
    $wrap.animate(
      { scrollLeft: $wrap.scrollLeft() + $wrap.width() / SCROLL_FACTOR },
      SCROLL_TRANSITION
    );
  });

  $prev.on('click', function() {
    $wrap.animate(
      { scrollLeft: $wrap.scrollLeft() - $wrap.width() / SCROLL_FACTOR },
      SCROLL_TRANSITION
    );
  });

  $wrap.on('scroll', function(event) {
    var scrollLeft = $(this).scrollLeft();

    if (scrollLeft == 0) {
      $prev.fadeOut(FADE_TRANSITION);
    } else {
      $prev.fadeIn(FADE_TRANSITION);
    }

    if (scrollLeft >= $wrap[0].scrollWidth - $wrap.innerWidth()) {
      $next.fadeOut(FADE_TRANSITION);
    } else {
      $next.fadeIn(FADE_TRANSITION);
    }
  });
})();

/**
 * Tabla con desplegables
 */
(function() {
  var $target = $('.js-tableTarget');
  var $table = $('.js-tableCollapse');

  function setCellsWidth() {
    var th1Width = $table.find('thead tr th:first-child').innerWidth();
    var th2Width = $table.find('thead tr th:nth-child(2)').innerWidth();
    var th3Width = $table.find('thead tr th:nth-child(3)').innerWidth();
    var th4Width = $table.find('thead tr th:nth-child(4)').innerWidth();
    var th5Width = $table.find('thead tr th:nth-child(5)').innerWidth();

    $target.find('tbody tr td:first-child').css('width', th1Width - 8);
    $target.find('tbody tr td:nth-child(2)').css('width', th2Width - 8);
    $target.find('tbody tr td:nth-child(3)').css('width', th3Width - 8);
    $target.find('tbody tr td:nth-child(4)').css('width', th4Width - 8);
    $target.find('tbody tr td:nth-child(5)').css('width', th5Width - 8);
  }

  $(window).on('resize', setCellsWidth);
  setCellsWidth();

  $('tr[data-toggle="collapse"]').on('click', function() {
    $(this).find('.js-collapseStatus').toggleClass('is-open');

    if ($(this).attr('aria-expanded') == 'false') {
      $(this).attr('aria-expanded', 'true');
    } else {
      $(this).attr('aria-expanded', 'false');
    }
  });

  $target.on('show.bs.collapse', function () {
    $(this).closest('table')
      .find('.collapse.in')
      .not(this)
      .collapse('toggle');
  });
})();

/**
 * Translate Dropdown
 */

// (function() {
//   $(window).on('click', function() {
//     $('.js-translateDropdown').find('.Dropdown-menu').hide();
//   });

//   $('.js-translateDropdown').on('keydown', function(e) {
//     console.log(e.keyCode);
//     if (e.keyCode === 13) {
//       $('.js-translateDropdown').find('.Dropdown-menu').toggle();
//     }
//   });

//   $('.js-translateDropdown .Dropdown-trigger').on('click', function(e) {
//     e.stopPropagation();
//   });

//   $('.js-translateDropdown .Dropdown-trigger').on('click', function() {
//     $(this).siblings('.Dropdown-menu').toggle();
//   });
// })();

(function() {
  var TRIGGER = '.js-user';
  var TARGET = '.js-userDropdown';

  $(TRIGGER).on('keydown', function(e) {
    if (e.keyCode === 13) {
      $(this).toggleClass('is-open');
      $(TARGET).toggleClass('is-open');
    }
  });

  $(TRIGGER).on('click', function() {
    $('.js-langDropdown, .js-lang').removeClass('is-open');

    $(this).toggleClass('is-open');
    $(TARGET).toggleClass('is-open');
  });

  $(window).click(function() {
    $(TRIGGER).removeClass('is-open');
    $(TARGET).removeClass('is-open');
  });

  $(TRIGGER + ', ' + TARGET).on('click', function(ev) {
    ev.stopPropagation();
  });
})();

(function() {
  var TRIGGER = '.js-lang';
  var TARGET = '.js-langDropdown';

  $(TRIGGER).on('keydown', function(e) {
    if (e.keyCode === 13) {
      $(this).toggleClass('is-open');
      $(TARGET).toggleClass('is-open');
    }
  });

  $(TRIGGER).on('click', function() {
    $('.js-userDropdown, .js-user').removeClass('is-open');

    $(this).toggleClass('is-open');
    $(TARGET).toggleClass('is-open');
  });

  $(window).click(function() {
    $(TRIGGER).removeClass('is-open');
    $(TARGET).removeClass('is-open');
  });

  $(TRIGGER + ', ' + TARGET).on('click', function(ev) {
    ev.stopPropagation();
  });
})();


// $('.Box-video').on('click', function() {
//   $(this).parent('.Box').addClass('isPlaying');
//   $(this).parent('.Box').removeClass('Box--isSignLanguage');
//   $(this).parent('.Box').removeClass('Box--hasSignLanguage');
// });

/**
 * Chat de Asistente en línea 
 * Apertura y cierre del asistente con botón flotante y contenedor para iframe
 */

// Apertura del chat
$('.js-openChat').on('click', function (event) {
  event.preventDefault();
  
  // Oculta el botón flotante
  $(this).addClass('u-hide');
  
  // Muestra el contenedor del chat sin la clase `u-hide` (pero invisible inicialmente)
  const $chatContainer = $('.Asistente-contenedor');
  $chatContainer.removeClass('u-hide');
  
  // Forzar reflujo para activar transición
  $chatContainer[0].offsetHeight;
  
  // AÃ±ade la clase para iniciar la animación
  $chatContainer.addClass('is-visible');
});

// Cierre del chat
$('.js-closeChat').on('click', function (event) {
  event.preventDefault();
  
  // Oculta el contenedor del chat con animación
  const $chatContainer = $('.Asistente-contenedor');
  $chatContainer.removeClass('is-visible');
  
  // Asegura ocultar el elemento despuÃ©s de la animación
  setTimeout(() => {
    $chatContainer.addClass('u-hide');
  }, 350); // Debe coincidir con el tiempo de la transición (0.35s)
  
  // Muestra el botón flotante
  $('.js-openChat').removeClass('u-hide');
});


/**
 * Botón de iniciar trámites con casuística
 * Apertura y cierre del listado de variantes de un trámite, manejo del foco
 * No se cambia la clase (js-iniciarTramite) para que funcione en versión actual del botón
 */

document.addEventListener("DOMContentLoaded", () => {
    const toggleButtons = document.querySelectorAll(".js-iniciarTramite");
    let activeDropdown = null;

    toggleButtons.forEach((toggleButton) => {
        const dropdownContainer = toggleButton.nextElementSibling;

        if (dropdownContainer) {
            const moveDropdownOutside = () => {
                // Cerrar dropdowns abiertos
                if (activeDropdown && activeDropdown !== dropdownContainer) {
                    closeDropdown(activeDropdown);
                }

                dropdownContainer.style.display = "block";
                dropdownContainer.classList.add("dropdown-outside");

                // Mover el contenedor al body
                document.body.appendChild(dropdownContainer);

                // Calcular posición
                const rect = toggleButton.getBoundingClientRect();
                const dropdownWidth = dropdownContainer.offsetWidth;
                const spaceOnRight = window.innerWidth - rect.left;
                
                // Determinar posición horizontal
                let left;
                if (spaceOnRight >= dropdownWidth) {
                    left = rect.left + window.scrollX; // Mostrar a la izquierda del botón
                } else {
                    left = rect.right - dropdownWidth + window.scrollX; // Ajustar hacia la derecha si no cabe
                }

                // Siempre posicionar abajo
                const top = rect.bottom + window.scrollY;

                // Fijar posición del desplegable
                dropdownContainer.style.position = "absolute";
                dropdownContainer.style.top = `${top}px`;
                dropdownContainer.style.left = `${left}px`;
                dropdownContainer.style.zIndex = "9999";

                activeDropdown = dropdownContainer;

                // AÃ±adir clase al botón activo
                toggleButton.classList.add("is-active");

                // Foco al primer enlace
                const firstLink = dropdownContainer.querySelector("li a");
                if (firstLink) {
                    firstLink.focus();
                }

                // Cerrar al hacer clic fuera o presionar Escape
                document.addEventListener("click", handleClickOutside);
                document.addEventListener("keydown", handleKeyDown);
            };

            const closeDropdown = (dropdown) => {
                if (!dropdown) return;
                dropdown.classList.remove("dropdown-outside");
                dropdown.style.display = "none";

                // Devolver el contenedor a su posición original
                toggleButton.parentElement.appendChild(dropdown);
                activeDropdown = null;

                // Remover clase del botón activo
                toggleButton.classList.remove("is-active");

                document.removeEventListener("click", handleClickOutside);
                document.removeEventListener("keydown", handleKeyDown);

                // Enfocar el botón asociado si se cierra con Escape
                toggleButton.focus();
            };

            const handleClickOutside = (event) => {
                if (
                    !toggleButton.contains(event.target) &&
                    !dropdownContainer.contains(event.target)
                ) {
                    closeDropdown(activeDropdown);
                }
            };

            const handleKeyDown = (event) => {
                if (event.key === "Escape") {
                    closeDropdown(activeDropdown);
                } else if (event.key === "Tab" && activeDropdown) {
                    handleTabNavigation(event);
                }
            };

            const handleTabNavigation = (event) => {
                const focusableElements = Array.from(
                    dropdownContainer.querySelectorAll("a")
                );
                const firstElement = focusableElements[0];
                const lastElement = focusableElements[focusableElements.length - 1];

                if (event.shiftKey && document.activeElement === firstElement) {
                    event.preventDefault();
                    toggleButton.focus();
                } else if (!event.shiftKey && document.activeElement === lastElement) {
                    event.preventDefault();
                    closeDropdown(activeDropdown);

                    const parentContainer = toggleButton.closest(".ButtonCombo");
                    const focusableElementsInContainer = Array.from(
                        parentContainer.querySelectorAll(
                            "button, a, input, select, textarea, [tabindex]:not([tabindex='-1'])"
                        )
                    );
                    const currentIndex = focusableElementsInContainer.indexOf(toggleButton);
                    const nextElement =
                        focusableElementsInContainer[currentIndex + 1];
                    if (nextElement) {
                        nextElement.focus();
                    }
                }
            };

            toggleButton.addEventListener("click", (event) => {
                event.stopPropagation();
                if (dropdownContainer === activeDropdown) {
                    closeDropdown(activeDropdown);
                } else {
                    moveDropdownOutside();
                }
            });
        }
    });
});



// Botón Drowpdown accesible

document.addEventListener('DOMContentLoaded', () => {
  const dropdowns = document.querySelectorAll('.Dropdown-click');

  dropdowns.forEach(dropdown => {
    const button = dropdown.querySelector('.Dropdown-trigger');
    const menu = dropdown.querySelector('.Dropdown-click-menu');
    const menuItems = menu.querySelectorAll('[role="menuitem"]');

    // Función para cerrar este menú
    function closeMenu() {
      menu.hidden = true;
      button.setAttribute('aria-expanded', 'false');
    }

    // Función para abrir este menú y cerrar los demás
    function openMenu() {
			// Cerrar otros menús primero
			dropdowns.forEach(otherDropdown => {
				if (otherDropdown !== dropdown) {
					const otherMenu = otherDropdown.querySelector('.Dropdown-click-menu');
					const otherButton = otherDropdown.querySelector('.Dropdown-trigger');
					otherMenu.hidden = true;
					otherButton.setAttribute('aria-expanded', 'false');
					otherMenu.classList.remove('align-right');
				}
			});

			// Mostrar el menú para poder medirlo
			menu.hidden = false;
			button.setAttribute('aria-expanded', 'true');
			menu.classList.remove('align-right'); // Reinicio por si quedó de antes

			// Medimos si hay espacio hacia la derecha
			const buttonRect = button.getBoundingClientRect();
			const menuRect = menu.getBoundingClientRect();
			const viewportWidth = window.innerWidth;

			// Si el menú se sale por la derecha, lo alineamos hacia la derecha
			if (buttonRect.left + menuRect.width > viewportWidth) {
				menu.classList.add('align-right');
			}

			// Enfocar el primer ítem del menú
			menuItems[0].focus();
		}

    // Clic en el botón para alternar el menú
    button.addEventListener('click', (e) => {
      e.stopPropagation();
      const isOpen = button.getAttribute('aria-expanded') === 'true';
      isOpen ? closeMenu() : openMenu();
    });

    // Teclas para abrir el menú
    button.addEventListener('keydown', (e) => {
      if (e.key === 'Enter' || e.key === ' ' || e.key === 'ArrowDown') {
        e.preventDefault();
        openMenu();
      }
    });

    // Navegación por teclado
    menu.addEventListener('keydown', (e) => {
      const currentIndex = Array.from(menuItems).indexOf(document.activeElement);

      if (e.key === 'Escape') {
        closeMenu();
        button.focus();
      } else if (e.key === 'ArrowDown') {
        e.preventDefault();
        const next = (currentIndex + 1) % menuItems.length;
        menuItems[next].focus();
      } else if (e.key === 'ArrowUp') {
        e.preventDefault();
        const prev = (currentIndex - 1 + menuItems.length) % menuItems.length;
        menuItems[prev].focus();
      }
    });

    // Cerrar si se hace clic fuera de este dropdown
    document.addEventListener('click', (e) => {
      if (!dropdown.contains(e.target)) {
        closeMenu();
      }
    });
  });
});
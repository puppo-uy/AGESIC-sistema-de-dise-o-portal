

$(function () {

  function marcarSeccionDesdePHP() {

  var seccion = (window.SECCION_ACTUAL || '').toString().toLowerCase().trim();
  var subseccion = (window.SUBSECCION_ACTUAL || '').toString().toLowerCase().trim();

  // selectores mínimos
  const $nav = $('.navegacion-lateral');
  const $botones = $nav.find('button');
  const $submenus = $nav.find('.barra-lateral-submenu');

  $botones.removeClass('activo');


  // estado
  let $ultimoBtn = null;
  let $submenuAbierto = null;

  var $liPersistente = null;

  // cerrar todo
  function cerrarTodo(restaurarFoco = true) {

    $('body').removeClass('submenu-abierto');
    $nav.removeClass('subnav-open');

    if ($submenuAbierto) {

      const $u = $submenuAbierto;
      $u.removeClass('is-opening is-open').addClass('is-closing');
      $u.attr('data-open', 'false').attr('aria-hidden', 'true');
      $u.find('a,button').attr('tabindex', '-1');
      $botones.attr('aria-expanded', 'false');
    

      // espera al end de la transición para limpiar clase
      $u.one('transitionend webkitTransitionEnd oTransitionEnd', function () {
        $u.removeClass('is-closing');
      });

      // quitar trampa de foco
      $u.off('keydown.trampa');
      
      if (restaurarFoco && $ultimoBtn) $ultimoBtn.focus();

    }



     if ($ultimoBtn) {

      if (!$ultimoBtn.hasClass('activo-persistente')) {

        $ultimoBtn.removeClass('activo');
        $ultimoBtn.closest('.barra-lateral-item').removeClass('item-activo');


      }

      $ultimoBtn.attr('aria-expanded', 'false');

      }

    $submenuAbierto = null;
    $ultimoBtn = null;
    $('body').removeClass('submenu-abierto');

    if ($liPersistente) {
      $liPersistente.removeClass('otro-submenu-abierto');
    }

  }

  // abrir submenu asociado
  function abrirCon($btn) {


    const id = $btn.attr('data-submenu-id');


    if (!id) return;

    const $ul = $('#' + id);

    if (!$ul.length) return;

    // si ya estaba abierto, cerramos
    if ($ul.attr('data-open') === 'true') {
        cerrarTodo(true);
        return;
    }

    // cerrar otros primero
    cerrarTodo(false);

    const titulo = ($btn.find('.barra-lateral-texto').text() || $btn.text()).trim();
    $ul.attr('data-title', titulo);
    $ul.attr('data-open', 'true');
    $ul.attr('aria-hidden', 'false');
    $btn.attr('aria-expanded', 'true');
    $btn.addClass('activo');
    $btn.closest('.barra-lateral-item').addClass('item-activo'); // le agrego un class al li contenedor del activo


    if ($liPersistente && !$btn.is($liPersistente.find('button'))) {
      $liPersistente.addClass('otro-submenu-abierto');
    }

    // habilitar tab en links
    $ul.find('a, button').attr('tabindex', '0');

    // animación: is-opening -> is-open
    $ul.removeClass('is-closing').addClass('is-opening');

    // forzamos reflow
    $ul[0].offsetHeight;
    $ul.addClass('is-open');

    // limpiar is-opening después de transición
    $ul.one('transitionend webkitTransitionEnd oTransitionEnd', function () {
      $ul.removeClass('is-opening');
    });

    // trampa de foco simple: ciclo Tab en el UL
    const $focables = $ul.find('a, button').filter(':visible');
    if ($focables.length) $focables.first().focus();
    $ul.on('keydown.trampa', function (e) {
      if (e.key === 'Tab') {
        const activo = document.activeElement;
        const primero = $focables.first()[0];
        const ultimo = $focables.last()[0];
        if (e.shiftKey) {
          if (activo === primero) { e.preventDefault(); $(ultimo).focus(); }
        } else {
          if (activo === ultimo) { e.preventDefault(); $(primero).focus(); }
        }
      } else if (e.key === 'Escape') {
        cerrarTodo(true);
      }
    });

    $ultimoBtn = $btn;
    $submenuAbierto = $ul;
    $('body').addClass('submenu-abierto');
    $nav.addClass('subnav-open');


  }


  // eventos
  $nav.on('click', 'button', function (e) {
    e.preventDefault();
    const $btn = $(this);
    if ($btn.attr('aria-expanded') === 'true') cerrarTodo(true);
    else abrirCon($btn);
  });

  $nav.on('keydown', 'button', function (e) {
    const $btn = $(this);
    if (e.key === 'Enter' || e.key === ' ') { e.preventDefault(); abrirCon($btn); }
    else if (e.key === 'ArrowRight') { e.preventDefault(); abrirCon($btn); }
    else if (e.key === 'ArrowLeft') {
      if ($btn.attr('aria-expanded') === 'true') { e.preventDefault(); cerrarTodo(true); }
    }
  });

  $(document).on('keydown', function (e) {
    if (e.key === 'Escape') {
      const abierto = $submenus.filter('[data-open="true"]').length > 0;
      if (abierto) { e.preventDefault(); cerrarTodo(true); }
    }
  });

  // clic fuera para cerrar
  $(document).on('click', function (e) {
    const $t = $(e.target);
    const abierto = $submenus.filter('[data-open="true"]').length > 0;
    if (!abierto) return;
    if ($t.closest('.barra-lateral').length === 0 && $t.closest('.barra-lateral-submenu[data-open="true"]').length === 0) {
      cerrarTodo(true);
    }
  });



$(function () {
  var seccion = (window.SECCION_ACTUAL || '').toString().toLowerCase().trim();
  var subseccion = (window.SUBSECCION_ACTUAL || '').toString().toLowerCase().trim();
  
$('.barra-lateral-enlace--boton, .barra-lateral-enlace').removeClass('seccion-activa activo--persistente');
$('.barra-lateral-item').removeClass('item-activo');


  if (!seccion && !subseccion) return;

  // Limpieza completa de estados persistentes previos
  $('.barra-lateral-enlace--boton, .barra-lateral-enlace').removeClass('seccion-activa activo--persistente');
$('.barra-lateral-item').removeClass('item-activo');


  // 1) MARCAR EL BOTÓN DE SECCIÓN (sin abrir submenu)
  var $btnSeccion = $('[data-seccion="' + seccion + '"]').first();





  if ($btnSeccion.length) {
    $btnSeccion.addClass('seccion-activa activo-persistente'); // marca visual
    $liPersistente = $btnSeccion.closest('.barra-lateral-item').addClass('item-activo');
    

    var submenuId = $btnSeccion.attr('data-submenu-id');
    if (submenuId) {
      var $ul = $('#' + submenuId);
      // setear data-title para que ::before lo muestre cuando el usuario abra
      var titulo = ($btnSeccion.find('.barra-lateral-texto').text() || $btnSeccion.text()).trim();
      if (titulo) $ul.attr('data-title', titulo);
      // NO hacemos $ul.addClass('is-open') ni cambiamos aria-hidden ni tabindex
    }
  }

  // 2) MARCAR LA SUBSECCIÓN (link dentro del submenu)
  if (subseccion) {
    var $linkSub = $('[data-subseccion="' + subseccion + '"]').first();
    if ($linkSub.length) {
      $linkSub.addClass('subseccion-activa');
      // nos aseguramos de que el data-title exista para el UL padre (por si no se hizo arriba)
      var $ulPadre = $linkSub.closest('.barra-lateral-submenu');
      if ($ulPadre.length) {
        var $btnPadre = $ulPadre.closest('.barra-lateral-item').find('[data-submenu-id]').first();
        if ($btnPadre.length) {
          var tituloPadre = ($btnPadre.find('.barra-lateral-texto').text() || $btnPadre.text()).trim();
          if (tituloPadre) $ulPadre.attr('data-title', tituloPadre);
          // marcamos el botón padre visualmente pero SIN abrir
          $btnPadre.addClass('seccion-activa activo-persistente'); // marca visual
          //$btnPadre.closest('.barra-lateral-item').addClass('item-activo');
          $liPersistente = $btnPadre.closest('.barra-lateral-item').addClass('item-activo');
        }
      }
      // NO modificamos tabindex ni aria-hidden del ul (evita exponer enlaces no visibles)
    }
  }
});








// RESPONSIVO

const PUNTO_CORTE_MOVIL = 800; // TODO: Ajustar valor del corte


// crea overlay y lo agrega al DOM si no existe
if (!$('.overlay').length) {
  $('body').append('<div class="overlay" tabindex="-1" aria-hidden="true"></div>');
}

const $overlay = $('.overlay');
const $hamburguesa = $('#boton-hamburguesa');

// Funciones para abrir/cerrar drawer (menu móvil)
function abrirDrawer() {

  $('body').addClass('menu-movil-abierto');
  $hamburguesa.attr('aria-expanded', 'true');

  // trap foco simple: foco al primer link
  const $primero = $('.barra-lateral-enlace, .barra-lateral-boton').filter(':visible').first();
  $primero && $primero.focus();

  // marcar aria-hidden en resto del contenido si querés (opcional)
  $('main, .contenido-principal').attr('aria-hidden', 'true');

}

function cerrarDrawer() {

  $('body').removeClass('menu-movil-abierto');
  $hamburguesa.attr('aria-expanded', 'false');

  // devolver foco a hamburguesa
  $hamburguesa.focus();
  $('main, .contenido-principal').removeAttr('aria-hidden');

//Al cerrar menú móvil → colapsar todos los acordeones
if ($(window).width() <= PUNTO_CORTE_MOVIL) {

    $('.barra-lateral-submenu.is-accordion-open').each(function () {
        const $ul = $(this);
      $ul.removeClass('is-accordion-open')
        .attr('aria-hidden', 'true');

        // desactivar tabulación
        $ul.find('a,button').attr('tabindex', '-1');

        // quitar activo del botón correspondiente
        const $btn = $('[data-submenu-id="' + $ul.attr('id') + '"]');
        $btn.removeClass('activo').attr('aria-expanded','false');
    });
}

}

// Toggle con hamburguesa
$hamburguesa.on('click', function (e) {

  const abierto = $('body').hasClass('menu-movil-abierto');
  if (abierto) cerrarDrawer(); else abrirDrawer();

});

// click en overlay cierra
$overlay.on('click', function () { cerrarDrawer(); });

// cerrar drawer con ESC globalmente
$(document).on('keydown', function (e) {

    if (e.key === 'Escape' && $('body').hasClass('menu-movil-abierto')) {
      cerrarDrawer();
    }

});

$nav.on('click', 'button', function (e) {
    const $btn = $(this);
    if ($(window).width() <= PUNTO_CORTE_MOVIL) {
      e.preventDefault();
      // si el submenu ya está abierto en modo acordeón -> cerrarlo
      const submenuId = $btn.attr('data-submenu-id');
      const $ul = $('#' + submenuId);

      // toggle acordeón: cerramos otros submenus en mobile (comportamiento acordeón)
      if ($ul.hasClass('is-accordion-open')) {
        $ul.removeClass('is-accordion-open').attr('aria-hidden','true');
        $btn.removeClass('activo').attr('aria-expanded','false');
        // quitar tabindex a items
        $ul.find('a,button').attr('tabindex','-1');
      } else {
        // cerrar cualquier otro acordeón abierto
        $('.barra-lateral-submenu.is-accordion-open').each(function () {
          const $other = $(this);
          $other.removeClass('is-accordion-open').attr('aria-hidden','true');
          // quitar clase activo del botón que lo abrió
          $nav.find('button[aria-expanded="true"]').not($btn).each(function () {
            $(this).removeClass('activo').attr('aria-expanded','false');
          });
          $other.find('a,button').attr('tabindex','-1');
        });

        // abrir este
        $ul.addClass('is-accordion-open').attr('aria-hidden','false');
        $btn.addClass('activo').attr('aria-expanded','true');
        $ul.find('a,button').attr('tabindex','0');

        // foco al primer elemento del submenu en mobile (ayuda a la navegación con teclado)
        const $prim = $ul.find('a,button').filter(':visible').first();
        if ($prim.length) $prim.focus();
      }
      return; // prevenimos comportamiento desktop (panel derecho)
    } else {
      // si no estamos en mobile, delegamos al comportamiento desktop ya implementado
      return;
    }

  });

  // cuando se redimensiona, cerramos el drawer si cambiamos a desktop
  $(window).on('resize', function () {
    if ($(window).width() > PUNTO_CORTE_MOVIL && $('body').hasClass('menu-movil-abierto')) {
      cerrarDrawer();
    }
  });


  // FLECHA EN SECCIONES ACTIVAS

  // solo en desktop
  if ($(window).width() <= PUNTO_CORTE_MOVIL) return;

 var seccion = (window.SECCION_ACTUAL || '').toString().toLowerCase().trim();
  if (!seccion) return;

  // boton que corresponde a la seccion actual
  var $btn = $('[data-seccion="' + seccion + '"]').first();
  if (!$btn.length) return;

  // si no tiene submenu-id, no agregamos nada
  var submenuId = $btn.attr('data-submenu-id');
  if (!submenuId) return;

  var $ul = $('#' + submenuId);
  if (!$ul.length) return;

  /*
  // crear la flechita dentro del panel si no existe
  if ($ul.find('.barra-lateral-flecha-toggle').length === 0) {
    // usa button para accesibilidad
    var $flecha = $('<button class="barra-lateral-flecha-toggle" aria-label="Mostrar u ocultar ' + ($btn.find('.barra-lateral-texto').text().trim() || 'submenú') + '" type="button" tabindex="0"><svg class="icono icono--s"><use href="#icono-flecha-larga-derecha"></use></svg></button>');
    // insertamos al principio del UL (acompaña el panel)
    $ul.prepend($flecha);
  } else {
    var $flecha = $ul.find('.barra-lateral-flecha-toggle').first();
  }
  */

  // handler: toggle consistente usando las funciones existentes
  $flecha.on('click keydown', function (e) {
    // permitir Enter / Space / click
    if (e.type === 'click' || (e.type === 'keydown' && (e.key === 'Enter' || e.key === ' '))) {
      e.preventDefault();
      e.stopPropagation();

      // si el submenu abierto en el sistema coincide con este UL -> cerrar
      if ($submenuAbierto && $submenuAbierto[0] === $ul[0]) {
        // cerramos con la función que actualiza el estado
        cerrarTodo(true);
      } else {
        // abrimos usando la función pública (se encarga de animar, foco, estado)
        abrirCon($btn);
      }
    }
  });


  }

 marcarSeccionDesdePHP();


 });

window.addEventListener("pageshow", function (event) {
  if (event.persisted) {

    // 1. Limpiar panel derecho desktop
    $('.barra-lateral-submenu')
      .removeClass('is-opening is-open is-closing is-accordion-open')
      .attr('aria-hidden', 'true')
      .attr('data-open', 'false')
      .css('max-height', '');

    // 2. Limpiar clases en botones y items
    $('.barra-lateral-enlace--boton')
      .removeClass('activo item-activo otro-submenu-abierto');

    $('.barra-lateral-item')
      .removeClass('item-activo otro-submenu-abierto');

    // 3. Limpiar estado de body
    $('body')
      .removeClass('submenu-abierto menu-movil-abierto');

    // 4. Re-evaluar sección/subsección PHP (vuelve a marcar lo correcto)
    if (typeof window.SECCION_ACTUAL !== "undefined") {
      marcarSeccionDesdePHP(); // lo definimos más abajo
    }

    $('.navegacion-lateral').removeClass('subnav-open');

  }
});

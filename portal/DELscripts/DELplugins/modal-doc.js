/**
 * modal-doc.js
 * Implementación de modales para la página de documentación.
 * Vanilla JS — sin dependencias de jQuery ni Bootstrap.
 */
(function () {
  'use strict';

  function openModal(modalId) {
    var modal = document.getElementById(modalId);
    if (!modal) return;
    modal.style.display = 'flex';
    document.body.classList.add('modal-open');
    // Foco al contenido del modal para accesibilidad
    setTimeout(function () {
      var focusable = modal.querySelector('button, [href], input, select, textarea, [tabindex]:not([tabindex="-1"])');
      if (focusable) focusable.focus();
    }, 50);
  }

  function closeModal(modal) {
    if (!modal) return;
    modal.style.display = 'none';
    document.body.classList.remove('modal-open');
  }

  function init() {
    // Abrir modales — botones con data-modal-target
    var triggers = document.querySelectorAll('[data-modal-target]');
    triggers.forEach(function (btn) {
      btn.addEventListener('click', function (e) {
        e.stopPropagation();
        var targetId = btn.getAttribute('data-modal-target');
        openModal(targetId);
      });
    });

    // Cerrar modales — botones con data-modal-close
    var closeBtns = document.querySelectorAll('[data-modal-close]');
    closeBtns.forEach(function (btn) {
      btn.addEventListener('click', function (e) {
        e.stopPropagation();
        var modal = btn.closest('.Modal');
        closeModal(modal);
      });
    });

    // Cerrar al hacer clic en el overlay (fuera del contenido)
    var modals = document.querySelectorAll('.Modal');
    modals.forEach(function (modal) {
      modal.addEventListener('click', function (e) {
        if (e.target === modal) {
          closeModal(modal);
        }
      });
    });

    // Cerrar con Escape
    document.addEventListener('keydown', function (e) {
      if (e.key === 'Escape' || e.keyCode === 27) {
        var openModals = document.querySelectorAll('.Modal[style*="flex"]');
        openModals.forEach(function (modal) {
          closeModal(modal);
        });
      }
    });
  }

  if (document.readyState === 'loading') {
    document.addEventListener('DOMContentLoaded', init);
  } else {
    init();
  }
})();

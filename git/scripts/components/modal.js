export default class Modal {
  constructor(dialogElement) {
    if (!dialogElement || dialogElement.tagName !== 'DIALOG') return;
    
    this.modal = dialogElement;
    this.lastFocusedElement = null;
    
    // Vinculamos (bind) los métodos para no perder el contexto 'this' en los eventos
    this.open = this.open.bind(this);
    this.close = this.close.bind(this);
    this.handleBackdropClick = this.handleBackdropClick.bind(this);
    
    this.init();
  }

  init() {
    // 1. Escuchar botones que ABREN este modal en todo el documento
    const modalId = this.modal.getAttribute('data-modal');
    if (modalId) {
      const openTriggers = document.querySelectorAll(`[data-modal-target="${modalId}"]`);
      openTriggers.forEach(btn => {
        btn.addEventListener('click', (e) => {
          e.preventDefault();
          this.open();
        });
      });
    }

    // 2. Escuchar botones que CIERRAN este modal internamente
    const closeButtons = this.modal.querySelectorAll('[data-modal-close]');
    closeButtons.forEach(btn => {
      btn.addEventListener('click', (e) => {
        e.preventDefault();
        this.close();
      });
    });

    // 3. Cerrar al hacer click por fuera (en el backdrop)
    this.modal.addEventListener('click', this.handleBackdropClick);
  }

  lockScroll() {
    document.documentElement.classList.add('modal-open');
  }

  unlockScroll() {
    document.documentElement.classList.remove('modal-open');
  }

  open() {
    if (this.modal.open) return;

    this.lastFocusedElement = document.activeElement;
    this.modal.showModal();
    this.lockScroll();

    // Enfocar el primer elemento interactivo o el título
    const focusTarget = this.modal.querySelector('[autofocus], h1, h2, h3, button, input, select, textarea');
    if (focusTarget) {
      focusTarget.focus();
    }
  }

  close() {
    if (!this.modal.open) return;

    this.modal.close();
    this.unlockScroll();

    // Restaurar el foco al elemento que abrió el modal por accesibilidad
    if (this.lastFocusedElement) {
      this.lastFocusedElement.focus();
    }
  }

  handleBackdropClick(e) {
    // Si el click ocurre exactamente en el <dialog> (que gracias al user-agent abarca todo el fondo oscuro), se cierra.
    if (e.target === this.modal) {
      this.close();
    }
  }
}

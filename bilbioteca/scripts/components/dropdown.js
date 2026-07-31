export default class Dropdown {
  constructor(menuElement) {
    if (!menuElement) return;

    this.menu = menuElement;
    this.id = this.menu.getAttribute('data-menu');
    this.triggers = document.querySelectorAll(`[data-menu-trigger][data-menu-target="${this.id}"]`);
    this.isOpen = false;
    this.activeTrigger = null;

    // Vincular contexto (bind)
    this.toggle = this.toggle.bind(this);
    this.open = this.open.bind(this);
    this.close = this.close.bind(this);
    this.handleOutsideClick = this.handleOutsideClick.bind(this);
    this.handleKeyDown = this.handleKeyDown.bind(this);
    this.handleFocusOut = this.handleFocusOut.bind(this);

    this.init();
  }

  init() {
    // Escuchar a los botones que disparan este menú
    this.triggers.forEach(trigger => {
      trigger.addEventListener('click', (e) => {
        e.preventDefault();
        e.stopPropagation(); // Evitar que el evento global de clickOutside lo cierre al instante
        this.activeTrigger = trigger;
        this.toggle();
      });
    });

    // Escuchar el evento personalizado para cerrar cuando se abre OTRA instancia
    document.addEventListener('dropdown:closeAll', (e) => {
      if (e.detail.except !== this && this.isOpen) {
        this.close(false); // No devolver foco, el usuario está abriendo otro
      }
    });
  }

  toggle() {
    this.isOpen ? this.close() : this.open();
  }

  // Optimización: Posicionamiento Inteligente basado en Clases (CSS Wrapper Pattern)
  updatePosition() {
    if (!this.isOpen || !this.activeTrigger) return;
    
    // 1. Limpiar modificadores direccionales
    this.menu.classList.remove('menubutton--top', 'menubutton--right');

    // Limpiamos estilos inline del motor viejo (solo necesario por si quedaron del código anterior)
    this.menu.style.cssText = '';

    // 2. Dejar que CSS aplique el posicionamiento base ("bottom-left") y medir
    const triggerRect = this.activeTrigger.getBoundingClientRect();
    let menuRect = this.menu.getBoundingClientRect();
    const viewportWidth = document.documentElement.clientWidth;
    const viewportHeight = window.innerHeight;

    // 3. Control de Colisión Vertical (Flip Y)
    // Si el menú desborda por debajo de la pantalla Y hay espacio arriba del trigger
    if (menuRect.bottom > viewportHeight && triggerRect.top > menuRect.height) {
      this.menu.classList.add('menubutton--top');
      // Re-medir después del cambio vertical
      menuRect = this.menu.getBoundingClientRect();
    }

    // 4. Control de Colisión Horizontal (Flip X)
    // Si el menú desborda por la derecha de la pantalla
    if (menuRect.right > viewportWidth) {
      this.menu.classList.add('menubutton--right');
    }
  }

  open() {
    // 1. Avisar a los demás menús que se cierren (Encapsulamiento perfecto)
    document.dispatchEvent(new CustomEvent('dropdown:closeAll', { detail: { except: this } }));

    // 2. Abrir menú
    this.menu.hidden = false;
    this.isOpen = true;
    this.triggers.forEach(t => t.setAttribute('aria-expanded', 'true'));
    
    this.updatePosition();

    // 3. Activar listeners temporales (solo consumen memoria cuando está abierto)
    document.addEventListener('click', this.handleOutsideClick);
    document.addEventListener('keydown', this.handleKeyDown);
    window.addEventListener('resize', this.updatePosition);
    
    // Novedad Accesibilidad: Escuchar cuando el foco abandona el menú
    this.menu.addEventListener('focusout', this.handleFocusOut);

    // 4. Accesibilidad: Foco al primer elemento interactivo del menú
    const firstItem = this.menu.querySelector('button, a, input');
    if (firstItem) {
      firstItem.focus();
    }
  }

  close(returnFocus = true) {
    if (!this.isOpen) return;

    // 1. Cerrar menú
    this.menu.hidden = true;
    this.isOpen = false;
    this.triggers.forEach(t => t.setAttribute('aria-expanded', 'false'));

    // 2. Limpiar listeners (optimización de memoria)
    document.removeEventListener('click', this.handleOutsideClick);
    document.removeEventListener('keydown', this.handleKeyDown);
    window.removeEventListener('resize', this.updatePosition);
    this.menu.removeEventListener('focusout', this.handleFocusOut);

    // 3. Accesibilidad: Devolver el foco al botón que lo abrió
    // Solo si explícitamente queremos que vuelva (ej. al presionar Escape).
    // Si el usuario hizo Tab hacia otro lado o hizo click afuera, NO robamos el foco.
    if (returnFocus && this.activeTrigger) {
      this.activeTrigger.focus();
    }
  }

  handleOutsideClick(e) {
    // Si el click fue DENTRO del menú, no hacemos nada (queda abierto)
    if (this.menu.contains(e.target)) return;
    
    // Si fue afuera, lo cerramos SIN devolver el foco, ya que el usuario 
    // quiso hacer click en otro lado de la página.
    this.close(false);
  }

  handleKeyDown(e) {
    if (e.key === 'Escape') {
      // Con Escape SÍ devolvemos el foco al botón original (Estándar W3C)
      this.close(true);
      return;
    }

    // Navegación con Flechas (Solo si el menú tiene role="menu")
    if (this.menu.getAttribute('role') === 'menu' && (e.key === 'ArrowDown' || e.key === 'ArrowUp')) {
      e.preventDefault(); // Evitar scroll de la página

      const items = Array.from(this.menu.querySelectorAll('button:not([disabled]), a:not([disabled]), input:not([disabled])'));
      if (items.length === 0) return;

      const currentIndex = items.indexOf(document.activeElement);
      let nextIndex = 0;

      if (e.key === 'ArrowDown') {
        // Bajar, o volver al principio si estamos en el final
        nextIndex = currentIndex < items.length - 1 ? currentIndex + 1 : 0;
      } else if (e.key === 'ArrowUp') {
        // Subir, o ir al final si estamos en el principio
        nextIndex = currentIndex > 0 ? currentIndex - 1 : items.length - 1;
      }

      items[nextIndex].focus();
    }
  }

  handleFocusOut(e) {
    // Usamos setTimeout para esperar al siguiente frame (cuando el nuevo elemento ya tiene el foco real)
    setTimeout(() => {
      // Si el elemento que AHORA tiene el foco NO está dentro del menú, 
      // y NO es el botón trigger, significa que el usuario abandonó el menú (ej: con Tab).
      if (!this.menu.contains(document.activeElement) && document.activeElement !== this.activeTrigger) {
        this.close(false); // Lo cerramos silenciosamente sin robar el foco
      }
    }, 0);
  }
}

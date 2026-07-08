// 1. Importación de componentes modulares
import Modal from './components/modal.js';
import Dropdown from './components/dropdown.js';

// 2. Inicialización Global
document.addEventListener('DOMContentLoaded', () => {
  
  // --- Modales ---
  const modales = document.querySelectorAll('dialog[data-modal]');
  modales.forEach(el => new Modal(el));

  // --- Menús Desplegables (Dropdowns) ---
  // Buscamos todos los contenedores que actúen como menús
  const dropdowns = document.querySelectorAll('[data-menu]');
  dropdowns.forEach(el => new Dropdown(el));

  // Exportar al entorno global si necesitas inicializar componentes manualmente luego
  window.SistemaGravity = {
    Modal,
    Dropdown
  };

});

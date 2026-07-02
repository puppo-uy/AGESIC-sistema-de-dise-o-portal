<!-- Botón flotante inicial -->
<!-- Cuando hay una conversación activa se debe agregar la clase: "Asistente-boton--activo" para mostrar indicador -->
<button class="js-openChat Asistente-boton">
	<!--Indicador chat activo -->
	<svg class="active-dot" xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 25 25" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
		<circle fill="#003da5" stroke="none" cx="20" cy="5" r="8"></circle>
		<circle fill="#279e3f" stroke="none" cx="20" cy="5" r="5"></circle>
	</svg>
	<!-- Ícono chat -->
	<svg class="chat-icon" width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"> 
		<path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"></path>
	</svg>
	<!-- Etiqueta del botón -->
	<span>Asistente virtual</span>
</button>

<!-- Contenedor del asistente -->
<div class="Asistente-contenedor u-hide">
	<!-- Botón para cerrar el asistente -->
	<button class="js-closeChat Asistente-cerrar"><span class="u-hideVisually">Cerrar asistente virtual</span></button>

	<!-- Contenido del iframe -->
	<iframe class="Asistente-frame" src="https://concreta.com.uy/borradores/asistente-virtual-dgi-v2/" title="Asistente virtual"></iframe>
</div>
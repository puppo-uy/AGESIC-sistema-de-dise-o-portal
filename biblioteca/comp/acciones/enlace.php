<!-- Sin ícono -->
<a class="enlace enlace--s" href="#">Enlace S</a>

<a class="enlace" href="#">Enlace M</a>

<a class="enlace enlace--l" href="#">Enlace L</a>

<!-- Con ícono -->
<a class="enlace enlace--s" href="#">
	<svg class="icono" aria-hidden="true">
		<use href="#icono-co-editor--lineal"></use>
	</svg>
	<span>Enlace S</span>
</a>

<a class="enlace" href="#">
	<svg class="icono" aria-hidden="true">
		<use href="#icono-co-editor--lineal"></use>
	</svg>
	<span>Enlace M</span>
</a>

<a class="enlace enlace--l" href="#">
	<svg class="icono" aria-hidden="true">
		<use href="#icono-co-editor--lineal"></use>
	</svg>
	<span>Enlace L</span>
</a>

<!-- Variantes de color -->
<a class="enlace enlace--oscuro" href="#">Enlace oscuro</a>

<div style="background-color: var(--primario-oscuro); padding: var(--espaciado-16); display: inline-block;">
	<a class="enlace enlace--claro" href="#">Enlace claro</a>
</div>

<!-- Enlace externo -->
<a href="#" class="enlace enlace--externo">Enlace externo<span class="u-hideVisually"> (enlace externo)</span></a>

<!-- Enlace externo con ícono -->
<a class="enlace enlace--externo" href="#">
	<svg class="icono" aria-hidden="true">
		<use href="#icono-co-editor--lineal"></use>
	</svg>
	<span>Enlace externo con ícono</span><span class="u-hideVisually"> (enlace externo)</span>
</a>

<!-- Enlace externo en variante de color claro -->
<div style="background-color: var(--primario-oscuro); padding: var(--espaciado-16); display: inline-block;">
	<a href="#" class="enlace enlace--claro enlace--externo">Enlace externo claro<span class="u-hideVisually"> (enlace externo)</span></a>
</div>

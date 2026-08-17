<script>
	(function () {
		var raiz = getComputedStyle(document.documentElement);
		document.querySelectorAll('.muestra-color__hex[data-token]').forEach(function (el) {
			var valor = raiz.getPropertyValue(el.getAttribute('data-token')).trim();
			el.textContent = valor;
		});
	})();
</script>

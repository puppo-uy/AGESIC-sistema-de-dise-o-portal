<style>
	.muestra-colores {
		display: flex;
		flex-direction: column;
		gap: var(--espaciado-32);
	}

	.muestra-colores__fila {
		display: flex;
		flex-wrap: wrap;
		gap: var(--espaciado-16);
	}

	.muestra-color {
		width: 120px;
	}

	.muestra-color__chip {
		display: block;
		height: 64px;
		border-radius: var(--borde-radio-xs);
		border: var(--borde-grosor-1) solid var(--neutro-100);
	}

	.muestra-color__info {
		display: flex;
		flex-direction: column;
		gap: var(--espaciado-2);
		margin-top: var(--espaciado-8);
	}

	.muestra-color__hex {
		font-family: monospace;
		font-size: var(--tipo-tamano-parrafo-s);
		color: var(--texto-principal);
		text-transform: uppercase;
	}

	.muestra-color__nombre {
		font-family: monospace;
		font-size: var(--tipo-tamano-parrafo-xs);
		color: var(--texto-auxiliar);
	}
</style>

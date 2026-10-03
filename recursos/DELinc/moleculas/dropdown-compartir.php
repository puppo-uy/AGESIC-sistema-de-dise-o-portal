<div class="Dropdown-click">
	<button
		class="Dropdown-trigger Button Button--small Button--icon <?php echo $button_class; ?>"
		id="menu-button"
		aria-haspopup="true"
		aria-controls="dropdown-menu"
		aria-expanded="false"
	>		
		<?php include "../recursos/assets/icons-inc/icon-share.php"; ?>
		<span>Compartir</span>
	</button>

	<ul class="Dropdown-click-menu List" id="dropdown-menu" role="menu" aria-labelledby="menu-button" hidden>
		<li>
			<a class="List-item" role="menuitem" href="https://www.facebook.com/sharer/sharer.php?u='URL'">Facebook</a>
		</li>
		<li>
			<a class="List-item" role="menuitem" href="#">X</a>
		</li>
		<li>
			<a class="List-item" role="menuitem" href="#">Instagram</a>
		</li>
		<li>
			<a class="List-item" role="menuitem" href="whatsapp://send?text='URL'">Whatsapp</a>
		</li>
		<li>
			<a class="List-item" role="menuitem" href="#">LinkedIn</a>
		</li>
		<li>
			<a class="List-item" role="menuitem" href="#">Copiar enlace</a>
		</li>
	</ul>
</div>
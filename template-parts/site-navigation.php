<?php

use function MichealPearce\Theme\template;

$items = wp_get_nav_menu_items('main-menu');
if (!$items) $items = [];
?>
<nav class="site-navigation">
	<menu class="navigation-menu">
		<?php foreach ($items as $item) {
			template('link', [
				'to' => $item->url,
				'label' => $item->title,
			]);
		} ?>
	</menu>
</nav>

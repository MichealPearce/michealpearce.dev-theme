<?php

use function MichealPearce\Theme\template;

?>
<header class="site-header">
	<a
		href="<?= get_home_url() ?>"
		class="site-title link"
	>
		<div class="h1">
			<?= get_bloginfo('name') ?>
		</div>

		<div class="h2">
			<?= get_bloginfo('description') ?>
		</div>
	</a>
</header>
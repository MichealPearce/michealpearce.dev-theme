<?php

use function MichealPearce\Theme\template;

?>
<header class="site-header">
	<?php template('link', [
		'to' => get_home_url(),
		'label' => get_bloginfo('name'),
		'class' => 'h1 site-title'
	]) ?>
</header>
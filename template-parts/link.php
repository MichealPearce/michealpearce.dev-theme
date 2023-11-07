<?php

use function MichealPearce\Theme\use_classes;
use function MichealPearce\Theme\use_vars;

extract(use_vars([
	'to',
	'label',
	'class' => ''
]));
?>
<a
	href="<?= $to ?>"
	class="<?= use_classes('link', $class) ?>"
>
	<?= $label ?>
</a>
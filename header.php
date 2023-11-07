<?php

use function MichealPearce\Theme\template;

?>
<!doctype html>
<html <?php language_attributes(); ?> >
<head>
	<meta charset="<?php bloginfo('charset'); ?>"/>
	<meta
		name="viewport"
		content="width=device-width, initial-scale=1"
	/>

	<?php if (is_single() && is_array(get_the_tags()) && count(get_the_tags()) > 0):
		$tags = array_reduce(get_the_tags(), function ($acc, $tag) {
			$acc[] = $tag->name;
			return $acc;
		}, []);
		$tags = implode(', ', $tags);
		?>

		<meta
			name="keywords"
			content="<?= $tags ?>"
		>
	<?php endif; ?>

	<link
		rel="preconnect"
		href="https://fonts.googleapis.com"
	>

	<link
		rel="preconnect"
		href="https://fonts.gstatic.com"
		crossorigin
	>

	<link
		href="https://fonts.googleapis.com/css2?family=Source+Code+Pro:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
		rel="stylesheet"
	>

	<link
		rel="stylesheet"
		href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
		integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
		crossorigin="anonymous"
		referrerpolicy="no-referrer"
	/>

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<?php wp_body_open(); ?>
	<?php template('header'); ?>

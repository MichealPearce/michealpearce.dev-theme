<?php use function MichealPearce\Theme\template;

get_header(); ?>

<div class="articles">
	<?php while (have_posts()) {
		the_post();
		global $post;

		template('article/card', [
			'article' => $post
		]);
	} ?>
</div>

<?php get_footer(); ?>

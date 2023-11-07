<?php
get_header();
global $post;
?>
<article class="article">
	<?php if (has_post_thumbnail()): ?>
		<div class="article-thumbnail">
			<?php the_post_thumbnail('large', ['class' => 'thumbnail-image']) ?>
		</div>
	<?php endif; ?>

	<div class="article-content">
		<h1 class="article-title">
			<?= get_the_title() ?>
		</h1>

		<div class="article-body">
			<?= get_the_content() ?>
		</div>
	</div>
</article>

<?php get_footer(); ?>

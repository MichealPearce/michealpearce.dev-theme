<?php

use function MichealPearce\Theme\template;

get_header();
global $post;

$tags = get_the_tags();
?>
<article class="article">
	<?php if (has_post_thumbnail()): ?>
		<div class="article-thumbnail">
			<?php the_post_thumbnail('large', ['class' => 'thumbnail-image']) ?>
		</div>
	<?php endif; ?>

	<div class="article-content">
		<div class="article-meta">
			<span class="article-date">
				<i class="fa-solid fa-clock"></i>
				<?= get_the_date() ?>
			</span>

			<?php if (is_array($tags) && count($tags)): ?>
				<div class="article-tags">
					<?php if ($tags) foreach ($tags as $tag): ?>
						<span class="article-tag">
							<?= $tag->name ?>
						</span>
					<?php endforeach; ?>
				</div>
			<?php endif; ?>
		</div>

		<h1 class="article-title">
			<?= get_the_title() ?>
		</h1>

		<div class="article-body">
			<?= get_the_content() ?>
		</div>
	</div>
</article>

<?php get_footer(); ?>

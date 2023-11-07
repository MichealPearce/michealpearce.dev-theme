<?php

use function MichealPearce\Theme\template;
use function MichealPearce\Theme\use_classes;

$classes = ['article-card'];
if (has_post_thumbnail()) $classes[] = 'has-thumbnail';

$comment_count = intval(get_comments_number());
$comment_label = $comment_count === 1 ? 'Comment' : 'Comments';

?>
<article class="<?= use_classes($classes); ?>">
	<?php if (has_post_thumbnail()): ?>
		<div class="article-thumbnail">
			<?php the_post_thumbnail('large', ['class' => 'thumbnail-image']) ?>
		</div>
	<?php endif; ?>

	<div class="article-content">
		<h1 class="article-title">
			<?= get_the_title() ?>
		</h1>

		<p class="article-excerpt">
			<?= get_the_excerpt() ?>
		</p>

		<div class="article-actions">
			<?php template('link', [
				'class' => 'article-link',
				'to' => get_permalink(),
				'label' => <<<HTML
					Read More
					<i class="fa-solid fa-arrow-right"></i>
				HTML
			]) ?>
		</div>
	</div>
</article>

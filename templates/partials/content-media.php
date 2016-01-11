<?php
?>
<div class="featured-media">

	<a href="<?php the_permalink(); ?>" rel="bookmark" title="<?php the_title(); ?>">

		<?php the_post_thumbnail(); ?>

		<?php if ( ! empty( get_post( get_post_thumbnail_id() )->post_excerpt ) ) : ?>

			<div class="media-caption-container">

				<p class="media-caption"><?php echo wp_kses_post( get_post( get_post_thumbnail_id() )->post_excerpt ); ?></p>

			</div>

		<?php endif; ?>

	</a>

</div>
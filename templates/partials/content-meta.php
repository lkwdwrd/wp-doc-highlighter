<div class="post-meta">

	<span class="post-date">
		<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
			<?php the_time(get_option('date_format')); ?>
		</a>
	</span>

	<span class="date-sep"> / </span>
	<span class="post-author">
		<?php the_author_posts_link(); ?>
	</span>

	<?php if ( comments_open() ) : ?>
		<span class="date-sep"> / </span>
		<?php comments_popup_link( 
			'<span class="comment">' . __( '0 Comments', 'wpdh' ) . '</span>',
			__( '1 Comment', 'wpdh' ),
			__( '% Comments', 'wpdh' )
		); ?>
	<?php endif; ?>

	<?php if ( current_user_can( 'manage_options' ) ) : ?>
		<span class="date-sep"> / </span>
		<?php edit_post_link(__('Edit', 'wpdh')); ?>
	<?php endif; ?>

</div>
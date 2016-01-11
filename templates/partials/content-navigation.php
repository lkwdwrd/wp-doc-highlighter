<div class="archive-nav post-nav">
	<?php $prev_post = get_previous_post(); ?>
	<?php if ( ! empty( $prev_post ) ): ?>
		<a
			class="post-nav-older"
			title="<?php echo __( 'Previous post:', 'wpdh' ) . ' ' . get_the_title( $prev_post ); ?>"
			href="<?php echo get_the_permalink( $prev_post->ID ); ?>"
		>
			&laquo; <?php echo get_the_title( $prev_post ); ?>
		</a>
	<?php endif; ?>
	
	<?php $next_post = get_next_post(); ?>
	<?php if ( ! empty( $next_post ) ): ?>
		<a
			class="post-nav-newer"
			title="<?php echo __( 'Next post:', 'wpdh' ) . ' ' . get_the_title( $next_post ); ?>"
			href="<?php echo get_permalink( $next_post->ID ); ?>"
		>
			<?php echo get_the_title($next_post); ?> &raquo;
		</a>
	<?php endif; ?>
</div> <!-- /post-nav -->

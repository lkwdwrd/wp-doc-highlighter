<?php if ( $wp_query->max_num_pages > 1 ) : ?>
	<div class="archive-nav">
		<?php next_posts_link( __( '&laquo; Older<span> posts</span>', 'wpdh' ) ); ?>
		<?php previous_posts_link( __( 'Newer<span> posts</span> &raquo;', 'wpdh' ) ); ?>
	</div> <!-- /post-nav archive-nav -->
<?php endif; ?>

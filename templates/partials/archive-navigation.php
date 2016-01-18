<?php if ( $wp_query->max_num_pages > 1 ) : ?>
	<div class="archive-nav">
		<?php next_posts_link( __( '&#25B6; Older posts', 'wpdh' ) ); ?>
		<?php previous_posts_link( __( 'Newer posts &#25B6;', 'wpdh' ) ); ?>
	</div> <!-- /post-nav archive-nav -->
<?php endif; ?>

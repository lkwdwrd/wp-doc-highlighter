<?php if ( $data->summary ) : ?>
	<section class="summary">
		<?php echo wp_kses_post( apply_filters( 'the_excerpt', $data->summary ) ); ?>
	</section>
<?php endif; ?>
<?php if ( (bool) $data->description ) : ?>
	<section class="description">
		<h2><?php esc_html_e( 'Description', 'wpd' ); ?></h2>
		<?php echo wp_kses_post( $data->description ); ?>
	</section>
<?php endif; ?>
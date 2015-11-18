<?php if ( $data->deprecated ) : ?>
	<section class='deprecated'>
		<?php echo esc_html( sprintf(
			__( 'Warning: This %s has been deprecated. %s', 'wpd' ),
			$data->type,
			$data->deprecated
		) ); ?>
	</section>
<?php endif; ?>
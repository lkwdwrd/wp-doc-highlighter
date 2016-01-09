<?php if ( (bool) $data->return ) : ?>
	<section class="return" id="return">
		<h2><?php esc_html_e( 'Return', 'wpd' ); ?></h2>
		<?php if ( 'void' !== $data->return['type'] ) : ?>
			<span class="return-type">(<?php echo esc_html( implode( ' | ', $data->return['types'] ) ); ?>)</span>
			<?php echo wp_kses_post( $data->return['content'] ); ?>
		<?php else: ?>
			<?php echo sprintf( esc_html__( 'This %s does not have a return value.' ), $data->type ); ?>
		<?php endif; ?>
	</section>
<?php endif; ?>
<?php if ( (bool) $data->return ) : ?>
	<section class="return" id="return">
		<h2><?php esc_html_e( 'Return', 'wpd' ); ?></h2>
		<?php if ( 'void' !== $data->return['type'] ) : ?>
			<span class="return-type">(<?php echo esc_html( $data->return['type'] ); ?>)</span>
			<?php echo esc_html( $data->return['description'] ); ?>
		<?php else: ?>
			<?php echo sprintf( esc_html__( 'This %s does not have a return value.' ), $data->type ); ?>
		<?php endif; ?>
	</section>
<?php endif; ?>
<li>
	<a href="<?php echo esc_url( get_the_permalink( $data->post ) ); ?>">
		<?php
			echo get_the_title( $data->post );
			echo ( $data->callable ) ? '()' : '';
		?>
	</a>
	<?php if ( (bool) $data->namespace && ! empty( $data->namespace['text'] ) ) : ?>
		<div class="usage-namespace"><?php echo esc_html( $data->namespace['text'] ); ?></div>
	<?php endif; ?>
	<div class="usage-source-file"><?php echo esc_html( $data->source_file ); ?></div>
</li>

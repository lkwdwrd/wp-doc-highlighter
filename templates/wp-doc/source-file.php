<?php if ( $data->source_file ) : ?>
	<section class="source-file">
		<strong><?php esc_html_e( 'Source file:', 'wpd' ); ?></strong>
		<a href="<?php echo esc_url( $data->source_file_archive_link() ); ?>"><?php echo esc_html( $data->source_file ); ?></a>
	</section>
<?php endif; ?>

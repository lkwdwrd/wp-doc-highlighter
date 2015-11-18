<?php if ( $data->has_source_code() || $data->source_file ) : ?>
	<section class="source-content">
		<h2><?php esc_html_e( 'Source', 'wpd' ); ?></h2>
		<?php if ( $data->source_file ) : ?>
			<section class="source-file">
				<strong><?php esc_html_e( 'Source file:', 'wpd' ); ?></strong>
				<a href="<?php echo esc_url( $data->source_file_archive_link() ); ?>"><?php echo esc_html( $data->source_file ); ?></a>
			</section>
		<?php endif; ?>
		<?php if ( $data->has_source_code() ) : ?>
			<div class="source-code-container">
				<pre class="brush: php; toolbar: false; first-line: <?php echo esc_attr( $data->start_line ); ?>; line-numbers" data-start="<?php echo esc_attr( $data->start_line ); ?>"><code class="language-php"><?php echo esc_html( $data->source_code( true ) ); ?></code></pre>
			</div>
			<p class="source-code-links">
				<span>
					<a href="#" class="show-complete-source"><?php _e( 'Expand full source code', 'wporg' ); ?></a>
					<a href="#" class="less-complete-source"><?php _e( 'Collapse full source code', 'wporg' ); ?></a>
				</span>
			</p>
		<?php endif; ?>
	</section>
<?php endif; ?>

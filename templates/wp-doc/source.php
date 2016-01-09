<?php if ( $data->has_source_code() || $data->source_file ) : ?>
	<section class="source-content">
		<h2><?php esc_html_e( 'Source', 'wpd' ); ?></h2>
		<?php echo $data->render( 'source-file' ); ?>
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

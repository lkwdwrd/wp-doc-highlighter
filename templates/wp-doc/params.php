<?php if ( $params = $data->params ) : ?>
	<section class="parameters">
		<h2><?php esc_html_e( 'Parameters', 'wpd' ); ?></h2>
		<dl>
			<?php foreach ( $params as $param ) : ?>
			<?php if ( ! empty( $param['variable'] ) ) : ?>
			<dt id="param-<?php echo esc_attr( $param['variable'] ); ?>">
				<?php echo esc_html( $param['variable'] ); ?>
			</dt>
			<?php endif; ?>
			<dd>
				<p class="desc">
					<?php if ( ! empty( $param['types'] ) ) : ?>
						<span class="type">(<?php echo esc_html( implode( ' | ', $param['types'] ) ); ?>)</span>
					<?php endif; ?>
					<?php if ( ! empty( $param['required'] ) && 'wp-parser-hook' !== get_post_type() ) : ?>
						<span class="required">(<?php echo esc_html( $param['required'] ); ?>)</span>
					<?php endif; ?>
					<?php if ( ! empty( $param['content'] ) ) : ?>
						<span class="description">
							<?php if ( is_string( $param['content'] ) ) : ?>
								<?php echo wp_kses_post( $param['content'] ); ?>
							<?php else : ?>
								<ul class="param-hash">
								<?php foreach( $param['content'] as $type_item ) : ?>
									<li>
										<span class="arg"><?php echo esc_html( $type_item['name'] ); ?></span>
										<span class='type'>(<?php echo esc_html( $type_item['type'] ); ?>)</span>
										<?php echo wp_kses_post( $type_item['description'] ); ?>
									</li>
								<?php endforeach; ?>
								</ul>
							<?php endif; ?>
						</span>
					<?php endif; ?>
				</p>
				<?php if ( ! empty( $param['default'] ) ) : ?>
				<p class="default"><?php esc_html_e( 'Default value:', 'wpd' );?> <?php echo esc_html( $param['default'] ); ?></p>
				<?php endif; ?>
			</dd>
			<?php endforeach; ?>
		</dl>
	</section>
<?php endif; ?>
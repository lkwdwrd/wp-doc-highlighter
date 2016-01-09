<?php if( (bool)$data->methods ) : ?>
	<section class="class-methods">
		<h2><?php esc_html_e( 'Methods', 'wpd' ); ?></h2>
		<ul>
			<?php foreach ( $data->methods as $method ) : ?>
				<li>
					<a href="<?php echo esc_url( get_the_permalink( $method->post ) ); ?>">
						<?php
							echo get_the_title( $method->post );
							echo ( $method->callable ) ? '()' : '';
						?>
					</a>
					<?php if ( (bool) $method->deprecated ): ?>
						<span class="method-deprecated"><?php _e( 'deprecated', 'wpd' ); ?></span>
					<?php endif; ?>
					<?php if ( (bool) $method->summary ) : ?>
						<div class="method-summary"><?php echo esc_html( $method->summary ); ?></div>
					<?php endif; ?>
				</li>
			<?php endforeach; ?>
		</ul>
	</section>
<?php endif; ?>

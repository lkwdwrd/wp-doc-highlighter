<?php if ( (bool)$data->used_by ) : ?>
	<section class="usage">
		<h2><?php esc_html_e( 'Usage', 'wpd' ); ?></h2>
		<div class="use-columns">
			<div class="used-by">
				<h3><?php esc_html_e( 'Used by', 'wpd' ); ?></h3>
				<ul>
					<?php foreach ( $data->used_by as $used_by ) : ?>
						<li>
							<a href="<?php echo esc_url( get_the_permalink( $used_by->post ) ); ?>">
								<?php
									echo get_the_title( $used_by->post );
									echo ( $used_by->callable ) ? '()' : '';
								?>
							</a>
							<?php if ( (bool) $used_by->namespace ) : ?>
								<div class="usage-namespace"><?php echo esc_html( $used_by->namespace['text'] ); ?></div>
							<?php endif; ?>
							<div class="usage-source-file"><?php echo esc_html( $used_by->source_file ); ?></div>
						</li>
					<?php endforeach; ?>
				</ul>
			</div>
			<?php if ( (bool)$data->uses ) : ?>
				<div class="uses">
					<h3><?php esc_html_e( 'Uses', 'wpd' ); ?></h3>
					<ul>
						<?php foreach ( $data->uses as $uses ) : ?>
							<li>
								<a href="<?php echo esc_url( get_the_permalink( $uses->post ) ); ?>">
									<?php
										echo get_the_title( $used_by->post );
										echo ( $uses->callable ) ? '()' : '';
									?>
								</a>
								<?php if ( (bool) $uses->namespace ) : ?>
									<div class="usage-namespace"><?php echo esc_html( $uses->namespace['text'] ); ?></div>
								<?php endif; ?>
								<div class="usage-source-file"><?php echo esc_html( $uses->source_file ); ?></div>
							</li>
						<?php endforeach; ?>
					</ul>
				</div>
			<?php endif; ?>
		</div>
	</section>
<?php endif; ?>

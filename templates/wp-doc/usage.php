<?php if ( (bool)$data->used_by ) : ?>
	<section class="usage">
		<h2><?php esc_html_e( 'Usage', 'wpd' ); ?></h2>
		<div class="use-columns">
			<div class="used-by">
				<h3><?php esc_html_e( 'Used by', 'wpd' ); ?></h3>
				<ul>
					<?php foreach ( $data->used_by as $used_by ) : ?>
						<?php echo $used_by->render( 'usage-item' ); ?>
					<?php endforeach; ?>
				</ul>
			</div>
			<?php if ( (bool)$data->uses ) : ?>
				<div class="uses">
					<h3><?php esc_html_e( 'Uses', 'wpd' ); ?></h3>
					<ul>
						<?php foreach ( $data->uses as $uses ) : ?>
							<?php echo $uses->render( 'usage-item' ); ?>
						<?php endforeach; ?>
					</ul>
				</div>
			<?php endif; ?>
		</div>
	</section>
<?php endif; ?>

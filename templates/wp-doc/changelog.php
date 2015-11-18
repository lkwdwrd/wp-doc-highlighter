<?php if ( $data->changelog ) : ?>
	<section class="changelog">
		<h2><?php esc_html_e( 'Changelog', 'wpd' ); ?></h2>
		<ul>
			<?php foreach ( $data->changelog as $version => $data ) : ?>
				<li>
					<strong><?php esc_html_e( 'Since: ', 'wpd' ); ?></strong>
					<a href="<?php echo esc_url( $data['since_url'] ); ?>">
						<?php echo esc_html( $version ); ?>
					</a>
					<?php echo esc_html( $data['description'] ); ?>
				</li>
			<?php endforeach; ?>
		</ul>
	</section>
<?php endif; ?>

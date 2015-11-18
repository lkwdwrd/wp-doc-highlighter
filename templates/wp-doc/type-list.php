<section class="type-section">
	<?php if ( $data->title ) : ?>
		<header>
			<?php if ( $data->url ) : ?>
				<a href="<?php echo esc_url( $data->url ); ?>" class="<?php echo implode( ' ', array_map( 'sanitize_html_class', $data->classes ) ); ?>">
			<?php endif; ?>
				<h2><?php echo esc_html( $data->title ); ?></h2>
			<?php if ( $data->url ) : ?>
				</a>
			<?php endif; ?>
		</header>
	<?php endif; ?>
	<ul class="type-section-list">
		<?php echo $data->map_render( 'type-item' ); ?>
	</ul>
</section>

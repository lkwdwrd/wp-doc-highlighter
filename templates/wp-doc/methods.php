<?php if( (bool)$data->methods ) : ?>
	<section class="class-methods">
		<h2><?php esc_html_e( 'Methods', 'wpd' ); ?></h2>
		<ul>
			<?php foreach ( $data->methods as $method ) : ?>
				<li><a href="<?php echo esc_url( $method->url ); ?>">
				</a>
				<?php if ( $excerpt = apply_filters( 'get_the_excerpt', $child->post_excerpt ) ) {
					echo '&mdash; ' . sanitize_text_field( $excerpt );
				} ?>
				<?php if ( is_deprecated( $child->ID ) ) {
					echo '&mdash; <span class="deprecated-method">' . __( 'deprecated', 'wporg' ) . '</span>';
				} ?>
				</li>
			<?php endforeach; ?>
		</ul>
	</section>
<?php endif; ?>

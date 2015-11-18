<?php if ( (bool) $data->namespace ) : ?>
	<section class="namespace">
		<strong>Namespace:</strong>
		<?php echo implode(
			' \\ ',
			array_map(
				'sprintf',
				array_fill( 0, count( $data->namespace['terms'] ), '<a href="%s">%s</a>' ),
				array_map(
					'esc_url',
					array_map(
						'get_term_link',
						$data->namespace['terms'],
						array_fill( 0, count( $data->namespace['terms'] ), 'wp-parser-namespace' )
					)
				),
				array_map(
					'esc_html',
					wp_list_pluck( $data->namespace['terms'], 'name' )
				)
			)
		); ?>
	</section>
<?php endif; ?>
<section class="signature">
<?php
// this is done in a full PHP block to carefully control whitespace output.
if ( (bool)$data->return ) {
	echo '<a href="#return"><span class="arg-type">' . esc_html( $data->return['type'] ) . '</span></a> ';
}
echo esc_html( $data->signature['name'] ) . '(';
if ( (bool)$data->signature['args'] ) {
	$args = array();
	foreach ( $data->signature['args'] as $i => $arg ) {
		$args[ $i ] = '<a href="#param-' . esc_attr( $arg['name'] ) . '"">';
		if ( ! empty( $arg['type'] ) ) {
			$args[ $i ] .= '<span class="arg-type">' . esc_html( $arg['type'] ) . '</span>';
		}

		$args[ $i ] .= '&nbsp;<span class="arg-name">' .  esc_html( $arg['name'] ) . '</span>';

		if ( ! empty( $arg['default'] ) ) {
			$args[ $i ] .= '&nbsp;=&nbsp;<span class="arg-default">' . esc_html( $arg['default'] ) . '</span>';
		}

		$args[ $i ] .= '</a>';
	}
	echo ' ' . implode( ', ', $args ) . ' ';
}
echo ')';
?>
</section>
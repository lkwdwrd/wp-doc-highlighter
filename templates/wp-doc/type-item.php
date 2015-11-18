<li>
	<a class="type-listing-link" href="<?php echo esc_url( $data->url ); ?>">
		<h3 class="type-listing-header"><?php echo esc_html( $data->signature['name'] ); ?><?php if ( $data->callable ) : ?>()<?php endif; ?></h3>
				<span class="identity-tag identity-tag-<?php echo esc_attr( $data->type ); ?>"><?php echo esc_html( $data->type ); ?></span>
		<?php if ( (bool) $data->namespace ) : ?>
			<div class="type-listing-namespace"><?php echo esc_html( $data->namespace['text'] ); ?></div>
		<?php endif; ?>
		<?php if ( (bool) $data->summary ) : ?>
			<div class="type-listing-s-desc"><?php echo esc_html( $data->summary ); ?></div>
		<?php endif; ?>
	</a>
</li>

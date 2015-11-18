<li>
	<a class="type-listing-link" href="#!2">
		<h3 class="type-listing-header"><?php echo $name ; ?></h3>
		<?php if ( $identity_tag_type && $identity_tag ) : ?>
				<span class="identity-tag identity-tag-<?php echo $identity_tag_type; ?>"><?php echo $identity_tag; ?></span>
		<?php endif; ?>
		<?php if ( $namespace ) : ?>
			<div class="type-listing-namespace"><?php echo $namespace; ?></div>
		<?php endif; ?>
		<?php if ( $description ) : ?>
			<div class="type-listing-s-desc"><?php echo $description; ?></div>
		<?php endif; ?>
	</a>
</li>
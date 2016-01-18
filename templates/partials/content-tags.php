<?php if( has_tag() ) : ?>
	<p class="post-tags">
		<span><?php _e('Tags:', 'wilson') ?></span>
		<?php the_tags('', ' '); ?>
	</p>
<?php endif; ?>

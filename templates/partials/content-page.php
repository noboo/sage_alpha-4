<!--<?php if (has_post_thumbnail()): ?>
<?php the_post_thumbnail('full', array( 'class' => 'img-fluid mb-3' )); ?>
<?php endif; ?>-->
<?php the_content(); ?>
<?php wp_link_pages(['before' => '<nav class="page-nav"><p>' . __('Pages:', 'sage'), 'after' => '</p></nav>']);

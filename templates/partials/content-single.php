<article <?php post_class(); ?>>
    <header class="mb-3">
        <h1 class="entry-title h6 m-0">
            <?php the_title(); ?>
        </h1>
        <?php get_template_part('partials/entry-meta'); ?>
    </header>
    <!--<?php if (has_post_thumbnail()): ?>
    <?php the_post_thumbnail('full', array( 'class' => 'img-fluid mb-3' )); ?>
    <?php endif; ?>-->
    <div class="entry-content">
        <?php the_content(); ?>
    </div>
    <footer>
        <?php wp_link_pages(['before' => '<nav class="page-nav"><p>' . __('Pages:', 'sage'), 'after' => '</p></nav>']); ?>
    </footer>
    <hr class="mb-5" />
    <?php comments_template('/templates/partials/comments.php'); ?>
</article>
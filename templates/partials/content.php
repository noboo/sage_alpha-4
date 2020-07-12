<article <?php post_class(); ?>>
    <div class="mb-4 position-relative">
        <?php if (wp_is_mobile()) :?>
        <?php if (has_post_thumbnail()): ?>
        <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('thumbnail', array( 'class' => 'float-left mr-3 w-20 img-fluid' )); ?></a>
        <?php endif; ?>
        <?php else: ?>
        <?php if (has_post_thumbnail()): ?>
        <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('thumbnail', array( 'class' => 'float-left mr-3 w-10 img-fluid' )); ?></a>
        <?php endif; ?>
        <?php endif; ?>
        <header>
            <p class="entry-title h5 m-0 pt-1">
                <a href="<?php the_permalink(); ?>">
                    <?php the_title(); ?>
                </a>
            </p>
            <?php get_template_part('partials/entry-meta'); ?>
        </header>
        <div class="entry-summary m-0 position-absolute" style="bottom:0; right:0;">
            <a href="<?php the_permalink(); ?>">
                <span class="badge badge-primary text-right"><small>Continued</small> <i
                        class="fas fa-arrow-alt-circle-right"></i></span>
            </a>
            <!--<?php the_excerpt(); ?>-->
        </div>
        <div class="clearfix"></div>
    </div>
</article>
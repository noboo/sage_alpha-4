<div class="loader-bg">
    <!-- loding -->
    <h1>
        <?php if (get_header_image()): ?>
        <img src="<?php header_image(); ?>"
            alt="<?php bloginfo('name'); ?>"
            class="w-25 animated fadeIn">
        <?php else: ?>
        <?php bloginfo('name'); ?>
        <?php endif; ?>
    </h1>
</div>
<header class="banner border-top border-light">
    <?php if (is_active_sidebar('sidebar-primary')) : ?>
    <div class=" mb-3 container">
        <?php dynamic_sidebar('sidebar-primary'); ?>
        <!-- <a class="brand" href="<?= esc_url(home_url('/')); ?>"><?php bloginfo('name'); ?></a>-->
    </div>
    <?php endif; ?>
    <!--<div class="bg-white">-->
    <div class="container px-0 mb-4">
        <nav class="navbar navbar-expand-lg navbar-light bg-white rounded">
            <div class="container"><?php if (wp_is_mobile()) : ?>
                <?php echo '<a class="navbar-brand" href="#">
                <img src="'.get_site_icon_url($size = 100).'" class="w-20">
                <small>'.get_bloginfo('name').'</small></a>';?>
                <?php endif; ?>
                <button class="navbar-toggler border-primary bg-white" type="button" data-toggle="collapse"
                    data-target="#bs4navbar" aria-controls="bs4navbar" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <?php
                wp_nav_menu([
                'menu'            => 'primary_navigation',
                'theme_location'  => 'primary_navigation',
                'container'       => 'div',
                'container_id'    => 'bs4navbar',
                'container_class' => 'collapse navbar-collapse',
                'menu_id'         => false,
                'menu_class'      => 'm-0 navbar-nav mr-auto text-md-center nav-justified w-100 h5',
                'depth'           => 2,
                'fallback_cb'     => 'bs4navwalker::fallback',
                'walker'          => new bs4navwalker()
                ]);
                ?>
            </div>
        </nav>
    </div>
    <?php if (is_active_sidebar('sidebar-secondary')) : ?>
    <div class="bg-white py-3">
        <div class="container">
            <?php dynamic_sidebar('sidebar-secondary'); ?>
        </div>
    </div>
    <?php endif; ?>
</header>
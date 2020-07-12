<!doctype html>
<html <?php language_attributes(); ?>>
<?php get_template_part('partials/head'); ?>

<body <?php body_class('m-0', `p-0`); ?>>
  <div class="wraps">
    <!--[if IE]>
      <div class="alert alert-warning">
        <?php _e('You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.', 'sage'); ?>
  </div>
  <![endif]-->
        <?php
      do_action('get_header');
      get_template_part('partials/header');
        ?>
        <div class="bg-white">
    <div class="wrap container" role="document">
                <div class="content row">
                    <main class="main pb-3" id="main">
                    <?php if (is_active_sidebar('sidebar-thirdary')) : ?>
                        <?php dynamic_sidebar('sidebar-thirdary'); ?>
                        <?php endif; ?>
                        <?php if (is_category(array( 'clerkes', 'btn-primary', 'new-clerkes' ))) { ?>
                         <div class="row no-gutters mr-n3 mb-n3">
                          <?php include App\template()->main(); ?>
                          </div>
                          <?php } else { ?>
                          <?php include App\template()->main(); ?>
                          <?php } ?>
                          <?php if (is_active_sidebar('sidebar-fourth')) : ?>
                        <?php dynamic_sidebar('sidebar-fourth'); ?>
                        <?php endif; ?>
                    </main>
                    <?php if (App\display_sidebar()) : ?>
                    <aside class="sidebar">
                        <?php App\template_part('partials/sidebar'); ?>
                    </aside>
                    <?php endif; ?>
                </div>
            </div>
            <?php
      do_action('get_footer');
      get_template_part('partials/footer');
      wp_footer();
    ?>
    </div><!-- bg -->
    </div>
</body>

</html>
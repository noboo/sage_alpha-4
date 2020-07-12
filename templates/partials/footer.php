    <footer class="content-info mt-4 pt-5 bg-light">
    	<div class="container">
    		<div class="row">
    			<?php if (is_active_sidebar('second-footer')) : ?>
    			<div class="col-12 col-md-4"><?php dynamic_sidebar('second-footer'); ?>
    			</div>
    			<?php endif; ?>
    			<?php if (is_active_sidebar('third-footer')) : ?>
    			<div class="col-12 col-md-4"><?php dynamic_sidebar('third-footer'); ?>
    			</div>
    			<?php endif; ?>
    			<?php if (is_active_sidebar('fourth-footer')) : ?>
    			<div class="col-12 col-md-4"><?php dynamic_sidebar('fourth-footer'); ?>
    			</div>
    			<?php endif; ?>
    		</div>
    		<div class="container">
    			<hr /><small> ©
    				<?php echo date('Y');?>
    				<a class="brand"
    					href="<?= esc_url(home_url('/')); ?>">
    					<?php bloginfo('name'); ?>
    				</a>. design by
    				<a class="デジタルバス" href="//www.digitalbath.jp/">
    					DigitalBath
    				</a>.</small>
    		</div>
    </footer>

    <div class="page-top"><a href="#"><i class="fas fa-sort-up fa-3x"><br /></i></a></div>

    <?php if (wp_is_mobile()) :?>
    <?php wp_nav_menu(array( 'menu' => 'mobile_navigation',
                'theme_location'  => 'mobile_navigation',
     'menu_class'      => 'm-0 list-unstyled d-flex flex-row bd-highlight fixed-bottom text-center shadow-lg bg-light',
     'menu_id'         => 'bottomenu',
     'before'          => '<div class="mt-2">',
     'after'           => '</div>',
     'link_before'     => '<span class="text-primary col">',
     'link_after'      => '</span>'  )); ?>
    <?php endif; ?>
    <script
    	src="<?php echo get_template_directory_uri(); ?>/templates/partials/js/jq.js">
    </script>
    
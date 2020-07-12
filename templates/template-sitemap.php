<?php
/**
 * Template Name: Site Map
 */
?>

<?php while (have_posts()) : the_post(); ?>
  <?php get_template_part('partials/page-header'); ?>
  <?php get_template_part('partials/content-page'); ?>
  	
<div class="site-map p-5 bg-light text-dark">
<h2 class="h4">固定ページ</h2>
  <ul class="list-disc">
    <?php wp_list_pages('title_li='); ?>
  </ul>
  <?php
    $args=array(
      'orderby' => 'name',
      'order' => 'ASC'
     );
    $categories=get_categories($args);
    foreach ($categories as $category) {
        echo '<h2 class="h5 pt-2"><a href="' . get_category_link($category->term_id) . '" title="' . sprintf(__("View all posts in %s"), $category->name) . '"' . '>' . $category->name.'</a></h2>'; ?>
    <ul class="list-circle">
      <?php
      global $post;
        $myposts = get_posts('numberposts=100&category=' . $category->term_id);
        foreach ($myposts as $post) : setup_postdata($post); ?>
      <li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
      <?php endforeach; ?>
    </ul>
  <?php
    }; ?>
 
</div>
<?php endwhile; ?>

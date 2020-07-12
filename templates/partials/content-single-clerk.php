<article <?php post_class(); ?>>
  <header>
    <h1 class="entry-title h6 mb-2">
      <?php the_title(); ?>
    </h1>
  </header>
  <!--<?php if (has_post_thumbnail()): ?>
  <?php the_post_thumbnail('full', array( 'class' => 'img-fluid mb-3' )); ?>
  <?php endif; ?>-->

  <div class="entry-content">
    <?php the_content(); ?>
    <div class="row">
      <div class="slider-container col-12 col-md-6">
        <ul id="slider" class="list-unstyled p-0 m-0">
          <?php if (get_post_meta(get_the_ID(), 'clerk_1', true)) : ?>
          <li class="slide-item"><img
              data-lazy="<?php $image = wp_get_attachment_image_src(post_custom('clerk_1'), 'large'); echo $image[0]; ?>"
              class="w-100" alt="画像"></li>
          <?php endif;?>
          <?php if (get_post_meta(get_the_ID(), 'clerk_2', true)) : ?>
          <li class="slide-item"><img
              data-lazy="<?php $image = wp_get_attachment_image_src(post_custom('clerk_2'), 'large'); echo $image[0]; ?>"
              class="w-100" alt="画像"></li>
          <?php endif;?>
          <?php if (get_post_meta(get_the_ID(), 'clerk_3', true)) : ?>
          <li class="slide-item"><img
              data-lazy="<?php $image = wp_get_attachment_image_src(post_custom('clerk_3'), 'large'); echo $image[0]; ?>"
              class="w-100" alt="画像"></li>
          <?php endif;?>
          <?php if (get_post_meta(get_the_ID(), 'clerk_4', true)) : ?>
          <li class="slide-item"><img
              data-lazy="<?php $image = wp_get_attachment_image_src(post_custom('clerk_4'), 'large'); echo $image[0]; ?>"
              class="w-100" alt="画像"></li>
          <?php endif;?>
        </ul>
        <ul id="thumbnail-list" class="list-unstyled row no-gutters">
          <?php if (get_post_meta(get_the_ID(), 'clerk_1', true)) : ?>
          <li class="thumbnail-item col-3"><img
              src="<?php $image = wp_get_attachment_image_src(post_custom('clerk_1'), 'thumbnail'); echo $image[0]; ?>"
              class="w-100" alt="画像"></li>
          <?php endif;?>
          <?php if (get_post_meta(get_the_ID(), 'clerk_2', true)) : ?>
          <li class="thumbnail-item col-3"><img
              src="<?php $image = wp_get_attachment_image_src(post_custom('clerk_2'), 'thumbnail'); echo $image[0]; ?>"
              class="w-100" alt="画像"></li>
          <?php endif;?>
          <?php if (get_post_meta(get_the_ID(), 'clerk_3', true)) : ?>
          <li class="thumbnail-item col-3"><img
              src="<?php $image = wp_get_attachment_image_src(post_custom('clerk_3'), 'thumbnail'); echo $image[0]; ?>"
              class="w-100" alt="画像"></li>
          <?php endif;?>
          <?php if (get_post_meta(get_the_ID(), 'clerk_4', true)) : ?>
          <li class="thumbnail-item col-3"><img
              src="<?php $image = wp_get_attachment_image_src(post_custom('clerk_4'), 'thumbnail'); echo $image[0]; ?>"
              class="w-100" alt="画像"></li>
          <?php endif;?>
        </ul>
      </div>
      <div class="col-12 col-md-6">
        <h2><?php the_title(); ?>・PROFILE</h2>
        <?php get_template_part('partials/entry-meta'); ?>

        <p><?php
  $categories = get_the_category();
  foreach ($categories as $category) {
      echo '<span class="badge badge-pill badge-secondary mr-1">' . $category->name . '</span>';
  }
?>
          <?php
  $tags = get_the_tags();
  foreach ($tags as $tag) {
      echo '<span class="badge badge-pill badge-secondary mr-1">' . $tag->name . '</span>';
  }
?>
        </p>

        <?php if (get_post_meta(get_the_ID(), 'text_1', true)) : ?>
        <div class="p-3 mt-3 bg-light text-dark">
          <p><?php the_field('text_1'); ?>
          </p>
        </div>
        <?php endif;?>
        <?php if (get_post_meta(get_the_ID(), 'skill', true)) : ?>
        <ul class="p-3 mt-3">
          <?php
  $obj = get_field_object('skill');
  $skills = $obj['value'];
  foreach ($skills as $skill) {
      echo '<li>',$skill,'</li>';
  }
?>
        </ul>
        <?php endif;?>



        <?php if (get_post_meta(get_the_ID(), 'twitter', true)) : ?>
        <a class="btn btn-primary btn-lg w-70 mt-3"
          href="<?php the_field('twitter'); ?>"
          role="button"><i class="fab fa-twitter"></i> twitter</a><br />
        <?php endif;?>
        <?php if (get_post_meta(get_the_ID(), 'instagrum', true)) : ?>
        <a class="btn btn-info btn-lg w-70 mt-3"
          href="<?php the_field('instagrum'); ?>"
          role="button"><i class="fab fa-instagram"></i> instagrum</a>
        <?php endif;?>

        <h2 class="mt-5"><?php the_title(); ?>さんを予約</h2>
        <div class="p-3 mb-3 bg-light text-dark">
          <small><?php echo do_shortcode('[contact-form-7 id="232" title="Reservation"]'); ?></small>
        </div>

      </div>
    </div><!-- row -->

    <script>
      // slide
      jQuery(function() {
        var slider = "#slider"; // スライダー
        var thumbnailItem = "#thumbnail-list .thumbnail-item"; // サムネイル画像アイテム

        // サムネイル画像アイテムに data-index でindex番号を付与
        jQuery(thumbnailItem).each(function() {
          var index = jQuery(thumbnailItem).index(this);
          jQuery(this).attr("data-index", index);
        });

        // スライダー初期化後、カレントのサムネイル画像にクラス「thumbnail-current」を付ける
        // 「slickスライダー作成」の前にこの記述は書いてください。
        jQuery(slider).on('init', function(slick) {
          var index = jQuery(".slide-item.slick-slide.slick-current").attr("data-slick-index");
          jQuery(thumbnailItem + '[data-index="' + index + '"]').addClass("thumbnail-current");
        });

        //slickスライダー初期化  
        jQuery(slider).slick({
          autoplay: true,
          arrows: false,
          fade: true,
          infinite: false //これはつけましょう。
        });
        //サムネイル画像アイテムをクリックしたときにスライダー切り替え
        jQuery(thumbnailItem).on('click', function() {
          var index = jQuery(this).attr("data-index");
          jQuery(slider).slick("slickGoTo", index, false);
        });

        //サムネイル画像のカレントを切り替え
        jQuery(slider).on('beforeChange', function(event, slick, currentSlide, nextSlide) {
          jQuery(thumbnailItem).each(function() {
            jQuery(this).removeClass("thumbnail-current");
          });
          jQuery(thumbnailItem + '[data-index="' + nextSlide + '"]').addClass("thumbnail-current");
        });
      });
    </script>


  </div>
  <footer>
    <?php wp_link_pages(['before' => '<nav class="page-nav"><p>' . __('Pages:', 'sage'), 'after' => '</p></nav>']); ?>
  </footer>
  <hr class="mb-5" />
  <?php comments_template('/templates/partials/comments.php'); ?>
</article>
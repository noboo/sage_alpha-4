<?php
    $classes = array(  'col-6','col-md-3','pr-3','pb-3');
?>
<article <?php post_class($classes); ?>>
    <div class="<?php $cats = get_the_category();
            foreach ($cats as $cat):
            if ($cat->parent) {
                echo $cat->slug . ' ';
            }
            endforeach;?> rounded">
        <?php if (wp_is_mobile()) :?>
        <?php if (has_post_thumbnail()): ?>
        <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('large', array( 'class' => 'img-fluid rounded-top' )); ?></a>
        <?php endif; ?>
        <?php else: ?>
        <?php if (has_post_thumbnail()): ?>
        <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('large', array( 'class' => 'img-fluid rounded-top' )); ?></a>
        <?php endif; ?>
        <?php endif; ?>
        <header>
            <?php // 記事のカテゴリー情報を取得する
            $cat = get_the_category();// 取得した配列から必要な情報を変数に入れる
            $cat_name = $cat[0]->cat_name; // カテゴリー名
            $cat_slug  = $cat[0]->category_nicename; // カテゴリースラッグ
            ?>
            <h2 class="entry-title h5 m-0">
                <a class="btn <?php $cats = get_the_category();
            foreach ($cats as $cat):
            if ($cat->parent) {
                echo $cat->slug . ' ';
            }
            endforeach;?> btn-block"
                    href="<?php the_permalink(); ?>" role="button">


                    <?php if (in_category('new-clerkes')) : ?>
                    <span class="badge badge-pill badge-danger">新</span>
                    <?php endif; ?>
                    </span> <?php the_title(); ?>
                </a>
            </h2>
        </header>
        <!--<div class="entry-summary m-0 position-absolute"  style="bottom:0; right:0;">
            <a href="<?php the_permalink(); ?>">
        <p class="text-right"><small>Continued</small><i class="fa fa-arrow-circle-right fa-2x" aria-hidden="true"></i>
        </p>
        </a>
        <?php the_excerpt(); ?>
    </div>--></div>
</article>
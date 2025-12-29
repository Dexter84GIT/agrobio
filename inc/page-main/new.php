<?php
$new_title = get_field('new_title') ?: 'Новинки';

$q = new WP_Query([
    'post_type' => 'product_card',
    'post_status' => 'publish',
    'posts_per_page' => 8,
    'orderby' => 'rand',
    'no_found_rows' => true,
    'ignore_sticky_posts' => true,
    'meta_query' => [
        [
            'key' => 'new_product',
            'value' => '1',
            'compare' => '='
        ]
    ],
]);
?>

<section class="new pr">
    <div class="swiper-container-wrap">
        <div class="container swiper new-swiper">
            <h2 class="page-title tac"><?php echo esc_html($new_title); ?></h2>
            <div class="new-wrapper swiper-wrapper">

                <?php if ($q->have_posts()) : ?>
                    <?php while ($q->have_posts()) : $q->the_post(); ?>
                        <?php
                        $product_title = get_field('product_title') ?: get_the_title();
                        $product_subtitle = get_field('product_subtitle');
                        $product_usage = get_field('product_usage');
                        $path = get_template_directory() . '/inc/page-product/parts/images.php';
                        if (file_exists($path)) {
                            include $path;
                        }
                        ?>

                        <div class="swiper-slide new-slide">
                            <div class="img">
                                <img src="<?php echo esc_url($main_image); ?>" alt="<?php echo esc_attr($product_title); ?>">
                            </div>

                            <a href="<?php echo esc_url(get_permalink()); ?>" class="new-button">Подробнее</a>

                            <div class="new-text df fdc">
                                <p class="new-title"><?php echo esc_html($product_title); ?></p>

                                <?php if (!empty($product_subtitle)) : ?>
                                    <p class="new-subtitle"><?php echo esc_html($product_subtitle); ?></p>
                                <?php endif; ?>

                                <?php if (!empty($product_usage)) : ?>
                                    <p class="new-description">Применение: <br><?php echo wp_kses_post(nl2br($product_usage)); ?></p>
                                <?php endif; ?>
                            </div>
                        </div>

                    <?php endwhile; ?>
                    <?php wp_reset_postdata(); ?>
                <?php endif; ?>

            </div>
        </div>
        <div class="new-button-prev new-nav swiper-button-prev"></div>
        <div class="new-button-next new-nav swiper-button-next"></div>
    </div>
</section>

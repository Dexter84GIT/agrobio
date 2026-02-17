<?php
$q = new WP_Query([
    'post_type' => 'company_news',
    'post_status' => 'publish',
    'posts_per_page' => -99,
    'orderby' => 'ASC',
]);
?>

<section class="news pr">
    <div class="swiper-container-wrap">
        <div class="container swiper news-swiper">
            <?php if ($q->have_posts()): ?>
                <div class="news-wrapper swiper-wrapper">
                    <?php while ($q->have_posts()):
                        $q->the_post(); ?>
                        <?php
                        $text = get_field('text'); ?>
                        <div class="news-block news-slide swiper-slide df fdc jcsb gap20">
                            <div class="top df fdc gap10">
                                <p class="news-title"><?php the_title(); ?></p>
                                <?php if (!empty($text)): ?>
                                    <div class="news-text">
                                        <?php echo $text; ?>
                                    </div>
                                <?php endif; ?>
                            </div>
                            <a href="<?php echo get_permalink(); ?>" class="news-button">Подробнее</a>
                        </div>
                    <?php endwhile; ?>
                    <?php wp_reset_postdata(); ?>
                </div>
            <?php else: ?>
                <p>Новостей пока нет</p>
            <?php endif; ?>
        </div>
        <?php if ($q->have_posts()): ?>
            <div class="news-button-prev new-nav swiper-button-prev"></div>
            <div class="news-button-next new-nav swiper-button-next"></div>
        <?php endif; ?>
    </div>
</section>
<div class="news-section top-news df fdc gap50">
    <?php
    $q = new WP_Query([
        'post_type' => 'company_news',
        'post_status' => 'publish',
        'posts_per_page' => -99,
        'orderby' => 'ASC',
        'meta_query' => [
            [
                'key' => 'priority',
                'value' => '"high"',
                'compare' => 'LIKE'
            ]
        ],
    ]);
    ?>
    <?php if ($q->have_posts()): ?>
        <?php while ($q->have_posts()):
            $q->the_post(); ?>
            <?php
            $text = get_field('text');
            $date = get_the_date('n-j-Y');
            $image = get_field('image');
            ?>
            <a href="<?php echo get_permalink(); ?>" class="single-news top df aic gap40">
                <div class="image">
                    <?php if (!empty($image)): ?>
                        <img src="<?php echo esc_html($image); ?>" alt="image">
                    <?php else: ?>
                        <img src="<?php bloginfo('template_directory'); ?>/img/placeholder.png" alt="no-image">
                    <?php endif; ?>
                </div>
                <div class="content df fdc">
                    <p class="date"><?php echo $date; ?></p>
                    <p class="title"><?php the_title(); ?></p>
                    <div class="text"><?php echo $text; ?></div>
                    <p class="button">подробнее</p>
                </div>
            </a>
        <?php endwhile; ?>
        <?php wp_reset_postdata(); ?>
    <?php else: ?>
        <p>В данной категории новостей пока нет</p>
    <?php endif ?>
</div>
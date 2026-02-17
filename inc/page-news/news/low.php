<div class="news-section low-news middle-news pr df fww gap20">
    <?php
    $q = new WP_Query([
        'post_type' => 'company_news',
        'post_status' => 'publish',
        'posts_per_page' => -99,
        'orderby' => 'ASC',
        'meta_query' => [
            [
                'key' => 'priority',
                'value' => '"low"',
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
            ?>
            <a href="<?php echo get_permalink(); ?>" class="single-news middle df fdc">
                <div class="content df fdc">
                    <p class="date"><?php echo $date; ?></p>
                    <p class="title"><?php the_title(); ?></p>
                    <div class="text"><?php echo $text; ?></div>
                    <div class="button">подробнее</div>
                </div>
            </a>
        <?php endwhile; ?>
        <?php wp_reset_postdata(); ?>
    <?php else: ?>
        <p>В данной категории новостей пока нет</p>
    <?php endif ?>
</div>
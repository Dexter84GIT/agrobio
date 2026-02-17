<div class="block vacancy df fww ais gap20">
    <?php
    $q = new WP_Query([
        'post_type' => 'company_vacancy',
        'post_status' => 'publish',
        'posts_per_page' => -99,
        'orderby' => 'ASC',
    ]);
    ?>
    <?php if ($q->have_posts()): ?>
        <?php while ($q->have_posts()):
            $q->the_post(); ?>
            <?php
            $text = get_field('text');
            $date = get_the_date('n-j-Y');
            $blockquote = get_field('blockquote');
            ?>
            <div class="item df fdc jcsb gap30">
                <div class="row">
                    <p class="title"><?php the_title(); ?></p>
                    <div class="description"><?php echo $blockquote; ?></div>
                </div>
                <div class="row">
                    <a href="<?php echo get_permalink(); ?>" class="btn">Подробнее</a>
                </div>
            </div>
        <?php endwhile; ?>
        <?php wp_reset_postdata(); ?>
    <?php else: ?>
        <p>Вакансий пока нет</p>
    <?php endif ?>
</div>
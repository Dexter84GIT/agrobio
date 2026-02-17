<section class="showcase" id="showcase">
    <?php if ($active_filters && $q && $q->have_posts()): ?>
        <div class="container df fdc">
            <h2 class="section-title tac">Препараты</h2>
            <div class="grid df fww ais">
                <?php while ($q->have_posts()):
                    $q->the_post(); ?>
                    <?php
                    $product_title = get_field('product_title') ?: get_the_title();
                    $product_subtitle = get_field('product_subtitle');
                    $product_usage = get_field('product_usage');
                    $path = get_template_directory() . '/inc/page-product/parts/images.php';
                    if (file_exists($path)) {
                        include $path;
                    }
                    ?>
                    <div class="item df fdc gap15">
                        <div class="img df aic jcc">
                            <img src="<?php echo esc_url($main_image); ?>" alt="img">
                        </div>
                        <a href="<?php echo esc_url(get_permalink()); ?>" class="btn">Подробнее</a>
                        <p class="title"><?php echo esc_html($product_title); ?></p>
                        <p class="description"><?php echo esc_html($product_subtitle); ?></p>
                    </div>
                <?php endwhile; ?>
                <?php wp_reset_postdata(); ?>
            </div>
        </div>
    <?php endif; ?>
</section>
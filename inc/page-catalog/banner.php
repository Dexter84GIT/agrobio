<?php if (have_rows("page_banners")): ?>
    <section class="banner">
        <div class="container">
            <div class="list df fdc gap100">
                <?php while (have_rows('page_banners')):
                    the_row();
                    $img = get_sub_field('image');
                    $text = get_sub_field('text');
                    ?>
                    <div class="item df gap30 aic">
                        <div class="img">
                            <img src="<?php echo esc_html($img); ?>" alt="banner">
                        </div>
                        <div class="text">
                            <p><?php echo $text; ?></p>
                        </div>
                    </div>
                <?php endwhile; ?>
            </div>
        </div>
    </section>
<?php endif; ?>
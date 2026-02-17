<?php if (have_rows("banner")): ?>
    <section class="advertise">
        <div class="container advertise-swiper swiper">

            <div class="swiper-wrapper advertise-wrapper">
                <?php while (have_rows('banner')):
                    the_row();
                    $img = get_sub_field('image');
                    $link = get_sub_field('link');
                    $vkLink = get_sub_field('vk_link');
                    ?>
                    <div class="swiper-slide advertise-slide">
                        <div class="image">
                            <img src="<?php echo esc_html($img); ?>" alt="slide">
                        </div>
                        <div class="advertise-links df aic">
                            <?php if (!empty($link)): ?>
                                <a href="<?php echo $link; ?>" target="_blank" class="advertise-more">подробнее</a>
                            <?php endif; ?>
                            <?php if (!empty($vkLink)): ?>
                                <a href="<?php echo $vkLink; ?>" target="_blank" class="advertise-vk">
                                    <img src="<?php bloginfo('template_directory'); ?>/img/vk_green.svg" alt="vk">
                                </a>
                            <?php endif; ?>
                        </div>
                    </div>
                <?php endwhile; ?>
            </div>
            <div class="swiper-pagination advertise-pagination"></div>
        </div>
    </section>
<?php endif; ?>
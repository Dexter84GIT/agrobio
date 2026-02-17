<?php
$query = get_template_directory() . '/inc/page-catalog/parts/query.php';
if (file_exists($query)) {
    include $query;
}
?>

<section class="veteriniser" id="vet">
    <div class="container filters df fdc gap30">
        <div class="top df aic jcsb">
            <div class="text df fdc gap20">
                <h2 class="title">Ветеринайзер Агробиопром</h2>
                <p class="subtitle">Ветеринайзер Агробиопром –это современная система подбора средств под
                    конкретные задачи вашего пчеловодческого хозяйства. </p>
            </div>
            <?php include get_template_directory() . '/inc/shared/page-icon.php'; ?>
        </div>

        <div class="bottom filter right">
            <form method="get" class="form df aife" id="veteriniser" name="veteriniser">
                <div class="fields df fww">

                    <div class="field df fdc">
                        <span class="label">Болезни / назначения</span>
                        <div class="select" data-name="disease">
                            <button type="button" class="toggle">
                                <span class="value" data-placeholder="Выберите тип отчёта">
                                    Выберите значение
                                </span>
                                <span class="arrow"></span>
                            </button>
                            <div class="dropdown">
                                <?php foreach ($diseases as $term): ?>
                                    <button type="button" class="option" data-value="<?php echo esc_attr($term->slug); ?>">
                                        <?php echo esc_html($term->name); ?>
                                    </button>
                                <?php endforeach; ?>
                            </div>
                            <input type="hidden" name="disease" value="">
                        </div>
                    </div>

                    <?php if (empty($bee_terms)): ?>
                        <div class="field df fdc">
                            <span class="label">Вид животного</span>
                            <div class="select" data-name="animal">
                                <button type="button" class="toggle">
                                    <span class="value" data-placeholder="Выберите тип отчёта">
                                        Выберите значение
                                    </span>
                                    <span class="arrow"></span>
                                </button>
                                <div class="dropdown">
                                    <?php foreach ($animals as $term): ?>
                                        <button type="button" class="option" data-value="<?php echo esc_attr($term->slug); ?>">
                                            <?php echo esc_html($term->name); ?>
                                        </button>
                                    <?php endforeach; ?>
                                </div>
                                <input type="hidden" name="animal" value="">
                            </div>
                        </div>
                    <?php endif; ?>

                    <?php if (empty($bee_terms)): ?>
                        <div class="field df fdc">
                            <span class="label">По направлениям лечения</span>
                            <div class="select" data-name="treatment">
                                <button type="button" class="toggle">
                                    <span class="value" data-placeholder="Выберите тип отчёта">
                                        Выберите значение
                                    </span>
                                    <span class="arrow"></span>
                                </button>
                                <div class="dropdown">
                                    <?php foreach ($treatments as $term): ?>
                                        <button type="button" class="option" data-value="<?php echo esc_attr($term->slug); ?>">
                                            <?php echo esc_html($term->name); ?>
                                        </button>
                                    <?php endforeach; ?>
                                </div>
                                <input type="hidden" name="treatment" value="">
                            </div>
                        </div>
                    <?php endif; ?>

                    <?php if (!empty($bee_terms)): ?>
                        <?php foreach ($bee_terms as $tax => $terms): ?>
                            <div class="field df fdc">
                                <span class="label"><?php echo esc_html($bee_taxonomies[$tax]); ?></span>
                                <div class="select" data-name="<?php echo esc_attr($tax); ?>">
                                    <button type="button" class="toggle">
                                        <span class="value" data-placeholder="Выберите значение">
                                            Выберите значение
                                        </span>
                                        <span class="arrow"></span>
                                    </button>
                                    <div class="dropdown">
                                        <?php foreach ($terms as $term): ?>
                                            <button type="button" class="option" data-value="<?php echo esc_attr($term->slug); ?>">
                                                <?php echo esc_html($term->name); ?>
                                            </button>
                                        <?php endforeach; ?>
                                    </div>
                                    <input type="hidden" name="<?php echo esc_attr($tax); ?>" value="">
                                </div>
                            </div>
                        <?php endforeach; ?>
                    <?php endif; ?>

                    <?php if (!empty($extra_terms)): ?>
                        <div class="field df fdc">
                            <span class="label">Форма выпуска</span>
                            <div class="select" data-name="form">
                                <button type="button" class="toggle">
                                    <span class="value" data-placeholder="Выберите значение">
                                        Выберите значение
                                    </span>
                                    <span class="arrow"></span>
                                </button>
                                <div class="dropdown">
                                    <?php foreach ($extra_terms as $term): ?>
                                        <button type="button" class="option" data-value="<?php echo esc_attr($term->slug); ?>">
                                            <?php echo esc_html($term->name); ?>
                                        </button>
                                    <?php endforeach; ?>
                                </div>
                                <input type="hidden" name="form" value="">
                            </div>
                        </div>
                    <?php endif; ?>
                </div>

                <div class="btns df fdc gap15">
                    <button type="button" class="btn reset">Сбросить настройки</button>
                    <input type="submit" class="btn send" value="Показать предложения">
                </div>

            </form>
        </div>
    </div>
    <div class="container masonry df ais gap30">
        <div class="block df fdc jcsb">
            <p class="title">С помощью удобных фильтров вы сможете найти оптимальные решения для:</p>
            <div class="icon">
                <img src="<?php bloginfo('template_directory'); ?>/img/catalog-page/shield.svg" alt="shield">
            </div>
        </div>
        <div class="block df ais fww">
            <?php if (have_rows("card")): ?>
                <?php while (have_rows('card')):
                    the_row();
                    $image = get_sub_field('image');
                    $text = get_sub_field('text') ?>

                    <div class="item df fdc jcc">
                        <div class="icon">
                            <img src="<?php echo esc_url($image); ?>" alt="icon">
                        </div>
                        <p class="tac"><?php echo $text; ?></p>
                    </div>
                <?php endwhile; ?>
            <?php endif; ?>
        </div>
    </div>
</section>
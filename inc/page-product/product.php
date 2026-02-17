 <?php

include get_template_directory() . '/inc/page-product/parts/variables.php'

?>
 
        <section class="product">
            <div class="container df fdc gap100">
                <div class="buy product-section df fdc gap50">
                    <div class="buy-head df aic jcsb">
                        <div class="block df aic gap30">
                            <p class="head-title">Продукты</p>
                            <div class="head-type df aic">
                                <img src="<?php bloginfo('template_directory'); ?><?php echo $product_icon; ?>" alt="icon">
                                <p><?php echo $product_category['label']; ?></p>
                            </div>
                        </div>
                        <p>Забота о любимых питомцах</p>
                    </div>
                    <div class="buy-content df fdc">
                        <p>Хлебные крошки</p>
                        <h2 class="section-title"><?php the_title(); ?></h2>
                        <?php include get_template_directory() . '/inc/page-product/parts/slider.php'; ?>
                    </div>
                </div>
                <div class="about product-section df fdc">
                    
                    <?php if (!empty($short_description)) : ?>
                        <div class="about-block about-top df fdc">
                            <p class="title">О товаре:</p>
                            <p class="description"><?php echo $short_description; ?></p>
                        </div>
                    <?php endif; ?>    
                    <div class="about-block about-tabs df aifs tabs">
                        <?php
                        $controls_path = get_template_directory() . '/inc/page-product/parts/controls.php';
                        if (file_exists($controls_path)) {
                            include $controls_path;
                        }
                        ?>
                        <div class="tabs-content">
                            <div class="tabs-text tab-content active df fdc">
                                <div class="row df fdc">
                                    <p class="static title">Состав и форма выпуска</p>
                                    <?php echo $structure; ?>
                                </div>
                                <?php if ($dosage_form) : ?>
                                    <div class="row df fdc">
                                        <p class="static title">Лекарственная форма:</p>
                                        <?php echo $dosage_form; ?>
                                    </div>
                                <?php endif; ?>
                                <?php if ($pharm_group) : ?>
                                    <div class="row df fdc">
                                        <p class="static title">Фармакотерапевтическая группа:</p>
                                        <?php echo $pharm_group; ?>
                                    </div>
                                <?php endif; ?>
                            </div>
                            <?php if (!empty($pharmacological_action)) : ?>
                                <div class="tabs-text tab-content df fdc">
                                    <p class="title">Показания к применению</p>
                                    <?php echo $pharmacological_action; ?>
                                </div>
                            <?php endif; ?>
                            <?php if (!empty($doses)) : ?>
                                <div class="tabs-text tab-content df fdc">
                                    <p class="title">Способ применения</p>
                                    <?php echo $doses; ?>
                                </div>
                            <?php endif; ?>
                            <?php if ((!empty($side_effects)) || (!empty($contraindications))) : ?>
                                <div class="tabs-text tab-content df fdc">
                                    <?php if (!empty($side_effects)) : ?>
                                        <div class="row df fdc">
                                            <p class="title">Побочные явления и осложнения</p>
                                            <?php echo $side_effects; ?>
                                        </div>
                                    <?php endif; ?>
                                    <?php if (!empty($contraindications)) : ?>
                                        <div class="row df fdc">
                                            <p class="title">Противопоказания</p>
                                            <?php echo $contraindications; ?>
                                        </div>
                                    <?php endif; ?>
                                    <?php if (!empty($use_pregnancy)) : ?>
                                        <div class="row df fdc">
                                            <p class="title">Применение при беременности и лактации</p>
                                            <?php echo $use_pregnancy; ?>
                                        </div>
                                    <?php endif; ?>
                                    <?php if (!empty($overdosing)) : ?>
                                        <div class="row df fdc">
                                            <p class="title">Передозировка</p>
                                            <?php echo $overdosing; ?>
                                        </div>
                                    <?php endif; ?>
                                    <?php if (!empty($interaction)) : ?>
                                        <div class="row df fdc">
                                            <p class="title">Взаимодействие с другими лекарственными препаратами</p>
                                            <?php echo $interaction; ?>
                                        </div>
                                    <?php endif; ?>
                                    <?php if (!empty($special_notices)) : ?>
                                        <div class="row df fdc">
                                            <p class="title">Особые указания</p>
                                            <?php echo $special_notices; ?>
                                        </div>
                                    <?php endif; ?>
                                    <?php if (!empty($prevention_measures)) : ?>
                                        <div class="row df fdc">
                                            <p class="title">Меры личной профилактики</p>
                                            <?php echo $prevention_measures; ?>
                                        </div>
                                    <?php endif; ?>
                                </div>
                            <?php endif; ?>
                            <?php if ($terms_of_storage) : ?>
                                <div class="tabs-text tab-content df fdc">
                                    <p class="title">Условия хранения</p>
                                    <?php echo $terms_of_storage; ?>
                                </div>
                            <?php endif; ?>
                            <?php if ($expiration_date) : ?>
                                <div class="tabs-text tab-content df fdc">
                                    <p class="title">Срок годности</p>
                                    <?php echo $expiration_date; ?>
                                </div>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
                <div class="systems product-section">
                    <p class="section-title ttu tac">Системы лечения</p>
                    <div class="text df fdc">
                        <p>Порядок применения:</p>
                        <p>Фенпраз таблетки применяют животным внутрь однократно, индивидуально, в утреннее время с небольшим количеством корма или принудительно вводят на корень языка. Предварительной голодной диеты и применения слабительных средств не требуется. При дегельминтизации животного рекомендуется проводить дезинфекцию и дезинвазию мест содержания животных во избежание повторного заражения.С лечебной целью животных дегельминтизируют по показаниям, с профилактической целью - ежеквартально, а также за 10-14 суток перед вакцинацией и за 10 суток до предполагаемых родов в терапевтических дозах, указанных в таблице:</p>
                        <p class="disclaimer">
                            Внимание! Информация о товарах, размещенная на сайте, не является публичной офертой, определяемой положениями Части 2 Статьи 437 Гражданского кодекса Российской Федерации. Производители вправе вносить изменения в технические характеристики, цены, внешний вид и комплектацию товаров без предварительного уведомления. Уточняйте все характеристики и цены у наших менеджеров перед оформлением заказа.
                        </p>
                    </div>
                </div>
                <div class="similar product-section"></div>
            </div>
        </section>
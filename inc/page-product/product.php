 <?php

 // основная информация
$product_category = get_field('page_category');
$product_icon = '';
if (is_array($product_category) && $product_category['value'] === 'bees') {
    $product_icon = '/img/icon_bee.svg';
} elseif (is_array($product_category) && $product_category['value'] === 'pets') {
    $product_icon = '/img/icon_pets.svg';
} elseif (is_array($product_category) && $product_category['value'] === 'cattle') {
    $product_icon = '/img/icon_cattle.svg';
};
$short_description = get_field('short_description');

// ссылки на маркетплейсы
$wb_link = get_field('wb_link');
$ozon_link = get_field('ozon_link');
$ym_link = get_field('ym_link');

$marketplaces = get_template_directory() . '/inc/page-product/parts/marketplaces.php';

$path = get_template_directory() . '/inc/page-product/parts/images.php';
if (file_exists($path)) {
    include $path;
}



// состав и форма выпуска
$product_usage = get_field('product_usage');
$dosage_form = get_field('dosage_form');

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
                        <p class="breadcrumbs">
                            <span>Главная</span><span>/</span><span>Каталог</span><span>/</span><span>Животные-компаньоны</span><span>/</span><span>БИНАКАР
                                для крупных пород собак</span>
                        </p>
                        <h2 class="section-title"><?php the_title(); ?></h2>
                        <div class="images df jcsb aifs">
                            <div class="block slider ">
                                <div class="swiper">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide">
                                            <img src="<?php echo esc_url($main_image); ?>" alt="image">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="block info df fdc gap40">
                                <div class="description df fdc gap20">
                                    <?php if (!empty($dosage_form)) : ?>
                                    <div class="row df fdc">
                                        <p class="static">Форма выпуска:</p>
                                        <p class="dynamic"><?php echo $dosage_form; ?></p>
                                    </div>
                                    <?php endif; ?>  
                                    <?php if (!empty($product_usage)) : ?>
                                    <div class="row df fdc">
                                        <p class="static">Применение:</p>
                                        <p class="dynamic"><?php echo $product_usage; ?></p>
                                    </div>
                                    <?php endif; ?>  
                                </div>
                                <?php
                                if (file_exists($marketplaces)) {
                                    include $marketplaces;
                                } ; 
                                ?>
                            </div>
                        </div>
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
                        <div class="tabs-control df fdc">
                            <p class="tab df jcsb aic active">Состав и форма выпуска<span>></span></p>
                            <p class="tab df jcsb aic">Фармакологическое действие<span>></span></p>
                            <p class="tab df jcsb aic">Дозы и способы применения<span>></span></p>
                            <p class="tab df jcsb aic">Особые указания<span>></span></p>
                            <p class="tab df jcsb aic">Условия хранения<span>></span></p>
                            <p class="tab df jcsb aic">Срок годности<span>></span></p>
                        </div>
                        <div class="tabs-content">
                            <div class="tabs-text tab-content active df fdc">
                                <p class="title">Состав и форма выпуска</p>
                                <p>Бинакар (Binakar) - лекарственное средство, содержащее в качестве действующих
                                    веществ:
                                    имидаклоприд – 80 мг/мл, циперметрин - 3 мг/мл, экстракт прополиса –5 мг/мл и
                                    вспомогательные компоненты.По внешнему виду Бинакар представляет собой прозрачную,
                                    маслянистую жидкость желтого цвета. Выпускают препарат расфасованным по 2 мл в
                                    полимерные тюбики-пипетки, упакованные по 4 штуки в картонные пачки в комплекте с
                                    инструкцией по применению. </p>
                                <div class="row">
                                    <p class="static">Лекарственная форма:</p>
                                    <p>Раствор для наружного применения (капли на холку).</p>
                                </div>
                                <div class="row">
                                    <p>Противопаразитарное средство.</p>
                                    <p>Фармакотерапевтическая группа:</p>
                                </div>
                            </div>
                            <div class="tabs-text tab-content df fdc">
                                <p class="title">Фармакологическое действие</p>
                                <p>Бинакар (Binakar) - лекарственное средство, содержащее в качестве действующих
                                    веществ:
                                    имидаклоприд – 80 мг/мл, циперметрин - 3 мг/мл, экстракт прополиса –5 мг/мл и
                                    вспомогательные компоненты.По внешнему виду Бинакар представляет собой прозрачную,
                                    маслянистую жидкость желтого цвета. Выпускают препарат расфасованным по 2 мл в
                                    полимерные тюбики-пипетки, упакованные по 4 штуки в картонные пачки в комплекте с
                                    инструкцией по применению. </p>
                                <div class="row">
                                    <p class="static">Лекарственная форма:</p>
                                    <p>Раствор для наружного применения (капли на холку).</p>
                                </div>
                                <div class="row">
                                    <p>Противопаразитарное средство.</p>
                                    <p>Фармакотерапевтическая группа:</p>
                                </div>
                            </div>
                            <div class="tabs-text tab-content df fdc">
                                <p class="title">Дозы и способы применения</p>
                                <p>Бинакар (Binakar) - лекарственное средство, содержащее в качестве действующих
                                    веществ:
                                    имидаклоприд – 80 мг/мл, циперметрин - 3 мг/мл, экстракт прополиса –5 мг/мл и
                                    вспомогательные компоненты.По внешнему виду Бинакар представляет собой прозрачную,
                                    маслянистую жидкость желтого цвета. Выпускают препарат расфасованным по 2 мл в
                                    полимерные тюбики-пипетки, упакованные по 4 штуки в картонные пачки в комплекте с
                                    инструкцией по применению. </p>
                                <div class="row">
                                    <p class="static">Лекарственная форма:</p>
                                    <p>Раствор для наружного применения (капли на холку).</p>
                                </div>
                                <div class="row">
                                    <p>Противопаразитарное средство.</p>
                                    <p>Фармакотерапевтическая группа:</p>
                                </div>
                            </div>
                            <div class="tabs-text tab-content df fdc">
                                <p class="title">Особые указания</p>
                                <p>Бинакар (Binakar) - лекарственное средство, содержащее в качестве действующих
                                    веществ:
                                    имидаклоприд – 80 мг/мл, циперметрин - 3 мг/мл, экстракт прополиса –5 мг/мл и
                                    вспомогательные компоненты.По внешнему виду Бинакар представляет собой прозрачную,
                                    маслянистую жидкость желтого цвета. Выпускают препарат расфасованным по 2 мл в
                                    полимерные тюбики-пипетки, упакованные по 4 штуки в картонные пачки в комплекте с
                                    инструкцией по применению. </p>
                                <div class="row">
                                    <p class="static">Лекарственная форма:</p>
                                    <p>Раствор для наружного применения (капли на холку).</p>
                                </div>
                                <div class="row">
                                    <p>Противопаразитарное средство.</p>
                                    <p>Фармакотерапевтическая группа:</p>
                                </div>
                            </div>
                            <div class="tabs-text tab-content df fdc">
                                <p class="title">Условия хранения</p>
                                <p>Бинакар (Binakar) - лекарственное средство, содержащее в качестве действующих
                                    веществ:
                                    имидаклоприд – 80 мг/мл, циперметрин - 3 мг/мл, экстракт прополиса –5 мг/мл и
                                    вспомогательные компоненты.По внешнему виду Бинакар представляет собой прозрачную,
                                    маслянистую жидкость желтого цвета. Выпускают препарат расфасованным по 2 мл в
                                    полимерные тюбики-пипетки, упакованные по 4 штуки в картонные пачки в комплекте с
                                    инструкцией по применению. </p>
                                <div class="row">
                                    <p class="static">Лекарственная форма:</p>
                                    <p>Раствор для наружного применения (капли на холку).</p>
                                </div>
                                <div class="row">
                                    <p>Противопаразитарное средство.</p>
                                    <p>Фармакотерапевтическая группа:</p>
                                </div>
                            </div>
                            <div class="tabs-text tab-content df fdc">
                                <p class="title">Срок годности</p>
                                <p>Бинакар (Binakar) - лекарственное средство, содержащее в качестве действующих
                                    веществ:
                                    имидаклоприд – 80 мг/мл, циперметрин - 3 мг/мл, экстракт прополиса –5 мг/мл и
                                    вспомогательные компоненты.По внешнему виду Бинакар представляет собой прозрачную,
                                    маслянистую жидкость желтого цвета. Выпускают препарат расфасованным по 2 мл в
                                    полимерные тюбики-пипетки, упакованные по 4 штуки в картонные пачки в комплекте с
                                    инструкцией по применению. </p>
                                <div class="row">
                                    <p class="static">Лекарственная форма:</p>
                                    <p>Раствор для наружного применения (капли на холку).</p>
                                </div>
                                <div class="row">
                                    <p>Противопаразитарное средство.</p>
                                    <p>Фармакотерапевтическая группа:</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="systems product-section">
                    <p class="section-title ttu tac">Системы лечения</p>
                    <div class="text df fdc">
                        <p>Порядок применения:</p>
                        <p>Фенпраз таблетки применяют животным внутрь однократно, индивидуально, в утреннее время с небольшим количеством корма или принудительно вводят на корень языка. Предварительной голодной диеты и применения слабительных средств не требуется. При дегельминтизации животного рекомендуется проводить дезинфекцию и дезинвазию мест содержания животных во избежание повторного заражения.С лечебной целью животных дегельминтизируют по показаниям, с профилактической целью - ежеквартально, а также за 10-14 суток перед вакцинацией и за 10 суток до предполагаемых родов в терапевтических дозах, указанных в таблице:</p>
                    </div>
                </div>
                <div class="similar product-section"></div>
            </div>
        </section>
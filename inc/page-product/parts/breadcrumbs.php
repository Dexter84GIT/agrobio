<?php
$category = get_field('page_category');

$categories = [
    'pets' => [
        'label' => 'Животные-компаньоны',
        'url'   => '/catalog-pets',
    ],
    'cattle' => [
        'label' => 'Продуктивные животные',
        'url'   => '/catalog-cattle',
    ],
    'bees' => [
        'label' => 'Пчёлы',
        'url'   => '/catalog-bee',
    ],
];
?>

<p class="breadcrumbs">
    <a href="/">Главная</a>
    <span>/</span>

    <a href="/catalog">Каталог</a>
    <span>/</span>

    <?php if (!empty($category) && isset($categories[$category])) : ?>
        <a href="<?= esc_url($categories[$category]['url']) ?>">
            <?= esc_html($categories[$category]['label']) ?>
        </a>
        <span>/</span>
    <?php endif; ?>

    <span><?= esc_html(get_the_title()) ?></span>
</p>

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

$images = get_template_directory() . '/inc/page-product/parts/images.php';
if (file_exists($images)) {
    include $images;
}

// состав и форма выпуска
$product_usage = get_field('product_usage');
$dosage_form = get_field('dosage_form');
$structure = get_field('structure');
$pharm_group = get_field('pharm_group');
// фармакологическое действие
$pharmacological_action = get_field('pharmacological_action');
// дозы и способы применения
$doses = get_field('doses');
// особые указания
$side_effects = get_field('side_effects');
$contraindications = get_field('contraindications');
$use_pregnancy = get_field('use_pregnancy');
$overdosing = get_field('overdosing');
$interaction = get_field('interaction');
$special_notices = get_field('special_notices');
$prevention_measures = get_field('prevention_measures');
// условия хранения
$terms_of_storage = get_field('terms_of_storage');
// срок годности
$expiration_date = get_field('expiration_date');
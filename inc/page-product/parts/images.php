<?php
$img = get_field('main_image');
$main_image = '';
                
if (is_string($img) && $img !== '') {
    $main_image = $img;
} elseif (is_array($img) && !empty($img['url'])) {
    $main_image = $img['url'];
} elseif (is_numeric($img)) {
    $main_image = wp_get_attachment_image_url((int)$img, 'full') ?: '';
}

if ($main_image === '') {
    $main_image = get_template_directory_uri() . '/img/placeholder.png';
}
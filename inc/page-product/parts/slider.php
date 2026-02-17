<?php
$thumbs = [];

$thumbs[] = [
    'thumb' => $main_image,
    'full'  => $main_image,
];

$gallery = get_field('other_images');
if (is_array($gallery) && !empty($gallery)) {
    foreach ($gallery as $img) {
        if (is_string($img) && $img !== '') {
            $thumbs[] = ['thumb' => $img, 'full' => $img];
            continue;
        }

        if (is_numeric($img)) {
            $url = wp_get_attachment_image_url((int)$img, 'full');
            if ($url) $thumbs[] = ['thumb' => $url, 'full' => $url];
            continue;
        }

        if (is_array($img)) {
            $full = $img['url'] ?? '';
            $thumb = $img['sizes']['medium'] ?? ($img['sizes']['thumbnail'] ?? $full);
            if ($full) $thumbs[] = ['thumb' => $thumb ?: $full, 'full' => $full];
        }
    }
}

$seen = [];
$uniq = [];
foreach ($thumbs as $t) {
    $k = (string)($t['full'] ?? '');
    if ($k === '' || isset($seen[$k])) continue;
    $seen[$k] = true;
    $uniq[] = $t;
}
$thumbs = $uniq;
?>
<div class="images df jcsb aifs">
    <div class="block thumbs">
        <div class="swiper cardThumbsSlider pr">

            <div class="upBtn">
                <svg width="18" height="11" viewBox="0 0 18 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M0.000217899 8.4823L7.93622 0.446306C8.07617 0.304524 8.24296 0.19204 8.42685 0.115419C8.61074 0.0387982 8.80805 -0.000423522 9.00727 4.19147e-05C9.20649 0.000507351 9.40361 0.0406504 9.58715 0.11813C9.77068 0.195609 9.93694 0.308871 10.0762 0.451306L17.9492 8.49131L15.8062 10.5913L8.99922 3.63931L2.13422 10.5903L0.000217899 8.4823Z" fill="black"/>
                </svg>
            </div>

            <div class="swiper-wrapper">
                <?php foreach ($thumbs as $t) : ?>
                    <div class="swiper-slide">
                        <img src="<?php echo esc_url($t['thumb']); ?>" data-full="<?php echo esc_url($t['full']); ?>" alt="thumb">
                    </div>
                <?php endforeach; ?>
            </div>

            <div class="downBtn">
                <svg width="18" height="11" viewBox="0 0 18 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M0.000217899 8.4823L7.93622 0.446306C8.07617 0.304524 8.24296 0.19204 8.42685 0.115419C8.61074 0.0387982 8.80805 -0.000423522 9.00727 4.19147e-05C9.20649 0.000507351 9.40361 0.0406504 9.58715 0.11813C9.77068 0.195609 9.93694 0.308871 10.0762 0.451306L17.9492 8.49131L15.8062 10.5913L8.99922 3.63931L2.13422 10.5903L0.000217899 8.4823Z" fill="black"/>
                </svg>
            </div>
            
        </div>
    </div>

    <div class="block slider">
        <div class="swiper cardMainSlider">
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
                    <p class="dynamic"><?php echo esc_html($dosage_form); ?></p>
                </div>
            <?php endif; ?>

            <?php if (!empty($product_usage)) : ?>
                <div class="row df fdc">
                    <p class="static">Применение:</p>
                    <p class="dynamic"><?php echo wp_kses_post(nl2br($product_usage)); ?></p>
                </div>
            <?php endif; ?>
        </div>

        <?php
        if (!empty($marketplaces) && file_exists($marketplaces)) {
            include $marketplaces;
        }
        ?>
    </div>
</div>

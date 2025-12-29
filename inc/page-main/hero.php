<?php 

$image_bee = get_field('image_bee') ?: get_template_directory_uri() . '/img/main-page/hero_bees.webp';
$image_pets = get_field('image_pets') ?: get_template_directory_uri() . '/img/main-page/hero_pets.webp';
$image_cattle = get_field('image_cattle') ?: get_template_directory_uri() . '/img/main-page/hero_cattle.webp';

$hero_title = get_field('hero_title');
?>


<section class="hero">
            <div class="container hero-container">
                <div class="hero-content df jcsb">
                    <a href="/catalog-bee" class="hero-image hero-bee">
                        
                        <img src="<?php echo esc_url($image_bee) ?>" alt="bees">
                        <p>Пчёлы</p>
                    </a>
                    <a href="/catalog-pets" class="hero-image hero-dog">
                        <img src="<?php echo esc_url($image_pets) ?>" alt="pets">
                        <p>Животные компаньоны</p>
                    </a>
                    <a href="/catalog-cattle" class="hero-image hero-cow">
                        <img src="<?php echo esc_url($image_cattle) ?>" alt="cattle">
                        <p>Продуктивные животные</p>
                    </a>
                    <p><?php echo ($hero_title); ?></p>
                </div>
            </div>
        </section>
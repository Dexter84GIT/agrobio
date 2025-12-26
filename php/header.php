<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <link rel="stylesheet" href="<?php bloginfo('template_directory');?>/dist/bundle.css">
    <title>Agrobioprom</title>

</head>

<body>
    <main class="main">
        <?php include get_template_directory() . '/inc/page-main/patterns.php'; ?>
        <header class="main-header">
            <div class="container df fdc">
                <div class="header-top df aife jcsb">
                    <a href="/" class="header-logo">
                        <img src="<?php bloginfo('template_directory');?>/img/main-logo.svg" alt="logo">
                    </a>
                    <?php include get_template_directory() . '/inc/shared/top-menu.php'; ?>
                    <div class="hero-links df fdc">
                        <div class="header-social df jcc aic">
                            <a href="#" class="social-link tg-link">
                                <img src="<?php bloginfo('template_directory');?>/img/tg_black.svg" alt="tg">
                            </a>
                            <a href="#" class="social-link vk-link">
                                <img src="<?php bloginfo('template_directory');?>/img/vk_black.svg" alt="vk">
                            </a>
                        </div>
                        <div class="header-lang">РУС / ENG</div>
                    </div>
                </div>
                <div class="header-bottom df aic jcsb">
                    <div class="header-search">
                        <input class="df" type="search" placeholder="поиск">
                    </div>
                    <div class="header-links df aic">
                        <a href="/catalog-pets" class="header-link df aic">Животные-компаньоны<i>></i></a>
                        <a href="/catalog-cattle" class="header-link df aic">Продуктивные животные<i>></i></a>
                        <a href="/catalog-bee" class="header-link df aic">Пчёлы<i>></i></a>
                    </div>
                </div>
            </div>
        </header>
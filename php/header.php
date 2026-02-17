<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/dist/bundle.css">
    <title><?php the_title(); ?></title>
</head>

<body <?php body_class(); ?>>

    <main class="main">
        <?php include get_template_directory() . '/inc/page-main/patterns.php'; ?>
        <header class="main-header">
            <div class="container df fdc">
                <div class="header-top df aife jcsb">
                    <a href="/" class="header-logo">
                        <img src="<?php bloginfo('template_directory'); ?>/img/main-logo.svg" alt="logo">
                    </a>
                    <?php include get_template_directory() . '/inc/shared/top-menu.php'; ?>
                    <div class="hero-links df fdc">
                        <div class="header-social df jcc aic">
                            <a href="#" class="social-link tg-link">
                                <img src="<?php bloginfo('template_directory'); ?>/img/tg_black.svg" alt="tg">
                            </a>
                            <a href="#" class="social-link vk-link">
                                <img src="<?php bloginfo('template_directory'); ?>/img/vk_black.svg" alt="vk">
                            </a>
                        </div>
                        <div class="header-lang">РУС / ENG</div>
                    </div>
                </div>
                <div class="header-bottom df aic jcsb">
                    <div class="header-search">
                        <input id="live-search-input" type="search" placeholder="поиск">
                        <button type="button">
                            <svg width="25" height="24" viewBox="0 0 25 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M9.97368 17.0526C13.8107 17.0526 16.9211 13.9422 16.9211 10.1053C16.9211 6.26835 13.8107 3.15791 9.97368 3.15791C6.13675 3.15791 3.02632 6.26835 3.02632 10.1053C3.02632 13.9422 6.13675 17.0526 9.97368 17.0526ZM9.97368 19.579C15.2058 19.579 19.4474 15.3374 19.4474 10.1053C19.4474 4.8731 15.2058 0.631592 9.97368 0.631592C4.74151 0.631592 0.5 4.8731 0.5 10.1053C0.5 15.3374 4.74151 19.579 9.97368 19.579Z"
                                    fill="#666666" />
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M16.6047 14.9504L23.7595 22.1052L21.9731 23.8916L14.8184 16.7368L16.6047 14.9504Z"
                                    fill="#666666" />
                            </svg>
                        </button>
                        <div id="live-search-results" class="live-search-results"></div>
                    </div>
                    <div class="header-links df aic">
                        <a href="/catalog-pets" class="header-link df aic">Животные-компаньоны<i>></i></a>
                        <a href="/catalog-cattle" class="header-link df aic">Продуктивные животные<i>></i></a>
                        <a href="/catalog-bee" class="header-link df aic">Пчёлы<i>></i></a>
                    </div>
                </div>
            </div>
        </header>
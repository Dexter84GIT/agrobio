<?php 
/*
 Template name: Научные разработки - пчелы
 */
get_header(); ?>
<section class="science">
    <div class="container">
        <?php include get_template_directory() . '/inc/page-science-bee/hero.php'; ?>
        <?php include get_template_directory() . '/inc/page-science-bee/article.php'; ?>
        <?php include get_template_directory() . '/inc/page-science-bee/masonry.php'; ?>
        <?php include get_template_directory() . '/inc/page-science-bee/banner.php'; ?>
        <?php include get_template_directory() . '/inc/page-main/slogan.php'; ?>
    </div>
</section>

<?php get_footer(); ?>
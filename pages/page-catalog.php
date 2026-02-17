<?php 
/*
 Template name: Каталог
 */
get_header(); 
    $thisPageFrom = (get_field('page_category'));
    
    if ($thisPageFrom) : 
        $pageCategory = $thisPageFrom['value'];
    endif;
?>

<div class="catalog catalog-bee">
    <?php include get_template_directory() . '/inc/page-catalog/hero.php'; ?>
    <?php include get_template_directory() . '/inc/page-catalog/info.php'; ?>
    <?php include get_template_directory() . '/inc/page-catalog/veteriniser.php'; ?>
    <?php include get_template_directory() . '/inc/page-catalog/showcase.php'; ?>
    <?php include get_template_directory() . '/inc/page-catalog/banner.php'; ?>
    <?php include get_template_directory() . '/inc/page-catalog/slogan.php'; ?>
</div>

<?php get_footer(); ?>
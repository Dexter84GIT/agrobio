<?php 
/*
 Template name: Карьера
 */
get_header(); ?>   
      
    <section class="crew">
        <div class="container df fdc gap100">
            <?php include get_template_directory() . '/inc/page-about/career/hero.php'; ?>
            <?php include get_template_directory() . '/inc/page-about/career/content.php'; ?>
        </div>
    </section>
    <?php include get_template_directory() . '/inc/page-main/slogan.php'; ?>

<?php get_footer(); ?>
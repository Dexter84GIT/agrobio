<?php 
    $pageImage = get_field('page_image');
?>
<section class="hero catalog-hero">
    <div class="container df fdc gap50">
        <div class="top block df aic jcsb">
            <div class="block df aic gap40">
                <h2 class="page-title pr">Каталог</h2>
                <a href="#" class="category pr df aic">
                <?php include get_template_directory() . '/inc/shared/page-icon.php'; ?>
                    <p class="text"><?php echo $thisPageFrom['label']; ?></p>
                </a>
            </div>
            <p class="subtitle"><?php echo get_field('slogan'); ?></p>
        </div>
        <div class="bottom block">
            <?php if (!empty($pageImage['url'])) : ?>
                <img src="<?php echo esc_url($pageImage['url']);?>" alt="hero">
            <?php endif; ?>
        </div>
    </div>
</section>
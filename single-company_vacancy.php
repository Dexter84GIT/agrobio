<?php get_header(); ?>

<?php
$image = get_field('image');
$text = get_field('text');
$blockquote = get_field('blockquote');
?>

<section class="single single-vacancy single-news">
    <div class="container df fdc gap50">
        <h2 class="page-title pr tac"><?php the_title(); ?></h2>
        <div class="top df ais gap40">
            <div class="img">
                <img src="<?php echo esc_html($image); ?>" alt="news">
            </div>
            <div class="short">
                <?php echo $blockquote; ?>
            </div>
        </div>
        <div class="content df fdc gap20">
            <?php echo $text; ?>
        </div>
        <?php include get_template_directory() . '/inc/page-about/career/vacancy.php'; ?>
    </div>
</section>

<?php get_footer(); ?>
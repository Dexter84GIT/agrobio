<?php
/*
 Template name: Результаты поиска
 */
get_header();

$query = isset($_GET['q']) ? sanitize_text_field($_GET['q']) : '';
?>

<section class="search-page section">
    <div class="container df fdc gap20">

        <h2 class="page-title">Результаты поиска</h2>

        <?php if (!$query): ?>
            <p>Введите поисковый запрос.</p>
        <?php else: ?>

            <?php
            function render_search_block($title, $post_type, $query) {

                $args = [
                    'post_type' => $post_type,
                    's' => $query,
                    'posts_per_page' => 12,
                    'post_status' => 'publish'
                ];

                $q = new WP_Query($args);

                if ($q->have_posts()) {
                    echo "<div class='block df fdc gap20'>";
                    echo "<p class='result-title'>{$title}</p>";
                    echo "<div class='list df ais gap20'>";

                    while ($q->have_posts()) {
                        $q->the_post();
                        echo "<a class='item' href='" . get_permalink() . "'>";
                        echo "<p class='name'>" . get_the_title() . "</p>";
                        echo "</a>";
                    }

                    echo "</div>";
                    echo "</div>";
                }

                wp_reset_postdata();
            }

            render_search_block('Продукты', 'product_card', $query);
            render_search_block('Новости', 'company_news', $query);
            render_search_block('Статьи', 'company_vacancy', $query);
            ?>

        <?php endif; ?>

    </div>
</section>

<?php get_footer(); ?>

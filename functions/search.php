<?php
add_action('rest_api_init', function () {
    register_rest_route('agrobioprom/v1', '/search', [
        'methods'  => 'GET',
        'callback' => 'agrobioprom_live_search',
        'permission_callback' => '__return_true'
    ]);
});

function agrobioprom_live_search($request) {

    $query = sanitize_text_field($request->get_param('q'));

    if (!$query || mb_strlen($query) < 2) {
        return [];
    }

    $args = [
        'post_type'      => ['product_card', 'company_news', 'company_vacancy'],
        's'              => $query,
        'posts_per_page' => 12,
        'post_status'    => 'publish'
    ];

    $q = new WP_Query($args);

    $results = [
        'products' => [],
        'news'     => [],
        'articles' => []
    ];

    if ($q->have_posts()) {
        while ($q->have_posts()) {
            $q->the_post();

            $item = [
                'title' => get_the_title(),
                'link'  => get_permalink(),
            ];

            if (get_post_type() === 'product_card') {
                $results['products'][] = $item;
            }

            if (get_post_type() === 'company_news') {
                $results['news'][] = $item;
            }

            if (get_post_type() === 'company_vacancy') {
                $results['vacancies'][] = $item;
            }
        }
    }

    wp_reset_postdata();

    return $results;
}

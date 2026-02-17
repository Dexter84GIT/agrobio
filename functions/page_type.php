<?php
add_filter('body_class', function ($classes) {

    if (!is_page() && !is_singular()) {
        return $classes;
    }

    $field = get_field('page_category');

    if (empty($field) || empty($field['value'])) {
        return $classes;
    }

    $classes[] = 'category-' . sanitize_html_class($field['value']);

    return $classes;
});

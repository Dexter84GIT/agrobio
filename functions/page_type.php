<?php
add_filter('body_class', function ($classes) {
    if (is_page() || is_singular()) {
        $context = get_field('page_category')['value'];
        if ($context) {
            $classes[] = 'category-' . sanitize_html_class($context);
        }
    }
    return $classes;
});
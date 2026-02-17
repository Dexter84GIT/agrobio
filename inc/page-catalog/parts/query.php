<?php

$tax_disease = null;
$tax_animal = null;
$tax_extra = null;

if ($pageCategory === 'pets') {
    $tax_disease = 'vet_disease_pets';
    $tax_animal = 'vet_animal_type_pets';
    $tax_extra = 'vet_form_pets';
} elseif ($pageCategory === 'cattle') {
    $tax_disease = 'vet_disease_cattle';
    $tax_animal = 'vet_animal_type_cattle';
} elseif ($pageCategory === 'bees') {
    $tax_disease = 'bee_product_group';
    $bee_taxonomies = [
        'bee_biotech' => 'Биотехнические средства',
        'bee_feed' => 'Корма',
        'bee_goods' => 'Сопутствующие товары',
    ];
}

$treatments = get_terms([
    'taxonomy' => 'vet_treatment',
    'hide_empty' => false,
]);

$diseases = $tax_disease
    ? get_terms([
        'taxonomy' => $tax_disease,
        'hide_empty' => false,
    ])
    : [];

$animals = $tax_animal
    ? get_terms([
        'taxonomy' => $tax_animal,
        'hide_empty' => false,
    ])
    : [];

$extra_terms = $tax_extra
    ? get_terms([
        'taxonomy' => $tax_extra,
        'hide_empty' => false,
    ])
    : [];

$tax_query = ['relation' => 'AND'];

if (!empty($_GET['treatment'])) {
    $tax_query[] = [
        'taxonomy' => 'vet_treatment',
        'field' => 'slug',
        'terms' => sanitize_text_field($_GET['treatment']),
    ];
}

if ($pageCategory === 'bees') {
    foreach ($bee_taxonomies as $tax => $label) {
        if (!empty($_GET[$tax])) {
            $tax_query[] = [
                'taxonomy' => $tax,
                'field' => 'slug',
                'terms' => sanitize_text_field($_GET[$tax]),
            ];
        }
    }
}

if ($tax_animal) {
    $tax_query[] = [
        'taxonomy' => $tax_animal,
        'operator' => 'EXISTS',
    ];
}

if ($tax_disease && !empty($_GET['disease'])) {
    $tax_query[] = [
        'taxonomy' => $tax_disease,
        'field' => 'slug',
        'terms' => sanitize_text_field($_GET['disease']),
    ];
}

if ($tax_animal && !empty($_GET['animal'])) {
    $tax_query[] = [
        'taxonomy' => $tax_animal,
        'field' => 'slug',
        'terms' => sanitize_text_field($_GET['animal']),
    ];
}

if ($tax_extra && !empty($_GET['form'])) {
    $tax_query[] = [
        'taxonomy' => $tax_extra,
        'field' => 'slug',
        'terms' => sanitize_text_field($_GET['form']),
    ];
}

$bee_terms = [];

if (!empty($bee_taxonomies)) {
    foreach ($bee_taxonomies as $tax => $label) {
        $bee_terms[$tax] = get_terms([
            'taxonomy' => $tax,
            'hide_empty' => false,
        ]);
    }
}

$args = [
    'post_type' => 'product_card',
    'post_status' => 'publish',
    'posts_per_page' => 12,
];

if (count($tax_query) > 1) {
    $args['tax_query'] = $tax_query;
}

$paged = max(1, get_query_var('paged') ?: ($_GET['paged'] ?? 1));

$active_filters = false;

$allowed_filters = [
    'disease',
    'animal',
    'treatment',
    'form',
    'bee_product_group',
    'bee_biotech',
    'bee_feed',
    'bee_goods'
];

foreach ($allowed_filters as $filter) {
    if (!empty($_GET[$filter])) {
        $active_filters = true;
        break;
    }
}

$q = null;

if ($active_filters) {

    $q = new WP_Query([
        'post_type' => 'product_card',
        'post_status' => 'publish',
        'posts_per_page' => 6,
        'paged' => $paged,
        'tax_query' => $tax_query,
    ]);

}
?>
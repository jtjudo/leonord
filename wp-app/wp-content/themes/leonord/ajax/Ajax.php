<?php

class Ajax
{
    public string $ajax_blocks_path;

    public function __construct()
    {
        $this->ajax_blocks_path = get_template_directory() . '/ajax-blocks/';
    }

    public function register(): void
    {
        add_action('wp_ajax_popular-product', [$this, 'popularProduct']);
        add_action('wp_ajax_popular-product', [$this, 'popularProduct']);

        add_action('wp_ajax_sort-product', [$this, 'sortProduct']);
        add_action('wp_ajax_sort-product', [$this, 'sortProduct']);

        add_action('wp_ajax_search-page-product', [$this, 'searchProduct']);
        add_action('wp_ajax_search-page-product', [$this, 'searchProduct']);
    }

    public function searchProduct()
    {
        $keyword = $_POST['keyword'];
        $products = $this->getSearchProduct($keyword);

        include $this->ajax_blocks_path . 'search-product-ajax.php';
        wp_die();
    }

    public function getSearchProduct(
        string $keyword = '',
    ): array {
        $defaultArgs = [
            'post_type' => 'products',
            'posts_per_page' => -1,
            'post_status' => 'publish',
            'order' => 'ASC',
            '_meta_or_title' => $keyword,
            'meta_query'    => [
                [
                    'key'     => 'vendor_code',
                    'value'   => $keyword,
                    'compare' => 'LIKE'
                ]
            ],
        ];

        return get_posts($defaultArgs);
    }

    public function sortProduct(): void
    {
        $format = $_POST['format'];
        $termId = $_POST['termId'];
        $term = get_term($termId, 'product-category');
        $products = $this->getProducts($term, $format);

        include $this->ajax_blocks_path . 'sort-product-ajax.php';
        wp_die();
    }

    public function getProducts(
        WP_Term $term,
        string  $sort = 'popular',
    ): array {
        $defaultArgs = [
            'post_type' => 'products',
            'posts_per_page' => -1,
            'post_status' => 'publish',
            'tax_query' => [
                [
                    'taxonomy' => $term->taxonomy,
                    'field' => 'term_id',
                    'terms' => $term->term_id
                ]
            ]
        ];

        if ($sort === 'new') {
            $order = [
                'meta_key' => 'new',
                'orderby' => 'meta_value_num',
                'order' => 'DESC',
            ];
        }

        if ($sort === 'discount') {
            $order = [
                'meta_key' => 'discount',
                'orderby' => 'meta_value_num',
                'order' => 'DESC',
            ];
        }

        if ($sort === 'popular') {
            $order = [
                'meta_key' => 'popular',
                'orderby' => 'meta_value_num',
                'order' => 'DESC',
            ];
        }

        return get_posts(array_merge($defaultArgs, $order ?? []));
    }

    public function popularProduct(): void
    {
        $format = $_POST['format'];
        $products = $this->get_recommendations($format);

        include $this->ajax_blocks_path . 'popular-product-ajax.php';
        wp_die();
    }

    public function get_recommendations(
        string $format,
    ): array {
        $args = [];
        $defaultArgs = [
            'post_type' => 'products',
            'posts_per_page' => -1,
            'post_status' => 'publish',
        ];

        if ($format === 'new') {
            $args = [
                'meta_key' => 'new',
                'meta_value' => '1',
                'compare' => '=',
            ];
        }

        if ($format === 'popular') {
            $args = [
                'meta_key' => 'popular',
                'meta_value' => '1',
                'compare' => '=',
            ];
        }

        if ($format === 'discount') {
            $args = [
                'meta_key' => 'discount',
                'meta_value' => '1',
                'compare' => '=',
            ];
        }

        return get_posts(array_merge($defaultArgs, $args));
    }

    public function getVideos(
        int $count = 10,
    ): array {
        $args = [
            'post_type' => 'videos',
            'posts_per_page' => $count,
            'post_status' => 'publish',
            'orderby' => 'rand'
        ];

        return get_posts($args);
    }

    public function getNewsByCategory(
        WP_Term $category,
        int $limit = null
    ):array {
        return get_posts(
            array(
                'posts_per_page' => $limit ?: -1,
                'post_type' => 'news',
                'tax_query' => array(
                    array(
                        'taxonomy' => 'news-category',
                        'field' => 'term_id',
                        'terms' => $category->term_id,
                    )
                )
            )
        );
    }

    public function getRandomNews():array {
        $args = [
            'post_type' => 'news',
            'posts_per_page' => 10,
            'post_status' => 'publish',
            'orderby' => 'rand'
        ];

        return get_posts($args);
    }
}
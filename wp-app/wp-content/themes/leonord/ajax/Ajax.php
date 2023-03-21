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
//        add_action('wp_ajax_recommendations', [$this, 'get_recommendations']);
//        add_action('wp_ajax_nopriv_recommendations', [$this, 'get_recommendations']);
    }

    public function get_recommendations(
        string $format,
    ): array
    {
        $args = [];
        $defaultArgs = [
            'post_type' => 'products',
            'posts_per_page' => -1,
            'post_status' => 'publish',
        ];

        if ($format === 'new') {
            $args = [
                'orderby' => 'publish_date',
                'order' => 'DESC',
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
        $count = 10,
    ):array {
        $args = [
            'post_type' => 'videos',
            'posts_per_page' => $count,
            'post_status' => 'publish',
            'orderby' => 'rand'
        ];

        return get_posts($args);
    }
}
<?php

use JetBrains\PhpStorm\NoReturn;

function getLevelTaxonomy(
    WP_Term $category,
    int $level = 1
): int {
    if ($category->parent == 0) {
        return $level;
    } else {
        $level++;
        $category = get_term($category->parent);

        return getLevelTaxonomy($category, $level);
    }
}

function getTitlesForBreadcrumb(
    ?WP_Term $category = null,
    array $titles = [],
): array {
    if (!$category) {
        return $titles;
    }

    $titles[$category->term_id]['title'] = $category->name;
    $titles[$category->term_id]['url'] = sprintf("%s/%s/%s", get_home_url(), $category->taxonomy, $category->slug);
    if ($category->parent == 0) {
        return $titles;
    } else {
        $category = get_term($category->parent);

        return getTitlesForBreadcrumb($category, $titles);
    }
}

#[NoReturn] function redirectTo404(): void
{
    global $wp_query;
    $wp_query->set_404();
    status_header(404);
    get_template_part(404);

    exit();
}

function getEndingWord(
    int $count,
): string {
    if (str_ends_with($count, 1)) {
        return 'модель';
    }

    if (str_ends_with($count, 2) || str_ends_with($count, 3) || str_ends_with($count, 4)) {
        return 'модели';
    }

    return 'моделей';
}

function getCurrentUrl(): string
{
    return (empty($_SERVER['HTTPS']) ? 'http' : 'https') . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
}

function getParamsByUrl(
    string $url,
): array {
    $parts = parse_url($url);

    parse_str($parts['query'] ?? '', $query);

    return $query;
}

function getOverlayClass(
    WP_Post $product,
): ?array {
    $isNew = get_field('new', $product);

    if ($isNew) {
        return [
            'class' => 'overlay-new',
            'name' => 'новинка',
        ];
    }

    $isDiscount = get_field('discount', $product);

    if ($isDiscount) {
        return [
            'class' => 'overlay-discount',
            'name' => 'скидка',
        ];
    }

    return null;
}
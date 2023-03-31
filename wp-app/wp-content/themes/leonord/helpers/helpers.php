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
<?php
$currentCategory = get_queried_object();
$lvlCategory = getLevelTaxonomy($currentCategory);

$partial = match ($lvlCategory) {
    1 => 'partials/lvl-1-category.php',
    2 => 'partials/lvl-2-category.php',

    default => redirectTo404(),
};

get_header();
include_once $partial;
get_footer();

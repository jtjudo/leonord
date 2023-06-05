<?php
$subCategoriesIds = get_term_children($currentCategory->term_id, $currentCategory->taxonomy);
$description = term_description($currentCategory->term_id, $currentCategory->taxonomy);
$products = get_posts([
    'post_type' => 'products',
    'posts_per_page' => -1,
    'post_status' => 'publish',
    'tax_query' => [
        'relation' => 'AND',
        [
            'taxonomy' => $currentCategory->taxonomy,
            'field' => 'term_id',
            'terms' => $currentCategory->term_id,
        ],
        [
            'taxonomy' => $currentCategory->taxonomy,
            'field' => 'term_id',
            'terms' => $subCategoriesIds,
            'operator' => 'NOT IN',
        ],
    ],
]);

?>
<section class="tax-category">
    <div class="container">
        <?php include get_template_directory() . '/modules/breadcrumb/breadcrumb.php' ?>
        <h1><?= $currentCategory->name ?? '' ?></h1>
    </div>
    <div class="tax-category__wrapper">
        <?php if (!empty($products)) : ?>
            <div class="tax__subcategory">
                <div class="container">
                    <div class="subcategory-top">
                        <div class="subcategory-top-left">
                            <?php
                            $image = get_field('image', $currentCategory);
                            ?>
                            <?php if (!empty($image)) : ?>
                                <picture>
                                    <img loading="lazy" src="<?= $image['url'] ?>" alt="<?= $image['title'] ?>">
                                </picture>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
                <?php include get_template_directory() . '/components/product-slider-cards.php' ?>
            </div>
        <?php endif; ?>

        <?php if (!empty($subCategoriesIds)) : ?>
            <?php foreach ($subCategoriesIds as $subCategoryId) : ?>
                <?php
                $subCategory = get_term($subCategoryId);
                $image = get_field('image', $subCategory);
                $url = sprintf("%s/%s/%s", get_home_url(), $subCategory->taxonomy, $subCategory->slug);

                $products = get_posts([
                    'post_type' => 'products',
                    'posts_per_page' => -1,
                    'post_status' => 'publish',
                    'tax_query' => [
                        [
                            'taxonomy' => $subCategory->taxonomy,
                            'field' => 'term_id',
                            'terms' => $subCategory->term_id,
                        ],
                    ],
                ]);
                ?>
                <?php if (!empty($products)) : ?>
                    <div class="tax__subcategory">
                        <div class="container">
                            <div class="subcategory-top">
                                <div class="subcategory-top-left">
                                    <?php if (!empty($image)) : ?>
                                        <picture>
                                            <img loading="lazy" src="<?= $image['url'] ?>" alt="<?= $image['title'] ?>">
                                        </picture>
                                    <?php endif; ?>
                                    <h2><?= $subCategory->name ?></h2>
                                </div>
                                <a class="see-more" href="<?= $url ?>">Смотреть все</a>
                            </div>
                        </div>
                        <?php include get_template_directory() . '/components/product-slider-cards.php' ?>
                        <a class="see-more mobile-button" href="<?= $url ?>">Смотреть все</a>
                    </div>
                <?php endif; ?>
            <?php endforeach; ?>
        <?php endif; ?>
    </div>

    <?php include get_template_directory() . '/components/line.php' ?>

    <div class="tax-category__description">
        <div class="container"><?= $description ?></div>
    </div>
</section>

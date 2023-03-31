<?php
$ajax = new Ajax();
$products = $ajax->getProducts($currentCategory);
$description = term_description($currentCategory->term_id, $currentCategory->taxonomy);
$countProducts = count($products);
?>

<section class="tax-subcategory">
    <div class="container">
        <div class="tax-subcategory__top">
            <h1><?= $currentCategory->name ?? '' ?></h1>
            <p><?= $countProducts . ' ', getEndingWord($countProducts); ?> </p>
        </div>
        <div class="tax-subcategory">
            <button class="button-sort" data-format="new">Новинки</button>
            <button class="button-sort button-active" data-format="popular">Популярные</button>
            <button class="button-sort" data-format="discount">Скидки</button>
        </div>
    </div>
    <div class="container-xl">
        <div class="tax-subcategory__wrapper">
            <div class="tax-subcategory__results">
                <?php include get_template_directory() . '/ajax-blocks/sort-product-ajax.php' ?>
            </div>
            <?php include get_template_directory() . '/components/loader.php' ?>
        </div>
    </div>

    <?php include get_template_directory() . '/components/line.php' ?>

    <div class="tax-category__description">
        <div class="container"><?= $description ?></div>
    </div>
</section>

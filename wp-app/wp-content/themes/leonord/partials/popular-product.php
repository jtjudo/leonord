<?php
$ajax = new Ajax();
$products = $products ?? $ajax->get_recommendations('popular');

?>

<?php if ($products) : ?>
<section class="popular-product">
    <div class="container">
        <div class="popular-product__top <?php if ($isSingle) : ?> single-product <?php endif; ?>">
            <h2><?= $title ?? '' ?></h2>
            <?php if (!$isSingle) : ?>
                <?php include get_template_directory() . '/components/line.php' ?>
                <?php if (!empty($button)) : ?>
                    <a class="see-more" href="<?= $button['url'] ?>" target="<?= $button['target'] ?>"><?= $button['title'] ?></a>
                <?php endif; ?>
            <?php else: ?>
                <div class="popular-product-sort">
                    <button class="button-sort" data-format="new">Новинки</button>
                    <button class="button-sort button-active" data-format="popular">Популярные</button>
                    <button class="button-sort" data-format="discount">Скидки</button>
                </div>
            <?php endif; ?>
        </div>
    </div>
    <?php include get_template_directory() . '/components/product-slider-cards.php' ?>
</section>
<?php endif; ?>

<?php
$ajax = new Ajax();
$products = $ajax->get_recommendations('popular');
?>

<section class="popular-product">
    <div class="container">
        <div class="popular-product__top <?php if ($isSingle) : ?> single-product <?php endif; ?>">
            <h2><?= $title ?? '' ?></h2>
            <?php if (!$isSingle) : ?>
                <svg xmlns="http://www.w3.org/2000/svg" width="1008" height="2" viewBox="0 0 1008 2" fill="none">
                    <line x1="0.5" y1="1" x2="1007.5" y2="0.999912" stroke="url(#paint0_linear_50_1541)"
                          stroke-opacity="0.6" stroke-linecap="round"/>
                    <defs>
                        <linearGradient id="paint0_linear_50_1541" x1="0" y1="1.5" x2="1021.11" y2="1.49991"
                                        gradientUnits="userSpaceOnUse">
                            <stop stop-color="#B5B5B5" stop-opacity="0"/>
                            <stop offset="0.520833" stop-color="#B5B5B5"/>
                            <stop offset="1" stop-color="#B5B5B5" stop-opacity="0"/>
                        </linearGradient>
                    </defs>
                </svg>
                <?php if (!empty($button)) : ?>
                    <a href="<?= $button['url'] ?>" target="<?= $button['target'] ?>"><?= $button['title'] ?></a>
                <?php endif; ?>
            <?php else: ?>
                <div class="popular-product-sort">
                    <button class="button" data-format="new">Новинки</button>
                    <button class="button button-active" data-format="popular">Популярные</button>
                    <button class="button" data-format="discount">Скидки</button>
                </div>
            <?php endif; ?>
        </div>
    </div>
    <div class="container-xl">
        <?php if (!empty($products)) : ?>
        <div class="popular-product__wrapper">
            <div class="popular-product__results">
                <?php include get_template_directory() . '/ajax-blocks/popular-product-ajax.php' ?>
            </div>
            <?php include get_template_directory() . '/components/loader.php' ?>
        </div>
    </div>
    <?php endif; ?>
</section>

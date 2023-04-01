<?php if (!empty($products)) : ?>
    <div class="container-xl">
        <div class="popular-product__wrapper">
            <div class="popular-product__results">
                <?php include get_template_directory() . '/ajax-blocks/popular-product-ajax.php' ?>
            </div>
            <?php include get_template_directory() . '/components/loader.php' ?>
        </div>
    </div>
<?php endif; ?>

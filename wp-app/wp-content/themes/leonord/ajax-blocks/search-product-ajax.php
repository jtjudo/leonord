<?php if (!empty($products)) : ?>
    <div class="search-product__results">
        <?php foreach ($products as $product) : ?>
            <?php include get_template_directory() . '/components/product-card.php' ?>
        <?php endforeach; ?>
    </div>
<?php else: ?>
    <p class="search-not-found">По вашему запросу ничего не найдено</p>
<?php endif; ?>
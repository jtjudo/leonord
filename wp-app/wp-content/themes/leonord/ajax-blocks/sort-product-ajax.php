<?php if (!empty($products)) : ?>
    <?php foreach ($products as $product) : ?>
        <?php include get_template_directory() . '/components/product-card.php' ?>
    <?php endforeach; ?>
<?php endif; ?>
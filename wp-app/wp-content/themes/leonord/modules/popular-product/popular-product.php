<?php

/*
Title: Популярные продукты
Mode: preview
*/

?>

<?php
$title = get_field('title');
$button = get_field('button');
$isSingle = false;
?>

<?php if (!is_admin()) : ?>
    <?php include  get_template_directory() . '/partials/popular-product.php' ?>
<?php else: ?>
    <h2 style="font-family: 'Mark', sans-serif;">Популярные продукты модуль</h2>
<?php endif; ?>
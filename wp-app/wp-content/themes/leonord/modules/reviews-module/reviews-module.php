<?php

/*
Title: Отзывы модуль
Mode: preview
*/

?>

<?php
$title = get_field('title');
$reviews = get_field('reviews');


?>

<?php if (!is_admin()) : ?>
    <section class="reach">
        <div class="reviews-module">
            <div class="container-xs">
                <h2 class="heading">Отзывы о нас</h2>
                <?php include get_template_directory() . '/components/modules/reviews-slider.php' ?>
            </div>
            <?php include get_template_directory() . '/assets/images/text-overlay-img.php' ?>
        </div>

    </section>
<?php else: ?>
    <h2 style="font-family: 'Mark', sans-serif;">Отзывы модуль</h2>
<?php endif; ?>
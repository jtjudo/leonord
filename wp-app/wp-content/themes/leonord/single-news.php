<?php
    get_header();
    $post = get_post();
    $reviews = get_field('reviews', $post);
?>

<?php if (!empty($reviews)) : ?>
<!--    <div class="reviews-module">-->
<!--        <div class="container-xs">-->
<!--            <h2 class="heading">Отзывы о нас</h2>-->
<!--            --><?php //include get_template_directory() . '/components/modules/reviews-slider.php' ?>
<!--        </div>-->
<!--    </div>-->
<?php endif; ?>

<?php
get_footer();
?>

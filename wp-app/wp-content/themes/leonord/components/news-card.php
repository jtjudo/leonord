<?php
include_once(get_template_directory() . '/helpers/YoutubeHelper.php');

$title = get_the_title($post);
$link = get_post_permalink($post);
$image = get_field('image', $post);
?>

<a class="news-card" href="<?= $link ?>">
    <?php if (!empty($image)) : ?>
        <img
            class="news-card__image"
            loading="lazy"
            src="<?= $image['url'] ?>"
            alt="<?= $image['alt'] ?>"
        >
    <?php endif; ?>
    <div class="news-card__footer">
        <p class="news-card__title"><?= $title ?></p>
        <?php include(get_template_directory() . '/assets/images/right-arrow.php') ?>
    </div>
</a>

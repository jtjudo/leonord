<?php
/** @var WP_Post $review */
$author = $review->post_title;
$pubDate = get_the_date('d.m.Y', $review);
$text = get_field('text', $review);
$image = get_field('image', $review);
$hasImage = !empty($image);

?>

<a class="reviews-card">
    <div class="reviews-card__header">
        <span
            class="reviews-card__author-image"
            <?php if ($hasImage) : ?>
                style="background-image: url('<?= $image['url'] ?>')"
            <?php endif; ?>
        >
            <?php if (!$hasImage) : ?>
                <?php include get_template_directory() . '/assets/images/empty-profile-photo.php' ?>
            <?php endif; ?>
        </span>
        <div>
            <p class="reviews-card__author"><?= $author ?></p>
            <p class="reviews-card__pub-date"><?= $pubDate ?></p>
        </div>
    </div>
    <p class="video-card__text"><?= $text ?? '' ?></p>
</a>
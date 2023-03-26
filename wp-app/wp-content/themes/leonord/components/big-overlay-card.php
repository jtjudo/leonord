<?php


$previewImage = !empty($previewImage) ? $previewImage['url'] : null;
$bigOverlayTitle = $bigOverlayTitle ?? 'Перейти в каталог';
$link = $link ?? [];
?>

<a href="<?= $link['url'] ?? '' ?>" class="big-overlay-card">
    <img
        class="big-overlay-card__image"
        loading="lazy"
        src="<?= $previewImage ?>"
        alt="Превью"
    >
    <div class="big-overlay-card__overlay">
        <p class="big-overlay-card__title"><?= $bigOverlayTitle ?></p>
        <?php include(get_template_directory() . '/assets/images/right-arrow.php') ?>
    </div>
</a>
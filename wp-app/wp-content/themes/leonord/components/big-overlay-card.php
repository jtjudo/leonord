<?php


$previewImage = !empty($previewImage) ? $previewImage['url'] : null;
$title = $title ?? 'Перейти в каталог';
?>

<div class="big-overlay-card">
    <img
        class="big-overlay-card__image"
        loading="lazy"
        src="<?= $previewImage ?>"
        alt="Превью"
    >
    <div class="big-overlay-card__overlay">
        <p class="big-overlay-card__title"><?= $title ?></p>
        <?php include(get_template_directory() . '/assets/images/right-arrow.php') ?>
    </div>
</div>
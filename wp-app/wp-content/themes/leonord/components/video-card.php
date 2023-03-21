<?php
include_once(get_template_directory() . '/helpers/YoutubeHelper.php');

$title = $video->post_title;
$link = get_field('link', $video);
$previewLink = !empty($link) ?  getYoutubePreview(extractIdFromLink($link)) : null;
?>

<div class="video-card">
    <img
        class="video-card__image"
        loading="lazy"
        src="<?= $previewLink ?>"
        alt="Превью для youtube видео"
    >
    <?php include(get_template_directory() . '/assets/images/play-video.php') ?>
    <div class="video-card__overlay">
        <p class="video-card__title"><?= $title ?></p>
        <?php include(get_template_directory() . '/assets/images/right-arrow.php') ?>
    </div>
</div>
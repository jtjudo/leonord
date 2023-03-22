<?php

/*
Title: Видео модуль
Mode: preview
*/

?>

<?php
$title = get_field('title');
$description = get_field('description');
$link = get_field('link');
$gallery = get_field('gallery');
$secondLogo = get_field('second_logo', 'option');
$ajax = new Ajax();
?>

<?php if (!is_admin()) : ?>
    <section class="video-module">
        <div class="container-xs">
            <div class="video-module__wrapper">
                <div class="video-module__header">
                    <h2 class="video-module__title heading">Видео</h2>
                    <a href="" class="video-module__see-more see-more">Смотреть все</a>
                </div>
                <?php
                    $videos = $ajax->getVideos();
                    include get_template_directory() . '/components/modules/videos-slider.php'
                ?>
            </div>
        </div>
        <?php include get_template_directory() . '/assets/images/text-overlay-img.php' ?>
    </section>
<?php else: ?>
    <h2 style="font-family: 'Mark', sans-serif;">Видео модуль</h2>
<?php endif; ?>
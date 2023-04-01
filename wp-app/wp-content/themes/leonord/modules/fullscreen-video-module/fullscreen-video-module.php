<?php

/*
Title: Полноэкранный видео модуль
Mode: preview
*/

?>

<?php
$videos = get_field('videos');
//$title = get_field('title');
//$description = get_field('description');
//$link = get_field('link');
//$gallery = get_field('gallery');
//$secondLogo = get_field('second_logo', 'option');
//$ajax = new Ajax();
?>

<?php if (!is_admin()) : ?>
    <section class="video-module fullscreen-slider">
        <div class="fullscreen-container">
            <div class="video-module__wrapper">
                <?php
                include get_template_directory() . '/components/modules/videos-slider.php'
                ?>
            </div>
        </div>
    </section>
<?php else: ?>
    <h2 style="font-family: 'Mark', sans-serif;">Полноэкранный видео модуль</h2>
<?php endif; ?>
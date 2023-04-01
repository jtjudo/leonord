<?php

/*
Title: Полноэкранный видео модуль
Mode: preview
*/

?>

<?php
$videos = get_field('videos');
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
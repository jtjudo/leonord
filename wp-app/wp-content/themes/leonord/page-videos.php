<?php
get_header();

$ajax = new Ajax();

$videos = $ajax->getAllVideosByCreatedAt();
?>
<section class="videos">
    <div class="container-xs">
        <h1 class="heading videos__title">Видео</h1>

        <div class="videos__wrapper">
            <?php foreach ($videos as $video) : ?>
                <?php include get_template_directory() . '/components/video-card.php' ?>
            <?php endforeach; ?>
        </div>
    </div>
</section>
<?php
get_footer();
?>



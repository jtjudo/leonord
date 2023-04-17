<?php

/*
Title: Связаться модуль
Mode: preview
*/

?>

<?php
$title = get_field('title');
$subTitle = get_field('subtitle');
$btnTitle = get_field('btn_title');


?>

<?php if (!is_admin()) : ?>
    <section class="reach">
        <div class="container-xl">
            <div class="reach__wrapper">
                <h2 class="reach__title heading"><?= $title ?? '' ?></h2>
                <p class="reach__subtitle"><?= $subTitle ?? '' ?></p>
                <button class="reach__btn btn" href="javascript:;" data-fancybox="" data-src="#back-call"><?= $btnTitle ?></button>
            </div>
        </div>
        <?php include get_template_directory() . '/assets/images/text-overlay-img.php' ?>

    </section>
<?php else: ?>
    <h2 style="font-family: 'Mark', sans-serif;">Связаться модуль</h2>
<?php endif; ?>
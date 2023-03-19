<?php

/*
Title: О компании
Mode: preview
*/

?>

<?php
$title = get_field('title');
$description = get_field('description');
$link = get_field('link');
$gallery = get_field('gallery');
$secondLogo = get_field('second_logo', 'option');
?>

<?php if (!is_admin()) : ?>
    <section class="about-company">
        <div class="container-xs">
            <img
                class="about-company__logo"
                src="<?= !empty($secondLogo) ? $secondLogo['url'] : ''  ?>"
                alt="логотип"
                width="210"
                height="210"
            >
            <div class="about-company__wrapper">
                <div class="about-company__left">
                    <?php if (!wp_is_mobile()) : ?>
                        <h2 class="about-company__title heading"><?= $title ?? '' ?></h2>
                    <?php endif; ?>
                    <div class="about-company__slider">
                        <div class="swiper-wrapper">
                            <?php foreach ($gallery as $item) : ?>
                                <div class="swiper-slide about-company__item">
                                    <img src="<?= $item['url'] ?>" alt="<?= $item['alt'] ?>">
                                </div>
                            <?php endforeach; ?>
                        </div>
                        <div class="swiper-pagination"></div>
                    </div>
                </div>
                <div class="about-company__description-wrapper">
                    <?php if (wp_is_mobile()) : ?>
                        <h2 class="about-company__title heading"><?= $title ?? '' ?></h2>
                    <?php endif; ?>
                <?= $description ?>
                <a
                    class="about-company__link button"
                    href="<?= $link['url'] ?>"
                    <?= $link['target'] ?>
                >
                    <?= $link['title'] ?>
                </a>
            </div>
            </div>
        </div>
    </section>
<?php else: ?>
    <h2 style="font-family: 'Mark', sans-serif;">О компании модуль</h2>
<?php endif; ?>
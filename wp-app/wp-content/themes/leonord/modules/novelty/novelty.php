<?php

/*
Title: Новинки модуль
Mode: preview
*/

?>

<?php
$previewImage = get_field('main_image');
$title = get_field('title');
$link = get_field('link');

$ajax = new Ajax();

$products = $ajax->get_recommendations('new');

$bigOverlayTitle = $link ? $link['title'] : null;
?>

<?php if (!is_admin()) : ?>
    <section class="novelty">
        <div class="container-xs">
            <div class="novelty__header">
                <h2 class="news__title heading"><?= $title ?? ''?></h2>
                <a
                    <?php if ($link) : ?>
                        href="<?= $link['url'] ?>"
                    <?php endif; ?>
                    class="novelty__see-more see-more"
                >
                    Смотреть все
                </a>
            </div>

            <div class="novelty-slider__wrapper">
                <?php if(!empty($previewImage)) : ?>
                    <div class="novelty-slider__big-item">
                        <?php include get_template_directory() . '/components/big-overlay-card.php' ?>
                    </div>
                <?php endif; ?>
                <div class="novelty-slider">
                    <div class="swiper-wrapper">
                        <?php foreach ($products as $product) : ?>
                            <div class="swiper-slide novelty-slider__item">
                                <?php include get_template_directory() . '/components/product-card.php' ?>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
                <div class="swiper-navigation custom-slider-navigation">
                    <div class="swiper-button-prev">
                        <svg xmlns="http://www.w3.org/2000/svg" width="59" height="59" viewBox="0 0 59 59" fill="none">
                            <path d="M42.1491 58L18.7467 58L0.999999 41.1952L0.999996 17.1235L17.4512 0.999999L41.5488 0.999996L58 17.1235L58 41.1952L42.1491 58Z"
                                  fill="#38393D" stroke="#4A4C52" stroke-width="1.29545"/>
                            <rect width="31.0909" height="31.0909" transform="translate(45.0454 45.0454) rotate(180)"
                                  fill="#38393D"/>
                            <path d="M14.6716 28.8664L44.3276 28.8664C44.6803 28.8664 44.9653 29.1514 44.9653 29.5042C44.9653 29.857 44.6803 30.142 44.3276 30.142L16.2122 30.142L20.0826 34.0124C20.3318 34.2615 20.3318 34.6661 20.0826 34.9152C19.8335 35.1643 19.4289 35.1643 19.1798 34.9152L14.2192 29.9546C14.0359 29.7713 13.982 29.4982 14.0817 29.2591C14.1813 29.0219 14.4145 28.8664 14.6716 28.8664Z"
                                  fill="white"/>
                            <path d="M19.6381 23.9C19.8016 23.9 19.965 23.9617 20.0885 24.0873C20.3377 24.3364 20.3377 24.741 20.0885 24.9901L15.122 29.9567C14.8728 30.2058 14.4683 30.2058 14.2191 29.9567C13.97 29.7076 13.97 29.303 14.2191 29.0539L19.1857 24.0873C19.3113 23.9617 19.4747 23.9 19.6381 23.9Z"
                                  fill="white"/>
                        </svg>
                    </div>
                    <div class="swiper-button-next">
                        <svg xmlns="http://www.w3.org/2000/svg" width="59" height="59" viewBox="0 0 59 59" fill="none">
                            <path d="M16.8509 1L40.2533 1L58 17.8048L58 41.8765L41.5488 58L17.4512 58L1 41.8765L1 17.8048L16.8509 1Z"
                                  fill="#38393D" stroke="#4A4C52" stroke-width="1.29545"/>
                            <rect width="31.0909" height="31.0909" transform="translate(13.9546 13.9546)" fill="#38393D"/>
                            <path d="M44.3284 30.1336L14.6724 30.1336C14.3197 30.1336 14.0347 29.8486 14.0347 29.4958C14.0347 29.143 14.3197 28.858 14.6724 28.858L42.7878 28.858L38.9174 24.9876C38.6682 24.7385 38.6682 24.3339 38.9174 24.0848C39.1665 23.8357 39.5711 23.8357 39.8202 24.0848L44.7808 29.0454C44.9641 29.2287 45.018 29.5018 44.9183 29.7409C44.8187 29.9781 44.5855 30.1336 44.3284 30.1336Z"
                                  fill="white"/>
                            <path d="M39.3619 35.1C39.1984 35.1 39.035 35.0383 38.9115 34.9127C38.6623 34.6636 38.6623 34.259 38.9115 34.0099L43.878 29.0433C44.1272 28.7942 44.5317 28.7942 44.7809 29.0433C45.03 29.2924 45.03 29.697 44.7809 29.9461L39.8143 34.9127C39.6887 35.0383 39.5253 35.1 39.3619 35.1Z"
                                  fill="white"/>
                        </svg>
                    </div>
                </div>
            </div>
            <?php if (wp_is_mobile()) : ?>
            <div class="novelty__see-more__bottom-wrapper">
                <a
                    class="see-more novelty__see-more__bottom"
                >
                    Смотреть все
                </a>
            </div>
            <?php endif; ?>
        </div>
    </section>

<?php else: ?>
    <h2 style="font-family: 'Mark', sans-serif;">Новинки модуль</h2>
<?php endif; ?>
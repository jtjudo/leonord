<?php
get_header();
?>

<?php
$product = get_queried_object();
$productCategories = get_the_terms($product, 'product-category');
$productSlug = $productCategories ? $productCategories[0]->slug : '';
$linkForBack = sprintf('%s/product-category/%s', get_home_url(), $productSlug);
$images = get_field('images', $product);
$vendorCode = get_field('vendor_code', $product);
$isNew = get_field('new', $product);
$characteristics = get_field('characteristics', $product);
$counterForCharacteristic = 1;

?>

<section class="single-content">
    <div class="container-xl">
        <div class="single-content__wrapper">
            <a href="<?= $linkForBack ?>" class="single-content__btn-back">
                <svg xmlns="http://www.w3.org/2000/svg" width="13" height="13" viewBox="0 0 13 13" fill="none">
                    <path d="M13 6.09049H1.56768L4.14449 3.51366L3.5654 2.93457L0 6.49995L3.5654 10.0654L4.14449 9.48626L1.56768 6.90945H13V6.09049Z"
                          fill="white"/>
                </svg>
                Назад в раздел
            </a>
            <h1> <?= $product->post_title ?> </h1>
            <div class="single-content__data">
                <div class="single-content__data-left">
                    <div class="swiper productSwiperTop">
                        <div class="swiper-wrapper">
                            <?php if (!empty($images)) : ?>
                                <?php foreach ($images as $image) : ?>
                                    <div class="swiper-slide slide-top">
                                        <a href="javascript:;" data-fancybox="slider" data-src="<?= $image['url'] ?>"
                                           class="slider-open-window">
                                            <picture>
                                                <img loading="lazy" class="slide-main-image" src="<?= $image['url']; ?>"
                                                     alt="<?= $image['title'] ?>">
                                            </picture>
                                        </a>

                                        <?php if ($isNew) : ?>
                                            <div class="productSwiperTop-new">новинка</div>
                                        <?php endif; ?>
                                    </div>
                                <?php endforeach; ?>
                            <?php endif; ?>
                        </div>
                    </div>
                    <div thumbsSlider="" class="swiper productSwiperBottom">
                        <div class="swiper-wrapper">
                            <?php if (!empty($images)) : ?>
                                <?php foreach ($images as $image) : ?>
                                    <div class="swiper-slide slide-bottom">
                                        <picture>
                                            <img loading="lazy" class="slide-main-image" src="<?= $image['url']; ?>"
                                                 alt="<?= $image['title'] ?>">
                                        </picture>
                                    </div>
                                <?php endforeach; ?>
                            <?php endif; ?>
                        </div>
                        <div class="swiper-button-prev">
                            <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 50 50"
                                 fill="none">
                                <path d="M35.291 48.5L15.7889 48.5L0.999999 34.496L0.999997 14.4362L14.7094 0.999907L34.7907 0.999905L48.5001 14.4362L48.5001 34.496L35.291 48.5Z"
                                      fill="#38393D" stroke="#4A4C52" stroke-width="1.07955"/>
                                <g clip-path="url(#clip0_107_1482)">
                                    <rect width="25.9091" height="25.9091"
                                          transform="translate(37.7051 37.7046) rotate(180)" fill="#38393D"/>
                                    <path d="M12.3948 24.2211L37.1082 24.2211C37.4021 24.2211 37.6396 24.4586 37.6396 24.7526C37.6396 25.0466 37.4021 25.2841 37.1082 25.2841L13.6787 25.2841L16.904 28.5094C17.1116 28.717 17.1116 29.0542 16.904 29.2618C16.6964 29.4694 16.3593 29.4694 16.1517 29.2618L12.0178 25.1279C11.865 24.9751 11.8202 24.7476 11.9032 24.5483C11.9863 24.3507 12.1806 24.2211 12.3948 24.2211Z"
                                          fill="white"/>
                                    <path d="M16.5334 20.0826C16.6696 20.0826 16.8058 20.1341 16.9087 20.2388C17.1164 20.4464 17.1164 20.7835 16.9087 20.9911L12.7699 25.1299C12.5623 25.3375 12.2252 25.3375 12.0176 25.1299C11.81 24.9223 11.81 24.5852 12.0176 24.3776L16.1564 20.2388C16.261 20.1341 16.3972 20.0826 16.5334 20.0826Z"
                                          fill="white"/>
                                </g>
                                <defs>
                                    <clipPath id="clip0_107_1482">
                                        <rect width="25.9091" height="25.9091" fill="white"
                                              transform="translate(37.7051 37.7046) rotate(180)"/>
                                    </clipPath>
                                </defs>
                            </svg>
                        </div>
                        <div class="swiper-button-next">
                            <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 50 50"
                                 fill="none">
                                <path d="M14.209 1L33.7111 1L48.5 15.004L48.5 35.0638L34.7906 48.5001L14.7093 48.5001L0.999908 35.0638L0.999908 15.004L14.209 1Z"
                                      fill="#38393D" stroke="#4A4C52" stroke-width="1.07955"/>
                                <g clip-path="url(#clip0_107_1492)">
                                    <rect width="25.9091" height="25.9091" transform="translate(11.7949 11.7954)"
                                          fill="#38393D"/>
                                    <path d="M37.1052 25.2789L12.3918 25.2789C12.0979 25.2789 11.8604 25.0414 11.8604 24.7474C11.8604 24.4534 12.0979 24.2159 12.3918 24.2159L35.8213 24.2159L32.596 20.9906C32.3884 20.783 32.3884 20.4458 32.596 20.2382C32.8036 20.0306 33.1407 20.0306 33.3483 20.2382L37.4822 24.3721C37.635 24.5249 37.6798 24.7524 37.5968 24.9517C37.5137 25.1493 37.3194 25.2789 37.1052 25.2789Z"
                                          fill="white"/>
                                    <path d="M32.9666 29.4174C32.8304 29.4174 32.6942 29.3659 32.5913 29.2612C32.3836 29.0536 32.3836 28.7165 32.5913 28.5089L36.7301 24.3701C36.9377 24.1625 37.2748 24.1625 37.4824 24.3701C37.69 24.5777 37.69 24.9148 37.4824 25.1224L33.3436 29.2612C33.239 29.3659 33.1028 29.4174 32.9666 29.4174Z"
                                          fill="white"/>
                                </g>
                                <defs>
                                    <clipPath id="clip0_107_1492">
                                        <rect width="25.9091" height="25.9091" fill="white"
                                              transform="translate(11.7949 11.7954)"/>
                                    </clipPath>
                                </defs>
                            </svg>
                        </div>
                    </div>
                </div>
                <div class="single-content__data-right">
                    <div class="data-right-top">
                        <p>Артикул: <?= $vendorCode ?? '' ?></p>
                        <a href="javascript:;" data-fancybox="" data-src="#back-call">запросить цену</a>
                    </div>
                    <h2> <?= $product->post_title ?> </h2>
                    <p class="data-right-characteristics-title">Характеристики</p>
                    <?php if (!empty($characteristics)) : ?>
                        <div class="data-right-characteristics">
                            <?php foreach ($characteristics as $groups) : ?>
                                <div class="data-right-characteristics-group">
                                    <?php foreach ($groups['group'] as $characteristic) : ?>
                                        <div class="data-right-characteristic <?php if ($counterForCharacteristic >= 12) : ?> js-hidden <?php endif; ?>>">
                                            <p class="characteristic-name"><?= $characteristic['name'] ?></p>
                                            <?php if (!empty($characteristic['value'])) : ?>
                                                <div class="characteristic-separator"></div>
                                                <p class="characteristic-value"><?= $characteristic['value'] ?></p>
                                            <?php endif; ?>
                                        </div>
                                        <?php
                                        $counterForCharacteristic++;
                                        ?>
                                    <?php endforeach; ?>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    <?php endif; ?>
                    <button class="data-right-all" type="button">все характеристики</button>
                </div>
            </div>
        </div>
    </div>
</section>

<?php
include get_template_directory() . '/modules/description-product/description-product.php';
$title = 'Рекомендуем так же посмотреть';
$isSingle = true;
include get_template_directory() . '/partials/popular-product.php';
get_footer();
?>

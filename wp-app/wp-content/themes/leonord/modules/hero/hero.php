<?php

/*
Title: Главный модуль
Mode: preview
*/

?>

<?php
$slides = get_field('slides');
?>

<?php if (!is_admin()) : ?>
    <section class="hero">
        <div class="container">
            <div class="swiper swiper-hero">
                <div class="swiper-wrapper">
                    <?php foreach ($slides as $slide) : ?>
                        <?php
                        $headline = $slide['headline'] ?? '';
                        $subHeadline = $slide['subheadline'] ?? '';
                        $vendorCode = $slide['vendor_code'] ?? '';
                        $button = $slide['button'] ?? '';
                        $volume = $slide['volume'] ?? '';
                        $guarantee = $slide['guarantee'] ?? '';
                        $image = $slide['image'] ?? '';
                        ?>
                        <div class="swiper-slide" style="background-image: url($image['url'])">
                            <div class="slide__wrapper">
                                <div class="slide-left">
                                    <div class="slide-left__info">
                                        <h2><?= $headline ?></h2>
                                        <p><?= $subHeadline ?></p>
                                        <a class="btn" href="<?= $button['ur'] ?? '' ?>"
                                           target="<?= $button['target'] ?? '' ?>"> <?= $button['title'] ?? '' ?>
                                        </a>
                                    </div>
                                </div>

                                <div class="slide-center__additional">
                                    <?php if (!empty($guarantee)) : ?>
                                        <div class="additional-top">
                                            <div class="additional-top-guarantee">
                                                <span><?= $guarantee['time'] ?></span>
                                                <p><?= $guarantee['text'] ?></p>
                                            </div>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="128" height="128"
                                                 viewBox="0 0 128 128" fill="none">
                                                <g filter="url(#filter0_b_50_1237)">
                                                    <path d="M91.9612 1H40.2295L1 38.1474V91.3586L38.0361 127H91.3044L127 91.3586V38.1474L91.9612 1Z"
                                                          fill="#232323" fill-opacity="0.53"/>
                                                    <path d="M91.9612 1H40.2295L1 38.1474V91.3586L38.0361 127H91.3044L127 91.3586V38.1474L91.9612 1Z"
                                                          stroke="url(#paint0_linear_50_1237)"/>
                                                </g>
                                                <defs>
                                                    <filter id="filter0_b_50_1237" x="-10.8855" y="-10.8855"
                                                            width="149.771" height="149.771"
                                                            filterUnits="userSpaceOnUse"
                                                            color-interpolation-filters="sRGB">
                                                        <feFlood flood-opacity="0" result="BackgroundImageFix"/>
                                                        <feGaussianBlur in="BackgroundImageFix"
                                                                        stdDeviation="5.69277"/>
                                                        <feComposite in2="SourceAlpha" operator="in"
                                                                     result="effect1_backgroundBlur_50_1237"/>
                                                        <feBlend mode="normal" in="SourceGraphic"
                                                                 in2="effect1_backgroundBlur_50_1237"
                                                                 result="shape"/>
                                                    </filter>
                                                    <linearGradient id="paint0_linear_50_1237" x1="16" y1="8"
                                                                    x2="116" y2="148.5"
                                                                    gradientUnits="userSpaceOnUse">
                                                        <stop stop-color="#6A6A6A"/>
                                                        <stop offset="1" stop-color="#5B5B5B" stop-opacity="0"/>
                                                    </linearGradient>
                                                </defs>
                                            </svg>
                                        </div>
                                    <?php endif; ?>

                                    <?php if (!empty($volume)) : ?>
                                        <div class="additional-bottom">
                                            <div class="additional-bottom-volume"><?= $volume['number'] . ' ' . $volume['text'] ?></div>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="128" height="128"
                                                 viewBox="0 0 128 128" fill="none">
                                                <g filter="url(#filter0_b_50_1237)">
                                                    <path d="M91.9612 1H40.2295L1 38.1474V91.3586L38.0361 127H91.3044L127 91.3586V38.1474L91.9612 1Z"
                                                          fill="#232323" fill-opacity="0.53"/>
                                                    <path d="M91.9612 1H40.2295L1 38.1474V91.3586L38.0361 127H91.3044L127 91.3586V38.1474L91.9612 1Z"
                                                          stroke="url(#paint0_linear_50_1237)"/>
                                                </g>
                                                <defs>
                                                    <filter id="filter0_b_50_1237" x="-10.8855" y="-10.8855"
                                                            width="149.771" height="149.771"
                                                            filterUnits="userSpaceOnUse"
                                                            color-interpolation-filters="sRGB">
                                                        <feFlood flood-opacity="0" result="BackgroundImageFix"/>
                                                        <feGaussianBlur in="BackgroundImageFix"
                                                                        stdDeviation="5.69277"/>
                                                        <feComposite in2="SourceAlpha" operator="in"
                                                                     result="effect1_backgroundBlur_50_1237"/>
                                                        <feBlend mode="normal" in="SourceGraphic"
                                                                 in2="effect1_backgroundBlur_50_1237"
                                                                 result="shape"/>
                                                    </filter>
                                                    <linearGradient id="paint0_linear_50_1237" x1="16" y1="8"
                                                                    x2="116"
                                                                    y2="148.5" gradientUnits="userSpaceOnUse">
                                                        <stop stop-color="#6A6A6A"/>
                                                        <stop offset="1" stop-color="#5B5B5B" stop-opacity="0"/>
                                                    </linearGradient>
                                                </defs>
                                            </svg>
                                        </div>
                                    <?php endif; ?>
                                </div>

                                <div class="slide-right">
                                    <div class="slider-right__wrapper">
                                        <picture>
                                            <img src="<?= $image['url'] ?>" alt="<?= $image['title'] ?>">
                                        </picture>
                                    </div>
                                    <div class="swiper-right__vendor-code">
                                        <?= $vendorCode ?? '' ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
                <div class="swiper-pagination"></div>
                <div class="swiper-navigation">
                    <div class="swiper-navigation__wrapper">
                        <div class="swiper-button-prev">
                            <svg xmlns="http://www.w3.org/2000/svg" width="46" height="46" viewBox="0 0 46 46" fill="none">
                                <path d="M32.7642 1H14.6992L1 13.9721V32.5538L13.6992 45H32.3008L45 32.5538V13.9721L32.7642 1Z"
                                      stroke="#B5B5B5"/>
                                <path d="M11.5539 23.4892H34.4462C34.7185 23.4892 34.9385 23.2692 34.9385 22.9969C34.9385 22.7246 34.7185 22.5046 34.4462 22.5046H12.7431L15.7308 19.5169C15.9231 19.3246 15.9231 19.0123 15.7308 18.82C15.5385 18.6277 15.2262 18.6277 15.0339 18.82L11.2046 22.6492C11.0631 22.7908 11.0216 23.0016 11.0985 23.1862C11.1754 23.3692 11.3554 23.4892 11.5539 23.4892V23.4892Z"
                                      fill="white"/>
                                <path d="M15.388 27.323C15.5141 27.323 15.6403 27.2753 15.7357 27.1784C15.928 26.9861 15.928 26.6738 15.7357 26.4815L11.9018 22.6476C11.7095 22.4553 11.3972 22.4553 11.2049 22.6476C11.0126 22.84 11.0126 23.1523 11.2049 23.3446L15.0387 27.1784C15.1357 27.2753 15.2618 27.323 15.388 27.323Z"
                                      fill="white"/>
                            </svg>
                        </div>
                        <svg class="navigation-line" xmlns="http://www.w3.org/2000/svg" width="1650" height="1"
                             viewBox="0 0 1650 1" fill="none">
                            <line x1="0.5" y1="-0.5" x2="1649.5" y2="-0.5"
                                  transform="matrix(-1 -8.74228e-08 -8.74228e-08 1 1650 1)"
                                  stroke="url(#paint0_linear_50_1222)" stroke-opacity="0.6" stroke-linecap="round"/>
                            <defs>
                                <linearGradient id="paint0_linear_50_1222" x1="0" y1="0" x2="1671.46" y2="0"
                                                gradientUnits="userSpaceOnUse">
                                    <stop stop-color="#B5B5B5" stop-opacity="0"/>
                                    <stop offset="1" stop-color="#B5B5B5"/>
                                </linearGradient>
                            </defs>
                        </svg>
                        <div class="swiper-button-next">
                            <svg xmlns="http://www.w3.org/2000/svg" width="46" height="46" viewBox="0 0 46 46" fill="none">
                                <path d="M13.2358 1H31.3008L45 13.9721V32.5538L32.3008 45H13.6992L1 32.5538V13.9721L13.2358 1Z"
                                      stroke="#B5B5B5"/>
                                <path d="M34.4461 23.4892H11.5538C11.2815 23.4892 11.0615 23.2692 11.0615 22.9969C11.0615 22.7246 11.2815 22.5046 11.5538 22.5046H33.2569L30.2692 19.5169C30.0769 19.3246 30.0769 19.0123 30.2692 18.82C30.4615 18.6277 30.7738 18.6277 30.9661 18.82L34.7954 22.6492C34.9369 22.7908 34.9784 23.0016 34.9015 23.1862C34.8246 23.3692 34.6446 23.4892 34.4461 23.4892Z"
                                      fill="white"/>
                                <path d="M30.612 27.323C30.4859 27.323 30.3597 27.2753 30.2643 27.1784C30.072 26.9861 30.072 26.6738 30.2643 26.4815L34.0982 22.6476C34.2905 22.4553 34.6028 22.4553 34.7951 22.6476C34.9874 22.84 34.9874 23.1523 34.7951 23.3446L30.9613 27.1784C30.8643 27.2753 30.7382 27.323 30.612 27.323Z"
                                      fill="white"/>
                            </svg>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="hero__overlay">
            <picture>
                <img loading="lazy" src="<?= home_url() . '/wp-content/uploads/2023/03/background-hero.png' ?>"
                     alt="background">
            </picture>
        </div>
    </section>
<?php else: ?>
    <h2 style="font-family: 'Mark', sans-serif;">Главный модуль</h2>
<?php endif; ?>
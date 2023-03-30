<?php

/*
Title: Описание продокта
Mode: preview
*/

?>

<?php
$blocks = get_field('blocks');
?>
<?php if (!is_admin()) : ?>
    <?php if (!empty($blocks)) : ?>
        <section class="description-product">
            <?php include get_template_directory() . '/assets/images/text-overlay-img.php' ?>
            <div class="container-xl">
                <div class="description-product__wrapper">
                    <?php foreach ($blocks as $key => $block) : ?>
                        <?php
                        $image = !empty($block['image']) ? $block['image'] : $images[$key] ?? null;
                        $headline = $block['headline'];
                        $subheadline = $block['subheadline'];
                        $description = $block['description'];
                        $guaranteePeriod = $block['guarantee_period'];
                        $guaranteeText = $block['guarantee_text'];
                        $additionalValue = $block['additional_value'];
                        $additionalText = $block['additional_text'];
                        ?>
                        <div class="description-product__block <?php if ($key & 1) : ?> odd <?php endif; ?>">
                            <div class="description-product__block-left">
                                <?php if ($image) : ?>
                                    <picture>
                                        <img class=" <?php if (!empty($guaranteePeriod) || !empty($guaranteeText)
                                            || !empty($additionalValue) || !empty($additionalText)) : ?> additional <?php endif; ?>"
                                             loading="lazy" src="<?= $image['url'] ?>" alt="<?= $image['title'] ?>">
                                    </picture>
                                <?php endif; ?>
                                <svg xmlns="http://www.w3.org/2000/svg" width="600" height="542" viewBox="0 0 600 542"
                                     fill="none">
                                    <path d="M481.69 0H118.31L0 133.335V408.665L118.31 542H481.69L600 408.665V133.335L481.69 0Z"
                                          fill="#4E5058"/>
                                </svg>
                                <div class="hexagon-wrapper">
                                    <?php if (!empty($guaranteePeriod) || !empty($guaranteeText)) : ?>
                                        <div class="hexagon-left">
                                            <div class="left-data">
                                                <p><?= $guaranteePeriod ?? '' ?></p>
                                                <p><?= $guaranteeText ?? '' ?></p>
                                            </div>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="128" height="128"
                                                 viewBox="0 0 128 128" fill="none">
                                                <g filter="url(#filter0_b_108_2857)">
                                                    <path d="M91.9612 1H40.2295L1 38.1474V91.3586L38.0361 127H91.3044L127 91.3586V38.1474L91.9612 1Z"
                                                          fill="#232323" fill-opacity="0.53"/>
                                                    <path d="M91.9612 1H40.2295L1 38.1474V91.3586L38.0361 127H91.3044L127 91.3586V38.1474L91.9612 1Z"
                                                          stroke="url(#paint0_linear_108_2857)"/>
                                                </g>
                                                <defs>
                                                    <filter id="filter0_b_108_2857" x="-10.8855" y="-10.8855"
                                                            width="149.771" height="149.771"
                                                            filterUnits="userSpaceOnUse"
                                                            color-interpolation-filters="sRGB">
                                                        <feFlood flood-opacity="0" result="BackgroundImageFix"/>
                                                        <feGaussianBlur in="BackgroundImageFix" stdDeviation="5.69277"/>
                                                        <feComposite in2="SourceAlpha" operator="in"
                                                                     result="effect1_backgroundBlur_108_2857"/>
                                                        <feBlend mode="normal" in="SourceGraphic"
                                                                 in2="effect1_backgroundBlur_108_2857" result="shape"/>
                                                    </filter>
                                                    <linearGradient id="paint0_linear_108_2857" x1="16" y1="8" x2="116"
                                                                    y2="148.5" gradientUnits="userSpaceOnUse">
                                                        <stop stop-color="#6A6A6A"/>
                                                        <stop offset="1" stop-color="#5B5B5B" stop-opacity="0"/>
                                                    </linearGradient>
                                                </defs>
                                            </svg>
                                        </div>
                                    <?php endif; ?>
                                    <?php if (!empty($additionalValue) || !empty($additionalText)) : ?>
                                        <div class="hexagon-right">
                                            <div class="right-data">
                                                <p><?= $additionalValue ?? '' ?></p>
                                                <p><?= $additionalText ?? '' ?></p>
                                            </div>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="128" height="128"
                                                 viewBox="0 0 128 128" fill="none">
                                                <g filter="url(#filter0_b_108_2857)">
                                                    <path d="M91.9612 1H40.2295L1 38.1474V91.3586L38.0361 127H91.3044L127 91.3586V38.1474L91.9612 1Z"
                                                          fill="#232323" fill-opacity="0.53"/>
                                                    <path d="M91.9612 1H40.2295L1 38.1474V91.3586L38.0361 127H91.3044L127 91.3586V38.1474L91.9612 1Z"
                                                          stroke="url(#paint0_linear_108_2857)"/>
                                                </g>
                                                <defs>
                                                    <filter id="filter0_b_108_2857" x="-10.8855" y="-10.8855"
                                                            width="149.771" height="149.771"
                                                            filterUnits="userSpaceOnUse"
                                                            color-interpolation-filters="sRGB">
                                                        <feFlood flood-opacity="0" result="BackgroundImageFix"/>
                                                        <feGaussianBlur in="BackgroundImageFix" stdDeviation="5.69277"/>
                                                        <feComposite in2="SourceAlpha" operator="in"
                                                                     result="effect1_backgroundBlur_108_2857"/>
                                                        <feBlend mode="normal" in="SourceGraphic"
                                                                 in2="effect1_backgroundBlur_108_2857" result="shape"/>
                                                    </filter>
                                                    <linearGradient id="paint0_linear_108_2857" x1="16" y1="8" x2="116"
                                                                    y2="148.5" gradientUnits="userSpaceOnUse">
                                                        <stop stop-color="#6A6A6A"/>
                                                        <stop offset="1" stop-color="#5B5B5B" stop-opacity="0"/>
                                                    </linearGradient>
                                                </defs>
                                            </svg>
                                        </div>
                                    <?php endif; ?>
                                </div>
                            </div>
                            <div class="description-product__block-right">
                                <?php if (!empty($headline)) : ?>
                                    <h3><?= $headline ?></h3>
                                <?php endif; ?>
                                <?php if (!empty($subheadline)) : ?>
                                    <p class="block-right__subheadline"><?= $subheadline ?></p>
                                <?php endif; ?>
                                <?php if (!empty($description)) : ?>
                                    <p class="block-right__description"><?= $description ?></p>
                                <?php endif; ?>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
            <svg class="description-product-line" xmlns="http://www.w3.org/2000/svg" width="1920" height="1"
                 viewBox="0 0 1920 1" fill="none">
                <line x1="0.5" y1="0.5" x2="1919.5" y2="0.500168" stroke="url(#paint0_linear_107_1642)"
                      stroke-opacity="0.6" stroke-linecap="round"/>
                <defs>
                    <linearGradient id="paint0_linear_107_1642" x1="0" y1="1" x2="1944.97" y2="1.00017"
                                    gradientUnits="userSpaceOnUse">
                        <stop stop-color="#B5B5B5" stop-opacity="0"/>
                        <stop offset="0.520833" stop-color="#B5B5B5"/>
                        <stop offset="1" stop-color="#B5B5B5" stop-opacity="0"/>
                    </linearGradient>
                </defs>
            </svg>
        </section>
    <?php endif; ?>
<?php else: ?>
    <h2 style="font-family: 'Mark', sans-serif;">Описание продокта</h2>
<?php endif; ?>
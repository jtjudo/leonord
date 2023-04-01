<?php get_header(); ?>

<?php
$ajax = new Ajax();
$actual_link =
$currentUrl = getCurrentUrl();
$urlParams = getParamsByUrl($currentUrl);
$keyword = $urlParams['keyword'] ?? '';
$products = $ajax->getSearchProduct($keyword);
?>

<section class="search-page">
    <div class="container">
        <div class="search-page-wrapper">
            <h1>Результаты поиска</h1>
            <h3 class="<?php if (empty($keyword)) : ?> js-hidden <?php endif; ?>">Отображение результатов по запросу
                "<span><?= $keyword ?></span>"</h3>
            <div class="search-input-container">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                    <path d="M22.943 22.3271L17.3536 16.7377C18.853 15.014 19.7607 12.765 19.7607 10.3069C19.7607 4.89601 15.3596 0.5 9.95385 0.5C4.54298 0.5 0.146973 4.90111 0.146973 10.3069C0.146973 15.7126 4.54808 20.1137 9.95385 20.1137C12.4119 20.1137 14.6609 19.206 16.3847 17.7067L21.974 23.296C22.1066 23.4286 22.2851 23.5 22.4585 23.5C22.6319 23.5 22.8104 23.4337 22.943 23.296C23.2082 23.0308 23.2082 22.5922 22.943 22.3271ZM1.51881 10.3069C1.51881 5.65588 5.30285 1.87694 9.94875 1.87694C14.5997 1.87694 18.3787 5.66098 18.3787 10.3069C18.3787 14.9528 14.5997 18.7419 9.94875 18.7419C5.30285 18.7419 1.51881 14.9579 1.51881 10.3069Z"
                          fill="white"/>
                </svg>
                <input placeholder="Введите запрос..." type="text" value="<?= $keyword ?>">
                <button class="btn" type="button">Поиск</button>
            </div>
        </div>
    </div>
    <div class="container-xl">
        <div class="search-product__wrapper">
            <div class="search-product__container">
                <?php include get_template_directory() . '/ajax-blocks/search-product-ajax.php' ?>
            </div>
            <?php include get_template_directory() . '/components/loader.php' ?>
        </div>
    </div>
</section>

<?php get_footer(); ?>

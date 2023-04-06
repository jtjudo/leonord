<?php

/*
Title: Хлебные крошки модуль
Mode: preview
*/

?>

<?php
$post = get_post();
/**
 * ['link' = ['title' => 'Главная', 'url' => 'http://'] ]
 */
$list = get_field('list') ?? '';
$breadcrumbClass = get_field('class');

$list = empty($list) ? [] : $list;
$isTax = false;

if (empty($list)) {
    if (is_tax()) {
        $terms = array_reverse(getTitlesForBreadcrumb(get_queried_object()));
        $isTax = true;
    }

    if (is_single()) {
        $term = $post;
        $terms = get_the_terms($post->ID, 'product-category');

        $terms = array_reverse(getTitlesForBreadcrumb($terms[0] ?? null));
        $isTax = true;
    }
}
?>

<?php if (!is_admin()) : ?>
    <section class="breadcrumb <?= $breadcrumbClass ?? '' ?>">
        <ul class="breadcrumb__list">
            <li class="breadcrumb__item">
                <a class="breadcrumb__link" href="/">Главная</a>
            </li>
            <?php if (!$isTax) : ?>
                <?php foreach ($list as $key => $item) : ?>
                    <?php $crumb = $item['link'] ?>
                    <li class="breadcrumb__item">
                        <a
                                class="breadcrumb__link"
                                href="<?= $crumb['url'] ?? '' ?>"
                        >
                            <?= $crumb['title'] ?? '' ?>
                        </a>
                    </li>
                <?php endforeach; ?>
            <?php else: ?>
                <?php foreach ($terms ?? [] as $item) : ?>
                    <li class="breadcrumb__item">
                        <a
                                class="breadcrumb__link"
                                href="<?= $item['url'] ?? '' ?>"
                        >
                            <?= $item['title'] ?? '' ?>
                        </a>
                    </li>
                <?php endforeach; ?>
            <?php endif; ?>

            <?php if (!is_tax()) : ?>
                <li class="breadcrumb__item">
                    <span class="breadcrumb__link"><?= $post->post_title ?></span>
                </li>
            <?php endif; ?>
        </ul>
    </section>
<?php else: ?>
    <h2 style="font-family: 'Mark', sans-serif;">Хлебные крошки модуль</h2>
<?php endif; ?>
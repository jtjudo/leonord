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
if (!empty($breadcrumbs)) {
    $list = $breadcrumbs;
} else {
    $list = get_field('list');
}

$list = empty($list) ? [] : $list;
?>

<?php if (!is_admin()) : ?>
    <section class="breadcrumb">
        <ul class="breadcrumb__list">
            <li class="breadcrumb__item">
                <a class="breadcrumb__link" href="/">Главная</a>
            </li>
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
            <li class="breadcrumb__item">
                <span class="breadcrumb__link"><?= $post->post_title ?></span>
            </li>
        </ul>
    </section>
<?php else: ?>
    <h2 style="font-family: 'Mark', sans-serif;">Хлебные крошки модуль</h2>
<?php endif; ?>
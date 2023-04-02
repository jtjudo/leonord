<?php

/*
Title: Хлебные крошки модуль
Mode: preview
*/

?>

<?php
$list = $breadcrumbs ?? get_field('list') ?? [];
$post = get_post();

//var_dump($list);
//die();
?>

<?php if (!is_admin()) : ?>
    <section class="breadcrumb">
        <ul class="breadcrumb__list">
            <li class="breadcrumb__item">
                <a class="breadcrumb__link" href="/">Главная</a>
            </li>
            <?php foreach ($list as $key => $item) : ?>
                <li class="breadcrumb__item">
                    <<?= $key === count($list) - 1 ? 'span' : 'a' ?>
                        class="breadcrumb__link"
                        <?php if (!empty($item['link'])) : ?>
                            href="<?= $item['link'] ?>"
                        <?php endif; ?>
                    >
                        <?= $item['title'] ?? $post->post_title ?>

                </<?= $key === count($list) - 1 ? 'span' : 'a' ?>>
                </li>
            <?php endforeach; ?>
        </ul>
    </section>
<?php else: ?>
    <h2 style="font-family: 'Mark', sans-serif;">Хлебные крошки модуль</h2>
<?php endif; ?>
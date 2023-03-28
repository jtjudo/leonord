<?php

/*
Title: Преимущества модуль
Mode: preview
*/

?>

<?php
$post = get_post();
$description = get_field('description', 'option');
$secondLogo = get_field('second_logo', 'option');
$overlay = get_field('overlay');
$list = get_field('list');
?>

<style>
    <?php if ($overlay) : ?>
        .features__right {
            background-image: url("<?= $overlay['url'] ?>");
        }
    <?php endif; ?>
    <?php if ($secondLogo) : ?>
        .features {
            background-image: url("<?= $secondLogo['url'] ?>");
        }
    <?php endif; ?>
</style>

<?php if (!is_admin()) : ?>
    <section class="features">
        <div class="container-xs">
            <div class="features__wrapper">
                <div class="features__left description-block">
                    <h1 class="features__heading heading"><?= $post->post_title ?></h1>
                    <?= $description ?? '' ?>
                </div>
                <div class="features__right">
                    <ul class="features__list">
                        <?php foreach ($list as $item) : ?>
                            <li class="features__item">
                                <p class="features__list-wrapper">
                                    <span class="features__value"><?= $item['value'] ?></span>
                                    <span class="features__description"><?= $item['title'] ?></span>
                                </p>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            </div>
        </div>
    </section>
<?php else: ?>
    <h2 style="font-family: 'Mark', sans-serif;">Преимущества модуль</h2>
<?php endif; ?>
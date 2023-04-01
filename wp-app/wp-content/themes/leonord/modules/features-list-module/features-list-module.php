<?php

/*
Title: Список преимуществ модуль
Mode: preview
*/

?>

<?php
    $list = get_field('list');
?>

<?php if (!is_admin()) : ?>
    <section class="features-list">
        <div class="container-xs">
            <div class="features-list__wrapper">
                <ul class="features-list__items">
                    <?php foreach($list as $key => $item) : ?>
                        <?php
                            $isOdd = $key % 2 !== 0;
                            $title = $item['title'];
                            $text = $item['text'];
                            $image = $item['img'];

                        ?>
                        <li class="features-list__item <?= $isOdd ? 'reverse' : '' ?> ">
                            <div class="features-list__left">
                                <h2 class="features-list__title heading"><?= $title ?? '' ?></h2>
                                <div class="features-list__text"><?= $text ?? '' ?></div>
                            </div>
                            <div class="features-list__right">
                                <?php if ($image) : ?>
                                    <img
                                        class="features-list__img"
                                        src="<?= $image['url'] ?>"
                                        alt="<?= $image['alt'] ?>"
                                    >
                                <?php endif; ?>
                            </div>
                        </li>
                    <?php endforeach; ?>
                </ul>
            </div>
        </div>
    </section>
<?php else: ?>
    <h2 style="font-family: 'Mark', sans-serif;">Список преимуществ модуль</h2>
<?php endif; ?>
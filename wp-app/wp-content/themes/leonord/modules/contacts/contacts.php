<?php

/*
Title: Контакты модуль
Mode: preview
*/

?>

<?php
$title = get_field('title');
$entity = get_field('entity');
$map = get_field('map');
$infoList = get_field('info');
?>

<?php if (!is_admin()) : ?>
    <section class="contacts-module">
        <div class="container-xs">
            <div class="contacts-module__wrapper">
                <div class="contacts-module__left">
                    <h1 class="heading contacts-module__title"><?= $title ?? '' ?></h1>
                    <p class="contacts-module__entity"><?= $entity ?? '' ?></p>
                    <ul class="info-list">
                        <?php foreach ($infoList as $item) : ?>
                            <?php
                                $icon = $item['icon'] ?? null;
                                $title = $item['title'] ?? '';
                                $text = $item['text'] ?? '';
                                $link = $item['link'] ?? null;
                            ?>
                            <li class="info-item" style="background-image: url('<?= $icon['url'] ?>')">
                                <h2 class="info-title"><?= $title ?></h2>
                                <?php if($link) : ?>
                                    <a class="info-text" href="<?= $link ?>"><?= $text ?></a>
                                <?php else : ?>
                                    <p class="info-text"><?= $text ?></p>
                                <?php endif; ?>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                </div>
                <div class="contacts-module__right">
                    <?= $map ?>
                </div>
            </div>
        </div>
    </section>
<?php else: ?>
    <h2 style="font-family: 'Mark', sans-serif;">Контакты модуль</h2>
<?php endif; ?>
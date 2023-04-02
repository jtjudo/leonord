<?php

/*
Title: Текст модуль
Mode: preview
*/

?>

<?php
$text = get_field('text');
?>

<?php if (!is_admin()) : ?>
    <section class="reach">
        <div class="container-xl">
            <?= $text ?>
        </div>
    </section>
<?php else: ?>
    <h2 style="font-family: 'Mark', sans-serif;">Текст модуль</h2>
<?php endif; ?>
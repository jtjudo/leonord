<?php
get_header();
$post = get_post();
$permalink = get_permalink($post);
$photo = get_field('photo', $post);
$printFile = get_field('file', $post);
$text = get_field('text', $post);
$secondLogo = get_field('second_logo', 'option');
$ajax = new Ajax();
$products = $ajax->getRandomProducts();
?>
<section class="article">
    <div class="container-xs">
        <h1 class="heading"><?= $post->post_title ?></h1>
        <div class="article__buttons">
            <?php if($printFile) : ?>
                <a class="btn" href="<?= $printFile['url'] ?>" download>Распечатать</a>
            <?php endif; ?>
            <a class="btn"
               href="mailto:your@email.ru?subject=<?= $post->post_title ?>&body=<?= $permalink ?>"
               target="_blank"
            >
                Отправить на почту
            </a>
        </div>
        <?php if ($photo): ?>
            <div class="article__photo-wrapper">
                <img class="article__photo" src="<?= $photo['url'] ?>">
                <?php if ($secondLogo) : ?>
                    <img class="article__photo-watermark" src="<?= $secondLogo['url'] ?>">
                <?php endif; ?>
            </div>
        <?php endif ?>
        <div class="article__text-wrapper">
            <?= $text ?? '' ?>
        </div>
        <div class="products-wrapper">
            <h2 class="heading products__title">Техника</h2>
            <?php include get_template_directory() . '/modules/popular-product/popular-product.php' ?>
        </div>


        <?php include  get_template_directory() . '/modules/news/news.php' ?>
    </div>
    <div class="wide-overlay">
        <?php include get_template_directory() . '/assets/images/text-overlay-img.php' ?>
    </div>
</section>

<?php
get_footer();
?>

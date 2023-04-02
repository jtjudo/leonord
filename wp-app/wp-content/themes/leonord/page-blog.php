<?php
get_header();

$cat_args = array(
    'orderby' => 'term_id',
    'order' => 'ASC',
    'hide_empty' => true,
);
/** @var WP_Term[] */
$categories = get_terms('news-category', $cat_args);
$ajax = new Ajax();

?>
<section class="blog">
    <div class="container-xs">
        <div class="blog__wrapper">
            <?php foreach ($categories as $category) : ?>
                <?php
                $news = $ajax->getNewsByCategory($category);
                ?>

                <h2 class="heading"><?= $category->name ?></h2>
                <div class="news-wrapper">
                    <?php foreach ($news as $post)  : ?>
                        <?php include get_template_directory() . '/components/news-card.php' ?>
                    <?php endforeach; ?>
                </div>

            <?php endforeach; ?>
        </div>
    </div>
    <div class="wide-overlay">
        <?php include get_template_directory() . '/assets/images/text-overlay-img.php' ?>
    </div>
</section>
<?php
get_footer();
?>



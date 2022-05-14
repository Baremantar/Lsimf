<?php

/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * Template Name: Homepage
 */

$firstSection = get_field("homepage_first-section");
$firstSectionText = $firstSection['homepage_first-section_text'];
$firstSectionCarousel = $firstSection['homepage_first-section_slider'];
?>

<?php get_header() ?>
<main class="home">
    <section class="carousel">
        <?php foreach ($firstSectionCarousel as $item) { ?>
        <img src="<?= $item?>">
        <?php } ?>
    </section>
    <section class="container">
        <?= $firstSectionText ?>
        <div>
            <button onclick="window.location.href = '<?= get_page_link(16);?>'">Примеры работ</button>
            <button onclick="window.location.href = '<?= get_page_link(19);?>'">Связаться с нами</button>
        </div>
    </section>
</main>
<?php get_footer() ?>
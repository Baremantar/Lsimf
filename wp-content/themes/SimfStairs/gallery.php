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
 * @package SimfStairs
 * Template Name: Gallery
 */



?>

<?php get_header() ?>
<main class="gallery">
    <section class="container">
        <h1>
            Примеры работ
        </h1>
        <div class="container_wrapper">
            <?= get_post_gallery()?>
        </div>
    </section>
    <section class="container popup">
        <div class="popup_background">

        </div>
        <div class="popup_content">
            <img src="">
        </div>
    </section>
</main>
<?php get_footer() ?>
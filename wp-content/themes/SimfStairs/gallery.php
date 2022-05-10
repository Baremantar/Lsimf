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

$my_posts = get_posts(array(
    'numberposts' => 5,
    'category'    => 0,
    'orderby'     => 'date',
    'order'       => 'DESC',
    'include'     => array(),
    'exclude'     => array(),
    'meta_key'    => '',
    'meta_value'  => '',
    'post_type'   => 'post',
    'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
));


?>

<?php get_header() ?>
<main class="gallery">
    <section class="container">
        <h1>
            Примеры работ
        </h1>
        <div class="container_wrapper">
            <?php foreach ($my_posts as $post) {
                setup_postdata($post);
            ?>
                <div>
                    <p><?= $post->post_title ?></p>
                    <?= ($post->post_content) ?>
                </div>
            <?php
            } ?>
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
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
 * Template Name: Contact
 */
?>

<?php get_header() ?>
<main class="contact">
    <section class="container">
        <p>
            Связаться с нами можно по телефону: <a href="tel:<?php
                                                                $data['tel'] = get_field('site_phone', 'option');
                                                                $exclude = array('/', '\\', ':', ';', '!', '@', '#', '$', '%', '^', '*', '(', ')', '_', '=', '|', '{', '}', '[', ']', '"', "'", '<', '>', ',', '?', '~', '`', '&', ' ', '.', '-');
                                                                $tel = str_replace($exclude, '', $data['tel']);
                                                                echo $tel;
                                                                ?>">
                <?= $data['tel'] ?>
            </a><br>
            Или заполнить форму ниже:
        </p>
        <form action="clickHandler(e)" id="form">
            <input type="text" id="name" placeholder="Имя" required>
            <input type="text" id="email" placeholder="E-mail" required>
            <input type="tel" id="phone" placeholder="Телефон" required>
            <textarea id="text" placeholder="Текст письма" required></textarea>
            <p id="thank">Спасибо за заявку, мы скоро с вами свяжемся!</p>
            <input type="submit" value="Отправить" id="submit">
        </form>
    </section>
</main>
<?php get_footer() ?>
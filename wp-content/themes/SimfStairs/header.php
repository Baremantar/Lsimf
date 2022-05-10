<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php the_title() ?></title>
    <?php wp_head() ?>
</head>

<body>
    <header>
        <div class="wrapper">
            <nav class="menu">
                <?php wp_nav_menu([
                    'theme_location'  => '',
                    'menu'            => 'Menu Header',
                    'container'       => '',
                    'container_class' => '',
                    'container_id'    => '',
                    'menu_class'      => '',
                    'menu_id'         => '',
                    'echo'            => true,
                    'fallback_cb'     => 'wp_page_menu',
                    'before'          => '',
                    'after'           => '',
                    'link_before'     => '',
                    'link_after'      => '',
                    'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                    'depth'           => 0,
                    'walker'          => '',
                ]); ?>
            </nav>
            <div class="burger">
                <span></span>
            </div>
            <a href="tel:<?php
                                $data['tel'] = get_field('site_phone', 'option');
                                $exclude = array('/', '\\', ':', ';', '!', '@', '#', '$', '%', '^', '*', '(', ')', '_', '=', '|', '{', '}', '[', ']', '"', "'", '<', '>', ',', '?', '~', '`', '&', ' ', '.', '-');
                                $tel = str_replace($exclude, '', $data['tel']);
                                echo $tel;
                                ?>">
                    <?= $data['tel'] ?>
                </a>
        </div>
    </header>
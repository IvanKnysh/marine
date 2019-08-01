<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="theme-color" content="#008fd5">
    <title><?php wp_title('|',1,'right'); ?><?php bloginfo('name'); ?></title>
    <?php wp_site_icon() ?>
    <?php wp_head(); ?>
</head>
<body>

<header>
    <div class="b1">
        <div class="container">
            <div class="flx">
                <div class="logo">
                    <a href="<?php echo home_url() ?>">
                        <img src="<?= get_template_directory_uri() ?>/img/logo.png" alt="">
                    </a>
                </div>
                <div class="contacts">
                    <p>Call Us: <a href="tel:+1 800 450 17 04">+1 800 450 17 04</a> |</p>
                    <div class="social">
                        <a href="#">
                            <img src="<?= get_template_directory_uri() ?>/img/facebook.png" alt="">
                        </a>
                        <a href="#">
                            <img src="<?= get_template_directory_uri() ?>/img/twitter.png" alt="">
                        </a>
                        <a href="#">
                            <img src="<?= get_template_directory_uri() ?>/img/skype.png" alt="">
                        </a>
                        <a href="#">
                            <img src="<?= get_template_directory_uri() ?>/img/glus.png" alt="">
                        </a>
                        <a href="#">
                            <img src="<?= get_template_directory_uri() ?>/img/vimeo.png" alt="">
                        </a>
                        <a href="#">
                            <img src="<?= get_template_directory_uri() ?>/img/linkedin.png" alt="">
                        </a>
                        <a href="#">
                            <img src="<?= get_template_directory_uri() ?>/img/instagram.png" alt="">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="b2">
        <div class="container">
            <div class="flx">
                <div class="nav">
                    <?php
                        wp_nav_menu( array(
                            'menu'            => '',
                            'container'       => false,
                            'menu_class'      => 'navbar-nav',
                            'theme_location'  => 'main_menu'
                        ) );
                    ?>
                </div>
                <div class="search">
                    <button></button>
                </div>
            </div>
        </div>
    </div>
</header>
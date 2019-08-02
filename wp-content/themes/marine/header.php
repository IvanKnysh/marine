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
                        <?php if(get_field('facebook', 'options')) { ?>
                            <a target="_blank" href="<?php the_field('facebook', 'options') ?>">
                                <img src="<?= get_template_directory_uri() ?>/img/facebook.png" alt="">
                            </a>
                        <?php } if(get_field('twitter', 'options')) { ?>
                            <a target="_blank" href="<?php the_field('twitter', 'options') ?>">
                                <img src="<?= get_template_directory_uri() ?>/img/twitter.png" alt="">
                            </a>
                        <?php } if(get_field('skype', 'options')) { ?>
                            <a target="_blank" href="<?php the_field('skype', 'options') ?>">
                                <img src="<?= get_template_directory_uri() ?>/img/skype.png" alt="">
                            </a>
                        <?php } if(get_field('google_plus', 'options')) { ?>
                            <a target="_blank" href="<?php the_field('google_plus', 'options') ?>">
                                <img src="<?= get_template_directory_uri() ?>/img/glus.png" alt="">
                            </a>
                        <?php } if(get_field('vimeo', 'options')) { ?>
                            <a target="_blank" href="<?php the_field('vimeo', 'options') ?>">
                                <img src="<?= get_template_directory_uri() ?>/img/vimeo.png" alt="">
                            </a>
                        <?php } if(get_field('linkedin', 'options')) { ?>
                            <a target="_blank" href="<?php the_field('linkedin', 'options') ?>">
                                <img src="<?= get_template_directory_uri() ?>/img/linkedin.png" alt="">
                            </a>
                        <?php } if(get_field('instagram', 'options')) { ?>
                            <a target="_blank" href="<?php the_field('instagram', 'options') ?>">
                                <img src="<?= get_template_directory_uri() ?>/img/instagram.png" alt="">
                            </a>
                        <?php } ?>
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
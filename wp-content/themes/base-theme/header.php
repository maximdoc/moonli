<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php wp_title(); ?></title>
    <link href="<?php echo get_template_directory_uri(); ?>/assets/css/normalize.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/style.min.css">
    <link rel="shortcut icon" href="<?php echo TEMPLATE_DIRECTORY_URI ?>/assets/images/favicon.svg" type="image/x-icon">
    <link rel="script" href="<?php echo get_template_directory_uri(); ?>/assets/js/main.js">
</head>
<body>

<header class="header">
    <div class="container">

        <div class="header__inner">

            <a class="header__link" href="<?php echo home_url('/'); ?>">
                <img class="header__logo" src="<?php the_field('header_logo', 'option'); ?>" alt="logo">
            </a>

            <?php
            $args = array(
                'theme_location' => 'primary',
                'container' => 'nav',
                'container_class' => 'menu',
                'menu_class' => 'menu__list',
                'walker' => new CustomWalkerNavMenu()
            );

            wp_nav_menu($args);
            ?>

            <button class="menu__btn">
                <span class="menu__btn-line"></span>
            </button>

            <div class="header__stake">
                <a class="header__stake-link" href="#">Stake Now</a>
            </div>

        </div>
    </div>

    <div class="top">
        <div class="container">
            <div class="top__inner">

                <div class="top__wrapper">
                    <h1 class="top__title">
                        <?php the_field('top_title') ?>
                    </h1>
                    <p class="top__text">
                        <?php the_field('top_text') ?>
                    </p>
                    <div class="top__arrow">
                        <a class="top__arrow-link" href="<?php the_field('top_link'); ?>">
                            <img class="top__arrow-img"
                                 src="<?php echo get_template_directory_uri(); ?>/assets/images/top-arrow.svg"
                                 alt="icon">
                        </a>
                    </div>
                </div>

            </div>
        </div>
    </div>

</header>

<style>
    @media (max-width: 1024px) {
        .header {
            padding: 55px 0 0;
        }
    }
</style>
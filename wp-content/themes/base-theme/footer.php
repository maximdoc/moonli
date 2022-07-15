<footer class="footer">
    <div class="container">

        <div class="footer__inner">

            <div class="footer__wrapper">
                <a class="footer__logo-link" href="<?php echo home_url('/'); ?>">
                    <img class="footer__logo" src="<?php the_field('footer_logo', 'option'); ?>" alt="img">
                </a>
            </div>

            <?php
            $args = array(
                'theme_location' => 'primary',
                'container' => 'nav',
                'container_class' => 'footer__menu-list',
                'menu_class' => 'footer__menu-list',
                'item_class' => 'footer__menu-item'
            );

            wp_nav_menu($args);
            ?>

            <a class="footer__link" href="<?php the_field('footer_url-link', 'option'); ?>">
                <?php the_field('footer_link', 'option'); ?>
            </a>
        </div>

        <div class="footer__copy">
            <p class="footer__copy-text"><?php the_field('footer_copy_text', 'option'); ?></p>
        </div>
    </div>
</footer>

<?php wp_footer(); ?>

<script src="<?php echo get_template_directory_uri(); ?>/assets/js/main.min.js"></script>
</body>
</html>

<style>
    .footer__menu-list li a {
        font-weight: 400;
        font-size: 16px;
        line-height: 24px;
        letter-spacing: -0.01em;
        color: #FFFFFF;
        padding-bottom: 3px;
        border-bottom: 2px solid transparent;
        transition: ease-in 0.5s;
    }

    .footer__menu-list li a:hover {
        border-bottom: 2px solid #fff;
    }

    @media (max-width: 570px) {

        .footer__menu-list li {
            width: 26%;
        }
    }

    @media (max-width: 300px) {
        .footer__menu-list li {
            width: 31%;
        }
    }
</style>
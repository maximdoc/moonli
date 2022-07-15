<?php /* Template Name: Home Template */ ?>

<?php get_header(); ?>

<div class="wrapper">
    <main class="main">

        <?php if (have_posts()) : ?>

        <section id="networks" class="networks">
            <div class="container">

                <div class="networks__inner">

                    <div class="networks__box">
                        <h3 class="networks__title"><?php the_field('networks_title'); ?></h3>

                        <div class="networks__wrapper-arrows">
                            <button type="button" class="slick__prev slick-arrow" style="">
                                <svg width="70" height="70" viewBox="0 0 70 70" fill="none"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <circle r="35" transform="matrix(4.37114e-08 -1 -1 -4.37114e-08 35 35)"
                                            fill="black"/>
                                    <path d="M39 27L31 35L39 43" stroke="white" stroke-width="1.5"/>
                                </svg>
                            </button>
                            <button type="button" class="slick__next slick-arrow" style="">
                                <svg width="70" height="70" viewBox="0 0 70 70" fill="none"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <circle cx="35" cy="35" r="35" transform="rotate(-90 35 35)" fill="black"/>
                                    <path d="M31 27L39 35L31 43" stroke="white" stroke-width="1.5"/>
                                </svg>
                            </button>
                        </div>
                    </div>

                    <div class="networks__slider">

                        <?php while (have_rows('networks_slider')) :the_row(); ?>

                            <div class="networks__slider-item">
                                <h4 class="networks__items-title"><?php the_sub_field('networks_slider_title'); ?></h4>
                                <div>
                                    <img class="networks__items-img"
                                         src="<?php the_sub_field('networks_slider_icon'); ?>"
                                         alt="img">
                                </div>
                            </div>

                        <?php endwhile; ?>

                    </div>

                </div>

            </div>
        </section>

        <section id="selection" class="support page__section">
            <div class="container">

                <div class="support__wrapper">
                    <h3 class="support__title"><?php the_field('support_title'); ?></h3>
                </div>

                <div class="support__inner">

                    <?php while (have_rows('support_items')) :the_row(); ?>

                        <div class="support__item">
                            <h5 class="support__items-text"><?php the_sub_field('support_items_title'); ?></h5>
                            <div>
                                <img class="support__items-img" src="<?php the_sub_field('support_items_img'); ?>"
                                     alt="img">
                            </div>
                        </div>

                    <?php endwhile; ?>

                    <div class="support__item-box">
                        <h4 class="support__items-title"><?php the_field('support_items_title') ?></h4>
                    </div>

                </div>

            </div>
        </section>

        <section id="giving" class="giving">
            <div class="container">

                <div class="giving__inner">

                    <div class="giving__item">
                        <h3 class="giving__title"><?php the_field('giving_title'); ?></h3>
                        <p class="giving__text"><?php the_field('giving_text'); ?></p>
                        <div class="giving__wrapper-box">
                            <a class="giving__link"
                               href="<?php the_field('giving_link'); ?>"><?php the_field('giving_link_text'); ?></a>
                            <div>
                                <img class="giving__img" src="<?php the_field('giving_img'); ?>" alt="img">
                            </div>
                        </div>
                    </div>

                    <div class="giving__item">

                        <div class="giving__items-box">

                            <div class="giving__wrapper-block1">
                                <?php while (have_rows('giving_block_1')) :the_row(); ?>
                                    <div>
                                        <img class="giving__items-img"
                                             src="<?php the_sub_field('giving_block_img'); ?>"
                                             alt="icon">
                                    </div>
                                <?php endwhile; ?>
                            </div>

                        </div>

                        <div class="giving__items-box">
                            <div class="giving__wrapper-block2">
                                <?php while (have_rows('giving_block_2')) :the_row(); ?>
                                    <div>
                                        <img class="giving__items-img"
                                             src="<?php the_sub_field('giving_block_img'); ?>"
                                             alt="icon">
                                    </div>
                                <?php endwhile; ?>

                            </div>
                        </div>

                        <p class="giving__items-text"><?php the_field('giving_block_text'); ?></p>

                    </div>

                </div>

            </div>
        </section>

        <section id="get" class="get">
            <div class="container">

                <div class="get__inner">

                    <div class="get__item">
                        <h3 class="get__title"><?php the_field('get_title') ?></h3>
                        <p class="get__text"><?php the_field('get_text') ?></p>
                        <ul class="get__social-list">

                            <?php while (have_rows('get_social')) :the_row(); ?>
                                <li class="get__social-item">
                                    <a class="get__social-link" href="<?php the_sub_field('get_social_link'); ?>">
                                        <?php the_sub_field('get_social_icon'); ?>
                                    </a>
                                </li>
                            <?php endwhile; ?>

                        </ul>
                    </div>

                    <div class="get__wrapper">
                        <img class="get__wrapper-img"
                             src="<?php the_field('get_img'); ?>" alt="img">
                    </div>

                </div>

            </div>
        </section>

    </main>
</div>

<?php endif; ?>

<?php get_footer(); ?>

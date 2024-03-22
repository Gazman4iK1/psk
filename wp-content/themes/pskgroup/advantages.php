<?php
/**
 * Template Name: advantages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package astimer
 */

get_header();
?>

    <div class="wrapper">

        <main class="advantages">

            <div class="container information">
                <div class="information__link">
                    <p><a href="<?php echo home_url() ?>">Главная</a></p>
                    <p>/</p>
                    <p><?php the_title() ?></p>
                </div>
            </div>

            <h3 class="advantages__title">
                <?php the_field('title'); ?>
            </h3>

            <p class="advantages__text">
                <?php the_field('advantages-text'); ?>
            </p>

            <div class="container advantages__list">

                <?php if (have_rows('advantages')) : ?>
                    <?php while (have_rows('advantages')) : the_row(); ?>
                        <div class="advantage">

                            <div class="advantage__number">
                                <p><?php the_sub_field('advantage-number'); ?></p>
                            </div>

                            <div class="advantage__text">
                                <?php the_sub_field('advantage-text'); ?>
                            </div>

                        </div>
                    <?php endwhile; ?>
                <?php endif; ?>

            </div>

            <div class="container production">

                <h3 class="production__title">
                    <?php the_field('img-title'); ?>
                </h3>

                <div class="production__list">

                    <?php $images_images = get_field('images'); ?>
                    <?php if ($images_images) : ?>
                        <?php foreach ($images_images as $images_image): ?>
                            <div class="production__point">
                                <img src="<?php echo esc_url($images_image['sizes']['thumbnail']); ?>"
                                     alt="<?php echo esc_attr($images_image['alt']); ?>"/>
                            </div>
                        <?php endforeach; ?>
                    <?php endif; ?>

                </div>

            </div>

        </main>

    </div>

<?php

get_footer();

<?php
/**
 * Template Name: home
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package astimer
 */


?>

    <div class="wrapper">
        <section class="section"
                 style="background-image: url('<?php bloginfo('template_url'); ?>/assets/img/mainbg.jpg');">
            <?php get_header(); ?>
            <div class="container section__container">
                <h2 class="section__title">
                    <?php the_field( 'section-title' ); ?>
                </h2>
                <p class="section__text">
                    <?php the_field( 'section-text' ); ?>
                </p>
                <button class="section__button"><?php the_field( 'section-btn' ); ?></button>
            </div>
        </section>

        <main class="page">

            <div class="products"
                 style="background-image: url('<?php bloginfo('template_url'); ?>/assets/img/beam.jpg');">

                <h3 class="products__title"><?php the_field( 'products-title' ); ?></h3>

                <div class="mySwiper swiper">
                    <div class="container products__flex swiper-wrapper">

                        <?php
                        global $post;

                        $myposts = get_posts([
                            'post_type' => 'post',
                            'posts_per_page' => '4',

                        ]);

                        if ($myposts) {
                            foreach ($myposts as $post) {
                                setup_postdata($post);
                                ?>
                                <div class="product swiper-slide">
                                    <div class="product__container">

                                        <?php the_post_thumbnail() ?>

                                        <a href="<?php the_permalink() ?>" class="product__name"><?php the_title() ?></a>
                                    </div>
                                </div>
                                <?php
                            }
                        }

                        wp_reset_postdata(); // Сбрасываем $post
                        ?>

                    </div>
                </div>


            </div>

            <div class="why" style="background-image: url('<?php bloginfo('template_url'); ?>/assets/img/why.jpg');">

                <h3 class="why__title">
                    <?php the_field( 'why-title' ); ?>
                </h3>

                <div class="container why__flex">

                    <?php if ( have_rows( 'why' ) ) : ?>
                        <?php while ( have_rows( 'why' ) ) : the_row(); ?>

                            <div class="why__point">
                                <div class="why__number">
                                    <p><?php the_sub_field( 'why-number' ); ?></p>
                                </div>
                                <div class="why__text">
                                    <?php the_sub_field( 'why-text' ); ?>
                                </div>
                            </div>
                        <?php endwhile; ?>
                    <?php else : ?>
                        <?php // No rows found ?>
                    <?php endif; ?>

                </div>

            </div>

            <div class="leave">

                <h3 class="leave__title">
                    <?php the_field( 'form-title' ); ?>
                </h3>

                <p class="leave__text">
                    <?php the_field( 'form-text' ); ?>
                </p>

                <?php echo do_shortcode('[contact-form-7 id="4faf28a" title="leaveform"]') ?>

            </div>

        </main>


    </div>

<?php

get_footer();

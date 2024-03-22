<?php
/**
 * Template Name: projects
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package astimer
 */

get_header();
?>

    <div class="wrapper">

        <main class="main">

            <div class="container information-product">

                <div class="information-product__link">
                    <p><a href="<?php echo home_url(); ?>">Главная</a></p>
                    <p>/</p>
                    <p><?php the_title() ?></p>
                </div>
            </div>

            <div class="container projects">

                <h3 class="projects__title">
                    <?php the_title() ?>
                </h3>

                <div class="projects__flex">

                    <?php
                    global $post;

                    $myposts = get_posts([
                        'post_type' => 'project',
                        'numberposts' => -1,
                    ]);

                    if ($myposts) {
                        foreach ($myposts as $post) {
                            setup_postdata($post);
                            ?>
                            <div class="project">

                                <?php the_post_thumbnail(); ?>

                                <span><?php the_title() ?></span>
                            </div>
                            <?php
                        }
                    }

                    wp_reset_postdata(); // Сбрасываем $post
                    ?>

                </div>

            </div>

        </main>

    </div>

<?php

get_footer();

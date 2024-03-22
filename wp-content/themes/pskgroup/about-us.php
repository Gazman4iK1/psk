<?php
/**
 * Template Name: about-us
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package astimer
 */

get_header();
?>

    <div class="wrapper">


        <main class="company">

            <div class="container company__container">

                <div class="information-product">
                    <div class="information-product__link">
                        <p><a href="<?php echo home_url() ?>">Главная</a></p>
                        <p>/</p>
                        <p><?php the_title()?></p>
                    </div>
                </div>

                <h3 class="company__title">
                    <?php the_title()?>
                </h3>

                <div class="company__text">

                    <?php if ( have_rows( 'company-info' ) ) : ?>
                        <?php while ( have_rows( 'company-info' ) ) : the_row(); ?>
                        <p><?php the_sub_field( 'company-info-text' ); ?></p>
                        <?php endwhile; ?>
                    <?php endif; ?>
                </div>

                <div class="company__conditions">
                    <h3>
                        <?php the_field( 'conditions-title' ); ?>
                    </h3>

                    <ul>

                        <?php if ( have_rows( 'conditions' ) ) : ?>
                            <?php while ( have_rows( 'conditions' ) ) : the_row(); ?>
                            <li>
                                <?php the_sub_field( 'condition' ); ?>
                            </li>
                            <?php endwhile; ?>
                        <?php endif; ?>
                    </ul>
                </div>


            </div>

        </main>

    </div>

<?php

get_footer();

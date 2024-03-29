<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package PSKgroup
 */

get_header();
?>

    <div class="wrapper">

        <main class="main">

            <div class="container main__container">

                <div class="filter">
                    <h4 class="filter__title">
                        Продукция
                    </h4>
                    <div class="filter__flex">

                        <?php
                        $args = array(
                            'taxonomy' => 'category',
                            'post_type' => 'post',
                        );

                        $categories = get_categories($args);

                        foreach ($categories as $category) {
                            $category_description = $category->description;

                            $taxonomy_prefix = 'category';


                            $term_id = $category->term_id;

                            $term_id_prefixed = $taxonomy_prefix .'_'. $term_id;
                            ?>

                            <a href="/produkcziya/?cat=<?php echo $category->slug; ?>" class="filter__category">
                                <div class="filter__container">
                                    <p><?php echo $category->name; ?></p>
                                    <?php $filter_img = get_field( 'filter-img', 'option' ); ?>
                                    <?php if ( $filter_img ) : ?>
                                        <img src="<?php echo esc_url( $filter_img['url'] ); ?>" alt="" />
                                    <?php endif; ?>
                                </div>
                            </a>


                            <?php
                        }
                        // Далее добавьте остальной код страницы
                        ?>

                    </div>
                </div>

                <div class="close-open">
                    <div class="active open">
                        <i class="fa-solid fa-arrow-right"></i>
                    </div>
                    <div class="close">
                        <i class="fa-solid fa-arrow-left"></i>
                    </div>
                </div>

                <div class="information-product">

                    <div class="information-product__link">
                        <p><a href="<?php echo home_url()?>">Главная</a></p>
                        <p>/</p>
                        <p>Продукция</p>
                        <p>/</p>
                        <p><a href="">Лотки металлические</a></p>
                        <p>/</p>
                        <p><?php the_title()?></p>
                    </div>

                    <div class="information-product__product">
                        <div class="information-product__product__info">
                            <div class="img">
                                <?php the_post_thumbnail();?>
                            </div>

                            <div class="information-product__product__text">
                                <h4><?php the_title()?></h4>
                                <p>
                                    <?php the_field( 'head-info' ); ?>
                                </p>
                            </div>
                        </div>

                        <div class="information-product__product__characteristics">

                            <div class="information-product__product__advantages">
                                <h4 class="information-product__product__title">
                                    <?php the_field( 'advantages-title' ); ?>
                                </h4>

                                <ul>

                                    <?php if ( have_rows( 'advantages' ) ) : ?>
                                        <?php while ( have_rows( 'advantages' ) ) : the_row(); ?>
                                        <li>
                                            <?php the_sub_field( 'advantage' ); ?>
                                        </li>
                                        <?php endwhile; ?>
                                    <?php endif; ?>
                                </ul>
                            </div>

                            <div class="information-product__product__dimensions">
                                <h4 class="information-product__product__title">
                                    <?php the_field( 'size-title' ); ?>
                                </h4>

                                <ul>
                                    <?php if ( have_rows( 'sizes' ) ) : ?>
                                        <?php while ( have_rows( 'sizes' ) ) : the_row(); ?>
                                        <li>
                                            <?php the_sub_field( 'size' ); ?>
                                        </li>
                                        <?php endwhile; ?>
                                    <?php endif; ?>
                                </ul>
                            </div>

                            <div class="information-product__product__options">
                                <h4 class="information-product__product__title">
                                    <?php the_field( 'variants-title' ); ?>
                                </h4>

                                <ul>
                                    <?php if ( have_rows( 'variants' ) ) : ?>
                                        <?php while ( have_rows( 'variants' ) ) : the_row(); ?>
                                        <li>
                                            <?php the_sub_field( 'variant' ); ?>
                                        </li>
                                        <?php endwhile; ?>
                                    <?php endif; ?>
                                </ul>
                            </div>

                        </div>
                    </div>

                </div>

            </div>

        </main>

    </div>

<?php
get_footer();

<?php
/**
 * Template Name: products
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package astimer
 */

get_header();
?>

    <div class="wrapper">

        <main class="main">

            <?php
            $cat = $_GET["cat"];
            ?>

            <div class="container main__container">

                <div class="filter">
                    <h3 class="filter__title">
                        Продукция
                    </h3>
                    <div class="filter__flex">

                        <?php
                        $args = array(
                            'taxonomy' => 'category',
                            'post_type' => 'post',
                        );

                        $categories = get_categories($args);

                        foreach ($categories as $category) {
                            $category_description = $category->description;

                            ?>

                            <a href="/produkcziya/?cat=<?php echo $category->slug; ?>" class="filter__category">
                                <div class="filter__container">
                                    <p><?php echo $category->name; ?></p>
                                    <img src="<?php bloginfo('template_url'); ?>/assets/img/filter.svg" alt="">
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

                <div class="container information-product">

                    <div class="information-product__link">
                        <p><a href="<?php echo home_url(); ?>">Главная</a></p>
                        <p>/</p>
                        <p><?php the_title(); ?></p>
                        <p>/</p>
                        <p>Лотки металлические</p>
                    </div>

                    <?php

                    $category = get_category_by_slug($cat);

                    if ($category) {
                        $category_id = $category->term_id;
                        echo 'ID категории для слага "' . $cat . '" : ' . $category_id;
                    } else {
                        echo 'Категория с указанным слагом не найдена.';
                    }

                    $taxonomy_prefix = 'category';

                    $term_id_prefixed = $taxonomy_prefix .'_'. $category_id;
                    ?>
                    <?php echo $cat ; ?>

                        <h3 class="information-product__title">
                            <?php the_field( 'filter-title', $term_id_prefixed ); ?>
                        </h3>


                    <div class="information-product__text">
                        <p>
                            Лотки для кабеля относятся к электромонтажным изделиям, использующимся при прокладке
                            кабельных
                            трасс и монтаже электропроводки с напряжением до 1000 В.
                        </p>
                        <p>
                            Они служат опорой и защищают проводники от механических повреждений, сохраняют эстетичность
                            помещения.
                        </p>
                        <p>
                            Разнообразный и богатый опыт новая модель организационной деятельности требуют определения и
                            уточнения дальнейших направлений развития. Разнообразный и богатый опыт новая модель
                            организационной деятельности требуют определения и уточнения дальнейших направлений
                            развития.
                        </p>
                    </div>

                    <div class="mySwiper2 swiper">
                        <div class="container main__products swiper-wrapper">

                            <?php
                            global $post;

                            $myposts = get_posts([
                                'post_type' => 'post',
                                'posts_per_page' => '-1',
                                'category_name' => $cat,

                            ]);

                            if ($myposts) {
                                foreach ($myposts as $post) {
                                    setup_postdata($post);
                                    ?>
                                    <div class="main__product swiper-slide">
                                        <div class="main__product__container">

                                            <?php the_post_thumbnail() ?>

                                            <a href="<?php the_permalink() ?>" class="main__product__name"><?php the_title() ?></a>
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

            </div>

        </main>


    </div>

<?php

get_footer();

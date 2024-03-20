<?php
/**
 * Template Name: home
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package astimer
 */

get_header();
?>

1234514121

    <div class="wrapper">
        <section class="section" style="background-image: url('<?php bloginfo('template_url'); ?>/assets/img/mainbg.jpg');">

            <div class="container section__container">
                <h2 class="section__title">
                    ЗАВОД ЭЛЕКТРОМОНТАЖНЫХ РЕШЕНИЙ
                </h2>
                <p class="section__text">
                    Производство кабеленесущих систем
                </p>
                <button class="section__button">ПОДРОБНЕЕ</button>
            </div>
        </section>

        <main class="page">

            <div class="products">

                <h3 class="products__title">наша продукция</h3>

                <div class="mySwiper swiper">
                    <div class="container products__flex swiper-wrapper">

                        <div class="product swiper-slide">
                            <div class="product__container">

                                    <source srcset="<?php bloginfo('template_url'); ?>/assets/img/product1.webp" type="image/webp">
                                    <img src="<?php bloginfo('template_url'); ?>/assets/img/product1.jpg" alt="" class="products__img">

                                <a href="#" class="product__name">КРЫШКИ ЛОТКОВ</a>
                            </div>

                        </div>

                        <div class="product swiper-slide">
                            <div class="product__container">

                                    <source srcset="<?php bloginfo('template_url'); ?>/assets/img/product2.webp" type="image/webp">
                                    <img src="<?php bloginfo('template_url'); ?>/assets/img/product2.jpg" alt="" class="products__img">

                                <a href="#" class="product__name">ЛОТКИ ПЕРФОРИРОВАННЫЕ</a>
                            </div>

                        </div>

                        <div class="product swiper-slide">
                            <div class="product__container">
                                <picture>
                                    <source srcset="<?php bloginfo('template_url'); ?>/assets/img/product3.webp" type="image/webp">
                                    <img src="<?php bloginfo('template_url'); ?>/assets/img/product3.jpg" alt="" class="products__img"></picture>

                                <a href="#" class="product__name">КРЫШКИ ЛОТКОВ</a>
                            </div>

                        </div>

                        <div class="product swiper-slide">
                            <div class="product__container">
                                <picture>
                                    <source srcset="<?php bloginfo('template_url'); ?>/assets/img/product4.webp" type="image/webp">
                                    <img src="<?php bloginfo('template_url'); ?>/assets/img/product4.jpg" alt="" class="products__img"></picture>

                                <a href="#" class="product__name">КРЫШКИ ЛОТКОВ</a>
                            </div>

                        </div>

                    </div>
                </div>


            </div>

            <div class="why">

                <h3 class="why__title">
                    ПОЧЕМУ НАС ВЫБИРАЮТ
                </h3>

                <div class="container why__flex">

                    <div class="why__point">

                        <div class="why__number">
                            <p>1</p>
                        </div>

                        <div class="why__text">
                            Подбор лотков 3м, 6м и 9м
                        </div>

                    </div>

                    <div class="why__point">

                        <div class="why__number">
                            <p>2</p>
                        </div>

                        <div class="why__text">
                            Формируем доставку
                        </div>

                    </div>

                    <div class="why__point">

                        <div class="why__number">
                            <p>3</p>
                        </div>

                        <div class="why__text">
                            Высокое качество изделий
                        </div>

                    </div>

                    <div class="why__point">

                        <div class="why__number">
                            <p>4</p>
                        </div>

                        <div class="why__text">
                            Закрытие потребности - 100%
                        </div>

                    </div>

                    <div class="why__point">

                        <div class="why__number">
                            <p>5</p>
                        </div>

                        <div class="why__text">
                            Сертифицированная продукция
                        </div>

                    </div>

                    <div class="why__point">

                        <div class="why__number">
                            <p>6</p>
                        </div>

                        <div class="why__text">
                            Короткие сроки
                        </div>

                    </div>

                </div>

            </div>

            <div class="leave">

                <h3 class="leave__title">
                    ОСТАВЬТЕ ЗАЯВКУ
                </h3>

                <p class="leave__text">
                    и получите коммерческое предложение
                </p>

                <form action="" class="leave__form">

                    <div class="leave__inputs">
                        <p class="leave__form-text">
                            Телефон
                        </p>
                        <input class="leave__input" type="tel" placeholder="Ваш номер телефона">
                    </div>
                    <div class="leave__inputs">
                        <p class="leave__form-text">
                            E-mail
                        </p>
                        <input class="leave__input" type="email" placeholder="Ваша почта">
                    </div>
                    <div class="leave__inputs-file">
                        <p class="leave__form-text-file">Прикрепить спецификацию</p>
                        <label>
                            <img src="<?php bloginfo('template_url'); ?>/assets/img/file.svg" alt="">
                            <input type="file">
                        </label>
                    </div>
                    <div class="leave__form-button">
                        <button>ОТПРАВИТЬ</button>
                    </div>

                </form>

            </div>

        </main>


    </div>

<?php

get_footer();

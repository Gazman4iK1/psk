<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package PSKgroup
 */

?>

<footer class="footer">
    <div class="container footer__container">
        <div class="footer__flex">

            <div class="footer__con-logo">
                <a href="#" class="logo footer__logo"><img src=".<?php bloginfo('template_url'); ?>/assets/img/footerlogo.svg" alt=""></a>
            </div>

            <nav class="footer__nav">
                <ul class="footer__list">
                    <li class="footer__item"><a href="../aboutus.html" class="footer__link">О компании</a></li>
                    <li class="footer__item"><a href="../advantages.html" class="footer__link">Наши
                            преимущества</a>
                    </li>
                    <li class="footer__item"><a href="../products.html" class="footer__link">Продукция</a></li>
                </ul>
            </nav>

            <div class="contacts">
                <div class="phone">
                    <img src=".<?php bloginfo('template_url'); ?>/assets/img/phone.svg" alt="">
                    <p>8 (8552) 47-40-42</p>
                </div>
                <div class="mail">
                    <img src=".<?php bloginfo('template_url'); ?>/assets/img/mail.svg" alt="">
                    <p>lotkipsk@mail.ru</p>
                </div>
            </div>

            <button class="buttons">ПОДРОБНЕЕ</button>
        </div>
    </div>
</footer>

<?php wp_footer(); ?>

</body>
</html>

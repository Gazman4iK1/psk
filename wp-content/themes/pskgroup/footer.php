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

<footer class="footer" style="background-image: url('<?php bloginfo('template_url'); ?>/assets/img/footerbg.jpg');">
    <div class="container footer__container">
        <div class="footer__flex">

            <div class="footer__con-logo">
                <a href="<?php echo home_url(); ?>" class="logo footer__logo"><img src="<?php bloginfo('template_url'); ?>/assets/img/footerlogo.svg" alt=""></a>
            </div>

            <nav class="footer__nav">
                <?php
                wp_nav_menu(
                    array(
                        'theme_location' => 'footermenu',
                        'container' => null,
                        'menu_class' => 'footer__list'
                    )
                );
                ?>
            </nav>

            <div class="contacts">
                <div class="phone">
                    <img src="<?php bloginfo('template_url'); ?>/assets/img/phone.svg" alt="">
                    <p>8 (8552) 47-40-42</p>
                </div>
                <div class="mail">
                    <img src="<?php bloginfo('template_url'); ?>/assets/img/mail.svg" alt="">
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

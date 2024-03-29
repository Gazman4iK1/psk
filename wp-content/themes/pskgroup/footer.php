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
                <a href="<?php echo home_url(); ?>" class="logo footer__logo">
                    <?php $footer_logo = get_field( 'footer-logo', 'option' ); ?>
                    <?php if ( $footer_logo ) : ?>
                        <img src="<?php echo esc_url( $footer_logo['url'] ); ?>" alt="" />
                    <?php endif; ?>
                </a>
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
                    <?php $phone_img = get_field( 'phone-img', 'option' ); ?>
                    <?php if ( $phone_img ) : ?>
                        <img src="<?php echo esc_url( $phone_img['url'] ); ?>" alt="" />
                    <?php endif; ?>
                    <p><?php the_field( 'phone-text', 'option' ); ?></p>
                </div>
                <div class="mail">
                    <?php $mail_img = get_field( 'mail-img', 'option' ); ?>
                    <?php if ( $mail_img ) : ?>
                        <img src="<?php echo esc_url( $mail_img['url'] ); ?>" alt="" />
                    <?php endif; ?>
                    <p><?php the_field( 'mail-text', 'option' ); ?></p>
                </div>
            </div>

            <button class="buttons"><?php the_field( 'footer-btn-text', 'option' ); ?></button>
        </div>
    </div>
</footer>

<?php wp_footer(); ?>

</body>
</html>

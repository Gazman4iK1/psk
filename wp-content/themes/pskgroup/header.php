<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package PSKgroup
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<header class="header">
    <div class="container header__container">
        <div class="cont-logo">
            <a href="<?php echo home_url(); ?>" class="logo header__logo">
                <?php $header_logo = get_field( 'header-logo', 'option' ); ?>
                <?php if ( $header_logo ) : ?>
                    <img src="<?php echo esc_url( $header_logo['url'] ); ?>"/>
                <?php endif; ?>
            </a>
        </div>
        <button class="header__burger icon-menu">
            <span></span>
        </button>
        <div class="cont-menu">
            <nav class="header__menu">
                <?php
                wp_nav_menu(
                    array(
                        'theme_location' => 'headmenu',
                        'container' => null,
                        'menu_class' => 'menu__list'
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

            <button class="header__button"><?php the_field( 'header-btn-text', 'option' ); ?></button>
        </div>
    </div>
</header>
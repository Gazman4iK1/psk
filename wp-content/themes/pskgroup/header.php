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
            <a href="<?php echo home_url(); ?>" class="logo header__logo"><img src="<?php bloginfo('template_url'); ?>/assets/img/LOGO4.svg" alt=""></a>
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
                    <img src="<?php bloginfo('template_url'); ?>/assets/img/phone.svg" alt="">
                    <p>8 (8552) 47-40-42</p>
                </div>
                <div class="mail">
                    <img src="<?php bloginfo('template_url'); ?>/assets/img/mail.svg" alt="">
                    <p>lotkipsk@mail.ru</p>
                </div>
            </div>

            <button class="header__button">ЗАКАЗАТЬ ЗВОНОК</button>
        </div>
    </div>
</header>
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
            <a href="../index.html" class="logo header__logo"><img src="../images/LOGO4.svg" alt=""></a>
        </div>
        <button class="header__burger icon-menu">
            <span></span>
        </button>
        <div class="cont-menu">
            <nav class="header__menu">
                <ul class="menu__list">
                    <li class="menu__item"><a href="../aboutus.html" class="menu__link">О компании</a></li>
                    <li class="menu__item"><a href="../products.html" class="menu__link">Продукция</a></li>
                    <li class="menu__item"><a href="../projects.html" class="menu__link">Наши проекты</a></li>
                </ul>
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
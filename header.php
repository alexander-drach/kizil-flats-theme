<!DOCTYPE html>
<html <?php language_attributes() ?>>

<head>
    <meta charset="<?php bloginfo('charset') ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php the_title() ?></title>
    <?php wp_head() ?>
</head>

<body>
<div class="wrapper">
    <header class="header">
        <div class="container">
            <div class="header__inner">
                <button class="hamb" type="button" aria-label="открыть/закрыть меню"></button>
                <a class="logo logo--header" href="/">
                    <img width="51" height="47" src="<?php echo get_template_directory_uri() ?>/assets-gulp/build/img/svg/logo.svg" alt="Логотип Квартиры посуточно в Кызыле">
                </a>
                <nav class="nav">
                  <?php wp_nav_menu( array( 'container' => 'none', 'menu_class' => 'list main-menu', 'theme_location' => 'header' ) ); ?>
                    <ul class="list header__contact">
                        <li class="header__whatsapp">
                          <?php require 'includes/link-whatsapp.php' ?>
                        </li>
                        <li class="header__phone">
                          <?php require 'includes/link-phone.php' ?>
                        </li>
                        <li class="header__email">
                          <?php require 'includes/link-email.php' ?>
                        </li>
                    </ul>
                </nav>
                <div class="mobile-header-phone">
                  <?php require 'includes/link-phone.php' ?>
                </div>
            </div>
        </div>
    </header>
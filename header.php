<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Кызыл квартиры посуточно</title>
    <link rel="stylesheet" href="assets-gulp/build/css/style.min.css">
</head>

<body>
    <div class="wrapper">
        <header class="header">
            <div class="container">
                <div class="header__inner">
                    <button class="hamb" type="button" aria-label="открыть/закрыть меню"></button>
                    <a class="logo logo--header" href="/">
                        <img width="51" height="47" src="assets-gulp/build/img/svg/logo.svg" alt="Логотип Квартиры посуточно в Кызыле">
                    </a>
                    <nav class="nav">
                        <ul class="list main-menu">
                            <li class="main-menu__item">
                                <a href="page-about.php">О нас</a>
                            </li>
                            <li class="main-menu__item">
                                <a href="page-rules.php">Правила проживания</a>
                            </li>
                            <li class="main-menu__item">
                                <a href="page-booking.php">Бронирование и оплата</a>
                            </li>
                        </ul>
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
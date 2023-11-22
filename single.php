<?php get_header(); ?>
<?php
$flat_features = [
    'Wi Fi',
    'Телевизор',
    'Кабельное TV',
    'Вентилятор',
    'Утюг',
    'Стиральная машина',
    'Посуда ',
    'Пылесос',
    'Фен',
    'Двуспальная кровать',
    'Печь СВЧ',
    'Холодильник',
    'Электроплита',
    'Духовой шкаф',
    'Электрочайник',
    'Документы для командировочных'
] ?>
<main class="single-content">
    <section class="single-desc">
        <div class="container container--single">
            <a class="return-catalog" href="/">
                <svg class="return-catalog__icon" width="15" height="15">
                    <use xlink:href="assets-gulp/build/img/sprite.svg#icon-arrow-left"></use>
                </svg>
                Вернуться к каталогу
            </a>
            <h1>Ул. Смолина, д. 63</h1>
            <div class="flat-group">
                <div class="slider">
                    <div class="swiper">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <img src="images/1-2.jpg" alt="Фото квартиры">
                            </div><!-- swiper-slide -->

                            <div class="swiper-slide">
                                <img src="images/2-2.jpg" alt="Фото квартиры">
                            </div><!-- swiper-slide -->

                            <div class="swiper-slide">
                                <img src="images/3-2.jpg" alt="Фото квартиры">
                            </div><!-- swiper-slide -->

                            <div class="swiper-slide">
                                <img src="images/6-2.jpg" alt="Фото квартиры">
                            </div><!-- swiper-slide -->

                        </div><!-- swiper-wrapper -->

                    </div><!-- swiper -->
                    <!-- Pagination -->
                    <div class="swiper-pagination"></div>

                    <!-- Navigation buttons -->
                    <button type="button" class="swiper-button-prev" aria-label="Назад"></button>
                    <button type="button" class="swiper-button-next" aria-label="Вперед"></button>

                    <!---->
                </div><!-- slider -->
                <div class="flat-desc">
                    <div class="location-price">
                        <div class="flat-location">
                            <div class="flat-location__row">
                                <p>Район: <span>Площадь Советов, Виадук</span></p>
                            </div>
                            <div class="flat-location__row">
                                <p>Количество комнат: <span>2</span></p>
                            </div>
                            <div class="flat-location__row">
                                <p>Этажность: <span>14 / 18</span></p>
                            </div>
                            <div class="flat-location__row">
                                <p>Общая площадь: <span>44</span></p>
                            </div>
                            <div class="flat-location__row">
                                <p>Спальных мест: <span>4 (2+2)</span></p>
                            </div>
                            <div class="flat-location__row">
                                <p>Балкон/лоджия: <span>Есть</span></p>
                            </div>
                            <div class="flat-location__row">
                                <p>Стоянка рядом: <span>Есть</span></p>
                            </div>
                        </div><!-- flat-location -->
                        <div class="flat-price">
                            <h3>СТОИМОСТЬ АРЕНДЫ</h3>
                            <div class="flat-price__row">
                                <p><span>2000</span> руб.</p>
                            </div>
                        </div><!-- flat-price -->
                    </div><!-- location-price -->
                </div><!-- flat-desc -->
                <div class="flat-features">
                    <h3>В квартире имеется всё для проживания:</h3>
                    <ul class="list list--flat-features">
                        <?php foreach ($flat_features as $feature) : ?>
                            <li>
                                <div class="flat-features__icon">
                                    <img src="images/icon-flat.png" alt="">
                                </div>
                                <spa><?= $feature ?></spa>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                </div>
                <div class="map map--single">
                    <iframe src="https://yandex.ru/map-widget/v1/?um=constructor%3A51b774739e189635a30f4e564472275b0320ebc28b3b71f92d4f7da0486d9d96&amp;source=constructor"></iframe>
                </div>
            </div><!-- flat-group -->
        </div>
    </section>

    <section class="similar-flats">
        <div class="container container--single">
            <h3>Похожие квартиры</h3>
            <ul class="list list--similar-flats">

                <?php for ($i = 0; $i < 3; $i++) : ?>
                    <li>
                        <a href="#">
                            <article class="card">
                                <div class="card__thumb">
                                    <img src="assets-gulp/build/img/int/2-2.jpg" alt="">
                                </div>
                                <div class="card__content">
                                    <h3 class="card__title">ул.Смолина, д.63</h3>
                                    <div class="card__rooms">
                                        <svg width="15" height="15">
                                            <use xlink:href="<?php echo get_template_directory_uri() ?>/assets-gulp/build/img/sprite.svg#icon-room"></use>
                                        </svg>
                                        Количество комнат: <span> 1</span>
                                    </div><!-- card__rooms -->
                                    <div class="card__beds">
                                        <svg width="15" height="15">
                                            <use xlink:href="<?php echo get_template_directory_uri() ?>/assets-gulp/build/img/sprite.svg#icon-bed"></use>
                                        </svg>
                                        Спальных мест: <span>4 (2+2)</span>
                                    </div><!-- card__beds -->
                                    <div class="card__price">
                                        Цена за сутки от: <span>2000</span> руб
                                    </div>
                                </div><!-- card__content -->
                            </article>
                        </a>
                    </li>
                <?php endfor; ?>

            </ul>
        </div><!-- container -->
    </section>
</main>
<?php get_footer(); ?>
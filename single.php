<?php get_header(); ?>
    <main class="single-content">
        <section class="single-desc">
            <div class="container container--single">
                <a class="return-catalog" href="/">
                    <svg class="return-catalog__icon" width="15" height="15">
                        <use xlink:href="<?php echo get_template_directory_uri() ?>/assets-gulp/build/img/sprite.svg#icon-arrow-left"></use>
                    </svg>
                    Вернуться к каталогу
                </a>
                <h1><?php the_title(); ?></h1>
                <div class="flat-group">
                    <div class="slider">
                        <div class="swiper">
                            <div class="swiper-wrapper">
                              <?php
                              if (have_rows('slajder')):
                                while (have_rows('slajder')) : the_row();
                                  ?>
                                    <div class="swiper-slide">
                                      <?php
                                      $image = get_sub_field('foto_slajdera');
                                      ?>
                                        <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt'] ?>">
                                    </div><!-- swiper-slide -->
                                <?php
                                endwhile;
                              else :
                              endif;
                              ?>

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
                                    <p>Район: <span><?php the_field('rajon'); ?></span></p>
                                </div>
                                <div class="flat-location__row">
                                    <p>Количество комнат: <span><?php the_field('kolichestvo_komnat'); ?></span></p>
                                </div>
                                <div class="flat-location__row">
                                    <p>Этажность: <span><?php the_field('etazhnost'); ?></span></p>
                                </div>
                                <div class="flat-location__row">
                                    <p>Общая площадь: <span><?php the_field('obshhaya_ploshhad'); ?></span></p>
                                </div>
                                <div class="flat-location__row">
                                    <p>Спальных мест: <span><?php the_field('spalnyh_mest'); ?></span></p>
                                </div>
                                <div class="flat-location__row">
                                    <p>Балкон/лоджия: <span><?php the_field('balkonlodzhiya'); ?></span></p>
                                </div>
                                <div class="flat-location__row">
                                    <p>Стоянка рядом: <span><?php the_field('stoyanka_ryadom'); ?></span></p>
                                </div>
                            </div><!-- flat-location -->
                            <div class="flat-price">
                                <h3>СТОИМОСТЬ АРЕНДЫ</h3>
                                <div class="flat-price__row">
                                    <p><span><?php the_field('stoimost_arendy'); ?></span> руб.</p>
                                </div>

                                <a class="btn btn-primary" href="#" data-open-modal="feedback">Забронировать</a>
                            </div><!-- flat-price -->
                        </div><!-- location-price -->
                    </div><!-- flat-desc -->
                    <div class="flat-features">
                        <h3>В квартире имеется всё для проживания:</h3>
                        <ul class="list list--flat-features">
                          <?php
                          if (have_rows('spisok_chto_est_v_kvartire')):
                            while (have_rows('spisok_chto_est_v_kvartire')) : the_row();
                              ?>
                                <li>
                                    <div class="flat-features__icon">
                                      <?php
                                      $image = get_sub_field('ikonka_punkta');
                                      ?>
                                        <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt'] ?>" >
                                    </div>
                                    <span><?php echo get_sub_field('tekst_punkta'); ?></span>
                                </li>
                            <?php
                            endwhile;
                          else :
                          endif;
                          ?>
                        </ul>
                    </div>
                    <div class="map map--single">
                        <?php the_content() ?>
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
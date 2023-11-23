<?php
/*
Template Name: Страница - Главная
*/
?>
<?php get_header(); ?>
    <main class="category-content">
        <div class="filter">
          <?php wp_nav_menu(array('container' => 'none', 'menu_class' => 'list', 'theme_location' => 'filter')); ?>
        </div><!-- filterr -->
        <section class="flats">
            <div class="container">
                <h1><?php single_cat_title(); ?></h1>
                <ul class="list list--main">
                  <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                      <li>
                          <a href="<?php the_permalink() ?>?flat_name=<?php the_title(); ?>">
                              <article class="card">
                                  <div class="card__thumb">
                                      <img src="<?php echo get_the_post_thumbnail_url() ?>" alt="<?php the_title() ?>">
                                  </div>
                                  <div class="card__content">
                                      <h3 class="card__title"><?php the_title() ?></h3>
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
                                          Цена за сутки: <span>2000</span> руб
                                      </div>
                                  </div><!-- card__content -->
                              </article>
                          </a>
                      </li>
                  <?php endwhile; ?>

                  <?php endif; ?>
                </ul>
            </div><!-- container -->
        </section>
        <div class="map map--main">
            <iframe src="https://yandex.ru/map-widget/v1/?um=constructor%3A51b774739e189635a30f4e564472275b0320ebc28b3b71f92d4f7da0486d9d96&amp;source=constructor"></iframe>
        </div>
    </main>
<?php get_footer(); ?>
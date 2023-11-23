<?php
/*
Template Name: Страница - Главная
*/
?>
<?php get_header(); ?>
    <main>
        <section class="intro">
            <div class="intro__inner">
                <h1>
                  <?php the_field('glavnyj_zagolovok'); ?>
                    <span><?php the_field('melkij_tekst_u_zagolovka'); ?></span>
                </h1>
                <div class="intro__desc">
                  <?php the_field('glavnoe_opisanie'); ?>
                </div>
                <a class="btn btn-primary" href="#" data-open-modal="feedback">Забронировать</a>
            </div>
        </section>
        <div class="filter">
          <?php wp_nav_menu(array('container' => 'none', 'menu_class' => 'list', 'theme_location' => 'filter')); ?>
        </div><!-- filterr -->
        <section class="flats">
            <div class="container">
                <h2 class="visually-hidden">Список квартир</h2>
                <ul class="list list--main">

                  <?php
                  $args_news = array(
                    'showposts' => 150,
                    'offset' => 0,
                  );
                  $recent = new WP_Query($args_news);
                  while ($recent->have_posts()) : $recent->the_post();
                    ?>
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
                                          Количество комнат: <span> <?php the_field('kolichestvo_komnat'); ?></span>
                                      </div><!-- card__rooms -->
                                      <div class="card__beds">
                                          <svg width="15" height="15">
                                              <use xlink:href="<?php echo get_template_directory_uri() ?>/assets-gulp/build/img/sprite.svg#icon-bed"></use>
                                          </svg>
                                          Спальных мест: <span><?php the_field('spalnyh_mest'); ?></span>
                                      </div><!-- card__beds -->
                                      <div class="card__price">
                                          Цена за сутки: <span><?php the_field('stoimost_arendy'); ?></span> руб
                                      </div>
                                  </div><!-- card__content -->
                              </article>
                          </a>
                      </li>
                  <?php endwhile;
                  wp_reset_query(); ?>

                </ul>
            </div><!-- container -->
        </section>
        <div class="map map--main">
            <?php the_content() ?>
        </div>
    </main>
<?php get_footer(); ?>
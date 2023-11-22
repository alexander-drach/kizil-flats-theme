<?php
/*
Template Name: Страница - Правила проживания
*/
?>
<?php get_header(); ?>
    <main class="rules-content">
        <div class="rules-content__inner">
            <h2>Правила проживания</h2>
            <div class="container">
                <div class="rules__group">
                    <div class="rules-desc">
                      <?php the_field('spisok_pravila'); ?>
                    </div><!--rules-desc -->
                    <div class="rules__forbidden">
                        <h3>Гостям категорически запрещается:</h3>
                        <ul class="list list--forbidden">
                          <?php
                          if (have_rows('spisok_zapreshheno')):
                            while (have_rows('spisok_zapreshheno')) : the_row();
                              ?>
                                <li>
                                  <?php echo get_sub_field('zapreshheno_-_punkt'); ?>
                                </li>
                            <?php
                            endwhile;
                          else :
                          endif;
                          ?>
                        </ul>
                        <div class="attention">
                            <svg class="attention__icon" width="25" height="25">
                                <use xlink:href="<?php echo get_template_directory_uri() ?>/assets-gulp/build/img/sprite.svg#icon-attention"></use>
                            </svg>
                            <div class="attention__text">
                              <?php the_field('tekst_-_vnimanie'); ?>
                            </div>
                        </div>
                    </div>
                </div><!-- rules__group -->

            </div><!-- container -->
            <div class="container">
                <ul class="list list--rules">
                  <?php
                  if (have_rows('poryadok_prozhivaniya')):
                    while (have_rows('poryadok_prozhivaniya')) : the_row();
                      ?>
                        <li>
                            <h3><?php echo get_sub_field('poryadok_prozhivaniya_-_podzagolovok'); ?></h3>
                            <div>
                                <?php echo get_sub_field('poryadok_prozhivaniya_tekst'); ?>
                            </div>
                        </li>

                    <?php
                    endwhile;
                  else :
                  endif;
                  ?>
                </ul>
            </div><!-- container -->
        </div>
    </main>
<?php get_footer(); ?>
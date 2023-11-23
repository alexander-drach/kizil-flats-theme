<?php
/*
Template Name: Страница - О нас
*/
?>
<?php get_header(); ?>
    <main class="about-content">
        <section class="about-content__intro">
            <div class="about-content__overlay">
                <div class="about-content__text">
                    <h2><?php the_field('vvedenie_zagolovok'); ?></h2>
                    <div>
                      <?php the_field('tekst_vvedenie'); ?>
                    </div>
                </div>
            </div>
        </section><!-- about-content__intro -->

        <section class="about-content__desc">
            <div class="about-content__overlay">
                <div class="about-content__text">
                    <h2><?php the_field('opisanie_zagolovok'); ?>
                    </h2>
                    <p><strong><?php the_field('opisanie_tekst'); ?></strong></p>
                    <ul class="list">
                      <?php
                      if (have_rows('opisanie_spisok')):
                        while (have_rows('opisanie_spisok')) : the_row();
                          ?>
                            <li><?php echo get_sub_field('opisanie_spisok_-_punkt'); ?></li>
                        <?php
                        endwhile;
                      else :
                      endif;
                      ?>
                    </ul>
                </div>
            </div>
        </section><!-- about-content__desc -->

        <section class="about-content__docs">
            <div class="about-content__text">
                <h2><?php the_field('dokumenty_zagolovok'); ?></h2>
                <p>
                    <strong><?php the_field('dokumenty_tekst'); ?></strong>
                </p>
                <ul class="list list--square-small">
                  <?php
                  if (have_rows('dokumenty_spisok')):
                    while (have_rows('dokumenty_spisok')) : the_row();
                      ?>
                        <li><?php echo get_sub_field('dokumenty_spisok_-_punkt'); ?></li>
                    <?php
                    endwhile;
                  else :
                  endif;
                  ?>
                </ul>

                <p><?php the_field('dokumenty_tekst_pered_knopkoj'); ?></p>

              <?php
              $file = get_field('dokumenty_skachat_obrazecz');
              if( $file ): ?>
                  <a class="btn btn--transparent" href="<?php echo $file['url']; ?>" download="">Скачать образец</a>
              <?php endif; ?>
            </div>
        </section><!-- about-content__docs -->

        <section class="features-cooperation">
            <div class="cooperation">
                <h2><?php the_field('sotrudnichestvo_zagolovok'); ?></h2>
                <div class="cooperation__desc"><?php the_field('sotrudnichestvo_tekst'); ?></div>
            </div><!-- cooperation -->

            <div class="features">
                <h2><?php the_field('preimushhestva_zagolovok'); ?></h2>
                <ul class="list list--features">
                  <?php
                  if (have_rows('preimushhestva_spisok')):
                    while (have_rows('preimushhestva_spisok')) : the_row();
                      ?>
                        <li>
                            <div class="features__icon">
                              <?php
                                  $image = get_sub_field('preimushhestva_ikonka');
                              ?>
                                <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt'] ?>" >
                            </div>
                            <h3><?php echo get_sub_field('preimushhestva_podzagolovok'); ?></h3>
                            <div class="features__text">
                                <?php echo get_sub_field('preimushhestva_tekst_-_punkt'); ?>
                            </div>
                        </li>
                    <?php
                    endwhile;
                  else :
                  endif;
                  ?>
                </ul>
            </div><!-- features -->
        </section>

        <section class="about-content__guarantee">
            <div class="about-content__overlay">
                <div class="about-content__text">
                    <h2><?php the_field('garantii_zagolovok'); ?></h2>
                    <ul class="list list--square-small">
                      <?php
                      if (have_rows('garantii_spisok')):
                        while (have_rows('garantii_spisok')) : the_row();
                          ?>
                            <li><?php echo get_sub_field('garantii_spisok_-_punkt'); ?></li>
                        <?php
                        endwhile;
                      else :
                      endif;
                      ?>
                    </ul>
                </div>
            </div>
        </section><!-- about-content__guarantee -->
    </main>
<?php get_footer(); ?>
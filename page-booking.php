<?php
/*
Template Name: Страница - Бронирование и оплата
*/
?>
<?php get_header(); ?>
<main class="booking-content">
    <div class="booking-content__inner">
        <h2><?php the_field('zagolovok_bronirovanie'); ?></h2>
        <div class="container">
            <div class="booking-desc">
              <?php the_field('tekst_bronirovanie'); ?>
            </div><!-- booking-desc -->
        </div><!-- container -->

        <h2><?php the_field('zagolovok_oplata'); ?></h2>
        <div class="container">
            <div class="pay-desc">
                <div>
                  <?php the_field('tekst_oplata'); ?>
                </div>
                <h3><?php the_field('zagolovok_sposoby_oplaty'); ?></h3>
                <ul class="list list--square-small">
                  <?php
                  if (have_rows('spisok_sposoby_oplaty')):
                    while (have_rows('spisok_sposoby_oplaty')) : the_row();
                      ?>
                        <li><?php echo get_sub_field('sposoby_oplaty_-_punkt'); ?></li>
                    <?php
                    endwhile;
                  else :
                  endif;
                  ?>
                </ul>
            </div><!-- pay-desc -->
        </div><!-- container -->
    </div>
</main>
<?php get_footer(); ?>
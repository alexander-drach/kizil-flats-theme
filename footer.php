<footer class="footer">
    <div class="container">
        <div class="footer__inner">
            <a class="logo logo--footer" href="/">
                <img width="93" height="86" src="<?php echo get_template_directory_uri() ?>/assets-gulp/build/img/svg/logo.svg" alt="Логотип Квартиры посуточно в Кызыле">
            </a>
          <?php wp_nav_menu( array( 'container' => 'none', 'menu_class' => 'list footer__menu', 'theme_location' => 'footer' ) ); ?>
            <ul class="list footer__contact">
                <div class="group">
                    <li class="footer__whatsapp">
                        <?php require 'includes/link-whatsapp.php' ?>
                    </li>
                    <li class="footer__phone">
                        <?php require 'includes/link-phone.php' ?>
                    </li>
                </div>

                <li class="footer__email">
                    <?php require 'includes/link-email.php' ?>
                </li>
            </ul>
        </div>
    </div>
    <div class="copyright">
        <div class="container">
            &copy;<?php echo date('Y') ?>, Все права защищены
        </div>
    </div>
</footer>
</div>

<div class="modal modal--preload" data-modal="feedback">
    <div class="modal__wrapper">
        <div class="modal__overlay" data-close-modal></div>
        <div class="modal__content">
            <div class="modal__header">
                <p class="modal__description">Оставить заявку</p>
                <button class="modal__close-btn btn-reset" type="button" aria-label="Закрыть попап" data-close-modal></button>
            </div>
            <div class="modal__form" data-form-validate data-callback="base" data-parent-validate="base">

                <form method="post" action="<?php echo get_template_directory_uri() ?>/report.php" name="contactform">
                    <div class="custom-input" data-validate-type="phone" data-on-input-validate data-required data-message-base="Поле обязательно к заполнению" data-message-success="Поле заполнено верно">
                        <label for="tel">Телефон<span>*</span></label>
                        <input id="tel" name="tel" type="tel" required>
                    </div>

                    <div class="custom-input custom-input--address">
                        <label for="address">Адрес</label>
                        <input id="address" name="address" type="text" value="<?php if($_GET['flat_name'] !== '') { echo $_GET['flat_name']; }?>">
                    </div>

                    <div class="custom-input">
                        <label for="date_on">Желаемая дата въезда<span>*</span></label>
                        <input id="date_on" name="date_on" type="date" required>
                    </div>

                    <div class="custom-input">
                        <label for="date_off">Желаемая дата выезда<span>*</span></label>
                        <input id="date_off" name="date_off" type="date" required>
                    </div>

                    <div class="custom-input custom-input--message">
                        <label for="message">Описание заявки</label>
                        <textarea id="message" name="message" type="text"></textarea>
                    </div>
                    <div class="checkbox">
                        <input id="agree" type="checkbox" name="agree" required>
                        <label for="agree">Нажимая на кнопку «Отправить», я даю <a href="#">согласие на обработку своих персональных данных</a></label>
                    </div>

                    <button class="btn btn--modal" type="submit">Отправить</button>
                </form>

            </div>
        </div>
    </div>
</div>

<script src="assets-gulp/build/js/vendor.min.js"></script>
<script src="assets-gulp/build/js/main.min.js"></script>
<?php wp_footer() ?>
</body>

</html>
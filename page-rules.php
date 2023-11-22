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
                    <p>
                        <strong>Расчётный час 13.00</strong> о местному времени, до которого гость обязан либо продлить проживание, либо освободить квартиру.
                    </p>
                    <p>
                        <strong>Арендатор обязан</strong> сдать квартиру в том же состоянии, что и при заселении (мусор и посуда убраны, в квартире наведен порядок).
                    </p>
                    <p>
                        <strong>Пребывание домашних животных запрещается</strong>, если это не было предварительно согласовано.
                    </p>
                    <p>
                        Мы дорожим своей репутацией и состоянием наших квартир, поэтому <strong>для проведения различных увеселительных мероприятий: дни рождения, вечеринки, праздники и т.п. наши квартиры не сдаются</strong>. Квартиры нашей компании предназначены исключительно только для проживания.
                    </p>
                    <p>
                        <strong>За оставленные, потерянные и забытые вещи компания/арендодатель и их персонал никакой ответственности не несет.</strong>
                    </p>
                </div><!--rules-desc -->
                <div class="rules__forbidden">
                    <h3>Гостям категорически запрещается:</h3>
                    <ul class="list list--forbidden">
                        <li>Использовать постельное белье и полотенца не по назначению, а так же портить его.</li>
                        <li>Оставлять без контроля открытые водопроводные краны.</li>
                        <li>Мешать соседям громкими звуками, особенно с 22.00 до 8.00;</li>
                        <li>В квартире не должно находиться большее количество человек, чем при заселении (или больше, чем оговорено).</li>
                        <li>Курение в квартире запрещено (исключительно на балконе, а при его отсутствии — на улице) <strong>штраф 2000р.</strong></li>
                    </ul>
                    <div class="attention">
                        <svg class="attention__icon" width="25" height="25">
                            <use xlink:href="<?php echo get_template_directory_uri() ?>/assets-gulp/build/img/sprite.svg#icon-attention"></use>
                        </svg>
                        <div class="attention__text">
                            <p>
                                При нарушении правил проживания (не оговоренное кол-во людей, шум, драки, жалобы соседей и т.п.) ВЫСЕЛЕНИЕ ПРОИСХОДИТ НЕМЕДЛЕННО не зависимо от времени суток, деньги при этом не возвращаются.
                            </p>
                        </div>
                    </div>
                </div>
            </div><!-- rules__group -->

        </div><!-- container -->
        <div class="container">
            <ul class="list list--rules">
                <li>
                    <h3>Заселение</h3>
                    <p>
                        В момент заселения в квартиру, клиент обязан удостоверить свою личность предъявив арендодателю паспорт, в ином случае мы отказываем в заселении. Клиент обязуется, использовать квартиру исключительно для целей проживания.
                    </p>
                </li>
                <li>
                    <h3>Продление срока проживания</h3>
                    <p>
                        В случае необходимости продлить пребывание в квартире после оплаченного срока, гость должен сообщить об этом арендодателю. При имеющейся возможности арендодатель удовлетворит просьбу гостя о продлении проживания, но имеет право предложить другую квартиру, а в случае отсутствия свободных квартир расторгнуть договор посуточной аренды жилого помещения.
                    </p>
                </li>
                <li>
                    <h3>Выселение</h3>
                    <p>
                        О точном времени убытия гость обязан уведомить арендодателя не менее чем за 2 часа. Арендодатель прибудет на квартиру за 15 мин до отъезда для проверки сохранности имущества, возврата залоговой суммы.
                        В случае повреждения (порчи) квартиры, и/ или находящегося в квартире имуществу (мебель, бытовая техника, аксессуары и иное) по вине гостя, гость возмещает нанесённый ущерб согласно прейскуранту арендодателя.
                        Убедительно просим Вас незамедлительно сообщать арендодателю, о каких либо происшествиях, неисправностях в арендуемой квартире.
                    </p>
                </li>
            </ul>
        </div><!-- container -->
    </div>
</main>
<?php get_footer(); ?>
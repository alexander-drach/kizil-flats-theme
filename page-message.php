<?php session_start(); ?>
<main class="page-report" style="padding: 50px 30px; font-family: " Arial", sans-serif">
<div class="container" style="max-width: 1200px; margin: 0 auto;">
    <h1>Ваше сообщение отправлено!</h1>
    <div class="report-message" style="font-size: 20px">
        <p>Телефон: <?php echo $_SESSION['tel'] ?></p>
        <p>Адрес: <?php echo $_SESSION['address'] ?></p>
        <p>Дата въезда: <?php echo $_SESSION['date_on'] ?></p>
        <p>Дата выезда: <?php echo $_SESSION['date_off'] ?></p>
        <p>Описание заявки: <?php if ($_SESSION['message']) {
            echo $_SESSION['message'];
          } else {
            echo 'не заполнено';
          } ?></p>
    </div>
    <a href="/" style="color: black; font-size: 24px">Вернуться на главную</a>
</div>
</main>
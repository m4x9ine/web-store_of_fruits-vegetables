<!DOCTYPE html>
<html lang="ru">
	<head>
		<title>FoodLogistic | Где нас найти?</title>
		<link rel="stylesheet" type="text/css" href="css/map.css">
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link type="Image/x-icon" href="img/icon-site.png" rel="icon">
        <script defer src="includeHeaderFooter.js"></script>
	</head>
	<body>
        <div class="wrapper">
            <header class="header"></header>
            <main class="page">
                <section class="content"></section>
                <section class="page__map">
                    <div class="map__container _container">
                        <div class="map__header header-block">
                            <h2 class="header-block__title">Где нас найти?</h2>
                            <div class="header-block__subtitle">
                                 <a href="" class="contacts-footer__item contacts-footer__item__location">Республика Беларусь, г. Гродно, ул. Понемуньская, 15</a>
                            </div>
                        </div>
                        <div class="map__body">
                            <div class="map__content">
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2363.988121852246!2d23.868045415742895!3d53.66501258004704!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x46dfd651608a332f%3A0xdb9e81700b1cb61e!2z0YPQuy4g0J_QvtC90LXQvNGD0L3RjNGB0LrQsNGPIDE1LCDQk9GA0L7QtNC90L4!5e0!3m2!1sru!2sby!4v1638751665781!5m2!1sru!2sby" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                            </div>
                        </div>
                    </div>
                </section>
                <section class="page__additional-info">
                    <div class="additional-info__container _container">
                        <div class="additional-info__body">
                            <div class="additional-info__first-line">Остались вопросы?</div>
                            <a href="#" class="additional-info__open-popup">Заказать бесплатный звонок</a>
                            <div class="additional-info__second-line">или напишите нам на почту</div>
                            <div class="footer__contacts contacts-footer">
                                <a href="mailto:spartafrut@mail.ru" class="contacts-footer__item contacts-footer__item__email" style="font-size: 22px">spartafrut@mail.ru</a>
                            </div>
                        </div>
                        <div class="popup__bg"> 
                           <form class="popup" method="POST">
                                <img src="img/cross.svg" class="close-popup">
                                <label>
                                    <input type="text" name="name">
                                    <div class="label__text">
                                        Ваше имя
                                    </div>
                                </label>
                                <label>
                                    <input type="tel" name="tel">
                                    <div class="label__text">
                                        Ваш телефон
                                    </div>
                                </label>
                                <label>
                                    <textarea name="message"></textarea>
                                    <div class="label__text">
                                        Ваше сообщение
                                    </div>
                                </label>
                                <button type="submit">Отправить</button>
								<?php
                            include('php/data_base.php');
                            $name = $_POST['name'];
                            $tel = $_POST['tel'];
                            $mass = $_POST['message'];
                             mysqli_query($link, "INSERT INTO `zakazat_zwonok` (`id`, `name`, `number`, `text`, `otvet`) VALUES (NULL, '$name', '$tel', '$mass', '0');")
                             ?>
                            </form>
                        </div>
                    </div>
                </section>
            </main>
            <a id="button"></a>
            <footer class="footer"></footer>
        </div>
        <script src="jquery-3.6.0.min.js"></script>
		<!--<script src="script.js"></script>-->
        <script src="header.js"></script>
        <script src="footerXml.js"></script>
        <script src="scrollUp.js"></script>
        <script src="orderCallWindow.js"></script>
    </body>
</html>
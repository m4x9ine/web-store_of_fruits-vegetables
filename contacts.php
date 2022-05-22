<!DOCTYPE html>
<html lang="ru">
	<head>
		<title>FoodLogistic | Контакты</title>
		<link rel="stylesheet" type="text/css" href="css/contacts.css">
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width">
        <link rel="stylesheet" href="css/swiper-bundle.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link type="Image/x-icon" href="img/icon-site.png" rel="icon">
        <script defer src="includeHeaderFooter.js"></script>
	</head>
	<body>
        <div class="wrapper">
            <header class="header"></header>
            <main class="page">
                <section class="content"></section>
                <section class="page__map" style="margin-bottom: 0;">
                    <div class="map__container _container">
                        <div class="map__header header-block">
                            <h2 class="header-block__title" style="margin-bottom: 0;">Контакты</h2>
                        </div>
                    </div>
                </section>
				<section class="page__contacts">
                    <div class="contacts__container _container">
                        <div class="swiper__body">
                            <div class="swiper">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide" style="background-image:url(./img/worker3.jpg)">
                                        <div class="swiper-info">Алексей <br> директор <br> тел.: +375 (29) 590-40-88</div>
                                    </div>
                                    <div class="swiper-slide" style="background-image:url(./img/worker6.jpg)">
                                        <div class="swiper-info">Светлана <br> менеджер по продажам <br> тел.: +375 (33) 900-21-54</div>
                                    </div>
                                    <div class="swiper-slide" style="background-image:url(./img/worker4.jpg)">
                                        <div class="swiper-info">Владимир <br> главный бухгалтер <br> тел.: +375 (33) 100-31-66</div>
                                    </div>
                                    <div class="swiper-slide" style="background-image:url(./img/worker2.jpg)">
                                        <div class="swiper-info">Александр <br> главный кладовщик <br> тел.: +375 (29) 900-30-5</div>
                                    </div>
                                </div>
                                <!-- Add Pagination -->
                                <div class="swiper-pagination"></div>
                                <!-- Add Arrows -->
                                <div class="swiper-button-prev"></div>
                                <div class="swiper-button-next"></div>
                            </div>
                        </div>
                        <!-- Initialize Swiper -->
                        <script type="module">
                            var swiper = new Swiper('.swiper', {
                            effect: 'fade',
                            grabCursor: true,
                            pagination: {
                                el: '.swiper-pagination',
                            },
                            navigation: {
                                nextEl: '.swiper-button-next',
                                prevEl: '.swiper-button-prev',
                            },
                            });
                        </script>
                        <!-- Demo styles -->
                    </div>
                </section>
				<section class="page__additional-info">
                    <div class="additional-info__container _container">
                        <div class="additional-info__body">
                            <div class="additional-info__first-line">Остались вопросы?</div>
                            <a href="" class="additional-info__open-popup">Заказать бесплатный звонок</a>
                            <div class="additional-info__second-line">или напишите нам на почту</div>
                            <div class="footer__contacts contacts-footer">
                                <a href="mailto:spartafrut@mail.ru" class="contacts-footer__item contacts-footer__item__email" style="font-size: 22px">spartafrut@mail.ru</a>
                            </div>
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
                </section>
            </main>
            <a id="button"></a>
            <footer class="footer"></footer>
        </div>
        <script src="swiper-bundle.min.js"></script>
        <script src="jquery-3.6.0.min.js"></script>
        <script src="header.js"></script>
        <script src="footerXml.js"></script>
        <script src="scrollUp.js"></script>
        <script src="orderCallWindow.js"></script>
    </body>
</html>
<!DOCTYPE html>
<html lang="ru">
	<head>
		<title>FoodLogistic | Сделать заказ</title>
		<link rel="stylesheet" type="text/css" href="css/form.css">
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
                            <h2 class="header-block__title">Сделать заказ</h2>
                            <div class="header-block__subtitle">
                                Вы можете оставить заявку на заказ, и мы вам перезвоним для уточнения деталей заказа и подтверждения.
                            </div>
                        </div>
                    </div>
                </section>
                <section class="form">
                    <div class="_container">
                        <div class="form-body">
                            <div class="form-body__container">
                                <div class="title"> Оставить заявку</div>
                                <form method="POST">
                                    <div class="user-details">
                                        <div class="input-box">
                                            <span class="details">Имя</span>
                                            <input type="text" name="firstName" placeholder="Введите имя" required>
                                        </div>
                                        <div class="input-box">
                                            <span class="details">Фамилия</span>
                                            <input type="text" name="lastName" placeholder="Введите фамилию" required>
                                        </div>
                                        <div class="input-box">
                                            <span class="details">Контрагент</span>
                                            <input type="text" name="contragent" placeholder="Наименование контрагента" required>
                                        </div>
                                        <div class="input-box">
                                            <span class="details">Местонахождение контрагента</span>
                                            <input type="text" name="contragentPlace"  placeholder="Местонахождение контрагента" required>
                                        </div>
                                        <div class="input-box">
                                            <span class="details"> Номер телефона</span>
                                            <input type="text" name="number" placeholder="+375331234567" required>
                                        </div>
                                        <div class="input-box">
                                            <span class="details">Электронная почта</span>
                                            <input type="text" name="email" placeholder="example@mail.ru" required>
                                        </div>
                                        <div class="input-box">
                                            <span class="details">Заказ</span>
                                            <input type="text" name="order" placeholder="лук репчатый(10 кг)" required>
                                        </div>
                                        <div class="button">
                                            <input type="submit" value="Оставить заявку">
                                        </div>
                                    </div>
                                    <?php
                                    include('php/data_base.php');
                            $fname = $_POST['firstName'];
                            $lname = $_POST['lastName'];
                            $contr = $_POST['contragent'];
                            $contrpl = $_POST['contragentPlace'];
                            $tel = $_POST['number'];
                            $mass = $_POST['email'];
                            $ord = $_POST['order'];
                             mysqli_query($link, "INSERT INTO `zakaz` (`id`, `name`, `kontragent`, `number`, `zakaz`, `familia`, `mesto kontragenta`, `post`) VALUES (NULL, '$fname', '$contr', '$tel', '$ord', '$lname', '$contrpl', '$mass');")
                             ?>
                            </form>
                                </form>
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
        <script src="jquery-3.6.0.min.js"></script>
		<!--<script src="script.js"></script>-->
        <script src="header.js"></script>
        <script src="footerXml.js"></script>
        <script src="scrollUp.js"></script>
        <script src="orderCallWindow.js"></script>
    </body>
</html>
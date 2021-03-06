<!DOCTYPE html>
<html lang="ru">
	<head>
		<title>FoodLogistic | Главная</title>
		<link rel="stylesheet" type="text/css" href="css/main.css">
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<link type="Image/x-icon" href="img/icon-site.png" rel="icon">
		<script defer src="includeHeaderFooter.js"></script>
	</head>
	<body>
		<div class="wrapper">
			<header class="header"></header>
			<section class="content"></section>
			<main class="page">
				<section class="page__main-block main-block">
					<div class="main-block__container _container">
						<div class="main-block__body">
							<ul id="slides">
								<li class="slide showing"></li>
								<li class="slide"></li>
							  </ul>
							<div class="main-block__body__content">
								<div class="main-block__title">
									<img src="img/ЛОГОТИП.png" alt="FoodLogistic. Овощи, фрукты и зелень оптом" class="main-block__title-logo">
								</div>
								<div class="main-block__first-text">Овощи, фрукты и зелень оптом</div>
								<div class="main-block__second-text">Свежие в течение всего года</div>
								<a href="form.php" class="main-block__order-button">Сделать заказ</a>
							</div>
						</div>
					</div>
				</section>
				<section class="page__buttons buttons">
					<div class="buttons__container _container">
						<div class="buttons__body">
							<div class="buttons__column">
								<div class="buttons__item">
									<a href="fruits.html" class="buttons__item__link"><img src="img/ФРУКТЫ.png" alt="Фрукты" class="buttons__item__img"></a>
								</div>
							</div>
							<div class="buttons__column">
								<div class="buttons__item">
									<a href="greens.html" class="buttons__item__link"><img src="img/ЗЕЛЕНЬ.png" alt="Зелень" class="buttons__item__img"></a>
								</div>
							</div>
							<div class="buttons__column">
								<div class="buttons__item">
									<a href="exotic.html" class="buttons__item__link"><img src="img/ЭКЗОТИЧЕСКИЕ ФРУКТЫ.png" alt="Экзотические фрукты" class="buttons__item__img"></a>
								</div>
							</div>
							<div class="buttons__column">
								<div class="buttons__item">
									<a href="vegies.html" class="buttons__item__link"><img src="img/ОВОЩИ.png" alt="Овощи" class="buttons__item__img"></a>
								</div>
							</div>
						</div>
					</div>
					<div class="price-button__container _container">
						<a href="img/priceFoodLogistic.pdf" download class="price-button__button">Скачать прайс</a>
					</div>
					
				</section>
				<section class="page__whyus">
					<div class="whyus__main _container">
						<div class="whyus__label">
							FoodLogistic — это:
						</div>
                        <div class="whyus__row">
                            <div class="whyus__column">
								<div class="whyus__list whyuslist-items">
                                    <div class="whyuslist-items__item whyuslist-items__item__stability">Стабильность</div>
                                    <div class="whyuslist-items__item whyuslist-items__item__reliability">Надежность</div>
                                    <div class="whyuslist-items__item whyuslist-items__item__ecology">Экологичность</div>
                                    <div class="whyuslist-items__item whyuslist-items__item__loyalty">Лояльность</div>
                                </div>
							</div>
							<div class="whyus__row">
								<div class="whyus__column">
									<div class="whyus__list whyuslist-items">
										<div class="whyuslist-items__item__list">Опыт работы на рынке более 10 лет.</div>
										<div class="whyuslist-items__item__list">Постоянное наличие на складе. Хранение в необходимых условиях.<br>Вся продукция с документами соответствия.
										</div>
										<div class="whyuslist-items__item__list">Только экологически чистые и свежие овощи, фрукты и зелень.</div>
										<div class="whyuslist-items__item__list"> Доставка транспортом поставщика. Гибкая система скидок.</div>
									</div>
								</div>
                        	</div>
						</div>
						<div class="whyus__row">
							<a href="" class="call-button__button">Заказать бесплатный звонок</a>
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
		<script src="js/jquery-3.6.0.min.js"></script>
		<!--<script src="script.js"></script>-->
        <script src="header.js"></script>
        <script src="footerXml.js"></script>
        <script src="scrollUp.js"></script>
        <script src="orderCallWindow.js"></script>
		<script src="mainPeachSlider.js"></script>
	</body>
</html>

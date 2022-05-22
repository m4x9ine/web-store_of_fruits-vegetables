let includedHeader = document.querySelector("header");
includedHeader.insertAdjacentHTML(
	"afterbegin",
	`<div class="container _container">
<div class="header__body">
    <a href="index.php" class="header__logo">
        <img src="img/logo_for_menu_4x.jpg" alt="FoodLogistic. Овощи и фрукты оптом по Беларуси">
        <div class="header__logo__text" >
            Овощи и фрукты оптом по Беларуси
        </div>
    </a>
    <div class="header__burger">
        <span></span>
    </div>
    <nav class="header__menu">
        <ul class="header__list">
            <li>
                <a href="index.php" class="header__link">Главная</a>
            </li>
            <li>
                <a href="#" class="header__link">Ассортимент<i class="fa fa-angle-down"></i></a>
                <ul class="header__menu__sub-list">
                    <li class="sub-list__item">
                        <a href="vegies.php" class="header__menu__sub-link">Овощи</a>
                    </li>
                    <li>
                        <a href="fruits.php" class="header__menu__sub-link">Фрукты</a>
                    </li>
                    <li>
                        <a href="greens.php" class="header__menu__sub-link">Зелень</a>
                    </li>
                    <li>
                        <a href="exotic.php" class="header__menu__sub-link">Экзотика</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="contacts.php" class="header__link">Контакты</a>
            </li>
            <li>
                <a href="form.php" class="header__link">Сделать заказ</a>
            </li>
            <li>
                <a href="map.php" class="header__link">Как добраться</a>
            </li>
        </ul>
    </nav>
</div>
</div>`
);

let includedСontentAfterHeader = document.querySelector("section");
includedСontentAfterHeader.insertAdjacentHTML(
	"afterbegin",
	`<div class="container _container">
</div>`
);

let includedFooter = document.querySelector("footer");
includedFooter.insertAdjacentHTML(
	"afterbegin",
	` <div class="footer__top">
<div class="footer__main _container">
    <div class="footer__row">
        <div class="footer__column">
            <div class="footer__label"></div>
            <nav class="footer__menu menu-footer">
                <ul class="menu-footer__list">
                    <li class="menu-footer__item" style="list-style-type: none"><a href="index.php" class="menu-footer__link"><img src="img/logo_for_menu_4x.jpg" alt="FoodLogistic. Овощи и фрукты оптом по Беларуси"></a></li>
                    <li class="menu-footer__item" style="list-style-type: none; font-size:14px; margin-left:-20px; margin-top:-15px"><a href="index.php" class="menu-footer__link" style="text-decoration: none;">Овощи и фрукты оптом с доставкой по Беларуси</a></li>
                </ul>
            </nav>
        </div>
        <div class="footer__column">
            <div class="footer__label">Связь с нами:</div>
            <div class="footer__contacts contacts-footer">
                <a href="map.php" class="contacts-footer__item contacts-footer__item__location">Республика Беларусь, г. Гродно, ул. Понемуньская, 15</a>
                <a href="tel:339002154" class="contacts-footer__item contacts-footer__item__phone">+375 (33) 900-21-54 (Светлана)</a>
                <a href="tel:295803999" class="contacts-footer__item contacts-footer__item__phone">+375 (29) 580-39-99 (Павел)</a>
                <a href="mailto:spartafrut@mail.ru" class="contacts-footer__item contacts-footer__item__email">spartafrut@mail.ru</a>
            </div>
        </div>
        <div class="footer__column">
            <div class="footer__label">Навигация по сайту:</div>
            <nav class="footer__menu menu-footer">
                <ul class="menu-footer__list">
                    <li class="menu-footer__item"><a href="index.php" class="menu-footer__link">Главная</a></li>
                    <li class="menu-footer__item"><a href="map.php" class="menu-footer__link">Как добраться</a></li>
                    <li class="menu-footer__item"><a href="img/priceFoodLogistic.pdf" download class="menu-footer__link">Скачать прайс-лист</a></li>
                    <li class="menu-footer__item"><a href="form.php" class="menu-footer__link">Сделать заказ</a></li>
                    <li class="menu-footer__item"><a href="mailto:spartafrut@mail.ru" class="menu-footer__link">Написать нам на почту</a></li>
                </ul>
            </nav>
        </div>
    </div>
</div>
</div>
<div class="footer__bottom">
<div class="footer__container _container">
    <p id="footer__bottom__info"></p>
    <div class="footer__social social">
        <a href="https://t.me/valery_kosss" class="social__item">
            <img src="footerimg/telegram.svg" alt="Telegram">
        </a>
    </div>
</div>
</div>`
);

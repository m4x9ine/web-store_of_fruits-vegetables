$(document).ready(function(){
    $('.header__burger').click(function(event){
        $('.header__burger, .header__menu').toggleClass('active');
        $('body').toggleClass('lock');
    })
});
$(document).ready(function(){
    var text, parser, xmlDoc;
    
    text = "<info>" +
    "<text>Сайт сделан Косс Валерией</text>" +
    "</info>";
    
    parser = new DOMParser();
    xmlDoc = parser.parseFromString(text,"text/xml");
    
    document.getElementById("footer__bottom__info").innerHTML = xmlDoc.getElementsByTagName("text")[0].childNodes[0].nodeValue;
});

var btn = $('#button');
$(window).scroll(function() {
  if ($(window).scrollTop() > 200) {
    btn.addClass('show');
  } else {
    btn.removeClass('show');
  }
});
btn.on('click', function(e) {
  e.preventDefault();
  $('html, body').animate({scrollTop:0}, '300');
});

var slides = document.querySelectorAll('#slides .slide');
var currentSlide = 0;
var slideInterval = setInterval(nextSlide,4000);

function nextSlide(){
  slides[currentSlide].className = 'slide';
  currentSlide = (currentSlide+1)%slides.length;
  slides[currentSlide].className = 'slide showing';
}

let popupBg = document.querySelector('.popup__bg'); // Фон попап окна
let popup = document.querySelector('.popup'); // Само окно
let openPopupButtons = document.querySelectorAll('.additional-info__open-popup'); // Кнопки для показа окна
let closePopupButton = document.querySelector('.close-popup'); // Кнопка для скрытия окна
openPopupButtons.forEach((button) => { // Перебираем все кнопки
    button.addEventListener('click', (e) => { // Для каждой вешаем обработчик событий на клик
        e.preventDefault(); // Предотвращаем дефолтное поведение браузера
        popupBg.classList.add('active'); // Добавляем класс 'active' для фона
        popup.classList.add('active'); // И для самого окна
    })
});
closePopupButton.addEventListener('click',() => { // Вешаем обработчик на крестик
    popupBg.classList.remove('active'); // Убираем активный класс с фона
    popup.classList.remove('active'); // И с окна
});
document.addEventListener('click', (e) => { // Вешаем обработчик на весь документ
    if(e.target === popupBg) { // Если цель клика - фот, то:
        popupBg.classList.remove('active'); // Убираем активный класс с фона
        popup.classList.remove('active'); // И с окна
    }
});

let popupBgYellow = document.querySelector('.popup__bg'); // Фон попап окна
let popupYellow = document.querySelector('.popup'); // Само окно
let openPopupButtonsYellow = document.querySelectorAll('.call-button__button'); // Кнопки для показа окна
let closePopupButtonYellow = document.querySelector('.close-popup'); // Кнопка для скрытия окна
openPopupButtonsYellow.forEach((button) => { // Перебираем все кнопки
    button.addEventListener('click', (e) => { // Для каждой вешаем обработчик событий на клик
        e.preventDefault(); // Предотвращаем дефолтное поведение браузера
        popupBgYellow.classList.add('active'); // Добавляем класс 'active' для фона
        popup.classList.add('active'); // И для самого окна
    })
});
closePopupButtonYellow.addEventListener('click',() => { // Вешаем обработчик на крестик
    popupBgYellow.classList.remove('active'); // Убираем активный класс с фона
    popup.classList.remove('active'); // И с окна
});
document.addEventListener('click', (e) => { // Вешаем обработчик на весь документ
    if(e.target === popupBgYellow) { // Если цель клика - фот, то:
        popupBgYellow.classList.remove('active'); // Убираем активный класс с фона
        popup.classList.remove('active'); // И с окна
    }
});

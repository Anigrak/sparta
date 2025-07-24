$(document).ready(function() {

    $("#sliderOwn").owlCarousel({
        loop: true,
        items: 1,
        autoplay: false,
        margin: 0,
        nav: false,
        dots: false,
        URLhashListener:true,
        autoplayHoverPause:true,
        startPosition: 'zero'
    });
    $(document).on('click', '.type', function () {

        $(document).find('.type2').removeClass('type2').addClass('type1');
        $(this).removeClass('type1').removeClass('type3');
        $(this).addClass('type2');

    });
/*
    // Находим контейнер со слайдами
    const slides = document.querySelector('.slides');

    // Определяем количество слайдов
    const slideCount = document.querySelectorAll('.mainslide').length;

    let currentIndex = 2; // Переменная для хранения текущего слайда

    // Функция смены слайдов
    function goToSlide(index) {
        if (index < 0) {
            index = slideCount - 1; // Если нажали «Назад» на первом слайде, переходим на последний
        } else if (index >= slideCount) {
            index = 0; // Если нажали «Вперёд» на последнем слайде, переходим на первый
        }

        currentIndex = index; // Запоминаем текущий слайд
        slides.style.transform = `translateX(${-index * 100}%)`; // Сдвигаем контейнер со слайдами
    }


    $(document).on('click', '.type', function () {

        goToSlide($(this).data('slide'));
        $(document).find('.type2').removeClass('type2').addClass('type1');
        $(this).removeClass('type1').removeClass('type3');
        $(this).addClass('type2');

    });

 */
});
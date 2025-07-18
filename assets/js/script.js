$(document).ready(function() {

  $("#sliderOwn").owlCarousel({
    loop:true,
    margin:30,
    nav:false,
    responsive:{
      350:{
        items:1
      },
      900:{
        items:2
      },
      1200:{
        items:3
      },
      1700:{
        items:4
      }
    }
  });

    // Находим контейнер со слайдами
    const slides = document.querySelector('.slides');

    // Определяем количество слайдов
    const slideCount = document.querySelectorAll('.slide').length;



    let currentIndex = 0; // Переменная для хранения текущего слайда

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


    $(document).on('click','.type',function(){

        goToSlide( $(this).data('slide'));
        $(document).find('.type2').removeClass('type2').addClass('type1');
        $(this).removeClass('type1').removeClass('type3');
        $(this).addClass('type2');

    });

    let burgerBtn = $('.js-burger');
    let mainMenu = $('.js-main-menu');
    burgerBtn.on('click',function(){
        $('body').addClass('modal');
    });

    let modalCloseBtn = $('.js-modal-close');
    modalCloseBtn.on('click',function(){
        $('body').removeClass('modal');
    });

    $(document).on('keydown','textarea, input',function(){
        hideError();
    });

    $(document).on('change','input[type="checkbox"]',function(){
        hideError();
    });

    $( window ).on( "resize", function() {
        $('body').removeClass('modal');
    });

    $("#demo_download_button").on("click", function() {
        $.ajax({
            type: "GET",
            url: '/api/download/SPARTA2035_DEMO',
            success: function (result) {
            }
        });
    });
    $("#full_download_button").on("click", function () {
        $.ajax({
            type: "GET",
            url: '/api/download/SPARTA2035',
            success: function (result) {
            }
        });
    });

    $('.js-password-toggle').on('click', function(){
        $(this).toggleClass('active');
        let input = $(this).parent().find('input');
        if(input.attr('type') === 'password'){
            input.attr('type', 'text');
        }
        else {
            input.attr('type', 'password');
        }
    });

    $('textarea, input[type="text"], input[type="email"], input[type="password"]').keypress(function (e) {
        if (!$(this).hascClass('.js-no-submit') && e.which == 13) {
            $(this).parents('form').find('button').click();
            return false;
        }
    });

    $('.game_link').on('click',function (){
        $(this).find('a')[0].click();
    });

    $('.js-cookie-accept').on('click', function(){
        $.ajax({
            type: "POST",
            url: '/api/user/cookie_accept',
            success: function (result) {
                $('.cookie_modal').remove();
            }
        });
    });


});
function hideError() {
    $('.form-row').removeClass('form-error');
}


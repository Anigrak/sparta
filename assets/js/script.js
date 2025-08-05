$(document).ready(function() {


    let burgerBtn = $('.js-burger');
    let mainMenu = $('.js-main-menu');
    burgerBtn.on('click',function(){
        $('body').addClass('modal');
    });

    let profileBtn = $('.js-profile');
    profileBtn.on('mouseenter',function(){
        $('.js-profile-dropdown').removeClass('hidden');
    });
    $('.js-profile-dropdown').on('mouseleave',function(){
        $('.js-profile-dropdown').addClass('hidden');
    });

    let hassh=window.location.hash;
    if (hassh == '#error_occurred'){
        $('#error_occurred').show();
        document.body.style.overflow = 'hidden';
    }

    $('.js-cross-close').on('click', function(){
        $(this).hide();
        document.body.style.overflow = '';
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
function copy(that){

        $('#'+that).select();
    document.execCommand('copy',false);

}
function start() {

    // запоминаем время нажатия
    var start_time = new Date();

    var count = 90;
    // получаем время окончания таймера
    var stop_time = start_time.setSeconds(start_time.getSeconds() + count);

    // запускаем ежесекундный отсчёт
    var countdown = setInterval(function() {
        // текущее время
        var now = new Date().getTime();
        // сколько времени осталось до конца таймера
        var remain = stop_time - now;
        // переводим миллисекунды в минуты и секунды
        var min = Math.floor( (remain % (1000 * 60 * 60)) / (1000 * 60) );
        var sec = Math.floor( (remain % (1000 * 60)) / 1000 );
        // если значение текущей секунды меньше 10, добавляем вначале ведущий ноль
        sec = sec < 10 ? "0" + sec : sec;
        // отправляем значение таймера на страницу в нужный раздел
        document.getElementById('countdown').innerHTML = min + ":" + sec;
        // если время вышло
        if (remain < 0) {
            clearInterval(countdown);
            $(document).find('.counter').hide();
            $(document).find('.send-verify').disabled = false;
            $(document).find('.send-verify').removeClass('disabled');

        }
    }, 1000);
    // помечаем, что таймер уже запущен
    started = true;
}


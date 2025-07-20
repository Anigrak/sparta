$(document).ready(function() {



    let burgerBtn = $('.js-burger');
    let mainMenu = $('.js-main-menu');
    burgerBtn.on('click',function(){
        $('body').addClass('modal');
    });

    let profileBtn = $('.js-profile');
    profileBtn.on('click',function(){
        $('.js-profile-dropdown').toogleClass('hidden');
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


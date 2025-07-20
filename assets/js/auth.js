$(document).ready(function(){

    let inProgress = false;
let hash=window.location.hash;

if (hash == '#login'){
    $('.headform2.login').addClass('gray1')
    $('.headform.register').addClass('gray2');
    $('.content.in').show();
    $('.content.up').hide();
}
    if (hash == '#register'){
        $('.headform2.login').addClass('gray2');
        $('.headform.register').addClass('gray1');
            $('.content.in').hide();
            $('.content.up').show();
    }
    $('.js-auth').on('click', function(){
        if(inProgress) return;
        inProgress = true;
        hideError();
        let formContainer = $(this).parents('form');

        $.ajax({
            type: "POST",
            data: formContainer.serialize(),
            url: '/api/user/login',
            success: function (result) {
                if(result.success) {
                    window.location.href = result.params["redirect"];
                }
                else {
                    formContainer.find('input:not(.checkbox-input)').parent().addClass('form-error');
                    formContainer.find('input:not(.checkbox-input)').parent().find('.js-error').text(result.error);
                }
                inProgress = false;
            }
        });
    });

    $('.js-register').on('click', function(){
        if(inProgress) return;
        inProgress = true;
        hideError();
        let form = $(this).parents('form');

        $.ajax({
            type: "POST",
            data: $(this).parents('form').serialize(),
            url: '/api/user/register',
            success: function (result) {
                if(result.success) {
                    window.location.href = result.params["redirect"];
                }
                else {
                    $.each(result.params["errors"], function(index, value) {
                        let input = form.find('input[name="registration_form['+index+']"]');
                        if (input.length === 0) {
                            input = form.find('input[name="registration_form[password][' + index + ']"]');
                        }

                        if(input.length > 0) {
                            input.parent().addClass('form-error').find('.js-error').text(value);
                        }
                    });
                }
                inProgress = false;
            }
        });
    });

    $('.js-send-verify').on('click', function(){
        if(inProgress) return;
        inProgress = true;
        hideError();

        $.ajax({
            type: "POST",
            data: {},
            url: '/api/user/send_verify',
            success: function (result) {
                if(result.success) {
                    window.location.href = result.params["redirect"];
                }
                else {
                }
                inProgress = false;
            }
        });
    });

    $('.js-forgot').on('click', function(){
        if(inProgress) return;
        inProgress = true;
        hideError();
        let formContainer = $(this).parents('form');

        $.ajax({
            type: "POST",
            data: formContainer.serialize(),
            url: '/api/user/forgot',
            success: function (result) {
                if(result.success) {
                    window.location.href = result.params["redirect"];
                }
                else {
                    $.each(result.params["errors"], function(index, value) {
                        let input = formContainer.find('input[name="reset_password_request_form['+index+']"]');
                        if(input.length > 0) {
                            input.parent().addClass('form-error').find('.js-error').text(value);
                        }
                    });
                }
                inProgress = false;
            }
        });
    });

    $('.js-change').on('click', function(){
        if(inProgress) return;
        inProgress = true;
        hideError();
        let formContainer = $(this).parents('form');
        let successContainer = $('.success-block');

        $.ajax({
            type: "POST",
            data: $(this).parents('form').serialize(),
            url: '/api/user/reset',
            success: function (result) {
                if(result.success) {
                    formContainer.parents('.page_window').remove();
                    successContainer.show();
                }
                else {
                    $.each(result.params["errors"], function(index, value) {
                        input = formContainer.find('input[name="change_password_form[plainPassword][' + index + ']"]');
                        if(input.length > 0) {
                            input.parent().addClass('form-error').find('.js-error').text(value);
                        }
                    });
                }
                inProgress = false;
            }
        });
    });

});
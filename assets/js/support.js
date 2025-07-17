$(document).ready(function(){

    let inProgress = false;

    $('.js-send').on('click', function(){
        if(inProgress) return;
        inProgress = true;
        hideError();
        let formContainer = $(this).parents('form');
        let successContainer = $('.success-block');

        $.ajax({
            type: "POST",
            data: formContainer.serialize(),
            url: '/api/support/send',
            success: function (result) {
                if(result.success) {
                    formContainer.parent('.page_window').remove();
                    successContainer.show();
                }
                else {
                    $.each(result.params["errors"], function(index, value) {
                        let el = formContainer.find('input[name="support_form['+index+']"]');
                        if(el.length == 0)
                            el = formContainer.find('textarea[name="support_form['+index+']"]');

                        if(el.length > 0) {
                            el.parents('.form-row').addClass('form-error').find('.js-error').text(value);
                        }
                    });
                }
                inProgress = false;
            }
        });
    });

    $(".select-box__option").on('click', function(){
        $(this).parents('.select-box__current').blur();
        hideError();
    })

    let subThemeGlobalContainer = $("#subThemeContainer");
    let subThemeContainers = $('.js-sub-containers');
    $("input[name='support_form[theme]']").on('change', function(){
        subThemeContainers.hide();
        subThemeContainers.find('input').removeAttr('checked');
        $.each(subThemeContainers,function(){
            $(this).find('.placeholder-value input').prop('checked', true);
        });
        $('.js-sub-containers[data-theme="'+$(this).val()+'"]').show();
        subThemeGlobalContainer.show();
    })

});
$(document).ready(function() {
  let inProgress = false;
  $('.js-pass').on('click', function(){
    $('.page_window_profile').hide();
    $('.password-div').show();
  });
  $('.js-mail').on('click', function(){
    $('.page_window_profile').hide();
    $('.email-div').show();
  });

  $('.js-back').on('click', function(){
    let form = $(this).parents('div');
    form.hide();
    $('.page_window_profile').show();

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
      url: '',
      success: function (result) {
        if(result.success) {

          $.each($('.page_window'),function(){
            $(this).remove();
          });
          successContainer.show();
        }
        else {

          $.each($('.js-hide'),function(){
            $(this).remove();
          });
          successContainer.show();
        }
        inProgress = false;
      }
    });
  });
});

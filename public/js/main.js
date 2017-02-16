
$(document).ready(function(){

    var hideAlert = function() {
        return setTimeout(function () {
            $('.allert').animate({opacity: "hide"});
        }, 3500)
    }

    var ha = hideAlert();

    $('.nav-button').click(function () {
        $('#mob-menu').css('display', 'block');
        $('body,html').css('overflow','hidden');
    })

    $(".menu").on("click","a", function (event) {

        $('#mob-menu').css('display', 'none');
        $('body,html').css('overflow','auto');

        event.preventDefault();

        var id  = $(this).attr('href'),

            top = $(id).offset().top;

        $('body,html').animate({scrollTop: top}, 1500);
    });

    $("#wrap1").on("click","a", function (event) {
        event.preventDefault();

        var id  = $(this).attr('href'),

            top = $(id).offset().top;

        $('body,html').animate({scrollTop: top}, 1500);
    });



    $('#contact-form').submit(function () {

        if($(this).find('#userName').val() == '') {
            clearTimeout(ha);
            $('.allert-error').html('Please confirm the field "Your name" and submit it again.');
            $('.allert-error').css('display', 'block');
            hideAlert();

            $(this).find('#userName').focus();

            return false;
        }

        if( $(this).find('#userEmail').val() == ''){
            clearTimeout(ha);
            $('.allert-error').html('Please confirm the field Email address and submit it again.');
            $('.allert-error').css('display', 'block');
            hideAlert();

            $(this).find('#userEmail').focus();

            return false;
        }


    });

    $('#order-form').submit(function () {

        if($(this).find('#userName').val() == '') {
            clearTimeout(ha);
            $('.allert-error').html('Please confirm the field "Your name" and submit it again.');
            $('.allert-error').css('display', 'block');
            hideAlert();

            top = $(this).find('#userName').offset().top;
            $('body,html').animate({scrollTop: top}, 1500);

            $(this).find('#userName').focus();

            return false;
        }

        if( $(this).find('#userEmail').val() == ''){
            clearTimeout(ha);
            $('.allert-error').html('Please confirm the field Email address and submit it again.');
            $('.allert-error').css('display', 'block');
            hideAlert();

            top = $(this).find('#userEmail').offset().top;
            $('body,html').animate({scrollTop: top}, 1500);

            $(this).find('#userEmail').focus();

            return false;
        }


    });

});
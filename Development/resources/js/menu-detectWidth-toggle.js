$(window).on('scroll', function () {
    if ($(this).scrollTop() > 90) {
        if (!$('.main').hasClass('expand') && !$('.cbp-hsinner').hasClass('expand') && !$('.cbp-hsmenu').hasClass('open-nav') && !$('.webLogo').hasClass('animLogo'))  {
            $('.main').addClass('expand') && $('.cbp-hsinner').addClass('expand') && $('.cbp-hsmenu').addClass('open-nav') && $('.webLogo').addClass('animLogo');
        }
    } else {
        if ($('.main').hasClass('expand') && $('.cbp-hsinner').hasClass('expand') && $('.cbp-hsmenu').hasClass('open-nav') && $('.webLogo').hasClass('animLogo')) {
            $('.main').removeClass('expand') && $('.cbp-hsinner').removeClass('expand') && $('.cbp-hsmenu').removeClass('open-nav') && $('.webLogo').removeClass('animLogo');
        }
    }
});

$(document).ready(function() {
    $(".c-hamburger").click(function(){
        $(this).parent('div').next('.cbp-hsmenu').toggle();
    });
});
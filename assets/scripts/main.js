$(document).ready(function() {
    initMenu();
});

$('input').focusin(function() {
    $('.has-feedback').addClass("showClass");
});

$('input').focusout(function() {
    $('.has-feedback').removeClass("showClass");
});

$('#nav-burger').click(function(e) {
    e.preventDefault();
    $('#wrapper').toggleClass('toggled');
});

function initMenu() {
    $('#menu ul').hide();

    $('#menu ul').children('.current').parent().show();

    $('#menu li a').click(
        function() {
            var checkElement = $(this).next();

            if((checkElement.is('ul')) && (checkElement.is(':visible'))) {
                return false;
            }

            if((checkElement.is('ul')) && (!checkElement.is(':visible'))) {
                $('#menu ul:visible').slideUp('normal');
                checkElement.slideDown('normal');
                return false;
            }
        }
    );
}

!function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0], p = /^http:/.test(d.location)?'http':'https';
    
    if(!d.getElementById(id)) {
        js = d.createElement(s);
        js.id = id;
        js.src = p + "://platform.twitter.com/widgets.js";
        fjs.parentNode.insertBefore(js, fjs);
    }
} (document, "script", "twitter-wjs");
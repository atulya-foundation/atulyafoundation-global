function openNav() {
    document.getElementById("mySidenav").style.width = "100%";
    document.getElementById("main").style.marginRight = "100%";
    $('#content').css("display", "none");
    $('#main .logo').css("display", "none");
    $('body').css("overflow-y", "hidden");
}


function openNav1() {
    document.getElementById("mySidenav1").style.width = "100%";
    document.getElementById("main").style.marginRight = "70%";
    $('body').css("overflow-y", "hidden");
    $('#content').css("display", "none");
    $('#main .logo').css("display", "none");
    $('#mySidenav1').css("overflow-y", "hidden");
}



$(document).ready(function () {

    $('#home').hover(function () {

        var x = $("#slider .wrap-slider").offset().left;
        if (x >= -665) {
            $('#slider .wrap-slider').css({

                "display": "block",
                "left": "0%",
                "background-image": "url('assets/img/bg/ph.jpg')"
            });

            setTimeout(function () {
                $('#slider .wrap-slider1').css({
                    "left": "-100%",
                });
            }, 50);
        } else {
            $('#slider .wrap-slider').css({
                "left": "-100%",
            });

            setTimeout(function () {
                $('#slider .wrap-slider1').css({
                    "display": "block",
                    "left": "0%",
                    "background-image": "url('assets/img/bg/ph.jpg')"
                });
            }, 50);
        }

    });


    $('#who').hover(function () {

        var x = $("#slider .wrap-slider").offset().left;

        if (x <= -665) {
            $('#slider .wrap-slider').css({

                "display": "block",
                "left": "0%",
                "background-image": "url('assets/img/who.jpg')"
            });

            setTimeout(function () {
                $('#slider .wrap-slider1').css({
                    "left": "-100%",
                });
            }, 50);
        } else {
            $('#slider .wrap-slider').css({
                "left": "-100%",
            });

            setTimeout(function () {
                $('#slider .wrap-slider1').css({
                    "display": "block",
                    "left": "0%",
                    "background-image": "url('assets/img/who.jpg')"
                });
            }, 50);
        }

    });



    $("#service").hover(function () {

        var x = $("#slider .wrap-slider").offset().left;

        if (x >= -665) {
            $('#slider .wrap-slider').css({

                "display": "block",
                "left": "0%",
                "background-image": "url('assets/img/services.jpg')"
            });

            setTimeout(function () {
                $('#slider .wrap-slider1').css({
                    "left": "-100%",
                });
            }, 50);
        } else {
            $('#slider .wrap-slider').css({
                "left": "-100%",
            });

            setTimeout(function () {
                $('#slider .wrap-slider1').css({
                    "display": "block",
                    "left": "0%",
                    "background-image": "url('assets/img/services.jpg')"
                });
            }, 50);
        }

    });
    $("#artist").hover(function () {

        var x = $("#slider .wrap-slider").offset().left;
        if (x <= -665) {
            $('#slider .wrap-slider').css({

                "display": "block",
                "left": "0%",
                "background-image": "url('assets/img/person-holding-paintbrush-3959004.jpg')"
            });

            setTimeout(function () {
                $('#slider .wrap-slider1').css({
                    "left": "-100%",
                });
            }, 50);
        } else {
            $('#slider .wrap-slider').css({
                "left": "-100%",
            });

            setTimeout(function () {
                $('#slider .wrap-slider1').css({
                    "display": "block",
                    "left": "0%",
                    "background-image": "url('assets/img/m6.jpg')"
                });
            }, 50);
        }

    });
});


function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
    document.getElementById("main").style.marginRight = "0";

    $('#main').css({
        "background-image": "url('assets/img/photo-of-statue-2929886.jpg')",
        "background-position": "0px 0px!important",
        "background-size": "100% 100%"
    });

    $('#content').css("display", "flex");
    $('#main .logo').css("display", "block");
    $('body').css("overflow-y", "scroll");
}

function closeNav1() {
    document.getElementById("mySidenav1").style.width = "0";
    document.getElementById("main").style.marginRight = "0";

    $('#main').css({
        "background-image": "url('assets/img/photo-of-statue-2929886.jpg')",
        "background-position": "0px 0px!important",
        "background-size": "100% 100%"
    });

    $('#content').css("display", "flex");
    $('#main .logo').css("display", "block");
    $('body').css("overflow-y", "scroll");
}

$(function () {
    $('.scroll1').infiniteslide({
        speed: 100
    });
});

var totalItems = $('.carousel-item').length;
var currentIndex = $('div.active').index() + 1;
$('.num').html('0' + currentIndex + '-' + '0' + totalItems + '');

$('#carouselExampleIndicators').on('slid.bs.carousel', function () {
    currentIndex = $('div.active').index() + 1;
    $('.num').html('0' + currentIndex + '-' + '0' + totalItems + '');
});

function openNav() {
    document.getElementById("mySidenav").style.width = "100%";
    document.getElementById("main").style.marginRight = "100%";
    $('#content').css("display", "none");
    $('#main .logo').css("display", "none");
    $('#mySidenav').css("overflow", "hidden");
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
    $('#about').hover(function () {
        $("#mySidenav").css({
            "background": "url('assets/img/bg/about.jpg')"
        });

        $('#mySidenav ul li a').css({
            "color": "white"
        });

    });

    $('#home').hover(function () {
        $("#mySidenav").css({
            "background": "#F6F5F4",
            "transition": "all 0.8s"
        });

        $('#mySidenav ul li a').css({
            "color": "#1F1F1F"
        });

    });

    $('#crafts').hover(function () {
        $("#mySidenav").css({
            "background": "url('assets/img/bg/2.jpg')"
        });

        $('#mySidenav ul li a').css({
            "color": "white"
        });

    });



    /* $('#home').hover(function () {

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
             }, 15);
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
             }, 15);
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
             }, 15);
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
             }, 15);
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
             }, 15);
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
             }, 15);
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
             }, 15);
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
             }, 15);
         }

     });*/
});


function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
    document.getElementById("main").style.marginRight = "0";

    $('#main').css({
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
        'speed': 100,
        'pauseonhover': false

    });
});

var totalItems = $('.carousel-item').length;
var currentIndex = $('div.active').index() + 1;
$('.num').html('0' + currentIndex + '-' + '0' + totalItems + '');

$('#carouselExampleIndicators').on('slid.bs.carousel', function () {
    currentIndex = $('div.active').index() + 1;
    $('.num').html('0' + currentIndex + '-' + '0' + totalItems + '');
});

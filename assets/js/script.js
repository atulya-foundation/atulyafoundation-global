function openNav() {
    if ($('#mySidenav ul li a').hasClass("fadeOutDown") == true) {
        $('#mySidenav ul li a').removeClass("fadeOutDown animated");
    }
    $('#mySidenav ul li a').addClass("fadeInUp animated");
    $('body').css("overflow-y", "hidden");
    document.getElementById("mySidenav").style.height = "100%";
    document.getElementById("main").style.margintop = "100%";
    $('#content').css("display", "none");
    $('#main .logo').css("display", "none");
    $('#mySidenav').css("overflow", "hidden");
    $('.closebtn').css("display", "block");

}



function closeNav() {
    $('#mySidenav ul li a').removeClass(" fadeInUp animated");
    $('#mySidenav ul li a').addClass(" fadeOutDown animated");
    $('body').css("overflow-y", "scroll");
    document.getElementById("mySidenav").style.height = "0";
    document.getElementById("main").style.marginTop = "0";

    $('.closebtn').css("display", "none");



    $('#content').css("display", "flex");
    $('#main .logo').css("display", "block");


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

    $('#mySidenav li a').click(function () {
        $('#mySidenav ul li a').removeClass(" fadeInUp animated");
        $('#mySidenav ul li a').addClass(" fadeOutDown animated");
        $('body').css("overflow-y", "scroll");
        document.getElementById("mySidenav").style.height = "0";
        document.getElementById("main").style.marginTop = "0";

        $('.closebtn').css("display", "none");



        $('#content').css("display", "flex");
        $('#main .logo').css("display", "block");
    });

    $(function () {


        $('.scroll1').infiniteslide({
            'speed': 100,
            'pauseonhover': false,
            'responsive': true
        });


    });

    $('#about').hover(function () {
        $("#mySidenav").css({
            "background-image": "url('assets/img/bg/about.jpg')"
        });

        $('#mySidenav ul li a').css({
            "color": "white"
        });

    }, function () {
        $("#mySidenav").css({
            "background-image": "url('assets/img/navbg.png')",
        });
        $('#mySidenav ul li a').css({
            "color": "black"
        });
    });

    $('#home').hover(function () {
        $("#mySidenav").css({
            "background-image": "url('assets/img/bg/2.jpg')",
        });

        $('#mySidenav ul li a').css({
            "color": "white"
        });

    }, function () {
        $("#mySidenav").css({
            "background-image": "url('assets/img/navbg.png')",
        });
        $('#mySidenav ul li a').css({
            "color": "black"
        });
    });

    $('#crafts').hover(function () {
        $("#mySidenav").css({
            "background": "url('assets/img/bg/2.jpg')"
        });

        $('#mySidenav ul li a').css({
            "color": "white"
        });

    }, function () {
        $("#mySidenav").css({
            "background-image": "url('assets/img/navbg.png')",
        });
        $('#mySidenav ul li a').css({
            "color": "black"
        });
    });


    $('#design').hover(function () {
        $("#mySidenav").css({
            "background": "url('assets/img/bg/2.jpg')"
        });

        $('#mySidenav ul li a').css({
            "color": "white"
        });

    }, function () {
        $("#mySidenav").css({
            "background-image": "url('assets/img/navbg.png')",
        });
        $('#mySidenav ul li a').css({
            "color": "black"
        });
    });

    $('#arts').hover(function () {
        $("#mySidenav").css({
            "background": "url('assets/img/bg/about.jpg')"
        });

        $('#mySidenav ul li a').css({
            "color": "white"
        });

    }, function () {
        $("#mySidenav").css({
            "background-image": "url('assets/img/navbg.png')",
        });
        $('#mySidenav ul li a').css({
            "color": "black"
        });
    });

    $('#news').hover(function () {
        $("#mySidenav").css({
            "background": "url('assets/img/bg/about.jpg')"
        });

        $('#mySidenav ul li a').css({
            "color": "white"
        });

    }, function () {
        $("#mySidenav").css({
            "background-image": "url('assets/img/navbg.png')",
        });
        $('#mySidenav ul li a').css({
            "color": "black"
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



var totalItems = $('.carousel-item').length;
var currentIndex = $('div.active').index() + 1;
$('.num').html('0' + currentIndex + '-' + '0' + totalItems + '');

$('#carouselExampleIndicators').on('slid.bs.carousel', function () {
    currentIndex = $('div.active').index() + 1;
    $('.num').html('0' + currentIndex + '-' + '0' + totalItems + '');
});



$(document).ready(function () {
    window.addEventListener('scroll', function (e) {
        if (isOnScreen(jQuery('#scrollhere'))) {
            /* Pass element id/class you want to check */
            $('#toggle').attr("src", "assets/img/toggle_icon_black.svg");
        } else {
            $('#toggle').attr("src", "assets/img/toggle-white.svg");
        }
    });

});





function isOnScreen(elem) {
    // if the element doesn't exist, abort
    if (elem.length == 0) {
        return;
    }
    var $window = jQuery(window)
    var viewport_top = $window.scrollTop()
    var viewport_height = $window.height()
    var viewport_bottom = viewport_top + viewport_height
    var $elem = jQuery(elem)
    var top = $elem.offset().top
    var height = $elem.height()
    var bottom = top + height

    return (top >= viewport_top && top < viewport_bottom) ||
        (bottom > viewport_top && bottom <= viewport_bottom) ||
        (height > viewport_height && top <= viewport_top && bottom >= viewport_bottom)
}

$(function () {

    $('.input-group input').focusout(function () {

        var text_val = $(this).val();

        if (text_val === "") {

            $(this).removeClass('has-value');

        } else {

            $(this).addClass('has-value');

        }

    });

});

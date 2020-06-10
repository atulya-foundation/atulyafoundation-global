function openNav() {
    document.getElementById("mySidenav").style.width = "75%";
    document.getElementById("main").style.marginRight = "75%";
    $('#content').css("display", "none");
    $('#main .logo').css("display", "none");
    $('body').css("overflow-y", "hidden");
}


function openNav1() {
    document.getElementById("mySidenav1").style.width = "100%";
    document.getElementById("main").style.marginRight = "75%";
    $('#content').css("display", "none");
    $('#main .logo').css("display", "none");
    $('body').css("overflow-y", "hidden");
}



$(document).ready(function () {
    $("#home").hover(function () {
        $('#main').css({
            "background-image": "url('assets/img/photo-of-statue-2929886.jpg')",
            "background-size": "cover",
            "background-position": "-266px 0px"
        });
    });
    $("#service").hover(function () {
        $('#main').css("background-image", "url(https://designmodo.com/wp-content/uploads/2014/02/type-960x540.jpg)");
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






function openNav() {
    1 == $("#mySidenav ul li a").hasClass("fadeOutDown") && $("#mySidenav ul li a").removeClass("fadeOutDown animated"),
        $("#mySidenav ul li a").addClass("fadeInUp animated"),

        $("body").css("overflow-y", "hidden"),
        document.getElementById("mySidenav").style.height = "100%",
        document.getElementById("main").style.margintop = "100%",
        $("#content").css("display", "none"),
        $("#main .logo").css("display", "none"),
        $("#mySidenav").css({"overflow": "hidden !important"}),
        $(".closebtn").css("display", "block")
}

function closeNav() {
    1 == $("#mySidenav ul li a").hasClass("fadeInUp") && $("#mySidenav ul li a").removeClass("fadeInUp animated"),
        // $("#mySidenav ul li a").removeClass(" fadeInUp animated"),
        $("#mySidenav ul li a").addClass("fadeOutDown animated"),

        $("body").css("overflow-y", "scroll"),
        document.getElementById("mySidenav").style.height = "0",
        document.getElementById("main").style.marginTop = "0",
        $(".closebtn").css("display", "none"),
        $("#content").css("display", "flex"),
        $("#main .logo").css("display", "block")
}

$(document).ready(function () {
    $("#mySidenav li a").click(function () {
        $("#mySidenav ul li a").removeClass(" fadeInUp animated"),
            $("#mySidenav ul li a").addClass(" fadeOutDown animated"),
            $("body").css("overflow-y", "scroll"),
            document.getElementById("mySidenav").style.height = "0",
            document.getElementById("main").style.marginTop = "0",
            $(".closebtn").css("display", "none"),
            $("#content").css("display", "flex"),
            $("#main .logo").css("display", "block")
    })

    $(".nav-main-menu").hover(function () {
        $(".nav-menu a").addClass("hover-active");
    }, function () {
        $(".nav-menu a").removeClass("hover-active");
    });


    function setHoverBg(a, bg) {
        a.hover(function () {
            bg.stop().fadeIn(500);
        }, function () {
            bg.stop().fadeOut(500);
        });
    }

    setHoverBg($("#arts"), $("#arts-bg"));
    setHoverBg($("#crafts"), $("#crafts-bg"));
    setHoverBg($("#design"), $("#design-bg"));
    setHoverBg($("#about"), $("#about-bg"));
});

var totalItems = $(".carousel-item").length,
    currentIndex = $("div.active").index() + 1;

function isOnScreen(e) {
    if (0 != e.length) {
        var s = jQuery(window),
            a = s.scrollTop(),
            n = s.height(),
            o = a + n,
            t = jQuery(e),
            l = t.offset().top + 100,
            i = t.height(),
            c = l + i;
        return l >= a && l < o || c > a && c <= o || i > n && l <= a && c >= o
    }
}

$(".num").html("0" + currentIndex + "-0" + totalItems), $("#carouselExampleIndicators").on("slid.bs.carousel", function () {
    currentIndex = $("div.active").index() + 1, $(".num").html("0" + currentIndex + "-0" + totalItems)
}), $(document).ready(function () {
    window.addEventListener("scroll", function (e) {
        isOnScreen(jQuery("#scrollhere")) ? $("#toggle").attr("src", "assets/img/toggle_icon_black.svg") : $("#toggle").attr("src", "assets/img/toggle-white.svg")
    })
}), $(function () {
    $(".input-group input").focusout(function () {
        "" === $(this).val() ? $(this).removeClass("has-value") : $(this).addClass("has-value")
    })
});


$(document).ready(function () {
    $('.toooop li').click(function (e) {

        $('.toooop li').removeClass('active');

        var $this = $(this);
        if (!$this.hasClass('active')) {
            $this.addClass('active');
        }
        //e.preventDefault();
    });
});

$(document).ready(function () {
    const volunteer_form = document.getElementById('volunteer-program-form');
    if (volunteer_form) {
        volunteer_form.addEventListener("submit", e => {
            e.preventDefault();
            fetch(volunteer_form.action, {
                method: "POST",
                body: new FormData(volunteer_form),
            }).then(
                response => response.json()
            ).then((response) => {
                if (response.created === 1) {
                    $("#volunteer-form-toast-success").toast({delay: 3000});
                    $('#volunteer-form-toast-success').toast('show');
                    volunteer_form.reset();
                } else {
                    throw "invalid";
                }
            }).catch(() => {
                $("#volunteer-form-toast-failure").toast({delay: 3000});
                $('#volunteer-form-toast-failure').toast('show');
            });
        });
    }

    const artists_form = document.getElementById('artists-form');
    if (artists_form) {
        artists_form.addEventListener("submit", e => {
            e.preventDefault();
            fetch(artists_form.action, {
                method: "POST",
                body: new FormData(artists_form),
            }).then(
                response => response.json()
            ).then((response) => {
                if (response.created === 1) {
                    $("#artist-form-toast-success").toast({delay: 3000});
                    $('#artist-form-toast-success').toast('show');
                    artists_form.reset();
                } else {
                    throw "invalid";
                }
            }).catch((err) => {
                $("#artist-form-toast-failure").toast({delay: 3000});
                $('#artist-form-toast-failure').toast('show');
            });
        });
    }

    const get_in_touch_form = document.getElementById('get-in-touch-form');
    if (get_in_touch_form) {
        get_in_touch_form.addEventListener("submit", e => {
            e.preventDefault();
            fetch(get_in_touch_form.action, {
                method: "POST",
                body: new FormData(get_in_touch_form),
            }).then(
                response => response.json()
            ).then((response) => {
                if (response.created === 1) {
                    $("#get-in-touch-form-toast-success").toast({delay: 3000});
                    $('#get-in-touch-form-toast-success').toast('show');
                    get_in_touch_form.reset();
                } else {
                    throw "invalid";
                }
            }).catch((err) => {
                $("#get-in-touch-form-toast-failure").toast({delay: 3000});
                $('#get-in-touch-form-toast-failure').toast('show');
            });
        });
    }
});


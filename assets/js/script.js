function openNav() {
    1 == $("#mySidenav ul li a").hasClass("fadeOutDown") && $("#mySidenav ul li a").removeClass("fadeOutDown animated"), 
         $("#mySidenav ul li a").addClass("fadeInUp animated"),
         
         $("body").css("overflow-y", "hidden"), 
         document.getElementById("mySidenav").style.height = "100%", 
         document.getElementById("main").style.margintop = "100%", 
         $("#content").css("display", "none"), 
         $("#main .logo").css("display", "none"), 
         $("#mySidenav").css({"overflow" : "hidden !important"}),  
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
    }), 
    $(function () {
        $(".scroll1").infiniteslide({
            speed: 100,
            pauseonhover: !1,
            responsive: !0
        });
    
    }),
    // $("#mySidenav").css({"background":"rgb(248 244 242 / 1)"}),
    $("#about").hover(function () {
        $("#mySidenav").css({
            
            
            "background": "url('assets/img/navbar/About Us_AF.jpg')",
            "transition":" 500ms ease-in-out all"   
            
        }), $(".color_h_w li a").addClass("color_change"), $("#design , #crafts , #arts").addClass("color_change")
    }, function () {
        $("#mySidenav").css({
             "background": "rgb(248 244 242 / 1)",
             "transition":"background 100ms ease-in-out all"

        }), $(".color_h_w li a").removeClass("color_change"), $("#design , #crafts , #arts").removeClass("color_change")
    }), $("#crafts").hover(function () {
        $("#mySidenav").css({
            "background": "url('assets/img/navbar/crafts_AF.jpg')",
             "transition":" 500ms ease-in-out all"   
        
        }), $(".color_h_w li a").addClass("color_change"), $("#design , #about , #arts").addClass("color_change")
    }, function () {
        $("#mySidenav").css({
             "background": "rgb(248 244 242 / 1)",
             "transition":"background 100ms ease-in-out all"       
         }), $(".color_h_w li a").removeClass("color_change"), $("#design , #about , #arts").removeClass("color_change")
    }), $("#design").hover(function () {
        $("#mySidenav").css({
            "background": "url('assets/img/navbar/Design_AF.jpg')",
             "transition":" 500ms ease-in-out all"   
        }), $(".color_h_w li a").addClass("color_change"), $(" #about , #crafts , #arts").addClass("color_change")
    }, function () {
        $("#mySidenav").css({
             "background": "rgb(248 244 242 / 1)",
             "transition":"background 100ms ease-in-out all"
        }), $(".color_h_w li a").removeClass("color_change"), $(" #about , #crafts , #arts").removeClass("color_change")
    }), $("#arts").hover(function () {
        $("#mySidenav").css({
            "background": "url('assets/img/navbar/Arts_AF.jpg')",
            "transition":" 500ms ease-in-out all"   
        }), $(".color_h_w li a").addClass("color_change"), $("#design , #crafts ,  #about").addClass("color_change")
    }, function () {
        $("#mySidenav").css({

             "background": "rgb(248 244 242 / 1)",
             "transition":"background 100ms ease-in-out all"          
        }), $(".color_h_w li a").removeClass("color_change"), $("#design , #crafts ,  #about").removeClass("color_change")
    })
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
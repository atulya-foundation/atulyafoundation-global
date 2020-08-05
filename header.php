<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="robots" content="noindex, noimageindex, nofollow, nosnippet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atulya Foundation</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.3.0/animate.css" />

    <?php   
        $link = $_SERVER['PHP_SELF'];
        $link_array = explode('/',$link);
        $page = end($link_array);
        
        if($page=="atulya-digital.php" || $page=="atulya-crafts.php" ){
            $bg_body_color = "#F0EDE9";
            $logo = "Component1.svg";
            $nav_toggle = "toggle_icon_black.svg";
        }
    
        elseif($page=="get-in-touch.php" ){
            $bg_body_color = "#F6F4F2";
            $logo = "Component1.svg";
            $nav_toggle = "toggle_icon_black.svg";
        }
    
        elseif($page=="news-and-articles.php" || $page=="blog-details.php"){
            $bg_body_color = "#1C1C1C";
            $logo = "Component.png";
            $nav_toggle = "Icon%20ionic-ios-menu.svg";
        }
        
        else{
            $bg_body_color = "#FFFFFF";
            $logo = "Component1.svg";
            $nav_toggle = "toggle_icon_black.svg";
        }
    ?>

</head>



<body style="background:<?php echo $bg_body_color ?>" id="body">
    <header>
        <div id="mySidenav" class="sidenav">
            <div class="row">
                <!--div class="col-xl-4 vh-100 view-desktop" id="box">

                </div-->
                <div class="col-xl-1"></div>
                <div class="col-xl-5 nav-menu doomst">
                    <ul class="wowWrap">
                        <!--  <li><a id="home" href="javascript:void(0)"> Homepage</a></li>-->
                        <li><a id="about" class="wow" href="about">About us</a></li>
                        <li><a id="design" class="wow" data-wow-delay="0.10s" href="atulya-digital">Atulya Designs</a></li>

                        <li><a id="crafts" class="wow" data-wow-delay="0.20s" href="atulya-crafts">Atulya Crafts</a></li>
                        <li><a id="arts" class="wow" data-wow-delay="0.25s" href="premium-collection">Atulya Arts</a></li>

                    </ul>
                </div>

                <div class="col-xl-4 nav-menu small-nav">
                    <ul>
                        <li><a href="volunteer-program">Join as Volunteer</a></li>
                        <li><a href="atulya-artists#join">Join As Artist</a></li>
                        <li><a href="atulya-artists#benefits">Artist Network Benefits</a></li>
                        <li><a href="volunteer-program">Join as Volunteer</a></li>
                        <li><a href="news-and-articles">News and Articles</a></li>
                        <li><a href="about#team">Our Team</a></li>
                        <li><a data-wow-delay="0.30s" href="get-in-touch">Get in touch</a></li>
                    </ul>
                </div>
                <div class="col-xl-12"></div>
                <div class="col-xl-1"></div>
                <div class="col-xl-5" style="margin-top:7%">
                    <ul class="social-head">
                        <li><a href="https://www.instagram.com/atulya_foundation/" target="_blank">Instagram</a></li>
                        <li><a href="https://www.facebook.com/Aulyafoundation" target="_blank">Facebook</a></li>
                        <li><a href="https://www.linkedin.com/company/atulya" target="_blank">Linkedin</a></li>
                        <li><a href="https://www.youtube.com/channel/UCFaDTKXpGJ7P8izz0inccNg" target="_blank">Youtube</a></li>
                    </ul>
                </div>
                <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
            </div>
        </div>
    </header>
    <section class="main">
        <div onclick="openNav()" class="toggle-btn"><img src="assets/img/<?php echo $nav_toggle ?>" alt=""></div>
        <div class="logo ">
            <a href="index"><img src="assets/img/<?php echo $logo ?>" class="img-fluid" alt=""></a>
        </div>
    </section>

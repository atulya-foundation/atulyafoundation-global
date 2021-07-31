<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atulya Foundation</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/newStyle.css">
    <link rel="stylesheet" type="text/css" href="assets/css/screen.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.3.0/animate.css"/>

    <?php
    $link = $_SERVER['PHP_SELF'];
    $link_array = explode('/', $link);
    $page = end($link_array);

    if ($page == "designs.php" || $page == "crafts.php" || $page == "arts.php" ) {
        $bg_body_color = "#F0EDE9";
        $logo = "Component1.svg";
        $nav_toggle = "toggle_icon_black.svg";
    } elseif ($page == "get-in-touch.php") {
        $bg_body_color = "#F6F4F2";
        $logo = "Component1.svg";
        $nav_toggle = "toggle_icon_black.svg";
    } elseif ($page == "news-and-articles.php" || $page == "blog-details.php") {
        $bg_body_color = "#1C1C1C";
        $logo = "Component.png";
        $nav_toggle = "Icon ionic-ios-menu.png";
    } else {
        $bg_body_color = "#FFFFFF";
        $logo = "Component1.svg";
        $nav_toggle = "toggle_icon_black.svg";
    }
    ?>

</head>


<body style="background:<?php echo $bg_body_color ?>" id="body">
<div id="mySidenav" class="sidenav" >
        <div id="arts-bg" class="bg-image" style="background-image: url('assets/img/navbar/Arts_2.jpg')"></div>
        <div id="crafts-bg" class="bg-image" style="background-image: url('assets/img/navbar/Crafts_2.jpg')"></div>
        <div id="design-bg" class="bg-image" style="background-image: url('assets/img/navbar/Designs_2.jpg')"></div>
        <div id="about-bg" class="bg-image" style="background-image: url('assets/img/navbar/About Us_AF.jpg')"></div>

        <div class="row nb">
            <!--div class="col-xl-4 vh-100 view-desktop" id="box">

            </div-->
            <div class="col-xl-1" style="margin-right : 0; padding: 0"></div>
            <div class="col-xl-5 nav-menu doomst">
                <ul>
                    <!--  <li><a id="home" href="javascript:void(0)"> Homepage</a></li>-->
                    <li><a id="arts" class="nav-main-menu" href="arts">Atulya Arts</a></li>
                    <li><a id="crafts" class="nav-main-menu" href="crafts">Atulya Crafts</a></li>
                    <li><a id="design" class="nav-main-menu" href="designs">Atulya Designs</a></li>
                    <li><a id="about" class="nav-main-menu" href="consulting">Art Consulting</a></li>
                </ul>
            </div>

            <div class="col-xl-4 nav-menu">
                <div class="row justify-content-end">
                    <div class="col-xl-12  small-nav color_h_w">
                        <ul class="sec">
                            <li><a href="about-us">About Us</a></li>
                            <li><a href="art-collection">Art Collection</a></li>
                            <li><a href="volunteer-program">Join as Volunteer</a></li>
                            <li><a href="atulya-artists">Join As Artist</a></li>
                            <li><a href="atulya-artists#benefits">Artist Network Benefits</a></li>
                            
                            <li><a href="about-us#team">Our Team</a></li>
                            <li><a data-wow-delay="0.30s" href="get-in-touch">Get in touch</a></li>
                        </ul>
                    </div>
                    <div class="col-xl-12 color_h_w " >
                        <ul class="social-head">
                            <li><a href="https://www.instagram.com/atulya_foundation/" target="_blank">Instagram</a></li>
                            <li><a href="https://www.facebook.com/Aulyafoundation" target="_blank">Facebook</a></li>
                            <li><a href="https://www.linkedin.com/company/atulya" target="_blank">Linkedin</a></li>
                            <li><a href="https://www.youtube.com/channel/UCFaDTKXpGJ7P8izz0inccNg" target="_blank">Youtube</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-xl-12"></div>
            <div class="col-xl-1"></div>
            <div class="col-xl-5">
            </div>
            <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
        </div>
    </div>
</header>
<section class="main bgnv">
    <div onclick="openNav()" class="toggle-btn"><img src="assets/img/<?php echo $nav_toggle ?>" alt=""></div>
    <div class="logo ">
        <a href="/"><img src="assets/img/<?php echo $logo ?>" class="img-fluid" alt=""></a>
    </div>
</section>

<nav class="navbar navbar-dark fixed-top n" style="background-color: #000000!important;">
    <a href="/" class="brand"><img src="assets/img/Component2.svg" class="img-fluid" alt=""></a>
    <div onclick="openNav()" class="btn "><img src="assets/img/toggle-white.svg" alt=""></div>
</nav>

<style type="text/css">
    .n {
        visibility: hidden;
        display: none;
    }
    
    @media only screen and (min-width:992px) and (max-width: 1199px) {
        body{
            overflow:auto !important;
        }
        
        .bgnv {
            visibility: hidden;
            display: none;
        }

        .n {
            visibility: visible;

            display: flex;
        }

        .n .brand {
            margin-top: 1.6vh;
            margin-bottom: 1.6vh;
        }

        .n .btn {
            height: 2vh;
            width: 6vw;
            margin-right: 1vw;
            right: 7.292vw;
            padding-top: 0rem;
            margin-top: 0rem;
        }

        .logo-pos{
            visibility:hidden;
        }

        .sidenav{
            background-color:black;
        }
        .sidenav ul li a {
            /* font-size: 2.187rem !important; */
            margin: 0.825rem 0rem 0rem 0rem !important;
            color: #EAEAEA !important;
            letter-spacing: 0rem !important;
        }
        .social-head {
            visibility: hidden;
        }
        .closebtn {
            color: #EAEAEA !important;
        }
        .nav-menu{
            padding-top:8vh;
        }
        .small-nav ul li a{
            font: 300 3rem Poppins, sans-serif;
        }
    }

    @media only screen and (max-width: 991px) {

            body{
                overflow:auto !important;
            }
            .bgnv {
                visibility: hidden;
                display: none;
            }

            .n {
                visibility: visible;

                display: flex;
                /*margin-left: 0rem;
                padding-left: 0rem !important; */
            }

            .n .brand {
                margin-top: 1rem;
                margin-bottom: 1rem;
            }

            .n .btn {
                padding-top: 0rem;
                margin-top: 0rem;
            }

            .btn-call-to-action {
                font-weight: normal !important;
            }

            .j-center {
                text-align: center;
            }

            .f-left {
                justify-content: center !important;
            }

            .form-control {
                width: 90% !important;
            }

            .icon {
                visibility: visible;
                display: flex;
            }

            .text1 {
                visibility: hidden;
                display: none;
            }

            section .container h1 {
                font-size: 2.5rem !important;
            }

            section .container h2 {
                /* font-size: 2.5rem !important; */
            }

            .live h2 {
                letter-spacing: 0rem !important;
            }

            .fab {
                font-size: 1rem;
            }
        }


</style>
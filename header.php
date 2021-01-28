<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="robots" content="noindex, noimageindex, nofollow, nosnippet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atulya Foundation</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
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
    } elseif ($page == "contact-us.php") {
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
<div id="mySidenav" class="sidenav" style="overflow: hidden !important;">
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
                <li><a id="arts" class="nav-main-menu" href="arts.php">Atulya Arts</a></li>
                <li><a id="crafts" class="nav-main-menu" href="crafts.php">Atulya Crafts</a></li>
                <li><a id="design" class="nav-main-menu" href="designs.php">Atulya Designs</a></li>
                <li><a id="about" class="nav-main-menu" href="consulting.php">Art Consulting</a></li>
            </ul>
        </div>

        <div class="col-xl-4 nav-menu">
            <div class="row justify-content-end">
                <div class="col-xl-12  small-nav color_h_w">
                    <ul class="sec">
                        <li><a href="about-us.php">About Us</a></li>
                        <li><a href="premium-collection.php">Art Collection</a></li>
                        <li><a href="volunteer-program.php">Join as Volunteer</a></li>
                        <li><a href="atulya-artists.php">Join As Artist</a></li>
                        <li><a href="atulya-artists.php#benefits">Artist Network Benefits</a></li>
                        
                        <li><a href="about-us.php#team">Our Team</a></li>
                        <li><a data-wow-delay="0.30s" href="contact-us.php">Get in touch</a></li>
                    </ul>
                </div>
                <div class="col-xl-12 color_h_w " style="margin-top: 0rem; margin-left: 3rem;">
                    <ul class="social-head">
                        <li><a href="#" target="_blank" style="padding-left: 6rem;">Email</a></li>
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
        <a href="index.php"><img src="assets/img/<?php echo $logo ?>" class="img-fluid" alt=""></a>
    </div>
</section>

<nav class="navbar navbar-dark fixed-top n" style="background-color: #000000!important;">
    <a href="index.php" class="brand"><img src="assets/img/Component2.svg" class="img-fluid" alt=""></a>
    <div onclick="openNav()" class="btn "><img src="assets/img/toggle-white.svg" alt=""></div>
</nav>

<style type="text/css">
    .n {
        visibility: hidden;
        display: none;
    }

    @media only screen and (max-width: 768px) {
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
            height: 0.625rem;
            width: 2.8125rem;
            margin-right: 1rem;
            right: 7.292vw;
        }
    }

    @media screen and (width: 1024px) {
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
            height: 0.625rem;
            width: 2.8125rem;
            margin-right: 1rem;
            right: 7.292vw;
        }
    }

</style>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="robots" content="noindex, noimageindex, nofollow, nosnippet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/style.css">

    <?php   
        $link = $_SERVER['PHP_SELF'];
        $link_array = explode('/',$link);
        $page = end($link_array);
        
        if($page=="atulya-digital.php" || $page=="atulya-crafts.php" ){
            $bg_body_color = "#D8D4CE";
            $logo = "Component1.svg";
            $nav_toggle = "toggle_icon_black.svg";
        }
    
        elseif($page=="get-in-touch.php"){
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
        <div id="mySidenav1" class="sidenav other">
            <ul>
                <li id="home"><a href="index.php"> Home</a></li>
                <li class="has-drop-down" id="who"><a href="javascript:void(0)">Who we are</a>
                    <ul class="">
                        <li><a href="about.php">About us</a></li>
                        <li><a href="about.php#team">Meet the Team</a></li>
                        <li><a href="about.php#clients">Our Clients</a></li>
                    </ul>
                </li>
                <li class="has-drop-down" id="service"><a href="javascript:void(0)">Services</a>
                    <ul class="">
                        <li><a href="atulya-digital.php">Atulya Digital</a></li>
                        <li><a href="atulya-crafts.php">Atulya Crafts</a></li>
                        <li><a href="premium-collection.php">Premium collection</a></li>
                    </ul>
                </li>
                <li class="has-drop-down" id="artist"><a href="javascript:void(0)">Atulya Artists</a>
                    <ul class="">
                        <li><a href="volunteer-program.php#network">Join Artist Network</a></li>
                        <li><a href="">Network Benefits</a></li>
                    </ul>
                </li>
                <li><a href="volunteer-program.php">Volunteer with us</a></li>
                <li><a href="news-and-articles.php">News and Articles</a></li>
                <li><a href="get-in-touch.php">Get in touch</a></li>
            </ul>
            <ul class="social-head view-desktop">
                <li>Official Channels</li>
                <li>|</li>
                <li><a href="#">Instagram</a></li>
                <li><a href="#">Facebook</a></li>
                <li><a href="#">Linkedin</a></li>
            </ul>
            <a href="javascript:void(0)" class="closebtn" onclick="closeNav1()">&times;</a>
        </div>
    </header>
    <section class="main">
        <div onclick="openNav1()" class="toggle-btn"><img src="assets/img/<?php echo $nav_toggle ?>" alt=""></div>
        <div class="logo">
            <a href="index.php"><img src="assets/img/<?php echo $logo ?>" class="img-fluid" alt=""></a>
        </div>
    </section>

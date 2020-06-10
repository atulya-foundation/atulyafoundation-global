<html lang="en">

<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="robots" content="noindex, noimageindex, nofollow, nosnippet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    
    <?php   
        $link = $_SERVER['PHP_SELF'];
        $link_array = explode('/',$link);
        $page = end($link_array);
        
        if($page=="atulya-digital.php"){
            $bg_body_color = "#D8D4CE";
        }
        
        else{
            $bg_body_color = "#FFFFFF";
        }
    ?>
    
</head>



<body style="background:<?php echo $bg_body_color ?>">
    <header>
        <div id="mySidenav1" class="sidenav other">
            <ul>
                <li id="home"><a href="#"> Home</a></li>
                <li class="has-drop-down" id="who"><a href="javascript:void(0)">Who we are</a>
                    <ul class="">
                        <li><a href="about.php">About us</a></li>
                        <li><a href="">Meet the Team</a></li>
                        <li><a href="">Our Clients</a></li>
                    </ul>
                </li>
                <li class="has-drop-down" id="service"><a href="javascript:void(0)">Services</a>
                    <ul class="">
                        <li><a href="atulya-digital.php">Atulya Digital</a></li>
                        <li><a href="">Atulya Crafts</a></li>
                        <li><a href="">Premium collection</a></li>
                    </ul>
                </li>
                <li class="has-drop-down" id="artist"><a href="javascript:void(0)">Atulya Artists</a>
                    <ul class="">
                        <li><a href="">Join Artist Network</a></li>
                        <li><a href="">Network Benefits</a></li>
                    </ul>
                </li>
                <li><a href="#">Volunteer with us</a></li>
                <li><a href="#">News and Articles</a></li>
                <li><a href="#">Get in touch</a></li>
            </ul>
            <a href="javascript:void(0)" class="closebtn" onclick="closeNav1()">&times;</a>
        </div>
    </header>
    <section class="main">
        <div onclick="openNav1()" class="toggle-btn"><img src="assets/img/toggle_icon_black.svg" alt=""></div>
        <div class="logo">
            <img src="assets/img/Component1.svg" class="img-fluid" alt="">
        </div>
    </section>

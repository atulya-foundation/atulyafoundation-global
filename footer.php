<?php   
        $link = $_SERVER['PHP_SELF'];
        $link_array = explode('/',$link);
        $page = end($link_array);
        
        if($page=="volunteer-program.php" || $page=="get-in-touch.php" || $page=="index.php"){
            $mt = "no-margin";
        }
        
        else{
            $mt = "mt-100";
        }
?>
<footer class="<?php echo $mt?>">
    <div class="container">
        <div class="row">
            <div class="col-lg-4"></div>
            <div class="col-lg-8">
                <h2>Lets connect and collaborate</h2>
            </div>
            <div class="col-lg-4">
                <img src="assets/img/flogo.svg" class="img-fluid" alt="">
            </div>
            <div class="col-lg-8">
                <div class="row">
                    <div class="col-lg-3 col-xs-6">
                        <div class="widget">
                            <h2>Who we are</h2>
                            <ul>
                                <li><a href="about.php">About us</a></li>
                                <li><a href="volunteer-program.php#network">Meet the Team</a></li>
                                <li><a href="about.php#clients">Our Clients</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-xs-6">
                        <div class="widget">
                            <h2>Services</h2>
                            <ul>
                                <li><a href="atulya-digital.php">Atulya Digital</a></li>
                                <li><a href="atulya-crafts.php">Atulya Crafts</a></li>
                                <li><a href="premium-collection.php">Premium collection</a></li>
                                <li><a href="#">Arts and Museums</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-xs-6">
                        <div class="widget">
                            <h2>Atulya Artists</h2>
                            <ul>
                                <li><a href="volunteer-program.php#network">Join Artist Network</a></li>
                                <li><a href="#">Network Benefits</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-xs-6">
                        <div class="widget">
                            <h2>Other Links</h2>
                            <ul>
                                <li><a href="volunteer-program.php">Volunteer with us</a></li>
                                <li><a href="news-and-articles.php">News and Articles</a></li>
                                <li><a href="get-in-touch.php">Get in touch</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-12 copyright">
                <ul>
                    <li>© 2020 Atulya Foundation. All Right Reserved.</li>
                    <li><span>|</span> <a href="#">Privacy Policy</a></li>
                    <li><a href="#">License</a></li>
                    <li><a href="">Terms of Use</a></li>
                </ul>
            </div>
        </div>
    </div>
</footer>
</body>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
<script src="assets/js/infiniteslidev2.js"></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/gsap/1.20.4/TweenMax.min.js'></script>
<script src="assets/js/animation.js"></script>
<script src="assets/js/script.js"></script>
<script src="https://kit.fontawesome.com/6b74e72c40.js" crossorigin="anonymous"></script>

<script>


</script>

</html>

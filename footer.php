<?php
$link = $_SERVER['PHP_SELF'];
$link_array = explode('/', $link);
$page = end($link_array);

if ($page == "volunteer-program.php" || $page == "get-in-touch.php" || $page == "index.php" || $page == "atulya-artists.php") {
    $mt = "no-margin";
} else {
    $mt = "mt-100";
}
?>
<footer class="<?php echo $mt ?>">
    <div class="container">
        <div class="row">
            <div class="col-lg-4"></div>
            <div class="col-lg-8">
                <!-- <h2>Lets connect and collaborate</h2> -->
                <h2></h2>
            </div>
            <div class="col-lg-4">
                <img src="assets/img/logo_with_tag.svg" class="img-fluid" alt="">
            </div>
            <div class="col-lg-8">
                <div class="row">
                    <div class="col-lg-3 col-xs-6">
                        <div class="widget">
                            <h2>Services</h2>
                            <ul>
                                <li><a href="arts">Atulya Arts</a></li>
                                <li><a href="crafts">Atulya Crafts</a></li>
                                <li><a href="designs">Atulya Designs</a></li>
                                <li><a href="consulting">Art Consulting</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-xs-6">
                        <div class="widget">
                            <h2>Who we are</h2>
                            <ul>
                                <li><a href="about-us">About us</a></li>
                                <li><a href="about-us#team">Atulya Team</a></li>
                                <li><a href="about-us#clients">Our Clients</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-xs-6">
                        <div class="widget">
                            <h2>Atulya Artists</h2>
                            <ul>
                                <li><a href="atulya-artists">Join as Artist</a></li>
                                <li><a href="atulya-artists#benefits">Network Benefits</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-xs-6">
                        <div class="widget">
                            <h2>Other Links</h2>
                            <ul>
                                <li><a href="art-collection">Art Collection</a></li>
                                <li><a href="volunteer-program">Volunteer with us</a></li>
                                
                                <li><a href="get-in-touch">Get in touch</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-12 copyright">
                <ul>
                    <li style="color: #AAAAAA">© 2021 Atulya Foundation. All Right Reserved.</li>
                    <li><span>|</span> <a href="privacy-policy">Privacy Policy</a></li>
                    <!-- <li><a href="#">License</a></li> -->
                    <li><a href="terms-of-use">Terms of Use</a></li>
                </ul>
            </div>
        </div>
    </div>
</footer>
</body>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

<script src="assets/js/script.js"></script>
<script src="https://kit.fontawesome.com/6b74e72c40.js" crossorigin="anonymous"></script>

</html>

<?php include('header.php') ?>

<style type="text/css">
    .dope .container{
        margin-left:12.0625rem; padding-right:12.0625rem;

    }
</style>

<section class="main-content dope get-touch">
    <div class="container" >
        <h5 style=" margin-bottom: 3.025rem;">Contact us</h5>
        <div class="web-wrap">
            <div class="content">
                <h1 class="uppercase">GET <span>in</span> TOUCH</h1>
                <div class="row">
                    <div class="col-lg-12 mt-40">
                        <p class="intro" style="padding-right: 0;">We listen to you and welcome your ideas.</p>
                        <div class="row">
                            <div class="col-sm-5">
                                <h3>Correspondence Address</h3>
                                <p><em>III Floor, D-68 A, Aruna Park (Near Metro Pillar No. 50), Vikas Marg, New Delhi, India  – 110092</em></p>
                            </div>
                            <div class="col-sm-1"></div>
                            <div class="col-sm-6">
                                <h3>Contact Info</h3>
                                <p><em>Drop us a message: <a href="mailto:info@atulyafoundation.org">info@atulyafoundation.org</a></em>
                                </p>
                            </div>
                        </div>


                    </div>
                    <div class="col-lg-1"></div>
                    <div class="col-lg-5 tool"> </div>
                    <div class="col-sm-12"></div>
                    <!-- <div class="col-sm-4 mt-40">
                        <p><a href="#">Get Directions</a></p>
                    </div> -->
                </div>
            </div>
        </div>
    </div>
</section>

<section class="bg-white">
    <div class="main-content dope main-padding">
        <div class="container" >
            <h2>If you don’t find what you need, fill out our contact form</h2>
            <div class="form">
                <form action="email.php" method="post">
                    <div class="row">
                        <div class="col-xl-8">
                            <div class="form-group input-group">
                                <input type="text" class="form-control" name="Name" placeholder="" required>
                                <label for="">NAME*</label>
                            </div>
                            <div class="form-group input-group">
                                <input type="text" class="form-control" pattern="[7896][0-9]{9}" name="Phone" placeholder="" required>
                                <label for="">PHONE*</label>
                            </div>
                            <div class="form-group input-group">
                                <input type="email" class="form-control" name="Email" placeholder="" required>
                                <label for="">Email*</label>
                            </div>
                            <div class="form-group input-group textarea">
                                <textarea type="text" class="form-control" name="Message" placeholder="" required></textarea>
                                <label for="">MESSAGE*</label>
                            </div>
                            <p class="mt-10 f-16">This site is protected by reCAPTCHA and the <a href="https://policies.google.com/privacy?hl=en-US" target="_blank"> Google Privacy Policy </a> and <a href="https://policies.google.com/terms?hl=en-US" target="_blank"> Terms of Service</a>.</p>
                            <div class="call-to-action f-left vv-small-btn">
                                <button type="submit" class="btn-call-to-action">Send</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>


<?php include('footer.php') ?>

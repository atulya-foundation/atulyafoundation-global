<?php include('header.php') ?>

<style type="text/css">
   
    .text1 {
        color: #707070 !important;
    }

    .text1:hover {
        color: black !important;
        text-decoration: none !important;
    }
    @media screen and (max-width: 768px){
    	.legends{
    		flex-wrap: inherit !important;
    		width: 0;
    	}
    }
</style>

<section class="main-content dope get-touch">
    <div class="container">
        <h5 style=" margin-bottom: 7vh;">Contact us</h5>
        <div class="web-wrap">
            <div class="content">
                <h1 class="uppercase">GET <span>in</span> TOUCH</h1>
                <div class="row">
                    <div class="col-lg-12 mt-40">
                        <p class="intro">We listen to you and welcome your ideas.</p>
                        <div class="row">
                            <div class="col-sm-6">
                                <h3>Correspondence Address</h3>
                                <p><em>III Floor, D-68 A, Aruna Park (Near Metro Pillar No. 50), Vikas Marg, New Delhi, India – 110092</em></p>
                            </div>
                            <div class="col-sm-1"></div>
                            <div class="col-sm-5">
                                <h3>Drop us a message</h3>
                                <p><em> <a href="mailto:info@atulyafoundation.org">info@atulyafoundation.org</a></em>
                                
                                        <div class="row ">
                                            <div class="col-lg-12 ">
                                                <div class="row legends">
                                                    <div class="col-sm-1"><a class="text1" target="new" href="https://www.instagram.com/atulya_foundation/"><i class="fab fa-instagram"></i> </a></div>
                                                    <div class="col-sm-1"><a class="text1" target="new" href="https://www.linkedin.com/company/atulya"><i class="fab fa-linkedin"></i></a></div>
                                                    <div class="col-sm-1"><a class="text1" target="new" href="https://www.facebook.com/Aulyafoundation"><i class="fab fa-facebook"></i> </a></div>
                                                    <div class="col-sm-1"><a class="text1" target="new" href="https://www.youtube.com/channel/UCFaDTKXpGJ7P8izz0inccNg"><i class="fab fa-youtube"></i></a></div>
                                                </div>
                                            </div>
                                        </div>      
                                
                                </p>
                            </div>
                        </div>


                    </div>
                    <div class="col-lg-1"></div>
                    <div class="col-lg-5 tool"></div>
                    <div class="col-sm-12"></div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="bg-white" >
    <div class="main-content dope main-padding">
        <div class="container">
            <h2>If you don’t find what you need, fill out our contact form</h2>
            <div class="form">
                <form action="https://sheetdb.io/api/v1/xozpuqu26c40v" method="post" id="get-in-touch-form">
                    <div class="row">
                        <div class="col-xl-8">
                            <div class="form-group input-group">
                                <input type="text" class="form-control" name="data[name]" placeholder="NAME*" required>

                            </div>
                            <div class="form-group input-group">
                                <input type="text" class="form-control" pattern="[7896][0-9]{9}" name="data[phone]" placeholder="PHONE*" required>

                            </div>
                            <div class="form-group input-group">
                                <input type="email" class="form-control" name="data[email]" placeholder="Email*" required>

                            </div>
                            <div class="form-group input-group textarea">
                                <textarea class="form-control" name="data[message]" placeholder="" required></textarea>
                                <label for="">MESSAGE*</label>
                            </div>
                            <p class="mt-10 f-16">This site is protected by reCAPTCHA and the <a href="https://policies.google.com/privacy?hl=en-US" target="_blank"> Google Privacy
                                    Policy </a> and <a href="https://policies.google.com/terms?hl=en-US" target="_blank"> Terms of Service</a>.</p>
                            <div class="call-to-action f-left vv-small-btn">
                                <button type="submit" class="btn-call-to-action">Send</button>
                            </div>

                            <div class="toast" id="get-in-touch-form-toast-success" style="position: absolute">
                                <div class="toast-body">
                                    Form Submitted
                                </div>
                            </div>

                            <div class="toast" id="get-in-touch-form-toast-failure" style="position: absolute">
                                <div class="toast-body">
                                    Failed to submit form, Please try again
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>


    


<?php include('footer.php') ?>

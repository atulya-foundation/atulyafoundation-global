<?php include('header.php') ?>

<section class="main-content">
    <div class="container dp">
        <h5>Volunteer with us</h5>
        <div class="web-wrap">
            <h1 class="uppercase">NO <span>effort, </span> <br>HOWEVER <span>small, </span><br> <span>ever</span> GOES WASTE</h1>
            <div class="content">
                <div class="row">
                    <div class="col-lg-6">
                        <p class="intro">We welcome art enthusiasts to join us in making this world more colourful. Become a part of our stories. Join the adventure. </p>
                    </div>
                    <div class="col-lg-1"></div>
                    <div class="col-lg-5">
                        <p>The biggest challenge in building an online community is having the right people in the network, who can understand your community’s motive and
                            contribute by connecting more like-minded people to the community. If you are here, we hope you know about our mission (Read the about us, pretty please
                            !). Atulya Foundation is not just a community for artists, but art-lovers as well. We are trying to build here is an ecosystem, where happiness can be
                            spread through a medley of colours.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="atulya-image">
    <img src="assets/img/vol.jpg" class="img-fluid"/>
</section>

<div id="network"></div>

<section class="bg-cream">
    <div class="main-content main-padding">
        <div class="container dp">
            <h5>Form</h5>
            <h1>Join Volunteer <br><span>network</span></h1>
            <div class="form">
                <form enctype="multipart/form-data" action="https://sheetdb.io/api/v1/7eynth0bef646" method="post" id="volunteer-program-form">
                    <div class="row">
                        <div class="col-xl-5">
                            <p>Personal Information</p>
                            <div class="form-group input-group">
                                <input type="text" class="form-control" name="data[name]" required placeholder="NAME*">

                            </div>
                            <div class="form-group input-group">
                                <input type="text" id="age" class="form-control" name="data[age]" required placeholder="AGE*">

                            </div>
                            <div class="form-group pos-relative">
                                <select required name="data[gender]" class="form-control" id="">
                                    <option value="">Gender*</option>
                                    <option value="Male">MALE</option>
                                    <option value="Female">FEMALE</option>
                                    <option value="Other">OTHER</option>
                                </select>
                                <!--i class="fas fa-caret-down abs-select"></i-->
                            </div>
                        </div>
                        <div class="col-xl-2 view-desktop"></div>
                        <div class="col-xl-5">
                            <p>Contact Information</p>
                            <div class="form-group input-group">
                                <input type="email" class="form-control" name="data[email]" placeholder="EMAIL*" required>

                            </div>
                            <div class="form-group input-group">
                                <input type="text" pattern="[7896][0-9]{9}" class="form-control" name="data[phone]" placeholder="PHONE NUMBER*" required>

                            </div>
                        </div>
                    </div>
                    <div class="row with-top">
                        <div class="col-xl-12">
                            <p>Address</p>
                        </div>
                        <div class="col-xl-5">
                            <div class="form-group input-group">

                                <input type="text" class="form-control" name="data[street]" placeholder="STREET*" required>

                            </div>
                            <div class="form-group input-group">
                                <input type="text" class="form-control" name="data[locality]" placeholder="Locality*" required>

                            </div>
                            <div class="form-group input-group">
                                <input type="text" class="form-control" name="data[city]" placeholder="CITY*" required>

                            </div>
                        </div>
                        <div class="col-xl-2 view-desktop"></div>
                        <div class="col-xl-5">
                            <div class="form-group input-group">
                                <input type="text" class="form-control" name="data[state]" placeholder="STATE*" required>

                            </div>
                            <div class="form-group input-group">
                                <input type="text" class="form-control" name="data[zip]" placeholder="PINCODE/ZIPCODE*" required>

                            </div>
                            <div class="form-group  input-group">
                                <input type="text" class="form-control" name="data[country]" placeholder="Country*">

                            </div>
                        </div>
                    </div>
                    <div class="row with-top">
                        <div class="col-xl-12">
                            <p>Bio</p>
                        </div>
                        <div class="col-xl-12">
                            <div class="form-group input-group">
                                <select required name="data[education]" class="form-control" id="txt_a">
                                    <option value="">Education qualification*</option>

                                    <option value="Intermediate">Intermediate</option>
                                    <option value="Bachelors">Bachelors</option>
                                    <option value="Masters">Masters</option>
                                    <option value="Ph. D">Ph. D</option>
                                </select>
                            </div>

                            <div class="form-group ">


                                <select required name="data[contribute]" class="form-control" id="txt_d">
                                    <option value="">How, as a volunteer, can you contribute to the Atulya foundation?*</option>

                                    <option value="Building artists network">Building artists network</option>
                                    <option value="Product & innovation">Product & innovation</option>
                                    <option value="Media & marketing">Media & marketing</option>
                                    <option value="Operations & logistical support">Operations & logistical support</option>
                                </select>


                            </div>

                            <div class="form-group ">


                                <select required name="data[comfortable]" class="form-control" id="txt_d">
                                    <option value="">Are you comfortable to travel for assignments?*</option>

                                    <option value="Yes, no issues at all">Yes, no issues at all</option>
                                    <option value="Yes, Somewhat">Yes, Somewhat</option>
                                    <option value="Depends on the place and project">Depends on the place and project</option>
                                    <option value="No, i don’t want to travel at all">No, i don’t want to travel at all</option>

                                </select>


                            </div>

                            <div class="form-group input-group textarea">
                                <textarea type="text" class="form-control" name="data[thoughts]" placeholder="Your thoughts about Atulya Foundation and its work*"
                                          required></textarea>

                            </div>

                            <div class="input-group form-group">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" name="data[attachment]" id="inputGroupFile02" required>
                                    <label class="custom-file-label" for="inputGroupFile02" aria-describedby="inputGroupFileAddon02" style="width: 18rem;">UPLOAD YOUR
                                        RESUME*</label>
                                </div>
                            </div>
                            <p class="mt-10 f-16">This site is protected by reCAPTCHA and the <a href="https://policies.google.com/privacy?hl=en-US" target="_blank"> Google Privacy
                                    Policy </a> and <a href="https://policies.google.com/terms?hl=en-US"> Terms of Service</a>.</p>
                            <div class="call-to-action f-left vv-small-btn">
                                <button type="submit" id="submit" class="btn-call-to-action">Send</button>
                            </div>

                            <div class="toast" id="volunteer-form-toast-success" style="position: absolute">
                                <div class="toast-body">
                                    Form Submitted
                                </div>
                            </div>

                            <div class="toast" id="volunteer-form-toast-failure" style="position: absolute">
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

<style type="text/css">
    /* .main-content .dp {
        margin-left: 12.0625rem;
        padding-right: 12.0625rem;
    } */

    @media only screen and (max-width: 768px) {
        .col,
        .col-1,
        .col-10,
        .col-11,
        .col-12,
        .col-2,
        .col-3,
        .col-4,
        .col-5,
        .col-6,
        .col-7,
        .col-8,
        .col-9,
        .col-auto,
        .col-lg,
        .col-lg-1,
        .col-lg-10,
        .col-lg-11,
        .col-lg-12,
        .col-lg-2,
        .col-lg-3,
        .col-lg-4,
        .col-lg-5,
        .col-lg-6,
        .col-lg-7,
        .col-lg-8,
        .col-lg-9,
        .col-lg-auto,
        .col-md,
        .col-md-1,
        .col-md-10,
        .col-md-11,
        .col-md-12,
        .col-md-2,
        .col-md-3,
        .col-md-4,
        .col-md-5,
        .col-md-6,
        .col-md-7,
        .col-md-8,
        .col-md-9,
        .col-md-auto,
        .col-sm,
        .col-sm-1,
        .col-sm-10,
        .col-sm-11,
        .col-sm-12,
        .col-sm-2,
        .col-sm-3,
        .col-sm-4,
        .col-sm-5,
        .col-sm-6,
        .col-sm-7,
        .col-sm-8,
        .col-sm-9,
        .col-sm-auto,
        .col-xl,
        .col-xl-1,
        .col-xl-10,
        .col-xl-11,
        .col-xl-12,
        .col-xl-2,
        .col-xl-3,
        .col-xl-4,
        .col-xl-5,
        .col-xl-6,
        .col-xl-7,
        .col-xl-8,
        .col-xl-9,
        .col-xl-auto {
            padding-left: 15px;
            padding-right: 30px;
        }

        .main-content .dp h1 {
            font-size: 2.775rem;
            margin-top: 0rem;
            margin-bottom: 1rem;
        }

        .form p {
            font-size: 0.975rem !important;
            font-weight: 500 !important;
        }

        .form .mt-10 {
            font-size: 0.475rem !important;
        }
    }
</style>
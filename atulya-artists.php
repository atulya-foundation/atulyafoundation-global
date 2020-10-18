<?php include('header.php')?>

<style type="text/css">
    .dope .container{
         margin-left:12.0625rem; padding-right:12.0625rem;
    }
</style>

<section class="main-content dope">
    <div class="container">
        <h5 style="margin-bottom: 3rem;">Atulya Artists</h5>
        <div class="web-wrap">
            <h1 class="uppercase" style="margin-bottom: 3rem;">Here <span>is</span>, how we <span>can</span><br> benefit artists.</h1>
            <div class="content">
                <div class="row">
                    <div class="col-lg-6">
                        <p class="intro">Let us craft your dreams into reality. We listen to you and welcome your ideas. Come visit us and you will see that all are true.</p>

                    </div>
                    <div class="col-lg-6">
                        <p>A complete range of artists including homemakers, professionals, students, etc. We
                            firmly believe that the only qualification for an artist is his/her art and art alone.</p>

                        <p>A system of referrals where potential artists will be recommended to us by people connected to us on social media.</p>

                        <p>A system of local ambassadors who will help us finding potential artists who cannot connect to us due to lack of infrastructure or awareness.</p>

                        <p>Artists from different parts of India and specializing in different kinds of art forms.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="atulya-image">
    <img src="assets/img/bg-terms.png" class="img-fluid" />
</section>


<section id="benefits"></section>

<section class="main-content dope">
    <div class="container">
        <h5 style="margin-bottom: 3rem;">Network Benefits</h5>
        <div class="web-wrap">
            <h1 style="margin-bottom: 3rem;">Colour outside <span> the </span> lines <br> inside <span> is </span>already filled</h1>
            <div class="content">
                <div class="row">
                    <div class="col-lg-6">
                        <p class="intro">Know more about network perks
                            and blah blah blah.</p>

                    </div>
                    <div class="col-lg-6">
                        <p>ARTWORK VALUATION: Proper valuation of their art after doing in-depth and detailed market research.</p>

                        <p>POTENTIAL MARKETS: Finding potential markets and buyers across the globe using various internet platforms.</p>

                        <p>IPR PROTECTION: Providing for better protection and management to their Intellectual Property Rights.</p>

                        <p>INFRA & LOGISTICS: Infrastructure for packaging and shipment of their art work along with any other logistics required.</p>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="join"></section>

<section class="bg-cream mt-100">
    <div class="main-content dope main-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <h5 style="margin-bottom: 3rem;">Form</h5>
                    <h1>Join Artist <br> <span> network</span></h1>
                    <p class="intro mt-40" style="color:#383838">The aim of art is to represent not the outward appearance of things, but their inward significance.</p>
                    <p class="intro" style="color:#383838">Fill out this form to become an Atulya Artist</p>
                </div>
            </div>
            <div class="form">
                <form action="artist.php" method="post" id="">
                    <div class="row">
                        <div class="col-xl-5">
                            <p>Personal Information</p>
                            <div class="form-group input-group">
                                <input type="text" class="form-control" name="name" placeholder="">
                                <label for="">NAME*</label>
                            </div>
                            <div class="form-group input-group">
                                <input type="text" id="age" class="form-control" name="age" placeholder="">
                                <label for="">AGE*</label>
                            </div>
                            <div class="form-group ">
                                <select required name="gender" required class="form-control" id="">
                                    <option value="">Gender*</option>
                                    <option value="Male">MALE</option>
                                    <option value="Female">FEMALE</option>
                                    <option value="Other">OTHER</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-xl-2 view-desktop"></div>
                        <div class="col-xl-5">
                            <p>Contact Information*</p>
                            <div class="form-group  input-group">
                                <input type="email" class="form-control" name="email" placeholder="">
                                <label for="">EMAIL*</label>
                            </div>
                            <div class="form-group  input-group">
                                <input type="text" pattern="[7896][0-9]{9}" class="form-control" name="phone" placeholder="">
                                <label for="">PHONE NUMBER*</label>
                            </div>
                        </div>
                    </div>
                    <div class="row with-top">
                        <div class="col-xl-12">
                            <p>Address</p>
                        </div>
                        <div class="col-xl-5">
                            <div class="form-group  input-group">
                                <input type="text" class="form-control" name="street" placeholder="">
                                <label for="">STREET*</label>
                            </div>
                            <div class="form-group  input-group">
                                <input type="text" class="form-control" name="locality" placeholder="">
                                <label for="">Locality*</label>
                            </div>
                            <div class="form-group  input-group">
                                <input type="text" class="form-control" name="city" placeholder="">
                                <label for="">CITY*</label>
                            </div>
                        </div>
                        <div class="col-xl-2 view-desktop"></div>
                        <div class="col-xl-5">
                            <div class="form-group input-group">
                                <input type="text" class="form-control" name="state" placeholder="">
                                <label for="">STATE*</label>
                            </div>
                            <div class="form-group input-group">
                                <input type="text" class="form-control" name="zip" placeholder="">
                                <label for="">PINCODE/ZIPCODE*</label>
                            </div>
                        </div>
                    </div>
                    <div class="row with-top">
                        <div class="col-xl-12">
                            <p>Bio</p>
                        </div>
                        <div class="col-xl-12">
                            <div class="form-group input-group">
                                <input type="text" class="form-control" name="bio" placeholder="">
                                <label for="">Link to your artwork projects*</label>
                            </div>


                            <div class="form-group input-group textarea">
                                <textarea type="text" class="form-control" name="note" placeholder="" required></textarea>
                                <label>Short Note*</label>
                            </div>

                            <p class="mt-10 f-16">This site is protected by reCAPTCHA and the <a href="https://policies.google.com/privacy?hl=en-US" target="_blank"> Google Privacy Policy </a> and <a href="https://policies.google.com/terms?hl=en-US" target="_blank"> Terms of Service</a>.</p>
                            <div class="call-to-action f-left vv-small-btn">
                                <button type="submit" id="submit" class="btn-call-to-action">Send</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>


<?php include('footer.php')?>

<script src="assets/js/validate.js"></script>

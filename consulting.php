<?php include('header.php') ?>

<style type="text/css">
   .parent {
      position: relative;
      top: 0;
      left: 0;
    }
    .image1 {
      position: absolute;
      left: 6.75vw;
    }
     .image2 {
      position: relative;
      top: 17.5rem;
      left: 1vw;
      margin-bottom: 10vh;
    }
    .dope{
        margin-bottom: 12rem;  
        margin-left: 10.0625rem; 
        margin-right: 10.0625rem;
    }
    .single-image{
        margin-bottom: 12rem; 
        margin-left: 4.8rem;
    }
    .double-image{
        margin-left: 4.8rem; 
        margin-bottom: 18rem;
    }
    .large-image{
        margin-bottom: 12rem;
    }
    .bot-line p a {
        color: #707070;
        text-decoration: none !important;
    }

    .bot-line p a:hover {
        color: black !important;
    }

    .services h3{
        font-size: 1.5rem;
        line-height: 1.75rem;
        padding-bottom: 1.4125rem;
        color: #383838;
        letter-spacing: 0rem;
        font-family: Roboto, sans-serif;
        opacity: 1;
        font-weight: bold;
    }
    .services p{
        font-size: 1.25rem;
        line-height: 1.5rem;
        color: #282828;
        font-family: Roboto;
        letter-spacing: 0;
        opacity: 0.8;
    }

    @media screen and (max-width: 991px){
        .dope{
            margin-bottom: 6rem;  
            margin-left: 0rem; 
            margin-right: 0rem;
        }
        .single-image{
            margin-bottom: 9rem; 
            margin-left: 0rem;
        }
        .double-image{
            margin-left: 0rem; 
            margin-bottom: 0rem;
        }
        .large-image{
            margin-bottom: 12rem;        
        }
        .image1 {
          position: relative;
          left: -2rem;
        }
         .image2 {
            position: relative;
            top: -11.5rem;
            left: 0.625rem;
            margin-bottom: 0rem;
        }
        .services p{
            margin-bottom: 4rem;
        }
        @media screen and (max-width: 750px){
            div.images{order: 2;}
            div.services{order:1;}
            .single-image{
                margin-bottom: 9rem;
            }
            .large-image{
            display: none;
            margin-bottom: 0rem;        
            }
            .image1 {
              position: relative;
              left: 0;
            }
             .image2 {
                position: relative;
                top: -11.5rem;
                left: 2rem;
                margin-bottom: 0rem;
            }
        }
        
        
    }
    

</style>

<div class="logo-pos">
    <!-- <a href="crafts.php"><img src="assets/img/atulya_crafts_logo.svg" class="img-fluid" alt=""></a> -->
</div>

<section class="main-content dope ">
    <div class="container">
        <h5>Art Consulting</h5>
        <div class="web-wrap">
            <h1 class="uppercase">ART <span>is</span> NOT WHAT <br>YOU SEE <span>but</span> WHAT <br>YOU MAKE <span>others</span> SEE</h1>
            <div class="content">
                <div class="row">
                    <div class="col-lg-12">
                        <p class="intro" style="color: #707070;">Art is mostly looked as a product but very less as a service. We
                            bring in our professional expertise to provide art services to our clients to beautify their spaces and integrate it into their products and services.
                            We bring in creative ways to monetise art so that maximum value can be extracted from artworks which can generate good opportunities for businesses and
                            artists.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="single-image">
    <div class="container">
        <div class="row">
            
            <div class="col-lg-5 col-md-6 images">
                
                    <img src="assets/img/Art Consulting/Art Plan development/1.jpg" class="img-fluid">
                
            </div>
           <div class="col-lg-1 col-md-1"></div>
            <div class="col-lg-5 col-md-5 services">
                <h3>Art Plan Development</h3>
                <p>At Atulya we develop detailed plans right from fixing of theme to installation of art works. We evaluate client’s space and as well as interview
                their designers and facility managers to carve out the best program to give their site a look they imagine. While developing an art plan we
                determine the key areas at site for artworks that complements the existing design of the space in a balanced manner. </p>
            </div>
            <div class="col-lg-1"></div>
        </div>
    </div>
</section>


<section class="double-image">
    <div class="container">
        <div class="row">
            
            <div class="col-lg-5 col-md-5 services">
                <h3>Art Curation & Acquisition</h3>
                <p>We advise in selecting suitable pieces of artworks that will enhance the aesthetics and culture our client wants to develop. We bring to use augmented
                        reality to showcase our clients and make them feel how beautiful their space can look. We offer entire range of artworks such as original hand painted art pieces on canvass/paper, original digital artworks prints, reproduced prints, photographs, posters and others.</p>
            </div>
            <div class="col-lg-1 col-md-2 "></div>
            <div class="col-lg-6 col-md-5 images" class="parent">
                    <img class="image1 img-fluid" src="assets/img/Art Consulting/Art curation _ Acquisition/1.jpg">
                    <img class="image2 img-fluid " src="assets/img/Art Consulting/Art curation _ Acquisition/2.jpg">
            </div>
        </div>
    </div>
</section>






<section  class="large-image atulya-image">
    <figure>
        <img src="assets/img/Art Consulting/big horizontal images/1.jpg" class="img-fluid w-100">
    </figure>
</section>


<section class="single-image">
    <div class="container">
        <div class="row">
            
            <div class="col-lg-5 col-md-6 images">
                
                    <img src="assets/img/Art Consulting/Art leasing/1.jpg" class="img-fluid">
                
            </div>
           <div class="col-lg-1 col-md-1 "></div>
            <div class="col-lg-5 col-md-5 services">
                <h3>Art Leasing</h3>
                <p>We lease out artworks as per the requirements of our clients at an affordable cost. Clients select artworks of their choice from our collection, we
                ship it to them and get it installed at the site. On completion of leasing period, they can end up or may extend up by choosing replacement artworks to the installed ones. This gives them an opportunity to refresh the looks of their space at intervals.</p>
            </div>
            <div class="col-lg-1"></div>
        </div>
    </div>
</section>


<section class="double-image">
    <div class="container">
        <div class="row">
            
            <div class="col-lg-5 col-md-5 services">
                <h3>Customised Research</h3>
                    <p>While developing art programs our professional market researchers & analytics team do in depth research of the markets to fill in for the requests by our
                        clients. In our research practice few elements play a key role such as client’s working industry/sector, team of employees, location of the site, regional
                        culture & taste, to bring out the best plan that rightly positions client’s brand.</p>
            </div>
            <div class="col-lg-1 col-md-2"></div>
            <div class="col-lg-6 col-md-5 images" class="parent">
                    <img class="image1 img-fluid" src="assets/img/Art Consulting/Customised research/1.jpg">
                    <img class="image2 img-fluid" src="assets/img/Art Consulting/Customised research/2.jpg">
            </div>
        </div>
    </div>
</section>

<section class="large-image atulya-image">
    <figure>
        <img src="assets/img/Art Consulting/big horizontal images/2.jpg" class="img-fluid w-100">
    </figure>    
</section>


<section class="single-image">
    <div class="container">
        <div class="row">
            
            <div class="col-lg-5 col-md-6 images">
                
                    <img src="assets/img/Art Consulting\Art localism/pexels-flat-hito-862938.jpg" class="img-fluid">
                
            </div>
           <div class="col-lg-1 col-md-1 "></div>
            <div class="col-lg-5 col-md-5 services">
                 <h3>Art Localism</h3>
                <p>We always advise our clients to have more & more local artworks in their spaces. It makes them remain connected to their regional roots and at the
                same time giving back to their local artists community. Our team brings out the arts and artist even from the remotest regions of the geography that deserve much more appreciation and recognition. All thanks to our artists network.</p>
            </div>
            <div class="col-lg-1"></div>
        </div>
    </div>
</section>


<section class="double-image">
    <div class="container">
        <div class="row">
            
            <div class="col-lg-5 col-md-5 services">
                <h3>Art Framing & Installation</h3>
                <p>We provide customised framing options which compliments to the existing design of the site. We have wide range of options from exotic hand-crafted
                wooden frames to synthesised vinyl frames. Things such as height & angle an artwork should be installed at makes a huge difference in visual appeal of an art piece. We have trained installers who can optimally install artworks so they are in right field of view.</p>
            </div>
            <div class="col-lg-1 col-md-2"></div>
            <div class="col-lg-6 col-md-5 images" class="parent">
                    <img class="image1 img-fluid" src="assets/img/Art Consulting/Framing _ Installation/1.jpg">
                    <img class="image2 img-fluid" src="assets/img/Art Consulting/Framing _ Installation/2.jpg">
            </div>
        </div>
    </div>
</section>

<section class="large-image atulya-image">
    <figure>
        <img src="assets/img/Art Consulting/big horizontal images/4.jpg" class="img-fluid w-100">
    </figure>
        
    
</section>


<section class="single-image">
    <div class="container">
        <div class="row">
            
            <div class="col-lg-5 col-md-6 images">
                
                    <img src="assets/img/artist/vintage-923467_1920.png" class="img-fluid">
                
            </div>
           <div class="col-lg-1 col-md-1 "></div>
            <div class="col-lg-5 col-md-5 services">
                <h3>Art Restoration</h3>
                <p>We understand art is something to which you attach yourself over time and it becomes a part of your daily visual treat. Well! here restoration helps
                artworks to remain new and shiny. Restoration is majorly done for oil paintings as the colours fade over a period of time. Our expert artists team is versed in restoring heritage and traditional artworks of all sorts and can give them a refreshed look. </p>
            </div>
            <div class="col-lg-1"></div>
        </div>
    </div>
</section>


<section class="double-image">
    <div class="container">
        <div class="row">
            
            <div class="col-lg-5 col-md-5 services">
                    <h3>Art Shipment</h3>
                    <p>If you are moving into a new space and are afraid that rough handling of your shipping company will damage your artworks. In that case, we have military
                        grade packaging and specialised transport solution which will ship artworks to your new place intact without damages. We do insure artworks while we ship
                        them, so that you can sit & relax without bothering about potential damages.</p>
            </div>
            <div class="col-lg-1 col-md-2"></div>
            <div class="col-lg-6 col-md-5 images" class="parent">
                    <img class="image1 img-fluid" src="assets/img/Art Consulting/Art shipment/1.jpg">
                    <img class="image2 img-fluid" src="assets/img/Art Consulting/Art shipment/2.jpg">
            </div>
        </div>
    </div>
</section>

<section class="bot-line">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-2"></div>
            <div class="col-lg-6 col-md-10"><p class="medium" >For any of the above services, drop a mail to <a href="mailto:sales@atulyafoundation.org">sales@atulyafoundation.org</a>
                </p></div>
            <div class="col-lg-3"></div>
        </div>
    </div>
</section>


<?php include('footer.php') ?>
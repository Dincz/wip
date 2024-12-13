<?php include 'header.php'; ?>
<style>
   .about-us-section {
      padding: 80px 0;
   }

   .about-us-content {
      text-align: center;
      max-width: 900px;
      margin: 0 auto;
      padding: 0 15px;
   }

   .about-us-title {
    background: linear-gradient(135deg, #456df1, #6a8ff7); /* Add a gradient for depth */
    color: #ffffff;
    padding: 16px 20px; /* Balanced padding for desktop */
    margin-bottom: 40px;
    border-radius: 6px; /* Moderate rounding for modern aesthetics */
    box-shadow: 0 6px 10px rgba(0, 0, 0, 0.15); /* Deeper shadow for a floating effect */
    text-align: center;
    font-size: 22px; /* Slightly larger font for boldness */
    font-weight: 700; /* Stronger emphasis */
    letter-spacing: 1px; /* Enhance legibility */
    text-transform: uppercase; /* Make the title stand out */
    position: relative; /* For decorative effects */
    overflow: hidden; /* Ensure any effects stay contained */
}

/* Add a decorative underline effect */
.about-us-title::after {
    content: '';
    position: absolute;
    bottom: 5px;
    left: 50%;
    transform: translateX(-50%);
    width: 50%;
    height: 3px;
    background-color: #ffffff;
    border-radius: 2px;
    transition: width 0.3s ease;
}

.about-us-title:hover::after {
    width: 80%; /* Expand underline on hover for interactivity */
}

   .about-us-description {
      color: #333;
      line-height: 1.8;
      font-size: 18px;
      margin-bottom: 30px;
   }

   .leadership-highlight {
      font-style: italic;
      color: #555;
      font-size: 21px;
      padding: 15px;
      background-color: #f0f0f0;
      border-left: 4px solid #456df1;
   }

   /* Responsive adjustments */
   @media (max-width: 768px) {
      .about-us-section {
         padding: 40px 0;
      }

      .about-us-title {
        padding: 12px 16px; /* Adjust padding for smaller screens */
        font-size: 18px; /* Optimize font size for mobile */
        border-radius: 4px;
        background: linear-gradient(135deg, #5a7efb, #89a8ff); /* Slightly lighter gradient for mobile */
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.12); /* Softer shadow on mobile */
    }

      .about-us-description {
         font-size: 16px;
      }

      .leadership-highlight {
         font-size: 16px;
      }

      .mobile-padding {
         padding: 0px 4px 0px;
      }
   }

   /* FrOm Founder’s Message font sizing */

   @media only screen and (max-width: 600px) {
      .mobile-textSize {
         font-size: 16px;
      }
   }

   @media only screen and (min-width: 600px) {
      .desk-no-margin {
         margin-top: 0px;
         margin-bottom: 5px;

      }
   }

   /* For desktop */
   .mobile-textSize {
      font-size: 15px;
      margin-bottom: 2px;
   }

   /* Caption BOx On hover effect */
   .caption-box {
      background-color: #f5f5f5;
      /* Initial background color */
      padding: 15px;
      border-radius: 5px;
      text-align: center;
      transition: all 0.3s ease;
      /* Smooth transition */
      box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
      /* Initial shadow */
   }

   .caption-box h3 {
      margin: 0;
      font-size: 1.5em;
      transition: transform 0.3s ease, color 0.3s ease;
      /* Smooth scaling and color change */
   }

   .caption-box a {
      color: #333;
      /* Initial link color */
      text-decoration: none;
      transition: color 0.3s ease;
   }

   .caption-box:hover {
      background-color: #007bff;
      /* Change background color on hover */
      box-shadow: 0 8px 15px rgba(0, 0, 0, 0.2);
      /* Add more shadow */
      color: red;
   }

   .caption-box:hover h3 {
      transform: scale(1.1);
      /* Scale up the text */
      color: #fff;
      /* Change text color */
   }

   .caption-box:hover a {
      color: #fff;
      /* Change link color */
   }

   @media only screen and (max-width: 600px) {
      .mobile-text {
         display: none;
      }
   }

   @media only screen and (max-width: 768px) {
      .owl-nav {
         display: none;
      }
   }
</style>

<!-- Bnner Section -->
<section class="banner-section-fo pt-0 mt-0">
   <div class="banner-carousel-three owl-carousel owl-theme">
      <!-- First slide -->
      <div
         class="slide-item p-0"
         data-toggle="modal"
         data-target="#contactModal"
         style="cursor: pointer;">
         <img src="images/ceiling.jpg" alt="Building the future" class="img-fluid">
      </div>


      <!-- Second slide -->
      <!-- <div class="slide-item p-0">
         <img src="images/mainimgaes/Main-Banner.jpg" alt="Architecture is a Visual Art" class="img-fluid ">
         <div class="auto-container">
            <div class="content-box">
               <h2>Architecture is a <br> Visual Art</h2>
               <div class="text">The buildings speak for themselves</div>
            </div>
         </div>
      </div> -->
      <div class="slide-item p-0">
         <img src="images/banner/product-page-banner.jpg" alt="Architecture is a Visual Art" class="img-fluid ">
         <div class="auto-container">
            <!-- <div class="content-box">
               <h2>Architecture is a <br> Visual Art</h2>
               <div class="text">The buildings speak for themselves</div>
            </div> -->
         </div>
      </div>
      <a
         href="javascript:void(0);"
         class="slide-item p-0"
         data-toggle="modal"
         data-target="#contactModal">
         <img src="images/banner/Drywall-partition-system-B-V04.jpg" alt="Architecture is a Visual Art" class="img-fluid">
         <div class="auto-container">
            <!-- <div class="content-box">
         <h2>Architecture is a <br> Visual Art</h2>
         <div class="text">The buildings speak for themselves</div>
      </div> -->
         </div>
      </a>

   </div>
</section>


<!-- End Bnner Section -->
<!-- About Section -->
<div class="container-fluid">
   <section class="about-us-section">
      <div class="container">
         <div class="row">
            <div class="col-md-12">
               <div class="about-us-content">
                  <h2 class="about-us-title">About Western Infrabuild Products LLP</h2>
                  <p class="about-us-description">
                     Western Infrabuild Products LLP was incepted under the inspiring leadership of Mr. Ashfaque Z Khan with the vision of revolutionizing interior industry by providing high quality but cost-effective products. True to its vision, Western Infrabuild Products LLP has achieved many milestones in the interior designing industry by constantly and actively innovating its offerings to fulfill customer needs.
                  </p>
                  <div class="leadership-highlight">
                     Led by the visionary Mr. Ashfaque Z Khan
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section>
</div>
<!-- About Section Ends here  -->
<!-- Products Section -->
<section class="services-section">
   <div class="upper-box" style="background-image: url(images/background/2.jpg);">
      <div class="auto-container">
         <div class="sec-title text-center light">
            <span class="float-text">Products</span>
            <h2>Our Products</h2>
         </div>
      </div>
   </div>
   <div class="services-box">
      <div class="auto-container">
         <div class="services-carousel owl-carousel owl-theme p-0">
            <!-- Service Block -->
            <div class="service-block">
               <a href="products-western-steel.php">
                  <div class="inner-box">
                     <div class="image-box">
                        <figure class="image"><img src="images/products/ceilingsection-gi/cielingsection.jpg"
                              alt=""></figure>
                     </div>
                     <div class="lower-content">
                        <h3>Western Steel (GI) </h3>
                        <!--<div class="text">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they.</div>-->
                        <!--<div class="link-box">
                                 <a href="#">Lorn More <i class="fa fa-long-arrow-right"></i></a>
                                 </div> -->
                     </div>
                  </div>
               </a>
            </div>
            <!-- Service Block -->
            <div class="service-block">
               <a href="products-western-galvalume.php">
                  <div class="inner-box">
                     <div class="image-box">
                        <figure class="image"><img src="images/products/c-stud-gi/ceiling_Section.jpg" alt="">
                        </figure>
                     </div>
                     <div class="lower-content">
                        <h3>Western Galvalume</h3>
                        <!--<div class="text">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they.</div>-->
                        <!--<div class="link-box">
                                 <a href="#">Lorn More <i class="fa fa-long-arrow-right"></i></a>
                                 </div> -->
                     </div>
                  </div>
               </a>
            </div>
            <!-- Service Block -->
            <div class="service-block">
               <a href="products-western-frame.php">
                  <div class="inner-box">
                     <div class="image-box">
                        <figure class="image"><img src="images/products/intermediatechannel-wf/_T6A0290.jpg"
                              alt=""></figure>
                     </div>
                     <div class="lower-content">
                        <h3>Western Frame (GI)</h3>
                        <!--<div class="text">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they.</div>-->
                        <!--<div class="link-box">
                                 <a href="#">Lorn More <i class="fa fa-long-arrow-right"></i></a>
                                 </div> -->
                     </div>
                  </div>
               </a>
            </div>
            <!-- Service Block -->
            <div class="service-block">
               <a href="products-accessories.php">
                  <div class="inner-box">
                     <div class="image-box">
                        <figure class="image"><img src="images/products/sofitcleat/T6A036901.jpg" alt=""></figure>
                     </div>
                     <div class="lower-content">
                        <h3>Accessories</h3>
                        <!--<div class="text">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they.</div>-->
                        <!--<div class="link-box">
                                 <a href="#">Lorn More <i class="fa fa-long-arrow-right"></i></a>
                                 </div> -->
                     </div>
                  </div>
               </a>
            </div>
            <!-- Service Block -->
            <div class="service-block">
               <a href="products-gypsum-plaster.php">
                  <div class="inner-box">
                     <div class="image-box">
                        <figure class="image"><img src="images/products/gypsumplaster.png"
                              alt="Gypsum Plaster"></figure>
                     </div>
                     <div class="lower-content">
                        <h3>Gypsum Plaster</h3>
                        <!--<div class="text">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they.</div>-->
                        <!--<div class="link-box">
                                 <a href="#">Lorn More <i class="fa fa-long-arrow-right"></i></a>
                                 </div> -->
                     </div>
                  </div>
               </a>
            </div>
            <!-- Service Block -->
            <div class="service-block">
               <a href="products-smart-wall-putty.php">
                  <div class="inner-box">
                     <div class="image-box">
                        <figure class="image"><img src="images/new/Product Images/Background-images-banner.jpg-v01 (2).jpg"
                              alt="Smart Wall Putty"></figure>
                     </div>
                     <div class="lower-content">
                        <h3>Smart Wall Putty</h3>
                        <!--<div class="text">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they.</div>-->
                        <!--<div class="link-box">
                                 <a href="#">Lorn More <i class="fa fa-long-arrow-right"></i></a>
                                 </div> -->
                     </div>
                  </div>
               </a>
            </div>
            <!-- Service Block -->
            <div class="service-block">
               <a href="products-bond-it.php">
                  <div class="inner-box">
                     <div class="image-box">
                        <figure class="image"><img src="images/products/new-hp2.png"
                              alt=""></figure>
                     </div>
                     <div class="lower-content">
                        <h3>Classic Bond</h3>
                        <!--<div class="text">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they.</div>-->
                        <!--<div class="link-box">
                                 <a href="#">Lorn More <i class="fa fa-long-arrow-right"></i></a>
                                 </div> -->
                     </div>
                  </div>
               </a>
            </div>
            <!-- Service Block -->
            <div class="service-block">
               <a href="products-threaded-rod.php">
                  <div class="inner-box">
                     <div class="image-box">
                        <figure class="image"><img src="images/products/threadedrod/T6A033001.jpg" alt="">
                        </figure>
                     </div>
                     <div class="lower-content">
                        <h3>Western Threaded Rod System </h3>
                        <!--<div class="text">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they.</div>-->
                        <!--<div class="link-box">
                                 <a href="#">Lorn More <i class="fa fa-long-arrow-right"></i></a>
                                 </div> -->
                     </div>
                  </div>
               </a>
            </div>
            <!-- Service Block -->
            <div class="service-block">
               <a href="gymsum-board.php">
                  <div class="inner-box">
                     <div class="image-box">
                        <figure class="image"><img src="images/products/westerngypsumboard.png" alt=""></figure>
                     </div>
                     <div class="lower-content">
                        <h3>Western Gypsum Boards</h3>
                        <!--<div class="text">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they.</div>-->
                        <!--<div class="link-box">
                                 <a href="#">Lorn More <i class="fa fa-long-arrow-right"></i></a>
                                 </div> -->
                     </div>
                  </div>
               </a>
            </div>
            <!-- Service Block -->
            <div class="service-block">
               <a href="acessplane.php">
                  <div class="inner-box">
                     <div class="image-box">
                        <figure class="image"><img src="images/products/Westernacesspanel.png" alt=""></figure>
                     </div>
                     <div class="lower-content">
                        <h3>Access Panels </h3>
                        <!--<div class="text">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they.</div>-->
                        <!--<div class="link-box">
                                 <a href="#">Lorn More <i class="fa fa-long-arrow-right"></i></a>
                                 </div> -->
                     </div>
                  </div>
               </a>
            </div>
            <!-- Service Block -->
            <!--<div class="service-block">-->
            <!--   <a href="products-western-operable-walls.php">-->
            <!--      <div class="inner-box">-->
            <!--         <div class="image-box">-->
            <!--            <figure class="image"><img src="images/products/westernoperablewalls/thumboperabalewalss.png" alt=""></figure>-->
            <!--         </div>-->
            <!--         <div class="lower-content">-->
            <!--<h3>Western Operable Walls</h3>-->
            <!--<div class="text">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they.</div>-->
            <!--<div class="link-box">
                                 <a href="#">Lorn More <i class="fa fa-long-arrow-right"></i></a>
                                 </div> -->
            <!--         </div>-->
            <!--      </div>-->
            <!--   </a>-->
            <!--</div>-->
            <!-- Service Block -->
            <!--<div class="service-block">-->
            <!--   <a href="products-flush-doors.php">-->
            <!--      <div class="inner-box">-->
            <!--         <div class="image-box">-->
            <!--            <figure class="image"><img src="images/products/flushdoors/Flush-door.jpg" alt=""></figure>-->
            <!--         </div>-->
            <!--         <div class="lower-content">-->
            <!--            <h3>Flush Doors</h3>-->
            <!--<div class="text">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they.</div>-->
            <!--<div class="link-box">
                                 <a href="#">Lorn More <i class="fa fa-long-arrow-right"></i></a>
                                 </div> -->
            <!--         </div>-->
            <!--      </div>-->
            <!--   </a>-->
            <!--</div>-->
            <!-- Service Block -->
            <!--   <div class="service-block">
                     <a href="products-inhouse-material-testing-laboratory.php">
                        <div class="inner-box">
                           <div class="image-box">
                              <figure class="image"><img src="images/products/inhousematerialtestinglaboratory/UTM-1.jpg" alt=""></figure>
                           </div>
                           <div class="lower-content">
                              <h3>Inhouse Material Testing Laboratory</h3>
                              
                           </div>
                        </div>
                     </a>
                     </div> -->
         </div>
      </div>
   </div>
</section>
<!--End Products Section -->
<!-- Fun Fact Section -->
<section class="fun-fact-section">
   <div class="outer-box" style="background-image: url(images/background/3.jpg);">
      <div class="auto-container">
         <div class="fact-counter">
            <div class="row">
               <!--Column-->
               <div class="counter-column col-lg-4 col-md-4 col-sm-4 wow fadeInUp">
                  <div class="count-box">
                     <div class="count"><span class="count-text" data-speed="5000" data-stop="18">0</span><span
                           class="counterplus">+</span></div>
                     <h4 class="counter-title">Years Total Experience In All The Products</h4>
                  </div>
               </div>
               <!--Column-->
               <div class="counter-column col-lg-4 col-md-4 col-sm-4 wow fadeInUp" data-wow-delay="400ms">
                  <div class="count-box">
                     <div class="count"><span class="count-text" data-speed="5000" data-stop="200">0</span><span
                           class="counterplus">+</span></div>
                     <h4 class="counter-title" style="font-size:13px">Major Projects Completed - Hotels, hospitals, commercial,
                        industrial, residential, government</h4>
                  </div>
               </div>
               <!--Column-->
               <div class="counter-column col-lg-4 col-md-4 col-sm-4 wow fadeInUp" data-wow-delay="800ms">
                  <div class="count-box">
                     <div class="count"><span class="count-text" data-speed="5000" data-stop="100">0</span><span
                           class="counterplus">+</span></div>
                     <h4 class="counter-title">Clients PAN India</h4>
                  </div>
               </div>
               <!--Column-->
               <!--<div class="counter-column col-lg-3 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="1200ms">
                        <div class="count-box">
                           <div class="count"><span class="count-text" data-speed="5000" data-stop="12">0</span></div>
                           <h4 class="counter-title">Awards</h4>
                        </div>
                        </div>  -->
            </div>
         </div>
      </div>
   </div>
</section>
<!--End Fun Fact Section -->
<!-- Projects Section -->
<section class="news-section pt-0">
   <div class="auto-container">
      <div class="sec-title">
         <span class="float-text">Projects</span>
         <h2>Our Projects</h2>
      </div>
      <div class="row">
         <!-- <div class="news-block col-lg-4 col-md-6 col-sm-12">
                  <div class="inner-box">
                      <div class="image-box">
                          <figure class="image"><img src="images/projects/thumbs/Assembly_assam.png" alt=""></figure>
                          <div class="overlay-box"><a href="upcoming-projects.php" target="blank"><i class="fa fa-external-link"></i></a></div>
                      </div>
                      <div class="caption-box">
                          <h3><a href="upcoming-projects.php" target="blank">Upcoming Projects</a></h3>
                          
                      </div>
                  </div>
                  </div> -->
         <div class="news-block col-lg-4 col-md-4 col-sm-12">
            <div class="inner-box">
               <a href="commercial-projects.php">
                  <div class="image-box">
                     <figure class="image"><img src="images/projects/projectsmainthumb/commercialthumbresize.jpg"
                           alt=""></figure>
                     <div class="overlay-box"></div>
                  </div>
               </a>
               <div class="caption-box">
                  <h3><a href="commercial-projects.php">Commercial Projects</a></h3>
               </div>
            </div>
         </div>
         <div class="news-block col-lg-4 col-md-4 col-sm-12">
            <div class="inner-box">
               <a href="residential-projects.php">
                  <div class="image-box">
                     <figure class="image"><img src="images/projects/projectsmainthumb/residentialthumbresize.jpg"
                           alt=""></figure>
                     <div class="overlay-box"></div>
                  </div>
               </a>
               <div class="caption-box">
                  <h3><a href="residential-projects.php">Residential Projects</a></h3>
               </div>
            </div>
         </div>
         <div class="news-block col-lg-4 col-md-4 col-sm-12">
            <div class="inner-box">
               <a href="hospitality-projects.php">
                  <div class="image-box">
                     <figure class="image"><img src="images/projects/projectsmainthumb/hospitalthumbresize.jpg"
                           alt=""></figure>
                     <div class="overlay-box"></div>
                  </div>
               </a>
               <div class="caption-box">
                  <h3><a href="hospitality-projects.php">Hospitality Projects</a></h3>
               </div>
            </div>
         </div>
         <div class="news-block col-lg-4 col-md-4 col-sm-12">
            <div class="inner-box">
               <a href="healthcare-projects.php">
                  <div class="image-box">
                     <figure class="image"><img src="images/projects/projectsmainthumb/healthcarethumbresize.jpg"
                           alt=""></figure>
                     <div class="overlay-box"></div>
                  </div>
               </a>
               <div class="caption-box">
                  <h3><a href="healthcare-projects.php">Healthcare Projects</a></h3>
               </div>
            </div>
         </div>
         <div class="news-block col-lg-4 col-md-4 col-sm-12">
            <div class="inner-box">
               <a href="education-projects.php">
                  <div class="image-box">
                     <figure class="image"><img src="images/projects/projectsmainthumb/educationthumb.jpg" alt="">
                     </figure>
                     <div class="overlay-box"></div>
                  </div>
               </a>
               <div class="caption-box">
                  <h3><a href="education-projects.php">Education Projects</a></h3>
               </div>
            </div>
         </div>
         <div class="news-block col-lg-4 col-md-4 col-sm-12">
            <div class="inner-box">
               <a href="government-projects.php">
                  <div class="image-box">
                     <figure class="image"><img src="images/projects/projectsmainthumb/govermentthumb.jpg" alt="">
                     </figure>
                     <div class="overlay-box"></div>
                  </div>
               </a>
               <div class="caption-box">
                  <h3><a href="government-projects.php">Government Projects</a></h3>
               </div>
            </div>
         </div>
         <div class="news-block col-lg-4 col-md-4 col-sm-12">
            <div class="inner-box">
               <a href="industrial-projects.php">
                  <div class="image-box">
                     <figure class="image"><img src="images/projects/projectsmainthumb/industrialthumb.jpg"
                           alt=""></figure>
                     <div class="overlay-box"></div>
                  </div>
               </a>
               <div class="caption-box">
                  <h3><a href="industrial-projects.php">Industrial Projects</a></h3>
               </div>
            </div>
         </div>
         <div class="news-block col-lg-4 col-md-4 col-sm-12">
            <div class="inner-box">
               <a href="theatre-multiplex-projects.php">
                  <div class="image-box">
                     <figure class="image"><img src="images/projects/projectsmainthumb/theaterthumbs.jpg" alt="">
                     </figure>
                     <div class="overlay-box"></div>
                  </div>
               </a>
               <div class="caption-box">
                  <h3><a href="theatre-multiplex-projects.php">Theatre & Multiplex Projects</a></h3>
               </div>

            </div>
         </div>
      </div>
   </div>
</section>
<br>
<!-- Team Section -->
<section class="team-section p-0 m-0">
   <div class="container">
      <div class="row">
         <!-- Image Section -->
         <div class="col-lg-4 col-md-6 col-sm-12">
            <div class="team-block">
               <div class="inner-box text-center">
                  <div class="image-box">
                     <img src="images/resource/founder.png" class="img-responsive img-thumbnail" alt="Founder">
                  </div>
               </div>
            </div>
         </div>
         <!-- Founder Message Section -->
         <div class="col-lg-8 col-md-6 col-sm-12">
            <div class="inner-box">
               <h2 class="text-primary desk-no-margin">Founder’s Message</h2>
               <p style="text-align: justify;" class="mobile-textSize">
                  Over more than two decades, Western Infrabuild Products LLP has created an enviable image in the
                  Indian construction industry. Western Infrabuild Products LLP focuses on the policy of offering exceptional
                  quality products and services to its customers through the involvement & empowerment of our faculty with the
                  ultimate aim of customer satisfaction.
               </p>
               <p style="text-align: justify;" class="mobile-textSize">
                  We are focused on engaging in exceptional research and product development. In the last few years,
                  we have taken several initiatives, like introducing new products, expanding Pan India, introducing in-house
                  material testing equipment, and reaching the peak of innovation in the industry.
               </p>
               <p style="text-align: justify mobile-textSize;">As we carve a distinct path ahead, our major milestones are a constant source of inspiration for our team.</p>
               <h4>Major Milestones:</h4>
               <ul class="list-unstyled">
                  <li><i class="glyphicon glyphicon-ok"></i> Setting up a state-of-the-art factory at Mhape, Navi Mumbai</li>
                  <li><i class="glyphicon glyphicon-ok"></i> Pan India Expansion</li>
                  <li><i class="glyphicon glyphicon-ok"></i> Introduction of a complete range of Galvalume-coated systems for False Ceiling and Dry Wall</li>
               </ul>
            </div>
         </div>
      </div>
      <div class="row">
         <!-- Additional Message Section -->
         <div class="col-lg-12 col-md-12 col-sm-12">
            <div class="team-block">
               <p style="text-align: justify; " class="mobile-padding mobile-textSize">
                  Ambitious ventures are being planned in the next couple of years to keep ourselves abreast in the VUCA
                  world of innovation and disruption. Western Infrabuild Products LLP has consistently produced excellent
                  results, and its work can be seen in distinguished parts of our nation.
               </p>
               <p style="text-align: justify; " class="mobile-padding mobile-textSize">
                  We believe in continuous improvement, profitable growth, and superior customer service, thereby
                  benefiting both stakeholders and employees. I am excited to be a part of this journey.
               </p>
               <p style="text-align: justify; " class="mobile-padding mobile-textSize">
                  In a nutshell, we believe that - "Great things are done by a series of small things brought together".
                  We are constantly innovating and never stand still.
               </p>
               <p><strong>Mr. Ashfaque Z Khan</strong></p>
               <p>Designated Partner</p>
            </div>
         </div>
      </div>
   </div>
</section>

<!--End Team Section -->
<!--End Projects Section -->
<!-- Testimonial Section -->
<!--   <section class="testimonial-section">
         <div class="outer-container clearfix">
            
            <div class="title-column clearfix">
               <div class="inner-column">
                  <div class="sec-title">
                     <span class="float-text">testimonial</span>
                     <h2>What Client Says</h2>
                  </div>
                  <div class="text">Looking at its layout. The point of using very profectly is that it has a more-or-less normal distribution of letters, as opposed</div>
               </div>
            </div>
            
            <div class="testimonial-column clearfix" style="background-image: url(images/background/4.jpg);">
               <div class="inner-column">
                  <div class="testimonial-carousel owl-carousel owl-theme">
                     
                     <div class="testimonial-block">
                        <div class="inner-box">
                           <div class="image-box"><img src="images/resource/thumb-1.jpg" alt=""></div>
                           <div class="text">A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my whole heart. I am alone, and feel the charm of existence in this spot.</div>
                           <div class="info-box">
                              <h4 class="name">Jane Smith</h4>
                              <span class="designation">CEO, InDesign</span>
                           </div>
                        </div>
                     </div>
                     
                     <div class="testimonial-block">
                        <div class="inner-box">
                           <div class="image-box"><img src="images/resource/thumb-1.jpg" alt=""></div>
                           <div class="text">A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my whole heart. I am alone, and feel the charm of existence in this spot.</div>
                           <div class="info-box">
                              <h4 class="name">Jane Smith</h4>
                              <span class="designation">CEO, InDesign</span>
                           </div>
                        </div>
                     </div>
                     
                     <div class="testimonial-block">
                        <div class="inner-box">
                           <div class="image-box"><img src="images/resource/thumb-1.jpg" alt=""></div>
                           <div class="text">A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my whole heart. I am alone, and feel the charm of existence in this spot.</div>
                           <div class="info-box">
                              <h4 class="name">Jane Smith</h4>
                              <span class="designation">CEO, InDesign</span>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         </section> -->
<!--End Testimonial Section -->
<!--Clients Section-->
<section class="clients-section">
   <div class="inner-container">
      <h2 style="color: #007bff; text-align: center; font-size: 2.8rem; font-weight: 600; margin: 0px 0px;">
         Some of Our Esteemed Clients
      </h2>

      <br>
      <div class="sponsors-outer" style="padding-top:15px;">
         <ul class="logogrid">
            <li class="logogrid__item">
               <img src="images/clients/adani.png" class="logogrid__img" alt="clients">
            </li>
            <li class="logogrid__item">
               <img src="images/clients/bombayrealty.png" class="logogrid__img" alt="clients">
            </li>
            <li class="logogrid__item">
               <img src="images/clients/cidco.png" class="logogrid__img" alt="clients">
            </li>
            <li class="logogrid__item">
               <img src="images/clients/dypatilhospital.png" class="logogrid__img" alt="clients">
            </li>
            <li class="logogrid__item">
               <img src="images/clients/essell.png" class="logogrid__img" alt="clients">
            </li>
            <li class="logogrid__item">
               <img src="images/clients/hiranandani.png" class="logogrid__img" alt="clients">
            </li>
            <li class="logogrid__item">
               <img src="images/clients/ies.png" class="logogrid__img" alt="clients">
            </li>
            <li class="logogrid__item">
               <img src="images/clients/itchotel.png" class="logogrid__img" alt="clients">
            </li>
            <li class="logogrid__item">
               <img src="images/clients/kanakia.png" class="logogrid__img" alt="clients">
            </li>
            <li class="logogrid__item">
               <img src="images/clients/kcorp.png" class="logogrid__img" alt="clients">
            </li>
            <li class="logogrid__item">
               <img src="images/clients/lntrealty.png" class="logogrid__img" alt="clients">
            </li>
            <li class="logogrid__item">
               <img src="images/clients/lodha.png" class="logogrid__img" alt="clients">
            </li>
            <li class="logogrid__item">
               <img src="images/clients/mahada.png" class="logogrid__img" alt="clients">
            </li>
            <li class="logogrid__item">
               <img src="images/clients/markspancer.png" class="logogrid__img" alt="clients">
            </li>
            <li class="logogrid__item">
               <img src="images/clients/marriot.png" class="logogrid__img" alt="clients">
            </li>
            <li class="logogrid__item">
               <img src="images/clients/mgmhospital.png" class="logogrid__img" alt="clients">
            </li>
            <li class="logogrid__item">
               <img src="images/clients/nimims.png" class="logogrid__img" alt="clients">
            </li>
            <li class="logogrid__item">
               <img src="images/clients/novotel.png" class="logogrid__img" alt="clients">
            </li>
            <li class="logogrid__item">
               <img src="images/clients/nsdc.png" class="logogrid__img" alt="clients">
            </li>
            <li class="logogrid__item">
               <img src="images/clients/pantaloons.png" class="logogrid__img" alt="clients">
            </li>
            <li class="logogrid__item">
               <img src="images/clients/raddison.png" class="logogrid__img" alt="clients">
            </li>
            <li class="logogrid__item">
               <img src="images/clients/rahejaunivrsal.png" class="logogrid__img" alt="clients">
            </li>
            <li class="logogrid__item">
               <img src="images/clients/rustomjee.png" class="logogrid__img" alt="clients">
            </li>
            <li class="logogrid__item">
               <img src="images/clients/saprjipallonji.png" class="logogrid__img" alt="clients">
            </li>

            <li class="logogrid__item">
               <img src="images/clients/sethcreators.png" class="logogrid__img" alt="clients">
            </li>
            <li class="logogrid__item">
               <img src="images/clients/suntek.png" class="logogrid__img" alt="clients">
            </li>
            <li class="logogrid__item">
               <img src="images/clients/wdhwagroup.png" class="logogrid__img" alt="clients">
            </li>


            <li class="logogrid__item">
               <img src="images/clients/amnora.png" class="logogrid__img" alt="clients">
            </li>
            <li class="logogrid__item">
               <img src="images/clients/db-reality.png" class="logogrid__img" alt="clients">
            </li>
            <li class="logogrid__item">
               <img src="images/clients/Dosti.png" class="logogrid__img" alt="clients">
            </li>
            <li class="logogrid__item">
               <img src="images/clients/Ekta-World.png" class="logogrid__img" alt="clients">
            </li>
            <li class="logogrid__item">
               <img src="images/clients/four-seasons.png" class="logogrid__img" alt="clients">
            </li>
            <li class="logogrid__item">
               <img src="images/clients/Gammon-Builders.png" class="logogrid__img" alt="clients">
            </li>
            <li class="logogrid__item">
               <img src="images/clients/Godrej.png" class="logogrid__img" alt="clients">
            </li>
            <li class="logogrid__item">
               <img src="images/clients/HDIL.png" class="logogrid__img" alt="clients">
            </li>
            <li class="logogrid__item">
               <img src="images/clients/Indiabulls.png" class="logogrid__img" alt="clients">
            </li>
            <li class="logogrid__item">
               <img src="images/clients/Kohinoor.png" class="logogrid__img" alt="clients">
            </li>
            <li class="logogrid__item">
               <img src="images/clients/L&T-Construction.png" class="logogrid__img" alt="clients">
            </li>
            <li class="logogrid__item">
               <img src="images/clients/Mahindra-Lifespaces.png" class="logogrid__img" alt="clients">
            </li>
            <li class="logogrid__item">
               <img src="images/clients/phoenix-market-city.png" class="logogrid__img" alt="clients">
            </li>
            <li class="logogrid__item">
               <img src="images/clients/Seth-Group.png" class="logogrid__img" alt="clients">
            </li>
            <li class="logogrid__item">
               <img src="images/clients/Reliance.png" class="logogrid__img" alt="clients">
            </li>
            <li class="logogrid__item">
               <img src="images/clients/RNA-CORP.png" class="logogrid__img" alt="clients">
            </li>
            <li class="logogrid__item">
               <img src="images/clients/Runawal.png" class="logogrid__img" alt="clients">
            </li>
            <li class="logogrid__item">
               <img src="images/clients/Runawal-Green.png" class="logogrid__img" alt="clients">
            </li>
            <li class="logogrid__item">
               <img src="images/clients/Sayaji.png" class="logogrid__img" alt="clients">
            </li>
            <li class="logogrid__item">
               <img src="images/clients/Tata-Housing.png" class="logogrid__img" alt="clients">
            </li>
            <li class="logogrid__item">
               <img src="images/clients/Volkswagon.png" class="logogrid__img" alt="clients">
            </li>
         </ul>
      </div>
   </div>
</section>
<!-- <section class="clients-section">
   <div class="inner-container">
      <h2 style="color: black;text-align: center;">Some of our Esteemed Clients</h2>
      <div class="sponsors-outer">
         <ul class="sponsors-carousel owl-carousel owl-theme">
            <li class="slide-item">
               <figure class="image-box"><img src="images/clients/adani.png" alt=""></figure>
            </li>
            <li class="slide-item">
               <figure class="image-box"><img src="images/clients/bombayrealty.png" alt=""></figure>
            </li>
            <li class="slide-item">
               <figure class="image-box"><img src="images/clients/cidco.png" alt=""></figure>
            </li>
            <li class="slide-item">
               <figure class="image-box"><img src="images/clients/dypatilhospital.png" alt=""></figure>
            </li>
            <li class="slide-item">
               <figure class="image-box"><img src="images/clients/essell.png" alt=""></figure>
            </li>
            <li class="slide-item">
               <figure class="image-box"><img src="images/clients/hiranandani.png" alt=""></figure>
            </li>
            <li class="slide-item">
               <figure class="image-box"><img src="images/clients/ies.png" alt=""></figure>
            </li>
            <li class="slide-item">
               <figure class="image-box"><img src="images/clients/itchotel.png" alt=""></figure>
            </li>
            <li class="slide-item">
               <figure class="image-box"><img src="images/clients/kanakia.png" alt=""></figure>
            </li>
            <li class="slide-item">
               <figure class="image-box"><img src="images/clients/kcorp.png" alt=""></figure>
            </li>
            <li class="slide-item">
               <figure class="image-box"><img src="images/clients/lntrealty.png" alt=""></figure>
            </li>
            <li class="slide-item">
               <figure class="image-box"><img src="images/clients/lodha.png" alt=""></figure>
            </li>
            <li class="slide-item">
               <figure class="image-box"><img src="images/clients/mahada.png" alt=""></figure>
            </li>
            <li class="slide-item">
               <figure class="image-box"><img src="images/clients/markspancer.png" alt=""></figure>
            </li>
            <li class="slide-item">
               <figure class="image-box"><img src="images/clients/marriot.png" alt=""></figure>
            </li>
            <li class="slide-item">
               <figure class="image-box"><img src="images/clients/mgmhospital.png" alt=""></figure>
            </li>
            <li class="slide-item">
               <figure class="image-box"><img src="images/clients/nimims.png" alt=""></figure>
            </li>
            <li class="slide-item">
               <figure class="image-box"><img src="images/clients/novotel.png" alt=""></figure>
            </li>
            <li class="slide-item">
               <figure class="image-box"><img src="images/clients/nsdc.png" alt=""></figure>
            </li>
            <li class="slide-item">
               <figure class="image-box"><img src="images/clients/pantaloons.png" alt=""></figure>
            </li>
            <li class="slide-item">
               <figure class="image-box"><img src="images/clients/raddison.png" alt=""></figure>
            </li>
            <li class="slide-item">
               <figure class="image-box"><img src="images/clients/rahejaunivrsal.png" alt=""></figure>
            </li>
            <li class="slide-item">
               <figure class="image-box"><img src="images/clients/rustomjee.png" alt=""></figure>
            </li>
            <li class="slide-item">
               <figure class="image-box"><img src="images/clients/saprjipallonji.png" alt=""></figure>
            </li>
            <li class="slide-item">
               <figure class="image-box"><img src="images/clients/sethcreators.png" alt=""></figure>
            </li>
            <li class="slide-item">
               <figure class="image-box"><img src="images/clients/suntek.png" alt=""></figure>
            </li>
            <li class="slide-item">
               <figure class="image-box"><img src="images/clients/wdhwagroup.png" alt=""></figure>
            </li>
            <li class="slide-item">
               <figure class="image-box"><img src="images/clients/amnora.png" alt=""></figure>
            </li>
            <li class="slide-item">
               <figure class="image-box"><img src="images/clients/db-reality.png" alt=""></figure>
            </li>
            <li class="slide-item">
               <figure class="image-box"><img src="images/clients/Dosti.png" alt=""></figure>
            </li>
            <li class="slide-item">
               <figure class="image-box"><img src="images/clients/Ekta-World.png" alt=""></figure>
            </li>
            <li class="slide-item">
               <figure class="image-box"><img src="images/clients/four-seasons.png" alt=""></figure>
            </li>
            <li class="slide-item">
               <figure class="image-box"><img src="images/clients/Gammon-Builders.png" alt=""></figure>
            </li>
            <li class="slide-item">
               <figure class="image-box"><img src="images/clients/Godrej.png" alt=""></figure>
            </li>
            <li class="slide-item">
               <figure class="image-box"><img src="images/clients/HDIL.png" alt=""></figure>
            </li>
            <li class="slide-item">
               <figure class="image-box"><img src="images/clients/Indiabulls.png" alt=""></figure>
            </li>
            <li class="slide-item">
               <figure class="image-box"><img src="images/clients/Kohinoor.png" alt=""></figure>
            </li>
            <li class="slide-item">
               <figure class="image-box"><img src="images/clients/L&T-Construction.png" alt=""></figure>
            </li>
            <li class="slide-item">
               <figure class="image-box"><img src="images/clients/Mahindra-Lifespaces.png" alt=""></figure>
            </li>
            <li class="slide-item">
               <figure class="image-box"><img src="images/clients/phoenix-market-city.png" alt=""></figure>
            </li>
            <li class="slide-item">
               <figure class="image-box"><img src="images/clients/Seth-Group.png" alt=""></figure>
            </li>
            <li class="slide-item">
               <figure class="image-box"><img src="images/clients/Reliance.png" alt=""></figure>
            </li>
            <li class="slide-item">
               <figure class="image-box"><img src="images/clients/RNA-CORP.png" alt=""></figure>
            </li>
            <li class="slide-item">
               <figure class="image-box"><img src="images/clients/Runawal.png" alt=""></figure>
            </li>
            <li class="slide-item">
               <figure class="image-box"><img src="images/clients/Runawal-Green.png" alt=""></figure>
            </li>
            <li class="slide-item">
               <figure class="image-box"><img src="images/clients/Sayaji.png" alt=""></figure>
            </li>
            <li class="slide-item">
               <figure class="image-box"><img src="images/clients/Tata-Housing.png" alt=""></figure>
            </li>
            <li class="slide-item">
               <figure class="image-box"><img src="images/clients/Volkswagon.png" alt=""></figure>
            </li>
         </ul>
      </div>
   </div>

</section> -->

<script src="https://app.wotnot.io/chat-widget/8BhUm7DMiZkn094356805994HwVzk273.js" defer></script>
<!--End Clients Section-->
<?php include 'home-footer.php'; ?>
<style>
   .social-icon-two a {
      color: white !important;
   }

   .btn {
      background-color: gold;
      color: black;
      border: none !important;
   }

   .floatButons {
      position: fixed;
      bottom: 38%;
      right: -135px;
      z-index: 111;
      transform: rotate(270deg);
   }

   .floatButons .btn {
      letter-spacing: 2px;
   }

   .floating-button {
      position: fixed;
      bottom: 9px;
      right: 5px;
      background-color: #25D366;
      color: white;
      border: none;
      border-radius: 100px;
      padding: 17px;
      font-size: 14px;
      text-decoration: none;
      display: flex;
      align-items: center;
      justify-content: center;
      box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
      transition: all 0.3s ease;
      z-index: 1030;
      width: 45px;
      height: 45px;
   }

   .floating-button:hover {
      background-color: #128C7E;
      /* Darker WhatsApp green */
      transform: scale(1.05);
   }
   @media (max-width: 768px) {
      .floating-button {
         position: fixed;
         bottom: 51px;
         right: 5px;
         background-color: #25D366;
         color: white;
         border: none;
         border-radius: 100px;
         padding: 17px;
         font-size: 14px;
         text-decoration: none;
         display: flex;
         align-items: center;
         justify-content: center;
         box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
         transition: all 0.3s ease;
         z-index: 1030;
         width: 50px;
         height: 50px;
      }
   }

   @media (max-width:600px) {
      .floatButons {
         width: 100%;
         position: fixed;
         bottom: 0px !important;
         right: 0px !important;
         z-index: 111;
         transform: rotate(0deg) !important;
         display: inline-table;
      }

      .floatButons .btn {
         letter-spacing: 0px !important;
         width: 50% !important;
      }
   }

   /* Pop Up model */
   .contact-form input,
   .contact-form select,
   .contact-form textarea {
      width: 100%;
      padding: 10px;
      margin-bottom: 15px;
      border: 1px solid #ddd;
   }

   .contact-form .g-recaptcha {
      margin-bottom: 15px;
   }

   .float-text {
      color: #999;
      display: block;
      margin-bottom: 10px;
   }

   .sec-title h2 {
      margin-top: 0;
   }

   .sec-title {
      margin-bottom: 0 !important;
   }
</style>
<!-- Main Footer -->

<div class="floatButons ">

   <button class="btn btn-primary rounded-0 fw-semibold lh-1" data-toggle="modal" data-target="#contactModal">Get in touch</button>
   <button class="btn btn-primary rounded-0 fw-semibold lh-1" onclick="downloadPDF()">Download Brochure</button>
</div>
<footer class="main-footer" style="background-image: url(images/background/5.jpg);">
   <div class="auto-container">
      <!--Widgets Section-->
      <div class="widgets-section">
         <div class="row">
            <!--Big Column-->
            <div class="big-column col-xl-7 col-lg-12 col-md-12 col-sm-12">
               <div class="row">
                  <!--Footer Column-->
                  <div class="footer-column col-xl-6 col-lg-6 col-md-6 col-sm-12">
                     <div class="footer-widget about-widget">
                        <div class="footer-logo">
                           <figure>
                              <a href="index.php"><img src="images/footer-logo.png" alt=""></a>
                           </figure>
                        </div>
                        <div class="widget-content">
                           <div class="text" style="text-align: justify;">Western Infrabuild Products LLP was incepted
                              under the inspiring leadership of Mr. Ashfaque Z Khan with the vision of revolutionizing
                              interior industry by providing high quality but cost-effective products. True to its
                              vision, Western Infrabuild Products LLP has achieved many milestones in the interior
                              designing industry by constantly and actively innovating its offerings to fulfill customer
                              needs.</div>
                        </div>
                        <br>
                        <!-- <a href="pdf/westerninfra-e-brochure.pdf" download> <button type="submit" name="submit" class="theme-btn btn-style-one" style="pointer-events: all; cursor: pointer;">
                                                                                 Download e-Brochure
                                                                             </button> </a> -->
                     </div>
                  </div>
                  <!--Footer Column-->
                  <div class="footer-column col-xl-6 col-lg-6 col-md-6 col-sm-12">
                     <div class="footer-widget recent-posts">
                        <h2 class="widget-title">Address</h2>
                        <!--Footer Column-->
                        <div class="widget-content">
                           <div class="post1">
                              <p style="color: white;">Western Infrabuild Products LLP</p>
                              <ul class="info" style="color: white;">
                                 <li>A-592, TTC Industrial Area, Mahape Circle, MIDC Industrial Area, Ghansoli, Navi
                                    Mumbai, Maharashtra 400701</li>
                                 <li>Tel No. : 022 - 27780104/05</li>
                                 <li>Mob No. : +91 - 9324683484 </li>
                                 <li>Email : admin@wipindia.com</li>

                              </ul>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <!--Big Column-->
            <div class="big-column col-xl-5 col-lg-12 col-md-12 col-sm-12">
               <div class="row clearfix">
                  <div class="footer-column col-xl-5 col-lg-6 col-md-6 col-sm-12">
                     <div class="footer-widget links-widget">
                        <h2 class="widget-title">Useful Links</h2>
                        <div class="widget-content">
                           <ul class="list">
                              <li><a href="index.php">Home</a></li>
                              <li><a href="about.php">About</a></li>
                              <li><a href="about.php">Products</a></li>
                              <li><a href="about.php">Projects</a></li>
                              <!-- <li><a href="products-western-steel.php">Western Steel (GI)</a></li>
                              <li><a href="products-western-galvalume.php">Western Galvalume</a></li>
                              <li><a href="products-western-frame.php">Western Frame (GI)</a></li>
                              <li><a href="products-accessories.php">Accessories</a></li>
                              <li><a href="products-gypsum-plaster.php">Gypsum Plaster</a></li>
                              <li><a href="products-smart-wall-putty.php">Smart Wall Putty</a></li>
                              <li><a href="products-bond-it.php">Classic Bond</a></li>
                              <li><a href="products-threaded-rod.php">Western Threaded Rod System</a></li> -->
                              <!--<li><a href="products-western-operable-walls.php">Western Operable Walls</a></li>-->
                              <!--<li><a href="products-flush-doors.php">Flush Doors</a></li>-->

                              <!-- <li><a href="commercial-projects.php">Commercial Projects</a></li>
                              <li><a href="residential-projects.php">Residential Projects</a></li>
                              <li><a href="hospitality-projects.php">Hospitality Projects</a></li>
                              <li><a href="healthcare-projects.php">Healthcare Projects</a></li>
                              <li><a href="education-projects.php">Education Projects</a></li>
                              <li><a href="government-projects.php">Government Projects</a></li>
                              <li><a href="industrial-projects.php">Industrial Projects</a></li> -->
                              <!-- <li><a href="theatre-multiplex-projects.php">Theatre & Multiplex Projects</a></li> -->
                              <li><a href="products-inhouse-material-testing-laboratory.php">Testing Laboratory</a></li>
                              <li><a href="contact.php">Contact</a></li>
                           </ul>
                        </div>
                     </div>
                  </div>
                  <!--Footer Column-->
                  <div class="footer-column col-xl-7 col-lg-6 col-md-6 col-sm-12">
                     <div class="footer-widget gallery-widget">
                        <h2 class="widget-title">Enquiry</h2>
                        <div class="widget-content">
                           <?php include 'successthankyou.php'; ?>
                           <form action="" method="post">

                              <div class="row">

                                 <div class="col-lg-12 col-sm-12">

                                    <div class="form-group">
                                       <input type="text" name="first_name" id="first_name" class="form-control"
                                          data-error="Please enter your name" placeholder="Name*" />

                                       <div class="help-block with-errors"></div>

                                    </div>

                                 </div>

                                 <div class="col-lg-12 col-sm-12">

                                    <div class="form-group">
                                       <input type="email" name="email" id="email" class="form-control" required
                                          data-error="Please enter your email" placeholder="Email*" />

                                       <div class="help-block with-errors"></div>

                                    </div>

                                 </div>

                                 <div class="col-lg-12 col-sm-12">

                                    <div class="form-group">
                                       <input type="text" name="last_name" id="last_name" required
                                          data-error="Please enter your number" class="form-control"
                                          placeholder="Phone*" maxlength="10" />

                                       <div class="help-block with-errors"></div>

                                    </div>

                                 </div>



                                 <div class="col-lg-12 col-md-12">

                                    <div class="g-recaptcha" data-sitekey="6LeOZ6waAAAAANgmnM0nrtWti9KlsKdxE5U-qFtm"
                                       style="transform:scale(0.7);transform-origin:0;-webkit-transform:scale(0.7); transform:scale(0.7);-webkit-transform-origin:0 0;transform-origin:0 0;">
                                    </div>
                                    <button type="submit" name="submit" class="theme-btn btn-style-one"
                                       style="pointer-events: all; cursor: pointer;">
                                       Submit
                                    </button>

                                    <div id="msgSubmit" class="h3 text-center hidden"></div>

                                    <div class="clearfix"></div>

                                 </div>

                              </div>

                           </form>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
   <!--Footer Bottom-->
   <div class="footer-bottom">
      <div class="auto-container">
         <div class="inner-container clearfix">
            <div class="social-links">
               <!-- <ul class="social-icon-two">
                  <li><a href="https://api.whatsapp.com/send?phone=+917678047905" target="_blank"><i
                           class="fa fa-whatsapp"></i></a></li>
                  <li><a href="https://www.linkedin.com/in/westerninfrabuildproductsllp-657541139/" target="_blank"><i
                           class="fa fa-linkedin"></i></a></li>
               </ul> -->
               <ul class="social-icon-two d-flex align-items-center">

                  <li><a href="https://www.linkedin.com/company/western-infrabuild-products-llp/"
                        target="_blank" class="text-white ms-3"><i class="fa fa-linkedin"></i></a></li>
                  <li><a href="https://www.facebook.com/p/Western-Infrabuild-Products-LLP-100087516592602/"
                        target="_blank" class="text-white ms-3"><i class="fa fa-facebook"></i></a></li>
                  <li><a href="https://www.instagram.com/westerninfrabuildproducts/" target="_blank"
                        class="text-white ms-3"><i class="fa fa-instagram"></i></a></li>
                  <li><a href="https://www.youtube.com/@WesternInfrabuildProducts" target="_blank"
                        class="text-white ms-3"><i class="fa fa-youtube"></i></a></li>
               </ul>

            </div>
            <div class="copyright-text">
               <p>Copyright © 2020 Western Infrabuild Products LLP</p>
            </div>
         </div>
      </div>
   </div>
</footer>
<!-- End Main Footer -->

</div>
<div class="modal fade" id="contactModal" tabindex="-1" role="dialog" aria-labelledby="contactModalLabel">
   <div class="modal-dialog" role="document">
      <div class="modal-content">
         <div class="modal-header">
            <div class="sec-title" style="margin-bottom:0">
               <h2 id="contactModalLabel">Contact Us</h2>
            </div>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
               <span aria-hidden="true">&times;</span>
            </button>

         </div>
         <div class="modal-body">
            <div class="contact-form">
               <form action="successformcontact.php" method="post">
                  <div class="row">
                     <div class="col-lg-12">
                        <input type="text" name="first_name" placeholder="Name" required>
                     </div>
                     <div class="col-lg-12">
                        <input type="email" name="email" placeholder="Email" required>
                     </div>
                     <div class="col-lg-12">
                        <input type="text" name="last_name" placeholder="Phone" required maxlength="10">
                     </div>
                     <div class="col-lg-12">
                        <select name="product" required>
                           <option value="">Select a Product</option>
                           <option value="Western Steel (GI)">Western Steel (GI)</option>
                           <option value="Western Galvalume">Western Galvalume</option>
                           <option value="Western Frame (GI)">Western Frame (GI)</option>
                           <option value="Western Threaded Rod System">Western Threaded Rod System</option>
                           <option value="Accessories">Accessories</option>
                           <option value="Gypsum Plaster">Gypsum Plaster</option>
                           <option value="Smart Wall Putty">Smart Wall Putty</option>
                           <option value="Classic Bond">Classic Bond</option>
                           <option value="Western Gypsum Board">Western Gypsum Board</option>
                           <option value="Access Panels">Access Panels</option>
                        </select>
                     </div>
                     <div class="col-lg-12">
                        <textarea name="message" placeholder="Your Message" required></textarea>
                     </div>
                     <div class="col-lg-12">
                        <div class="g-recaptcha" data-sitekey="6LeOZ6waAAAAANgmnM0nrtWti9KlsKdxE5U-qFtm"
                           style="transform:scale(0.7);transform-origin:0;-webkit-transform:scale(0.7); transform:scale(0.7);-webkit-transform-origin:0 0;transform-origin:0 0;">
                        </div>
                     </div>
                     <div class="col-lg-12">
                        <button class="btn btn-primary" type="submit" name="submitformcontact">Submit</button>
                     </div>
                  </div>
               </form>
            </div>
         </div>
      </div>
   </div>
</div>

<!-- Download Script -->

<script>
   function downloadPDF() {
      // Create an anchor element
      const link = document.createElement('a');
      link.href = 'pdf/westerninfra-e-brochure.pdf'; // Path to your PDF
      link.download = 'westerninfra-e-brochure.pdf'; // Filename for download
      link.click(); // Trigger download
   }
</script>

<!--  -->



<!--Scroll to top-->
<a href="https://wa.me/9324683484" target="_blank" id="quoteBtn" class="floating-button">
   <i class="fa fa-whatsapp fa-2x"></i>
</a>
<script>
   document.getElementById('quoteBtn').addEventListener('click', function(e) {
      window.open(this.href, '_blank');
   });
</script>
<script src="js/jquery.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.fancybox.js"></script>
<script src="js/owl.js"></script>
<script src="js/wow.js"></script>
<script src="js/appear.js"></script>
<script src="js/mixitup.js"></script>
<script src="js/script.js"></script>
<!-- Color Setting -->
<script src="js/color-settings.js"></script>
<!-- Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
   integrity="sha384-kQtW33rZJAHjgefv2yWtxI/3lvLF3L4snJzS5NEEIr5CRfwTZ7GxWXOXm9O7KJ0d" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<!-- Bootstrap 3.3.7 JavaScript -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>

<!-- Google reCAPTCHA -->
<script src="https://www.google.com/recaptcha/api.js" async defer></script>
</body>

</html>
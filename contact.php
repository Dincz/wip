<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-E56XGST1LX"></script>
<script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
        dataLayer.push(arguments);
    }
    gtag('js', new Date());

    gtag('config', 'G-E56XGST1LX');
</script>
<style>
    .map-column {
        height: 500px;
        width: 100%;
        object-fit: cover;
    }
    /* .contact-form {
        border: 2px solid #3498db;
    } */
    
</style>

<?php include 'header.php'; ?>

<!--End Main Header -->

<!--Page Title-->
<section class="page-title" style="background-image:url(images/background/10.jpg);">
    <div class="auto-container">
        <div class="inner-container clearfix">
            <div class="title-box">
                <h1>CONTACT US</h1>
                <span class="title">The Interior speak for themselves</span>
            </div>
            <!--<ul class="bread-crumb clearfix">
                    <li><a href="index.php">Home</a></li>
                    <li>Contact Us</li>
                </ul> -->
        </div>
    </div>
</section>
<!--End Page Title-->

<!-- Contact Page Section -->
<section class="contact-page-section">
    <div class="auto-container">
        <div class="row">
            <!-- Form Column -->
            <div class="form-column col-lg-7 col-md-12 col-sm-12">
                <div class="inner-column">
                    <div class="sec-title">
                        <span class="float-text">Enquiry</span>
                        <h2>Contact Us</h2>
                    </div>

                   

                    <div class="contact-form">
                        <form action="successformcontact.php" method="post">
                            <div class="row">
                                <div class="form-group col-lg-12 col-md-12 col-sm-12">
                                    <input type="text" name="first_name" placeholder="Name" required>
                                </div>

                                <div class="form-group col-lg-12 col-md-12 col-sm-12">
                                    <input type="email" name="email" placeholder="Email" required>
                                </div>

                                <div class="form-group col-lg-12 col-md-12 col-sm-12">
                                    <input type="text" name="last_name" placeholder="Phone" required maxlength="10">
                                </div>

                                <!-- Added message textarea -->
                                <div class="form-group col-lg-12 col-md-12 col-sm-12">
                                    <textarea name="message" placeholder="Your Message" required></textarea>
                                </div>

                                <div class="g-recaptcha" data-sitekey="6LeOZ6waAAAAANgmnM0nrtWti9KlsKdxE5U-qFtm"
                                    style="transform:scale(0.7);transform-origin:0;-webkit-transform:scale(0.7); transform:scale(0.7);-webkit-transform-origin:0 0;transform-origin:0 0;">
                                </div>

                                <div class="form-group col-lg-12 col-md-12 col-sm-12">
                                    <button class="theme-btn btn-style-three" type="submit"
                                        name="submitformcontact">Submit</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <div class="map-column col-lg-5 col-md-12 my-5">
                <div class="inner-column">
                    <div class="map-outer">
                        <!--<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3769.8387798706294!2d73.02362301437736!3d19.114727355722454!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7c1263f5ec863%3A0x76e2879015e1ed50!2sWestern%20Infrabuild%20Products%20LLP!5e0!3m2!1sen!2sin!4v1618578637740!5m2!1sen!2sin" width="100%" height="auto" style="border:0;" allowfullscreen="" loading="lazy"></iframe>-->
                        <!-- <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d942.4907539850016!2d72.88124727331109!3d19.109278346819274!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7c96323c97a09%3A0x4336f8e3bda00132!2sJai%20Antariksha%20commercial%20building!5e0!3m2!1sen!2sin!4v1646651564462!5m2!1sen!2sin" width="100%" height="auto" style="border:0;" allowfullscreen="" loading="lazy"></iframe> -->
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3769.838895563887!2d73.02323677505294!3d19.1147222820979!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7c1263f5ec863%3A0x76e2879015e1ed50!2sWestern%20Infrabuild%20Products%20LLP!5e0!3m2!1sen!2sin!4v1732697590349!5m2!1sen!2sin"
                            width="500" height="300" style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--End Contact Page Section -->


<?php include 'page-footer.php'; ?>
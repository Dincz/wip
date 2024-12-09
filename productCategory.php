<?php include 'header.php'; ?>


<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="//cdn.materialdesignicons.com/2.1.99/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.2.0/css/swiper.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.2.5/jquery.fancybox.min.css" />
    <link rel="stylesheet" href="css\productCategory.css">


</head>


<?php
$Products = [
    // ['title' => 'Western Steel [GI]', 'image' => "images/products/ceilingsection-gi/cielingsection.jpg", 'link' => 'products-western-steel.php'],
    // ['title' => 'Western Galvalume', 'image' => "images/products/Untitled design (3).png", 'link' => 'products-western-galvalume.php'],
    // ['title' => 'Western Frame [GI]', 'image' => "images/products/intermediatechannel-wf/_T6A0290.jpg", 'link' => 'products-western-frame.php'],
    // ['title' => 'Accessories', 'image' => "images/products/sofitcleat/T6A036901.jpg", 'link' => 'products-accessories.php'],
    
    ['title' => 'False Ceiling System', 'image' => "images/products/westerngypsumboard.png", 'link' => 'falseceiling.php'],
    ['title' => 'Dry Wall System', 'image' => "images/products/westerngypsumboard.png", 'link' => 'dryWall.php'],
    ['title' => 'Gypsum Board', 'image' => "images/products/Background-images-banner.jpg-06.jpg", 'link' => 'gymsum-board.php'],
    ['title' => 'Gypsum Plaster', 'image' => "images/products/Background-images-banner.jpg-05.jpg", 'link' => 'products-gypsum-plaster.php'],
    ['title' => 'Smart Wall Putty', 'image' => "images/products/wcsmartwallputty/putti bag.jpg", 'link' => 'products-smart-wall-putty.php'],
    ['title' => 'Classic Bond', 'image' => "images/products/Background-images-banner.jpg-V04 (1).jpg", 'link' => 'products-bond-it.php'],
    ['title' => 'Access Panels', 'image' => "images/products/Background-images-banner.jpg-V02.jpg", 'link' => 'acessplane.php'],
    ['title' => 'T-Grid', 'image' => "images/products/Background-images-banner.jpg-V04 (1).jpg", 'link' => 'tgrid.php'],
    
];
?>


<!-- style for product range -->
<!-- Banner Section -->
<!-- <section class="banner-section-fo pt-0 mt-0">
    <div class="banner-carousel-three owl-carousel owl-theme">
        <div class="slide-item" style="background-image: url(images/banner/product-page-banner.jpg)">
            <div class="auto-container">
                <div class="content-box">
                    <div class="text" style="visibility:hidden;">Excellence is our custom; quality is our work.</div>
                </div>
            </div>
        </div>

    </div>
</section> -->
<!-- STyle for why western on hover -->
 <style>
    .process-block .inner-box {
    position: relative;
    transition: all 0.3s ease;
}

.process-block .inner-box:hover {
    background-color: #f7f7f7;
    box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
    transform: translateY(-10px); /* Lift the block slightly */
}

.process-block .inner-box:hover .text {
    color: #007bff; /* Bootstrap primary blue */
    transition: color 0.3s ease;
}

.process-block .inner-box:hover .count {
    color: black; /* Slightly darker blue for contrast */
    transition: color 0.3s ease;
}
 </style>
<!-- Style ends -->
<section class="banner-section-fo pt-0 mt-0">
        <div class="slide-item">
           <img src="images/banner/product-page-banner.jpg" class="img-fluid"  alt="banner">
        </div>

</section>


<!-- About us section -->
<div class="container-fluid">
    <section class="about-us-section py-2">
        <div class="container">
            <div class="row ">
                <div class="col-md-12">
                    <div class="about-us-content">
                        <h2 class="about-us-title">About Western Infrabuild Products LLP</h2>
                        <p class="about-us-description">
                            Western Infrabuild Products LLP was incepted under the inspiring leadership of Mr. Ashfaque
                            Z Khan with the vision of revolutionizing interior industry by providing high quality but
                            cost-effective products. True to its vision, Western Infrabuild Products LLP has achieved
                            many milestones in the interior designing industry by constantly and actively innovating its
                            offerings to fulfill customer needs.
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
<!-- pc range -->
<!-- <div class="container">
    <h2 class="text-center">Our Product Range</h2>
    <div class="row ">
        <div class="col-md-6">
            <div class="product-card card">
                <div class="card-image"
                    style="background-image: url('images/productbanner/new/falseceilingthumb.jpg');">
                    <div class="card-overlay">
                        <div class="card-text">
                            <h3>False Ceiling systems</h3>
                        </div>
                    </div>
                </div>
                <div class="card-body text-center">
                    <button class="btn see-more-btn">See More</button>
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <div class="product-card card">
                <div class="card-image"
                    style="background-image: url('images/productbanner/new/drywallpartitions.jpg');">
                    <div class="card-overlay">
                        <div class="card-text">
                            <h3>Drywall Partition systems</h3>
                        </div>
                    </div>
                </div>
                <div class="card-body text-center">
                    <button class="btn see-more-btn">See More</button>
                </div>
            </div>
        </div>
    </div>
</div> -->

<!-- pc range end -->
<!-- Product Section -->
<div class="container py-5">
    <h1 class="text-center text-uppercase fw-bold pb-5" >
        <span>Our Product Range</span>
    </h1>
    <!-- <h2 class="fw-bold text-center subTitle">False Ceiling Systems</h2> -->
    <div class="row align-items-center justify-content-center pb-5">
        <?php foreach ($Products as $product): ?>
            <div class="col-sm-6 col-md-4">
                <div class="thumbnail position-relative">
                    <div class="imgoverlay"></div>
                    <img src="<?= $product['image'] ?>" alt="<?= $product['title'] ?>" class="img-responsive ">
                    <div class="caption text-left position-absolute" style="top:60%">
                        <h4 class="m-0 product-title"><?= $product['title'] ?></h4>
                        <p>
                            <a href="<?= $product['link'] ?>" class="m-0 btn btn-primary rounded-0 text-left " role="button">Know More <i class="px-1 fa fa-chevron-right" aria-hidden="true"></i>
                            </a>
                        </p>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
    <!-- <h1 class="fw-bold text-center subTitle">Drywall Partition Systems</h1> -->
    <!-- <div class="row align-items-center justify-content-center">
        <?php foreach ($drywallroducts as $product): ?>
            <div class="col-sm-6 col-md-4">
                <div class="thumbnail position-relative">
                    <div class="imgoverlay"></div>
                    <img src="<?= $product['image'] ?>" alt="<?= $product['title'] ?>" class="img-responsive ">
                    <div class=" caption text-left position-absolute" style="top:60%">
                        <h4 class="m-0 product-title" style="color:white"><?= $product['title'] ?></h4>
                        <p>
                            <a href="<?= $product['link'] ?>" class="m-0 btn btn-primary rounded-0 text-left " role="button">Know More <i class="px-1 fa fa-chevron-right" aria-hidden="true"></i>
                            </a>
                        </p>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div> -->
</div>
<!-- WHy -->
<section class="process-section" style="background-image: url(images/background/quality.jpg); margin-bottom: 20px">
    <div class="auto-container">
        <div class="sec-title light">
            <span class="float-text">WESTERN</span>
            <h2>WHY WESTERN ?</h2>
        </div>
        <div class="row">
            <!-- Process Block -->
            <div class="process-block col-lg-4 col-md-6 col-sm-12">
                <div class="inner-box">
                    <span class="count">01</span>
                    <div class="text">Only Indian Firm having fire rated drywall systems, fire test certificate issued
                        by CBRI (Govt of India).</div>
                </div>
            </div>
            <!-- Process Block -->
            <div class="process-block col-lg-4 col-md-6 col-sm-12">
                <div class="inner-box">
                    <span class="count">02</span>
                    <div class="text">Vast and in-depth experience in Commercial, Residential, Government, Retail,
                        Industrial, Hospitality, Health care and other projects.</div>
                </div>
            </div>
            <!-- Process Block -->
            <div class="process-block col-lg-4 col-md-6 col-sm-12">
                <div class="inner-box">
                    <span class="count">03</span>
                    <div class="text">A legacy of prompt service from manufacturing to supplying material on time with
                        impeccable accuracy and quality.</div>
                </div>
            </div>
            <!-- Process Block -->
            <div class="process-block col-lg-4 col-md-6 col-sm-12">
                <div class="inner-box">
                    <span class="count">04</span>
                    <div class="text">In house material testing lab facility.</div>
                </div>
            </div>
            <!-- Process Block -->
            <div class="process-block col-lg-4 col-md-6 col-sm-12">
                <div class="inner-box">
                    <span class="count">05</span>
                    <div class="text">State of Art machineries and factory setup.</div>
                </div>
            </div>
            <!-- Process Block -->
            <div class="process-block col-lg-4 col-md-6 col-sm-12">
                <div class="inner-box">
                    <span class="count">06</span>
                    <div class="text">Maintaining high standard and quality in all products.</div>
                </div>
            </div>
            <!-- Process Block -->
            <div class="process-block col-lg-4 col-md-6 col-sm-12">
                <div class="inner-box">
                    <span class="count">07</span>
                    <div class="text">In house team for system designs and profile customization as per the project and
                        client requirements.</div>
                </div>
            </div>
            <!-- Process Block -->
            <div class="process-block col-lg-4 col-md-6 col-sm-12">
                <div class="inner-box">
                    <span class="count">08</span>
                    <div class="text">An ISO 9001:2015 certified company.</div>
                </div>
            </div>
            <!-- Process Block -->
            <div class="process-block col-lg-4 col-md-6 col-sm-12">
                <div class="inner-box">
                    <span class="count">09</span>
                    <div class="text">PAN India presence.</div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- WHy end -->
<!-- some of our clients -->
<section class="clients-section">
    <div class="inner-container">
        <h2 style="color: black;text-align: center;">Some of our Esteemed Clients</h2>
        <br>
        <div class="sponsors-outer">
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

<!-- end clients -->

<!-- Pan India Section -->
<section class="section">
    <div class="auto-container ">
        <div class="row no-gutters">
            <!-- Image Column -->
            <div class="image-column col-lg-12 col-md-12 col-sm-12">
                <div class="inner-column">
                    <img src="images/resource/Pan-India.jpg">
                </div>
            </div>
        </div>
    </div>
</section>
<!--End Pan India  Section -->

<!-- Youtube section -->


<body translate="no">
    <div class="title">
        <h2 style="color: black;text-align: center;">YouTube Gallery</h2>
    </div>
    <!--Carousel Gallery-->
    <div class="carousel-gallery1" style="margin-bottom: 133px;">
        <div class="swiper-container">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <a href="https://www.youtube.com/watch?v=dQw4w9WgXcQ" target="_blank">
                        <div class="image" style="background-image: url(images/officegallery/1.jpg)">
                            <div class="overlay">
                                <em class="mdi mdi-youtube"></em>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="swiper-slide">
                    <a href="https://www.youtube.com/watch?v=6n3pIiWqaCE" target="_blank">
                        <div class="image" style="background-image: url(images/officegallery/2.jpg)">
                            <div class="overlay">
                                <em class="mdi mdi-youtube"></em>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="swiper-slide">
                    <a href="https://www.youtube.com/watch?v=aqz-KE-bpKQ" target="_blank">
                        <div class="image" style="background-image: url(images/officegallery/3.jpg)">
                            <div class="overlay">
                                <em class="mdi mdi-youtube"></em>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="swiper-slide">
                    <a href="https://www.youtube.com/watch?v=Ra-Om7UMdJM" target="_blank">
                        <div class="image" style="background-image: url(images/officegallery/4.jpg)">
                            <div class="overlay">
                                <em class="mdi mdi-youtube"></em>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="swiper-slide">
                    <a href="https://www.youtube.com/watch?v=QH2-TGUlwu4" target="_blank">
                        <div class="image" style="background-image: url(images/officegallery/5.jpg)">
                            <div class="overlay">
                                <em class="mdi mdi-youtube"></em>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="swiper-slide">
                    <a href="https://www.youtube.com/watch?v=MmITmSzk6mI" target="_blank">
                        <div class="image" style="background-image: url(images/officegallery/6.jpg)">
                            <div class="overlay">
                                <em class="mdi mdi-youtube"></em>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="swiper-pagination"></div>
        </div>
    </div>
    <!--#Carousel Gallery-->


    <script>
        window.console = window.console || function(t) {};
    </script>
    <script>
        if (document.location.search.match(/type=embed/gi)) {
            window.parent.postMessage("resize", "*");
        }
    </script>


    <script
        src="https://cpwebassets.codepen.io/assets/common/stopExecutionOnTimeout-157cd5b220a5c80d4ff8e0e70ac069bffd87a61252088146915e8726e5d9f147.js"></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.2.0/js/swiper.min.js'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.2.5/jquery.fancybox.min.js'></script>
    <script id="rendered-js">
        $(function() {

            var swiper = new Swiper('.carousel-gallery1 .swiper-container', {
                effect: 'slide',
                speed: 900,
                slidesPerView: 3,
                spaceBetween: 20,
                simulateTouch: true,
                autoplay: {
                    delay: 5000,
                    stopOnLastSlide: false,
                    disableOnInteraction: false
                },

                pagination: {
                    el: '.carousel-gallery1 .swiper-pagination',
                    clickable: true
                },

                breakpoints: {
                    // when window width is <= 320px
                    320: {
                        slidesPerView: 1,
                        spaceBetween: 3
                    },

                    // when window width is <= 480px
                    425: {
                        slidesPerView: 1,
                        spaceBetween: 10
                    },

                    // when window width is <= 640px
                    768: {
                        slidesPerView: 3,
                        spaceBetween: 20
                    }
                }
            });
        });
        //# sourceURL=pen.js
    </script>
    <script
        src="https://cpwebassets.codepen.io/assets/editor/iframe/iframeRefreshCSS-e03f509ba0a671350b4b363ff105b2eb009850f34a2b4deaadaa63ed5d970b37.js">
    </script>

    <!--Just s[pacing ] -->
    <div class="container mb-150">
        <p style="visibility: hidden;">SOMETIHGN</p>
    </div>
    <!-- Youtube section ends -->
    <?php include 'page-footer.php'; ?>

  
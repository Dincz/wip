<?php include 'header.php'; ?>
<?php

$Products = [
    [
        'title' => 'Western Steel [GI]',
        'image' => "images/products/ceilingsection-gi/cielingsection.jpg",
        'link' => 'products-western-steel.php',
        'Advantages' => 'Increased load carrying capacity of as high
            Improved screw retention
            The unique knurling design improves sound insulation
            Faster, safer and easier to install
            Improved productivity and quality
            No screw stripping or screw riding',
    ],

    [
        'title' => 'Western Galvalume',
        'image' => "images/products/Untitled design (3).png",
        'link' => 'products-western-galvalume.php',
        'Advantages' => 'Increased load carrying capacity higher than Knurled Sections
            Doubled Surface Thickness
            Increased Surface Area
            All components in GL Framing System are with Al-Zn-Si coating of
            150 gsm which provides superior corrosion resistance
            ( upto 5 times than Zn 120 gsm)',
    ],

    [
        'title' => 'Western Frame [GI]',
        'image' => "images/products/intermediatechannel-wf/_T6A0290.jpg",
        'link' => 'products-western-frame.php',
        'Advantages' => 'Cross wave design
            Greater thickness to strength ratio
            Higher tensile and bend strength
            Higher BMT to load bearing ratio
            Greater screw retention
            Enabling low cost light weight
            Sturdy frame work',
    ],

    [
        'title' => 'Western Threaded Rod System',
        'image' => "images/products/intermediatechannel-wf/_T6A0290.jpg",
        'link' => 'products-western-frame.php',
        'Features' => 'To provide suspensions from the structural soffit.
            Cutomization : Available in any length and thickness from 0.55 to 1 mm
            Dimensions(mm) : 6X2000
            Coating/GSM : ZN120
            Yield Strength : 240 MPA',
        'knowMoreLink' => 'products-threaded-rod.php',
    ],

    [
        'title' => 'Accessories',
        'image' => "images/products/sofitcleat/T6A036901.jpg",
        'link' => 'products-accessories.php',
        'Advantages' => 'Wide range of accessories for seamless false ceiling installation.
        High-quality W clip, Z cleat, Soft cleat, Connecting clip, Edge bead, and more.
        Designed for precision and reliability to ensure durability.
        Provides sturdy support and easy maintenance for false ceilings.
        Enhances the aesthetic appeal with a polished finish.
        Perfect for both residential and commercial spaces.',
        'knowMoreLink' => 'products-accessories.php',
    ],
];
?>

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="//cdn.materialdesignicons.com/2.1.99/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.2.0/css/swiper.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.2.5/jquery.fancybox.min.css" />
    <link rel="stylesheet" href="css\productCategory.css">


</head>
<style>
    .nav-tabs .nav-item.show .nav-link,
    .nav-tabs .nav-link.active {
        background-color: transparent !important;
        border: 1px solid black !important;
        border-radius: 5px;
        color: black !important;
        box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;
    }

    .nav-tabs .nav-link {
        background-color: blue !important;
        color: white !important;
        border-radius: 5px;
    }

    /* <!-- STyle for why western on hover --> */
    .process-block .inner-box {
        position: relative;
        transition: all 0.3s ease;
    }

    .process-block .inner-box:hover {
        background-color: #f7f7f7;
        box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        transform: translateY(-10px);
        /* Lift the block slightly */
    }

    .process-block .inner-box:hover .text {
        color: #007bff;
        /* Bootstrap primary blue */
        transition: color 0.3s ease;
    }

    .process-block .inner-box:hover .count {
        color: black;
        /* Slightly darker blue for contrast */
        transition: color 0.3s ease;
    }
</style>

<div>
    <section class="py-5">
        <div class="">
            <div class="item p-0">
                <img src="images/banner/Western-Ceiling-V-4.jpg" alt="err" class="w-100 h-100">
                <!-- <div class="auto-container">
                    <div class="content-box">
                        <div class="text" style="visibility:hidden;">Excellence is our custom; quality is our work.</div>
                    </div>
                </div> -->
            </div>
        </div>
        <div class="overviewSection my-5 text-center">
            <h1 class="fw-bold">Overview</h1>
            <div class="w-100 w-md-75 mx-auto"><strong>Western Infrabuild </strong> offers high-quality false ceiling systems designed to enhance both the aesthetics and functionality of interior spaces. These systems, also known as suspended or drop ceilings, are installed beneath the main ceiling to create a sleek, modern look while concealing wiring, ducts, and other structural elements. They provide additional benefits such as soundproofing, making them ideal for offices, schools, and commercial spaces.</div>
        </div>
        <div>
            <!-- <h3 class="fw-bold text-center">FALSE CEILING SYSTEMS</h3> -->
            <!-- Start Tabs Navigation -->
            <ul class="nav nav-tabs  d-flex justify-content-around my-5 border-0" id="productTabs" role="tablist">
                <?php foreach ($Products as $index => $product): ?>
                    <li class="nav-item" role="presentation">
                        <a class="nav-link <?= $index === 0 ? 'active ' : '' ?>" id="tab-<?= $index ?>" data-bs-toggle="tab" href="#product-<?= $index ?>" role="tab" aria-controls="product-<?= $index ?>" aria-selected="<?= $index === 0 ? 'true' : 'false' ?>">
                            <?= $product['title'] ?>
                        </a>
                    </li>
                <?php endforeach; ?>
            </ul>

            <!-- Start Tabs Content -->
            <div class="tab-content" id="productTabsContent bg-danger">
                <?php foreach ($Products as $index => $product): ?>
                    <div class="tab-pane <?= $index === 0 ? 'show active' : '' ?>" id="product-<?= $index ?>" role="tabpanel" aria-labelledby="tab-<?= $index ?>">
                        <div class="row ">
                            <div class="col-md-6">
                                <!-- Product Image -->
                                <img src="<?= $product['image'] ?>" alt="<?= $product['title'] ?>" class="img-fluid">
                            </div>
                            <div class="col-md-6">
                                <!-- Product Short and Long Descriptions -->
                                <h3 class="fw-bold"><?= $product['title'] ?></h3>
                                <!-- <p><strong>Advantages:</strong></p> -->
                                <ul style="list-style-type:disc; padding-left: 20px;">
                                    <?php if (isset($product['Advantages'])): ?>
                                        <p><strong>Advantages:</strong></p>
                                        <ul style="list-style-type: disc; padding-left: 20px;">
                                            <?php
                                            // Split the advantages string by lines and display each as a list item
                                            $advantages = explode("\n", $product['Advantages']);
                                            foreach ($advantages as $advantage) {
                                                echo "<li style='list-style-type: disc;'>" . trim($advantage) . "</li>";
                                            }
                                            ?>
                                        </ul>
                                    <?php endif; ?>

                                    <?php if (isset($product['Features'])): ?>
                                        <p><strong>Features:</strong></p>
                                        <ul style="list-style-type: disc; padding-left: 20px;">
                                            <?php
                                            // Split the features string by lines and display each as a list item
                                            $features = explode("\n", $product['Features']);
                                            foreach ($features as $feature) {
                                                echo "<li style='list-style-type: disc;'>" . trim($feature) . "</li>";
                                            }
                                            ?>
                                        </ul>
                                    <?php endif; ?>
                                </ul>
                                <div class="d-flex gap-2">
                                    <p><a href="3" class="btn btn-primary rounded-0">Enquire Now <i class="px-1 fa fa-chevron-right" aria-hidden="true"></i></a></p>
                                    <?php if (!empty($product['knowMoreLink'])): ?>
                                        <p><a href="<?= $product['knowMoreLink'] ?>" class="btn btn-primary rounded-0 mx-4">Know More <i class="px-1 fa fa-chevron-right" aria-hidden="true"></i></a></p>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>
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
</div>

<?php include 'page-footer.php'; ?>

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

<!-- Include Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
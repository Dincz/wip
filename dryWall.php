<?php include 'header.php'; ?>
<?php

$Products = [
    [
        'title' => 'Floor and Ceiling Section',
        'image' => "images/products/floorceilingchannel-gi/floor&ceilingchannel.jpg",
        'Features' => 'YS-240 MPa, Finish-Galvanised (Zn 120 gsm)',
        'link' => 'products-floor-ceiling-section.php',
        'Advantages' => 'Designed for securing wall studs at floor and ceiling junctions. Fixed to the floor and ceiling to accommodate Western Steel Studs. Available in multiple dimensions for different installation requirements.',
        'Dimensions' => [
            '50X32X32X0.55X3660' => '50mm x 32mm x 32mm x 0.55mm x 3660mm',
            '66X32X32X0.55X3660' => '66mm x 32mm x 32mm x 0.55mm x 3660mm',
            '72X32X32X0.55X3660' => '72mm x 32mm x 32mm x 0.55mm x 3660mm',
            '78X32X32X0.55X3660' => '78mm x 32mm x 32mm x 0.55mm x 3660mm',
            '94X32X32X0.55X3660' => '94mm x 32mm x 32mm x 0.55mm x 3660mm',
            '102X32X32X0.55X3660' => '102mm x 32mm x 32mm x 0.55mm x 3660mm',
            '127X32X32X0.55X3660' => '127mm x 32mm x 32mm x 0.55mm x 3660mm',
            '152X32X32X0.55X3660' => '152mm x 32mm x 32mm x 0.55mm x 3660mm',
        ],
    ],

    [
        'title' => 'C Stud',
        'image' => "images/products/c-stud-gi/cstud.jpg",
        'Features' => 'YS-240 MPa, Finish-Galvanised (Zn 120 gsm)',
        'link' => 'products-c-stud.php',
        'Advantages' => 'Used as the vertical support in wall framing. Available in multiple sizes for flexibility in various constructions.',
        'Dimensions' => [
            '48X34X36X0.55X3660' => '48mm x 34mm x 36mm x 0.55mm x 3660mm',
            '64X34X36X0.55X3660' => '64mm x 34mm x 36mm x 0.55mm x 3660mm',
            '70X34X36X0.55X3660' => '70mm x 34mm x 36mm x 0.55mm x 3660mm',
            '76X34X36X0.55X3660' => '76mm x 34mm x 36mm x 0.55mm x 3660mm',
            '92X34X36X0.55X3660' => '92mm x 34mm x 36mm x 0.55mm x 3660mm',
            '100X34X36X0.55X3660' => '100mm x 34mm x 36mm x 0.55mm x 3660mm',
            '125X34X36X0.55X3660' => '125mm x 34mm x 36mm x 0.55mm x 3660mm',
            '150X34X36X0.55X3660' => '150mm x 34mm x 36mm x 0.55mm x 3660mm',
        ],
    ],

    [
        'title' => 'Noggin Channel',
        'image' => "images/products/noggingchannel-gi/noggingchannel.jpg",
        'link' => 'products-noggin-channel.php',
        'Advantages' => 'Designed for horizontal support between C-studs, helping with electrical switch fitting, fire-rated partitions, and preventing the spread of fires.',
        'Dimensions' => [
            '48X40X0.55X492/695' => '48mm x 40mm x 0.55mm x 492mm/695mm',
            '64X40X0.55X492/695' => '64mm x 40mm x 0.55mm x 492mm/695mm',
            '70X40X0.55X492/695' => '70mm x 40mm x 0.55mm x 492mm/695mm',
            '92X40X0.55X492/695' => '92mm x 40mm x 0.55mm x 492mm/695mm',
            '100X40X0.55X492/695' => '100mm x 40mm x 0.55mm x 492mm/695mm',
            '125X40X0.55X492/695' => '125mm x 40mm x 0.55mm x 492mm/695mm',
            '150X40X0.55X492/695' => '150mm x 40mm x 0.55mm x 492mm/695mm',
        ],
    ],

    [
        'title' => 'DHT',
        'image' => "images/products/dht/dht.jpg",
        'Features' => 'YS-240 MPa, Finish-Galvanised (Zn 120 gsm)',
        'link' => 'products-dht.php',
        'Advantages' => 'Designed for securing wall studs and ceiling junctions. Fixed to the ceiling to accommodate Western Steel Studs.',
        'Dimensions' => [
            '50X50X50X0.70X3660' => '50mm x 50mm x 50mm x 0.70mm x 3660mm',
            '66X50X50X0.70X3660' => '66mm x 50mm x 50mm x 0.70mm x 3660mm',
            '72X50X50X0.70X3660' => '72mm x 50mm x 50mm x 0.70mm x 3660mm',
            '94X50X50X0.70X3660' => '94mm x 50mm x 50mm x 0.70mm x 3660mm',
            '102X50X50X0.70X3660' => '102mm x 50mm x 50mm x 0.70mm x 3660mm',
            '127X50X50X0.70X3660' => '127mm x 50mm x 50mm x 0.70mm x 3660mm',
            '152X50X50X0.70X3660' => '152mm x 50mm x 50mm x 0.70mm x 3660mm',
        ],
    ],

    [
        'title' => 'Fixing Channel',
        'image' => "images/products/fixingchannel/fixing-channel.jpg",
        'Features' => 'YS-240 MPa, Finish-Galvanised (Zn 120 gsm)',
        'link' => 'products-fixing-channel.php',
        'Advantages' => 'Designed for cross bracing for twin frames and fixing of heavy-weight fittings.',
        'Dimensions' => [
            '99X10X10X0.90X3660' => '99mm x 10mm x 10mm x 0.90mm x 3660mm',
        ],
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
        background-color: black !important;
        color: white !important;
        border-radius: 5px;
    }
</style>

<div>
    <section class="banner-section-four pb-5">
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
            <div class="w-75 mx-auto">Western Infrabuild's <strong>Drywall partition systems</strong>offer a versatile and efficient solution for creating functional spaces in residential, commercial, and industrial settings. Designed for quick and hassle-free installation, these systems provide superior performance in terms of durability, sound insulation, and fire resistance.</div>
        </div>
        <div>
            <!-- <h3 class="fw-bold text-center">FALSE CEILING SYSTEMS</h3> -->
            <!-- Start Tabs Navigation -->
            <ul class="nav nav-tabs d-flex justify-content-around my-5 border-0" id="productTabs" role="tablist">
                <?php foreach ($Products as $index => $product): ?>
                    <li class="nav-item" role="presentation">
                        <a class="nav-link <?= $index === 0 ? 'active ' : '' ?>" id="tab-<?= $index ?>" data-bs-toggle="tab" href="#product-<?= $index ?>" role="tab" aria-controls="product-<?= $index ?>" aria-selected="<?= $index === 0 ? 'true' : 'false' ?>">
                            <?= $product['title'] ?>
                        </a>
                    </li>
                <?php endforeach; ?>
            </ul>

            <!-- Start Tabs Content -->
            <div class="tab-content" id="productTabsContent">
                <?php foreach ($Products as $index => $product): ?>
                    <div class="tab-pane <?= $index === 0 ? 'show active' : '' ?>" id="product-<?= $index ?>" role="tabpanel" aria-labelledby="tab-<?= $index ?>">
                        <div class="row">
                            <div class="col-md-6">
                                <!-- Product Image -->
                                <img src="<?= $product['image'] ?>" alt="<?= $product['title'] ?>" class="img-fluid">
                            </div>
                            <div class="col-md-6">
                                <!-- Product Descriptions -->
                                <h3 class="fw-bold"><?= $product['title'] ?>
                                    <?php if (isset($product['Features']) && !empty($product['Features'])): ?>
                                        {<span><?= $product['Features'] ?></span>}
                                    <?php endif; ?>
                                </h3>

                                <div>
                                    <?php if (isset($product['Advantages']) && !empty($product['Advantages'])): ?>
                                        <p><strong>Advantages:</strong></p>
                                        <ul style="list-style-type:disc; padding-left: 20px;">
                                            <?php
                                            $advantages = explode("\n", $product['Advantages']);
                                            foreach ($advantages as $advantage) {
                                                echo "<li  style='list-style-type:disc'>" . trim($advantage) . "</li>";
                                            }
                                            ?>
                                        </ul>
                                    <?php endif; ?>

                                    <?php if (isset($product['Features']) && !empty($product['Features'])): ?>
                                        <p><strong>Features:</strong></p>
                                        <ul style="list-style-type:disc; padding-left: 20px;">
                                            <?php
                                            $features = explode("\n", $product['Features']);
                                            foreach ($features as $feature) {
                                                echo "<li style='list-style-type:disc'>" . trim($feature) . "</li>";
                                            }
                                            ?>
                                        </ul>
                                    <?php endif; ?>

                                    <?php if (isset($product['Dimensions']) && !empty($product['Dimensions'])): ?>
                                        <p><strong>Dimensions:</strong></p>
                                        <ul style="list-style-type:disc; padding-left: 20px;">
                                            <?php
                                            foreach ($product['Dimensions'] as $key => $dimension) {
                                                echo "<li style='list-style-type:disc'>" . $dimension . "</li>";
                                            }
                                            ?>
                                        </ul>
                                    <?php endif; ?>
                                </div>

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
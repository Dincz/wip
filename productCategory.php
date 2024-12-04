<?php include 'header.php'; ?>

<?php
$cellingProducts = [

    ['title' => 'Gypsum Plaster', 'image' => "images/fav-icons/Background-images-banner.jpg-v01.jpg", 'link' => 'products-gypsum-plaster.php'],
    ['title' => 'Smart Wall Putty', 'image' => "images/products/wcsmartwallputty/putti bag.jpg", 'link' => 'products-smart-wall-putty.php'],
    ['title' => 'Classic Bond', 'image' => "images/products/westernclassicbond/Classic-bond-Small.jpg", 'link' => 'products-bond-it.php'],
    ['title' => 'Western Gypsum Board', 'image' => "images/products/westerngypsumboard.png", 'link' => 'gymsum-board.php'],
    ['title' => 'Access Panels', 'image' => "images/products/Westernacesspanel.png", 'link' => 'acessplane.php'],
];
$drywallroducts = [

    ['title' => 'Western Steel [GI]', 'image' => "images/products/ceilingsection-gi/cielingsection.jpg", 'link' => 'products-western-steel.php'],
    ['title' => 'Western Galvalume', 'image' => "images/products/Untitled design (3).png", 'link' => 'products-western-galvalume.php'],
    ['title' => 'Western Frame [GI]', 'image' => "images/products/intermediatechannel-wf/_T6A0290.jpg", 'link' => 'products-western-frame.php'],
    ['title' => 'Accessories', 'image' => "images/products/sofitcleat/T6A036901.jpg", 'link' => 'products-accessories.php'],
    ['title' => 'T-Grid', 'image' => "images/products/Untitled design (2).png", 'link' => 'tgrid.php'],
];
?>
<!-- ABout us style -->
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
        background-color: #456df1;
        color: #ffffff;
        padding: 20px;
        margin-bottom: 40px;
        border-radius: 8px;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
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
        font-size: 20px;
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
            padding: 15px;
            font-size: 24px;
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
</style>

<!-- Abourt us styles ends -->

<!-- style for product ranges -->
<style>
    .subTitle {
        font-weight: 800 !important;
    }

    .product-card {
        position: relative;
        overflow: hidden;
        margin-top: 20px;
        transition: all 0.3s ease;
    }

    .product-card .card-image {
        width: 100%;
        height: 270px;
        background-size: cover;
        background-position: center;
        transition: transform 0.3s ease;
    }

    .product-card:hover .card-image {
        transform: scale(1.1);
    }

    .product-card .card-overlay {
        position: absolute;
        bottom: 0;
        left: 0;
        right: 0;
        background: rgba(0, 0, 0, 0.7);
        overflow: hidden;
        width: 100%;
        height: 0;
        transition: 0.5s ease;
    }

    .product-card:hover .card-overlay {
        height: 100%;
    }

    .product-card .card-text {
        color: white;
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        text-align: center;
    }

    .product-card .see-more-btn {
        margin-top: 15px;
        background-color: #337ab7;
        color: white;
        border: none;
    }

    .product-card .see-more-btn:hover {
        background-color: #286090;
    }

    .img-responsive {
        min-height: 200px !important;
        width: auto !important;
    }

    .imgoverlay {
        position: absolute;
        height: 100%;
        width: 100%;
        top: 0;
        background-color: black;
        opacity: 0.2;
    }
</style>
<!-- style for product range -->
<!-- Banner Section -->
<section class="banner-section-four">
    <div class="banner-carousel-three owl-carousel owl-theme">
        <div class="slide-item" style="background-image: url(images/banner/product-page-banner.jpg)">
            <div class="auto-container">
                <div class="content-box">
                    <div class="text" style="visibility:hidden;">Excellence is our custom; quality is our work.</div>
                </div>
            </div>
        </div>

    </div>
</section>
<!-- About us section -->
<div class="container-fluid">
    <section class="about-us-section">
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
<div class="container">
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
</div>

<!-- pc range end -->
<!-- Product Section -->
<div class="container py-5">
    <h1 class="text-center text-uppercase fw-bold" style="letter-spacing: 5px; margin-bottom: 40px;">
        <span
            style="background: linear-gradient(to right, #ff7f50, #ff6347); -webkit-background-clip: text; color: transparent;">Our
            Product Range</span>
    </h1>
    <h2 class="fw-bold text-center subTitle">False Ceiling Systems</h2>
    <div class="row align-items-center justify-content-center pb-5">
        <?php foreach ($cellingProducts as $product): ?>
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
    <h1 class="fw-bold text-center subTitle">Drywall Partition System</h1>
    <div class="row align-items-center justify-content-center">
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
    </div>
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
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="//cdn.materialdesignicons.com/2.1.99/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.2.0/css/swiper.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.2.5/jquery.fancybox.min.css" />
    <style>
        /*Carousel Gallery*/
        .carousel-gallery1 {
            margin: 50px 0;
            padding: 0 90px;
        }

        .carousel-gallery1 .swiper-slide a {
            display: block;
            width: 100%;
            height: 390px;
            border-radius: 4px;
            overflow: hidden;
            position: relative;
        }

        .carousel-gallery1 .swiper-slide a:hover .image .overlay {
            opacity: 1;
        }

        .carousel-gallery1 .swiper-slide a .image {
            width: 100%;
            height: 100%;
            background-size: cover;
            background-position: center center;
            background-repeat: no-repeat;
        }

        .carousel-gallery1 .swiper-slide a .image .overlay {
            width: 100%;
            height: 100%;
            background-color: rgba(20, 20, 20, 0.8);
            text-align: center;
            opacity: 0;
            -webkit-transition: all .2s linear;
            -o-transition: all .2s linear;
            transition: all .2s linear;
        }

        .carousel-gallery1 .swiper-slide a .image .overlay em {
            color: #fff;
            font-size: 26px;
            position: relative;
            top: 50%;
            -webkit-transform: translateY(-50%);
            -ms-transform: translateY(-50%);
            -o-transform: translateY(-50%);
            transform: translateY(-50%);
            display: inline-block;
        }

        .carousel-gallery1 .swiper-pagination {
            position: relative;
            bottom: auto;
            text-align: center;
            margin-top: 25px;
        }

        .carousel-gallery1 .swiper-pagination .swiper-pagination-bullet {
            -webkit-transition: all .2s linear;
            -o-transition: all .2s linear;
            transition: all .2s linear;
        }

        .carousel-gallery1 .swiper-pagination .swiper-pagination-bullet:hover {
            opacity: .7;
        }

        .carousel-gallery1 .swiper-pagination .swiper-pagination-bullet.swiper-pagination-bullet-active {
            background-color: #17174f;
            transform: scale(1.1, 1.1);
        }

        /*# Carousel Gallery*/
        .plugins {
            text-align: center;
        }

        .plugins h3 {
            text-align: center;
            margin: 0;
            padding: 0;
            font-family: Arial;
            text-transform: uppercase;
            color: #111;
        }

        .plugins a {
            display: inline-block;
            font-family: Arial;
            color: #777;
            font-size: 14px;
            margin: 10px;
            transition: all .2s linear;
        }

        .plugins a:hover {
            color: #d63031;
        }

        /* Smartphones (portrait and landscape) ----------- */
        @media only screen and (min-device-width : 320px) and (max-device-width : 480px) {
            .carousel-gallery1 .swiper-slide a .image {
                width: 100%;
                height: 100%;
                background-size: cover;
                background-position: center center;
                background-repeat: no-repeat;
                height: 350px;
            }
        }
    </style>
    <script>
        window.console = window.console || function(t) {};
    </script>
    <script>
        if (document.location.search.match(/type=embed/gi)) {
            window.parent.postMessage("resize", "*");
        }
    </script>
</head>

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
        src="https://cpwebassets.codepen.io/assets/editor/iframe/iframeRefreshCSS-e03f509ba0a671350b4b363ff105b2eb009850f34a2b4deaadaa63ed5d970b37.js"></script>
</body>

</html>
<!--Just s[pacing ] -->
<div class="container mb-150">
    <p style="visibility: hidden;">SOMETIHGN</p>
</div>
<!-- Youtube section ends -->
<?php include 'page-footer.php'; ?>

<style>
    /* Custom styles */
    /* .page-title {
        padding: 80px 0;
        color: white;
        text-align: center;
    } */

    h1 span {
        display: inline-block;
    }

    .thumbnail {
        border: none;
        border-radius: 10px;
        overflow: hidden;
        transition: all 0.3s ease;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }

    .thumbnail img {
        transition: transform 0.3s ease;
    }

    .thumbnail:hover img {
        transform: scale(1.1);
    }

    .caption {
        padding: 15px;
    }

    .product-title {
        font-size: 18px;
        font-weight: bold;
        margin-bottom: 15px;
        transition: color 0.3s ease;
    }

    .thumbnail:hover .product-title {
        color: #ff6347;
    }

    .btn-primary {
        background-color: #007bff;
        border-color: #007bff;
        text-transform: uppercase;
        font-size: 14px;
        padding: 10px 20px;
        border-radius: 5px;
        transition: background-color 0.3s ease;
    }

    .btn-primary:hover {
        background-color: #0056b3;
    }
</style>
<?php include 'header.php'; ?>

<?php
// Sample product data (you can replace this with dynamic content from a database)
$products = [
    ['title' => 'Western Steel [GI]', 'image' => "images/products/ceilingsection-gi/cielingsection.jpg", 'link' => 'products-western-steel.php'],
    ['title' => 'Western Galvalume', 'image' => "images/products/Untitled design (3).png", 'link' => 'products-western-galvalume.php'],
    ['title' => 'Western Frame [GI]', 'image' => "images/products/intermediatechannel-wf/_T6A0290.jpg", 'link' => 'products-western-frame.php'],
    ['title' => 'Accessories', 'image' => "images/products/sofitcleat/T6A036901.jpg", 'link' => 'products-accessories.php'],
    ['title' => 'T-Grid', 'image' => "images/products/Untitled design (2).png", 'link' => 'tgrid.php'],
    ['title' => 'Gypsum Plaster', 'image' => "images/products/westernonecoat/western_bagsOneCoat3.jpg", 'link' => 'products-gypsum-plaster.php'],
    ['title' => 'Smart Wall Putty', 'image' => "images/products/wcsmartwallputty/putti bag.jpg", 'link' => 'products-smart-wall-putty.php'],
    ['title' => 'Classic Bond', 'image' => "images/products/westernclassicbond/Classic-bond-Small.jpg", 'link' => 'products-bond-it.php'],
    ['title' => 'Western Gypsum Board', 'image' => "images/products/westerngypsumboard.png", 'link' => 'gymsum-board.php'],
    ['title' => 'Access Panels', 'image' => "images/products/Westernacesspanel.png", 'link' => 'acessplane.php'],
];
?>

<!-- <section class="page-title" style="background-image:url(images/background/About-us-banner.jpg);">
    <div class="auto-container">
        <div class="inner-container clearfix">
            <div class="title-box">
                <h1>&nbsp;</h1>
            </div>
        </div>
    </div>
</section> -->

<style>
    /* Custom CSS for card hover effect */
    h1 {
        text-transform: uppercase;
        letter-spacing: 5px;
        color: #2c3e50; /* Dark gray */
        margin-bottom: 40px;
        transition: all 0.3s ease;
        background: linear-gradient(to right, #ff7f50, #ff6347); /* Gradient text */
        -webkit-background-clip: text;
        color: transparent; /* Make text gradient visible */
    }

    h1:hover::before {
        transform: scaleX(1);
        transform-origin: bottom left;
    }

    h1:hover {
        color: #ff6347; /* Change the text color on hover */
        letter-spacing: 8px; /* Increase letter spacing slightly on hover */
        transform: scale(1.05); /* Slight zoom effect */
    }

    h1 span {
        display: inline-block;
        animation: fadeIn 1.5s ease-out;
    }

    .card {
        position: relative;
        overflow: hidden;
        border-radius: 10px;
        transition: transform 0.3s ease, box-shadow 0.3s ease;
        display: flex;
        justify-content: center;
        align-items: center;
        margin-bottom: 50px;
    }

    .card img {
        width: 100%;
        height: auto;
        transition: transform 0.3s ease;
    }

    .card-body {
        display: flex;
        justify-content: center;
        align-items: center;
        position: relative;
        z-index: 1;
    }

    .kmoreBtn{
        padding: 1rem 2rem;
        position: absolute;
        bottom: 100%;
        width: 80%;
        text-align: center;
        opacity: 0; /* Hide content initially */
        transform: translateY(30px); /* Initially off-screen */
        transition: opacity 0.4s ease, transform 0.4s ease;
        z-index: 2;
        background-color: #007bff;
        border-radius: 5px;
        color: white;
        font-size: 1rem;
        text-transform: uppercase;
    }

    /* Hover effect on the card */
    .card:hover {
        transform: translateY(-10px);
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.3); /* Stronger shadow on hover */
    }

    /* Dark overlay on hover */
    .card::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background: rgba(0, 0, 0, 0.4);
        opacity: 0;
        transition: opacity 0.3s ease;
        z-index: 1;
    }

    .card:hover::before {
        opacity: 1;
    }

    /* Image transformation */
    .card:hover img {
        transform: scale(1.1); /* Zoom in effect */
    }

    /* Title and Button on Hover */
    .card:hover .kmoreBtn {
        opacity: 1; /* Make the content visible */
        transform: translateY(0); /* Slide content up */
    }

    /* Title Styles */
    .card-title {
        font-size: 1.5rem;
        font-weight: bold;
        color: black; /* White for better visibility */
        margin-bottom: 15px;
        transition: color 0.4s ease, text-shadow 0.4s ease;
    }

    .card:hover .card-title {
        color: #ffeb3b; /* Bright yellow for title on hover */
        text-shadow: 0px 4px 8px rgba(0, 0, 0, 0.8); /* Stronger text shadow for better visibility */
    }

    /* Button Styles */
    .btn {
        background-color: #007bff;
        border-color: #007bff;
        color: #fff;
        font-size: 1rem;
        padding: 10px 20px;
        border-radius: 5px;
        transition: background-color 0.3s ease, transform 0.3s ease, opacity 0.3s ease;
        opacity: 0;
        transform: translateY(20px); /* Initially hidden, slide-up effect */
    }

    .card:hover .btn {
        opacity: 1;
        transform: translateY(0); /* Slide in the button */
    }

    .btn-primary {
        background-color: #007bff;
        border-color: #007bff;
    }

    .btn-primary:hover {
        background-color: #0056b3;
        border-color: #0056b3;
        transform: scale(1.05); /* Slightly scale button on hover */
    }

    .card-container {
        margin-bottom: 30px;
    }

    .container {
        max-width: 1200px;
    }

    h1 {
        font-size: 2.5rem;
        margin-bottom: 40px;
    }

    /* Add responsiveness for smaller screens */
    @media (max-width: 768px) {
        .card-body {
            padding: 1rem;
        }

        .card-title {
            font-size: 1.2rem;
        }
    }
</style>

<div class="container py-5 mb-5">
    <h1 class="text-center fw-bold"><span>Our Product Range</span></h1>
    <div class="row align-items-center justify-content-center">
        <?php foreach ($products as $product): ?>
            <div class="col-md-4 col-sm-6 col-xs-12 mb-4">
                <div class="card">
                    <img src="<?= $product['image'] ?>" class="card-img-top" alt="<?= $product['title'] ?>">
                    <div class="card-body position-relative w-100">
                    <a href="<?= $product['link'] ?>"></a><h5 class="card-title w-100 text-center"><?= $product['title'] ?></h5></a>
                        <a href="<?= $product['link'] ?>" class="btn btn-primary kmoreBtn">Know More</a>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>

<?php include 'page-footer.php'; ?>

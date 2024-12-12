<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="utf-8">
   <title>Western - Infrabuild Products LLP</title>
   <!-- Bootstrap CSS -->
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

   <style>
      /* Custom Hero Section Styles */

      .hero-overlay {
         position: absolute;
         top: 0;
         left: 0;
         width: 100%;
         height: 100%;
         background-color: rgba(0, 0, 0, 0.5);
      }

      .hero-content {
         position: relative;
         z-index: 2;
         max-width: 800px;
         padding: 0 15px;
      }

      .hero-section h1 {
         font-size: 3.5rem;
         font-weight: bold;
         margin-bottom: 20px;
      }

      .hero-section .subtitle {
         font-size: 1.5rem;
         font-weight: 300;
         margin-bottom: 30px;
      }

      /* Responsive Adjustments */
      @media (max-width: 768px) {

         .hero-section h1 {
            font-size: 2.5rem;
         }

         .hero-section .subtitle {
            font-size: 1.2rem;
         }
      }

      /* Product Section Styles */
      .product-section {
         padding: 50px 0;
      }

      .product-card {
         margin-bottom: 30px;
         box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
         transition: transform 0.3s ease;
      }

      .product-card:hover {
         transform: translateY(-10px);
      }

      .product-card img {
         width: 100%;
         height: 250px;
         object-fit: cover;
      }

      /* Certificates Section */
      .certificates-section {
         background-color: #f8f9fa;
         margin-bottom: 100px;
      }
   </style>
</head>

<body>
   <?php include 'testing-laboratory-header.php'; ?>


   <!-- Hero Section -->
   <section class="hero-section">
      <img src="images/banner/Testing-Laboratory-1920 x830px.jpg" alt="Testing Laboratory" class="img-fluid w-100">
   </section>

   <!-- Products Section -->
   <section id="products" class="product-section container">
      <div class="row">
         <div class="col-12 text-center mb-4">
            <h2>Our Testing Facilities</h2>
         </div>

         <div class="col-md-4">
            <div class="card product-card">
               <img src="images/products/inhousematerialtestinglaboratory/UTM-1.jpg" class="card-img-top" alt="Universal Testing Machine">
               <div class="card-body">
                  <h5 class="card-title">Universal Testing Machine</h5>
                  <p class="card-text">
                     Testing Yield Strength, Ultimate Tensile Strength, Bend Test, Elongation, Compression Test.
                     <br>
                     <small class="text-muted">(NABL Accredited)</small>
                  </p>
               </div>
            </div>
         </div>
         <!-- Add more product cards as needed -->
      </div>
   </section>

   <!-- Certificates Section -->
   <section class="certificates-section">
      <div class="container">
         <div class="row">
            <div class="col-12 text-center mb-4">
               <h2>Our Certifications</h2>
            </div>
            <!-- Add certificate images or carousel here -->
            <div class="col-md-3 col-sm-6 mb-4">
               <img src="images/awards/awards1.jpg" class="img-fluid" alt="Certificate 1">
            </div>
            <div class="col-md-3 col-sm-6 mb-4">
               <img src="images/awards/awards2.jpg" class="img-fluid" alt="Certificate 2">
            </div>
            <div class="col-md-3 col-sm-6 mb-4">
               <img src="images/awards/awards3.jpg" class="img-fluid" alt="Certificate 3">
            </div>
            <div class="col-md-3 col-sm-6 mb-4">
               <img src="images/awards/awards4.jpg" class="img-fluid" alt="Certificate 4">
            </div>
         </div>
      </div>
   </section>

   <!-- Footer (Placeholder - Replace with your actual footer) -->
   <?php include 'page-footer.php'; ?>
   <!-- Bootstrap JS and dependencies -->
</body>

</html>
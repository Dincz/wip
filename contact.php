<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
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
        .page-banner {
            background-image: url('images/background/10.jpg');
            background-size: cover;
            background-position: center;
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            text-align: center;
        }

        .page-banner h1 {
            font-size: 4rem;
            margin-bottom: 10px;
        }

        .page-banner .title {
            font-size: 1.5rem;
            font-weight: 300;
        }

        .contact-form .form-group input,
        .contact-form .form-group select,
        .contact-form .form-group textarea {
            border-radius: 5px;
            padding: 10px;
            border: 1px solid #ccc;
        }

        .contact-form button {
            border-radius: 5px;
            background-color: #3498db;
            color: white;
            padding: 10px 15px;
            border: none;
        }

        .map-column iframe {
            width: 100%;
            height: 80%;
            border: 0;
        }

        .contact-page-section {
            margin-bottom: 5rem;
        }

        @media (max-width: 768px) {
            .map-column {
                margin-top: 15px;
                margin-bottom: 50px;

            }

            .contact-page-section {
                margin-top: 40%;
            }
        }
    </style>
</head>

<body>
    <?php include 'header.php'; ?>

    <!-- Full-Page Banner -->
    <section class="page-banner">
        <div class="container">
            <h1>Contact Us</h1>
        </div>
    </section>

    <!-- contact us details -->
    <div class="container py-4">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-4 mb-2">
                        <strong>Telephone:</strong>
                        <p class="text-muted mb-0">022 - 27780104/05</p>
                    </div>
                    <div class="col-md-4 mb-2">
                        <strong>Mobile:</strong>
                        <p class="text-muted mb-0">+91 - 9324683484</p>
                    </div>
                    <div class="col-md-4 mb-2">
                        <strong>Email:</strong>
                        <p class="text-muted mb-0">
                            <a href="mailto:admin@wipindia.com" class="text-primary">admin@wipindia.com</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Contact Page Section -->
    <section class="contact-page-section py-5">
        <div class="container">
            <div class="row">
                <!-- Form Column -->
                <div class="col-lg-6 col-md-12 mb-4">
                    <div class="inner-column">
                        <div class="sec-title">
                            <span class="float-text">Enquiry</span>
                            <h2>Contact Us</h2>
                        </div>
                        <form action="successformcontact.php" method="post" class="contact-form p-4">
                            <div class="form-group">
                                <label for="first_name">Name</label>
                                <input
                                    type="text"
                                    name="first_name"
                                    id="first_name"
                                    class="form-control"
                                    placeholder="Enter your first name"
                                    required>
                            </div>
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input
                                    type="email"
                                    name="email"
                                    id="email"
                                    class="form-control"
                                    placeholder="Enter your email address"
                                    required>
                            </div>
                            <div class="form-group">
                                <label for="last_name">Phone</label>
                                <input
                                    type="text"
                                    name="last_name"
                                    id="last_name"
                                    class="form-control"
                                    placeholder="Enter your phone number"
                                    required
                                    maxlength="10">
                            </div>
                            <div class="form-group">
                                <label for="product">Product</label>
                                <select
                                    name="product"
                                    id="product"
                                    class="form-control p-2"
                                    required>
                                    <option value="" disabled selected>Select a product</option>
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
                            <div class="form-group">
                                <label for="message">Message</label>
                                <textarea
                                    name="message"
                                    id="message"
                                    class="form-control"
                                    placeholder="Write your message here"
                                    rows="5"
                                    required></textarea>
                            </div>
                            <div class="form-group text-center">
                                <div class="g-recaptcha mb-3" data-sitekey="6LeOZ6waAAAAANgmnM0nrtWti9KlsKdxE5U-qFtm"></div>
                            </div>
                            <div class="form-group">
                                <button
                                    class="btn btn-primary btn-block btn-lg"
                                    type="submit"
                                    name="submitformcontact">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>

                <!-- Map Column -->
                <div class="col-lg-6 col-md-12 map-column">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3769.838895563887!2d73.02323677505294!3d19.1147222820979!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7c1263f5ec863%3A0x76e2879015e1ed50!2sWestern%20Infrabuild%20Products%20LLP!5e0!3m2!1sen!2sin!4v1732697590349!5m2!1sen!2sin"
                        allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>
    </section>

    <?php include 'page-footer.php'; ?>

</body>

</html>
<!DOCTYPE html>
<html lang="en">

<?php include_once 'metaheads.php' ?>

<body>


    <!-- ======= Header ======= -->
    <?php include 'header.php'; ?>
    <!-- Messenger Chat plugin Code -->
    <div id="fb-root"></div>

    <!-- Your Chat plugin code -->
    <div id="fb-customer-chat" class="fb-customerchat">
    </div>

    <script>
    var chatbox = document.getElementById('fb-customer-chat');
    chatbox.setAttribute("page_id", "302249947165451");
    chatbox.setAttribute("attribution", "biz_inbox");
    </script>

    <!-- Your SDK code -->
    <script>
    window.fbAsyncInit = function() {
        FB.init({
            xfbml: true,
            version: 'v17.0'
        });
    };

    (function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s);
        js.id = id;
        js.src = 'https://connect.facebook.net/en_US/sdk/xfbml.customerchat.js';
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));
    </script>
    <!-- End Header -->


    <main id="main">

        <section class="breadcrumbs">
            <div class="container">
                <ol>
                    <li><a href="/">Home</a></li>
                    <li>Services</li>
                </ol>
                <h2>Services</h2>
            </div>
        </section>


        <!-- ======= Services Section ======= -->
        <section id="services" class="services">
            <div class="container" style="margin-top: 30px;">
                <header class="section-header">

                    <p>We provide the following services </p>
                </header>

                <div class="row gy-4">
                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                        <div class="service-box blue">
                            <i class="ri-discuss-line icon"></i>
                            <h3>Website Development</h3>
                            <p>
                                We build websites such as landing page, Ecommerce, Businesses, Health,
                                Education and School Websites
                            </p>
                            <a href="#" class="read-more"><span>Read More</span> <i class="bi bi-arrow-right"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="400">
                        <div class="service-box green">
                            <i class="ri-discuss-line icon"></i>
                            <h3>Mobile Applications</h3>
                            <p>
                                Our expertise lies in crafting tailor-made mobile applications that cater to the unique
                                needs of organizations and businesses.
                                Elevating digital engagement and efficiency for our clients.
                            </p>
                            <a href="#" class="read-more"><span>Read More</span> <i class="bi bi-arrow-right"></i></a>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
                        <div class="service-box orange">
                            <i class="ri-discuss-line icon"></i>
                            <h3>Supermarket Point of Sale Installation (POS)</h3>
                            <p>
                                Transform your supermarket operations with our professional POS system installation
                                services. Streamline transactions, inventory management, and customer service
                                seamlessly.

                            </p>
                            <a href="#" class="read-more"><span>Read More</span> <i class="bi bi-arrow-right"></i></a>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
                        <div class="service-box red">
                            <i class="ri-discuss-line icon"></i>
                            <h3>CCTV Installation</h3>
                            <p>
                                Enhance security and peace of mind with our expert CCTV installation services.
                                Safeguard your premises with cutting-edge surveillance technology and professional
                                installation for round-the-clock protection.
                            </p>
                            <a href="#" class="read-more"><span>Read More</span> <i class="bi bi-arrow-right"></i></a>
                        </div>
                    </div>


                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
                        <div class="service-box orange">
                            <i class="ri-discuss-line icon"></i>
                            <h3>Web Applications</h3>
                            <p>
                                We build sophisticated Web Applications that tailors solution
                                for Business and Organization runnings. (Customer/Employee Tracking Systems,
                                Hospital Management system, Inventory Systems for stores and Super Markets)
                            </p>
                            <a href="#" class="read-more"><span>Read More</span> <i class="bi bi-arrow-right"></i></a>
                        </div>
                    </div>



                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="500">
                        <div class="service-box red">
                            <i class="ri-discuss-line icon"></i>
                            <h3>Branding</h3>
                            <p>
                                We specialize in creating impactful brand identities
                                for both organizations and businesses.
                                Through a meticulous blend of creative design and strategic positioning,
                                we craft brands that resonate with audiences, fostering recognition, trust,
                                and lasting connections.

                            </p>
                            <a href="#" class="read-more"><span>Read More</span> <i class="bi bi-arrow-right"></i></a>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="600">
                        <div class="service-box purple">
                            <i class="ri-discuss-line icon"></i>
                            <h3>Cloud/Infrastructures</h3>
                            <p>
                                Navigating the digital landscape with finesse,
                                we offer expert Cloud and Infrastructure services that
                                streamline operations and enhance scalability.
                                Our solutions encompass seamless migration, robust architecture,
                                and optimized management, ensuring organizations harness the full potential of

                            </p>
                            <a href="#" class="read-more"><span>Read More</span> <i class="bi bi-arrow-right"></i></a>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="700">
                        <div class="service-box pink">
                            <i class="ri-discuss-line icon"></i>
                            <h3>Content Management Systems (CMS)</h3>
                            <p>
                                Crafting dynamic digital experiences, we specialize in developing
                                CMS websites that empower businesses with effortless content management.
                                Our expertise spans creating user-friendly interfaces, customizing functionalities,
                                and integrating robust Content Management Systems.
                            </p>
                            <a href="#" class="read-more"><span>Read More</span> <i class="bi bi-arrow-right"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="700">
                        <div class="service-box pink">
                            <i class="ri-discuss-line icon"></i>
                            <h3>Gadget Sales</h3>
                            <p>
                                We will connect to a vendor to get your preferred Computer Gadgets
                            </p>
                            <a href="#" class="read-more"><span>Read More</span> <i class="bi bi-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Services Section -->
    </main>
    <!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer" class="footer">
        <div class="footer-newsletter">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-12 text-center">
                        <h4>Our Newsletter</h4>
                        <p>
                            Subscribe to our Newsletter
                        </p>
                    </div>
                    <div class="col-lg-6">
                        <form action="#" method="post">
                            <input type="email" name="email" /><input type="submit" value="Subscribe" />
                        </form>
                    </div>
                </div>
            </div>
            <a href="https://api.whatsapp.com/send?phone=7032618748&text=Hello, How may we be of service."
                class="float-whatsapp" target="_blank">
                <i class="fa fa-whatsapp my-whatsapp-float"></i>
            </a>
        </div>

        <div class="footer-top">
            <div class="container">
                <div class="row gy-4">
                    <div class="col-lg-5 col-md-12 footer-info">
                        <a href="#" class="logo d-flex align-items-center">
                            <img src="assets/img/logo.png" alt="" />
                            <span>Hamzeal Digital</span>
                        </a>
                        <p style="text-align: justify;">
                            Ranked as the leading digital agency in Ibadan,
                            our expertise shines in crafting unparalleled web and mobile applications.
                            We're committed to delivering top-tier solutions that seamlessly blend creativity,
                            innovation, and functionality. With a dedicated team and a track record of excellence,
                            we excel in building optimized digital experiences that elevate businesses,
                            engage users, and drive success. Choose us as your partner to transform your
                            vision into reality and stand out in the ever-evolving digital landscape.
                        </p>
                        <div class="social-links mt-3">
                            <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
                            <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
                            <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
                            <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
                        </div>
                    </div>

                    <div class="col-lg-2 col-6 footer-links">
                        <h4>Useful Links</h4>
                        <ul>
                            <li>
                                <i class="bi bi-chevron-right"></i> <a href="#">Home</a>
                            </li>
                            <li>
                                <i class="bi bi-chevron-right"></i> <a href="#">About us</a>
                            </li>
                            <li>
                                <i class="bi bi-chevron-right"></i> <a href="#">Our Services</a>
                            </li>
                            <li>
                                <i class="bi bi-chevron-right"></i>
                                <a href="#">Terms of service</a>
                            </li>
                            <li>
                                <i class="bi bi-chevron-right"></i>
                                <a href="#">Privacy policy</a>
                            </li>
                        </ul>
                    </div>

                    <div class="col-lg-2 col-6 footer-links">
                        <h4>Our Services</h4>
                        <ul>
                            <li>
                                <i class="bi bi-chevron-right"></i> <a href="#">Web Design</a>
                            </li>
                            <li>
                                <i class="bi bi-chevron-right"></i>
                                <a href="#">Web Development</a>
                            </li>

                            <li>
                                <i class="bi bi-chevron-right"></i>
                                <a href="#">Graphic Design</a>
                            </li>
                        </ul>
                    </div>

                    <div class="col-lg-3 col-md-12 footer-contact text-center text-md-start">
                        <h4>Contact Us</h4>
                        <p>
                            <br /><br />
                            <strong>Phone:</strong> +234 07032618748<br />
                            <strong>Email:</strong> hamzealdigital@hamzealdigital.com<br />
                        </p>
                    </div>
                    <div class="col-lg-3 col-12">

                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="copyright">
                &copy; Copyright <strong><span>hamzealdigital</span></strong>. All Rights Reserved
            </div>

        </div>

    </footer>
    <!-- End Footer -->
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>





    <!-- Vendor JS Files -->
    <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
    <script src="assets/vendor/aos/aos.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>

</body>

</html>
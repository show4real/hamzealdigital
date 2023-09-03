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


    <main>
        <section class="breadcrumbs">
            <div class="container">
                <ol>
                    <li><a href="/">Home</a></li>
                    <li>About us</li>
                </ol>
                <h2>About Us</h2>
            </div>
        </section>
        <section id="about" class="about">
            <div class="container" data-aos="fade-up">
                <div class="row gx-0">
                    <div class="col-lg-12 col-md-12 d-flex flex-column justify-content-center" data-aos="fade-up" data-aos-delay="200">
                        <div class="content">
                            <h3>Who We Are</h3>
                            <h2 class="txt-sm-mobile" style="line-height:1.6; text-align:justify;">
                                We are a dynamic website and mobile agency, crafting
                                innovative digital solutions tailored to <br />your business needs.

                            </h2>
                            <p style="line-height:3.0; text-align:justify; font-size:18px;">
                                As a seasoned website and mobile agency, we specialize in
                                transforming ideas into captivating online experiences.

                                <br>We're not only a leading website and mobile agency but also a
                                hub for nurturing future talent.Our training programs empower
                                students in Web and Mobile App, Backend Devlopment and
                                Fullstack Development, shaping the next generation of tech
                                innovators.

                                <br>We Rank as the leading digital agency in Ibadan,
                                our expertise shines in crafting unparalleled web and mobile applications.
                                We're committed to delivering top-tier solutions that seamlessly blend creativity,
                                innovation, and functionality. With a dedicated team and a track record of excellence,
                                we excel in building optimized digital experiences that elevate businesses,
                                engage users, and drive success. Choose us as your partner to transform your
                                vision into reality and stand out in the ever-evolving digital landscape.
                            </p>


                        </div>
                    </div>

                    <!-- <div class="col-lg-6 d-flex align-items-center" data-aos="zoom-out" data-aos-delay="200">
                        <img src="assets/img/features-2.png" class="img-fluid second-hero-img" alt="" />
                    </div> -->
                </div>
            </div>
        </section>



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
            <a href="https://api.whatsapp.com/send?phone=7032618748&text=Hello, How may we be of service." class="float-whatsapp" target="_blank">
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
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>





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
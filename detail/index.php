<?php
$slug = $_GET['page'];

function RemoveSpecialChar($str)
{

    $res = str_replace(array(
        '-', ','
    ), ' ', $str);

    return $res;
}
$title = RemoveSpecialChar($slug);

$newtitle = preg_replace('/\W\w+\s*(\W*)$/', '$1', $title);







?>
<div id="dom-target" style="display: none;">
    <?php

    echo htmlspecialchars($slug);
    ?>
</div>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta name='robots' content='index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1' />

    <title>#1 UK Used <?php echo $newtitle;  ?> | Hamzeal Digital</title>
    <meta name="description" content="Top quality UK used laptops Ibadan. easily make your choice" />

    <meta name="keywords" content="UK used laptops in Ibadan" />
    <link rel="canonical" href="https://hamzealdigital.com/uk-used-quality-laptops-ibadan" />
    <meta property="og:locale" content="en_US" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="#1 UK Used Laptops / Brand New Laptops / Mobile Phones store in Ibadan" />
    <meta property="og:description"
        content="Hamzeal Digital offers top quality laptops, Mobile phones and accessories at affordable prices, delivering quality since 2004 in Ibadan." />
    <meta property="og:url" content="https://hamzealdigital.com/" />
    <meta property="og:site_name" content="Hamzeal Digital" />
    <meta property="article:publisher" content="https://www.facebook.com/hamzealmart/" />
    <meta property="article:modified_time" content="2023-07-09T11:10:28+00:00" />
    <meta property="og:type" content="article" />
    <meta property="og:title" content="Check Out These Fairly Used Laptops in Ibadan with Their Prices" />
    <meta property="og:description"
        content="We have compiled a list of fairly used laptops in Ibadan with their prices, so you can easily make the right choice" />
    <meta property="og:url" content="https://hamzealdigital.com/uk-used-laptops-ibadan" />
    <meta property="og:image" content="https://hamzealdigital.com/log.png" />
    <meta property="og:image:width" content="750" />
    <meta property="og:image:height" content="500" />
    <meta property="article:author" content="" />
    <meta property="fb:app_id" content="" />
    <meta property="article:published_time" content="2023-04-30 23:52:08" />
    <meta property="article:modified_time" content="2023-04-30 23:52:08" />
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:site" content="@Selloff.ng" />
    <meta name="twitter:creator" content="@" />
    <meta name="twitter:title" content="Check Out These Fairly Used Laptops in Ibadan with Their Prices" />
    <meta name="twitter:description"
        content="We have compiled a list of fairly used laptops in Ibadan with their prices, so you can easily make the right choice" />
    <meta name="twitter:image" content="https://hamzealdigital.com/logo.png" />

    <!-- Favicons -->
    <link href="../assets/img/favicon.png" rel="icon" />
    <link href="../assets/img/apple-touch-icon.png" rel="apple-touch-icon" />

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">


    <!-- Vendor CSS Files -->
    <link href="../assets/vendor/aos/aos.css" rel="stylesheet" />
    <link href="../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
    <link href="../assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet" />
    <link href="../assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet" />
    <link href="../assets/vendor/remixicon/remixicon.css" rel="stylesheet" />
    <link href="../assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet" />

    <!-- Template Main CSS File -->
    <link href="../assets/css/style.css" rel="stylesheet" />

    <!-- Google Tag Manager -->
    <script>
    (function(w, d, s, l, i) {
        w[l] = w[l] || [];
        w[l].push({
            'gtm.start': new Date().getTime(),
            event: 'gtm.js'
        });
        var f = d.getElementsByTagName(s)[0],
            j = d.createElement(s),
            dl = l != 'dataLayer' ? '&l=' + l : '';
        j.async = true;
        j.src =
            'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
        f.parentNode.insertBefore(j, f);
    })(window, document, 'script', 'dataLayer', 'GTM-557JZVST');
    </script>
    <!-- End Google Tag Manager -->
    <style>
    .float-whatsapp {
        position: fixed;
        width: 60px;
        height: 60px;
        bottom: 40px;
        right: 40px;
        background-color: #25d366;
        color: #FFF;
        border-radius: 50px;
        text-align: center;
        font-size: 30px;
        box-shadow: 2px 2px 3px #999;
        z-index: 100;
    }

    .my-whatsapp-float {
        margin-top: 16px;
    }

    .product-container {
        display: flex;
        flex-direction: column;

    }

    .product-slider {
        position: relative;
        max-width: 100%;
        margin-bottom: 20px;
    }

    .product-slider img {
        max-width: 100%;
        height: auto;
    }

    .arrow-left,
    .arrow-right {
        position: absolute;
        top: 50%;
        transform: translateY(-50%);
        width: 30px;
        height: 30px;
        background-color: rgba(0, 0, 0, 0.5);
        color: white;
        display: flex;
        align-items: center;
        justify-content: center;
        cursor: pointer;
    }

    .arrow-left {
        left: 10px;
    }

    .arrow-right {
        right: 10px;
    }

    .product-thumbnails {
        display: flex;
        gap: 10px;
    }

    .thumbnail {
        width: 100px;
        height: 100px;
        cursor: pointer;
        border: 2px solid transparent;
        transition: border-color 0.3s;
    }

    .thumbnail img {
        width: 100%;
        height: 100%;
    }

    .thumbnail.selected {
        border-color: #007bff;
    }

    .number-button {
        display: flex;
        align-items: center;
        border: 1px solid #0E1B4D;
        color: #0E1B4D;
        width: 150px;
        border-radius: 10px;
        height: 60px;
    }

    .minus-button,
    .plus-button {

        color: #0E1B4D;
        border-radius: 4px;
        border: none;

        cursor: pointer;

    }

    .styled-button {
        border-radius: 4px;
        border: 1px solid #0E1B4D;
        color: white;
        background-color: #0E1B4D;
        margin-bottom: 1rem;
        display: block;

        border: none;
    }

    h5.device-type {
        color: #0E1B4D;
        font-size: 15px;
        font-weight: 100;
    }

    .styled-button span {

        font-size: 15px;
    }

    .add-to-cart-button {
        border: 1px solid #0E1B4D;
        background-color: transparent;
        color: #0E1B4D;
        transition: border-color 0.6s;
        width: 80%;
        height: 50px;
        font-size: 15px;
        font-weight: 500;
    }

    .add-to-cart-button:hover,
    .add-to-cart-button:focus {
        border: 2px solid#0E1B4D !important;
        background-color: transparent;
        color: #0E1B4D !important;
        font-size: 20px;
        font-weight: 500;
    }



    .share-button {
        border: 1px solid #0E1B4D;
        background-color: transparent;
        color: #0E1B4D;
        margin-top: 15px;
        transition: border-color 0.6s;
        width: 20%;
        height: 40px;
        font-size: 15px;
        font-weight: 500;
    }

    .share-button:hover,
    .share-button:focus {
        border: 2px solid#0E1B4D !important;
        background-color: transparent;
        color: #0E1B4D !important;
        font-size: 20px;
        font-weight: 500;
    }




    .buy-now-button {
        border: 1px solid #3498DB;
        background-color: #3498DB;
        color: white;
        transition: border-color 0.6s;
        width: 80%;
        height: 50px;
        font-size: 15px;
        font-weight: 500;
    }

    .buy-now-button:hover,
    .buy-now-button:focus {
        border: none;
        background-color: #3498DB;
        color: white !important;
        font-size: 20px;
        font-weight: 500;
    }

    .description p {
        color: #0E1B4D;
        font-family: "Archivo, serif";
        font-size: 15px;
    }


    .image-container {
        position: relative;
        overflow: hidden;
    }

    .zoomable-image {
        width: 100%;
        height: auto;
        transition: transform 0.7s;
    }

    .card-with-hover .zoomable-image {
        transform: scale(1);
    }

    .card-with-hover .image-container:hover .zoomable-image {
        transform: scale(1.2);
        /* Adjust the zoom level as needed */
    }

    .image-tag {
        position: absolute;
        top: 10px;
        right: 10px;
        z-index: 1;
        font-size: 12px;
        font-weight: bold;
    }




    /* FF1493 */
    </style>


    <script src="../assets/js/react-dev.js" crossorigin></script>
    <script src="../assets/js/react-dom.js" crossorigin></script>
    <script src="../assets/js/babel.js"></script>

</head>

<body>
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
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-557JZVST" height="0" width="0"
            style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
    <!-- ======= Header ======= -->
    <?php include "../header.php" ?>
    <!-- End Header -->

    <main id="main">
        <!-- ======= Breadcrumbs ======= -->
        <section class="breadcrumbs">
            <div class="container">
                <ol>
                    <li><a href="/">Home</a></li>
                    <li>UK used Laptops at affordable prices</li>
                </ol>
                <h2>Sales </h2>
            </div>
        </section>
        <!-- End Breadcrumbs -->

        <section id="blog" class="blog">
            <div class="container" data-aos="fade-up">
                <div class="row">
                    <div class="col-lg-12 entries">
                        <div class="row">
                            <div class="col-lg-12">
                                <article class="entry entry-single">

                                    <div class="entry-content" id="detail">


                                    </div>
                                </article>
                            </div>


                        </div>



                    </div>
                    <!-- <div class="col-lg-3">

                        <div class="sidebar">


                            <h3 class="sidebar-title">Categories</h3>
                            <div class="sidebar-item categories">
                                <ul>
                                    <li><a href="#">Laptops <span>(25)</span></a></li>
                                    <li><a href="#">Mobile Phone <span>(12)</span></a></li>
                                    <li><a href="#">Graphics <span>(5)</span></a></li>

                                </ul>
                            </div>


                            <h3 class="sidebar-title">Tags</h3>
                            <div class="sidebar-item tags">
                                <ul>
                                    <li><a href="#">UK used Laptops</a></li>
                                    <li><a href="#">Mobile Phones</a></li>
                                    <li><a href="#">Mac Book</a></li>
                                    <li><a href="#">Iphones</a></li>
                                    <li><a href="#">Apple</a></li>
                                    <li><a href="#">Samsung</a></li>
                                    <li><a href="#">Websites</a></li>
                                    <li><a href="#">Repairs</a></li>

                                </ul>
                            </div>

                        </div>

                    </div> -->

                </div>
        </section>
        <!-- End #main -->

        <!-- ======= Footer ======= -->
        <footer id="footer" class="footer">
            <div class="footer-newsletter">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-12 text-center">
                            <h4>Our Newsletter</h4>
                            <p>Subscribe to our Newsletter</p>
                        </div>
                        <div class="col-lg-6">
                            <form action="#" method="post">
                                <input type="email" name="email" /><input type="submit" value="Subscribe" />
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <div class="footer-top">
                <div class="container">
                    <div class="row gy-4">
                        <div class="col-lg-5 col-md-12 footer-info">
                            <a href="#" class="logo d-flex align-items-center">
                                <img src="../assets/img/logo.png" alt="" />
                                <span>Hamzeal Digital</span>
                            </a>
                            <p style="text-align: justify">
                                Ranked as the leading digital agency in Ibadan, our expertise
                                shines in crafting unparalleled web and mobile applications.
                                We're committed to delivering top-tier solutions that seamlessly
                                blend creativity, innovation, and functionality. With a
                                dedicated team and a track record of excellence, we excel in
                                building optimized digital experiences that elevate businesses,
                                engage users, and drive success. Choose us as your partner to
                                transform your vision into reality and stand out in the
                                ever-evolving digital landscape.
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
                                    <i class="bi bi-chevron-right"></i> <a href="#">Services</a>
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
                            <a href="https://api.whatsapp.com/send?phone=7032618748&text=hello, welcome to Hamzeal Digital."
                                class="float-whatsapp" target="_blank">
                                <i class="fa fa-whatsapp my-whatsapp-float"></i>
                            </a>
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
        <script src="../assets/vendor/purecounter/purecounter_vanilla.js"></script>
        <script src="../assets/vendor/aos/aos.js"></script>
        <script src="../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="../assets/vendor/glightbox/js/glightbox.min.js"></script>
        <script src="../assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
        <script src="../assets/vendor/swiper/swiper-bundle.min.js"></script>
        <script src="../assets/vendor/php-email-form/validate.js"></script>

        <!-- Template Main JS File -->
        <script src="../assets/js/main.js"></script>

        <script type="text/babel" src="../components/Detail.js"></script>
</body>

</html>
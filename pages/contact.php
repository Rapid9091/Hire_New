<?php
include_once "../init.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Contact US HireCoworker</title>
    <?php include_once head; ?>

    <!-- -------------------------- -->
    <!-- Page CSS links -->
    <!-- -------------------------- -->

    <link rel="stylesheet" href="<?= get_css() ?>contact.css" />
    <link rel="stylesheet" href="<?= get_css() ?>view-css/view_blog.css">
</head>

<body>

    <!-- -------------------------- -->
    <!-- Header of the page -->
    <!-- -------------------------- -->

    <?php include_once header; ?>

    <!-- -------------------------- -->
    <!-- First Contact Section  -->
    <!-- -------------------------- -->
    <article class="pricing-landing grid-center">
        <div class="pricing-ladning-content">
            <h2 class="main-heading"> Contact Us</h2>
            <p>Get the best and the latest help for your project at the best. </p>
        </div>
    </article>


    <!-- -------------------------- -->
    <!-- Second Contact Section  -->
    <!-- -------------------------- -->
    <section class="contact-first ">
        <div class="contact-first-grid grid grid-2">
            <div class="contact-first-left">
                <img loading="lazy" src="<?= get_img() ?>contact-us-4.png" alt="Hire Virtual Employee">
            </div>
            <div class="contact-first-right">
                <!-- <h2 class="sub-heading">We’d Love to Hear from You!</h2>
                <h5>Reach out to us with your query or concern</h5> -->
                <p class="p-pink" data-aos="zoom-in" data-aos-easing="ease-in-out" data-aos-duration="400">CONTACT</p>
                <h3 class="section-heading" data-aos="zoom-in" data-aos-easing="ease-in-out" data-aos-duration="400">
                    CONTACT US </h3>
                <form class="contact_form" method="POST" action="">
                    <div class="input_margin_bottom">
                        <div class="contact-form-input-container grid">
                            <div class="contact-form-input-container-icon grid-center">
                                <ion-icon name="person-circle-sharp"></ion-icon>
                            </div>
                            <div class="contact-form-input-container-box">
                                <input type="text" id="input_name" name="input_name"
                                    placeholder="Please enter your name" />

                            </div>
                        </div>
                        <small class="input_error" id="input_name_error"></small>
                    </div>
                    <div class="input_margin_bottom">
                        <div class="contact-form-input-container grid">
                            <div class="contact-form-input-container-icon grid-center">
                                <ion-icon name="call-sharp"></ion-icon>
                            </div>
                            <div class="contact-form-input-container-box">
                                <input type="tel" placeholder="Pleas enter your Mobile" name="input_mobile" id="input_mobile" class="country_input" minlength="10" maxlength="15">
                              
                            </div>
                        </div>
                        <small class="input_error" id="input_mobile_error"></small>
                    </div>
                    <div class="input_margin_bottom">
                        <div class="contact-form-input-container grid">
                            <div class="contact-form-input-container-icon grid-center">
                                <ion-icon name="mail-open-sharp"></ion-icon>
                            </div>
                            <div class="contact-form-input-container-box">
                                <input type="" id="input_email" name="input_email"
                                    placeholder="Please enter your mail" />

                            </div>
                        </div>
                        <small class="input_error" id="input_email_error"></small>
                    </div>
                    <div class="input_margin_bottom">
                        <div class="contact-form-input-container grid">
                            <div class="contact-form-input-container-icon text-center">
                                <ion-icon name="mail-sharp"></ion-icon>
                            </div>
                            <div class="contact-form-input-container-box">
                                <textarea id="input_query" name="input_query"  cols="30" rows="4"
                                    placeholder="Message"></textarea>
                            </div>
                        </div>
                        <small class="input_error" id="input_query_error"></small>
                    </div>
                   
                    <div class="contact-form-input-submit">
                       <button id="contact_form_button">Submit</button>                       
                    </div>
                </form>
                <p class="text-center">Looking for a job? Then skip this form and send your resume
                    directly to our HR at <a href="mailto:hr@hirecoworker.com" title="mail us"
                        style="text-decoration: underline;"> HR@hirecoworker.com</a></p>
            </div>
        </div>


        <!-- -------------------------- -->
        <!-- Footer Bar  -->
        <!-- -------------------------- -->

        <div class="footer-header-strip background-property grid grid-3" style="margin:0;margin-top:5%;">
            <div class="footer-strip-blocks grid">
                <div class="footer-strip-blocks-icon grid grid-center">
                    <ion-icon name="location-sharp"></ion-icon>
                </div>
                <div class="footer-strip-blocks-content">
                    <address>
                        <h3>
                            Our Location
                        </h3>
                        <p>
                            <a href="https://www.google.com/maps/place/Rapid+Auto+Shipping/@34.4686156,-101.3040011,3a,64.1y,225.98h,87.97t/data=!3m6!1e1!3m4!1smO6Tx6ID-QAIY-cItwzHog!2e0!7i16384!8i8192!4m5!3m4!1s0x0:0x9f3bfd5545d14ae8!8m2!3d34.4683842!4d-101.3042842?hl=en"
                                title="Live location">Texas United States of America</a>
                        </p>
                    </address>
                </div>
            </div>
            <div class="footer-strip-blocks grid">
                <div class="footer-strip-blocks-icon grid grid-center">
                    <ion-icon name="mail-unread-sharp"></ion-icon>
                </div>
                <div class="footer-strip-blocks-content">
                    <address>
                        <h3>Mail Us</h3>
                        <p>
                            <a href="mailto:info@hirecoworker.com" title="Mail us">info@hirecoworker.com</a>
                        </p>
                    </address>
                </div>
            </div>
            <div class="footer-strip-blocks grid" style="border: none;">
                <div class="footer-strip-blocks-icon grid grid-center">
                    <ion-icon name="call-sharp"></ion-icon>
                </div>
                <div class="footer-strip-blocks-content">
                    <address>
                        <h3>Call Us</h3>
                        <p>
                            <a href="tel:+1 (848) 200-0555" title="Connect us">+1 (848) 200-0555</a>
                        </p>
                    </address>
                </div>
            </div>
        </div>

    </section>



    <!-- -------------------------- -->
    <!-- Third Contact Section  -->
    <!-- -------------------------- -->
    <section class="contact-third padding">
        <p class="p-pink" data-aos="zoom-in" data-aos-easing="ease-in-out" data-aos-duration="400">OFFICES</p>
        <h3 class="section-heading" data-aos="zoom-in" data-aos-easing="ease-in-out" data-aos-duration="400">Our current
            locations</h3>
        <div class="contact-third-grid grid grid-3">
            <div class="contact-third-grid-one">
                <img loading="lazy" src="<?= get_img() ?>office_img.jpg" alt="Our Presence">

                <p>Gurugram Haryana, India</p>
                <div class="contact-third-grid-btn grid-center"><button><a href="tel:+1 (848) 200-0555">CONNECT
                            US</a></button></div>
            </div>
            <div class="contact-third-grid-one">
                <img loading="lazy" src="<?= get_img() ?>about-us-2.png" alt="Our Presence">

                <p>Shilverton Texas, USA</p>
                <div class="contact-third-grid-btn grid-center"><button><a href="tel:+1 (848) 200-0555">CONNECT
                            US</a></button></div>
            </div>
            <div class="contact-third-grid-one">
                <img loading="lazy" src="<?= get_img() ?>about-us-3.png" alt="Our Presence">

                <p>Y, Block kidwai Nagar Kanpur UP, India</p>
                <div class="contact-third-grid-btn grid-center"><button><a href="tel:+1 (848) 200-0555">CONNECT
                            US</a></button></div>
            </div>
        </div>
    </section>

    <!-- -------------------------- -->
    <!-- Blog section page -->
    <!-- -------------------------- -->
    <?php include_once blog_news; ?>


    <!-- -------------------------- -->
    <!-- Page bottom includes footer and some global script -->
    <!-- -------------------------- -->
    <?php include_once page_bottom ?>

    <!-- -------------------------- -->
    <!-- Form Validation JS -->
    <!-- -------------------------- -->
    <script src="<?= get_js() ?>form-validation.js"></script>

</body>

</html>
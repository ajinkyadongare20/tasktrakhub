<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package tasktrakhub
 */

?>

<!-- Footer Start -->
<div class="container-fluid bg-dark text-white-50 footer pt-5">
    <div class="container py-5">
        <div class="row g-5">
            <div class="col-md-6 col-lg-3 wow fadeInLeftBig" data-wow-delay="0.1s">
                <a href="index.html" class="d-inline-block mb-3">
                    <h1 class="text-white text-white-nav">TaskTrak Hub <span class="text-primary"></span>
                    </h1>
                </a>
                <p class="mb-0">TaskTrakHub is a comprehensive task management platform designed to streamline workflows, 
                    enhance team collaboration, and boost productivity, offering efficient solutions for businesses of all sizes.
                </p>
            </div>

            <div class="col-md-6 col-lg-3 wow fadeInLeftBig" data-wow-delay="0.5s">
                <h5 class="text-white mb-4">Popular Link</h5>
                <a class="btn btn-link" href="about.html">Home</a>
                <a class="btn btn-link" href="about.html">Features</a>
                <a class="btn btn-link" href="service.html">Pricing</a>
                <a class="btn btn-link" href="contact.html">Solutions</a>
                <a class="btn btn-link" href="">Case Studies</a>
                <a class="btn btn-link" href="">Contact Support</a>
            </div>
            <div class="col-md-6 col-lg-3 wow fadeIn" data-wow-delay="1.3s">
                <h5 class="text-white mb-4">Legal</h5>
                <a class="btn btn-link" href="">Terms and Conditions</a>
                <a class="btn btn-link" href="">Privacy Policy</a>
                <a class="btn btn-link" href="">Refund and Cancellation Policy</a>
            </div>
            <div class="col-md-6 col-lg-3 wow fadeIn" data-wow-delay="1.8s">
                <h5 class="text-white mb-4">Get In Touch</h5>
                <p><i class="fa fa-map-marker-alt me-3"></i>1234 TaskTrak Ave, Suite 567, Productivity City, ST 89012</p>
                <p><i class="fa fa-phone-alt me-3"></i>+1-800-123-4567</p>
                <p><i class="fa fa-phone-alt me-3"></i>+91 7410016111</p>
                <p><i class="fa fa-envelope me-3"></i>support@tasktrakhub.com</p>
                <div class="d-flex pt-2">
                    <a class="btn btn-outline-light btn-social"
                        href="https://www.linkedin.com/company/leal-software-solution/" target="_blank">
                        <i class="fab fa-linkedin"></i>
                    </a>
                    <a class="btn btn-outline-light btn-social" href="https://www.facebook.com/LealSoftwareSolution"
                        target="_blank">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    <a class="btn btn-outline-light btn-social"
                        href="https://www.youtube.com/@lealsoftwaresolutionpvtltd8833" target="_blank">
                        <i class="fab fa-youtube"></i>
                    </a>
                    <a class="btn btn-outline-light btn-social" href="https://www.instagram.com/smurkewar/"
                        target="_blank">
                        <i class="fab fa-instagram"></i>
                    </a>
                    <a class="btn btn-outline-light btn-social" href="https://wa.me/7410016111" target="_blank">
                        <i class="fab fa-whatsapp"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="container wow fadeIn" data-wow-delay="0.1s">
    <div class="copyright">
            <div class="row">
                <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                    &copy; <a class="border-bottom" href="index.php">Leal Software Solution Pvt Ltd © 2024</a>
                    | All Rights Reserved.<a class="border-bottom" href="https://www.lealsolution.com/"
                        target="_blank"></a>
                </div>

                <div class="col-md-6 text-center text-md-end">
                    <div class="footer-menu">
                        <a href="">Home</a>
                        <a href="">Cookies</a>
                        <a href="">Help</a>
                        <a href="">FAQs</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Footer End -->


<!-- Back to Top -->
<a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top pt-2"><i class="bi bi-arrow-up"></i></a>


<!-- JavaScript Libraries -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/lib/wow/wow.min.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/lib/easing/easing.min.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/lib/waypoints/waypoints.min.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/lib/counterup/counterup.min.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/lib/owlcarousel/owl.carousel.min.js"></script>

<!-- Template Javascript -->
<script src="<?php bloginfo('template_directory'); ?>/js/main.js"></script>

<?php wp_footer(); ?>

</body>

</html>
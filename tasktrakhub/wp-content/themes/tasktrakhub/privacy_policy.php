<?php
/**
 * The main template file
 * Template Name: Privacy Policy
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package tasktrakhub
 */

get_header();
?>

<!-- Main Content -->
<div class="container-fluid bg-gradient-main text-white d-flex align-items-center py-5">
    <div class="container py-5">
        <div class="row align-items-center">
            <!-- Left Section -->
            <div class="col-lg-6 text-center text-lg-start px-5">
                <h1 class="fw-bold display-4 text-white">TaskTrak Hub: All Your Tasks in One Place</h1>
                <p class="fs-5 mt-3">Efficient task management for teams and individuals.</p>
                <form class="d-flex justify-content-center justify-content-lg-start my-4" style="height: 50px;">
                    <input type="email" class="form-control w-50 me-3 rounded-pill" placeholder="Enter your email">
                    <button class="btn btn-primary px-4 rounded-pill">Sign up - it's free!</button>
                </form>
                <a href="#" class="text-white text-decoration-underline d-block">
                    <i class="bi bi-play-circle"></i> Watch Demo
                </a>
            </div>

            <!-- Right Section -->
            <div class="col-lg-6 d-flex justify-content-center">
                <img src="<?php bloginfo('template_directory'); ?>/img/index_tasktrak/test.webp"
                    alt="TaskTrak Illustration" class="img-fluid tasktrak-image">
            </div>
        </div>
    </div>
</div>
<!-- Main Content End -->


<!-- Privacy & Policy Section -->
<div class="bg-light">
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-lg-10 col-md-12 bg-white p-5 rounded shadow-sm">
                <h2 class="text-center text-primary mb-4">Privacy Policy</h2>
                <p class="text-center text-muted">Last Updated: [Date]</p>
                <hr>
                <h4 class="text-dark">1. Information We Collect</h4>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item"><strong>Personal Information:</strong> Account registration details,
                        profile information, and payment data.</li>
                    <li class="list-group-item"><strong>Usage Data:</strong> Log data, device details, and interaction
                        tracking.</li>
                    <li class="list-group-item"><strong>Cookies & Tracking:</strong> Cookies, web beacons, and analytics
                        tracking.</li>
                </ul>
                <h4 class="text-dark mt-4">2. How We Use Your Information</h4>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">Providing and improving services.</li>
                    <li class="list-group-item">Personalizing user experience.</li>
                    <li class="list-group-item">Communication and customer support.</li>
                    <li class="list-group-item">Compliance with legal obligations.</li>
                </ul>
                <h4 class="text-dark mt-4">3. How We Share Your Information</h4>
                <p class="text-secondary">We may share your data with third-party service providers, in case of business
                    transfers, or when required by law.</p>
                <h4 class="text-dark">4. Your Choices and Rights</h4>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">Access and correct your data.</li>
                    <li class="list-group-item">Opt-out of marketing communications.</li>
                    <li class="list-group-item">Request data deletion.</li>
                </ul>
                <h4 class="text-dark mt-4">5. Data Security</h4>
                <p class="text-secondary">We implement security measures to protect your data, including encryption, but
                    no method is 100% secure.</p>
                <h4 class="text-dark">6. Changes to This Privacy Policy</h4>
                <p class="text-secondary">We may update this policy periodically. Check this page for the latest
                    version.</p>
                <h4 class="text-dark">7. Contact Us</h4>
                <div class="p-3 bg-light border rounded">
                    <p class="mb-0"><strong>Email:</strong> <a href="mailto:support@tasktrakhub.com"
                            class="text-decoration-none">support@tasktrakhub.com</a></p>
                    <p class="mb-0"><strong>Phone:</strong> 7410016111</p>
                    <p class="mb-0"><strong>Address:</strong> Flat No. B-102, Laxmi Chowk, Phase 1, Hinjawadi,
                        Pimpri-Chinchwad, Maharashtra 411057</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Privacy & Policy Section -->


<?php
// get_sidebar();
get_footer();
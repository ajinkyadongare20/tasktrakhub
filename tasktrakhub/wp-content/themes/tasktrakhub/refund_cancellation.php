<?php
/**
 * The main template file
 * Template Name: Refund Cancellation 
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


<!-- Refund and Cancellation Section -->
<div class="bg-light">
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-lg-10 col-md-12 bg-white p-5 rounded shadow-sm">
                <h2 class="text-center text-primary mb-4">Refund & Cancellation Policy</h2>
                <p class="text-center text-muted">Last Updated: [Date]</p>
                <hr>
                <h4 class="text-dark">1. Free Trial</h4>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item"><strong>Eligibility:</strong> New users may qualify for a free trial of
                        Professional or Business plans.</li>
                    <li class="list-group-item"><strong>Trial Period:</strong> The duration is mentioned at sign-up and
                        may change.</li>
                    <li class="list-group-item"><strong>Cancellation:</strong> You can cancel your trial anytime before
                        the period ends to avoid charges.</li>
                </ul>
                <h4 class="text-dark mt-4">2. Subscription Cancellation</h4>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item"><strong>Online:</strong> Cancel via your account’s subscription
                        settings.</li>
                    <li class="list-group-item"><strong>Support:</strong> Contact support at <a
                            href="mailto:support@tasktrakhub.com">support@tasktrakhub.com</a>.</li>
                    <li class="list-group-item"><strong>Effective Date:</strong> Cancellation is effective at the end of
                        the billing cycle.</li>
                </ul>
                <h4 class="text-dark mt-4">3. Refund Policy</h4>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item"><strong>30-Day Guarantee:</strong> Refund requests can be made within 30
                        days of purchase.</li>
                    <li class="list-group-item"><strong>Process:</strong> Email <a
                            href="mailto:support@tasktrakhub.com">support@tasktrakhub.com</a> with account details.</li>
                    <li class="list-group-item"><strong>Exclusions:</strong> No refunds for free trials or subscription
                        renewals beyond 30 days.</li>
                </ul>
                <h4 class="text-dark mt-4">4. Service Disruptions</h4>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item"><strong>Compensation:</strong> Service credits may be provided for major
                        disruptions.</li>
                    <li class="list-group-item"><strong>Notification:</strong> Users will be informed about any major
                        issues.</li>
                </ul>
                <h4 class="text-dark mt-4">5. Contact Information</h4>
                <div class="p-3 bg-light border rounded">
                    <p><strong>Email:</strong> <a href="mailto:support@tasktrakhub.com"
                            class="text-decoration-none">support@tasktrakhub.com</a></p>
                    <p><strong>Phone:</strong> 7410016111</p>
                    <p><strong>Address 1:</strong> 2nd Floor, Prestige Bytco Business Center, Nashik Road, Nashik,
                        Maharashtra, India 422101</p>
                    <p><strong>Address 2:</strong> A102, Green Life, Opp MRF Tyres, Laxmi Chowk, Hinjawadi Phase 1,
                        Pimpri Chinchwad, Pune, Maharashtra, India 411057</p>
                    <p><strong>Business Hours:</strong></p>
                    <ul>
                        <li>Monday to Friday: 9 AM - 7 PM IST</li>
                        <li>Saturday & Sunday: Closed</li>
                    </ul>
                </div>
                <div class="text-center mt-4">
                    <a href="mailto:support@tasktrakhub.com" class="btn btn-primary">Contact Us</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Refund and Cancellation Section -->


<?php
// get_sidebar();
get_footer();
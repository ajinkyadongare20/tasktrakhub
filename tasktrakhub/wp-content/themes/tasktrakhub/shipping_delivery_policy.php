<?php
/**
 * The main template file
 * Template Name: Shipping & Delivery Policy
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


<!-- Copyright Section -->
<div class="bg-light">
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-lg-10 col-md-12 bg-white p-5 rounded shadow-sm">
                <h2 class="text-center text-primary mb-4">Shipping & Delivery Policy</h2>
                <p class="text-center text-muted">Product: TaskTrakHub – A digital task and calendar management platform
                </p>
                <p class="text-center text-muted">Provided by: Leal Software Solution Pvt Ltd</p>
                <hr>
                <h4 class="text-dark">1. Digital Product Delivery</h4>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">TaskTrakHub is a digital-only platform. No physical goods are shipped or
                        delivered.</li>
                    <li class="list-group-item">Upon successful registration or subscription purchase, users receive:
                    </li>
                    <ul>
                        <li>Instant access to their TaskTrakHub account.</li>
                        <li>Immediate activation of features based on the selected plan.</li>
                        <li>A confirmation email with account credentials and plan details.</li>
                    </ul>
                </ul>
                <h4 class="text-dark mt-4">2. Delivery Timeline</h4>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item"><strong>Free Plan Access:</strong> Immediately after sign-up.</li>
                    <li class="list-group-item"><strong>Paid Subscription Access:</strong> Instant activation upon
                        successful payment.</li>
                    <li class="list-group-item"><strong>Enterprise or Custom Plans:</strong> Delivery timelines are
                        communicated individually.</li>
                </ul>
                <h4 class="text-dark mt-4">3. Access Information</h4>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">Access is available via:</li>
                    <ul>
                        <li>The TaskTrakHub web portal: <a href="https://www.tasktrakhub.com">www.tasktrakhub.com</a>
                        </li>
                        <li>Mobile apps (Google Play Store & Apple App Store)</li>
                    </ul>
                    <li class="list-group-item">Ensure a stable internet connection and compatible device for access.
                    </li>
                </ul>
                <h4 class="text-dark mt-4">4. Non-Delivery Situations</h4>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">If you do not receive access to your account:</li>
                    <ul>
                        <li>Check spam/junk folders for confirmation emails.</li>
                        <li>Verify successful payment processing.</li>
                        <li>Contact support at <a href="mailto:support@tasktrakhub.com">support@tasktrakhub.com</a>.
                        </li>
                    </ul>
                </ul>
                <h4 class="text-dark mt-4">5. Physical Goods</h4>
                <p class="list-group-item">TaskTrakHub does not ship any physical products. This policy strictly applies
                    to digital software and services.</p>
                <h4 class="text-dark mt-4">6. Contact Us</h4>
                <div class="p-3 bg-light border rounded">
                    <p><strong>Email:</strong> <a href="mailto:support@tasktrakhub.com"
                            class="text-decoration-none">support@tasktrakhub.com</a></p>
                    <p><strong>Phone:</strong> 7410016111</p>
                    <p><strong>Address:</strong> Leal Software Solution Pvt Ltd, Hinjewadi, Pune</p>
                </div>
                <div class="text-center mt-4">
                    <a href="mailto:support@tasktrakhub.com" class="btn btn-primary">Contact Us</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Copyright Section -->


<?php
// get_sidebar();
get_footer();
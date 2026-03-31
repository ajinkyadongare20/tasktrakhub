<?php
/**
 * The main template file
 * Template Name: Compare Plans
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

<!-- Pricing Plans -->
<div class="container-fluid bg-light py-5 wow fadeIn" data-wow-delay="0.3s">
    <h2 class="text-center mb-4">Compare Plans & Pricing</h2>
    <div class="row">
        <div class="col-12 px-5">
            <p>Choosing the right plan has never been easier! TaskTrak Hub offers flexible pricing options for
                individuals, teams, and enterprises. Whether you need a simple task organizer or a full-featured project
                management solution, we have the perfect plan for you.</p>

            <p>Compare our plans to find the best fit for your needs. Enjoy seamless task scheduling, real-time updates,
                calendar integration, and collaboration tools—all designed to enhance efficiency.</p>

            <p>As your team grows, our scalable options ensure a smooth transition without disruption. With TaskTrak
                Hub, you get a user-friendly, cost-effective solution tailored for productivity.</p>

            <p>Explore our plans today and unlock the power of smart task management. Optimize your workflow, boost team
                collaboration, and achieve more with confidence.</p>
        </div>
    </div>
</div>
<!-- End Pricing Plans -->



<!-- List Of Pricing Plans -->
<div class="container py-5">
    <h2 class="text-center fw-bold" style="font-size: 2rem;">Plans & Pricing</h2>
    <p class="text-center" style="color: #666; font-size: 1rem;">Unlock the full potential of TaskTrak Hub with flexible
        plans designed for teams of all sizes.</p>

    <div class="row g-4 mt-4">
        <!-- Plan 1: Free Plan -->
        <div class="col-md-4">
            <div class="card pricing-card">
                <div class="card-body text-center">
                    <h4 class="fw-bold">Free Plan</h4>
                    <p class="fs-6 text-muted">Best for individuals looking to manage personal tasks and projects with
                        minimal requirements.</p>
                    <h2 class="fs-2 fw-bold my-3">$0</h2>
                    <p class="fs-6 text-secondary">Cancel anytime.<br>7-day money-back guarantee.</p>
                    <a href="#" class="btn btn-primary rounded-pill w-100 p-2">Get Started</a>
                    <ul class="text-start mt-4 fs-6 text-dark list-unstyled p-0">
                        <li class="fs-6"><i class="fas fa-check text-success me-2"></i>Personal Module with 50MB of
                            storage</li>
                        <li class="fs-6"><i class="fas fa-check text-success me-2"></i>Basic task management features
                        </li>
                        <li class="fs-6"><i class="fas fa-check text-success me-2"></i>Task stacking and prioritization
                        </li>
                        <li class="fs-6"><i class="fas fa-check text-success me-2"></i>Calendar integration</li>
                        <li class="fs-6"><i class="fas fa-check text-success me-2"></i>Basic notifications and updates
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- Plan 2: Basic Plan -->
        <div class="col-md-4">
            <div class="card pricing-card">
                <div class="card-body text-center">
                    <h4 class="fw-bold">Basic Plan</h4>
                    <p class="fs-6 text-muted">Best for small teams or freelancers needing additional storage and team
                        collaboration features.</p>
                    <h2 class="fs-2 fw-bold my-3">$9.99/month</h2>
                    <p class="fs-6 text-secondary">Cancel anytime.<br>7-day money-back guarantee.</p>
                    <a href="#" class="btn btn-success rounded-pill w-100 p-2">Get Started</a>
                    <ul class="text-start mt-4 fs-6 text-dark list-unstyled p-0">
                        <li class="fs-6"><i class="fas fa-check text-success me-2"></i>Everything in the Free Plan</li>
                        <li class="fs-6"><i class="fas fa-check text-success me-2"></i>1GB of additional storage</li>
                        <li class="fs-6"><i class="fas fa-check text-success me-2"></i>Enhanced task management and
                            labels</li>
                        <li class="fs-6"><i class="fas fa-check text-success me-2"></i>Advanced calendar integration
                        </li>
                        <li class="fs-6"><i class="fas fa-check text-success me-2"></i>Basic team collaboration tools
                        </li>
                        <li class="fs-6"><i class="fas fa-check text-success me-2"></i>Email support</li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- Plan 3: Pro Plan -->
        <div class="col-md-4">
            <div class="card pricing-card">
                <div class="card-body text-center">
                    <h4 class="fw-bold">Pro Plan</h4>
                    <!-- <span class="badge bg-primary fs-7 mb-2">MOST POPULAR</span> -->
                    <p class="fs-6 text-muted">Best for growing teams requiring detailed reporting, enhanced
                        collaboration, and role management.</p>
                    <h2 class="fs-2 fw-bold my-3">$29.99/month</h2>
                    <p class="fs-6 text-secondary">Cancel anytime.<br>7-day money-back guarantee.</p>
                    <a href="#" class="btn btn-primary rounded-pill w-100 p-2">Get Started</a>
                    <ul class="text-start mt-4 fs-6 text-dark list-unstyled p-0">
                        <li class="fs-6"><i class="fas fa-check text-success me-2"></i>Everything in the Basic Plan</li>
                        <li class="fs-6"><i class="fas fa-check text-success me-2"></i>5GB of additional storage</li>
                        <li class="fs-6"><i class="fas fa-check text-success me-2"></i>Advanced reporting and analytics
                        </li>
                        <li class="fs-6"><i class="fas fa-check text-success me-2"></i>Priority support</li>
                        <li class="fs-6"><i class="fas fa-check text-success me-2"></i>Advanced team collaboration tools
                        </li>
                        <li class="fs-6"><i class="fas fa-check text-success me-2"></i>Role management and permissions
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End List Of Pricing Plans -->


<!-- Image for pricing -->
<div class="container p-0">
    <img src="<?php bloginfo('template_directory'); ?>/img/pricing_plans/compare_plan.jpg"
        alt="Full Screen Image" class="img-fluid">
</div>
<!-- ENd Image for pricing -->



<!-- Find the Right Plan Section -->
<div class="container-fluid py-5 text-center bg-white wow fadeIn" data-wow-delay="0.3s">
    <div class="container">
        <h4 class="mb-4">Find the Right Plan for You</h4>
        <p>
            Whether you’re an individual, a small team, or a large organization, TaskTrakHub has a plan that fits your needs. 
            Compare the plans above to see which one offers the features and benefits that align with your requirements. With TaskTrakHub, you get tailored solutions that scale with your growth, helping you stay on track with task and project management. Each plan offers a variety of tools to improve collaboration, track progress, and boost productivity. Choose the one that aligns with your goals, and experience the power of seamless workflow management, enhanced team coordination, and real-time updates.
        </p>
        <div class="mt-4">
            <h4>Ready to Choose Your Plan?</h4>
            <p>Select the plan that best suits your needs and start optimizing your task and project management with TaskTrakHub today. Enjoy advanced features and unlimited support to help you succeed.</p>
            <a href="#pricing" class="btn btn-primary px-4 py-2">View Plans</a>
        </div>
    </div>
</div>
<!-- End of Section -->





<?php
// get_sidebar();
get_footer();
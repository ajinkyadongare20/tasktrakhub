<?php
/**
 * The main template file
 * Template Name: Pricing Plans
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


<!-- Pricing Plans -->
<div class="container-fluid bg-light py-5 wow fadeIn" data-wow-delay="0.3s">
    <h2 class="text-center mb-4">Explore Plans & Pricing</h2>
    <div class="row">
        <div class="col-12 px-5">
            <p>Discover the ideal plan with TaskTrak Hub, tailored for individuals, teams, and enterprises. Our flexible
                pricing ensures that you get the best value, whether you need a simple task manager or a full-scale
                project tracking solution.</p>

            <p>Choose from our feature-packed plans designed to streamline your workflow, boost collaboration, and
                enhance productivity. Enjoy seamless task scheduling, calendar integration, and real-time updates, all
                within a user-friendly platform.</p>

            <p>With scalable options, you can upgrade as your needs grow, ensuring continuous efficiency and innovation.
                TaskTrak Hub empowers businesses of all sizes to optimize time and resources effortlessly.</p>

            <p>Explore our plans today and take control of your projects with confidence. Let TaskTrak Hub be your
                trusted partner in efficient task management.</p>
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
        <!-- Plan 1 -->
        <div class="col-md-4">
            <div class="card pricing-card">
                <div class="card-body text-center">
                    <h4 class="fw-bold">Free Personal Module</h4>
                    <p class="fs-6 text-muted">Perfect for small teams just getting started with task management.</p>
                    <h2 class="fs-2 fw-bold my-3">Free</h2>
                    <p class="fs-6 text-secondary">Cancel anytime.<br>7-day money-back guarantee.</p>
                    <a href="#" class="btn btn-success rounded-pill w-100 p-2">Get Started</a>
                    <ul class="text-start mt-4 fs-6 text-dark list-unstyled p-0">
                        <li class="fs-6"><i class="fas fa-check text-success me-2"></i>Task creation and assignment</li>
                        <li class="fs-6"><i class="fas fa-check text-success me-2"></i>Basic reporting tools</li>
                        <li class="fs-6"><i class="fas fa-check text-success me-2"></i>Unlimited task tracking</li>
                        <li class="fs-6"><i class="fas fa-check text-success me-2"></i>Email notifications</li>
                        <li class="fs-6"><i class="fas fa-check text-success me-2"></i>1 team workspace</li>
                        <li class="fs-6"><i class="fas fa-check text-success me-2"></i>Support via chat</li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- Plan 2 -->
        <div class="col-md-4">
            <div class="card pricing-card">
                <div class="card-body text-center">
                    <h4 class="fw-bold">Professional Plan</h4>
                    <span class="badge bg-primary fs-7 mb-2">MOST POPULAR</span>
                    <p class="fs-6 text-muted">Ideal for growing teams needing advanced tools and
                        collaboration.</p>
                    <h2 class="fs-2 fw-bold my-3">$15/month</h2>
                    <p class="fs-6 text-muted">Cancel anytime.<br>7-day money-back guarantee.</p>
                    <a href="#" class="btn btn-primary rounded-pill w-100 p-2">Get Started</a>
                    <ul class="text-start mt-4 fs-6 text-dark list-unstyled p-0">
                        <li class="fs-6"><i class="fas fa-check text-success me-2"></i>Advanced task automation</li>
                        <li class="fs-6"><i class="fas fa-check text-success me-2"></i>Detailed project reports</li>
                        <li class="fs-6"><i class="fas fa-check text-success me-2"></i>Unlimited workspaces</li>
                        <li class="fs-6"><i class="fas fa-check text-success me-2"></i>Priority email support</li>
                        <li class="fs-6"><i class="fas fa-check text-success me-2"></i>Custom integrations</li>
                        <li class="fs-6"><i class="fas fa-check text-success me-2"></i>Slack and Teams integration</li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- Plan 3 -->
        <div class="col-md-4">
            <div class="card pricing-card">
                <div class="card-body text-center">
                    <h4 class="fw-bold">Business Plan</h4>
                    <p class="fs-6 text-muted">The ultimate solution for large organizations and agencies.</p>
                    <h2 class="fs-2 fw-bold my-3">$30/month</h2>
                    <p class="fs-6 text-secondary">Cancel anytime.<br>7-day money-back guarantee.</p>
                    <a href="#" class="btn btn-success rounded-pill w-100 p-2">Get Started</a>
                    <ul class="text-start mt-4 fs-6 text-dark list-unstyled p-0">
                        <li class="fs-6"><i class="fas fa-check text-success me-2"></i>Dedicated account manager</li>
                        <li class="fs-6"><i class="fas fa-check text-success me-2"></i>Custom onboarding & training</li>
                        <li class="fs-6"><i class="fas fa-check text-success me-2"></i>Unlimited task & project tracking
                        </li>
                        <li class="fs-6"><i class="fas fa-check text-success me-2"></i>Advanced security features</li>
                        <li class="fs-6"><i class="fas fa-check text-success me-2"></i>API access for integration</li>
                        <li class="fs-6"><i class="fas fa-check text-success me-2"></i>Team productivity analytics</li>
                        <li class="fs-6"><i class="fas fa-check text-success me-2"></i>Premium 24/7 support</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End List Of Pricing Plans -->


<!-- Image for pricing -->
<div class="container p-0">
    <img src="<?php bloginfo('template_directory'); ?>/img/pricing_plans/prcing_table_content.jpg"
        alt="Full Screen Image" class="img-fluid">
</div>
<!-- ENd Image for pricing -->



<?php
// get_sidebar();
get_footer();
<?php
/**
 * The main template file
 * Template Name: Copyright
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
                <h2 class="text-center text-primary mb-4">Copyright Notice</h2>
                <p class="text-center text-muted">&copy; 2024 TaskTrakHub. All Rights Reserved.<br><strong>A product
                        by Leal Software Solution Pvt Ltd</strong></p>
                <hr>
                <h4 class="text-dark">Intellectual Property Rights</h4>
                <p class="text-secondary">All content, features, functionality, and software on this website and
                    within the TaskTrakHub application, including but not limited to text, graphics, logos, icons,
                    images, user interfaces, audio, video, code, and software, are the exclusive property of Leal
                    Software Solution Pvt Ltd or its content creators...</p>
                <h4 class="text-dark">Trademarks</h4>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item"> <strong>TaskTrakHub</strong> and its logo are trademarks of Leal
                        Software Solution Pvt Ltd.</li>
                    <li class="list-group-item"> All other trademarks, service marks, and logos used on this site
                        are the property of their respective owners.</li>
                </ul>
                <h4 class="text-dark mt-4">Third-Party Content</h4>
                <p class="text-secondary">Some features or services may include content or code from third
                    parties...</p>
                <h4 class="text-dark">Use of Content</h4>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item"> Republishing material from TaskTrakHub is not allowed.</li>
                    <li class="list-group-item"> Commercial exploitation of content is strictly prohibited.</li>
                </ul>
                <h4 class="text-dark mt-4">Copyright Infringement & DMCA Compliance</h4>
                <p class="text-secondary">If you believe that any content on TaskTrakHub infringes on your
                    copyright, please contact us at:</p>
                <div class="p-3 bg-light border rounded">
                    <p class="mb-0"><strong>Email:</strong> <a href="mailto:copyright@tasktrakhub.com"
                            class="text-decoration-none">copyright@tasktrakhub.com</a></p>
                </div>
                <h4 class="text-dark mt-4">Contact Information</h4>
                <p class="text-secondary">If you have any questions regarding our copyright policy, please reach out
                    to:</p>
                <div class="p-3 bg-light border rounded">
                    <p class="mb-0"><strong>Email:</strong> <a href="mailto:info@tasktrakhub.com"
                            class="text-decoration-none">info@tasktrakhub.com</a> | <a
                            href="mailto:info@lealsolution.com" class="text-decoration-none">info@lealsolution.com</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Copyright Section -->


<?php
// get_sidebar();
get_footer();
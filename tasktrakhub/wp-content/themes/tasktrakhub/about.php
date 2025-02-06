<?php
/**
 * The main template file
 * Template Name: About
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


<!-- About TaskTrak Hub -->
<div class="container-fluid py-5 wow fadeIn" data-wow-delay="0.3s">
    <h2 class="text-center mb-4">ABOUT TaskTrak Hub</h2>
    <div class="row">
        <div class="col-12 px-5">
            <p>TaskTrak Hub is a leading provider of integrated task and calendar management solutions, designed to
                enhance productivity and streamline workflows. By leveraging cutting-edge technology, we offer an
                intuitive and efficient platform that empowers individuals and teams to stay organized, collaborate
                effectively, and achieve their goals seamlessly.</p>

            <p>Founded with a vision to revolutionize task management, TaskTrak Hub is committed to delivering
                innovative solutions that cater to a wide range of industries. Our mission is to provide a comprehensive
                system that simplifies complex workflows, fosters transparency, and drives operational efficiency across
                various business domains.</p>

            <p>At TaskTrak Hub, we prioritize user experience and continuous innovation. Our platform integrates
                seamlessly with existing business processes, ensuring effortless task scheduling, collaboration, and
                project tracking. Whether for personal productivity or enterprise-scale management, TaskTrak Hub adapts
                to diverse needs, making task execution smoother and more effective.</p>

            <p>We envision a future where businesses and individuals optimize their time and resources effortlessly.
                With TaskTrak Hub, our goal is to be a trusted partner in digital task management, enabling
                organizations to scale efficiently while maintaining agility and precision in execution.</p>
        </div>
    </div>
</div>
<!-- End About TaskTrak Hub -->



<!-- Start Missin, Vision and Values -->
<div class="container my-5">
    <h5 class="fs-2 fw-bold text-center">Our Mission, Vision & Values</h5>
    <div class="row row-cols-1 row-cols-md-3 g-4 py-5">

        <!-- Mission Card -->
        <div class="col position-relative">
            <div class="corner-decorator"></div>
            <div class="corner-decorator1"></div>
            <div class="card shadow card-index-col p-4">
                <h5 class="card-title fw-bold">Our Mission</h5>
                <p class="card-text">
                    At TaskTrakHub, our mission is to empower individuals and businesses by providing an intuitive
                    and efficient platform that enhances productivity, collaboration, and innovation.
                </p>
                <ul class="list-unstyled">
                    <li><span class="dot-circle"></span> <strong>Enhance Productivity:</strong> Enable efficient task
                        and event management to improve organization.</li>
                    <li><span class="dot-circle"></span> <strong>Promote Collaboration:</strong> Foster seamless
                        teamwork through integrated task management and scheduling.</li>
                    <li><span class="dot-circle"></span> <strong>Deliver Innovation:</strong> Continuously evolve our
                        platform to stay ahead in the industry.</li>
                </ul>
            </div>
        </div>

        <!-- Vision Card -->
        <div class="col position-relative">
            <div class="corner-decorator"></div>
            <div class="corner-decorator1"></div>
            <div class="card shadow card-index-col p-4">
                <h5 class="card-title fw-bold">Our Vision</h5>
                <p class="card-text">
                    Our vision is to be a global leader in technology-driven solutions, fostering digital transformation
                    and setting new industry standards. We aim to create a future where businesses seamlessly adapt
                    to changing landscapes with cutting-edge tools and strategies.
                </p>
                <ul class="list-unstyled">
                    <li><span class="dot-circle"></span> <strong>Future-Ready:</strong> Anticipating industry shifts to
                        stay ahead.</li>
                    <li><span class="dot-circle"></span> <strong>Sustainability:</strong> Driving long-term growth with
                        responsible solutions.</li>
                    <li><span class="dot-circle"></span> <strong>Innovation Leadership:</strong> Shaping the future of
                        task and project management.</li>
                </ul>
            </div>
        </div>

        <!-- Values Card -->
        <div class="col position-relative">
            <div class="corner-decorator"></div>
            <div class="corner-decorator1"></div>
            <div class="card shadow card-index-col p-4">
                <h5 class="card-title fw-bold">Our Values</h5>
                <p class="card-text">
                    Our values define our commitment to excellence and guide our journey in delivering top-notch
                    solutions.
                </p>
                <ul class="list-unstyled">
                    <li><span class="dot-circle"></span> <strong>Customer-Centricity:</strong> We prioritize user needs
                        to tailor our solutions effectively.</li>
                    <li><span class="dot-circle"></span> <strong>Integrity:</strong> We uphold honesty and transparency
                        in all our business practices.</li>
                    <li><span class="dot-circle"></span> <strong>Innovation:</strong> We embrace creativity to develop
                        cutting-edge solutions.</li>
                    <li><span class="dot-circle"></span> <strong>Excellence:</strong> We deliver high-quality products
                        and services beyond industry standards.</li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- End Missin, Vision and Values -->




<?php
// get_sidebar();
get_footer();
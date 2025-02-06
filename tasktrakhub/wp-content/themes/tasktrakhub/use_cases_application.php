<?php
/**
 * The main template file
 * Template Name: Industry Solution
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
<div class="container-fluid bg-light py-5 wow fadeIn" data-wow-delay="0.3s">
    <h2 class="text-center mb-4">Industry-Specific Solutions</h2>
    <div class="row">
        <div class="col-12 px-5" style="line-height:30px">
            <p>At TaskTrakHub, we recognize that every industry has unique challenges when it comes to task and calendar
                management. Our platform offers tailored solutions designed to meet the specific demands of various
                sectors. Discover how TaskTrakHub can enhance productivity, improve collaboration, and streamline
                workflows in your industry</p>

            <p>Efficient task management is critical in healthcare to ensure smooth operations and patient care.
                TaskTrakHub provides automated scheduling for appointments and shifts, secure collaboration for medical
                teams, and compliance tracking with document management to maintain regulatory.</p>

            <p>TaskTrakHub helps educators, students, and administrators stay organized by offering class schedule
                management, assignment tracking, faculty collaboration, and seamless integration with learning
                management systems to enhance the educational experience.</p>

            <p>Financial institutions benefit from TaskTrakHub's automated reminders for compliance deadlines, client
                meeting scheduling, portfolio tracking, secure document sharing, and efficient task delegation, ensuring
                regulatory adherence and operational efficiency.</p>
            <p>Technology and IT services rely on agile workflows and efficient project management. TaskTrakHub supports
                sprint planning, backlog management, bug tracking, and team collaboration on code reviews with
                integration into development tools to streamline execution.</p>
        </div>
    </div>
</div>
<!-- End About TaskTrak Hub -->



<div class="container py-5">
    <h5 class="fs-2 text-center text-dark pb-5">Our Approach to help uplift your business</h5>
    <div class="row mt-4">
        <!-- Left Side Menu -->
        <div class="col-md-5">
            <button class="btn text-start text-dark fw-bold" data-bs-toggle="collapse" data-bs-target="#healthcare"
                onclick="toggleCollapse('healthcare')">Healthcare Management</button>
            <hr class="hr-line">
            <button class="btn text-start text-dark fw-bold" data-bs-toggle="collapse" data-bs-target="#construction"
                onclick="toggleCollapse('construction')">Construction Projects</button>
            <hr class="hr-line">
            <button class="btn text-start text-dark fw-bold" data-bs-toggle="collapse" data-bs-target="#education"
                onclick="toggleCollapse('education')">Education System</button>
            <hr class="hr-line">
            <button class="btn text-start text-dark fw-bold" data-bs-toggle="collapse" data-bs-target="#retail"
                onclick="toggleCollapse('retail')">Retail Operations</button>
            <hr class="hr-line">
            <button class="btn text-start text-dark fw-bold" data-bs-toggle="collapse" data-bs-target="#realestate"
                onclick="toggleCollapse('realestate')">Real Estate Solutions</button>
            <hr class="hr-line">
            <button class="btn text-start text-dark fw-bold" data-bs-toggle="collapse"
                data-bs-target="#financialservices" onclick="toggleCollapse('financialservices')">Financial
                Services</button>
            <hr class="hr-line">
            <button class="btn text-start text-dark fw-bold" data-bs-toggle="collapse" data-bs-target="#technology"
                onclick="toggleCollapse('technology')">Technology Development</button>
            <hr class="hr-line">
            <button class="btn text-start text-dark fw-bold" data-bs-toggle="collapse" data-bs-target="#nonprofit"
                onclick="toggleCollapse('nonprofit')">Nonprofit Organizations</button>
        </div>

        <!-- Right Side Content Display -->
        <div class="col-md-7">
            <div class="collapse show text-center" id="healthcare">
                <img src="<?php bloginfo('template_directory'); ?>/img/industry_solution/1.png"
                    alt="Healthcare" class="img-fluid"
                    style="max-width: 100%; height: auto; box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.2);">
                <ul class="py-3 text-start text-dark" style="line-height:30px; padding-left: 15px;">
                    <li>Manage appointments, follow-ups, and consultations seamlessly. Coordinate with medical staff and
                        track patient care efficiently.</li>
                    <li>Assign tasks to healthcare professionals and monitor progress to ensure timely and accurate
                        care.</li>
                    <li>Keep track of regulatory requirements and generate reports to stay compliant with healthcare
                        standards.</li>
                </ul>
            </div>
            <div class="collapse text-center" id="construction">
                <img src="<?php bloginfo('template_directory'); ?>/img/industry_solution/2.png" alt="Construction"
                    style="max-width: 100%; height: auto; box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.2);">
                <ul class="py-3 text-start text-dark" style="line-height:30px; padding-left: 15px;">
                    <li>Project Management Oversee construction projects with detailed task
                        assignments, deadlines, and progress tracking.</li>
                    <li>Resource Allocation Manage resources, schedules, and subcontractors
                        effectively to ensure project milestones are met.</li>
                    <li>Documentation Attach and organize important documents, blueprints, and permits
                        for easy access and reference.</li>
                </ul>
            </div>
            <div class="collapse text-center" id="education">
                <img src="<?php bloginfo('template_directory'); ?>/img/industry_solution/3.png" alt="Education"
                    style="max-width: 100%; height: auto; box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.2);">
                <ul class="py-3 text-start text-dark" style="line-height:30px; padding-left: 15px;">
                    <li>Class Scheduling Organize class schedules, meetings, and academic events.
                        Coordinate with teachers, students, and staff efficiently.</li>
                    <li>Assignment Tracking Assign and track student assignments, grades, and feedback
                        in one place.</li>
                    <li>Event Management Plan and manage school events, parent-teacher meetings, and
                        extracurricular activities.</li>
                </ul>
            </div>
            <div class="collapse text-center" id="retail">
                <img src="<?php bloginfo('template_directory'); ?>/img/industry_solution/8.png" alt="Retail"
                    style="max-width: 100%; height: auto; box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.2);">
                <ul class="py-3 text-start text-dark" style="line-height:30px; padding-left: 15px;">
                    <li>Inventory Management Track inventory levels, stock replenishment, and vendor
                        orders. Ensure smooth inventory operations and minimize stockouts.</li>
                    <li>Sales and Promotions Schedule and manage sales events, promotions, and
                        marketing campaigns. Monitor their effectiveness and impact.</li>
                    <li>Staff Scheduling Manage employee shifts, schedules, and tasks to optimize
                        workforce efficiency and customer service.</li>
                </ul>
            </div>
            <div class="collapse text-center" id="realestate">
                <img src="<?php bloginfo('template_directory'); ?>/img/industry_solution/4.png" alt="Real Estate"
                    style="max-width: 100%; height: auto; box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.2);">
                <ul class="py-3 text-start text-dark" style="line-height:30px; padding-left: 15px;">
                    <li>Property Listings Organize property listings, client interactions, and viewing
                        schedules. Keep track of offers, negotiations, and closings.</li>
                    <li>Client Management Assign tasks related to client communications, property
                        searches, and follow-ups.</li>
                    <li>Marketing Campaigns Plan and execute marketing campaigns for property sales
                        and rentals. Monitor campaign performance and ROI.</li>
                </ul>
            </div>
            <div class="collapse text-center" id="financialservices">
                <img src="<?php bloginfo('template_directory'); ?>/img/industry_solution/5.png" alt="Financial Services"
                    style="max-width: 100%; height: auto; box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.2);">
                <ul class="py-3 text-start text-dark" style="line-height:30px; padding-left: 15px;">
                    <li>Client Appointments Schedule and manage client meetings, consultations, and
                        financial reviews.</li>
                    <li>Task Coordination Assign and track tasks related to financial planning,
                        audits, and regulatory compliance.</li>
                    <li>Report Generation Generate financial reports, performance metrics, and
                        compliance documentation efficiently.</li>
                </ul>
            </div>
            <div class="collapse text-center" id="technology">
                <img src="<?php bloginfo('template_directory'); ?>/img/industry_solution/6.png" alt="Technology"
                    style="max-width: 100%; height: auto; box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.2);">
                <ul class="py-3 text-start text-dark" style="line-height:30px; padding-left: 15px;">
                    <li>Project Development Manage software development projects, track milestones,
                        and coordinate with development teams.</li>
                    <li>Bug Tracking Assign and monitor bug reports, feature requests, and updates to
                        ensure smooth software releases.</li>
                    <li>Client Collaboration Provide clients with read-only access to project progress
                        and updates, enhancing transparency and communication.</li>
                </ul>
            </div>
            <div class="collapse text-center" id="nonprofit">
                <img src="<?php bloginfo('template_directory'); ?>/img/industry_solution/7.png"
                    alt="Nonprofit Organizations"
                    style="max-width: 100%; height: auto; box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.2);">
                <ul class="py-3 text-start text-dark" style="line-height:30px; padding-left: 15px;">
                    <li>Fundraising Events Organize and manage fundraising events, campaigns, and
                        volunteer activities.</li>
                    <li>Donor Management Track donor interactions, donations, and follow-ups to
                        maintain strong relationships.</li>
                    <li>Program Management Coordinate and track the progress of various programs and
                        initiatives.</li>
                </ul>
            </div>
        </div>
    </div>
</div>



<div class="container-fluid bg-light py-5" style="display: flex; justify-content: center; align-items: center;">
    <div class="text-center">
        <p class="text-danger fs-6">Ready to Transform Your Industry?</p>
        <h5 class="text-dark fw-bold">TaskTrakHub is designed to help you streamline tasks</h5>
        <button class="btn btn-primary px-4 py-2 mt-3 rounded-3 fw-bold">Sign Up Now</button>
    </div>
</div>




<?php
// get_sidebar();
get_footer();
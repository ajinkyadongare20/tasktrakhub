<?php
/**
 * The main template file
 * Template Name: Use Cases Application
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
    <h2 class="text-center mb-4">Use Cases and Applications</h2>
    <div class="row">
        <div class="col-12 px-5" style="line-height:30px">
            <p>TaskTrakHub is designed to be a versatile solution for managing tasks and events across various contexts.
                Explore how our platform can be applied to different scenarios to enhance productivity and streamline
                workflows.</p>

            <p>Healthcare professionals can leverage TaskTrakHub for efficient task management, ensuring smooth
                operations and patient care. The platform provides automated scheduling for appointments and shifts,
                secure collaboration for medical teams, and compliance tracking with document management.</p>

            <p>Educators, students, and administrators can stay organized with TaskTrakHub by managing class schedules,
                tracking assignments, enabling faculty collaboration, and integrating seamlessly with learning
                management systems to enhance the educational experience.</p>

            <p>Financial professionals can benefit from TaskTrakHub's automated reminders for compliance deadlines,
                client meeting scheduling, portfolio tracking, secure document sharing, and efficient task delegation,
                ensuring regulatory adherence and operational efficiency.</p>

            <p>Technology and IT teams rely on agile workflows and efficient project management. TaskTrakHub supports
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
            <button class="btn text-start text-dark fw-bold" data-bs-toggle="collapse"
                data-bs-target="#projectmanagement" onclick="toggleCollapse('projectmanagement')">Project
                Management</button>
            <hr class="hr-line">
            <button class="btn text-start text-dark fw-bold" data-bs-toggle="collapse" data-bs-target="#eventplanning"
                onclick="toggleCollapse('eventplanning')">Event Planning</button>
            <hr class="hr-line">
            <button class="btn text-start text-dark fw-bold" data-bs-toggle="collapse"
                data-bs-target="#personalproductivity" onclick="toggleCollapse('personalproductivity')">Personal
                Productivity</button>
            <hr class="hr-line">
            <button class="btn text-start text-dark fw-bold" data-bs-toggle="collapse"
                data-bs-target="#corporateadministration" onclick="toggleCollapse('corporateadministration')">Corporate
                Administration</button>
            <hr class="hr-line">
            <button class="btn text-start text-dark fw-bold" data-bs-toggle="collapse"
                data-bs-target="#clientmanagement" onclick="toggleCollapse('clientmanagement')">Client and Customer
                Management</button>
            <hr class="hr-line">
            <button class="btn text-start text-dark fw-bold" data-bs-toggle="collapse"
                data-bs-target="#educationtraining" onclick="toggleCollapse('educationtraining')">Education and
                Training</button>
            <hr class="hr-line">
            <button class="btn text-start text-dark fw-bold" data-bs-toggle="collapse" data-bs-target="#salesmarketing"
                onclick="toggleCollapse('salesmarketing')">Sales and Marketing</button>
            <hr class="hr-line">
            <button class="btn text-start text-dark fw-bold" data-bs-toggle="collapse" data-bs-target="#businessadmin"
                onclick="toggleCollapse('businessadmin')">Business Administration</button>
        </div>

        <!-- Right Side Content Display -->
        <div class="col-md-7">
            <!-- Project Management -->
            <div class="collapse show text-center" id="projectmanagement">
                <img src="<?php bloginfo('template_directory'); ?>/img/solution/use_cases_application/1.png"
                    alt="Project Management" class="img-fluid"
                    style="max-width: 100%; height: auto; box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.2);">
                <ul class="py-3 text-start text-dark" style="line-height:30px; padding-left: 15px;">
                    <li>Team Coordination: Assign tasks to team members, set deadlines, and track progress in real-time.
                        Ensure that every team member is aligned and informed.</li>
                    <li>Milestone Tracking: Monitor project milestones and deadlines with visual timelines and
                        reminders. Keep projects on track and meet key deliverables.</li>
                    <li>Document Sharing: Attach project-related documents, notes, and files directly to tasks and
                        events for easy access and collaboration.</li>
                </ul>
            </div>

            <!-- Event Planning -->
            <div class="collapse text-center" id="eventplanning">
                <img src="<?php bloginfo('template_directory'); ?>/img/solution/use_cases_application/2.png"
                    alt="Event Planning"
                    style="max-width: 100%; height: auto; box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.2);">
                <ul class="py-3 text-start text-dark" style="line-height:30px; padding-left: 15px;">
                    <li>Event Scheduling: Plan and schedule events, meetings, and appointments. Send invitations and
                        track RSVPs to ensure smooth execution.</li>
                    <li>Task Delegation: Assign tasks related to event preparation, such as venue booking, catering, and
                        guest management.</li>
                    <li>Reminder Alerts: Set reminders and notifications for critical event deadlines and milestones to
                        keep everything on track.</li>
                </ul>
            </div>

            <!-- Personal Productivity -->
            <div class="collapse text-center" id="personalproductivity">
                <img src="<?php bloginfo('template_directory'); ?>/img/solution/use_cases_application/3.png"
                    alt="Personal Productivity"
                    style="max-width: 100%; height: auto; box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.2);">
                <ul class="py-3 text-start text-dark" style="line-height:30px; padding-left: 15px;">
                    <li>Daily Task Management: Organize and prioritize your daily tasks with ease. Use labels and
                        categories to keep track of different types of tasks and activities.</li>
                    <li>Calendar Integration: Sync your tasks and events with your calendar to get a comprehensive view
                        of your schedule and deadlines.</li>
                    <li>Goal Setting: Set personal goals and track progress with customized task lists and reminders to
                        stay motivated and focused.</li>
                </ul>
            </div>

            <!-- Corporate Administration -->
            <div class="collapse text-center" id="corporateadministration">
                <img src="<?php bloginfo('template_directory'); ?>/img/solution/use_cases_application/4.png"
                    alt="Corporate Administration"
                    style="max-width: 100%; height: auto; box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.2);">
                <ul class="py-3 text-start text-dark" style="line-height:30px; padding-left: 15px;">
                    <li>Employee Task Management: Assign and monitor tasks for employees, track productivity, and ensure
                        timely completion of corporate goals.</li>
                    <li>Meeting Scheduling: Organize corporate meetings, conferences, and team-building activities.
                        Coordinate schedules and manage meeting agendas.</li>
                    <li>Reporting and Analytics: Generate reports on task completion, employee performance, and project
                        status to make informed administrative decisions.</li>
                </ul>
            </div>

            <!-- Client and Customer Management -->
            <div class="collapse text-center" id="clientmanagement">
                <img src="<?php bloginfo('template_directory'); ?>/img/solution/use_cases_application/5.png"
                    alt="Client and Customer Management"
                    style="max-width: 100%; height: auto; box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.2);">
                <ul class="py-3 text-start text-dark" style="line-height:30px; padding-left: 15px;">
                    <li>Client Projects: Manage client projects, assign tasks, and track progress to ensure client
                        satisfaction and timely delivery of services.</li>
                    <li>Customer Follow-Ups: Schedule and track follow-up tasks for customer inquiries, support
                        requests, and feedback.</li>
                    <li>Client Access: Provide clients with read-only access to project progress and updates, fostering
                        transparency and communication.</li>
                </ul>
            </div>

            <!-- Education and Training -->
            <div class="collapse text-center" id="educationtraining">
                <img src="<?php bloginfo('template_directory'); ?>/img/solution/use_cases_application/6.png"
                    alt="Education and Training"
                    style="max-width: 100%; height: auto; box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.2);">
                <ul class="py-3 text-start text-dark" style="line-height:30px; padding-left: 15px;">
                    <li>Course Management: Organize and manage course schedules, assignments, and academic events.
                        Coordinate with students and faculty efficiently.</li>
                    <li>Training Programs: Plan and track training sessions, workshops, and seminars. Monitor
                        participation and track training progress.</li>
                    <li>Student Assignments: Assign and review student assignments, projects, and assessments, and
                        provide feedback and grades.</li>
                </ul>
            </div>

            <!-- Sales and Marketing -->
            <div class="collapse text-center" id="salesmarketing">
                <img src="<?php bloginfo('template_directory'); ?>/img/solution/use_cases_application/7.png"
                    alt="Sales and Marketing"
                    style="max-width: 100%; height: auto; box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.2);">
                <ul class="py-3 text-start text-dark" style="line-height:30px; padding-left: 15px;">
                    <li>Campaign Management: Plan, schedule, and manage marketing campaigns, promotional activities, and
                        sales events. Track campaign performance and ROI.</li>
                    <li>Lead Tracking: Assign and monitor tasks related to lead generation, follow-ups, and sales
                        conversions.</li>
                    <li>Performance Metrics: Generate reports and analyze performance metrics to optimize sales
                        strategies and marketing efforts.</li>
                </ul>
            </div>

            <!-- Business Administration -->
            <div class="collapse text-center" id="businessadmin">
                <img src="<?php bloginfo('template_directory'); ?>/img/solution/use_cases_application/8.png"
                    alt="Business Administration"
                    style="max-width: 100%; height: auto; box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.2);">
                <ul class="py-3 text-start text-dark" style="line-height:30px; padding-left: 15px;">
                    <li>Operational Management: Ensures smooth daily business activities and workflow optimization.</li>
                    <li>Financial Management: Involves budgeting, financial planning, and investment strategies.</li>
                    <li>Strategic Planning: Develops business strategies for expansion and market competitiveness.</li>
                </ul>
            </div>
        </div>
    </div>
</div>


<!-- A Code for Sign Up Now -->
<div class="container-fluid bg-light py-5" style="display: flex; justify-content: center; align-items: center;">
    <div class="text-center">
        <p class="text-danger fs-6">Ready to Transform Your Industry?</p>
        <h5 class="text-dark fw-bold">TaskTrakHub is designed to help you streamline tasks</h5>
        <button class="btn btn-primary px-4 py-2 mt-3 rounded-3 fw-bold">Sign Up Now</button>
    </div>
</div>
<!-- Code end for sign up now -->




<?php
// get_sidebar();
get_footer();
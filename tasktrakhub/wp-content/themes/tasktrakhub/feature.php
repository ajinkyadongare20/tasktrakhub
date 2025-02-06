<?php
/**
 * The main template file
 * Template Name: Feature
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
<div class="container-fluid p-5 wow fadeIn" data-wow-delay="0.3s">
    <h2 class="text-center mb-4">HOW TASKTRAK HUB WORKS</h2>
    <div class="row">
        <div class="col-12 px-5">
            <p>TaskTrak Hub simplifies task and calendar management by integrating tasks and events into a unified view,
                enhancing productivity and organization. Our platform offers a seamless workflow for both individuals
                and businesses.</p>

            <!-- <h5>1. Sign Up & Get Started</h5> -->
            <p>Register for a free account with 50MB storage in the Personal module or upgrade to the Company module for
                more features. Customize your profile with personal and company details to manage tasks and events
                efficiently.</p>

            <!-- <h5>2. Dashboard Overview</h5> -->
            <p>Access a unified dashboard that stacks all tasks and events in one place, eliminating the need to switch
                views. Easily add, edit, and categorize tasks with customizable labels.</p>

            <!-- <h5>3. Task Management</h5> -->
            <p>Create tasks with details like title, description, due date, and priority. Attach files or notes for
                context. Company module users can assign tasks, set deadlines, and track progress seamlessly.</p>

            <!-- <h5>4. Event Scheduling</h5> -->
            <p>Plan meetings and appointments by scheduling events with automatic calendar syncing. Get reminders and
                notifications to ensure you never miss important dates.</p>

            <!-- <h5>5. Seamless Integration & Collaboration</h5> -->
            <p>Sync TaskTrak Hub with other calendar applications for a smooth experience. In the Company module, manage
                projects across multiple teams and provide client read-only access for transparency.</p>

            <!-- <h5>6. Access & Security</h5> -->
            <p>Use TaskTrak Hub on desktop, tablet, or mobile to keep your data updated anytime, anywhere. Our advanced
                encryption ensures the security of your tasks and personal data.</p>

            <!-- <h5>7. Support & Assistance</h5> -->
            <p>Visit our Help Center for FAQs, user guides, and troubleshooting. Reach out to our support team via email
                or live chat for further assistance.</p>
        </div>
    </div>
</div>
<!-- End About TaskTrak Hub -->



<!-- Image for pricing -->
<div class="container p-5">
    <img src="<?php bloginfo('template_directory'); ?>/img/feature/how_work_tasktrakhub.jpg" alt="Full Screen Image"
        class="img-fluid">
</div>
<!-- End Image for pricing -->



<!--Key Features  -->
<div class="bg-primary myhome-container wow fadeIn" data-wow-delay="0.3s">
    <div class="opacity">
        <div class="container pb-3 pb-lg-5">
            <div class="text-center mb-5">
                <h2 class="text-white fst-italic">Key Features of TaskTrak Hub</h2>
                <p class="text-white fst-italic">Streamlining task management with innovative solutions and exceptional
                    efficiency.
                </p>
            </div>
            <div class="row g-4" id="features-container">
                <!-- First 6 divs (Always visible) -->
                <div class="col-lg-6">
                    <div class="d-flex align-items-start p-3 border key-rounded shadow-sm">
                        <div class="me-3 tasktrak-key-feature">
                            <img src="<?php bloginfo('template_directory'); ?>/img/index_tasktrak/app-development.jpg"
                                alt="Task Management Icon" style="width: 40px; height: 40px;">
                        </div>
                        <div>
                            <h5 class="mb-2">Custom Task Automation</h5>
                            <p>Design and implement custom workflows to automate repetitive tasks, improving
                                productivity and saving time.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="d-flex align-items-start p-3 border key-rounded shadow-sm">
                        <div class="me-3 tasktrak-key-feature">
                            <img src="<?php bloginfo('template_directory'); ?>/img/index_tasktrak/native.png"
                                alt="Collaboration Icon" style="width: 40px; height: 40px;">
                        </div>
                        <div>
                            <h5 class="mb-2">Team Collaboration</h5>
                            <p>Enable seamless collaboration across teams with integrated tools for task sharing,
                                updates, and real-time communication.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="d-flex align-items-start p-3 border key-rounded shadow-sm">
                        <div class="me-3 tasktrak-key-feature">
                            <img src="<?php bloginfo('template_directory'); ?>/img/index_tasktrak/software-development.png"
                                alt="Analytics Icon" style="width: 40px; height: 40px;">
                        </div>
                        <div>
                            <h5 class="mb-2">Advanced Analytics</h5>
                            <p>Track progress, monitor performance, and gain actionable insights through powerful
                                reporting and analytics tools.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="d-flex align-items-start p-3 border key-rounded shadow-sm">
                        <div class="me-3 tasktrak-key-feature">
                            <img src="<?php bloginfo('template_directory'); ?>/img/index_tasktrak/sw_conslutancy.jpg"
                                alt="Integration Icon" style="width: 40px; height: 40px;">
                        </div>
                        <div>
                            <h5 class="mb-2">Third-Party Integrations</h5>
                            <p>Seamlessly integrate with popular tools and platforms to centralize task management and
                                enhance operational efficiency.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="d-flex align-items-start p-3 border key-rounded shadow-sm">
                        <div class="me-3 tasktrak-key-feature">
                            <img src="<?php bloginfo('template_directory'); ?>/img/index_tasktrak/sw_implemention.jpg"
                                alt="Cloud Storage Icon" style="width: 40px; height: 40px;">
                        </div>
                        <div>
                            <h5 class="mb-2">Cloud Storage</h5>
                            <p>Securely store and access your data anytime, anywhere with reliable cloud storage options
                                integrated into TaskTrak Hub.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="d-flex align-items-start p-3 border key-rounded shadow-sm">
                        <div class="me-3 tasktrak-key-feature">
                            <img src="<?php bloginfo('template_directory'); ?>/img/index_tasktrak/coding.png"
                                alt="Notification Icon" style="width: 40px; height: 40px;">
                        </div>
                        <div>
                            <h5 class="mb-2">Smart Notifications</h5>
                            <p>Stay on top of deadlines, updates, task assignments, and progress tracking with real-time
                                notifications, ensuring no task or milestone is left behind.</p>
                        </div>
                    </div>
                </div>

                <!-- Additional hidden divs (to be shown on 'Read More') -->
                <div class="col-lg-6 hidden-div">
                    <div class="d-flex align-items-start p-3 border key-rounded shadow-sm">
                        <div class="me-3 tasktrak-key-feature">
                            <img src="<?php bloginfo('template_directory'); ?>/img/index_tasktrak/sw_integration.jpg"
                                alt="Feature Icon" style="width: 40px; height: 40px;">
                        </div>
                        <div>
                            <h5 class="mb-2">Task Tracking</h5>
                            <p>Track tasks from creation to completion with clear timelines, status updates, and
                                priority levels, ensuring no task is overlooked.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 hidden-div">
                    <div class="d-flex align-items-start p-3 border key-rounded shadow-sm">
                        <div class="me-3 tasktrak-key-feature">
                            <img src="<?php bloginfo('template_directory'); ?>/img/index_tasktrak/professional-success.png"
                                alt="Feature Icon" style="width: 40px; height: 40px;">
                        </div>
                        <div>
                            <h5 class="mb-2">Project Management</h5>
                            <p>Efficiently manage complex projects with integrated tools for scheduling, resource
                                allocation, and task delegation.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 hidden-div">
                    <div class="d-flex align-items-start p-3 border key-rounded shadow-sm">
                        <div class="me-3 tasktrak-key-feature">
                            <img src="<?php bloginfo('template_directory'); ?>/img/index_tasktrak/app-development.jpg"
                                alt="Feature Icon" style="width: 40px; height: 40px;">
                        </div>
                        <div>
                            <h5 class="mb-2">Employee Performance Tracking</h5>
                            <p>Monitor employee performance with detailed metrics, providing valuable insights into
                                productivity and areas for improvement.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 hidden-div">
                    <div class="d-flex align-items-start p-3 border key-rounded shadow-sm">
                        <div class="me-3 tasktrak-key-feature">
                            <img src="<?php bloginfo('template_directory'); ?>/img/index_tasktrak/sw_implemention.jpg"
                                alt="Feature Icon" style="width: 40px; height: 40px;">
                        </div>
                        <div>
                            <h5 class="mb-2">Task Prioritization</h5>
                            <p>Assign priority levels to tasks, ensuring that critical items are addressed first,
                                maximizing team productivity and minimizing delays.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 hidden-div">
                    <div class="d-flex align-items-start p-3 border key-rounded shadow-sm">
                        <div class="me-3 tasktrak-key-feature">
                            <img src="<?php bloginfo('template_directory'); ?>/img/index_tasktrak/sw_conslutancy.jpg"
                                alt="Feature Icon" style="width: 40px; height: 40px;">
                        </div>
                        <div>
                            <h5 class="mb-2">Task Reporting</h5>
                            <p>Generate comprehensive reports to track task progress, identify bottlenecks, and analyze
                                project performance in real-time.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 hidden-div">
                    <div class="d-flex align-items-start p-3 border key-rounded shadow-sm">
                        <div class="me-3 tasktrak-key-feature">
                            <img src="<?php bloginfo('template_directory'); ?>/img/index_tasktrak/software-development.png"
                                alt="Feature Icon" style="width: 40px; height: 40px;">
                        </div>
                        <div>
                            <h5 class="mb-2">Automated Task Notifications</h5>
                            <p>Receive automatic notifications when tasks are due, completed, or require updates,
                                ensuring you never miss an important update.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="text-center mt-4">
                <button id="toggle-btn" class="btn btn-light">View More</button>
            </div>
        </div>
    </div>
</div>
<!-- End Key Featured -->


<!-- Why Choose US -->
<div class="container text-start bg-light text-lg-center wow fadeIn py-5 my-5" data-wow-delay="0.3s">
    <div style="padding: 10px; max-width: 1200px; margin: auto;">
        <div>
            <h5 class="fs-2 fw-bold">Why Choose <span style="color: #007bff;">TaskTrakHub</span>?</h5>
            <p class="py-3" style="font-size: 1rem;">TaskTrakHub offers cutting-edge solutions to streamline your
                workflow and enhance productivity. Explore our features and discover how we make task management
                seamless for both personal and professional needs:</p>
        </div>
        <div style="display: flex; flex-wrap: wrap;">
            <!-- Left Column: Unified Dashboard -->
            <div style="flex: 1; min-width: 300px; padding: 10px;">
                <h6 class="fw-bold text-primary">Unified Dashboard</h6>
                <ul style="list-style-type: none; padding-left: 0; font-size: 1rem;">
                    <li class="list-item text-start"><span>&#9670;</span> <strong>Smart Task Stacking:</strong> Our
                        unique dashboard automatically arranges tasks and events based on priority and schedule, so you
                        can focus on what matters most without juggling multiple views.</li>

                    <li class="list-item text-start"><span>&#9670;</span> <strong>Personal & Company Modules:</strong>
                        Efficiently manage tasks across personal and professional domains. Switch effortlessly between
                        your personal life and multiple company profiles.</li>

                    <li class="list-item text-start"><span>&#9670;</span> <strong>Client Read-Only Access:</strong>
                        Share project updates with clients in a secure, read-only format to ensure transparency and
                        maintain control.</li>

                    <li class="list-item text-start"><span>&#9670;</span> <strong>Multi-Label Task
                            Organization:</strong> Categorize tasks with multiple labels for better organization and
                        prioritization.</li>

                    <li class="list-item text-start"><span>&#9670;</span> <strong>Seamless Calendar
                            Integration:</strong> Sync tasks with your calendar for a cohesive view of your schedule and
                        deadlines.</li>

                    <li class="list-item text-start"><span>&#9670;</span> <strong>Task Filtering:</strong> Quickly
                        filter tasks based on labels, priority, and deadlines for more efficient task management.</li>

                    <li class="list-item text-start"><span>&#9670;</span> <strong>Customizable Task Views:</strong>
                        Personalize your task display to suit your work habits and preferences.</li>

                    <li class="list-item text-start"><span>&#9670;</span> <strong>Real-Time Notifications:</strong> Get
                        real-time updates on task status, deadlines, and changes to keep you on track.</li>
                </ul>
            </div>

            <!-- Right Column: Advanced Features -->
            <div style="flex: 1; min-width: 300px; padding: 10px;">
                <h6 class="fw-bold text-primary">Advanced Features</h6>
                <ul style="list-style-type: none; padding-left: 0; font-size: 1rem;">
                    <li class="list-item text-start"><span>&#9670;</span> <strong>Multi-Device Synchronization:</strong>
                        Keep your tasks synchronized across all devices, ensuring access from anywhere at any time,
                        improving efficiency and flexibility for seamless productivity.</li>

                    <li class="list-item text-start"><span>&#9670;</span> <strong>Task Collaboration:</strong>
                        Assign tasks, track progress together, and communicate effectively for streamlined teamwork and
                        faster project completion.</li>

                    <li class="list-item text-start"><span>&#9670;</span> <strong>Smart Search:</strong> Quickly locate
                        specific tasks with our powerful search functionality that filters tasks by labels, due dates,
                        and more.</li>

                    <li class="list-item text-start"><span>&#9670;</span> <strong>Task Prioritization:</strong>
                        Prioritize tasks based on urgency and importance to focus on what matters most.</li>

                    <li class="list-item text-start"><span>&#9670;</span> <strong>Time Tracking Integration:</strong>
                        Track time spent on tasks directly within the platform to optimize productivity.</li>

                    <li class="list-item text-start"><span>&#9670;</span> <strong>Customizable Dashboards:</strong>
                        Create personalized dashboards to monitor your team's or personal task progress at a glance.
                    </li>

                    <li class="list-item text-start"><span>&#9670;</span> <strong>Cross-Platform Access:</strong> Access
                        your tasks from any device with seamless cloud synchronization.</li>

                    <li class="list-item text-start"><span>&#9670;</span> <strong>Reporting & Analytics:</strong>
                        Generate detailed reports and insights to track task completion and productivity trends.</li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- End Why Choose Us -->


<!-- CTA Section -->
<div class="my-5 text-center">
    <h5 class="fw-semibold text-secondary">Ready to Explore?</h5>
    <p class="text-muted">Experience the full range of features that TaskTrakHub offers. Our platform is designed to
        simplify your work and enhance your productivity.</p>
    <a href="#" class="btn btn-primary btn-lg mt-2">Start Your Free Trial</a>
</div>




<?php
// get_sidebar();
get_footer();
<?php
/**
 * The main template file
 * Template Name: Support
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


<!-- Support Start -->
<div class="container-fluid bg-light py-3">
    <div class="container py-3 py-sm-4 py-md-5 px-2 px-sm-3 px-md-4 px-lg-5">
        <div class="mx-auto text-center wow fadeIn" data-wow-delay="0.1s" style="max-width: 500px;">
            <h1 class="mb-4 mb-md-5">Contact Support</h1>
            <p>At TaskTrakHub, we're committed to providing exceptional support. If you have any questions or need
                assistance, our team is here to help.</p>
        </div>
        <div class="bg-white shadow p-3 p-sm-4 p-md-5">
            <div class="row g-4">
                <div class="col-lg-6">
                    <div class="bg-white shadow p-3 p-sm-4 p-md-5">
                        <h5 class="text-primary">How Can We Help You?</h5>
                        <ul>
                            <li>Technical issues or troubleshooting</li>
                            <li>Account and billing inquiries</li>
                            <li>Feature requests or feedback</li>
                            <li>General questions about TaskTrakHub</li>
                        </ul>
                        <h5 class="mt-4">Get in Touch</h5>
                        <p><strong>Email Support:</strong> support@tasktrakhub.com</p>
                        <p><strong>Live Chat:</strong> Available 9 AM - 6 PM (EST), Monday - Friday</p>
                        <p><strong>Phone Support:</strong> +1-800-123-4567</p>
                        <h5 class="mt-4">Social Media</h5>
                        <div class="d-flex gap-3">
                            <a class="btn btn-outline-primary rounded-pill"
                                href="https://www.linkedin.com/company/leal-software-solution/" target="_blank"
                                style="border-width: 1px;">
                                <i class="fab fa-linkedin"></i>
                            </a>
                            <a class="btn btn-outline-primary rounded-pill"
                                href="https://www.facebook.com/lealsolution/" target="_blank"
                                style="border-width: 1px;">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                            <a class="btn btn-outline-primary rounded-pill"
                                href="https://www.instagram.com/lealsolution/" target="_blank"
                                style="border-width: 1px;">
                                <i class="fab fa-instagram"></i>
                            </a>
                            <a class="btn btn-outline-primary rounded-pill" href="https://wa.me/7410016111"
                                target="_blank" style="border-width: 1px;">
                                <i class="fab fa-whatsapp"></i>
                            </a>
                        </div>

                        <!-- Moved Privacy Notice & Thank You Section Here -->
                        <div class="mt-4">
                            <h5>Privacy Notice</h5>
                            <p>Your privacy is important to us. The information you provide will be used solely for the
                                purpose of improving TaskTrakHub and will not be shared with third parties.</p>
                            <h5>Thank You!</h5>
                            <p>Thank you for taking the time to provide us with your feedback. Your input helps us make
                                TaskTrakHub better for everyone.</p>
                        </div>

                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="wow fadeIn" data-wow-delay="0.3s">
                        <form id="feedbackForm" action="https://api.web3forms.com/submit" method="POST">
                            <input type="hidden" name="access_key" value="your-access-key">
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" id="name" name="name"
                                            placeholder="Full Name" required>
                                        <label for="name">Full Name</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="email" class="form-control" id="email" name="email"
                                            placeholder="Email Address" required>
                                        <label for="email">Email Address</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-floating">
                                        <select class="form-select" id="subject" name="subject" required>
                                            <option value="General Feedback">General Feedback</option>
                                            <option value="Feature Request">Feature Request</option>
                                            <option value="Bug Report">Bug Report</option>
                                            <option value="Other">Other</option>
                                        </select>
                                        <label for="subject">Subject</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-floating">
                                        <textarea class="form-control" id="message" name="message" placeholder="Message"
                                            style="height: 120px;" required></textarea>
                                        <label for="message">Message</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <label class="text-dark py-2">Rate your experience:</label>
                                    <div class="d-flex gap-2 unique-rating-stars" id="uniqueStarRating">
                                        <i class="fas fa-star fa-2x text-primary unique-star" data-value="1"></i>
                                        <i class="fas fa-star fa-2x text-primary unique-star" data-value="2"></i>
                                        <i class="fas fa-star fa-2x text-primary unique-star" data-value="3"></i>
                                        <i class="fas fa-star fa-2x text-primary unique-star" data-value="4"></i>
                                        <i class="fas fa-star fa-2x text-primary unique-star" data-value="5"></i>
                                    </div>
                                    <input type="hidden" name="rating" id="uniqueRatingInput" required>
                                </div>
                                <div class="col-12">
                                    <div class="form-floating">
                                        <textarea class="form-control" id="suggestions" name="suggestions"
                                            placeholder="Suggestions for Improvement" style="height: 100px"></textarea>
                                        <label for="suggestions">Suggestions for Improvement</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <label class="text-dark py-2">Attachment (Optional):</label>
                                    <input type="file" class="form-control" name="attachment">
                                </div>
                                <div class="col-12">
                                    <label class="text-dark">Would you like us to follow up?</label>
                                    <div class="d-flex gap-2">
                                        <input type="radio" name="follow_up" value="Yes"> Yes
                                        <input type="radio" name="follow_up" value="No"> No
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" id="contact_method"
                                            name="contact_method" placeholder="Preferred Contact Method">
                                        <label for="contact_method">Preferred Contact Method</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <button class="btn btn-primary w-100 py-3" type="submit">Submit Feedback</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Support End -->


<!-- FAQs Start -->
<div class="container-fluid py-5">
    <div class="container">
        <div class="mx-auto text-center wow fadeIn" data-wow-delay="0.1s" style="max-width: 500px;">
            <h1 class="mb-4">Frequently Asked Questions</h1>
        </div>
        <div class="row">
            <!-- Left Column: FAQs 1-6 -->
            <div class="col-lg-6">
                <div class="accordion" id="accordionFAQ1">
                    <div class="accordion-item wow fadeIn" data-wow-delay="0.1s">
                        <h2 class="accordion-header" id="headingOne">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                What is TaskTrakHub?
                            </button>
                        </h2>
                        <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne"
                            data-bs-parent="#accordionFAQ1">
                            <div class="accordion-body">
                                TaskTrakHub is an integrated task and calendar management platform designed to help you
                                organize, prioritize, and track your tasks and events efficiently. It offers a unique
                                dashboard that stacks all tasks and events in one view, streamlining your productivity.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item wow fadeIn" data-wow-delay="0.2s">
                        <h2 class="accordion-header" id="headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                How do I get started with TaskTrakHub?
                            </button>
                        </h2>
                        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                            data-bs-parent="#accordionFAQ1">
                            <div class="accordion-body">
                                To get started, simply sign up for a free account. Once registered, you can access the
                                Personal module with 50MB of free storage and explore our Company module to manage tasks
                                across personal and professional contexts.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item wow fadeIn" data-wow-delay="0.3s">
                        <h2 class="accordion-header" id="headingThree">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                Is there a mobile app for TaskTrakHub?
                            </button>
                        </h2>
                        <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                            data-bs-parent="#accordionFAQ1">
                            <div class="accordion-body">
                                Yes, TaskTrakHub is available as both a web-based platform and a mobile app, ensuring
                                you can manage your tasks and calendar from any device.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item wow fadeIn" data-wow-delay="0.4s">
                        <h2 class="accordion-header" id="headingFour">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseFour" aria-expanded="true" aria-controls="collapseFour">
                                What features does TaskTrakHub offer?
                            </button>
                        </h2>
                        <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour"
                            data-bs-parent="#accordionFAQ1">
                            <div class="accordion-body">
                                <ul>
                                    <li>Integrated task and calendar management</li>
                                    <li>Dashboard with stacked view of tasks and events</li>
                                    <li>Ability to manage multiple companies and personal tasks</li>
                                    <li>Client read-only access for projects</li>
                                    <li>File attachments and notes for tasks</li>
                                    <li>Customizable labels for tasks and events</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item wow fadeIn" data-wow-delay="0.5s">
                        <h2 class="accordion-header" id="headingFive">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                Can I integrate TaskTrakHub with other tools?
                            </button>
                        </h2>
                        <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive"
                            data-bs-parent="#accordionFAQ1">
                            <div class="accordion-body">
                                TaskTrakHub supports integration with various productivity tools and calendar
                                applications.
                                For specific integrations, please refer to our Features page or contact our support
                                team.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item wow fadeIn" data-wow-delay="0.6s">
                        <h2 class="accordion-header" id="headingSix">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                                What are the pricing plans for TaskTrakHub?
                            </button>
                        </h2>
                        <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix"
                            data-bs-parent="#accordionFAQ1">
                            <div class="accordion-body">
                                We offer a free Personal module with 50MB of storage and a Company module with flexible
                                pricing options based on your needs. For detailed pricing information, please visit our
                                Pricing page.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Right Column: FAQs 7-13 -->
            <div class="col-lg-6">
                <div class="accordion" id="accordionFAQ2">
                    <div class="accordion-item wow fadeIn" data-wow-delay="0.7s">
                        <h2 class="accordion-header" id="headingSeven">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                                Are there any discounts available?
                            </button>
                        </h2>
                        <div id="collapseSeven" class="accordion-collapse collapse" aria-labelledby="headingSeven"
                            data-bs-parent="#accordionFAQ2">
                            <div class="accordion-body">
                                We occasionally offer discounts and promotions. To stay informed about the latest
                                offers, subscribe to our newsletter or follow us on social media.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item wow fadeIn" data-wow-delay="0.8s">
                        <h2 class="accordion-header" id="headingEight">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
                                How do I contact support if I need help?
                            </button>
                        </h2>
                        <div id="collapseEight" class="accordion-collapse collapse" aria-labelledby="headingEight"
                            data-bs-parent="#accordionFAQ2">
                            <div class="accordion-body">
                                You can reach our support team via email, live chat on our website, or by phone at
                                +1-800-123-4567. For more information, visit our Support page.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item wow fadeIn" data-wow-delay="0.9s">
                        <h2 class="accordion-header" id="headingNine">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseNine" aria-expanded="false" aria-controls="collapseNine">
                                How can I provide feedback about TaskTrakHub?
                            </button>
                        </h2>
                        <div id="collapseNine" class="accordion-collapse collapse" aria-labelledby="headingNine"
                            data-bs-parent="#accordionFAQ2">
                            <div class="accordion-body">
                                We welcome your feedback! Please fill out our Feedback Form or email us at
                                feedback@tasktrakhub.com.
                            </div>
                        </div>
                    </div>


                    <div class="accordion-item wow fadeIn" data-wow-delay="0.7s">
                        <h2 class="accordion-header" id="headingTen">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseTen" aria-expanded="false" aria-controls="collapseTen">
                                Are there any discounts available?
                            </button>
                        </h2>
                        <div id="collapseTen" class="accordion-collapse collapse" aria-labelledby="headingTen"
                            data-bs-parent="#accordionFAQ2">
                            <div class="accordion-body">
                                We occasionally offer discounts and promotions. To stay informed about the latest
                                offers, subscribe to our newsletter or follow us on social media.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item wow fadeIn" data-wow-delay="0.8s">
                        <h2 class="accordion-header" id="headingEleven">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseEleven" aria-expanded="false" aria-controls="collapseEleven">
                                How do I contact support if I need help?
                            </button>
                        </h2>
                        <div id="collapseEleven" class="accordion-collapse collapse" aria-labelledby="headingEleven"
                            data-bs-parent="#accordionFAQ2">
                            <div class="accordion-body">
                                You can reach our support team via email, live chat on our website, or by phone at
                                +1-800-123-4567. For more information, visit our Support page.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item wow fadeIn" data-wow-delay="0.9s">
                        <h2 class="accordion-header" id="headingTwelve">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseTwelve" aria-expanded="false" aria-controls="collapseTwelve">
                                How can I provide feedback about TaskTrakHub?
                            </button>
                        </h2>
                        <div id="collapseTwelve" class="accordion-collapse collapse" aria-labelledby="headingTwelve"
                            data-bs-parent="#accordionFAQ2">
                            <div class="accordion-body">
                                We welcome your feedback! Please fill out our Feedback Form or email us at
                                feedback@tasktrakhub.com.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- FAQs End -->




<?php
// get_sidebar();
get_footer();
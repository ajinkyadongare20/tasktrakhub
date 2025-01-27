<?php
/**
 * The main template file
 *
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

<!-- Contact Start -->
<div class="container-fluid bg-light py-3">
    <div class="container py-3 py-sm-4 py-md-5 px-2 px-sm-3 px-md-4 px-lg-5">
        <div class="mx-auto text-center wow fadeIn" data-wow-delay="0.1s" style="max-width: 500px;">
            <h1 class="mb-4 mb-md-5">If You Have Any Query, Please Contact Us</h1>
        </div>
        <div class="bg-white shadow p-3 p-sm-4 p-md-5">
            <div class="row g-4">
                <div class="col-lg-6">
                    <div class="bg-white shadow p-3 p-sm-4 p-md-5">
                        <div class="wow fadeIn" data-wow-delay="0.3s">
                            <div class="text-uppercase text-primary text-start fw-bold fs-6 mb-3">TaskTrakHub - Contact Support</div>
                            <p>At TaskTrakHub, we're committed to providing exceptional support to ensure you have a seamless experience with our platform. If you have any questions, need assistance, or require technical support, our team is here to help.</p>

                            <h5 class="mt-4">How Can We Help You?</h5>
                            <p>Whether you need help with:</p>
                            <ul>
                                <li>Technical issues or troubleshooting</li>
                                <li>Account and billing inquiries</li>
                                <li>Feature requests or feedback</li>
                                <li>General questions about TaskTrakHub</li>
                            </ul>
                            <p>Our dedicated support team is ready to assist you.</p>

                            <h5 class="mt-4">Get in Touch</h5>
                            <ul>
                                <li><strong>Email Support:</strong> For detailed inquiries or support requests, please email us at <a href="mailto:support@tasktrakhub.com">support@tasktrakhub.com</a>. Our team will respond within 24 hours.</li>
                                <li><strong>Live Chat:</strong> Click the chat icon at the bottom right corner of your screen for instant support. Our live chat service is available from 9 AM to 6 PM (EST), Monday through Friday.</li>
                                <li><strong>Phone Support:</strong> Call us at <strong>+1-800-123-4567</strong> for immediate assistance. Our phone support is available from 9 AM to 6 PM (EST), Monday through Friday.</li>
                                <li><strong>Support Center:</strong> Visit our <a href="/support-center">Support Center</a> for FAQs, user guides, and troubleshooting tips.</li>
                                <li><strong>Social Media:</strong> Connect with us on social media for updates and quick support:
                                    <ul>
                                        <li><a href="https://twitter.com/tasktrakhub" target="_blank">Twitter</a></li>
                                        <li><a href="https://facebook.com/tasktrakhub" target="_blank">Facebook</a></li>
                                        <li><a href="https://linkedin.com/company/tasktrakhub" target="_blank">LinkedIn</a></li>
                                    </ul>
                                </li>
                            </ul>

                            <h5 class="mt-4">Support Hours</h5>
                            <ul>
                                <li>Monday to Friday: 9 AM - 6 PM (EST)</li>
                                <li>Saturday and Sunday: Closed</li>
                            </ul>

                            <h5 class="mt-4">Contact Us</h5>
                            <p>Your satisfaction is our priority. Don’t hesitate to reach out with any questions or concerns. We look forward to assisting you!</p>
                            <a href="#contactForm" class="btn btn-primary">Submit a Request</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="wow fadeIn" data-wow-delay="0.3s">
                        <form id="contactForm" action="https://api.web3forms.com/submit" method="POST">
                            <div class="row g-3">
                                <!-- Hidden Input for Web3Forms Access Key -->
                                <input type="hidden" name="access_key" value="7b32a9fd-f2c6-4a55-98db-92ac1526dedb">

                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" id="name" name="name" placeholder="Your Name" required>
                                        <label for="name">Your Name</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="email" class="form-control" id="email" name="email" placeholder="Your Email" required>
                                        <label for="email">Your Email</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" id="subject" name="subject" placeholder="Subject" required>
                                        <label for="subject">Subject</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-floating">
                                        <textarea class="form-control" placeholder="Leave a message here" id="message" name="message" style="height: 150px" required></textarea>
                                        <label for="message">Message</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <button class="btn btn-primary w-100 py-3" type="submit">Send Message</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Contact End -->

<?php
get_footer();
?>

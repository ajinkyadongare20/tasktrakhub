<?php
/**
 * The main template file
 * Template Name: Contact
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
              <div class="text-uppercase text-primary text-start fw-bold fs-6 mb-3">TaskTrak Hub -
                Official Contact Details</div>
              <p><strong>Email:</strong> career@tasktrakhub.com</p>
              <p><strong>Phone:</strong> 0253 24651409<br>+91 7410016111 / 13 / 14</p>
              <p><strong>Office Address:</strong><br>
                Flat No. B-102, Laxmi Chowk, Phase 1,<br>
                Hinjawadi Rajiv Gandhi Infotech Park,<br>
                Hinjawadi, Pimpri-Chinchwad,<br>
                Maharashtra 411057, India
              </p>
              <h5 class="mt-4">Social Media</h5>
              <p>Stay connected with us through our social media handles:</p>
              <div class="d-flex gap-3">
                <a class="btn btn-outline-primary rounded-pill"
                  href="https://www.linkedin.com/company/leal-software-solution/" target="_blank"
                  style="border-width: 1px;">
                  <i class="fab fa-linkedin"></i>
                </a>
                <a class="btn btn-outline-primary rounded-pill" href="https://www.facebook.com/lealsolution/"
                  target="_blank" style="border-width: 1px;">
                  <i class="fab fa-facebook-f"></i>
                </a>
                <a class="btn btn-outline-primary rounded-pill" href="https://www.instagram.com/lealsolution/"
                  target="_blank" style="border-width: 1px;">
                  <i class="fab fa-instagram"></i>
                </a>
                <a class="btn btn-outline-primary rounded-pill" href="https://wa.me/7410016111" target="_blank"
                  style="border-width: 1px;">
                  <i class="fab fa-whatsapp"></i>
                </a>
              </div>
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
                <div class="col-md-6">
                  <div class="form-floating">
                    <input type="tel" class="form-control" id="mobile" name="mobile" placeholder="Your Mobile Number"
                      required>
                    <label for="mobile">Your Mobile Number</label>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-floating">
                    <input type="text" class="form-control" id="subject" name="subject" placeholder="Subject" required>
                    <label for="subject">Subject</label>
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
                    <textarea class="form-control" placeholder="Leave a message here" id="message" name="message"
                      style="height: 150px" required></textarea>
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
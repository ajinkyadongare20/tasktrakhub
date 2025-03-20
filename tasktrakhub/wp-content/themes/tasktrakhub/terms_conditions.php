<?php
/**
 * The main template file
 * Template Name: Terms and Conditions
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


<!-- Terms and Conditions Start -->
<div class="container py-5 lh-lg" style="max-width: 800px; margin: 40px auto; padding: 20px;">
    <div class="text-start mb-4">
        <h5 class="fs-2 fw-bold">Terms and Conditions</h5>
        <p class="lead">
            Last Updated: [Date]. Welcome to TaskTrakHub! By accessing our platform, you agree to abide by these
            terms and conditions. These guidelines outline your rights and responsibilities while using our
            services. It is essential to review them carefully before proceeding. Continued use of TaskTrakHub
            indicates your acceptance of any updates or modifications to these terms. If you disagree with any
            section, you should discontinue using our platform immediately. TaskTrakHub reserves the right to
            modify these terms at any time to ensure compliance with legal and operational requirements.
        </p>
    </div>
    <div>
        <img src="<?php bloginfo('template_directory'); ?>/img/terms_conditions/Terms & Conditions.jpg"
            alt="Terms & Conditions" class="img-fluid"
            style="max-width: 100%; height: auto; box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.2);">
    </div>

    <!-- Section 1 -->
    <div class="py-3 lh-lg">
        <h5 class="fw-bold">1. Acceptance of Terms</h5>
        <p>
            By accessing or using TaskTrakHub, you acknowledge and agree to these terms, as well as our Privacy
            Policy. These terms create a legally binding agreement between you and TaskTrakHub. If you do not
            agree with any of these provisions, you must refrain from using our services. TaskTrakHub reserves
            the right to modify these terms at any time, and continued use after changes are implemented
            constitutes acceptance of the updated terms. It is your responsibility to regularly review the
            latest version available on our website.
        </p>
    </div>

    <!-- Section 2 -->
    <div class="py-3 lh-lg">
        <h5 class="fw-bold">2. Account Registration and Security</h5>
        <p>
            To access certain features of TaskTrakHub, you must create an account with accurate and up-to-date
            information. You are solely responsible for maintaining the confidentiality of your login credentials.
            If you suspect any unauthorized access to your account, you must notify us immediately. TaskTrakHub
            is not liable for any loss or damage resulting from your failure to secure your account. Misuse of
            account privileges, including creating multiple accounts to exploit services, may result in
            suspension or termination.
        </p>
    </div>

    <!-- Section 3 -->
    <div class="py-3 lh-lg">
        <h5 class="fw-bold">3. Use of Services</h5>
        <p>
            TaskTrakHub is designed for both personal and professional productivity management. Users must comply
            with all applicable laws and avoid activities that could harm the platform, other users, or our
            services. Prohibited activities include, but are not limited to, hacking, spamming, spreading
            malware, and attempting unauthorized access to user accounts. Engaging in any such violations
            may lead to immediate suspension or permanent account termination, along with possible legal action.
        </p>
    </div>

    <!-- Section 4 -->
    <div class="py-3 lh-lg">
        <h5 class="fw-bold">4. Subscription and Payments</h5>
        <p>
            Some features of TaskTrakHub require a paid subscription. Fees are outlined in our pricing section,
            and payment is due at the start of each billing cycle. Subscriptions renew automatically unless
            canceled before the renewal date. Refunds are provided according to our Refund and Cancellation
            Policy. Failure to complete a payment may result in restricted access to premium features or
            account suspension. We reserve the right to update pricing, but any changes will be communicated
            in advance.
        </p>
    </div>

    <!-- Section 5 -->
    <div class="py-3 lh-lg">
        <h5 class="fw-bold">5. Content Ownership</h5>
        <p>
            You retain ownership of any content you create and upload to TaskTrakHub. However, by using our
            services, you grant us a limited, non-exclusive license to use, modify, and display your content
            for operational purposes. All other content on TaskTrakHub, including software, design elements,
            and branding, is our intellectual property and protected by copyright laws. Unauthorized
            reproduction or distribution of our materials is strictly prohibited.
        </p>
    </div>

    <!-- Section 6 -->
    <div class="py-3 lh-lg">
        <h5 class="fw-bold">6. Termination and Suspension</h5>
        <p>
            TaskTrakHub reserves the right to suspend or terminate your account if we determine that you have
            violated these terms. If your account is terminated, you will lose access to our services and any
            associated data. You may also voluntarily close your account at any time through your account
            settings. Upon termination, TaskTrakHub has no obligation to retain your data unless required by law.
        </p>
    </div>

    <!-- Section 7 -->
    <div class="py-3 lh-lg">
        <h5 class="fw-bold">7. Service Availability</h5>
        <p>
            We strive to keep TaskTrakHub available and operational at all times, but we do not guarantee
            uninterrupted service. There may be occasional downtimes due to maintenance, technical issues,
            or external factors beyond our control. We are not responsible for any losses resulting from such
            interruptions. Users should regularly back up important data to avoid any disruptions.
        </p>
    </div>

    <!-- Section 8 -->
    <div class="py-3 lh-lg">
        <h5 class="fw-bold">8. Privacy Policy</h5>
        <p>
            Your privacy is important to us. Our Privacy Policy outlines how we collect, store, and protect your
            personal data. By using TaskTrakHub, you consent to our data practices. We take measures to secure
            user data but cannot guarantee complete security against cyber threats. It is your responsibility
            to use strong passwords and safeguard sensitive information.
        </p>
    </div>

    <!-- Section 9 -->
    <div class="py-3 lh-lg">
        <h5 class="fw-bold">9. Privacy Policy</h5>
        <p>
            Your privacy is important to us. Our Privacy Policy outlines how we collect, store, and protect your
            personal data. By using TaskTrakHub, you consent to our data practices. We take measures to secure
            user data but cannot guarantee complete security against cyber threats. It is your responsibility
            to use strong passwords and safeguard sensitive information.
        </p>
    </div>

    <!-- Section 10 -->
    <div class="py-3 lh-lg">
        <h5 class="fw-bold">10. Limitation of Liability</h5>
        <p>
            TaskTrakHub is not responsible for any direct, indirect, incidental, or consequential damages
            resulting from your use of our services. We do not guarantee that our platform will always be
            secure, error-free, or uninterrupted. Any loss of data, revenue, or reputation due to system
            issues or third-party breaches is beyond our liability. The extent of our liability is limited
            to the maximum amount permitted under applicable laws.
        </p>
    </div>

    <!-- Section 11 -->
    <div class="py-3 lh-lg">
        <h5 class="fw-bold">11. Indemnification</h5>
        <p>
            You agree to indemnify, defend, and hold TaskTrakHub, its affiliates, directors, employees, and
            partners harmless against any claims, liabilities, damages, legal fees, or expenses arising from
            your violation of these Terms. This includes improper use of our services, infringement of any
            rights, or legal disputes caused by your actions. If we are held accountable due to your actions,
            you must cover all associated costs.
        </p>
    </div>

    <!-- Section 12 -->
    <div class="py-3 lh-lg">
        <h5 class="fw-bold">12. Termination</h5>
        <p>
            TaskTrakHub reserves the right to suspend or permanently terminate your account if you violate
            these Terms. We may do this at our sole discretion without prior notice. Upon termination, your
            access to services and data may be revoked. You may also choose to delete your account at any
            time through the account settings. We are not liable for any loss resulting from the termination
            of your account.
        </p>
    </div>

    <!-- Section 13 -->
    <div class="py-3 lh-lg">
        <h5 class="fw-bold">13. Governing Law</h5>
        <p>
            These Terms and Conditions are governed by and construed in accordance with the laws of
            [Your Jurisdiction]. Any legal disputes arising from or related to these terms shall be
            subject to the exclusive jurisdiction of the courts located in Nashik Court. By using
            TaskTrakHub, you agree to resolve any legal matters within this jurisdiction.
        </p>
    </div>

    <!-- Section 14 -->
    <div class="py-3 lh-lg">
        <h5 class="fw-bold">14. Changes to Terms</h5>
        <p>
            TaskTrakHub may update these Terms and Conditions as necessary to comply with new regulations,
            enhance security, or improve service quality. Significant changes will be communicated via email
            or our website. Your continued use of TaskTrakHub after modifications are implemented signifies
            acceptance of the new Terms. It is your responsibility to review updates periodically to stay
            informed about any changes.
        </p>
    </div>

    <!-- Section 15 -->
    <div class="py-3 lh-lg">
        <h5 class="fw-bold">15. Governing Law</h5>
        <p>
            These Terms are governed by the laws of [Your Country/State] without regard to its conflict of
            law principles. Any disputes arising under or in connection with these terms shall be resolved
            exclusively in the courts of [Your Country/State]. By agreeing to these Terms, you consent to
            the jurisdiction and venue of these courts.
        </p>
    </div>

    <!-- Section 16 -->
    <div class="py-3 lh-lg">
        <h5 class="fw-bold">16. Contact Information</h5>
        <p>
            If you have any questions, concerns, or require support regarding these Terms and Conditions,
            please contact us at:
            <br> <span class="text-dark ">📧 Email:</span> <a
                href="mailto:support@tasktrakhub.com">support@tasktrakhub.com</a>
            <br> <span class="text-dark ">📞 Phone:</span> 7410016111/13/14
            <br> <span class="text-dark ">🏢 Address: </span> Flat No. B-102, Laxmi Chowk, Phase 1, Hinjawadi Rajiv
            Gandhi Infotech Park, Hinjawadi, Pimpri-Chinchwad, Maharashtra 411057
        </p>
    </div>
    <!-- Final Call to Action -->
    <div class="text-center mt-5">
        <h5 class="fw-bold">Have Questions?</h5>
        <p>
            If you need further assistance or have concerns regarding our Terms and Conditions, feel free to
            reach out. We're here to help!
        </p>
        <button class="btn btn-primary px-4 py-2 mt-3 rounded-3 fw-bold">Contact Us</button>
    </div>
</div>
<!-- Terms and Conditions End -->







<?php
// get_sidebar();
get_footer();
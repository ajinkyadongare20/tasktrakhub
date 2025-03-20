<?php
/**
 * The main template file
 * Template Name: Case Study 2
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

<!-- Case Study Start -->
<div class="container pt-5">
    <!-- About Creative Vision Studios Client Section -->
    <div class="text-start mb-5 wow fadeIn" data-wow-delay="0.2s">
        <img src="<?php bloginfo('template_directory'); ?>/img/case_study/CreativeVision.jpg" alt="Creative Vision Studios Logo" class="border"
            style="width: 200px; height: 100px; object-fit: contain;">
        <h5 class="mt-3 fs-2">About the Client</h5>
        <p class="mt-4" style="font-size: 16px; line-height: 1.6;">
            Creative Vision Studios is a dynamic creative agency specializing in branding, graphic design, and digital marketing. With a diverse portfolio of client projects and a talented team of designers and marketers, the studio handles complex projects with tight deadlines.
        </p>
        <div class="row text-center mt-4">
            <div class="col-md-4">
                <h6>Country</h6>
                <p>City, Country</p>
            </div>
            <div class="col-md-4">
                <h6>Industry</h6>
                <p>Creative Services</p>
            </div>
            <div class="col-md-4">
                <h6>Services used</h6>
                <p>
                    <span class="badge badge-warning text-white bg-primary">Task Stacking & Prioritization</span>
                    <span class="badge badge-warning text-white bg-primary">Calendar Integration</span>
                    <span class="badge badge-warning text-white bg-primary">Client Read-Only Access</span>
                </p>
            </div>
        </div>
    </div>

    <!-- Challenge Section for Creative Vision Studios -->
    <div class="wow fadeIn" data-wow-delay="0.3s">
        <h5 class="mb-4 fs-2">Challenge</h5>
        <p style="font-size: 16px; line-height: 1.6;">
            Creative Vision Studios encountered several issues that hindered their project management efficiency:
        </p>
        <ul style="font-size: 16px; line-height: 1.6;">
            <li><strong>Managing Multiple Projects:</strong> Coordinating numerous client projects with varying deadlines and requirements was challenging.</li>
            <li><strong>Meeting Deadlines:</strong> Tight project deadlines and frequent changes made it difficult to manage and prioritize tasks effectively.</li>
            <li><strong>Team Alignment:</strong> Ensuring that all team members were aligned on project goals and deadlines required improved communication and collaboration tools.</li>
        </ul>
    </div>

    <!-- Objective Section for Creative Vision Studios -->
    <div class="wow fadeIn" data-wow-delay="0.4s">
        <h5 class="mb-4 fs-2">Objective</h5>
        <p style="font-size: 16px; line-height: 1.6;">
            To enhance project management capabilities by improving task organization, meeting deadlines, and fostering better team collaboration. The goal was to create a more efficient workflow that would lead to timely project completion and satisfied clients.
        </p>
    </div>

    <!-- The Solution Section for Creative Vision Studios -->
    <div class="py-5 wow fadeIn" data-wow-delay="0.5s">
        <h5 class="mb-4 fs-2">The Solution</h5>
        <p style="font-size: 16px; line-height: 1.6;">
            Creative Vision Studios adopted TaskTrakHub to address their project management challenges:
        </p>
        <ul style="font-size: 16px; line-height: 1.6;">
            <li><strong>Task Stacking and Prioritization:</strong> Organized and prioritized tasks based on project deadlines and importance.</li>
            <li><strong>Calendar Integration:</strong> Synchronized project deadlines, meetings, and milestones.</li>
            <li><strong>Client Read-Only Access:</strong> Allowed clients to view project progress while maintaining control within the studio.</li>
        </ul>
    </div>

    <!-- Implementation Section for Creative Vision Studios -->
    <div class="wow fadeIn" data-wow-delay="0.6s">
        <h5 class="mb-4 fs-2">Implementation</h5>
        <p style="font-size: 16px; line-height: 1.6;">
            The implementation process involved:
        </p>
        <ul style="font-size: 16px; line-height: 1.6;">
            <li><strong>Onboarding:</strong> Training sessions for the team to familiarize them with TaskTrakHub.</li>
            <li><strong>Integration:</strong> Seamless integration with existing project management tools.</li>
            <li><strong>Customization:</strong> Platform adjustments to align with project workflows.</li>
        </ul>
    </div>

    <!-- Results Section for Creative Vision Studios -->
    <div class="wow fadeIn" data-wow-delay="0.7s">
        <h5 class="mb-4 fs-2">Results</h5>
        <ul style="font-size: 16px; line-height: 1.6;">
            <li><strong>25% Reduction in Project Delays:</strong> Improved task management led to timely project completion.</li>
            <li><strong>Improved Team Collaboration:</strong> Real-time updates facilitated better coordination.</li>
            <li><strong>Enhanced Client Communication:</strong> Read-only access kept clients informed, improving relationships.</li>
        </ul>
    </div>

    <!-- Conclusion Section for Creative Vision Studios -->
    <div class="py-5 wow fadeIn" data-wow-delay="0.8s">
        <h5 class="mb-4 fs-2">Conclusion</h5>
        <p style="font-size: 16px; line-height: 1.6;">
            TaskTrakHub has transformed project management at Creative Vision Studios, providing them with the tools needed to efficiently manage multiple projects, meet deadlines, and enhance team collaboration. The platform’s features have streamlined their workflow and contributed to overall project success.
        </p>
    </div>
</div>
<!-- Case Study End -->

<!-- Call to Action -->
<div class="container-fluid bg-light py-5" style="display: flex; justify-content: center; align-items: center;">
    <div class="text-center">
        <p class="text-danger fs-6">Inspired by Creative Vision Studios’ success?</p>
        <h5 class="text-dark fw-bold">Discover how TaskTrakHub can revolutionize your project management.</h5>
        <button class="btn btn-primary px-4 py-2 mt-3 rounded-3 fw-bold">Start Free Trial</button>
    </div>
</div>
<!-- Call to Action End -->





<?php
// get_sidebar();
get_footer();
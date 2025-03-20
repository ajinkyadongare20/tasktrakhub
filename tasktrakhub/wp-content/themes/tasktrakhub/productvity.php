<?php
/**
 * The main template file
 * Template Name: Productvity
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


<!-- Productivity Tips and Best Practices Start -->
<div class="container py-5 lh-lg" style=" max-width: 800px; margin: 40px auto; padding: 20px;">
    <div class="text-start mb-4">
        <h5 class="fs-2 fw-bold">Productivity Tips and Best Practices</h5>
        <p class="lead">
            Maximize your efficiency and make the most of your time with these essential productivity tips and best
            practices.
            Whether you're managing tasks, scheduling events, or coordinating with teams, these strategies will help
            you
            stay organized and achieve your goals more effectively.
        </p>
    </div>
    <div>
        <img src="<?php bloginfo('template_directory'); ?>/img/productvity/1_.webp" alt="Project Management"
            class="img-fluid" style="max-width: 100%; height: auto; box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.2);">
    </div>

    <!-- Section 1 -->
    <div class="py-3 lh-lg">
        <h5 class="fw-bold">1. Prioritize Your Tasks</h5>
        <p>
            Prioritizing tasks is crucial for efficient workflow. The Eisenhower Matrix helps sort tasks by urgency
            and importance,
            allowing you to focus on what truly matters. Setting clear, actionable goals and breaking down large
            tasks into smaller,
            manageable steps makes work less overwhelming and more structured, increasing your productivity and
            reducing stress.
        </p>
    </div>

    <!-- Section 2 -->
    <div class="py-3 lh-lg">
        <h5 class="fw-bold">2. Leverage Task Management Tools</h5>
        <p>
            Using task management tools like Trello, Asana, or Todoist enhances productivity by structuring your
            workflow.
            Labels and categories help prioritize tasks effectively, while reminders and deadlines ensure you stay
            on track.
            By keeping tasks organized, these tools prevent overload, making daily planning more streamlined and
            efficient.
        </p>
    </div>

    <!-- Section 3 -->
    <div class="py-3 lh-lg">
        <h5 class="fw-bold">3. Optimize Your Calendar</h5>
        <p>
            A well-organized calendar prevents scheduling conflicts and enhances time management. By syncing your
            task manager
            with your calendar, you gain better visibility into deadlines and avoid overlapping commitments.
            Allocating deep
            work sessions ensures focused productivity without distractions, helping you complete high-priority
            tasks efficiently.
        </p>
    </div>

    <!-- Section 4 -->
    <div class="py-3 lh-lg">
        <h5 class="fw-bold">4. Adopt Efficient Workflow Practices</h5>
        <p>
            Optimizing workflow involves using techniques like the Pomodoro Method—working in focused 25-minute
            intervals with short breaks.
            Additionally, automating repetitive tasks such as emails or data entry saves time, reducing workload
            stress and allowing you
            to focus on high-priority tasks that require creativity and problem-solving.
        </p>
    </div>

    <!-- Section 5 -->
    <div class="py-3 lh-lg">
        <h5 class="fw-bold">5. Maintain Work-Life Balance</h5>
        <p>
            Work-life balance is essential for long-term efficiency. Setting boundaries between work and personal
            time prevents burnout.
            Regular breaks throughout the day improve mental clarity and focus. Engaging in non-work activities
            helps refresh your mind,
            ultimately leading to better overall performance and motivation in professional tasks.
        </p>
    </div>

    <!-- Section 6 -->
    <div class="py-3 lh-lg">
        <h5 class="fw-bold">6. Communicate Effectively</h5>
        <p>
            Clear communication minimizes misunderstandings and enhances collaboration. Providing detailed
            instructions ensures
            tasks are completed correctly, while using team tools like Slack, Zoom, or Microsoft Teams fosters
            transparency.
            Effective communication helps streamline workflows and keeps everyone aligned on shared goals.
        </p>
    </div>

    <!-- Section 7 -->
    <div class="py-3 lh-lg">
        <h5 class="fw-bold">7. Monitor and Review Progress</h5>
        <p>
            Regularly reviewing progress helps identify successes and areas for improvement. Tracking completed
            tasks enables you
            to refine strategies and enhance efficiency. Adjusting priorities based on changing requirements ensures
            adaptability
            and continuous improvement in achieving long-term goals.
        </p>
    </div>

    <!-- Section 8 -->
    <div class="py-3 lh-lg">
        <h5 class="fw-bold">8. Stay Organized</h5>
        <p>
            Organization is key to maintaining focus and reducing distractions. Keeping a tidy workspace boosts
            productivity,
            while using checklists ensures tasks are completed efficiently. An organized workflow enhances time
            management,
            ultimately leading to improved overall efficiency.
        </p>
    </div>

    <!-- Section 9 -->
    <div class="py-3 lh-lg">
        <h5 class="fw-bold">9. Embrace Continuous Improvement</h5>
        <p>
            Adapting and evolving with new productivity techniques is vital for long-term success. Seeking feedback
            helps
            refine processes, while staying updated on emerging tools improves efficiency. A mindset of continuous
            improvement fosters growth and ensures sustained productivity in dynamic work environments.
        </p>
    </div>

    <!-- Section 10 -->
    <div class="py-3 lh-lg">
        <h5 class="fw-bold">10. Invest in Personal Development</h5>
        <p>
            Investing in self-improvement leads to long-term career success. Learning new skills enhances
            professional
            capabilities, while practicing self-care boosts mental and physical well-being. Engaging in lifelong
            learning
            helps maintain motivation and achieve long-term productivity.
        </p>
    </div>

    <!-- Final Call to Action -->
    <div class="text-center mt-5">
        <h5 class="fw-bold">Ready to Boost Your Productivity?</h5>
        <p>
            Implement these tips to streamline your workflow. Start using <strong>TaskTrakHub</strong> today to stay
            organized
            and maximize productivity. <strong>Sign Up now</strong> and unlock your full potential!
        </p>
        <button class="btn btn-primary px-4 py-2 mt-3 rounded-3 fw-bold">Sign Up Now</button>
    </div>
</div>
<!-- Productivity Tips and Best Practices End -->


<?php
// get_sidebar();
get_footer();
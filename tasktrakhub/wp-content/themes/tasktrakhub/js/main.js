(function ($) {
    "use strict";

    // Spinner
    var spinner = function () {
        setTimeout(function () {
            if ($('#spinner').length > 0) {
                $('#spinner').removeClass('show');
            }
        }, 1);
    };
    spinner();


    // Initiate the wowjs
    new WOW().init();


    // Sticky Navbar
    $(window).scroll(function () {
        if ($(this).scrollTop() > 300) {
            $('.sticky-top').addClass('bg-primary shadow-sm').css('top', '0px');
        } else {
            $('.sticky-top').removeClass('bg-primary shadow-sm').css('top', '-150px');
        }
    });


    // Facts counter
    $('[data-toggle="counter-up"]').counterUp({
        delay: 10,
        time: 2000
    });


    // Back to top button
    $(window).scroll(function () {
        if ($(this).scrollTop() > 100) {
            $('.back-to-top').fadeIn('slow');
        } else {
            $('.back-to-top').fadeOut('slow');
        }
    });
    $('.back-to-top').click(function () {
        $('html, body').animate({ scrollTop: 0 }, 1500, 'easeInOutExpo');
        return false;
    });


    // Testimonials carousel
    $(".testimonial-carousel").owlCarousel({
        items: 1,
        autoplay: true,
        smartSpeed: 1000,
        dots: true,
        loop: true,
        nav: true,
        navText: [
            '<i class="bi bi-chevron-left"></i>',
            '<i class="bi bi-chevron-right"></i>'
        ]
    });

})(jQuery);


// in index page 

function changeImage(imageName) {
    var imageDisplay = document.getElementById('image-display');
    imageDisplay.src = imageName; // Change the source of the image based on the clicked div
}

// Code for key feature
document.addEventListener("DOMContentLoaded", function () {
    const toggleButton = document.getElementById("toggle-btn");
    const hiddenDivs = document.querySelectorAll(".hidden-div");

    toggleButton.addEventListener("click", function () {
        if (toggleButton.textContent === "View More") {
            hiddenDivs.forEach((div) => {
                div.style.display = "block";
            });
            toggleButton.textContent = "View Less";
        } else {
            hiddenDivs.forEach((div) => {
                div.style.display = "none";
            });
            toggleButton.textContent = "View More";
        }
    });
});


// code for tab buttons
function showSection(sectionId) {
    // Hide all sections
    const sections = document.querySelectorAll('.content-wrapper');
    sections.forEach(section => section.classList.add('d-none'));

    // Show the selected section
    document.getElementById(sectionId).classList.remove('d-none');
}


// JavaScript to handle collapsible sections Industry Solution
function toggleCollapse(targetId) {
    const allSections = document.querySelectorAll('.collapse');
    allSections.forEach(section => {
        if (section.id !== targetId) {
            section.classList.remove('show');
        }
    });
}


// Code for Contact Support and Feedback page for Start Rating
document.addEventListener("DOMContentLoaded", function () {
    const stars = document.querySelectorAll("#uniqueStarRating .unique-star");
    const ratingInput = document.getElementById("uniqueRatingInput");

    stars.forEach(star => {
        star.addEventListener("click", function () {
            const ratingValue = this.getAttribute("data-value");
            ratingInput.value = ratingValue;

            // Reset all stars
            stars.forEach(s => s.classList.remove("text-success"));
            stars.forEach(s => s.classList.add("text-primary"));

            // Highlight selected stars
            for (let i = 0; i < ratingValue; i++) {
                stars[i].classList.add("text-success");
            }
        });
    });
});


// document.querySelector('.custom-scroll').addEventListener('scroll', function() {
//     var scrollPosition = this.scrollTop;
//     var maxScroll = 60; // Adjust the maximum scroll position for the transition

//     // Calculate opacity based on scroll position
//     var opacity = Math.min(scrollPosition / maxScroll, 1);

//     // Update CSS variable values
//     document.documentElement.style.setProperty('--background-alpha', opacity);

// });


// screensize checker
document.querySelector('.custom-scroll').addEventListener('scroll', function() {
    // Check the screen width
    var screenWidth = window.innerWidth || document.documentElement.clientWidth || document.body.clientWidth;

    // If the screen width is greater than 1366 pixels, apply the scroll effect
    if (screenWidth > 1180) {
        var scrollPosition = this.scrollTop;
        var maxScroll = 130; // Adjust the maximum scroll position for the transition

        // Calculate opacity based on scroll position
        var opacity = Math.min(scrollPosition / maxScroll, 1);

        // Update CSS variable values
        document.documentElement.style.setProperty('--background-alpha', opacity);
    }
});




// scroll show title


document.addEventListener('DOMContentLoaded', function () {
    var headerwork = document.querySelector('.headerwork');
    var scrollingText = document.querySelector('.scrolling-text');
    var customScrollContainer = document.querySelector('.custom-scroll');

    // Function to check if the element is in the viewport
    function isElementInViewport(element, container) {
        var rect = element.getBoundingClientRect();
        var containerRect = container.getBoundingClientRect();
        return (
            rect.top <= containerRect.bottom &&
            rect.bottom >= containerRect.top
        );
    }

    // Intersection Observer for headerwork
    var observer = new IntersectionObserver(function (entries) {
        entries.forEach(function (entry) {
            if (entry.isIntersecting) {
                scrollingText.classList.add('hidden');
            } else {
                scrollingText.classList.remove('hidden');
            }
        });
    }, { root: customScrollContainer, threshold: 0.5 });

    // Initial check on page load
    if (!isElementInViewport(headerwork, customScrollContainer)) {
        scrollingText.classList.remove('hidden');
    }

    observer.observe(headerwork);
});

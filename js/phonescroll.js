document.addEventListener('DOMContentLoaded', function () {
    const phoneToggle = document.querySelector('.phone-toggle');
    const phoneButton = document.querySelector('.phone-button');
    const customScroll = document.querySelector('.custom-scroll');
    let isScrolling = false;
    let scrollInterval;

    phoneButton.addEventListener('click', function () {
        if (!phoneToggle.checked) {
            // If the toggle is not checked, start scrolling
            startScrolling();
        } else {
            // If the toggle is checked, stop scrolling
            stopScrolling();
        }
    });

    function startScrolling() {
        if (!isScrolling) {
            isScrolling = true;
            scrollInterval = setInterval(function () {
                // Increment the scroll position or use your scrolling logic
                customScroll.scrollTop += 1;
                // Add any additional logic as needed
            }, 16); // Adjust the interval as needed
        }
    }

    function stopScrolling() {
        if (isScrolling) {
            isScrolling = false;
            clearInterval(scrollInterval);
            // Add any additional logic as needed when scrolling stops
        }
    }
});


// phone progress




function updatePhoneProgressBar() {
    const scrollContainer = document.querySelector('.custom-scroll');
    const progressBarElement = document.querySelector('.phoneprogress-bar');
    // const sliderMarkerElement = document.querySelector('.circle');

    // Update progress bar
    const scrollPercentage = (scrollContainer.scrollTop / (scrollContainer.scrollHeight - scrollContainer.clientHeight)) * 100;
    progressBarElement.style.width = `${scrollPercentage}%`;

    // Update start time based on the scroll position
    const startTime = calculateTimeFromSlider(scrollPercentage);

    // Debugging: Log startTime to see if it's calculated correctly
    console.log(startTime);
}

// Call the function when the custom scroll element is scrolled
const customScrollElement = document.querySelector('.custom-scroll');
customScrollElement.addEventListener('scroll', updatePhoneProgressBar);

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
            }, 12); // Adjust the interval as needed
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


// below is for normal play button on desktops
document.addEventListener('DOMContentLoaded', function () {
    const playToggle = document.querySelector('.play-toggle');
    const playButton = document.querySelector('.play-button');
    const customScrollElement = document.querySelector('.custom-scroll');
    const sliderContainer = document.querySelector('.slider-container');
    const sliderHandle = document.querySelector('.slider-handle');
    const sliderBar = document.querySelector('.slider-bar');
    let isScrolling = false;
    let scrollInterval;
    let speed = 16; // Initial speed value (milliseconds)
    const minSpeed = 0.1; // Adjust as needed
    const maxSpeed = 60; // Adjust as needed

    playButton.addEventListener('click', function () {
        if (!playToggle.checked) {
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
                customScrollElement.scrollTop += 1;
                // Add any additional logic as needed
            }, speed); // Use the speed variable here
        }
    }

    function stopScrolling() {
        if (isScrolling) {
            isScrolling = false;
            clearInterval(scrollInterval);
            // Add any additional logic as needed when scrolling stops
        }
    }

    // Add event listener for scroll event on customScrollElement
    customScrollElement.addEventListener('scroll', function() {
        // Check if scroll position is at the bottom
        if (customScrollElement.scrollHeight - customScrollElement.scrollTop === customScrollElement.clientHeight) {
            // Toggle the playToggle switch only if it was previously unchecked
            if (playToggle.checked) {
                playToggle.checked = !playToggle.checked;
                stopScrolling();

            }
        }
    });

    // Add event listeners for slider handle drag
    let isDragging = false;
    let dragStartX = 0;
    let dragStartLeft = 0;

    sliderHandle.addEventListener('mousedown', function(e) {
        isDragging = true;
        dragStartX = e.clientX;
        dragStartLeft = sliderHandle.offsetLeft;
    });

    document.addEventListener('mousemove', function(e) {
        if (isDragging) {
            const dragDistance = e.clientX - dragStartX;
            const newLeft = dragStartLeft + dragDistance;
            // Ensure slider stays within slider container bounds
            const maxLeft = sliderContainer.offsetWidth - sliderHandle.offsetWidth;
            const clampedLeft = Math.max(0, Math.min(maxLeft, newLeft));
            sliderHandle.style.left = clampedLeft + 'px';
            // Update speed
            updateSpeed(clampedLeft, maxLeft);
            // Update scrollInterval if scrolling is active
            if (isScrolling) {
                clearInterval(scrollInterval);
                startScrolling();
            }
        }
    });

    document.addEventListener('mouseup', function() {
        isDragging = false;
    });

    // Add click event to the slider container
    sliderContainer.addEventListener('click', handleClickEvent);

    function handleClickEvent(event) {
        if (!isDragging) {
            const containerRect = sliderContainer.getBoundingClientRect();
            const mouseX = event.clientX - containerRect.left;
            const percent = (mouseX / containerRect.width) * 100;
            const cappedPercent = Math.min(100, Math.max(0, percent));
            sliderBar.style.width = `${cappedPercent}%`;
            sliderHandle.style.left = `${cappedPercent}%`;
            // Update speed
            updateSpeed(cappedPercent, 100);
            // Update scrollInterval if scrolling is active
            if (isScrolling) {
                clearInterval(scrollInterval);
                startScrolling();
            }
        }
    }

    // Function to update speed based on slider position
    function updateSpeed(position, maxPosition) {
        speed = minSpeed + (maxSpeed - minSpeed) * (1 - position / maxPosition);
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



document.addEventListener('DOMContentLoaded', function () {
    const sliderContainer = document.querySelector('.slider-container');
    const sliderHandle = document.querySelector('.slider-handle');
    let isDragging = false;

    sliderHandle.addEventListener('mousedown', startDragEvent);

    function startDragEvent(event) {
        isDragging = true;
        document.addEventListener('mousemove', dragEvent);
        document.addEventListener('mouseup', stopDragEvent);
    }

    function dragEvent(event) {
        if (isDragging) {
            const sliderRect = sliderContainer.getBoundingClientRect();
            const sliderWidth = sliderRect.width;
            const mouseX = event.clientX - sliderRect.left;
            const percentage = Math.min(1, Math.max(0, mouseX / sliderWidth));
            const intervalValue = 0.1 + percentage * (60 - 0.1);
            setScrollInterval(intervalValue);
        }
    }

    function stopDragEvent(event) {
        isDragging = false;
        document.removeEventListener('mousemove', dragEvent);
        document.removeEventListener('mouseup', stopDragEvent);
    }

    function setScrollInterval(intervalValue) {
        const clampedInterval = Math.min(60, Math.max(0.1, intervalValue));
        const intervalInMilliseconds = clampedInterval * 1000; // Convert to milliseconds
        clearInterval(scrollInterval); // Clear previous interval if exists
        scrollInterval = setInterval(function () {
            // Increment the scroll position or use your scrolling logic
            customScrollElement.scrollTop += 1;
            // Add any additional logic as needed
        }, intervalInMilliseconds);
    }
});

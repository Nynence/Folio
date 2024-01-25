// autoplay.js

// autoplay.js

document.addEventListener('DOMContentLoaded', function () {
    const playToggle = document.getElementById('play-toggle');

    // Initial check and update
    checkAndTogglePlayButton();

    playToggle.addEventListener('change', function () {
        if (playToggle.checked) {
            // Start autoplay when the play toggle is checked
            startAutoPlay();
        } else {
            // Stop autoplay when the play toggle is unchecked
            stopAutoPlay();
        }
    });

    // Observe changes in the custom-scroll container size
    const customScroll = document.querySelector('.custom-scroll');
    const resizeObserver = new ResizeObserver(checkAndTogglePlayButton);
    resizeObserver.observe(customScroll);

    // Observe changes in the custom-scroll container
    const observer = new MutationObserver(checkAndTogglePlayButton);
    observer.observe(customScroll, { attributes: true, childList: true, subtree: true });
});

// ... (rest of the code remains unchanged)

let autoPlayInterval;
let currentPercent = 0.1; // Initial value

function startAutoPlay() {
    autoPlayInterval = setInterval(function () {
        const customScroll = document.querySelector('.custom-scroll');
        const totalHeight = customScroll.scrollHeight - customScroll.clientHeight;
        const currentScroll = customScroll.scrollTop;

        // Calculate the remaining percentage based on the current position
        const remainingPercentage = (totalHeight - currentScroll) / totalHeight * 100;

        incrementProgressBar(100 - remainingPercentage);

        // Increment the current position
        customScroll.scrollTop += 2; // Adjust the increment value as needed
    }, 50); // Adjust the interval as needed (make it smaller for faster playback)
}

function stopAutoPlay() {
    clearInterval(autoPlayInterval);
}

function incrementProgressBar(percent) {
    const progressBarContainer = document.querySelector('.progress-bar-container');
    const customScroll = document.querySelector('.custom-scroll');
    const progressBar = document.querySelector('.progress-bar');

    // Cap the position between 0 and 100
    const cappedPercent = Math.min(100, Math.max(0, percent));

    progressBar.style.width = `${cappedPercent}%`;

    // Adjust the custom scroll position based on the slider position
    const scrollPosition = (cappedPercent / 100) * (customScroll.scrollHeight - customScroll.clientHeight);
    customScroll.scrollTop = scrollPosition;

    const startTime = calculateTimeFromSlider(cappedPercent);
    document.getElementById('startTime').innerText = startTime; // Use the actual ID of your start time element

    // Check if the autoplay has reached the end
    if (cappedPercent >= 100) {
        stopAutoPlay();
    }
}

function calculateTimeFromSlider(percent) {
    const totalTimeInSeconds = 195; // Replace with the total duration of your audio in seconds
    const currentTimeInSeconds = (percent / 100) * totalTimeInSeconds;

    const minutes = Math.floor(currentTimeInSeconds / 60);
    const seconds = Math.floor(currentTimeInSeconds % 60);

    return `${minutes}:${seconds < 10 ? '0' : ''}${seconds}`;
}

function checkAndTogglePlayButton() {
    const customScroll = document.querySelector('.custom-scroll');
    const playToggle = document.getElementById('play-toggle');

    // Check if there is y overflow
    const hasOverflow = customScroll.scrollHeight > customScroll.clientHeight;

    // Disable the play button if there is no overflow, otherwise enable it
    playToggle.disabled = !hasOverflow;
}


// to top and to bottom

document.addEventListener('DOMContentLoaded', function () {
    const totopButton = document.querySelector('.totop');
    const tobottomButton = document.querySelector('.tobottom');
    const customScroll = document.querySelector('.custom-scroll');

    totopButton.addEventListener('click', function () {
        // Scroll to the top of the custom scroll container
        customScroll.scrollTop = 0;
    });

    tobottomButton.addEventListener('click', function () {
        // Scroll to the bottom of the custom scroll container
        customScroll.scrollTop = customScroll.scrollHeight;
    });
});

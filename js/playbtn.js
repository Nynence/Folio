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
let intervalValue = 50; // Default interval value

function startAutoPlay() {
    autoPlayInterval = setInterval(function () {
        const customScroll = document.querySelector('.custom-scroll');
        const totalHeight = customScroll.scrollHeight - customScroll.clientHeight;
        const currentScroll = customScroll.scrollTop;

        // Calculate the remaining percentage based on the current position
        const remainingPercentage = (totalHeight - currentScroll) / totalHeight * 100;

        incrementProgressBar(100 - remainingPercentage);

        // Increment the current position
        customScroll.scrollTop += 1; // Adjust the increment value as needed
    }, intervalValue); // Set the interval using the dynamic value
}



// function for ramp slider for how fast it scrolls


let isDragging2 = false;




function updateramp() {
    const sliderBar = document.querySelector('.slider-bar');
    const sliderhandle = document.querySelector('.slider-handle');



        // Update progress bar
        const scrollPercentage = (customScroll.scrollTop / (customScroll.scrollHeight - customScroll.clientHeight)) * 100;
        progressBar.style.width = `${scrollPercentage}%`;
        sliderMarker.style.left = `calc(${scrollPercentage}% - 7.5px)`; // Adjusted for half of the marker's width

        // Update start time based on the scroll position
        
        
        // No overflow, set slider to start and make it non-responsive
        sliderBar.style.width = '0%';
        sliderhandle.style.left = '0%';
        // Reset the time to '00'
    
}




const sliderBarContainer = document.querySelector('.slider-container');
sliderBarContainer.addEventListener('mousedown', startDragEvent);
sliderBarContainer.addEventListener('click', handleClickEvent);


function startDragEvent() {
    isDragging2 = true;

    document.addEventListener('mousemove', handleDragEvent);
    document.addEventListener('mouseup', stopDragEvent);
}



function handleClickEvent(event) {
    if (!isDragging2) {
        const sliderBarContainer = document.querySelector('.slider-container');
        const containerRect = sliderBarContainer.getBoundingClientRect();
        const mouseX = event.clientX - containerRect.left;
        const percent = (mouseX / containerRect.width) * 100;

        const cappedPercent = Math.min(100, Math.max(0, percent));
        intervalValue = Math.round((100 - cappedPercent) * 1.5);

        const sliderBar = document.querySelector('.slider-bar');
        const sliderHandle = document.querySelector('.slider-handle');

        sliderBar.style.width = `${cappedPercent}%`;
        sliderHandle.style.left = `${cappedPercent}%`;
    }
}
function handleDragEvent(event) {
    const sliderBarContainer = document.querySelector('.slider-container');
    const sliderBar = document.querySelector('.slider-bar');
    const sliderHandle = document.querySelector('.slider-handle');

    const containerRect = sliderBarContainer.getBoundingClientRect();
    const mouseX = event.clientX - containerRect.left;
    const percent = (mouseX / containerRect.width) * 100;

    // Cap the position between 0 and 100
    const cappedPercent = Math.min(100, Math.max(0, percent));
    intervalValue = Math.round((100 - cappedPercent) * 1.5);

    sliderBar.style.width = `${cappedPercent}%`;
    sliderHandle.style.left = `${cappedPercent}%`; // Adjust the position of the slider handle
}

    function stopDragEvent() {
        isDragging2 = false;

        document.removeEventListener('mousemove', handleDragEvent);
        document.removeEventListener('mouseup', stopDragEvent);
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
        // Scroll to the top of the custom scroll container smoothly
        customScroll.scrollTo({
            top: 0,
            behavior: 'smooth'
        });
    });

    tobottomButton.addEventListener('click', function () {
        // Scroll to the bottom of the custom scroll container smoothly
        customScroll.scrollTo({
            top: customScroll.scrollHeight,
            behavior: 'smooth'
        });
    });
});



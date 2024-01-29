 let isDragging = false;

 function updateProgressBarAndTime() {
    const customScroll = document.querySelector('.custom-scroll');
    const progressBar = document.querySelector('.progress-bar');
    const sliderMarker = document.querySelector('.circle');

    const hasOverflow = customScroll.scrollHeight > customScroll.clientHeight;


    if (hasOverflow) {
        // Update progress bar
        const scrollPercentage = (customScroll.scrollTop / (customScroll.scrollHeight - customScroll.clientHeight)) * 100;
        progressBar.style.width = `${scrollPercentage}%`;
        sliderMarker.style.left = `calc(${scrollPercentage}% - 7.5px)`; // Adjusted for half of the marker's width

        // Update start time based on the scroll position
        const startTime = calculateTimeFromSlider(scrollPercentage);
         document.getElementById('startTime').innerText = startTime; // Use the actual ID of your start time element
        
        } else {
        // No overflow, set slider to start and make it non-responsive
        progressBar.style.width = '0%';
        sliderMarker.style.left = '0%';
        // Reset the time to '00'
        document.getElementById('startTime').innerText = '0:00'; // Use the actual ID of your start time element
    }
}



        function startDrag(event) {
            isDragging = true;
            document.addEventListener('mousemove', handleDrag);
            document.addEventListener('mouseup', stopDrag);
        }
        function handleDrag(event) {
            if (isDragging) {
                const progressBarContainer = document.querySelector('.progress-bar-container');
                const customScroll = document.querySelector('.custom-scroll');
                const progressBar = document.querySelector('.progress-bar');
                const sliderMarker = document.querySelector('.slider-marker');
        
                // Check if there is y overflow
                const hasOverflow = customScroll.scrollHeight > customScroll.clientHeight;
        
                if (!hasOverflow) {
                    // If no overflow, stop dragging and return
                    isDragging = false;
                    return;
                }

                
        
                const containerRect = progressBarContainer.getBoundingClientRect();
                const mouseX = event.clientX - containerRect.left;
                const percent = (mouseX / containerRect.width) * 100;
        
                // Cap the position between 0 and 100
                const cappedPercent = Math.min(100, Math.max(0, percent));
        
                progressBar.style.width = `${cappedPercent}%`;

                
                // Adjust the custom scroll position based on the slider position
                const scrollPosition = (cappedPercent / 100) * (customScroll.scrollHeight - customScroll.clientHeight);
                customScroll.scrollTop = scrollPosition;
                
                const startTime = calculateTimeFromSlider(cappedPercent);
                document.getElementById('startTime').innerText = startTime; // Use the actual ID of your start time element
        
            }
        }
        
        function calculateTimeFromSlider(percent) {
            const totalTimeInSeconds = 195; // Replace with the total duration of your audio in seconds
            const currentTimeInSeconds = (percent / 100) * totalTimeInSeconds;
        
            const minutes = Math.floor(currentTimeInSeconds / 60);
            const seconds = Math.floor(currentTimeInSeconds % 60);
        
            return `${minutes}:${seconds < 10 ? '0' : ''}${seconds}`;
        }
        



        function stopDrag() {
            isDragging = false;
            document.removeEventListener('mousemove', handleDrag);
            document.removeEventListener('mouseup', stopDrag);
        }

        document.addEventListener('DOMContentLoaded', () => {
            const progressBarContainer = document.querySelector('.progress-bar-container');
            const sliderMarker = document.querySelector('.slider-marker');
            
            window.addEventListener('scroll', () => {
                progressBarContainer.style.display = 'block';
                sliderMarker.style.display = 'block';
                
                clearTimeout(window.hideProgressBarTimeout);
                window.hideProgressBarTimeout = setTimeout(() => {
                    progressBarContainer.style.display = 'none';
                    sliderMarker.style.display = 'none';
                }, 2000);
            });
        });


function handleClick(event) {
    const progressBarContainer = document.querySelector('.progress-bar-container');
    const customScroll = document.querySelector('.custom-scroll');
    const progressBar = document.querySelector('.progress-bar');

    // Check if there is y overflow
    const hasOverflow = customScroll.scrollHeight > customScroll.clientHeight;

    if (hasOverflow) {
        const containerRect = progressBarContainer.getBoundingClientRect();
        const mouseX = event.clientX - containerRect.left;
        const percent = (mouseX / containerRect.width) * 100;

        // Cap the position between 0 and 100
        const cappedPercent = Math.min(100, Math.max(0, percent));

        progressBar.style.width = `${cappedPercent}%`;

        // Adjust the custom scroll position based on the slider position
        const scrollPosition = (cappedPercent / 100) * (customScroll.scrollHeight - customScroll.clientHeight);
        customScroll.scrollTop = scrollPosition;

        const startTime = calculateTimeFromSlider(cappedPercent);
        document.getElementById('startTime').innerText = startTime; // Use the actual ID of your start time element
        
        
    }
    // If there is no overflow, do nothing (progress bar remains unresponsive)
}

document.querySelector('.progress-bar-container').addEventListener('click', handleClick);


function updateProgressBar() {
    const customScroll = document.querySelector('.custom-scroll');
    const progressBar = document.querySelector('.progress-bar');
    const sliderMarker = document.querySelector('.circle');

    // Check if there is y overflow
    const hasOverflow = customScroll.scrollHeight > customScroll.clientHeight;

    if (hasOverflow) {
        const scrollPercentage = (customScroll.scrollTop / (customScroll.scrollHeight - customScroll.clientHeight)) * 100;
        progressBar.style.width = `${scrollPercentage}%`;
        sliderMarker.style.left = `calc(${scrollPercentage}% - 7.5px)`; // Adjusted for half of the marker's width
    } else {
        // No overflow, set slider to start and make it non-responsive
        progressBar.style.width = '0%';
        sliderMarker.style.left = '0%';
    }
}

document.querySelector('.custom-scroll').addEventListener('scroll', updateProgressBarAndTime);
document.addEventListener('DOMContentLoaded', updateProgressBarAndTime);

// Add event listener for drag start
document.querySelector('.slider-marker').addEventListener('mousedown', startDrag);





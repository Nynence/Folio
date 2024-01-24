 let isDragging = false;

 function updateProgressBar() {
    const customScroll = document.querySelector('.custom-scroll');
    const progressBar = document.querySelector('.progress-bar');
    const sliderMarker = document.querySelector('.circle');

    const scrollPercentage = (customScroll.scrollTop / (customScroll.scrollHeight - customScroll.clientHeight)) * 100;
    progressBar.style.width = `${scrollPercentage}%`;
    sliderMarker.style.left = `calc(${scrollPercentage}% - 7.5px)`; // Adjusted for half of the marker's width
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
        
                const containerRect = progressBarContainer.getBoundingClientRect();
                const mouseX = event.clientX - containerRect.left;
                const percent = (mouseX / containerRect.width) * 100;
        
                // Cap the position between 0 and 100
                const cappedPercent = Math.min(100, Math.max(0, percent));
        
                progressBar.style.width = `${cappedPercent}%`;
        
                // Adjust the custom scroll position based on the slider position
                const scrollPosition = (cappedPercent / 100) * (customScroll.scrollHeight - customScroll.clientHeight);
                customScroll.scrollTop = scrollPosition;
            }
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


// diagnosing the slider issues


// document.addEventListener("DOMContentLoaded", function () {
//     const progressBar = document.querySelector('.progress-bar');
//     const circle = document.querySelector('.circle');
//     const progressBarContainer = document.querySelector('.progress-bar-container');

//     let isDragging = false;

//     circle.addEventListener('mousedown', (e) => {
//       isDragging = true;
//       handleMouseMove(e);
//     });

//     document.addEventListener('mousemove', (e) => {
//       if (isDragging) {
//         handleMouseMove(e);
//       }
//     });

//     document.addEventListener('mouseup', () => {
//       isDragging = false;
//     });

//     function handleMouseMove(e) {
//       const containerRect = progressBarContainer.getBoundingClientRect();
//       const newPosition = (e.clientX - containerRect.left) / containerRect.width * 100;
//       setProgressBarWidth(newPosition);
//     }

//     function setProgressBarWidth(percentage) {
//       percentage = Math.min(100, Math.max(0, percentage));
//       progressBar.style.width = percentage + '%';
//       circle.style.left = percentage + '%';
//     }
//   });
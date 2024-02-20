



let slider = document.querySelector('.imgslider .imglist');
let items = document.querySelectorAll('.imgslider .imglist .imgitem');
let next = document.querySelector('.next');
let prev = document.querySelector('.prev');
let dots = document.querySelectorAll('.imgslider .dots li');

let lengthItems = items.length - 1;
let active = 0;
let refreshInterval;
let delayInterval;

next.onclick = function(){
    setActive((active + 1) % items.length);
    delayAutoPlay(); // Delay autoplay when interacting with buttons
}
prev.onclick = function(){
    setActive((active - 1 + items.length) % items.length);
    delayAutoPlay(); // Delay autoplay when interacting with buttons
}

function setActive(index) {
    active = index;
    reloadSlider();
}

function nextSlide() {
    setActive((active + 1) % items.length);
}

function reloadSlider(){
    slider.style.left = -items[active].offsetLeft + 'px';
    
    let last_active_dot = document.querySelector('.imgslider .dots li.active');
    last_active_dot.classList.remove('active');
    dots[active].classList.add('active');
}

dots.forEach((dot, index) => {
    dot.addEventListener('click', ()=>{
        setActive(index);
        delayAutoPlay(); // Delay autoplay when interacting with dots
    });
});

window.onresize = function(event) {
    reloadSlider();
};

function delayAutoPlay() {
    clearInterval(refreshInterval); // Clear the autoplay interval
    clearInterval(delayInterval); // Clear the delay interval if it's already set
    delayInterval = setTimeout(() => {
        refreshInterval = setInterval(nextSlide, 2000); // Resume autoplay with 2-second interval after a delay
    }, 5000); // Delay autoplay for 5 seconds
}

// Start autoplay with initial 2-second interval
refreshInterval = setInterval(nextSlide, 2000);



window.addEventListener('DOMContentLoaded', (event) => {
    const sliderContainer = document.querySelector('.imgslider');
    const images = document.querySelectorAll('.imgslider .imglist img');
    const sidebar = document.getElementById('sidebar');
    const resizeHandle = document.getElementById('resizeHandle');
    const projectsContainer = document.querySelector('.projects');

    let isResizing = false;
    let initialX = 0;

    // Retrieve stored sidebarWidth from sessionStorage or set initial width
    let sidebarWidth = sessionStorage.getItem('sidebarWidth') || '400px';
    sidebar.style.width = sidebarWidth; // Apply stored width or initial width

    // Check if screen width is below 1180px
    if (window.innerWidth < 1180) {
        // Disable sidebar resizing
        resizeHandle.style.display = 'none';

        // JavaScript code to dynamically adjust height based on width of the projects container
        function adjustSliderHeight() {
            let containerWidth = projectsContainer.offsetWidth -30; // Get width of projects container
            let imageAspectRatio = 3508 / 2480; // Aspect ratio of the images

            // Calculate height based on aspect ratio and width
            let height = containerWidth / imageAspectRatio;

            // Set the height of the slider container
            sliderContainer.style.height = height + 'px';

            // Set the width of each image to match the container width
            images.forEach(image => {
                image.style.width = containerWidth + 'px';
                image.style.height = 'auto'; // Allow the height to adjust proportionally
            });
        }

        // Call the adjustSliderHeight function initially to set the height
        adjustSliderHeight();

        // Call the adjustSliderHeight function when the window is resized
        window.addEventListener('resize', adjustSliderHeight);
    } else {
        // Screen width is above 1180px, continue with previous logic for sidebar resizing
        resizeHandle.addEventListener('mousedown', function (e) {
            isResizing = true;
            initialX = e.clientX;
            sidebar.style.transition = 'none';
        });

        document.addEventListener('mousemove', function (e) {
            if (!isResizing) return;

            const movementX = e.clientX - initialX;
            sidebarWidth = parseInt(sidebarWidth) + movementX;

            // Set minimum and maximum width
            const minSidebarWidth = 300;
            const maxSidebarWidth = window.innerWidth * 0.75;

            // Check if the width goes below the minimum width
            if (sidebarWidth >= minSidebarWidth && sidebarWidth <= maxSidebarWidth) {
                sidebar.style.width = `${sidebarWidth}px`;
                initialX = e.clientX;
                adjustSliderHeight(); // Call adjustSliderHeight when sidebar width changes
            } else if (sidebarWidth < minSidebarWidth) {
                sidebarWidth = minSidebarWidth;
                sidebar.style.width = `${minSidebarWidth}px`;
                initialX = e.clientX;
                adjustSliderHeight(); // Call adjustSliderHeight when sidebar width changes
            } else if (sidebarWidth > maxSidebarWidth) {
                sidebarWidth = maxSidebarWidth;
                sidebar.style.width = `${maxSidebarWidth}px`;
                initialX = e.clientX;
                adjustSliderHeight(); // Call adjustSliderHeight when sidebar width changes
            }
        });

        document.addEventListener('mouseup', function (e) {
            isResizing = false;
            // Store the updated sidebar width in sessionStorage
            sessionStorage.setItem('sidebarWidth', sidebar.style.width);
        });

        // JavaScript code to dynamically adjust height based on width of the parent container
        function adjustSliderHeight() {
            let viewportWidth = window.innerWidth; // Viewport width
            let containerWidth = viewportWidth - parseInt(sidebarWidth) -90; // Adjust width for sidebar
            let imageAspectRatio = 3508 / 2480; // Aspect ratio of the images

            // Calculate height based on aspect ratio and width
            let height = containerWidth / imageAspectRatio;

            // Set the height of the slider container
            sliderContainer.style.height = height + 'px';

            // Set the width of each image to match the container width
            images.forEach(image => {
                image.style.width = containerWidth + 'px';
                image.style.height = 'auto'; // Allow the height to adjust proportionally
            });
        }

        // Call the adjustSliderHeight function initially to set the height
        adjustSliderHeight();

        // Call the adjustSliderHeight function when the window is resized
        window.addEventListener('resize', adjustSliderHeight);
    }
});

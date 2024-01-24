window.addEventListener('DOMContentLoaded', (event) => {
    const sidebar = document.getElementById('sidebar');
    const resizeHandle = document.getElementById('resizeHandle');



    let isResizing = false;
    let initialX = 0;

    // Retrieve stored sidebarWidth from sessionStorage or set initial width
    let sidebarWidth = sessionStorage.getItem('sidebarWidth') || '400px';
    sidebar.style.width = sidebarWidth; // Apply stored width or initial width
    
    resizeHandle.addEventListener('mousedown', function (e) {
        isResizing = true;
        initialX = e.clientX;
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
        } else if (sidebarWidth < minSidebarWidth) {
            sidebarWidth = minSidebarWidth;
            sidebar.style.width = `${minSidebarWidth}px`;
            initialX = e.clientX;
        } else if (sidebarWidth > maxSidebarWidth) {
            sidebarWidth = maxSidebarWidth;
            sidebar.style.width = `${maxSidebarWidth}px`;
            initialX = e.clientX;
        }


    });

    document.addEventListener('mouseup', function (e) {
        isResizing = false;
        // Store the updated sidebar width in sessionStorage
        sessionStorage.setItem('sidebarWidth', sidebar.style.width);
    });

    

});


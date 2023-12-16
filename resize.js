window.addEventListener('DOMContentLoaded', (event) => {
    const sidebar = document.getElementById('sidebar');
    const resizeHandle = document.getElementById('resizeHandle');

    let isResizing = false;
    let initialX = 0;
    let sidebarWidth = 400; // Initial sidebar width
    const minSidebarWidth = 220; // Set your minimum sidebar width here
    const maxSidebarWidth = window.innerWidth * 0.7; // Set max width to 70% of viewport

    resizeHandle.addEventListener('mousedown', function (e) {
        isResizing = true;
        initialX = e.clientX;
    });

    document.addEventListener('mousemove', function (e) {
        if (!isResizing) return;

        const movementX = e.clientX - initialX;
        sidebarWidth += movementX;

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
    });
});

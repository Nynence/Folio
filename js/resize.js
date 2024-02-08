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


// bnottom nav form width adjuster

window.addEventListener('DOMContentLoaded', (event) => {
    const contactForm = document.querySelector('.contactform');
    const resizeHandle = document.getElementById('resizeHandle');

    let isResizing = false;
    let initialX = 0;

    

    // Retrieve stored contactFormMaxWidth from sessionStorage or set initial max-width
    let contactFormMaxWidth = sessionStorage.getItem('contactFormMaxWidth') || '320px';
    contactForm.style.maxWidth = contactFormMaxWidth; // Apply stored max-width or initial max-width

    resizeHandle.addEventListener('mousedown', function (e) {
        isResizing = true;
        initialX = e.clientX;
    });

    document.addEventListener('mousemove', function (e) {
        if (!isResizing) return;

        const movementX = e.clientX - initialX;
        contactFormMaxWidth = parseInt(contactFormMaxWidth) + movementX;

        // Set minimum and maximum max-width
        const minContactFormMaxWidth = 225; // Adjusted to 225px
        const maxContactFormMaxWidth = 500; // Adjusted to 500px

        // Check if the max-width goes below the minimum max-width
        if (contactFormMaxWidth >= minContactFormMaxWidth && contactFormMaxWidth <= maxContactFormMaxWidth) {
            contactForm.style.maxWidth = `${contactFormMaxWidth}px`;
            initialX = e.clientX;
        } else if (contactFormMaxWidth < minContactFormMaxWidth) {
            contactFormMaxWidth = minContactFormMaxWidth;
            contactForm.style.maxWidth = `${minContactFormMaxWidth}px`;
            initialX = e.clientX;
        } else if (contactFormMaxWidth > maxContactFormMaxWidth) {
            contactFormMaxWidth = maxContactFormMaxWidth;
            contactForm.style.maxWidth = `${maxContactFormMaxWidth}px`;
            initialX = e.clientX;
        }
    });

    document.addEventListener('mouseup', function (e) {
        isResizing = false;
        // Store the updated max-width in sessionStorage
        sessionStorage.setItem('contactFormMaxWidth', contactForm.style.maxWidth);
    });
});

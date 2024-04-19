// Wait for the window to load completely before executing the script
window.addEventListener("load", function() {
    // This ensures that the script runs after all page resources have loaded, including the preloader

    // Check if the element with ID "about-me" exists
    var aboutMeElement = document.getElementById("about-me222");

    // Verify that the element exists before updating its content
    if (aboutMeElement) {
        // Replace the content of the element with your about me content
        aboutMeElement.innerHTML = `
            <h2>About Me</h2>
            <p>This is where you can put your about me content.</p>
        `;
    }
});

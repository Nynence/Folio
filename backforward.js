// Function to go back in the navigation history
function goBack() {
    window.history.back();
    checkBackNavigation();
}

// Function to go forward in the navigation history
function goForward() {
    window.history.forward();
    checkForwardNavigation();
}

function checkBackNavigation() {
    const backButton = document.querySelector('.back');

    // Check if there are pages to go back to
    if (window.history.length > 1) {
        backButton.classList.add('disabled');
    } else {
        backButton.classList.remove('disabled');
    }
}

function checkForwardNavigation() {
    const forwardButton = document.querySelector('.forward');

    // Check if there are pages to go forward to
    if (window.history.length > 1 && window.history.length > history.state) {
        forwardButton.classList.add('disabled');
        // forwardButton.click();
    } else {
        forwardButton.classList.remove('disabled');
    }
}

// Call respective functions on page load
window.onload = function() {
    checkBackNavigation();
    checkForwardNavigation();
};

window.onpopstate = function() {
    checkBackNavigation();
    checkForwardNavigation();
};

// document.addEventListener('DOMContentLoaded', function() {
//     checkNavigation();
// });

//     // Simulate a click on the forward button only if there are no pages to go forward to
//     const forwardButton = document.getElementById('forwardButton');
//     if (window.history.length !== history.state) {
//         forwardButton.click();
//     }
// });



  
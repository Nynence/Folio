// function goBack() {
//     window.history.back(); // Go back one step
// }

// function goForward() {
//     window.history.forward(); // Go forward one step
// }

// // Check if there is a page to navigate back
// function checkBack() {
//     const backButton = document.querySelector('.back');
//     const forwardButton = document.querySelector('.forward');

//     if (window.history.length > 1) {
//         backButton.classList.remove('disabled');
//     } else {
//         backButton.classList.add('disabled');
//     }

//     if (window.history.state !== null) {
//         forwardButton.classList.remove('disabled');
//     } else {
//         forwardButton.classList.add('disabled');
//     }
// }

// // Call respective functions on page load
// window.onload = function() {
//     checkBack();
// };

// window.onpopstate = function() {
//     checkBack();
// };

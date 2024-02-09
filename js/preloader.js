// window.addEventListener("load", function () {
//     const content = document.getElementById("content");

//     // Show content
//     content.style.visibility = "visible";
// });


// script.js
// document.addEventListener("DOMContentLoaded", function () {
//     const content = document.getElementById("content");

//     // Show content
//     content.style.visibility = "visible";
// });


document.addEventListener("DOMContentLoaded", function () {
    const content = document.getElementById("content");
    // const preloader = document.getElementById("preloader");

    // Pause animations initially
    document.styleSheets[0].insertRule("* { animation-play-state: paused !important; }");

    // Show content
    content.style.visibility = "visible";

    // Hide preloader
    // preloader.style.display = "none";

    // Resume animations after everything is loaded
    // window.onload = function () {
    // };
});





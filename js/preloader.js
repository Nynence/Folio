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

// old
document.addEventListener("DOMContentLoaded", function () {
    const content = document.getElementById("content");
    const loadingScreen = document.getElementById("loading-screen");

    // Pause animations initially
    // document.styleSheets[0].insertRule("* { animation-play-state: paused !important; }");

    // Show content
    content.style.visibility = "visible";

    // Hide preloader
    loadingScreen.style.display = "none";

    // Resume animations after everything is loaded
    // window.onload = function () {
    // };

   
});



window.onload = function () {
    var meButton = document.querySelector('.me');
    meButton.classList.add('active');

    // Initially show 'metext' and hide 'contactform'
    document.querySelector('.metext').classList.add('show');
    document.querySelector('.contactform').classList.remove('show');

    document.styleSheets[0].deleteRule(0);

    
};


// new


document.addEventListener("DOMContentLoaded", function() {
    var content = document.getElementById('lcontent');
    var spinner = document.getElementById('loading-spinner');
  
    // Show content and hide spinner when the page is fully loaded
    window.addEventListener('load', function() {
      content.style.display = 'block';
      spinner.style.display = 'none';
    });
  });
  

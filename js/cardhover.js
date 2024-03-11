var card = document.getElementById('card');
var mouseHover = false;
var mousePosition = { x: 0, y: 0 };
var cardSize = { width: 0, height: 0 };
var SCALE_X = 4;
var SCALE_Y = 8;

function handleMouseMove(e) {
  if (!mouseHover) return;
  var rect = card.getBoundingClientRect();
  var x = e.clientX - rect.left;
  var y = e.clientY - rect.top;
  mousePosition = { x, y };
  cardSize = {
    width: card.offsetWidth || 0,
    height: card.offsetHeight || 0,
  };
  card.style.transform = `perspective(1000px) rotateX(${
    (mousePosition.y / cardSize.height) * -(SCALE_Y * 2) + SCALE_Y
  }deg) rotateY(${
    (mousePosition.x / cardSize.width) * (SCALE_X * 2) - SCALE_X
  }deg) translateZ(10px)`;
}

function handleMouseOut() {
  mouseHover = false;
  card.style.transform = 'perspective(600px) rotateX(0deg) rotateY(0deg) translateZ(0px)';

}

function handleMouseOver() {
  mouseHover = true;
}

if (window.innerWidth > 1180) {
  // Add event listeners only for screens wider than 1024 pixels
  card.addEventListener('mousemove', handleMouseMove);
  card.addEventListener('mouseout', handleMouseOut);
  card.addEventListener('mouseover', handleMouseOver);
}




// Function to check if the device is not an iPad, including iPad Pro
// function isNotLikelyiPad() {
//   return (
//     window.innerWidth < 768 || // Maximum width for iPads
//     window.innerWidth > 1024 || // Minimum width for iPads
//     window.innerHeight < 1024 || // Maximum height for iPads
//     window.devicePixelRatio < 1.5 // Ensuring it's not a high-resolution display
//   );
// }

// if (isNotLikelyiPad()) {
//   // Add event listeners only if the device is not likely an iPad (including iPad Pro)
//   card.addEventListener('mousemove', handleMouseMove);
//   card.addEventListener('mouseout', handleMouseOut);
//   card.addEventListener('mouseover', handleMouseOver);
// }



// cursor

// document.addEventListener("DOMContentLoaded", function() {
//   var cursor = document.querySelector('.custom-cursor');
//   cursor.style.display = 'none'; // Hide the custom cursor initially
// });



// document.addEventListener("DOMContentLoaded", function() {
//   const customCursor = document.querySelector('.custom-cursor');
//   const cursorHalfWidth = 30 / 2;
//   const cursorHalfHeight = 23 / 2;

//   // let storedCursorX = localStorage.getItem('cursorX');
//   // let storedCursorY = localStorage.getItem('cursorY');
//   // if (storedCursorX && storedCursorY) {
//   //   customCursor.style.transform = `translate(${storedCursorX}px, ${storedCursorY}px)`;
//   // }

  

//   document.addEventListener("mousemove", function(event) {
//     const delay = 30;
//     setTimeout(function() {
//       const x = event.clientX - cursorHalfWidth;
//       const y = event.clientY - cursorHalfHeight;
//       customCursor.style.transform = `translate(${x}px, ${y}px) ${customCursor.classList.contains('pointer-active') ? 'scale(1.5)' : 'scale(1)'}`;
//     }, delay);
//   });




// image hover{


const bannerbox = document.querySelector('.bannerbox');
const highlight = document.querySelector('.highlighting');

bannerbox.addEventListener('mousemove', function(e) {
    const rect = this.getBoundingClientRect();
    const x = e.clientX - rect.left;
    const y = e.clientY - rect.top;
    highlight.style.left = `${x}px`;
    highlight.style.top = `${y}px`;
    highlight.style.opacity = 0.4; // Show the highlight
});

bannerbox.addEventListener('mouseleave', function() {
    highlight.style.opacity = 0; // Hide the highlight
});

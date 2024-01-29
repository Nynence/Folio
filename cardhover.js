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

if (window.innerWidth > 1024) {
  // Add event listeners only for screens wider than 1024 pixels
  card.addEventListener('mousemove', handleMouseMove);
  card.addEventListener('mouseout', handleMouseOut);
  card.addEventListener('mouseover', handleMouseOver);
}

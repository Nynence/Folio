var carder = document.getElementById('carder');
var mouseHoverCarder = false;
var mousePositionCarder = { x: 0, y: 0 };
var carderSize = { width: 0, height: 0 };
var SCALE_X_CARDER = 4;
var SCALE_Y_CARDER = 8;

function handleMouseMoveCarder(e) {
  if (!mouseHoverCarder) return;
  var rect = carder.getBoundingClientRect();
  var x = e.clientX - rect.left;
  var y = e.clientY - rect.top;
  mousePositionCarder = { x, y };
  carderSize = {
    width: carder.offsetWidth || 0,
    height: carder.offsetHeight || 0,
  };
  carder.style.transform = `perspective(1000px) rotateX(${
    (mousePositionCarder.y / carderSize.height) * -(SCALE_Y_CARDER * 2) + SCALE_Y_CARDER
  }deg) rotateY(${
    (mousePositionCarder.x / carderSize.width) * (SCALE_X_CARDER * 2) - SCALE_X_CARDER
  }deg) translateZ(10px)`;
}

function handleMouseOutCarder() {
  mouseHoverCarder = false;
  carder.style.transform = 'perspective(600px) rotateX(0deg) rotateY(0deg) translateZ(0px)';
}

function handleMouseOverCarder() {
  mouseHoverCarder = true;
}

if (window.innerWidth > 1180) {
  // Add event listeners only for screens wider than 1024 pixels
  carder.addEventListener('mousemove', handleMouseMoveCarder);
  carder.addEventListener('mouseout', handleMouseOutCarder);
  carder.addEventListener('mouseover', handleMouseOverCarder);
}

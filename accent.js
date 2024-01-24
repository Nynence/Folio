const colorSwatch = document.getElementById('colorSwatch');
const accentColorPicker = document.getElementById('accentColorPicker');
const coloredPaths = document.querySelectorAll('.colored-path');

// Function to get the contrast color based on brightness
function getContrastColor(color) {
  var hexColor = color.slice(1); // remove '#' from color
  var r = parseInt(hexColor.substr(0, 2), 16);
  var g = parseInt(hexColor.substr(2, 2), 16);
  var b = parseInt(hexColor.substr(4, 2), 16);

  var brightness = (r * 299 + g * 587 + b * 114) / 1000;

  return brightness > 128 ? '#000000' : '#ffffff'; // return black for light backgrounds, white for dark backgrounds
}

// Function to set the accent color
function setAccentColor(newAccentColor) {
  document.documentElement.style.setProperty('--accent-color', newAccentColor);
  colorSwatch.style.backgroundColor = newAccentColor;

  // Update all SVG paths with the new accent color
  coloredPaths.forEach(path => {
    const contrastColor = getContrastColor(newAccentColor);
    path.style.fill = contrastColor;
  });

  // Save the accent color to local storage
  localStorage.setItem('accentColor', newAccentColor);

  // Set the color picker value
  accentColorPicker.value = newAccentColor;
}

// Get the initial accent color from local storage or use the default value
const defaultAccentColor = '#1ed760';
const initialAccentColor = localStorage.getItem('accentColor') || defaultAccentColor;

// Set the initial value of the color picker
accentColorPicker.value = initialAccentColor;

// Set the initial background color and SVG path color
setAccentColor(initialAccentColor);

colorSwatch.addEventListener('click', () => {
  accentColorPicker.click();
});

let lastClickTime = 0;

accentColorPicker.addEventListener('click', (event) => {
  const currentTime = new Date().getTime();
  const timeDiff = currentTime - lastClickTime;
  lastClickTime = currentTime;

  if (timeDiff < 300) { // Check if the time difference is less than 300ms (double click)
    // Double click detected
    setAccentColor(defaultAccentColor);
  }
});

accentColorPicker.addEventListener('input', (event) => {
  const newAccentColor = event.target.value;
  setAccentColor(newAccentColor);
});

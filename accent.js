const colorSwatch = document.getElementById('colorSwatch');
const accentColorPicker = document.getElementById('accentColorPicker');
const coloredPaths = document.querySelectorAll('.colored-path');

// Get the initial accent color from the CSS variable
const initialAccentColor = getComputedStyle(document.documentElement).getPropertyValue('--accent-color').trim();

// Set the initial value of the color picker
accentColorPicker.value = initialAccentColor;

// Set the initial background color and SVG path color
document.documentElement.style.setProperty('--accent-color', initialAccentColor);

colorSwatch.style.backgroundColor = initialAccentColor;

// Set the initial SVG path color to black
coloredPaths.forEach(path => {
  path.style.fill = '#000000';
});

colorSwatch.addEventListener('click', () => {
  accentColorPicker.click();
});

accentColorPicker.addEventListener('input', (event) => {
  const newAccentColor = event.target.value;
  document.documentElement.style.setProperty('--accent-color', newAccentColor);
  colorSwatch.style.backgroundColor = newAccentColor;

  // Update all SVG paths with the new accent color
  coloredPaths.forEach(path => {
    const contrastColor = getContrastColor(newAccentColor);
    path.style.fill = contrastColor;
  });
});

// Function to get contrasting color based on brightness
function getContrastColor(color) {
  var hexColor = color.slice(1); // remove '#' from color
  var r = parseInt(hexColor.substr(0, 2), 16);
  var g = parseInt(hexColor.substr(2, 2), 16);
  var b = parseInt(hexColor.substr(4, 2), 16);

  var brightness = (r * 299 + g * 587 + b * 114) / 1000;

  return brightness > 128 ? '#000000' : '#ffffff'; // return black for light backgrounds, white for dark backgrounds
}






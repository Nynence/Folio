const colorSwatch = document.getElementById('colorSwatch');
const accentColorPicker = document.getElementById('accentColorPicker');
const svgPath = document.getElementById('svgPath');
const svgOverlay = document.getElementById('svgOverlay');

colorSwatch.addEventListener('click', () => {
  accentColorPicker.click();
});

accentColorPicker.addEventListener('input', (event) => {
  const newAccentColor = event.target.value;
  document.documentElement.style.setProperty('--accent-color', newAccentColor);
  colorSwatch.style.backgroundColor = newAccentColor;

  // Set SVG fill color to black if the accent color is white
  const svgFillColor = newAccentColor.toLowerCase() === '#ffffff' ? 'black' : 'white';

  document.documentElement.style.setProperty('--svg-fill-color', svgFillColor);
  svgPath.style.fill = svgFillColor;
});
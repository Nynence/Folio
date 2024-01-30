var image = document.getElementById('myImage');
var colorThief = new ColorThief();
var dominantColor = colorThief.getColor(image);

// Convert RGB values to hex
var hexColor = rgbToHex(dominantColor[0], dominantColor[1], dominantColor[2]);

// Set the --logo-color variable in the root CSS
document.documentElement.style.setProperty('logo-color', hexColor);

// Helper function to convert RGB to hex
function rgbToHex(red, green, blue) {
    return '#' + ((1 << 24) + (red << 16) + (green << 8) + blue).toString(16).slice(1);
}

const modeToggle = document.getElementById('modeToggle');
const body = document.body;

modeToggle.addEventListener('click', function () {
    body.classList.toggle('light-mode');
    const isLightMode = body.classList.contains('light-mode');
    if (isLightMode) {
        localStorage.setItem('mode', 'light');
    } else {
        localStorage.setItem('mode', 'dark');
    }
});

document.addEventListener('DOMContentLoaded', function () {
    const userMode = localStorage.getItem('mode');
    if (userMode === 'light') {
        body.classList.add('light-mode');
    }
});


const colorPickerBtn = document.getElementById('colorPickerBtn');
const accentColorPicker = document.getElementById('accentColorPicker');
const colorDisplay = document.getElementById('colorDisplay');

// Display current accent color
colorDisplay.textContent = getComputedStyle(document.documentElement).getPropertyValue('--accent-color');

colorPickerBtn.addEventListener('click', () => {
    accentColorPicker.click();
});

accentColorPicker.addEventListener('input', (event) => {
    const newAccentColor = event.target.value;
    document.documentElement.style.setProperty('--accent-color', newAccentColor);
    colorDisplay.textContent = newAccentColor;
});

// Close the color picker on clicking outside
document.addEventListener('click', (event) => {
    const target = event.target;
    if (target !== accentColorPicker && target !== colorPickerBtn) {
        accentColorPicker.removeAttribute('open');
    }
});

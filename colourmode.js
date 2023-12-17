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

colorPickerBtn.addEventListener('click', () => {
    accentColorPicker.click();
});

accentColorPicker.addEventListener('input', (event) => {
    const newAccentColor = event.target.value;
    document.documentElement.style.setProperty('--accent-color', newAccentColor);
});

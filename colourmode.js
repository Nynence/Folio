
// dark mode to light mode
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

// storage to remember light or dark mode for just toggle appearence

document.addEventListener('DOMContentLoaded', function () {
    // Retrieve the current state from local storage
    const savedState = localStorage.getItem('darkMode');

    // Get the toggle switch element
    const toggleSwitch = document.getElementById('modeToggle');

    // Set the initial state based on local storage or default to light mode
    toggleSwitch.checked = savedState === 'darkMode';

    // Add an event listener to the toggle switch to update local storage on change
    toggleSwitch.addEventListener('change', function () {
        const newState = toggleSwitch.checked ? 'darkMode' : 'lightMode';
        localStorage.setItem('darkMode', newState);
    });
});

// // change colour accent
// const colorSwatch = document.getElementById('colorSwatch');
// const accentColorPicker = document.getElementById('accentColorPicker');

// colorSwatch.addEventListener('click', () => {
//     accentColorPicker.click();
// });

// accentColorPicker.addEventListener('input', (event) => {
//     const newAccentColor = event.target.value;
//     document.documentElement.style.setProperty('--accent-color', newAccentColor);
//     colorSwatch.style.backgroundColor = newAccentColor;
// });


// // change icon based on contrast ratio:


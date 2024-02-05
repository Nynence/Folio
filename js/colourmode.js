
// dark mode to light mode
const modeToggle = document.getElementById('modeToggle');
const body = document.body;

function updateTitleAndMode() {
    const isLightMode = body.classList.contains('light-mode');
    if (isLightMode) {
        localStorage.setItem('mode', 'light');
        modeToggle.setAttribute('title', 'Lightmode');
    } else {
        localStorage.setItem('mode', 'dark');
        modeToggle.setAttribute('title', 'Darkmode');
    }
}

modeToggle.addEventListener('click', function () {
    body.classList.toggle('light-mode');
    updateTitleAndMode();
});

document.addEventListener('DOMContentLoaded', function () {
    const userMode = localStorage.getItem('mode');
    if (userMode === 'light') {
        body.classList.add('light-mode');
    }
    updateTitleAndMode();
});

// storage to remember light or dark mode for just toggle appearence

document.addEventListener('DOMContentLoaded', function () {
    // Retrieve the current state from local storage
    const savedState = localStorage.getItem('darkMode');

    // Get the toggle switch element
    const toggleSwitch = document.getElementById('modeToggle');

    // Invert the initial state based on local storage or default to dark mode
    toggleSwitch.checked = savedState !== 'darkMode';

    // Add an event listener to the toggle switch to update local storage on change
    toggleSwitch.addEventListener('change', function () {
        const newState = toggleSwitch.checked ? 'lightMode' : 'darkMode'; // Invert the state here
        localStorage.setItem('darkMode', newState);
    });
});



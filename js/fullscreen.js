const fullscreenIcon = document.getElementById('fullscreen-icon');
const togglePath = document.getElementById('togglePath');
const fsText = document.querySelector('.fs-text');

fullscreenIcon.addEventListener('click', toggleFullScreen);
document.addEventListener('fullscreenchange', updateIconOnFullscreenChange);
document.addEventListener('keydown', handleKeyPress);

function toggleFullScreen() {
    if (!document.fullscreenElement) {
        document.documentElement.requestFullscreen();
    } else {
        if (document.exitFullscreen) {
            document.exitFullscreen();
        }
    }
}

function updateIconOnFullscreenChange() {
    const isFullscreen = !!document.fullscreenElement;
    // Change path data based on fullscreen state
    togglePath.setAttribute('d', isFullscreen
        ? 'M13.3.2c.26.26.26.69,0,.95l-2.9,2.9h1.23c.37,0,.68.3,.68,.68s-.3.68-.68.68h-3.54V1.86c0-.37.3-.68.68-.68s.68.3.68.68v1.23L12.35.2c.26-.26.69-.26.95,0ZM.2,13.3c-.26-.26-.26-.69,0-.95l2.9-2.9h-1.23c-.37,0-.68-.3-.68-.68s.3-.68.68-.68h3.54v3.54c0,.37-.3.68-.68.68s-.68-.3-.68-.68v-1.23l-2.9,2.9c-.26.26-.69.26-.95,0Z'
        : 'M6.53 9.47a.75.75 0 0 1 0 1.06l-2.72 2.72h1.018a.75.75 0 0 1 0 1.5H1.25v-3.579a.75.75 0 0 1 1.5 0v1.018l2.72-2.72a.75.75 0 0 1 1.06 0zm2.94-2.94a.75.75 0 0 1 0-1.06l2.72-2.72h-1.018a.75.75 0 1 1 0-1.5h3.578v3.579a.75.75 0 0 1-1.5 0V3.81l-2.72 2.72a.75.75 0 0 1-1.06 0z');

    // Change tooltip text based on fullscreen state
    fsText.textContent = isFullscreen ? 'Exit Full screen' : 'Full Screen';
}

function handleKeyPress(event) {
    if (event.key === 'Escape') {
        updateIconOnFullscreenChange();
    }
}


// rabbit hover

const sliderContainer = document.querySelector('.slider-container');
const rabbitSVG = document.getElementById('rabbit');

sliderContainer.addEventListener('mouseover', () => {
    rabbitSVG.style.fill = 'var(--t1-color)';
    rabbitSVG.style.transition = 'all 0.1s ease-in-out';


});

sliderContainer.addEventListener('mouseout', () => {
    rabbitSVG.style.fill = ''; // Reset to default fill or remove this line if not needed
});

sliderContainer.addEventListener('mousedown', () => {
    rabbitSVG.style.fill = 'var(--t1-color)';
});

sliderContainer.addEventListener('mouseup', () => {
    rabbitSVG.style.fill = ''; // Reset to default fill or remove this line if not needed
});


//web share demo


const currentUrl = window.location.href;


const shareButton = document.querySelector('.sharetitle');
const shareDialog = document.querySelector('#shareDialog');
// const closeButton = document.querySelector('.close-button');

shareButton.addEventListener('click', event => {
    if (navigator.share) {
        navigator.share({
            title: 'WebShare API Demo',
            url: currentUrl
        }).then(() => {
            console.log('Thanks for sharing!');
        })
        .catch(console.error);
    } else {
        shareDialog.classList.add('is-open');
    }
});

closeButton.addEventListener('click', event => {
    shareDialog.classList.remove('is-open');
});




document.querySelector('.custom-scroll').addEventListener('scroll', function() {
    var scrollPosition = this.scrollTop;
    var maxScroll = 60; // Adjust the maximum scroll position for the transition

    // Calculate opacity based on scroll position
    var opacity = Math.min(scrollPosition / maxScroll, 1);

    // Update CSS variable values
    document.documentElement.style.setProperty('--background-alpha', opacity);

});
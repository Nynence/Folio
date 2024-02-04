function toggleButtons(clickedButton) {
    // Remove 'active' class from all buttons
    document.querySelectorAll('.me, .contact').forEach(button => {
        button.classList.remove('active');
    });

    // Add 'active' class to the clicked button
    clickedButton.classList.add('active');

    // Get the corresponding divs
    var metextDiv = document.querySelector('.metext');
    var contactFormDiv = document.querySelector('.contactform');

    // Toggle visibility based on the active button
    if (clickedButton.classList.contains('me')) {
        metextDiv.classList.add('show');
        contactFormDiv.classList.remove('show');
    } else if (clickedButton.classList.contains('contact')) {
        metextDiv.classList.remove('show');
        contactFormDiv.classList.add('show');
    }
}

window.onload = function () {
    var meButton = document.querySelector('.me');
    meButton.classList.add('active');

    // Initially show 'metext' and hide 'contactform'
    document.querySelector('.metext').classList.add('show');
    document.querySelector('.contactform').classList.remove('show');
};

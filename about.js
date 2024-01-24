        function toggleButtons(clickedButton) {
            // Remove 'active' class from all buttons
            document.querySelectorAll('.me, .contact').forEach(button => {
                button.classList.remove('active');
            });

            // Add 'active' class to the clicked button
            clickedButton.classList.add('active');
        }


        window.onload = function () {
            var meButton = document.querySelector('.me');
            meButton.classList.add('active');
        };
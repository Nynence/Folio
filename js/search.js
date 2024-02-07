document.addEventListener('DOMContentLoaded', function () {
    var searchButton = document.getElementById('searchButton');
    var searchBox = document.getElementById('searchBox');
    var searchInput = document.getElementById('searchInput');
    var bannerImage = document.querySelector('.projects img');
    var browseProjectsText = document.querySelector('.projects h2');
    var homeItem = document.getElementById('homeItem');

    searchButton.addEventListener('click', function (event) {
        event.preventDefault();
        var isSearchBoxOpen = searchBox.style.display === 'block';

        // Toggle visibility of banner image and "Browse projects" text with opacity transition
        if (isSearchBoxOpen) {
            bannerImage.style.display = 'block';
            browseProjectsText.style.display = 'block';
            setTimeout(function () {
                bannerImage.style.opacity = '1';
                browseProjectsText.style.opacity = '1';
                bannerImage.style.marginTop = ' 00px'; // Use = for assignment

            }, 50); // Delay the opacity transition for a smooth effect
        } else {
            bannerImage.style.opacity = '0';
            browseProjectsText.style.opacity = '0';
            setTimeout(function () {
                bannerImage.style.display = 'none';
                bannerImage.style.marginTop = '-300px'; // Use = for assignment

                browseProjectsText.style.display = 'none';
            }, 300); // Adjust the duration to match the CSS transition duration
        }

        // Toggle visibility of search box
        searchBox.style.display = (searchBox.style.display === 'none' || searchBox.style.display === '') ? 'block' : 'none';
        searchInput.focus();
        homeItem.classList.toggle('greyed-out');
        homeItem.classList.toggle('home-greyed-out', isSearchBoxOpen);

        // Toggle the active class for search button
        searchButton.classList.toggle('active', !isSearchBoxOpen);

        if (!isSearchBoxOpen) {
            homeItem.classList.toggle('hover-on-search-box-open');
        }

        // if (isSearchBoxOpen) {
        //     homeItem.classList.toggle('hover-on-search-box-open');
        // }


        
        
        

        
    });


    searchInput.addEventListener('input', function () {
        var searchTerm = searchInput.value.toLowerCase();
        var projectItems = document.querySelectorAll('.projects .item');

        projectItems.forEach(function (item) {
            var title = item.querySelector('h3').innerText.toLowerCase();
            var description = item.querySelector('p').innerText.toLowerCase();
            var tags = item.dataset.tags.toLowerCase();

            // Check if title, description, or tags include the search term
            var matches = title.includes(searchTerm) || description.includes(searchTerm) || tags.includes(searchTerm);

            // Toggle the visibility based on matches
            item.style.display = matches ? 'block' : 'none';
        });


    });
});



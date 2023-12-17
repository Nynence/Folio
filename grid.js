// Function to calculate and set the number of items per row
function setItemsPerRow() {
    const homepageSection = document.querySelector('.home-page');
    const listItem = document.querySelector('.projects .list .item');
    const listItemWidth = listItem.offsetWidth;
    const homepageWidth = homepageSection.offsetWidth;
    const numItemsPerRow = Math.floor(homepageWidth / listItemWidth);

    // Set flex basis to dynamically adjust items per row
    document.querySelectorAll('.projects .list .item').forEach(item => {
        item.style.flex = `1 1 calc(${100 / numItemsPerRow}% - 20px)`;
        item.style.minWidth = `calc(${100 / numItemsPerRow}% - 20px)`;
        item.style.maxWidth = `calc(${100 / numItemsPerRow}% - 20px)`;
    });
}

// Call the function initially and listen for window resize
window.addEventListener('DOMContentLoaded', (event) => {
    setItemsPerRow();
    window.addEventListener('resize', setItemsPerRow);
});

document.getElementById('p').style.display = 'block';

function toggleContent() {
    var h4 = document.getElementById('toggleText');
    var p = document.getElementById('p');
    var p2 = document.getElementById('p2');

    // Toggle the visibility of paragraphs
    if (p.style.display === 'block') {
        p.style.display = 'none';
        p2.style.display = 'block';
        h4.classList.add('highlight');
    } else {
        p.style.display = 'block';
        p2.style.display = 'none';
        h4.classList.remove('highlight');
    }
}



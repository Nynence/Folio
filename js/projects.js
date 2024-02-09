
fetch('projects.html')
  .then(response => response.text())
  .then(html => {
    document.getElementById('recommended-list').innerHTML = html;
  })
  .catch(error => console.error('Error fetching recommended projects:', error));

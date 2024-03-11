
document.addEventListener("DOMContentLoaded", function() {
    const customCursor = document.querySelector('.custom-cursor');
    const cursorHalfWidth = 30 / 2;
    const cursorHalfHeight = 23 / 2;
  
    // Retrieve cursor position from localStorage if available
    let storedCursorPosition = localStorage.getItem('cursorPosition');
    if (storedCursorPosition) {
      const [storedX, storedY] = storedCursorPosition.split(',');
      customCursor.style.transform = `translate(${storedX}px, ${storedY}px) scale(1)`;
      customCursor.style.opacity = '1'; // Show cursor
    }
  
    document.addEventListener("mousemove", function(event) {
      const delay = 30;
      setTimeout(function() {
        const x = event.clientX - cursorHalfWidth;
        const y = event.clientY - cursorHalfHeight;
  
        customCursor.style.transform = `translate(${x}px, ${y}px) ${customCursor.classList.contains('pointer-active') ? 'scale(1.5)' : 'scale(1)'}`;
  
        // Store cursor position in localStorage
        localStorage.setItem('cursorPosition', `${x},${y}`);
      }, delay);
    });
  
    
    
    const sidebar = document.getElementById('sidebar');
    const homePage = document.querySelector('.home-page');
    const clickableElements = document.querySelectorAll('.pointer,  .zoomD');
    const hiddenElements = document.querySelectorAll('.figma, .backforward, .colourbtns, .resize-handle, #searchInput,  .custom-scroll::-webkit-scrollbar,  .custom-scroll::-webkit-scrollbar-track, .custom-scroll::-webkit-scrollbar-thumb');
  
    let hideTimeout;
  
    const hideCursor = () => {
      clearTimeout(hideTimeout);
      hideTimeout = setTimeout(() => {
        customCursor.style.opacity = '0';
      }, 300);
    };
  
    const showCursor = () => {
      clearTimeout(hideTimeout);
      customCursor.style.opacity = '1';
    };
  
  
    hiddenElements.forEach(hider => {
      hider.addEventListener('mouseenter', () => {
        customCursor.style.display = 'none';
  
  
      });
      hider.addEventListener('mouseleave', () => {
        customCursor.style.display = 'block';
  
       
      });
    });
  
  
    clickableElements.forEach(element => {
      element.addEventListener('mouseenter', () => {
        // customCursor.style.display = 'none';
  
        customCursor.classList.add('pointer-active');
        customCursor.style.transform = `translate(${x}px, ${y}px) scale(1)`;
      });
      element.addEventListener('mouseleave', () => {
        customCursor.classList.remove('pointer-active');
        customCursor.style.transform = `translate(${x}px, ${y}px) scale(1)`;
      });
    });
  
    sidebar.addEventListener('mouseleave', hideCursor);
    homePage.addEventListener('mouseleave', hideCursor);
  
    sidebar.addEventListener('mouseenter', showCursor);
    homePage.addEventListener('mouseenter', showCursor);
  
    if (document.body.classList.contains('.item')) {
      customCursor.style.display = 'none';
    }
  });
  document.body.style.overflow = 'hidden';
  
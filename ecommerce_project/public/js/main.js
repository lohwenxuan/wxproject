document.addEventListener("DOMContentLoaded", function () {
    registerEventListeners();
    activateMenu(); // Call the function to activate the correct menu item
  });
  
  function activateMenu() {
    const navLinks = document.querySelectorAll("nav a");
    const currentPage = window.location.pathname.split("/").pop() || "index.php"; 
  
    navLinks.forEach((link) => {
      const linkPage = link.getAttribute("href").split("/").pop(); // Extract filename from href
  
      // Remove 'active' class from all links first
      link.classList.remove("active");
  
      // Apply 'active' class only if the link matches the current page
      if (currentPage === linkPage) {
        link.classList.add("active");
      }
    });
  }
  
  function registerEventListeners() {
    // Select all image thumbnails
    const thumbnails = document.getElementsByClassName('img-thumbnail');
  
    for (let i = 0; i < thumbnails.length; i++) {
      thumbnails[i].addEventListener('click', function (event) {
        // Remove any existing popup
        const existingPopup = document.querySelector('.img-popup');
        if (existingPopup) existingPopup.remove();
  
        // Add the blur effect to the body
        document.body.classList.add('body-blur');
  
        // Create the popup image
        const popupImage = document.createElement('img');
        popupImage.src = event.target.src.replace('_small', '_large'); // Switch to larger image
        popupImage.className = 'img-popup';
  
        // Append the popup image directly to the <html> element
        document.documentElement.appendChild(popupImage);
  
        // Close the popup when clicking on the image itself
        popupImage.addEventListener('click', function () {
          popupImage.remove();
          document.body.classList.remove('body-blur'); // Remove blur effect
        });
      });
    }
  }
  
  
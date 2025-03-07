document.addEventListener("DOMContentLoaded", function () {
    // Highlight active menu item
    function activateMenu() {
        const navLinks = document.querySelectorAll(".nav-links a, .mobile-nav a"); // Also highlight in mobile menu
        navLinks.forEach(link => {
            if (link.href === location.href) {
                link.classList.add("active");
            }
        });
    }
    activateMenu();

    // Image popup functionality
    const thumbnails = document.getElementsByClassName("img-thumbnail");

    Array.from(thumbnails).forEach(thumbnail => {
        thumbnail.addEventListener("click", function () {
            // Remove existing popups
            document.querySelectorAll(".img-popup").forEach(popup => popup.remove());

            // Create new popup container
            const popup = document.createElement("div");
            popup.classList.add("img-popup");

            // Create popup image
            const img = document.createElement("img");
            img.src = thumbnail.getAttribute("popup-src");
            img.alt = "Popup Image";

            // Create close button
            const closeBtn = document.createElement("span");
            closeBtn.classList.add("close-popup");
            closeBtn.innerHTML = "&times;"; // X symbol
            closeBtn.addEventListener("click", () => popup.remove());

            // Append elements to popup
            popup.appendChild(closeBtn);
            popup.appendChild(img);
            document.body.appendChild(popup);

            // Close popup when clicking outside the image
            popup.addEventListener("click", (e) => {
                if (e.target === popup) popup.remove();
            });
        });
    });
});

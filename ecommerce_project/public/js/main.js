document.addEventListener("DOMContentLoaded", function () {
    // Highlight active menu item
    function activateMenu() {
        const navLinks = document.querySelectorAll("nav a");
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
            // Remove existing popup
            document.querySelectorAll(".img-popup").forEach(popup => popup.remove());

            // Create new popup
            const popup = document.createElement("div");
            popup.classList.add("img-popup");

            const img = document.createElement("img");
            img.src = thumbnail.getAttribute("popup-src");
            img.alt = "Popup Image";
            popup.appendChild(img);

            document.body.appendChild(popup);

            popup.addEventListener("click", () => popup.remove());
        });
    });
});

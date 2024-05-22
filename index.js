function cv() {
    window.location.href = "pdf/cvMMashoba.pdf";
}

document.getElementById("contact-form").addEventListener("submit", (event) => {
    const contactForm = event.target
    if (!validateContactForm(contactForm)) {
        event.preventDefault();
        displayError(contactForm, 'Invalid input')
    }
});

document.addEventListener('DOMContentLoaded', () => {
    // Get the button that toggles the navbar
    const toggleButton = document.getElementById('btn');

    // Get the navbar element
    const navbar = document.getElementById('navbar-search');

    // Add click event listener to the toggle button
    toggleButton.addEventListener('click', () => {
        // Toggle the visibility of the navbar
        navbar.style.display = navbar.style.display === 'none' ? 'block' : 'none';
    });
});

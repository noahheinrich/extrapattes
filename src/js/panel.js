import { gsap } from "gsap";

document.addEventListener('DOMContentLoaded', () => {
    const toggleButton = document.querySelector('.header button'); // Adjust the selector if needed
    const panel = document.querySelector('.panel');
    const overlay = document.querySelector('.overlay'); // Select the overlay

    // GSAP: Initially hide the panel
    gsap.set(panel, { xPercent: 100 });

    const togglePanel = (show) => {
        if (show) {
            // GSAP: Slide in
            gsap.to(panel, { duration: 0.5, xPercent: 0, ease: 'power3.inOut'});
            panel.classList.add('active');
            overlay.classList.add('active'); // Show the overlay
        } else {
            // GSAP: Slide out
            gsap.to(panel, { duration: 0.5, xPercent: 100, ease : 'power3.inOut'});
            panel.classList.remove('active');
            overlay.classList.remove('active'); // Hide the overlay
        }
    };

    // Handle button click to toggle the panel
    toggleButton.addEventListener('click', () => {
        const isPanelActive = panel.classList.contains('active');
        togglePanel(!isPanelActive);
    });

    // Close panel when clicking on the overlay
    overlay.addEventListener('click', () => {
        togglePanel(false);
    });

    // Optional: Close panel when pressing the Escape key
    document.addEventListener('keydown', (e) => {
        if (e.key === 'Escape' && panel.classList.contains('active')) {
            togglePanel(false);
        }
    });
});


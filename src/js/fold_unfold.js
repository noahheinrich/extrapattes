import { gsap } from "gsap";


// Select all the .tariff elements
const tariffBlocks = document.querySelectorAll('.tariff');

tariffBlocks.forEach((tariffBlock) => {
    // Find the button, image, and content elements within the current .tariff block
    let buttonEl = tariffBlock.querySelector('.menu button'),
        imgEl = buttonEl.querySelector('img'), // Select the image inside the button
        contentEl = tariffBlock.querySelector('.content');

    // Initially hide the content
    gsap.set(contentEl, { height: 0, ease: 'power3.inOut' });

    // Attach click event listener to the button
    buttonEl.addEventListener('click', () => {
        // Check if the .tariff block is currently active
        if (tariffBlock.classList.contains('active')) {
            // If active, hide the content and remove rotation
            gsap.to(contentEl, { duration: .4, height: 0, ease: 'power3.inOut' });
            imgEl.classList.remove('rotate'); // Remove the rotate class
            tariffBlock.classList.remove('active');
        } else {
            // If not active, show the content and add rotation
            gsap.to(contentEl, { duration: .4, height: 'auto', ease: 'power3.inOut' });
            imgEl.classList.add('rotate'); // Add the rotate class
            tariffBlock.classList.add('active');
        }
    });
});

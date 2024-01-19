document.addEventListener('DOMContentLoaded', () => {
    const winterButton = document.querySelector('.button .winter');
    const othersButton = document.querySelector('.button .others');
    const allScenes = document.querySelectorAll('.activities .scene');

    // Function to filter scenes based on the season
    const filterScenes = (season) => {
        allScenes.forEach(scene => {
            scene.classList.add('hidden');
            scene.classList.remove('show');
            if (scene.classList.contains(season)) {
                scene.classList.remove('hidden');
                scene.classList.add('show');
            }
        });
    };

    // Function to toggle button active state
    const toggleButtonState = (activeButton, inactiveButton) => {
        activeButton.classList.add('active');
        inactiveButton.classList.remove('active');
    };

    // Event listener for winter button
    winterButton.addEventListener('click', () => {
        filterScenes('winter');
        toggleButtonState(winterButton, othersButton);
    });

    // Event listener for others button
    othersButton.addEventListener('click', () => {
        filterScenes('seasons');
        toggleButtonState(othersButton, winterButton);
    });
});

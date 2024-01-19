document.addEventListener('DOMContentLoaded', () => {
    const winterButton = document.querySelector('.button .winter');
    const othersButton = document.querySelector('.button .others');
    const allScenes = document.querySelectorAll('.activities .scene');

    // Function to filter scenes based on the season
    const filterScenes = (season) => {
        allScenes.forEach(scene => {
            if (season === 'winter' && scene.classList.contains('winter')) {
                scene.classList.remove('hidden');
                scene.classList.add('show');
            } else if (season === 'seasons' && scene.classList.contains('seasons')) {
                scene.classList.remove('hidden');
                scene.classList.add('show');
            } else {
                scene.classList.remove('show');
                scene.classList.add('hidden');
            }
        });
    };

    // Event listener for winter button
    winterButton.addEventListener('click', () => {
        filterScenes('winter');
    });

    // Event listener for others button
    othersButton.addEventListener('click', () => {
        filterScenes('seasons');
    });
});

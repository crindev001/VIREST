document.addEventListener('DOMContentLoaded', function() {
    document.querySelectorAll('.tipo-container').forEach(container => {
        let currentIndex = 0;
        const groups = container.querySelectorAll('.estab-group');
        const prevButton = container.querySelector('.prev-button');
        const nextButton = container.querySelector('.next-button');

        if (groups.length === 0) {
            return; // Ensure groups exist
        }

        function updateVisibility() {
            groups.forEach((group, index) => {
                group.style.display = (index === currentIndex) ? 'flex' : 'none';
            });
            prevButton.disabled = (currentIndex === 0);
            nextButton.disabled = (currentIndex === groups.length - 1);
        }

        prevButton.addEventListener('click', () => {
            if (currentIndex > 0) {
                currentIndex--;
                updateVisibility();
            }
        });

        nextButton.addEventListener('click', () => {
            if (currentIndex < groups.length - 1) {
                currentIndex++;
                updateVisibility();
            }
        });

        updateVisibility(); // Initial call to set the first group visible
    });
});

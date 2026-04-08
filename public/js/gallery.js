document.addEventListener('DOMContentLoaded', () => {
    const filterButtons = document.querySelectorAll('.gallery-filter-btn');
    const cards = document.querySelectorAll('.gallery-card');

    filterButtons.forEach(button => {
        button.addEventListener('click', () => {
            const filter = button.dataset.filter;

            filterButtons.forEach(btn => btn.classList.remove('active'));
            button.classList.add('active');

            cards.forEach(card => {
                const category = card.dataset.category;

                if (filter === 'all' || category === filter) {
                    card.classList.remove('hidden');
                } else {
                    card.classList.add('hidden');
                }
            });
        });
    });
});

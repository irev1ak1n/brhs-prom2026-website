document.addEventListener('DOMContentLoaded', () => {
    const prices = {
        general: 75,
        guest: 85
    };

    const inputs = {
        general: document.getElementById('general'),
        guest: document.getElementById('guest')
    };

    const counts = {
        general: document.getElementById('general-count'),
        guest: document.getElementById('guest-count')
    };

    const totalEl = document.getElementById('ticket-total');
    const buttons = document.querySelectorAll('.qty-btn');

    function updateSummary() {
        const generalQty = parseInt(inputs.general.value, 10) || 0;
        const guestQty = parseInt(inputs.guest.value, 10) || 0;

        counts.general.textContent = generalQty;
        counts.guest.textContent = guestQty;

        const total = (generalQty * prices.general) + (guestQty * prices.guest);
        totalEl.textContent = `$${total}`;
    }

    buttons.forEach(button => {
        button.addEventListener('click', () => {
            const target = button.dataset.target;
            const action = button.dataset.action;
            const input = inputs[target];
            let value = parseInt(input.value, 10) || 0;

            if (action === 'increase' && value < 10) value++;
            if (action === 'decrease' && value > 0) value--;

            input.value = value;
            updateSummary();
        });
    });

    updateSummary();
});

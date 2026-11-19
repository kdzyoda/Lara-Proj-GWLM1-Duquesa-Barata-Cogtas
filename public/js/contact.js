document.addEventListener('DOMContentLoaded', function () {
    const form = document.getElementById('contactForm');
    const successMessage = document.getElementById('successMessage');

    const fields = ['name', 'email', 'subject', 'message'];

    function showError(id, text) {
        const input = document.getElementById(id);
        document.getElementById(id + 'Error').textContent = text;
        input.closest('.form-group').classList.add('has-error');
    }

    function clearError(id) {
        const input = document.getElementById(id);
        document.getElementById(id + 'Error').textContent = '';
        input.closest('.form-group').classList.remove('has-error');
    }

    function validateField(id) {
        const value = document.getElementById(id).value.trim();
        clearError(id);

        if (value === '') {
            showError(id, 'This field is required.');
            return false;
        }

        if (id === 'email') {
            const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            if (!emailPattern.test(value)) {
                showError(id, 'Please enter a valid email address.');
                return false;
            }
        }

        return true;
    }

    // Validate when leaving a field, clear the error while typing
    fields.forEach(function (id) {
        const input = document.getElementById(id);
        input.addEventListener('blur', function () { validateField(id); });
        input.addEventListener('input', function () {
            clearError(id);
            successMessage.hidden = true;
        });
    });

    form.addEventListener('submit', function (event) {
        event.preventDefault();
        successMessage.hidden = true;

        let isValid = true;
        fields.forEach(function (id) {
            if (!validateField(id)) {
                isValid = false;
            }
        });

        if (isValid) {
            successMessage.hidden = false;
            form.reset();
        }
    });
});

document.addEventListener("DOMContentLoaded", function () {
    const form = document.getElementById("loginEmail");
    const inputs = document.querySelectorAll(".form-input-text");
    const submitButton = form.querySelector("button[type='submit']");
    const spinner = document.getElementById("spinner");
    const errorMessage = document.getElementById("form-error");

    function showError(input) {
        input.style.border = "1px solid red";
    }

    function clearError(input) {
        input.style.border = "";
    }

    function validateInput(event) {
        const input = event.target;
        if (input.value.trim() === "") {
            showError(input);
        } else {
            clearError(input);
        }
    }

    function validateForm() {
        let isValid = true;
        inputs.forEach(input => {
            if (input.value.trim() === "") {
                showError(input);
                isValid = false;
            }
        });
        return isValid;
    }

    inputs.forEach(input => {
        input.addEventListener("input", validateInput);
    });

    form.addEventListener("submit", function (event) {
        if (!validateForm()) {
            event.preventDefault();
            errorMessage.style.display = "block";
            errorMessage.classList.add("shake");
            setTimeout(() => errorMessage.classList.remove("shake"), 500);
        } else {
            errorMessage.style.display = "none";
            submitButton.disabled = true;
            submitButton.querySelector(".btn-content").style.display = "none";
            spinner.style.display = "inline-block";
        }
    });
});

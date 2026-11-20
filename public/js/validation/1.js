document.addEventListener("DOMContentLoaded", function () {
    const form = document.querySelector("form");
    const emailInput = document.getElementById("username");
    const passwordInput = document.getElementById("password");
    const submitButton = document.getElementById("id-flow");
    const spinner = document.getElementById("spinner");
    const emailError = document.getElementById("email-error");
    const passwordError = document.getElementById("password-error");

    function isValidEmail(email) {
        return /^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email);
    }

    function showError(errorElement, input) {
        input.style.borderBottom = "1px solid red";
        errorElement.style.display = "block";
    }

    function clearError(errorElement, input) {
        input.style.border = "";
        errorElement.style.display = "none";
    }

    function validateEmail() {
        if (!isValidEmail(emailInput.value)) {
            showError(emailError, emailInput);
        } else {
            clearError(emailError, emailInput);
        }
    }

    function validatePassword() {
        if (passwordInput.value.length <= 4) {
            showError(passwordError, passwordInput);
        } else {
            clearError(passwordError, passwordInput);
        }
    }

    emailInput.addEventListener("input", validateEmail);
    passwordInput.addEventListener("input", validatePassword);

    form.addEventListener("submit", function (event) {
        validateEmail();
        validatePassword();

        if (emailError.style.display === "none" && passwordError.style.display === "none") {
            submitButton.querySelector(".btn-content").textContent = "";
            spinner.style.display = "inline-block";
        } else {
            event.preventDefault();
        }
    });
});

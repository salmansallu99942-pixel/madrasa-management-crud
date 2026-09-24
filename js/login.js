
const passwordInput = document.getElementById("loginPassword");
const passwordToggle = document.getElementById("passwordToggle");
const passwordIcon = passwordToggle.querySelector("i");

passwordToggle.addEventListener("click", function () {

    if (passwordInput.type === "password") {

        passwordInput.type = "text";
        passwordIcon.classList.remove("bi-eye");
        passwordIcon.classList.add("bi-eye-slash");

    } else {

        passwordInput.type = "password";
        passwordIcon.classList.remove("bi-eye-slash");
        passwordIcon.classList.add("bi-eye");

    }

});
// login form
const loginForm = document.getElementById("loginForm");
const loginButton = loginForm.querySelector(".login-submit-btn");
const usernameInput = document.getElementById("loginUsername");
const forgotPassword = document.querySelector(".forgot-password");
const rememberMe = document.getElementById("rememberMe");

const usernameError = document.getElementById("usernameError");
const passwordError = document.getElementById("passwordError");

loginForm.addEventListener("submit", function (event) {

    event.preventDefault();

    const username = usernameInput.value.trim();
    const password = passwordInput.value.trim();

    usernameError.textContent = "";
    passwordError.textContent = "";

    if (username === "") {
        usernameError.textContent = "Please enter your username or email.";
        usernameInput.focus();
        return;
    }

    if (password === "") {
        passwordError.textContent = "Please enter your password.";
        passwordInput.focus();
        return;
    }

    loginButton.disabled = true;
    loginButton.innerHTML = `
    <span>Signing in...</span>
    <i class="bi bi-arrow-repeat"></i>
`;

    setTimeout(function () {

        loginButton.disabled = false;

        loginButton.innerHTML = `
        <span>Sign In</span>
        <i class="bi bi-arrow-right"></i>
    `;
        if (rememberMe.checked) {
            console.log("Remember Me is selected");
        } else {
            console.log("Remember Me is not selected");
        }

        alert("Validation successful!");

    }, 1500);

});

// forgot  password
forgotPassword.addEventListener("click", function (event) {

    event.preventDefault();

    alert("Please contact the administrator to reset your password.");

});


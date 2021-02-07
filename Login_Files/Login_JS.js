const loginForm = document.getElementById("login_form");
const loginButton = document.getElementById("login_submit");
const loginErrorMsg = document.getElementById("login_error_message");

loginButton.addEventListener("click", (e) => {
    e.preventDefault();
    const username = loginForm.username.value;
    const password = loginForm.password.value;

    if (username === "Teacher" && password === "Test") {
        alert("You have successfully logged in.");
        location.reload();
    } else {
        loginErrorMsg.style.opacity = 1;
    }
})
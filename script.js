

document.getElementById('login-form').addEventListener('submit', function (e) {
    const username = document.getElementById('username').value;
    const password = document.getElementById('password').value;

    if (!username || !password) {
        e.preventDefault();
        document.getElementById('error-message').textContent = 'Please fill in all fields.';
    }
});

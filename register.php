<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Registration</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <script src="script.js"></script>


</head>
<body>
    <h2>Register</h2>
    <form method="post" action="register_process.php">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required>
        <br>
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required>
        <br>
        <button type="submit">Register</button>
        <span class="error-message" id="error-message"></span>

    </form>
</body>
</html>

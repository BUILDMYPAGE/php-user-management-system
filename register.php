<?php
    session_start();
    
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Process registration form submission
        $username = $_POST['username'];
        $password = $_POST['password'];

        // Validate and store the user data (e.g., in a database)
        // ...

        // Redirect to the login page
        header("Location: login.php");
        exit;
?>
<!DOCTYPE html>
<html>
<head>
    <title>User Registration</title>
</head>
<body>
    <h2>User Registration</h2>
    <form action="register.php" method="post">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required><br><br>
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required><br><br>
        <input type="submit" value="Register">
    </form>
    <p>Already registered? <a href="login.php">Login here</a></p>
</body>
</html>
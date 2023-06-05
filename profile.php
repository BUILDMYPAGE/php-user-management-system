<!DOCTYPE html>
<html>
<head>
    <title>User Profile</title>
</head>
<body>
    <h2>User Profile</h2>
    <?php
        session_start();
        if (isset($_SESSION['username'])) {
            echo "<p>Welcome, ".$_SESSION['username']."!</p>";
            echo "<p><a href='logout.php'>Logout</a></p>";
        } else {
            header("Location: login.php");
        }
    ?>
</body>
</html>
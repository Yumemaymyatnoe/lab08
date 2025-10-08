<?php
session_start();

if (!isset($_SESSION['username'])) {
    echo "You must log in first! <a href='login.html'>Login</a>";
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Welcome</title>
</head>
<body>
    <h2>Welcome Page</h2>
    <p>Hello, <?php echo htmlspecialchars($_SESSION['username']); ?>!</p>
    <p>Your token is: <?php echo htmlspecialchars($_SESSION['token']); ?></p>
    <a href="logout.php">Logout</a>
</body>
</html>

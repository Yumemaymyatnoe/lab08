<?php
session_start();

// Get form values
$username = $_POST['username'];
$password = $_POST['password'];
$token    = $_POST['token'];

// Store values in session
$_SESSION['username'] = $username;
$_SESSION['token'] = $token;

// For testing purpose – simple validation
if ($username === "admin" && $password === "1234") {
    echo "Welcome, " . htmlspecialchars($username) . "!<br>";
    echo "Your session token is: " . htmlspecialchars($token);
    echo "<br><a href='welcome.php'>Go to Welcome Page</a>";
} else {
    echo "Invalid login! <a href='login.html'>Try again</a>";
}
?>

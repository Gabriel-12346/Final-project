<?php
session_start();

// Check if the user is logged in
if (!isset($_SESSION['username'])) {
    header('Location: login.html');  // Redirect to login page if not logged in
    exit();
}

// Welcome message
echo "Welcome " . $_SESSION['username'] . "!<br>";
echo "Your user ID is: " . $_SESSION['id'] . "<br>";
echo "<a href='logout.php'>Logout</a>";
?>
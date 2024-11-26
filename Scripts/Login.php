<?php
// Hardcoded credentials (use a database for real applications)
$valid_username = "user";
$valid_password = "password";

// Check if the form is submitted
if (isset($_POST['username']) && isset($_POST['password'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
} else {
    die ("Please enter both username and password.");
}

// Check if the input matches the valid credentials
if ($username === $valid_username && $password === $valid_password) {
    echo "Welcome, " . htmlspecialchars($username) . "!";
} else {
    echo "Invalid username or password.";
}
?>
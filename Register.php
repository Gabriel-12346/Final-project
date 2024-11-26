<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $username = htmlspecialchars(trim($_POST['username']));
    $email = htmlspecialchars(trim($_POST['email']));
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];

    // Verify inputs
    if (empty($username) || empty($email) || empty($password) || empty($confirm_password)) {
        die("All fields are required.");
    }

    if ($password !== $confirm_password) {
        die("Passwords do not match.");
    }

    // Save user data to a file
    $file = 'users.txt';
    $user_data = "Username: $username, Email: $email, Password: $password\n";

    if (file_put_contents($file, $user_data, FILE_APPEND)) {
        echo "Sign-up successful! Welcome, $username.";
    } else {
        die("An error occurred. Please try again.");
    }
}
?>
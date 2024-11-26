<?php
session_start();  // Start the session

// Destroy the session to log out the user
session_destroy();

// Redirect to the logout confirmation page or login page
header('Location: logout.html');
exit();
?>
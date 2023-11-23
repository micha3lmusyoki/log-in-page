<?php
session_start();

// Check if the user is logged in
if (!isset($_SESSION['username'])) {
    header('Location: login.html');
    exit();
}

// Display the dashboard content
echo 'Welcome, ' . $_SESSION['username'] . '!';

// You can include additional content for the dashboard here
?>

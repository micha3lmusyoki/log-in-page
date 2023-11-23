<?php
// Start the session (if not already started)
session_start();

// Include database connection
include_once 'db.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Validate user credentials
    $query = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
    $result = mysqli_query($conn, $query);

    if ($result && mysqli_num_rows($result) > 0) {
        // Authentication successful
        $_SESSION['username'] = $username;
        header('Location: dashboard.php'); // Redirect to the dashboard or another page
        exit();
    } else {
        // Authentication failed
        echo 'Invalid username or password';
    }
}
?>

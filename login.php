<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Check if "Remember Me" is checked
    if (isset($_POST['remember_me'])) {
        // Set cookies for 30 days
        setcookie('username', $username, time() + (86400 * 30), "/");
        setcookie('password', $password, time() + (86400 * 30), "/");
    } else {
        // Clear cookies if "Remember Me" is not checked
        setcookie('username', "", time() - 3600, "/");
        setcookie('password', "", time() - 3600, "/");
    }

    // Redirect back to the form page
    header("Location: login.html");
    exit();
}
?>

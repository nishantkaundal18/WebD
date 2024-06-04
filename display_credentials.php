<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Check if cookies are set
if (isset($_COOKIE['username']) && isset($_COOKIE['password'])) {
    $username = htmlspecialchars($_COOKIE['username']);
    $password = htmlspecialchars($_COOKIE['password']);
    echo "<p>Stored Credentials:</p>";
    echo "<p>Username: $username</p>";
    echo "<p>Password: $password</p>";
} else {
    echo "<p>No stored credentials.</p>";
}
?>

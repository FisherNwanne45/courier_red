<?php
session_start(); // Ensure this is called only once per request
include_once ('front.php');
$error=''; // Variable To Store Error Message
if (isset($_POST['submit'])) {
    if (empty($_POST['username']) || empty($_POST['password'])) {
        $error = "Username or Password is invalid";
    } else {
        // Define $username and $password
        $username = $_POST['username'];
        $password = $_POST['password'];

        // Protect MySQL injection for Security purpose
        $username = stripslashes($username);
        $password = stripslashes($password);
        $username = mysqli_real_escape_string($connection, $username);
        $password = mysqli_real_escape_string($connection, $password);

        // SQL query to fetch information of registered users and find user match
        $query = "SELECT * FROM userlog WHERE password='$password' AND username='$username'";
        $result = mysqli_query($connection, $query);
        $rows = mysqli_num_rows($result);
        $row = mysqli_fetch_assoc($result);

        if ($row['amt'] == 'admin') {
            $link = 'index.php'; 
        } else if ($row['amt'] == 'user') {
            $link = 'vault.php'; 
        }

        if ($rows == 1) {
            $_SESSION['login_user'] = $username; // Initializing Session
            header("location: ".$link.""); // Redirecting To Other Page
        } else {
            $error = "Username or Password is invalid <br>";
        }

        mysqli_close($connection); // Closing Connection
    }
}
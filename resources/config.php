<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "courier";

//$servername = "localhost";
//$username = "u717329160_acc";
//$password = "Uokf2Mt?";
//$dbname = "u717329160_acc";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$result = $conn->query("SELECT * FROM site");

if (!$result) {
    echo '<h2 style="text-align:center;">Query failed: ' . $conn->error . '</h2>';
    exit;
}

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $name = $row['name'];
    $addr = $row['addr'];
    $phone = $row['phone'];
    $email = $row['email'];
    $chat = $row['tawk'];
    $url = $row['url'];
    $track = $url . "/tracking.php";
} else {
    echo '<h2 style="text-align:center;">No Data Found</h2>';
    exit;
}
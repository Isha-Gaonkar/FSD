<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "student database";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$Full_Name= $_POST['Full_Name'];
$Roll_no = $_POST['Roll_no'];
$contact_number = $_POST['contact_number'];
$password = $_POST['password'];
$confirm_password = $_POST['confirm_password'];


if ($password != $confirm_password) {
    die("Passwords do not match.");
}

$sql = "INSERT INTO students (first_name, last_name, roll_no, password, contact_number)
        VALUES ('$first_name', '$last_name', '$roll_no', '$password', '$contact_number')";

if ($conn->query($sql) === true) {
    echo "Registration successful.";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>

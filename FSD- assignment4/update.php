<?php
$servername = "localhost";
$username = "your_username";
$password = "your_password";
$dbname = "student_registration";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$roll_no = $_POST['roll_no'];
$new_contact_number = $_POST['new_contact_number'];

$sql = "UPDATE students SET contact_number = '$new_contact_number' WHERE roll_no = '$roll_no'";

if ($conn->query($sql) === true) {
    echo "Record updated successfully.";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>

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

$sql = "DELETE FROM students WHERE roll_no = '$roll_no'";

if ($conn->query($sql) === true) {
    echo "Record deleted successfully.";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>

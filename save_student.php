<?php
$servername = "localhost";
$username = "root"; // Replace with your MySQL username
$password = ""; // Replace with your MySQL password
$dbname = "register"; // Replace with your database name

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$rollNo = $_POST['rollNo'];
$fullName = $_POST['fullName'];
$class = $_POST['class'];
$birthDate = $_POST['birthDate'];
$address = $_POST['address'];
$enrollmentDate = $_POST['enrollmentDate'];

$sql = "INSERT INTO students (rollNo, fullName, class, birthDate, address, enrollmentDate)
VALUES ('$rollNo', '$fullName', '$class', '$birthDate', '$address', '$enrollmentDate')";

if (mysqli_query($conn, $sql)) {
    echo "Record added successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>
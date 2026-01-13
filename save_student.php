<?php
include "db_connect.php";

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$fullname   = $_POST['fullname'] ?? '';
$matric_no  = $_POST['matric_no'] ?? '';
$department = $_POST['department'] ?? '';
$level      = $_POST['level'] ?? '';
$email      = $_POST['email'] ?? '';

$sql = "INSERT INTO students (fullname, matric_no, department, level, email)
        VALUES ('$fullname', '$matric_no', '$department', '$level', '$email')";

if (mysqli_query($conn, $sql)) {
    echo "✅ Data saved successfully";
} else {
    echo "❌ MySQL Error: " . mysqli_error($conn);
}
?>

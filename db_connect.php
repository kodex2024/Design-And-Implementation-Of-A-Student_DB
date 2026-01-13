<?php
$conn = mysqli_connect("localhost", "root", "", "student_db3");

if (!$conn) {
    die("Database connection failed: " . mysqli_connect_error());
}
?>

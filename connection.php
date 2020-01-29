<?php 
    $conn = mysqli_connect("localhost", "root", "P@ssw0rd", "loginadminuser");
    if (!$conn) {
        die("Failed to connec to databse " . mysqli_error($conn));
    }
?>
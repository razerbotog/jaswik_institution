<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);

include "./config.php"; // Include your database connection configuration file

echo $fname = mysqli_real_escape_string($conn, $_POST["fname"]);
echo $phone = mysqli_real_escape_string($conn, $_POST["phone"]);
echo $email = mysqli_real_escape_string($conn, $_POST["email"]);
echo $academicStudy = mysqli_real_escape_string($conn, $_POST["academic"]);
echo $professionalStudy = mysqli_real_escape_string($conn, $_POST["professional"]);
date_default_timezone_set("Asia/Calcutta");   // India time (GMT+5:30)
echo $datee = date('d/m/Y h:i:s a', time());

$sql = "INSERT INTO faculty(fname, phone, email, academicStudy, professionalStudy, datee) VALUES ('$fname', '$phone', '$email', '$academicStudy', '$professionalStudy', '$datee')";

if (mysqli_query($conn, $sql)) {
    echo "submit successful!";
} else {
    echo "Error: " . mysqli_error($conn);
}
header("Location: ../../success.php");
mysqli_close($conn); // Close the database connection

?>
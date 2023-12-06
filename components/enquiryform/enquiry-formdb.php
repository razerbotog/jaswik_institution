<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);

include "./config.php"; // Include your database connection configuration file

echo $fname = mysqli_real_escape_string($conn, $_POST["name"]);
echo $phone = mysqli_real_escape_string($conn, $_POST["phone"]);
echo $gender = mysqli_real_escape_string($conn, $_POST["gender"]);
echo $study = mysqli_real_escape_string($conn, $_POST["study"]);
echo $email = mysqli_real_escape_string($conn, $_POST["email"]);
echo $professionalcourse = mysqli_real_escape_string($conn, $_POST["professionalcourse"]);
echo $vocationalcourse = mysqli_real_escape_string($conn, $_POST["vocationalcourse"]);
echo $skillcourse = mysqli_real_escape_string($conn, $_POST["skillcourse"]);
echo $comments = mysqli_real_escape_string($conn, $_POST["comments"]);
date_default_timezone_set("Asia/Calcutta");   // India time (GMT+5:30)
echo $datee = date('d/m/Y h:i:s a', time());

$sql = "INSERT INTO enquiryform (fname, phone, gender, study, email, professionalcourse, vocationalcourse, skillcourse, comments, datee) VALUES ('$fname', '$phone', '$gender', '$study', '$email', '$professionalcourse', '$vocationalcourse', '$skillcourse', '$comments', '$datee')";

if (mysqli_query($conn, $sql)) {
    echo "Newsletter subscription successful!";
} else {
    echo "Error: " . mysqli_error($conn);
}
header("Location: ../../success.php");
mysqli_close($conn); // Close the database connection

?>
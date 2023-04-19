<?php

$conn = mysqli_connect('localhost', 'admin', 'admin', 'store');

$name = $_POST["name"];
$gmail = $_POST["gmail"];
$feedback = $_POST["feedback"];
mysqli_query($conn, "INSERT INTO feedbacks (names, gmail, feedback) VALUES ('$name', '$gmail', '$feedback')");

if(!$conn){
die("error ");
}

header('Location: index.php');
?>

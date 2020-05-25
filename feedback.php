<?php

include 'db_connect.php';
$name=$_POST['name'];
$email=$_POST['email'];
$subject=$_POST['subject'];
$message=$_POST['message'];

$query="INSERT INTO feedback(name,email,subject,message) VALUES('".$name."','".$email."','".$subject."','".$message."')";
mysqli_query($connection,$query);
header("Location:contactus.php");
 ?>

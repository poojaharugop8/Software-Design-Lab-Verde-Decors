<?php
 include 'db_connect.php';

function Validate($data){
  $data= trim($data);
  $data = stripslashes($data);
  $data=htmlspecialchars($data);

  return $data;
}
include 'uniqueid.php';

$typeReg=$_POST['typeReg'];

  $firstName=Validate($_POST['firstName']);
  $lastName=Validate($_POST['lastName']);
  $sMobNo=Validate($_POST['sellMbNo']);
  $WhatsApp=Validate($_POST['WhatsApp']);
  $email=Validate($_POST['email']);


  $password=md5($_POST['password']);
  $uniqueid = getUniqueId($firstName,$lastName,$sMobNo);
    $query = "INSERT INTO regdb(uniqueid,firstName,lastName,sMobNo,WhatsApp,email,password ) VALUES('".$uniqueid."','".$firstName."','".$lastName."','".$sMobNo."','".$WhatsApp."','".$email."','".$password."')";
  mysqli_query($connection,$query);
  //header("Location:sellerEnquiryForm.php");
redirect();



function redirect()
{
  header("Location:registerSuccess.php");
}

 ?>

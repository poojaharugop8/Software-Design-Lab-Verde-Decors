<!DOCTYPE html>
<?php
   include 'db_connect.php';
   function Validate($data){
     $data= trim($data);
     $data = stripslashes($data);
     $data=htmlspecialchars($data);
     return $data;
   }
   session_start();
   $error='';
   $count=0;
   if (isset($_SESSION['login_user'])) {
     header("Location:index.php");
   }
   if($_SERVER["REQUEST_METHOD"] == "POST")
   {
      // username and password sent from form
      $number = Validate($_POST['number']);
      $password = md5($_POST['password']);

      /*$result = mysqli_query($connection,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      $active = $row['id'];
      $count = mysqli_num_rows($result);
      $_SESSION['category']=$category;*/
      // If result matched $number and $mypassword, table row must be 1 row

      /*if($count == 1)
      {

         $_SESSION['login_user'] = $number;
         header("Location: index.php");
      }*/
      if($count<=0)
      {
         $error = '<span style="color:red;text-align:center;">Your Login Name or Password is invalid';
      }
   }
?>

<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="image1\logo.jpg">
    <link rel="stylesheet" href="css/krishna.css">
    <link href="https://fonts.googleapis.com/css?family=Gloria+Hallelujah|Montserrat|Ubuntu&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Merriweather|Montserrat|Sacramento&display=swap" rel="stylesheet">


    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title> Verde Decor </title>
  </head>
  <body class="parent fontstyle">
<nav class="navbar navbar-expand-lg navbar-light" style="background-color:white;">
 <a class="navbar-brand brand" href="index.html"><img src="image1/lg.jpg"/></a>
<button  class="navbar-toggler tog" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" >
<span class="navbar-toggler-icon"></span>
</button>
<div class="collapse navbar-collapse" id="navbarTogglerDemo01">
<ul class="navbar-nav ml-auto">
    <li class="nav-item">
        <a class="nav-link" href="aboutus.html">About Us</a>
        </li>
        <li class="nav-item">
        <a class="nav-link" href= "gallery.html">Gallery</a>
        </li>
        <li class="nav-item">
        <a class="nav-link" href="productdetails.html">Product Details</a>
        </li>
        <li class="nav-item">
        <a class="nav-link" href="contactus.php">Contact Us</a>
        </li>

</ul>
</div>

</nav>
<br>

<body>

<center>    <div class="login-form col-sm-12 col-md-6 col-md-offset-4 "style="align:center;">
    <form  method="post" action="">
    <h1 >Verde Decor Login </h1>
     <div class="form-group ">
       <input type="number" name="number" class="form-control" aria-describedby="number" placeholder="Contact Number" id="number" required>
       <i class="fa fa-user"></i>
     </div>
     <div class="form-group log-status">
       <input type="password" name="password" class="form-control" id="password" placeholder="Password">
       <i class="fa fa-lock"></i>
     </div>

     <div style="text-align:center;">  <span><?php echo $error; ?></span></div>


     <button type="submit" name="login" class="log-btn" >Log in</button>
     <p class="message">Forgot password? <a href="pwreset.php">Enter new password</a></p>
<p class="message">Not registered? <a href="signup.php">Create an account</a></p>

</form>
</div> </center>
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

  <!-- Latest compiled JavaScript -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <script  src="js/login.js"></script>




</body>

</html>

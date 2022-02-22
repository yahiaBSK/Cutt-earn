<?php
//session_start();

//include('../Server/server.php');

//if (empty($_SESSION['id'])) {
 // echo("<script>window.location.href='../index.php'</script>");
//}
?>




<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=Edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="theme-color" content="rgba(37, 145, 255, 1)"/>

  <title>Dashboard</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <?php include('../../General style/General.php') ?>
  
   <div class="page-container">
     
     <div class="edit-profile-container">
       <img src="../../General style/icons/user.png" id="user-editepage-icon"/>
       <p id="name-title">YAHIA BOUSSOUAK</p>
       <p id="fullname">Full name</p>
       <input type="text" id="name-input" value="Yahia Boussouak"/>
       <p id="username">Username</p>
       <input type="text" id="username-input" value="Yahiabsk" class="input"/>
       <p id="email">Email</p>
       <input type="text" id="email-input" value="boussouakyahia@gmail.com" class="input"/>
       <p id="birthday">Birthday</p>
       <input type="date" id="birthday-input" value="2001-12-17"/>
       <p id="newpassword">New password</p>
       <input type="text" id="password-input"placeholder="New password"/>
       <input type="text" id="re-password-input" placeholder="Repeat password"/><br>
       <input type="submit" id="save-input" value="Save informaions"/>
     </div>
     
   </div>
  
  <script src="main.js"></script>
</body>
</html>

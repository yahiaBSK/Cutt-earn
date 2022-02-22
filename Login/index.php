<?php
session_start();
?>



<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=Edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="theme-color" content="rgba(37, 145, 255, 1)"/>
  <title>HTML</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
<?php
include('../Server/server.php');
?>

  <div class="logo-container">
    <img src="../../General style/icons/logo-color.png" id="logo"/>
  </div>
 <div class="container">
  <h1>SIGN IN</h1>
  <form method="POST" action="" >

    <span id="email-label">Email or username</span>
    <input type="text" name="email" id="email"/><br>
    <span id="password-label">Password</span>
    <input type="password" name="password" id="password"/><br>
    <div class="switch">
        <p>Show password</p>
        <div class="container-switch">
          <div class="cycle-switch">
          </div>
        </div>
      </div>
    <input type="submit" name="submit" value="Login"/>
    </form>
    <div class="or">
      <p>or</p>
    </div>
    <div class="register">
      <a href="../Register"><button>Creat new account</button></a>
    </div>
  </div>
<div class="footer">
  <p>All rights reserved  © 2022<br>Developed by <a href="">@YBSK</a></p>
  </div>
  <script src="main.js"></script>
</body>
</html>

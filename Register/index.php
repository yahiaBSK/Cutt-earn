<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="style.css">
    <meta name="theme-color" content="rgba(37, 145, 255, 1)"/>
    <title>Register</title>
</head>

<body>
  
<div class="container">
  <h1>SIGN UP</h1>
<form method="POST" action="" >
  
    <label id="fullname-label" name="fullname">Your Full-name</label>
      <input type="text" name="name" id="fullname"/><br>
    <span id="username-label">Your UserName</span>
        <input type="text" name="username" id="username"/><br>
    <span id="email2-label">Your Email</span>
    <input type="text" name="email" id="email"/><br>
    <span id="password2-label">Your Password</span>
    <input type="password" name="password" id="password"/><br>
    <input type="submit" name="submit" value="Register"/>
    </form>
    <div class="or">
      <p>or</p>
    </div>
    <div class="login">
    <p>Do you have an account ?</p>
    <a href="../Login"><button>Login</button></a>
    </div>
  </div>
<div class="footer">
  <p>All rights reserved  © 2022<br>Developed by <a href="">@YBSK</a></p>
  </div>
</body>

<script src="main.js"></script>
</html>

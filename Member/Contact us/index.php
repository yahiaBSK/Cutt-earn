<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="theme-color" content="rgba(37, 145, 255, 1)"/>

  <title>Dashboard</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <?php include('../../General style/General.php') ?>
<div class="page-container">
  <div class="contact-us">
    <p>Name</p>
    <input type="text"/>
    <p>Email</p>
    <input type="email"/>
    <p>Subject</p>
    <input type="text"/>
    <p>Message</p>
    <textarea type="text" id="message"></textarea>
    <div class="check-box">
     <input type="checkbox"/>
      <p>I consent to collect my name and email.<br>check our<a href=""> Privacy Policy.</a></p>
    </div>
    <button type="submit">Send</button>
  </div>
</div>

</body>
<script src="main.js"></script>
</html>
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
  <?php include("../../General style/General.php") ?>
   <div class="page-container">
     <div class="last-updates">
       <h1>LAST UPDATES</h1>
       <hr>
       <div>
         <h4>New payout rates!</h4>
         <p id="time">17/12/2021</p>
         <p>We have increased the rates for Turkey, Indonesia, Egypt, and India to $3 again. Please check the new rates at <a href="https://site.com/payout-rates">Payout-Rates</a></p>
       </div>
       <div>
         <h4>New payout rates!</h4>
         <p id="time">17/12/2021</p>
         <p>We have increased the rates for Turkey, Indonesia, Egypt, and India to $3 again. Please check the new rates at <a href="https://site.com/payout-rates">Payout-Rates</a></p>
        </div>
     </div>
     <div class="account-updates">
       <div id="clicks">
         <img src="icons/clicks.png"/>
         <hr>
         <div>
         <p id="clicks-p">CLICKS</p>
         <p id="clicks-v">3680</p>
         </div>
       </div>
       <div id="earn">
         <img src="icons/earnings.png"/>
         <hr>
         <div>
         <p id="earn-p">EARNINGS</p>
         <p id="earn-v">97.5 $</p>
         </div>
       </div>
       <div id="ref">
         <img src="icons/referrals.png"/>
         <hr>
         <div>
         <p id="ref-p">REFERRAL EARNINGS</p>
         <p id="ref-v">49.07 $</p>
         </div>
       </div>
       <div id="cpm">
         <img src="icons/cpm.png"/>
         <hr>
         <div>
         <p id="cpm-p">AVERAGE CPM</p>
         <p id="cpm-v">49.07 $</p>
         </div>
       </div>
     </div>
   </div>
  <script src="main.js"></script>
</body>
</html>

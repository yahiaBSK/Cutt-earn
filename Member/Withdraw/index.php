<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="theme-color" content="rgba(37, 145, 255, 1)"/>
  <link rel="stylesheet" href="style.css">
    <title>WITHDRAW</title>
    <title></title>
</head>

<body>
  <?php include('../../General style/General.php')?>
<div class="page-container">
  <div class="total-info">
    <div id="div1">
      <div id="icons-div"><img src="icons/total-withdraw.png" id="total-withdraw-icon"/></div>
      <span>TOTAL BALANCE  </span>
      <p>700 $</p>
      <hr>
    </div>
    <div id="div2">
      <div id="icons-div"><img src="icons/referrals.png" id="referrals-icon"/></div>
      <span>REFERRAL FUNDS</span>
      <p>50 $</p>
      <hr>
    </div>
    <div id="div3">
      <div id="icons-div"><img src="icons/pending.png" id="pending-icon"/></div>
      <span>PENDING WITHDRAWS</span>
      <p>120 $</p>
      <hr>
    </div>
  </div>
  <div class="select-methods">
    <span>Select payment methods</span>
    <select id="select">
    <option value="none">Choose</option>
    <option value="paypal">Paypal</option>
    <option value="payeen">payeer</option>
    <option value="payoneer">payoneer</option>
    <option value="webmoney">webmoney</option>
    </select>
    <span></span>
    <input type="text" placeholder="Input your Withdrawal Account" id="withdraw-account"/>
 </div>
    <div class="note">
      <span>Note!</span>
      <p>• For PayPal, Payeer and Airtm: add your email address. <br>
• For Bitcoin: add your wallet address.<br>
• For Amazon Gift Card: add the email address where you want to receive the gift code.</p>
    </div>
    <div class="submit-div">
      <img src="icons/send.png"/>
      <button type="submit">WITHDRAW</button>
    </div>
    <div class="note2">
      <span>Note2!</span>
      <p> When your account reaches the minimum amount of withdraw or more, you may request your earnings by clicking the withdraw button.<br>Payment requests are checked and processed weekly every Wednesday with a 3% fee. <br>Please do not contact us regarding payments before the due dates.</p>
    </div>
    
</div>



</body>
<script src="main.js"></script>
</html>
<?php
session_start();









// connect to database 

@$conn = mysqli_connect('sql110.epizy.com','epiz_29037114','2usCB7xFaYk3','epiz_29037114_loginDB');
if (!$conn) {
  echo("<h2 style='color:red'>Connection to db error".mysqli_connect_error($conn)."</h2>");
}









// check the information

$submit = $_POST['submit'];
$email = $_POST['email'];
$password = $_POST['password'];

if (isset($_POST['submit'])) {

@$check = mysqli_query($conn,"SELECT * FROM loginTB WHERE email='$email' AND password='$password'");
@$conn_check = mysqli_fetch_row($check);
if ($conn_check==true) {
  $_SESSION['id'] = 'succed';
  $_SESSION['email'] = $email;
 echo("<script>window.location.href='../Member'</script>");
 
}else{
  echo("<div class='error-login-notice'>Wrong email or password !</div>");
}
}







// on logout 

if ($_GET['logout']) {
  session_start();
  unset($_SESSION['id']);
  session_destroy();
  echo("<script>window.location.href='../index.php'</script>");
}








// get information from database For the login

$session = $_SESSION['email'];
@$b = mysqli_query($conn, "SELECT * FROM loginTB WHERE email='$session'");
@$b_f = mysqli_fetch_array($b);

$balance = $b_f['balance'];
$today = $b_f['today'];
$id = $b_f['id'];
$email_f = $b_f['email'];











// change the name of the account

if (isset($_POST['done-edit'])) {
  $changedName = $_POST['edit-name'];
  $changeName = mysqli_query($conn, "UPDATE loginTB set email='$changedName' WHERE id='$id'");
  if ($changeName) {
    echo("<h1 style='color:green'>done</h1>");
  }else{
    echo("<h1 style='color:red'>ERROR</h1>"); 
    
  }
}





?>


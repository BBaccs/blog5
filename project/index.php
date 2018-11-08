<?php
//start session
session_start();
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">
    <link rel="stylesheet" href="css/custom.css">
    <title>Form</title>
  </head>

<body>
<nav>
  <ul>
    <li><a href="index.php">Home </a></li>
    <li><a href="protected-page.php">Protected Page </a></li>
    <li><a href="#">Contact </a></li>
    <li><a href="logout.php">Log Out</a></li>
  </ul>
</nav>

<?php

if(isset($_SESSION['isLoggedIn'])) {
  //The user logged in - don't show the form

  echo "<p>You're logged in friend, no form for u!</p>";
} else {
  //using heredoc, to echo out the form.

$theForm = <<<THEFORM

  <p>Welcome to my PHP Login Form!</p>
  <h2>Please enter your username and password to log in:</h2>

  <form method="POST" action="http://project.test/form-response.php">
   <input type="text" name="userName" id="username">
   <input type="password" name="password">
    <input type="submit">
  </form>

THEFORM;
echo $theForm;
}
?>


<?php 
//using the querystring to send messages back to this login page.

$isBlock = $_GET["isBlock"];
$badUserCredentials = $_GET["badUserCredentials"];

if(isset($isBlock)) {
  echo "<h2>You need to log in buddy!</h2>";
  echo "<script>document.getElementById('username').focus();</script>";
} else if($badUserCredentials) {
  echo "<h2>User name OR password if wrong friend!</h2>";
  echo "<script>document.getElementById('username').focus();</script>";
}

?>


  </body>
</html>

















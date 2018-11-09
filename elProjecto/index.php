<?php
// Start the session
session_start();

?>


<!DOCTYPE html>
<html>
	<head>
	   	<title>index!</title>
      <link href='http://fonts.googleapis.com/css?family=Calligraffitti' rel='stylesheet' type='text/css'>
      <link rel="stylesheet" type="text/css" href="css/custom.css">
  </head>

<body>

<nav>
    <ul>
    <li><a href="index.php">Home</a></li>
    <li><a href="protected-page.php">Protected page</a></li>
    <li><a href="#">Contact</a></li>
    <li><a href="logout.php">Log Out</a></li>
  </ul>
</nav>



<main>


<?php

if(isset($_SESSION['isLoggedIn'])) {

    //The user logged in - don't show form and confuse the poor guy!

  echo "<p>You are already logged in buddy!</p>";

} else {


// Using Heredoc, to echo out the form. 
$theForm = <<<THEFORM


  <p>Welcome to WheatBook!</p>
  <h2>Please enter your user name and password to log in:</h2>

  <form method='post' action='response.php'>
      <input type='text' name='userName' id='username'>
      <input type='password' name='password'>
      <input type='submit'>

  </form>


THEFORM;

echo $theForm;
}



    // using the querystring to send messages back to this login page.

    $isBlock =  $_GET["isBlock"];
    $badUserCredentials = $_GET["badUserCredentials"];

    if(isset($isBlock)) {

      echo "<h2>Ah, ah, aaaaah ... you need to log in buddy!</h2>";
      echo "<script>document.getElementById('username').focus();</script>";

    } else if($badUserCredentials) {

      echo "<h2>User name OR password is wrong buddy!</h2>";
      echo "<script>document.getElementById('username').focus();</script>";

    }


  ?>


</main>

	</body>
</html>
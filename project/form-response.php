<?php
session_start();


//check to see if they put the right username.



$userName = $_POST["userName"];

if(trim($userName) == "Jimmy") {

  $_SESSION['isLoggedIn'] = true;
  header('Location: protected-page.php');
} else {
  header('Location: ?badUserCredentials=true');
}





?>

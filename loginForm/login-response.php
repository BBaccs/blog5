<?php

session_start();



$userName = $_POST["userName"];

if (trim($userName) == "Jimmy") {
    $_SESSION['isLoggedIn'] = true;
    header('Location: protected-page.php');
} else {
  header('Location: index?BC=true.php');
}



//We would prolly need a database but without one here is how we could do password
//if (trim($userName) == "Jimmy") && ($passWord) == "secret" {
  //$_SESSION['isLoggedIn'] = true;
  //header('Location: protected-page.php');
//} else {
  //header('Location: index?BC=true.php');
//}



?>
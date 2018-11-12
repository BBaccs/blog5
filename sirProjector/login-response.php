<?php

session_start();

$userName = $_POST["userName"];

if(trim($userName) == "Jimmy") {

    $_SESSION['isLoggedIn'] = true;
    header('Location: protected-page.php');

  } else {

    header('Location: index?badUserCredentials=true.php');
  }
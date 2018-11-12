<?php

session_start();


$userName = $_POST["userName"];

if (trim($userName) == "Jimmy") {
    $_SESSION['isLoggedIn'] = true;
    header('location: protected-page.php');

} else {
    header('location: index?TUC=true.php');
}






// $userName = $_POST["userName"];

// if (trim($userName = "Jimmy")) {
//     $_SESSION['isLoggedIn'] = true;
//     header('location: protected-page.php');

// } else {
//     header('location: index?TUC=true.php');
// }

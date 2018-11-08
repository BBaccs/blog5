<?php
session_start();

session_unset();

session_destroy();




  // using the querystring to send messages back to this login page.
  $isBlock = $_GET["isBlock"];
  $badUserCredentials = $_GET["badUserCredentials"];

  if(isset($isBlock)) {

    echo "<h2>You need log in friend</h2>";
    echo "<script>document.getElementById('username').focus();</script>";
  } else if($badUserCredentials) {
    echo "<h2>User name OR PW is wrong friend</h2>";
    echo "<h2><script>document.getElementById('username').focus();</script></h2>";

  }

?>



// $userName = $_POST["userName"];

// if(trim($userName) == "Jimmy@gmail.com") {
//   $_SESSION['isLoggedIn'] = true;
//   header('Location: protected-page.php');
// } else {
//   header('Location: login.php?badUserCredentials=true');
// }


// formr response]
// \




// index is below
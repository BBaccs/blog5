<?php

session_start();

if(isset($_SESSION['isLoggedIn'])) {
   
} else {
    header('Location: index.php?isBlock=true');
    echo '<p>Return to the form my dude...</p>';
}

?>


<!DOCTYPE html>
<html>

	<title>protected page!</title>
  <link href='http://fonts.googleapis.com/css?family=Calligraffitti' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" type="text/css" href="css/custom.css">
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

    <p>You are now viewing members only content! Aren't you special!</p>

  </main>

	</body>
</html>
<?php
session_start();

session_unset();

session_destroy();

?>


<!DOCTYPE html>
<html>
	
<title>Logout page.</title>
<link href='http://fonts.googleapis.com/css?family=Calligraffitti' rel='stylesheet' type='text/css'>

<body>

<nav>
  <ul>
    <li><a href="index.php">Home </a></li>
    <li><a href="protected-page.php">Protected Page </a></li>
    <li><a href="#">Contact </a></li>
    <li><a href="logout.php">Log Out</a></li>
  </ul>
</nav>


  <main>

    <p>You have been logged out!</p>

  </main>

	</body>
</html>
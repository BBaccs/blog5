<?php
session_start();

session_unset();

session_destroy();

?>


<!DOCTYPE html>
<html>
	
<title>Logout page.</title>
<link href='http://fonts.googleapis.com/css?family=Calligraffitti' rel='stylesheet' type='text/css'>
<link rel="stylesheet" type="text/css" href="ch12-styles.css">

<body>

  <nav>
      <ul>
      <li><a href="ch12-login.php">Home</a></li>
      <li><a href="ch12-protected-page.php">Protected page</a></li>
      <li><a href="#">Contact</a></li>
      <li><a href="ch12-logout.php">Log Out</a></li>
    </ul>
  </nav>


  <main>

    <p>You have been logged out!</p>

  </main>

	</body>
</html>
<?php
// Start the session
session_start();

// remove all session variables
session_unset(); 

// destroy the session 
session_destroy(); 

?>


<!DOCTYPE html>
<html>
	
	<title>logout!</title>
  <link href='http://fonts.googleapis.com/css?family=Calligraffitti' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" type="text/css" href="custom.css">

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

    <p>You have been logged out!</p>

  </main>

	</body>
</html>
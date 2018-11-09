<?php
// Start the session
session_start();

// this could have code put into an include so you can password protect any page you want to. 

// check session to see if they logged in:

if(isset($_SESSION['isLoggedIn'])) {

    //do nothing, the user logged in.

} else {

  header('Location: index.php?isBlock=true');

}

?>


<!DOCTYPE html>
<html>

	<title>protected page!</title>
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

    <p>You are now viewing members only content! Aren't you special!</p>

  </main>

	</body>
</html>
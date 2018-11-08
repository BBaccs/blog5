<?php
session_start();

//check to see if they logged in
if(isset($_SESSION['isLoggedIn'])) {
  //do nothing the user is already logged in
} else {
  header('Location: index.php?isblock=true');
}

?>

<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Protected Page!</title>
</head>
<body>

<nav>
  <ul>
    <li><a href="index.php">Home </a></li>
    <li><a href="protected-page.php">Protected Page </a></li>
    <li><a href="#">Contact </a></li>
    <li><a href="logout.php">Log Out</a></li>
  </ul>
</nav>

<h1>You're viewing the members only page pal!</h1>


  
</body>
</html>
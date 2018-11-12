<?php

session_start();


?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login Page</title>
</head>
<body>

<nav>
    <ul>
      <li><a href="index.php">Home</a></li>
      <li><a href="protected-page.php">Protected page</a></li>
      <li><a href="#">Contact</a></li>
      <li><a href="logout.php">Log Out</a></li>
    </ul>
</nav>


<?php

if(isset($_SESSION['isLoggedIn'])) {
    echo "<p>You're already loged in my dood!</p>";
} else {
    

$theform = <<<BBACCSFORM
    <h1>Round 2 Vanilla PHP Login</h1>
    <h1>Enter name and PW Below</h1>  
    <form method='post' action='login-response.php'>
    <input name='userName' id='username' type='text'>
    <input name='password' type='password'>
    <input type='submit'>
    </form>

BBACCSFORM;
echo $theform;
}
?>


<?php

$isBlock = $_GET["isBlock"];
$badUserCredentials = $_GET["badUserCredentials"];

if(isset($isBlock)) {
    echo "<h1>plz login</h1>";
    echo "<script>document.getElementById('username').focus();</script>";
} else if($basUserCredentials) {
    echo "<h2>Username/PW wrong</h2>";
    echo "<script>document.getElementById('username').focus();</script>";
}


?>
</body>
</html>
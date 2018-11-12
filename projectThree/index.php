<?php

session_start();

?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
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
    echo "<p>logged in</p>";
} else {
    
$theForm = <<<HEREDOC


<form method="post" action="protected-page.php">
    <input name="userName" id="username" type="text" placeholder="name">
    <input name="password" type="password" placeholder="password">
    <input type="submit">
</form>

HEREDOC;

echo $theForm;
}
?>

<?php

$isBlocked = $_GET['IB'];
$terribleUserCredents = $_GET['TUC'];

if ($isBlocked = true ) {
    echo "<p>sign in you is blocked</p>";
} else if ($terribleUserCredents = true) {
    echo "<p>terirble user credentials enter a new username (hint it's Jimmy)</p>";
}


?>

    
</body>
</html>
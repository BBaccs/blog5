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
    <li><a href="index.php">Home</a></li>
    <li><a href="protected-page.php">Protected Page</a></li>
    <li><a href="logout.php">Logout</a></li>
</nav>

<?php

if (isset($_SESSION['isLoggedIn'])) {

    echo "<p>youre in my doood</p>";
    
} else {

$theForm = <<<HEREDOC

    <form method="post" action="login-response.php">
        <input name="userName" id="username" type="text">
        <input type="password">
        <input type="submit">
    </form>


HEREDOC;

echo $theForm;
echo "You must sign in my dude!";
}
?>
<?php

$badCredentials = $_GET["BC"];
$noCredentials = $_GET["NC"];

if (isset($badCredentials)) {
    echo "<p>bad credentials my g</p>";
} else if($noCredentials) {  //why no isset(); here?
    echo "<p>no credentials, must sign in g</p>";
}


?>


</body>
</html>
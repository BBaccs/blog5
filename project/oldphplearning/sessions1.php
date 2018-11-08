<?php
// Start session
session_start();
?>

<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>INDEX</title>

    </head>



    <body>
        <?php

            // Set session var's

            $_SESSION["favcolor"] = "green";
            $_SESSION["favanimal"] = "cat";
            echo "Sessions are set" . ".<br>";
            echo "Favorite color is " . $_SESSION["favcolor"] . ".<br>";
            echo "favorite aniaml is " . $_SESSION["favanimal"] . ".";  
            
            print_r($_SESSION); 
            echo "<br>"


        ?>

        <a href="http://project.test/yy.php">click me</a>
   
    </body>
</html>

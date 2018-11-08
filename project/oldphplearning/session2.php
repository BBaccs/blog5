<?php
// Start session
session_start();
?>


<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <title>YY</title>

    </head>



    <body>
        <?php
//echo session var's that were set on previous page:

echo "Favorite color is " . $_SESSION["favcolor"] . ".<br>";
echo "favorite aniaml is " . $_SESSION["favanimal"] . ".";      

        ?>

 

    </body>
</html>

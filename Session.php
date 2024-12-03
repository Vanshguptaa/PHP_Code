<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
   
</head>
<body>
    <?php
    $_SESSION["favcolor"] = "green";
    $_SESSION["favanimal"] = "Dog";
    $_SESSION["favfruit"]="mango";
    echo "Session variables are set.";
    echo"<br>";
    echo "Favourite color is " . $_SESSION["favcolor"] . ".<br>";
    echo "Favourite animal is " . $_SESSION["favanimal"] . ".<br>";
    echo "Favourite fruit is " . $_SESSION["favfruit"] . ".<br>";
    print_r($_SESSION);
    
    //delete session variable
    ?>
</body>
</html>
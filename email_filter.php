<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="" method="post">
    Enter the Email: <input type="email" name="email" required>
    <input type="submit" value="Submit">
</form>
<?php


if($_SERVER["REQUEST_METHOD"] == "POST"){
    $email = $_POST['email'];
    if(filter_var($email, FILTER_VALIDATE_EMAIL)){
        echo "The email is valid";
    } else {
        echo "The email is not valid";
    }
}


?>

    
</body>
</html>
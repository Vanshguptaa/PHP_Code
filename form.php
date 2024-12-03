<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="form.php" method="POST">
        <label for="">Username : </label>
        <input type="text" name="username"><br><br><hr>
        <label for="" >Password : </label>
        <input type="password" name="password"><br><br><hr>
        <label for="">Email :   </label>
        <input type="email" name="email"><br><br><hr>
        <input type="submit" name="submit"><br><br><hr>
    </form> -->


    
<?php

$username = $_POST["fname"];
$userlname = $_POST["lname"];
$email = $_POST["email"];
$phone = $_POST["phone"];
$skills = isset($_POST['skills']) ? $_POST['skills'] : [];

echo "<h1>Form Submission</h1>";
echo "Name: {$username} <br>";
echo "Last Name: {$userlname} <br>";
echo "Email: {$email} <br>";
echo "Phone: {$phone} <br>";
echo "Skills: " . implode(', ', $skills) . "<br>";

?>
</body>
</html>
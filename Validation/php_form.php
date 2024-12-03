<?php include 'connection.php';?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
   
    
   
</head>
<body>
  <form method="POST">
    <label for="Name"></label>
    <input type="text" id="Name" name="Name" placeholder="Your Name.."><br>
    <label for="Institute"></label>
    <input type="text" id="Institute" name="Institute" placeholder="Your Institute.."><br>
    <label for="Email"></label>
    <input type="text" id="Email" name="Email" placeholder="Your Email.."><br>
    <label for="Organization"></label>
    <input type="text" id="Organization" name="Organization" placeholder="Your Organization.."><br>
    <input type="submit" name="save_btn" value="Save">
    <button> <a href="view.php">View</a></button>

  </form>
  <?php
    if(isset($_POST['save_btn'])){
        $Name=$_POST['Name'];
        $Institute=$_POST['Institute'];
        $Email=$_POST['Email'];
        $Organization=$_POST['Organization'];
        $sql="INSERT INTO Information (Name,Institute,Email,Organization) VALUES ('$Name','$Institute','$Email','$Organization')";
        $result=mysqli_query($conn,$sql);
        if($result){
            echo "Data inserted";
        }
        else{
            echo "Data not inserted";
        }

    }


?>
</body>
</html>
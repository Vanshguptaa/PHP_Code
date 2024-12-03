<?php include 'connection.php';?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
   
    <style>

        h2{
            text-align: center;
        }
        form{
            margin: 0 auto;
            width: 50%;
            border: 1px solid black;
            padding: 10px;
            margin-top: 50px;
        }
        input{
            width: 100%;
            padding: 10px;
            margin: 10px;
        }

        button{
            width: 100%;
            padding: 10px;
            margin: 10px;
        }
        

    </style>
    
   
</head>
<body>
    <h2>Irrigation Labor Registration </h2>
  <form method="POST">
    <label for="Name">Candidate Name: </label>
    <input type="text" id="Name" name="Name" placeholder="Your Name.."><br>
    <label for="Email">Email:</label>
    <input type="text" id="Email" name="Email" placeholder="Your Email.."><br>
    <label for="Age">Age: </label>
    <input type="number" id="Age" name="Age" placeholder="Enter Your Age"><br>
    <input type="submit" name="save_btn" value="Save">
    <button> <a href="view.php">View</a></button>

  </form>
  <?php
    if(isset($_POST['save_btn'])){
        $Name=$_POST['Name'];
        $Email=$_POST['Email'];
        $Age=$_POST['Age'];
        $sql="INSERT INTO Labor (Name,Email,Age) VALUES ('$Name','$Email','$Age')";
        $result=mysqli_query($conn,$sql);
        if($result){
            echo "Data inserted";
        }
        else{
            echo "Data not inserted";
        }

    }?>
</body>
</html>